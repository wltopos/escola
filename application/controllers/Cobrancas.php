<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cobrancas extends MY_Controller
{

    /**
     * author: Ramon Silva
     * email: silva018-mg@yahoo.com.br
     *
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('setdb_model');
        $this->load->model('setquery_model');
        $this->load->model('cobrancas_model');
        $this->data['menuCobrancas'] = 'financeiro';
    }

    public function index()
    {
        $this->cobrancas();
    }

    public function getCobrancas()
    {
       
        $this->data['results'] = $this->setdb_model->getTabelaQ('comercial_cobrancas', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $c ='';  $a = ''; $c =''; $v = ''; $e = ''; $vb =''; $ex = '';
        foreach ($this->data['results'] as $cobranca) {

            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCobranca')) {
                $c = '<a style="margin-right: 1%" href="#modal-cancelar" role="button" data-toggle="modal" cancela_id="' . $cobranca->id_comercial_cobranca . '" class="btn-nwe4" title="Cancelar Cobrança"><i class="bx bx-x" ></i></a>';
                $a = '<a style="margin-right: 1%" href="' . base_url() . 'index.php/cobrancas/atualizar/' . $cobranca->id_comercial_cobranca . '" class="btn-nwe" title="Atualizar Cobrança"><i class="bx bx-refresh"></i></a>';
                $c = '<a style="margin-right: 1%" href="#modal-confirmar" role="button" data-toggle="modal" confirma_id="' . $cobranca->id_comercial_cobranca . '" class="btn-nwe3" title="Confirmar pagamento"><i class="bx bx-check"></i></a>';
                $v = '<a style="margin-right: 1%" href="' . base_url() . 'index.php/cobrancas/visualizar/' . $cobranca->id_comercial_cobranca . '" class="btn-nwe2" title="Ver mais detalhes"><i class="bx bx-show" ></i></a>';
                $e = '<a style="margin-right: 1%" href="' . base_url() . 'index.php/cobrancas/enviarEmail/' . $cobranca->id_comercial_cobranca . '" class="btn-nwe5" title="Enviar por E-mail"><i class="bx bx-envelope" ></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eCobranca') && $cobranca->barcode != '') {
                $vb =  '<a style="margin-right: 1%" href="' . $cobranca->link . '" target="_blank" class="btn-nwe" title="Visualizar boleto"><i class="bx bx-barcode" ></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dCobranca')) {
                $ex = '<a href="#modal-excluir" role="button" data-toggle="modal" excluir_id="' . $cobranca->id_comercial_cobranca . '" class="btn-nwe4" title="Excluir Cobrança"><i class="bx bx-trash-alt"></i></a>';
            }


            $result[] = [
                $cobranca->id_comercial_cobranca,
                $cobranca->payment_gateway,
                $cobranca->payment_method,
                $cobranca->expire_at,
                $cobranca->charge_id,
                ($cobranca->status === 'approved'?'Pago':'Pendente'),
                'R$'.number_format($cobranca->total / 100, 2, ',', '.'),
                "$c $a $c $v $e $vb $ex",
            ];
        }

        if(!isset($result)){
            $result = 0;
          
           };

        $cobrancas = [
            'data' => $result
        ];

        echo json_encode($cobrancas);
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aCobranca')) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(403)
                ->set_output(json_encode(['message' => 'Você não tem permissão para adicionar cobrança!']));
        }

        $this->load->library('form_validation');
        if ($this->form_validation->run('cobrancas') == false) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode(['message' => validation_errors()]));
        } else {
            $id = $this->input->post('id');
            $tipo = $this->input->post('tipo');
            $formaPagamento = $this->input->post('forma_pagamento');
            $gatewayDePagamento = $this->input->post('gateway_de_pagamento');

           
            $cobranca = $tipo === 'os'
                ? $this->setdb_model->getTabelaQID('comercial_os_clientes',$this->setquery_model->getFields('osClientes_clientes_lancamentos_cobrancas'), 'id_comercial_os_cliente='.$this->input->post('id'), $this->setquery_model->getJoin('osClientes_clientes_lancamentos_cobrancas'))
                : $this->setdb_model->getTabelaQID('comercial_vendas',$this->setquery_model->getFields('vendas_clientes_lancamentos_cobrancas'), 'id_comercial_venda='.$this->input->post('id'), $this->setquery_model->getJoin('vendas_clientes_lancamentos_cobrancas'));
            if ($cobranca) {
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(400)
                    ->set_output(json_encode(['message' => 'Já existe cobrança!']));
            }

            $this->load->library("Gateways/$gatewayDePagamento", null, 'PaymentGateway');

            try {
                $cobranca = $this->PaymentGateway->gerarCobranca(
                    $id,
                    $tipo,
                    $formaPagamento
                );

                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(200)
                    ->set_output(json_encode($cobranca));
            } catch (\Exception $e) {
                $expMsg = $e->getMessage();
                if ($expMsg == 'unauthorized: Must provide your access_token to proceed' || $expMsg == 'Unauthorized') {
                    $expMsg = 'Por favor configurar os dados da API em Config/payment_gatways.php';
                }
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(500)
                    ->set_output(json_encode(['message' => $expMsg]));
            }
        }
    }

    public function cobrancas()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vCobranca')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar cobrancas.');
            redirect(base_url());
        }

        $this->load->library('pagination');
        $this->load->config('payment_gateways');

        $this->data['configuration']['base_url'] = site_url('cobrancas/cobrancas/');
        $this->data['configuration']['total_rows'] = $this->setdb_model->count('comercial_cobrancas');

        $this->pagination->initialize($this->data['configuration']);

       

        $this->data['view'] = 'cobrancas/cobrancas';

        return $this->layout();
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dCobranca')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir cobranças');
            redirect(site_url('cobrancas/cobrancas/'));
        }
        try {
            $this->cobrancas_model->cancelarPagamento($this->input->post('excluir_id'));

            if ($this->setdb_model->delete('comercial_cobrancas', 'id_comercial_cobranca', $this->input->post('excluir_id')) == true) {
                log_info('Removeu uma cobrança. ID' . $this->input->post('excluir_id'));
                $this->session->set_flashdata('success', 'Cobrança excluida com sucesso!');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        } catch (Exception $e) {
            $this->session->set_flashdata('error', $e->getMessage());
        }
        redirect(site_url('cobrancas/cobrancas/'));
    }

    public function atualizar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eCobranca')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para atualizar cobrança.');
            redirect(base_url());
        }
        try {
            $this->load->model('cobrancas_model');
            $this->cobrancas_model->atualizarStatus($this->uri->segment(3));
        } catch (Exception $e) {
            $this->session->set_flashdata('error', $e->getMessage());
        }
        redirect(site_url('cobrancas/cobrancas/'));
    }

    public function confirmarPagamento()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eCobranca')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para confirmar pagamento da cobrança.');
            redirect(base_url());
        }
        try {
            $this->load->model('cobrancas_model');
            $this->cobrancas_model->confirmarPagamento($this->input->post('confirma_id'));
        } catch (Exception $e) {
            $this->session->set_flashdata('error', $e->getMessage());
        }
        redirect(site_url('cobrancas/cobrancas/'));
    }

    public function cancelar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eCobranca')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para cancelar cobrança.');
            redirect(base_url());
        }
        try {
            $this->load->model('cobrancas_model');
            $this->cobrancas_model->cancelarPagamento($this->input->post('cancela_id'));
        } catch (Exception $e) {
            $this->session->set_flashdata('error', $e->getMessage());
        }
        redirect(site_url('cobrancas/cobrancas/'));
    }

    public function visualizar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('cobrancas');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vCobranca')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar cobranças.');
            redirect(base_url());
        }

        $this->load->model('cobrancas_model');
        $this->load->config('payment_gateways');

        $this->vendasFields = $this->setquery_model->getFields('clientes_cobrancas');
        $this->vendasJoin   = $this->setquery_model->getJoin('clientes_cobrancas');

        $this->data['result'] = $this->setdb_model->getTabelaQID('comercial_cobrancas', $this->vendasFields, 'id_comercial_cobranca='.$this->uri->segment(3), $this->vendasJoin);;
        if ($this->data['result'] == null) {
            $this->session->set_flashdata('error', 'Cobrança não encontrada.');
            redirect(site_url('cobrancas/'));
        }

        $this->data['view'] = 'cobrancas/visualizarCobranca';

        return $this->layout();
    }

    public function enviarEmail()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('cobrancas');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vCobranca')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar cobranças.');
            redirect(base_url());
        }

        $this->load->model('cobrancas_model');
        $this->cobrancas_model->enviarEmail($this->uri->segment(3));
        $this->session->set_flashdata('success', 'Email adicionado na fila.');

        redirect(site_url('cobrancas/cobrancas/'));
    }
}
