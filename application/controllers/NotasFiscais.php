<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class NotasFiscais extends MY_Controller
{

    /**
     * author: Ramon Silva
     * email: silva018-mg@yahoo.com.br
     *
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->model('notasfiscais_model');
        $this->load->model('setdb_model');
        $this->load->model('setquery_model');
        $this->data['menuNotasFiscais'] = 'Notas Fiscais';
    }

    public function index()
    {
        $this->gerenciar();
    }
    public function gerenciar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vArquivo')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar arquivos.');
            redirect(base_url());
        }

        $this->load->library('pagination');

        $pesquisa = $this->input->get('pesquisa');
        $de = $this->input->get('data');
        $ate = $this->input->get('data2');

        if ($pesquisa == null && $de == null && $ate == null) {
            $this->data['configuration']['base_url'] = site_url('notasficais/gerenciar');
            $this->data['configuration']['total_rows'] = $this->setdb_model->count('financeiro_notas');

            $this->pagination->initialize($this->data['configuration']);

            $this->data['results'] = $this->setdb_model->getTabelaQ('financeiro_notas', $this->setquery_model->getFields('financeiro_clientes'), '', $this->setquery_model->getJoin('financeiro_clientes'), 'id_financeiro_nota, desc', $this->data['configuration']['per_page'], 0, $this->uri->segment(3));


        } else {
            $de = DateTime::createFromFormat('d/m/Y', $de);
            $ate = DateTime::createFromFormat('d/m/Y', $ate);

            $de = $de == ''?null:$de->format('Y-m-d');
            $ate = $ate == ''?null:$ate->format('Y-m-d');

          
            $this->data['results'] = $this->setdb_model->search('financeiro_notas', 'notaFiscal,nomeCliente,descricao', $pesquisa, 'dataEmissao', $de, $ate, $this->setquery_model->getFields('financeiro_clientes'), $this->setquery_model->getJoin('financeiro_clientes'));
           
        }

        $this->data['view'] = 'notas_fiscais/notasfiscais';
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

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aArquivo')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar arquivos.');
            redirect(base_url());
        }

        $this->load->library('form_validation');


        $this->form_validation->set_rules('notaFiscal', '', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            
            $dataEmissao = $this->input->post('dataEmissao');
           
            $datetime = DateTime::createFromFormat('d-m-Y', $dataEmissao);
  
            $this->dataInsert = [
                'notaFiscal' => $this->input->post('notaFiscal'),
                'comercial_cliente_id' => $this->input->post('fornecedor_id'),
                'descricao' => $this->input->post('descricao'),
                'dataEmissao' => $dataEmissao,
                'cadastro' => date('Y-m-d H:m:s'),
                
            ];
            $this->do_upload();
            
            if ($this->setdb_model->add('financeiro_notas', $this->dataInsert) == true) {
                $this->session->set_flashdata('success', 'Arquivo adicionado com sucesso!');

                log_info('Adicionou uma Nota Fiscal');

                redirect(site_url('NotasFiscais/adicionar/'));
            } else {
                $this->session->set_flashdata('error', 'Não foi possível cadastrar o NFe!');
            }
        }

        $this->data['view'] = 'notas_fiscais/adicionarNotaFiscal';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eArquivo')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar arquivos.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        $this->form_validation->set_rules('notaFiscal', '', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
        
            $dataEmissao = $this->input->post('dataEmissao');
            $datetime = DateTime::createFromFormat('d-m-Y', $dataEmissao);

            $this->dataInsert = [
                'notaFiscal' => $this->input->post('notaFiscal'),
                'comercial_cliente_id' => $this->input->post('fornecedor_id'),
                'descricao' => $this->input->post('descricao'),
                'dataEmissao' => $dataEmissao,
                'dataUpdate' => date('Y-m-d H:m:s'),
            ];
            
          $this->do_upload($this->input->post('idNotaFiscal'));

            if ($this->setdb_model->edit('financeiro_notas', $this->dataInsert, 'id_financeiro_nota', $this->input->post('idNotaFiscal')) == true) {
                $this->session->set_flashdata('success', 'Alterações efetuadas com sucesso!');
                log_info('Alterou um Nota Fical, ID: ' . $this->input->post('idNotaFiscal'));
                redirect(site_url("NotasFiscais/editar/") . $this->input->post('idNotaFiscal'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['result'] = $this->setdb_model->getTabelaQID('financeiro_notas', $this->setquery_model->getFields('financeiro_clientes'), 'id_financeiro_nota =' . $this->uri->segment(3), $this->setquery_model->getJoin('financeiro_clientes'));
        $this->data['file'] = explode('.', $this->data['result']->file);

        $this->data['view'] = 'notas_fiscais/editarNotaFiscal';
        return $this->layout();
    }

    public function download($id = null)
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vArquivo')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar arquivos.');
            redirect(base_url());
        }

        if ($id == null || !is_numeric($id)) {
            $this->session->set_flashdata('error', 'Erro! O arquivo não pode ser localizado.');
            redirect(site_url('NotasFiscais/'));
        }

        $file = $this->setdb_model->getTabelaID('financeiro_notas', '*', 'id_financeiro_nota = ' . $id);
        $this->load->library('zip');
        $path = $file->path;
        $this->zip->read_file($path);
        $this->zip->download('file' . date('d-m-Y-H.i.s') . '.zip');
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dArquivo')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir arquivos.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null || !is_numeric($id)) {
            $this->session->set_flashdata('error', 'Erro! O arquivo não pode ser localizado.');
            redirect(site_url('NotasFiscais'));
        }

        $file = $this->setdb_model->getTabelaQID('financeiro_notas', '*', 'id_financeiro_nota = ' . $id);

        if ($this->setdb_model->delete('financeiro_notas', 'id_financeiro_nota', $id)) {
            $path = $file->path;
            unlink($path);
            $this->session->set_flashdata('success', 'Arquivo excluido com sucesso!');
            log_info('Removeu um nota fiscal. ID: ' . $id);
        } else {
            $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar excluir o arquivo.');
        }
        redirect(site_url('NotasFiscais'));
    }

    private function do_upload($setting = null)
    {

        $config['upload_path'] = './assets/uploads/' . $this->session->userdata('dbEmpresa') . "/"."logoNotasFiscais/";
        $config['allowed_types'] = 'jpg|jpeg|png|JPG|JPEG|PNG|xml|XML|pdf|PDF';
        $config['max_size'] = 0;
        $config['max_width'] = '3000';
        $config['max_height'] = '2000';
        $config['encrypt_name'] = true;

        if (!is_dir('./assets/uploads/' . $this->session->userdata('dbEmpresa') . "/"."logoNotasFiscais/")) {
            mkdir('./assets/uploads/' . $this->session->userdata('dbEmpresa') . "/"."logoNotasFiscais/", 0777, true);
        }

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
             $error = ['error' => $this->upload->display_errors()];

            // $this->session->set_flashdata('error', 'Erro ao fazer upload do arquivo, verifique se a extensão do arquivo é permitida.');
            // redirect(site_url('settings/'));
                    
              try{
                $path = "path";
                $file = $this->setdb_model->getTabelaQID("financeiro_notas", '*', "id_financeiro_nota=" . $setting);
                unlink($file->$path);
              }catch(Exception $e){
                echo 'Exceção capturada: ',  $e->getMessage(), "\n";
              }
               echo $this->upload->display_errors();            
            return 0;
        } else {
            //$data = array('upload_data' => $this->upload->data());
            $file = $this->upload->data('file_name');
            $path = $this->upload->data('full_path');
            $url = base_url('assets/uploads/' . $this->session->userdata('dbEmpresa') . "/"."logoNotasFiscais/" . $file) ;
            $tamanho = $this->upload->data('file_size');
            $tipo = $this->upload->data('file_ext');

            $this->dataInsert["url"]      =  $url;
            $this->dataInsert["path"]     =  $path;
            $this->dataInsert["file"]     =  $file;
            $this->dataInsert["tamanho"]  =  $tamanho;
            $this->dataInsert["tipo"]     =  $tipo;

            $this->upload->data();
            
            return  $this->upload->data();
        }
    }

    // public function do_upload()
    // {
    //     if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aArquivo')) {
    //         $this->session->set_flashdata('error', 'Você não tem permissão para adicionar arquivos.');
    //         redirect(base_url());
    //     }

    //     $date = date('d-m-Y');

    //     $config['upload_path'] = './assets/uploads/' . $this->session->userdata('dbEmpresa') . "/notasFiscais/$date";
    //     $config['allowed_types'] = 'xml|jpg|jpeg|png|pdf|PDF|JPG|JPEG|PNG';
    //     $config['max_size'] = 0;
    //     $config['max_width'] = '3000';
    //     $config['max_height'] = '2000';
    //     $config['encrypt_name'] = true;

    //     if (!is_dir('./assets/uploads/' . $this->session->userdata('dbEmpresa') . "/notasFiscais/$date")) {
    //         mkdir('./assets/uploads/' . $this->session->userdata('dbEmpresa') . "/notasFiscais/$date", 0777, true);
    //     }

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('userfile')) {
    //         $error = ['error' => $this->upload->display_errors()];
    //         print_r($error);
    //         // $this->session->set_flashdata('error', "Erro ao fazer upload da nota fiscal, verifique se a extensão do arquivo é permitida. $error");
    //         // redirect(site_url('NotasFiscais/adicionar'));
    //     } else {
    //         //$data = array('upload_data' => $this->upload->data());
    //         return $this->upload->data();
    //     }
    // }
}

/* End of file arquivos.php */
/* Location: ./application/controllers/arquivos.php */
