<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Vendas extends MY_Controller
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
        $this->load->model('vendas_model');
        $this->load->model('setdb_model');
        $this->load->model('setquery_model');
        $this->load->model('produtos_model');
        $this->data['menuVendas'] = 'Vendas';
    }

    public function index()
    {
        $this->gerenciar();
    }

    public function getVendas()
    {
        $this->load->library('pagination');


        $this->vendasFields = $this->setquery_model->getFields('vendas_clientes');
        $this->vendasJoin   = $this->setquery_model->getJoin('vendas_clientes');

        $this->data['configuration']['base_url'] = site_url('produtos/gerenciar/');
        $this->data['configuration']['total_rows'] = $this->setdb_model->count('comercial_vendas');


        $this->pagination->initialize($this->data['configuration']);

        $this->data['custom_error'] = '';
        $this->data['results'] = $this->setdb_model->getTabelaQ('comercial_vendas', $this->vendasFields, '', $this->vendasJoin, '', '	id_comercial_venda, desc');


        foreach ($this->data['results'] as $r) {
            $dataVenda = date(('d/m/Y'), strtotime($r->dataVenda));
            if ($r->faturado == 1) {
                $faturado = 'Sim';
            } else {
                $faturado = 'Não';
            }

            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) {
                $v = '<a style="margin-right: 1%" href="' . base_url() . 'index.php/vendas/visualizar/' . $r->id_comercial_venda . '" class="btn-nwe" title="Ver mais detalhes"><i class="bx bx-show bx-xs"></i></a>';
                $imp = '<a style="margin-right: 1%" href="' . base_url() . 'index.php/vendas/imprimir/' . $r->id_comercial_venda . '" target="_blank" class="btn-nwe6" title="Imprimir A4"><i class="bx bx-printer bx-xs"></i></a>';
                $imp_t = '<a style="margin-right: 1%" href="' . base_url() . 'index.php/vendas/imprimirTermica/' . $r->id_comercial_venda . '" target="_blank" class="btn-nwe6" title="Imprimir Não Fiscal"><i class="bx bx-printer bx-xs"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eVenda')) {
                $e = '<a style="margin-right: 1%" href="' . base_url() . 'index.php/vendas/editar/' . $r->id_comercial_venda . '" class="btn-nwe3" title="Editar venda"><i class="bx bx-edit bx-xs"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dVenda')) {
                $d = '<a href="#modal-excluir" role="button" data-toggle="modal" venda="' . $r->id_comercial_venda . '" class="btn-nwe4" title="Excluir Venda"><i class="bx bx-trash-alt bx-xs"></i></a>';
            }


            $result[] = [
                $r->id_comercial_venda,
                $dataVenda,
                $r->nomeCliente,
                $faturado,
                "$v $imp $imp_t $e $d",
            ];
        }

        if (!isset($result)) {
            $result = 0;
        };

        $vendas = [
            'data' => $result
        ];

        echo json_encode($vendas);
    }

    public function gerenciar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar vendas.');
            redirect(base_url());
        }

        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('vendas/gerenciar/');
        $this->data['configuration']['total_rows'] = $this->vendas_model->count('comercial_vendas');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['view'] = 'vendas/vendas';
        return $this->layout();
    }

    public function autoCompleteProduto()
    {
        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);

            $estoque = 10;
            $resto = 2;

            $row_set['label']                = 'label';
            $row_set['id']                   = 'idProdutos';
            $row_set['descricao']            = 'descricao';
            $row_set['preco']                = 'precoVenda';
            $row_set['idMedida']             = 'idMedida';
            $row_set['descricaoMedida']      = 'descricaoMedida';
            $row_set['siglaMedida']          = 'sigla';
            $row_set['multiplicador']        = 'multiplicador';
            $row_set['status']               = 'status';
            $row_set['idMedidaSistema']      = 'idMedidaSistema';
            $row_set['medidaSistema']    = 'medidaSistema';
            $row_set['siglaMedidaSistema']   = 'siglaMedidaSistema';
            $row_set['siglaFracaoSistema']   = 'siglaFracaoSistema';
            $row_set['fracionadorSistema']   = 'fracionadorSistema';
            $row_set['statusMedidaSistema']  = 'statusMedidaSistema';
            $row_set['estoque']              = 'estoque';
            // $row_set['resto']                = 'resto';



            $this->load->model('AutoComplete_model');
            $this->AutoComplete_model->autoCompleteProduto('estoque_produtos', 'id_estoque_produto, tipo_produto', $q, $row_set, $this->setquery_model->getFields('produtos'), $this->setquery_model->getJoin('produtos'));
        }
    }



    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aVenda')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar Vendas.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        $this->data['usuario'] = $this->setdb_model->check_credentials($this->session->userdata('id'));

        if ($this->form_validation->run('vendas') == false) {
            $this->data['custom_error'] = (validation_errors() ? true : false);
        } else {
            $dataVenda = $this->input->post('dataVenda');

            try {
                $dataVenda = explode('/', $dataVenda);
                $dataVenda = $dataVenda[2] . '-' . $dataVenda[1] . '-' . $dataVenda[0];
            } catch (Exception $e) {
                $dataVenda = date('Y/m/d');
            }

            $data = [
                'dataVenda' => $dataVenda,
                'observacoes' => $this->input->post('observacoes'),
                'observacoes_cliente' => $this->input->post('observacoes_cliente'),
                'comercial_cliente_id' => $this->input->post('clientes_id'),
                'administrativo_funcionario_id' => $this->input->post('usuarios_id'),
                'faturado' => 0,
            ];

            if (is_numeric($id = $this->setdb_model->add('comercial_vendas', $data, true))) {
                $this->session->set_flashdata('success', 'Venda iniciada com sucesso, adicione os produtos.');
                log_info('Adicionou uma venda.');
                redirect(site_url('vendas/editar/') . $id);
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'vendas/adicionarVenda';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eVenda')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar vendas');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        $this->data['usuario'] = $this->setdb_model->check_credentials($this->session->userdata('id'));

        if ($this->form_validation->run('vendas') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $dataVenda = $this->input->post('dataVenda');

            try {
                $dataVenda = explode('/', $dataVenda);
                $dataVenda = $dataVenda[2] . '-' . $dataVenda[1] . '-' . $dataVenda[0];
            } catch (Exception $e) {
                $dataVenda = date('Y/m/d');
            }

            $data = [
                'dataVenda' => $dataVenda,
                'observacoes' => $this->input->post('observacoes'),
                'observacoes_cliente' => $this->input->post('observacoes_cliente'),
                'administrativo_funcionario_id' => $this->input->post('usuarios_id'),
                'comercial_cliente_id' => $this->input->post('clientes_id'),
            ];

            if ($this->setdb_model->edit('comercial_vendas', $data, 'id_comercial_venda', $this->input->post('idVendas')) == true) {
                $this->session->set_flashdata('success', 'Venda editada com sucesso!');
                log_info('Alterou uma venda. ID: ' . $this->input->post('idVendas'));
                redirect(site_url('vendas/editar/') . $this->input->post('idVendas'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }


        $this->data['result'] = $this->setdb_model->getTabelaQID('comercial_vendas', $this->setquery_model->getFields('vendas_clientes'), 'comercial_vendas.id_comercial_venda = ' . $this->uri->segment(3), $this->setquery_model->getJoin('vendas_clientes'));
        $this->data['produtos'] = $this->setdb_model->getTabelaQ('comercial_itens_de_vendas', $this->setquery_model->getFields('itens_de_vendas'), 'comercial_itens_de_vendas.comercial_venda_id=' . $this->uri->segment(3), $this->setquery_model->getJoin('itens_de_vendas'));
        $this->data['usuario'] = $this->setdb_model->check_credentials($this->session->userdata('id'));


        $this->data['view'] = 'vendas/editarVenda';
        return $this->layout();
    }

    public function visualizar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar vendas.');
            redirect(base_url());
        }

        $this->vendasFields = $this->setquery_model->getFields('vendas_clientes_lancamentos');
        $this->vendasJoin   = $this->setquery_model->getJoin('vendas_clientes_lancamentos');

        $this->itens_de_vendasFields = $this->setquery_model->getFields('itens_de_vendas');
        $this->itens_de_vendasJoin   = $this->setquery_model->getJoin('itens_de_vendas');


        $this->data['custom_error'] = '';
        // $this->load->model('mapos_model');
        $this->data['result'] = $this->setdb_model->getTabelaQID('comercial_vendas', $this->vendasFields, 'id_comercial_venda=' . $this->uri->segment(3), $this->vendasJoin);
        $this->data['produtos'] = $this->setdb_model->getTabelaQ('comercial_itens_de_vendas', $this->itens_de_vendasFields, 'comercial_venda_id=' . $this->uri->segment(3), $this->itens_de_vendasJoin);
        $this->data['emitente'] = $this->setdb_model->getEmitente($this->session->userdata('id_administrativo_emitente'));
        $this->data['funcionario'] = $this->setdb_model->check_credentials($this->session->userdata('id'));
        $this->data['modalGerarPagamento'] = $this->load->view(
            'cobrancas/modalGerarPagamento',
            [
                'id' => $this->uri->segment(3),
                'tipo' => 'venda',
            ],
            true
        );

        $this->data['view'] = 'vendas/visualizarVenda';

        return $this->layout();
    }

    public function imprimir()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar vendas.');
            redirect(base_url());
        }


        $this->vendasFields = $this->setquery_model->getFields('vendas_clientes');
        $this->vendasJoin   = $this->setquery_model->getJoin('vendas_clientes');

        $this->itens_de_vendasFields = $this->setquery_model->getFields('itens_de_vendas');
        $this->itens_de_vendasJoin   = $this->setquery_model->getJoin('itens_de_vendas');

        $this->data['custom_error'] = '';
        $this->load->model('mapos_model');
        $this->data['result'] = $this->setdb_model->getTabelaQID('comercial_vendas', $this->vendasFields, 'id_comercial_venda=' . $this->uri->segment(3), $this->vendasJoin);
        $this->data['produtos'] = $this->setdb_model->getTabelaQ('comercial_itens_de_vendas', $this->itens_de_vendasFields, 'comercial_venda_id=' . $this->uri->segment(3), $this->itens_de_vendasJoin);
        $this->data['emitente'] = $this->setdb_model->getEmitente($this->session->userdata('id_administrativo_emitente'));
        $this->data['qrCode'] = $this->vendas_model->getQrCode(
            $this->uri->segment(3),
            $this->data['configuration']['pix_key'],
            $this->data['emitente']
        );

        $this->load->view('vendas/imprimirVenda', $this->data);
    }

    public function imprimirTermica()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar vendas.');
            redirect(base_url());
        }

        $this->vendasFields = $this->setquery_model->getFields('vendas_clientes');
        $this->vendasJoin   = $this->setquery_model->getJoin('vendas_clientes');

        $this->itens_de_vendasFields = $this->setquery_model->getFields('itens_de_vendas');
        $this->itens_de_vendasJoin   = $this->setquery_model->getJoin('itens_de_vendas');

        $this->data['custom_error'] = '';
        $this->load->model('mapos_model');
        $this->data['result'] = $this->setdb_model->getTabelaQID('comercial_vendas', $this->vendasFields, 'id_comercial_venda=' . $this->uri->segment(3), $this->vendasJoin);
        $this->data['produtos'] = $this->setdb_model->getTabelaQ('comercial_itens_de_vendas', $this->itens_de_vendasFields, 'comercial_venda_id=' . $this->uri->segment(3), $this->itens_de_vendasJoin);
        $this->data['emitente'] = $this->setdb_model->getEmitente($this->session->userdata('id_administrativo_emitente'));
        $this->data['qrCode'] = $this->vendas_model->getQrCode(
            $this->uri->segment(3),
            $this->data['configuration']['pix_key'],
            $this->data['emitente']
        );

        $this->load->view('vendas/imprimirVendaTermica', $this->data);
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dVenda')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir vendas');
            redirect(base_url());
        }

        $this->load->model('vendas_model');

        $id = $this->input->post('id');

        $editavel = $this->vendas_model->isEditable($id);
        if (!$editavel) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir. Venda já faturada');
            redirect(site_url('vendas/gerenciar/'));
        }

        $venda = $this->setdb_model->getTabelaQ('comercial_cobrancas', '*', '', '', $id);
        if ($venda == null) {
            $venda = $this->setdb_model->getTabelaQ('comercial_vendas', '*', '', '', $id);
            if ($venda == null) {
                $this->session->set_flashdata('error', 'Erro ao tentar excluir venda.');
                redirect(site_url('vendas/gerenciar/'));
            }
        }

        if ($venda->idCobranca != null) {
            if ($venda->status == "canceled") {
                $this->vendas_model->delete('cobrancas', 'vendas_id', $id);
            } else {
                $this->session->set_flashdata('error', 'Existe uma cobrança associada a esta venda, deve cancelar e/ou excluir a cobrança primeiro!');
                redirect(site_url('vendas/gerenciar/'));
            }
        }

        $this->vendas_model->delete('itens_de_vendas', 'vendas_id', $id);
        $this->vendas_model->delete('vendas', 'idVendas', $id);
        if ((int) $venda->faturado === 1) {
            $this->vendas_model->delete('lancamentos', 'descricao', "Fatura de Venda - #${id}");
        }

        log_info('Removeu uma venda. ID: ' . $id);

        $this->session->set_flashdata('success', 'Venda excluída com sucesso!');
        redirect(site_url('vendas/gerenciar/'));
    }

    public function adicionarProduto()
    {


        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eVenda')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar vendas.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->load->model('vendas_model');
        $this->form_validation->set_rules('quantidade', 'Quantidade', 'trim|required');
        $this->form_validation->set_rules('idProduto', 'Produto', 'trim|required');
        $this->form_validation->set_rules('idVendasProduto', 'Vendas', 'trim|required');

        $editavel = $this->vendas_model->isEditable($this->input->post('idVendasProduto'));

        if (!$editavel) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(422)
                ->set_output(json_encode(['result' => false, 'messages' => '<br /><br /> <strong>Motivo:</strong> Venda já faturada']));
        }

        if ($this->form_validation->run() == false) {
            echo json_encode(['result' => false]);
        } else {



            $idProduto     = $this->input->post('idProduto');
            $preco         = $this->input->post('preco');
            $medida        = $this->input->post('medida');
            $unidade       = $this->input->post('unidade');
            $multiplicador = $this->input->post('multiplicador');
            $quantidade    = $this->input->post('quantidade');

            $venda['precoVenda'] = 0;
            $venda['totalVenda'] = 0;
           
            if ($preco != 0) {

                $venda = $this->vendas_model->converteMedida($quantidade, $medida, $unidade, $preco);

            } 

            $data = [
                'subTotal' => $venda['totalVenda'],
                'quantidade' => $quantidade,
                'unidadeVenda' => $venda['sigla'],
                'preco' => $venda['precoVenda'],
                'comercial_venda_id' => $this->input->post('idVendasProduto'),
                'estoque_produto_id' => $idProduto,

            ];

            if ($this->setdb_model->add('comercial_itens_de_vendas', $data) == true) {


                if ($this->data['configuration']['control_estoque']) {
                    $this->produtos_model->updateEstoque($idProduto, $venda['quantidadeConvertida'], '-');
                }
                $this->db_empresa = $this->load->database($this->session->userdata('dbEmpresa'), true);
                $this->db_empresa->set('ajustaValor', 0.00);
                $this->db_empresa->set('valor_ajuste', 0.00);
                $this->db_empresa->where('id_comercial_venda', $this->input->post('idVendasProduto'));
                $this->db_empresa->update('comercial_vendas');

                log_info('Adicionou produto a uma venda.');

                echo json_encode(['result' => true]);
            } else {

                echo json_encode(['result' => false]);
            }
        }
    }

    public function calcularPreco($id = '13')
    {

        $data = $this->produtos_model->getUnidadeProdutoID($id);



        $estoque['codigo']               = $data->codDeBarra;
        $estoque['multiplicadorSistema'] = $data->multiplicadorSistema;
        $estoque['multiplicador']        = $data->multiplicador * $data->multiplicadorSistema;
        $estoque['multiplicador']        = $data->multiplicador * $data->multiplicadorSistema;
        $estoque['estoqueAtual']         = $data->estoque;
        $estoque['unidadeSistema']       = $data->siglaMedidaSistema;
        $estoque['unidade']              = $data->sigla;

        $estoque['preco'] = [
            'precoCompra'          => $data->precoCompra,
            'valorTotal'           => $data->precoCompra * $data->estoque,
            'precoUnidade'         => $data->precoCompra,
            'precoUnidadeSisteama' => $data->precoCompra / $estoque['multiplicador'],
            'precoUnidadeSisteamaFracionada'  => $data->precoCompra / $estoque['multiplicador'],
            'precoVenda'         => ($data->precoCompra * ($data->margemLucro / 100)) + $data->precoCompra,

        ];


        var_dump($data);
    }

    public function excluirProduto()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eVenda')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar Vendas');
            redirect(base_url());
        }

        $editavel = $this->vendas_model->isEditable($this->input->post('idVendas'));
        if (!$editavel) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(422)
                ->set_output(json_encode(['result' => false, 'messages' => '<br /><br /> <strong>Motivo:</strong> Venda já faturada']));
        }

        $ID      = $this->input->post('idProduto');

        if ($this->setdb_model->delete('comercial_itens_de_vendas', 'id_comercial_itens_de_venda', $ID) == true) {

            $produto = $this->input->post('produto');
            $quantidade = $this->input->post('quantidade');


            if ($this->data['configuration']['control_estoque']) {
                $this->produtos_model->updateEstoque($produto, $quantidade, '+');
            }

            $this->db_empresa = $this->load->database($this->session->userdata('dbEmpresa'), true);

            $this->db_empresa->set('ajustaValor', 0.00);
            $this->db_empresa->set('valor_ajuste', 0.00);
            $this->db_empresa->where('id_comercial_venda', $this->input->post('idVendas'));
            $this->db_empresa->update('comercial_vendas');

            log_info('Removeu produto de uma venda.');
            echo json_encode(['result' => true]);
        } else {
            echo json_encode(['result' => false]);
        }
    }

    public function adicionarDesconto()
    {

        if ($this->input->post('ajustaValor') == "") {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode(['messages' => 'Campo desconto vazio']));
        } elseif ($this->input->post('ajustaValorTipo') == "0") {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode(['messages' => 'Selecione tipo de ajuste Taxa/Desconto']));
        } else {
            $idVendas = $this->input->post('idVendas');

            $data = [
                'valorTotal' => $this->input->post('valorTotal'),
                'ajustaValor' => $this->input->post('ajustaValor') * $this->input->post('valorTotal') / 100,
                'ajustaValorTipo' => $this->input->post('ajustaValorTipo'),
                'valor_ajuste' => $this->input->post('resultado'),
            ];
           
            $editavel = $this->vendas_model->isEditable($idVendas);
            if (!$editavel) {
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(400)
                    ->set_output(json_encode(['result' => false, 'messages', 'Valor de ' . $this->input->post('ajustaValorTipo') . ' não pode ser adicionado. Venda não ja Faturada/Cancelada']));
            }
            if ($this->vendas_model->edit('comercial_vendas', $data, 'id_comercial_venda', $idVendas) == true) {
                log_info('Adicionou  ' . $this->input->post('ajustaValorTipo') . ' na Venda. ID: ' . $idVendas);
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(201)
                    ->set_output(json_encode(['result' => true, 'messages' => 'Valor de ' . $this->input->post('ajustaValorTipo') . ' adicionado com sucesso!']));
            } else {
                log_info('Ocorreu um erro ao tentar adiciona ' . $this->input->post('ajustaValorTipo') . ' a Venda: ' . $idVendas);
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(400)
                    ->set_output(json_encode(['result' => false, 'messages', 'Ocorreu um erro ao tentar adiciona ' . $this->input->post('ajustaValorTipo') . ' a Venda.']));
            }
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode(['result' => false, 'messages', 'Ocorreu um erro ao tentar adiciona ' . $this->input->post('ajustaValorTipo') . ' a OS.']));
    }

    public function faturar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eVenda')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar Vendas');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('receita') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $venda_id = $this->input->post('vendas_id');
            $vencimento = $this->input->post('vencimento');
            $recebimento = $this->input->post('recebimento');

            try {
                $vencimento = explode('/', $vencimento);
                $vencimento = $vencimento[2] . '-' . $vencimento[1] . '-' . $vencimento[0];

                if ($recebimento != null) {
                    $recebimento = explode('/', $recebimento);
                    $recebimento = $recebimento[2] . '-' . $recebimento[1] . '-' . $recebimento[0];
                }
            } catch (Exception $e) {
                $vencimento = date('Y/m/d');
            }
            $vendas = $this->vendas_model->getById($venda_id);

            $data = [
                'comercial_venda_id' => $venda_id,
                'descricao' => $this->input->post('descricao'),
                'valor' => $this->input->post('valor'),
                'valor_pago' => $vendas->ajustaValor,
                'valor_ajuste' => $vendas->valor_ajuste,
                'valor_ajuste_tipo' => $vendas->ajustaValorTipo,
                'comercial_cliente_id' => $this->input->post('clientes_id'),
                'data_vencimento' => $vencimento,
                'data_pagamento' => $recebimento,
                'baixado' => $this->input->post('recebido') == 1 ? true : false,
                'cliente_fornecedor' => $this->input->post('cliente'),
                'forma_pgto' => $this->input->post('formaPgto'),
                'tipo' => $this->input->post('tipo'),
                'administrativo_funcionario_id' => $this->session->userdata('id'),
            ];
print_r($data);
exit;
            if ($this->vendas_model->add('financeiro_lancamentos', $data) == true) {
                $venda = $this->input->post('vendas_id');

                $this->db_empresa->set('faturado', 1);
                $this->db_empresa->set('valorTotal', $this->input->post('valor'));
                $this->db_empresa->where('id_comercial_venda', $venda);
                $this->db_empresa->update('comercial_vendas');

                log_info('Faturou uma venda.');

                $this->session->set_flashdata('success', 'Venda faturada com sucesso!');
                $json = ['result' => true];
                echo json_encode($json);
                die();
            } else {
                $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar faturar venda.');
                $json = ['result' => false];
                echo json_encode($json);
                die();
            }
        }

        $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar faturar venda.');
        $json = ['result' => false];
        echo json_encode($json);
    }
}
