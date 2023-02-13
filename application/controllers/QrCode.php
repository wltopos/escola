<?php if (!defined('BASEPATH')) {
    exit('Pasta raiz não localizada ou inacessível');
}

class QrCode extends MY_Controller
{

    /**
     * author: Lucas Rocha
     * email: silva018-mg@yahoo.com.br
     *
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->model('notasfiscais_model');
        $this->load->model('setdb_model');
        $this->load->model('setquery_model');
        $this->data['menuQrCode'] = 'QrCode';
    }

    public function index()
    {
        $this->data['view'] = 'qrcode/index';
        return $this->layout();
    }
    
    public function xmlNFe($q)
    {

        $dataURL = $this->setdb_model->getTabelaQID('financeiro_notas', 'financeiro_notas.url', 'financeiro_notas.id_financeiro_nota=' . $q);
        $xml = simplexml_load_file($dataURL->url);

        $dataEmissaoNF     = explode('T', $xml->NFe->infNFe->children()[0]->dhEmi);
        $dataSaidaNF       = explode('T', $xml->NFe->infNFe->children()[0]->dhSaiEnt);
        $formatDataEmissao = date_create($dataEmissaoNF[0]);
        $formatDataSaida   = date_create($dataSaidaNF[0]);
        $formatHoraSaida   = date_create($dataSaidaNF[1]);
        $formatFaturaVenc  = date_create($xml->NFe->infNFe->children()[6]->dup->dVenc);


        $fone = $xml->NFe->infNFe->children()[9]->fone;

        function formata_cpf_cnpj($cpf_cnpj)
        {
            /*
                Pega qualquer CPF e CNPJ e formata
        
                CPF: 000.000.000-00
                CNPJ: 00.000.000/0000-00
                
            */

            ## Retirando tudo que não for número.
            $cpf_cnpj = preg_replace("/[^0-9]/", "", $cpf_cnpj);
            $tipo_dado = NULL;
            if (strlen($cpf_cnpj) == 11) {
                $tipo_dado = "cpf";
            }
            if (strlen($cpf_cnpj) == 14) {
                $tipo_dado = "cnpj";
            }
            switch ($tipo_dado) {
                default:
                    $cpf_cnpj_formatado = "Não foi possível definir tipo de dado";
                    break;

                case "cpf":
                    $bloco_1 = substr($cpf_cnpj, 0, 3);
                    $bloco_2 = substr($cpf_cnpj, 3, 3);
                    $bloco_3 = substr($cpf_cnpj, 6, 3);
                    $dig_verificador = substr($cpf_cnpj, -2);
                    $cpf_cnpj_formatado = $bloco_1 . "." . $bloco_2 . "." . $bloco_3 . "-" . $dig_verificador;
                    break;

                case "cnpj":
                    $bloco_1 = substr($cpf_cnpj, 0, 2);
                    $bloco_2 = substr($cpf_cnpj, 2, 3);
                    $bloco_3 = substr($cpf_cnpj, 5, 3);
                    $bloco_4 = substr($cpf_cnpj, 8, 4);
                    $digito_verificador = substr($cpf_cnpj, -2);
                    $cpf_cnpj_formatado = $bloco_1 . "." . $bloco_2 . "." . $bloco_3 . "/" . $bloco_4 . "-" . $digito_verificador;
                    break;
            }

            return $cpf_cnpj_formatado;
        }
        function Mask($mask, $str)
        {

            $str = str_replace(" ", "", $str);

            for ($i = 0; $i < strlen($str); $i++) {
                $mask[strpos($mask, "#")] = $str[$i];
            }

            return $mask;
        }
        function formatPhone($phone)
        {
            $formatedPhone = preg_replace('/[^0-9]/', '', $phone);
            $matches = [];
            preg_match('/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $formatedPhone, $matches);
            if ($matches) {
                return '(' . $matches[1] . ') ' . $matches[2] . '-' . $matches[3];
            }

            return $phone; // return number without format
        }

        function modalFrete($modal)
        {
            if ($modal == 0) {
                return '0 - Contratação do Frete por Conta do Remetente (CIF)';
            } else if ($modal == 1) {
                return '1 -  Contratação do Frete por Conta do Destinatário (FOB)';
            } else {
                return '';
            }
        }

        $this->data['dadosNFe'] = [
            'dadosFornecedor' => [
                "fornecedor"    => $xml->NFe->infNFe->children()[1]->enderEmit->xNome,
                "cnpj"          => formata_cpf_cnpj($xml->NFe->infNFe->children()[1]->CNPJ),
                "fornecedor"    => $xml->NFe->infNFe->children()[1]->xNome,
                "natureza"      => $xml->NFe->infNFe->children()[0]->natOp,
                "numeroNF"      => str_pad($xml->NFe->infNFe->children()[0]->nNF, '6', 0, STR_PAD_LEFT),
                "serie"         => $xml->NFe->infNFe->children()[0]->serie,
                "tipo"          => $xml->NFe->infNFe->children()[0]->tpNF,
                "naturezaOP"    => $xml->NFe->infNFe->children()[0]->natOp,
                "protocoloAuth" => $xml->protNFe->children()[0]->nProt,
                "ie"            => $xml->NFe->infNFe->children()[1]->IE,


                'contato' => [
                    "fone"       => formatPhone($fone),
                    "email"      => $xml->NFe->infNFe->children()[9]->email,
                ],

                "endereco" => [
                    "rua"         => $xml->NFe->infNFe->children()[1]->enderEmit->xLgr,
                    "numero"      => $xml->NFe->infNFe->children()[1]->enderEmit->nro,
                    "complemento" => $xml->NFe->infNFe->children()[1]->enderEmit->xCpl,
                    "bairro"      => $xml->NFe->infNFe->children()[1]->enderEmit->xBairro,
                    "municipio"   => $xml->NFe->infNFe->children()[1]->enderEmit->xMun,
                    "uf"          => $xml->NFe->infNFe->children()[1]->enderEmit->UF,
                    "cep"         => $xml->NFe->infNFe->children()[1]->enderEmit->CEP,
                    "ie"         => $xml->NFe->infNFe->children()[1]->ie,

                ],
            ],
            "dadosDestinatario" => [
                "destinatario" => $xml->NFe->infNFe->children()[2]->xNome,
                "documento" => formata_cpf_cnpj($xml->NFe->infNFe->children()[2]->CPF),

                "endereco" =>
                [
                    "rua"         => $xml->NFe->infNFe->children()[2]->enderDest->xLgr,
                    "numero"      => $xml->NFe->infNFe->children()[2]->enderDest->nro,
                    "complemento" => $xml->NFe->infNFe->children()[2]->enderDest->Cpl,
                    "bairro"      => $xml->NFe->infNFe->children()[2]->enderDest->xBairro,
                    "municipio"   => $xml->NFe->infNFe->children()[2]->enderDest->xMun,
                    "uf"          => $xml->NFe->infNFe->children()[2]->enderDest->UF,
                    "cep"         => Mask("#####-###", $xml->NFe->infNFe->children()[2]->enderDest->CEP),
                    "pais"        => $xml->NFe->infNFe->children()[2]->enderDest->xPais,

                ],
                "contato" => [
                    "fone"   => formatPhone($xml->NFe->infNFe->children()[2]->enderDest->fone),
                    "email"  => $xml->NFe->infNFe->children()[2]->email,
                ]
            ],
            "nfe" => [
                "protocolo"      => $xml->protNFe->children()[0]->nProt,
                "chaveNF"        => $xml->protNFe->children()[0]->chNFe,
                "dataEmissao"    => date_format($formatDataEmissao, "d/m/Y"),
                "dataSaida"      => date_format($formatDataSaida, "d/m/Y"),
                "horaSaida"      => date_format($formatHoraSaida, "H:m:s"),
            ],
            "faturas" => [
                "numero"         => $xml->NFe->infNFe->children()[6]->dup->nDup,
                "vencimento"     => date_format($formatFaturaVenc, "d/m/Y"),
                "valor"          => $xml->NFe->infNFe->children()[6]->dup->vDup,

            ],
            "imposto" => [
                "baseICMS"         => $xml->NFe->infNFe->children()[4]->ICMSTot->vBC,
                "valorICMS"        => $xml->NFe->infNFe->children()[4]->ICMSTot->vICMS,
                "valorFCPST"       => $xml->NFe->infNFe->children()[4]->ICMSTot->vFCPST,
                "valorProdutos"    => $xml->NFe->infNFe->children()[4]->ICMSTot->vProd,
                "valorFrete"       => $xml->NFe->infNFe->children()[4]->ICMSTot->vFrete,
                "valorSeguro"      => $xml->NFe->infNFe->children()[4]->ICMSTot->vSeg,
                "valorDesconto"    => $xml->NFe->infNFe->children()[4]->ICMSTot->vDesc,
                "valorOutros"      => $xml->NFe->infNFe->children()[4]->ICMSTot->vOutro,
                "valorIPI"         => $xml->NFe->infNFe->children()[4]->ICMSTot->vIPI,
                "valorNF"          => $xml->NFe->infNFe->children()[4]->ICMSTot->vNF,

            ],
            "frete" => [
                "modal"          => modalFrete($xml->NFe->infNFe->children()[5]->modFrete),
                "quantidade"     => $xml->NFe->infNFe->children()[5]->vol->qVol,
                "pesoLiquido"    => $xml->NFe->infNFe->children()[5]->vol->pesoL,
                "pesoBruto"      => $xml->NFe->infNFe->children()[5]->vol->pesoB,
                "valorFrete"     => $xml->NFe->infNFe->children()[4]->ICMSTot->vFrete,

            ],
            "itens" => [
                $xml->NFe->infNFe->children()[3]

            ],
            "observacoes" => [
                $xml->NFe->infNFe->children()[8]->infCpl

            ],

        ];



        $this->load->helper('mpdf');
        $html = $this->load->view('notas_fiscais/xmlNFe', $this->data, true);
        pdf_create($html, 'Notas', true);

        //return $this->layout();
    }

 
}

/* End of file arquivos.php */
/* Location: ./application/controllers/arquivos.php */
