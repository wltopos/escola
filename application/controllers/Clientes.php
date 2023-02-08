<?php if (!defined('BASEPATH')) {
    exit('Pasta raiz não localizada ou inacessível');
}

class Clientes extends MY_Controller
{

    /**
     * author: Lucas Rocha
     * email: silva018-mg@yahoo.com.br
     *
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->model('setdb_model');
        $this->load->model('setquery_model');
        $this->data['menuClientes'] = 'clientes';
    }

    public function index()
    {
        $this->gerenciar();
    }

    public function getClientes()
    {
        $this->load->library('pagination');


        $this->data['configuration']['base_url'] = site_url('produtos/gerenciar/');
        $this->data['configuration']['total_rows'] = $this->setdb_model->count('comercial_clientes');


        $this->pagination->initialize($this->data['configuration']);

        $this->data['custom_error'] = '';
        $this->data['results'] = $this->setdb_model->getTabelaQ('comercial_clientes');
        log_info('Visualizou lista de cliente/fornecedor.');


        foreach ($this->data['results'] as $cliente) {
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) {
                $v = '<a href="' . base_url() . 'clientes/visualizar/' . $cliente->id_comercial_cliente . '" style="margin-right: 1%" class="btn-nwe" title="Ver mais detalhes"><i class="bx bx-show bx-xs"></i></a>';
                $a = '<a href="' . base_url() . 'mine?e=' . $cliente->email . '" target="new" style="margin-right: 1%" class="btn-nwe2" title="Área do cliente"><i class="bx bx-key bx-xs"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
                $e = '<a href="' . base_url() . 'clientes/editar/' . $cliente->id_comercial_cliente . '" style="margin-right: 1%" class="btn-nwe3" title="Editar Cliente"><i class="bx bx-edit bx-xs"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dCliente')) {
                $d = '<a href="#modal-excluir" role="button" data-toggle="modal" cliente="' . $cliente->id_comercial_cliente . '" style="margin-right: 1%" class="btn-nwe4" title="Excluir Cliente"><i class="bx bx-trash-alt bx-xs"></i></a>';
            }


            $result[] = [
                $cliente->id_comercial_cliente,
                $cliente->nomeCliente,
                $cliente->apelido,
                $cliente->documento,
                $cliente->telefone,
                $cliente->email,
                "$v $a $e $d",
            ];
        }
        
        if(!isset($result)){
            $result = 0;
          
           };

        $produtos = [
            'data' => $result
        ];

        echo json_encode($produtos);
    }

    public function gerenciar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar clientes.');
            redirect(base_url());
        }
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('clientes/gerenciar/');
        $this->data['configuration']['total_rows'] = $this->setdb_model->count('comercial_clientes');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->setdb_model->getTabelaQ('comercial_clientes', '*', '', '', '', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'clientes/clientes';
        return $this->layout();
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar clientes.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        $senhaCliente = $this->input->post('senha') ?  $this->input->post('senha') : preg_replace('/[^\p{L}\p{N}\s]/', '', set_value('documento'));

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nomeCliente' => set_value('nomeCliente'),
                'apelido' => set_value('apelido'),
                'contato' => set_value('contato'),
                'documento' => set_value('documento'),
                'telefone' => set_value('telefone'),
                'celular' => set_value('celular'),
                'email' => set_value('email'),
                'senha' => password_hash($senhaCliente, PASSWORD_DEFAULT),
                'rua' => set_value('rua'),
                'numero' => set_value('numero'),
                'complemento' => set_value('complemento'),
                'bairro' => set_value('bairro'),
                'cidade' => set_value('cidade'),
                'estado' => set_value('estado'),
                'cep' => set_value('cep'),
                'dataCadastro' => date('Y-m-d'),
                'fornecedor' => (set_value('fornecedor') == true ? 1 : 0),
            ];

            if ($this->setdb_model->add('comercial_clientes', $data) == true) {
                $this->session->set_flashdata('success', 'Cliente adicionado com sucesso!');
                log_info('Adicionou um cliente/fornecedor - '.$data['nomeCliente']);
                redirect(site_url('clientes/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
                log_info('Encontrou um erro ao adicionar cliente.');
            }
        }

        $this->data['view'] = 'clientes/adicionarCliente';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar clientes.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $senha = $this->input->post('senha');
            if ($senha != null) {
                $senha = password_hash($senha, PASSWORD_DEFAULT);

                $data = [
                    'nomeCliente' => $this->input->post('nomeCliente'),
                    'apelido' => $this->input->post('apelido'),
                    'contato' => $this->input->post('contato'),
                    'documento' => $this->input->post('documento'),
                    'telefone' => $this->input->post('telefone'),
                    'celular' => $this->input->post('celular'),
                    'email' => $this->input->post('email'),
                    'senha' => $senha,
                    'rua' => $this->input->post('rua'),
                    'numero' => $this->input->post('numero'),
                    'complemento' => $this->input->post('complemento'),
                    'bairro' => $this->input->post('bairro'),
                    'cidade' => $this->input->post('cidade'),
                    'estado' => $this->input->post('estado'),
                    'cep' => $this->input->post('cep'),
                    'fornecedor' => (set_value('fornecedor') == true ? 1 : 0),
                ];
            } else {
                $data = [
                    'nomeCliente' => $this->input->post('nomeCliente'),
                    'apelido' => $this->input->post('apelido'),
                    'contato' => $this->input->post('contato'),
                    'documento' => $this->input->post('documento'),
                    'telefone' => $this->input->post('telefone'),
                    'celular' => $this->input->post('celular'),
                    'email' => $this->input->post('email'),
                    'rua' => $this->input->post('rua'),
                    'numero' => $this->input->post('numero'),
                    'complemento' => $this->input->post('complemento'),
                    'bairro' => $this->input->post('bairro'),
                    'cidade' => $this->input->post('cidade'),
                    'estado' => $this->input->post('estado'),
                    'cep' => $this->input->post('cep'),
                    'fornecedor' => (set_value('fornecedor') == true ? 1 : 0),
                ];
            }

            if ($this->setdb_model->edit('comercial_clientes', $data, 'id_comercial_cliente', $this->input->post('id_comercial_cliente')) == true) {
                $this->session->set_flashdata('success', 'Cliente editado com sucesso!');
                log_info('Alterou um cliente. ID' . $this->input->post('id_comercial_cliente'));
                redirect(site_url('clientes/editar/') . $this->input->post('id_comercial_cliente'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro ao tentar realizar cadastro</p></div>';
            }
        }

        $this->data['result'] = $this->setdb_model->getTabelaQID('comercial_clientes', '*', 'comercial_clientes.id_comercial_cliente = ' . $this->uri->segment(3));
        $this->data['view'] = 'clientes/editarCliente';
        return $this->layout();
    }

    public function visualizar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar clientes.');
            redirect(base_url());
        }

        $this->data['custom_error'] = '';
        $this->data['result'] = $this->setdb_model->getTabelaQID('comercial_clientes', '*', 'comercial_clientes.id_comercial_cliente = ' . $this->uri->segment(3));
        // $this->data['results'] = $this->setdb_model->getTabelaQ('comercial_clientes', $this->setquery_model->getFields('clientes_os'), '', $this->setquery_model->getJoin('clientes_os'));
        $this->data['results'] = $this->setdb_model->getTabelaQ('comercial_vendas', $this->setquery_model->getFields('vendas_clientes'), '', $this->setquery_model->getJoin('vendas_clientes'));
        $this->data['dataCadastro'] = $this->setdb_model->hData($this->data['result']->dataCadastro);
        $this->data['dataVenda'] = $this->setdb_model->hData($this->data['result']->dataVenda);
        $this->data['view'] = 'clientes/visualizar'; 
        return $this->layout();
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir clientes.');
            redirect(base_url());
        }

        $idCliente = $this->input->post('id');
        if ($idCliente == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir cliente.');
            redirect(site_url('clientes/gerenciar/'));
        }


        $this->load->model('clientes_model');

        // excluindo OS's vinculadas ao cliente
        $os = $this->clientes_model->getAllOsByClient($idCliente);
        if ($os != null) {
            $this->clientes_model->removeClientOs($os);
        }

        // excluindo Vendas vinculadas ao cliente
        $vendas = $this->clientes_model->getAllVendasByClient($idCliente);
        if ($vendas != null) {
            $this->clientes_model->removeClientVendas($vendas);
        }

        if ($this->setdb_model->delete('comercial_clientes', 'id_comercial_cliente', $idCliente)) {
            log_info('Removeu um cliente. ID' . $idCliente);
            $this->session->set_flashdata('success', 'Cliente excluido com sucesso!');
            redirect(site_url('clientes/gerenciar/'));
        } else {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir cliente.');
            redirect(site_url('clientes/gerenciar/'));
        }
    }
}
