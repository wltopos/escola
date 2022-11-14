<?php if (!defined('BASEPATH')) {
    exit('Pasta raiz não localizada ou inacessível');
}

class Servicos extends MY_Controller
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
        $this->load->model('servicos_model');
        $this->data['menuServicos'] = 'Serviços';
    }

    public function index()
    {
        $this->gerenciar();
    }

    public function getServicos()
    {
        

        $this->data['results'] = $this->setdb_model->getTabelaQ('comercial_servicos', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        foreach ($this->data['results'] as $servico) {
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eServico')) {
                $e = '<a style="margin-right: 1%" href="' . base_url() . 'index.php/servicos/editar/' . $servico->id_comercial_servico . '" class="btn-nwe3" title="Editar Serviço"><i class="bx bx-edit bx-xs"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dServico')) {
                $ex = '<a href="#modal-excluir" role="button" data-toggle="modal" servico="' . $servico->id_comercial_servico . '" class="btn-nwe4" title="Excluir Serviço"><i class="bx bx-trash-alt bx-xs"></i></a>  ';
            }
          
            $result[] = [
                $servico->id_comercial_servico,
                $servico->nome,
                number_format($servico->preco, 2, ',', '.') ,
                $servico->descricao,
                "$e $ex",
            ];
        }

       if(!isset($result)){
        $result = 0;
      
       };
     
        $servicos = [
            'data' => $result
        ];

        echo json_encode($servicos);
    }


    public function gerenciar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar serviços.');
            redirect(base_url());
        }

        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('servicos/gerenciar/');
        $this->data['configuration']['total_rows'] = $this->setdb_model->count('comercial_servicos');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['view'] = 'servicos/servicos';
        return $this->layout();
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aServico')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar serviços.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('servicos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $preco = $this->input->post('preco');
            $preco = str_replace(",", "", $preco);

            $data = [
                'nome' => set_value('nome'),
                'descricao' => set_value('descricao'),
                'preco' => $preco,
            ];

            if ($this->setdb_model->add('comercial_servicos', $data) == true) {
                $this->session->set_flashdata('success', 'Serviço adicionado com sucesso!');
                log_info('Adicionou um serviço');
                redirect(site_url('servicos/adicionar/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }
        $this->data['view'] = 'servicos/adicionarServico';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eServico')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar serviços.');
            redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('servicos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $preco = $this->input->post('preco');
            $preco = str_replace(",", "", $preco);
            $data = [
                'nome' => $this->input->post('nome'),
                'descricao' => $this->input->post('descricao'),
                'preco' => $preco,
            ];

            if ($this->setdb_model->add('comercial_servicos', $data, 'id_comercial_servico', $this->input->post('idServicos')) == true) {
                $this->session->set_flashdata('success', 'Serviço editado com sucesso!');
                log_info('Alterou um serviço. ID: ' . $this->input->post('idServicos'));
                redirect(site_url('servicos/editar/') . $this->input->post('idServicos'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um errro.</p></div>';
            }
        }

        $this->data['result'] = $this->servicos_model->getById($this->uri->segment(3));

        $this->data['view'] = 'servicos/editarServico';
        return $this->layout();
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dServico')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir serviços.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir serviço.');
            redirect(site_url('servicos/gerenciar/'));
        }

        $this->setdb_model->delete('comercial_os_servicos', 'id_comercial_os_servico', $id);
        $this->setdb_model->delete('comercial_servicos', 'id_comercial_servico', $id);

        log_info('Removeu um serviço. ID: ' . $id);

        $this->session->set_flashdata('success', 'Serviço excluido com sucesso!');
        redirect(site_url('servicos/gerenciar/'));
    }
}
