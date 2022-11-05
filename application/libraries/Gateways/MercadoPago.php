<?php

use Libraries\Gateways\BasePaymentGateway;
use Libraries\Gateways\Contracts\PaymentGateway;
use MercadoPago\Payment;
use MercadoPago\SDK;

class MercadoPago extends BasePaymentGateway
{
    /** @var SDK $mercadoPagoApi */
    private $mercadoPagoApi;

    private $mercadoPagoConfig;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->config('payment_gateways');
        $this->ci->load->model('setdb_model');
        $this->ci->load->model('setquery_model');
        $this->ci->load->model('financeiro_model');
        $this->ci->load->model('cobrancas_model');
        $this->ci->load->model('mapos_model');
        $this->ci->load->model('email_model');

        $mercadoPagoConfig = $this->ci->config->item('payment_gateways')['MercadoPago'];
        $this->mercadoPagoConfig = $mercadoPagoConfig;

        $mercadoPagoApi = new SDK();
        $mercadoPagoApi->setAccessToken($mercadoPagoConfig['credentials']['access_token']);
        $mercadoPagoApi->setPublicKey($mercadoPagoConfig['credentials']['public_key']);
        $mercadoPagoApi->setClientSecret($mercadoPagoConfig['credentials']['client_secret']);
        $mercadoPagoApi->setClientId($mercadoPagoConfig['credentials']['client_id']);
        $mercadoPagoApi->setIntegratorId($mercadoPagoConfig['credentials']['integrator_id']);
        $mercadoPagoApi->setPlatformId($mercadoPagoConfig['credentials']['platform_id']);
        $mercadoPagoApi->setCorporationId($mercadoPagoConfig['credentials']['corporation_id']);

        $this->mercadoPagoApi = $mercadoPagoApi;
    }

    public function cancelar($id)
    {
        $cobranca = $this->ci->cobrancas_model->getById($id);
        if (!$cobranca) {
            throw new \Exception('Cobrança não existe!');
        }

        $payment = Payment::find_by_id($cobranca->charge_id);
        if ($payment->Error()) {
            throw new \Exception($payment->Error());
        }

        $payment->status = 'cancelled';
        $payment->update();
        if ($payment->Error()) {
            throw new \Exception($payment->Error());
        }

        return $this->atualizarDados($id);
    }

    public function enviarPorEmail($id)
    {
        $cobranca = $this->ci->cobrancas_model->getById($id);
        if (!$cobranca) {
            throw new \Exception('Cobrança não existe!');
        }

        $emitente = $this->ci->mapos_model->getEmitente();
        if (!$emitente) {
            throw new \Exception('Emitente não configurado!');
        }

        $html = $this->ci->load->view(
            'cobrancas/emails/cobranca',
            [
                'cobranca' => $cobranca,
                'emitente' => $emitente[0],
                'paymentGatewaysConfig' => $this->ci->config->item('payment_gateways'),
            ],
            true
        );

        $assunto = "Cobrança - " . $emitente[0]->nome;
        if ($cobranca->os_id) {
            $assunto .= ' - OS #' . $cobranca->os_id;
        } else {
            $assunto .= ' - Venda #' . $cobranca->vendas_id;
        }

        $remetentes = [$cobranca->email];
        foreach ($remetentes as $remetente) {
            $headers = [
                'From' => $emitente[0]->email,
                'Subject' => $assunto,
                'Return-Path' => ''
            ];
            $email = [
                'to' => $remetente,
                'message' => $html,
                'status' => 'pending',
                'date' => date('Y-m-d H:i:s'),
                'headers' => serialize($headers),
            ];
            $this->ci->email_model->add('email_queue', $email);
        }
    }

    public function atualizarDados($id)
    {
        $cobranca = $this->ci->cobrancas_model->getById($id);
        if (!$cobranca) {
            throw new \Exception('Cobrança não existe!');
        }

        $payment = Payment::find_by_id($cobranca->charge_id);
        if ($payment->Error()) {
            throw new \Exception($payment->Error());
        }

        // Cobrança foi paga ou foi confirmada de forma manual, então damos baixa
        if ($payment->status === 'approved') {
            // TODO: dar baixa no lançamento caso exista
        }

        $databaseResult = $this->ci->setdb_model->edit(
            'comercial_cobrancas',
            [
                'status' => $payment->status
            ],
            'id_comercial_cobranca',
            $id
        );

        if ($databaseResult == true) {
            $this->ci->session->set_flashdata('success', 'Cobrança atualizada com sucesso!');
            log_info('Alterou um status de cobrança. ID' . $id);
        } else {
            $this->ci->session->set_flashdata('error', 'Erro ao atualizar cobrança!');
            throw new \Exception('Erro ao atualizar cobrança!');
        }
    }

    public function confirmarPagamento($id)
    {
        $cobranca = $this->ci->cobrancas_model->getById($id);
        if (!$cobranca) {
            throw new \Exception('Cobrança não existe!');
        }

        $payment = Payment::find_by_id($cobranca->charge_id);
        if ($payment->Error()) {
            throw new \Exception($payment->Error());
        }

        $payment->capture();
        if ($payment->Error()) {
            throw new \Exception($payment->Error());
        }

        return $this->atualizarDados($id);
    }

    protected function gerarCobrancaBoleto($id, $tipo)
    {
        $entity = $this->findEntity($id, $tipo);
        $produtos = $tipo === PaymentGateway::PAYMENT_TYPE_OS
            ? $this->ci->setdb_model->getTabelaQ('estoque_produtos', $this->ci->setquery_model->getFields('produtosID_os'), 'estoque_produtos.id_estoque_produtos='.$id, $this->ci->setquery_model->getJoin('produtosID_os'))
            : $this->ci->setdb_model->getTabelaQ('comercial_itens_de_vendas', $this->ci->setquery_model->getFields('itens_de_vendas'), "comercial_itens_de_vendas.comercial_venda_id=$id", $this->ci->setquery_model->getJoin('itens_de_vendas'));
        $servicos = $tipo === PaymentGateway::PAYMENT_TYPE_OS
            ? $this->ci->Os_model->getServicos($id)
            : [];
        $desconto = [$tipo === PaymentGateway::PAYMENT_TYPE_OS
            ? $this->ci->financeiro_model->getOSID_cobranca($id)
            : $this->ci->financeiro_model->getVendasId_cobranca($id)];

        $totalProdutos = array_reduce(
            $produtos,
            function ($total, $item) {
                return $total + (floatval($item->preco) );
            },
            0
        );
       
        $totalServicos = array_reduce(
            $servicos,
            function ($total, $item) {
                return $total + (floatval($item->preco) );
            },
            0
        );
        $totalDesconto = array_reduce(
            $desconto,
            function ($total, $item) {
                return $item->valor_ajuste;
            },
            0
        );

        if (empty($entity)) {
            throw new \Exception('OS ou venda não existe!');
        }

        if (($totalProdutos + $totalServicos) <= 0) {
            throw new \Exception('OS ou venda com valor negativo ou zero!');
        }

        if ($err = $this->errosCadastro($entity)) {
            throw new \Exception($err);
        }

        $clientNameParts = explode(' ', $entity->nomeCliente);
        $documento = preg_replace('/[^0-9]/', '', $entity->documento);
        $expirationDate = (new DateTime())->add(new DateInterval($this->mercadoPagoConfig['boleto_expiration']));
        $expirationDate = ($expirationDate->format(DateTime::RFC3339_EXTENDED));

        $payment = new Payment();
        $payment->transaction_amount = floatval($this->valorTotal($totalProdutos, $totalServicos, $totalDesconto));
        $payment->description = PaymentGateway::PAYMENT_TYPE_OS ? "OS #$id" : "Venda #$id";
        $payment->payment_method_id = "pix";
        $payment->notification_url = "http://wltopos.com.br/";
        $payment->date_of_expiration = $expirationDate;
        $payment->payer = [
            'email' => $entity->email,
            'first_name' => $clientNameParts[0],
            'last_name' => $clientNameParts[count($clientNameParts) - 1],
            'identification' => [
                'type' => strlen($documento) == 11 ? 'CPF' : 'CNPJ',
                'number' => $documento
            ],
            'address' => [
                'zip_code' => preg_replace('/[^0-9]/', '', $entity->cep),
                'street_name' => $entity->rua,
                'street_number' => $entity->numero,
                'neighborhood' => $entity->bairro,
                'city' => $entity->cidade,
                'federal_unit' => $entity->estado
            ]
        ];

        $payment->save();
        if ($payment->Error()) {
            throw new \Exception($payment->Error());
        }

        $data = [
            'barcode' => $payment->point_of_interaction->transaction_data->qr_code_base64,
            'link' => $payment->point_of_interaction->transaction_data->qr_code,
            'pdf' => $payment->transaction_details->external_resource_url,
            'expire_at' => $payment->date_of_expiration,
            'charge_id' => $payment->id,
            'status' => $payment->status,
            'total' => getMoneyAsCents($this->valorTotal($totalProdutos, $totalServicos, $totalDesconto)),
            'comercial_cliente_id' => $entity->id_comercial_cliente,
            'payment_method' => 'PIX',
            'payment_gateway' => 'MercadoPago',
        ];

        if ($tipo === PaymentGateway::PAYMENT_TYPE_OS) {
            $data['comercial_os_cliente_id'] = $id;
        } else {
            $data['comercial_venda_id'] = $id;
        }

        if ($id = $this->ci->cobrancas_model->add('comercial_cobrancas', $data, true)) {
            $data['id_comercial_cobranca'] = $id;
            log_info('Cobrança criada com successo. ID: ' . $payment->id);
        } else {
            throw new \Exception('Erro ao salvar cobrança!');
        }

        return $data;
    }

    protected function gerarCobrancaLink($id, $tipo)
    {
        throw new Exception('MercadoPago não suporta gerar link pela API, somente pelo painel!');
    }

    private function valorTotal($produtosValor, $servicosValor, $desconto)
    {
        return (($produtosValor + $servicosValor) - $desconto * ($produtosValor + $servicosValor) / 100);
    }
}
