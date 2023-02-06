<?php if (!defined('BASEPATH')) {
    exit('Pasta raiz não localizada ou inacessível');
}

class Settings extends MY_Controller
{

    /**
     * author: Lucas Rocha
     * email: silva018-mg@yahoo.com.br
     *
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('setdb_model');
        $this->load->model('setquery_model');

        $this->data['menuProdutos'] = 'Configurações de estoque';
    }

    public function index()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar produtos.');
            redirect(base_url());
        }


        $this->data['view'] = 'produtos/settings/index.php';

        return $this->layout();
    }
    public function getSettings($id)
    {
        $this->getLinkReturnData($id);    //RETORNA COLUNAS A SEREM ALTERADAS NO BANCO DA DADOS A PARTIR DO ID DO MODAL

        $this->data['custom_error'] = '';
        $this->data['results'] = $this->setdb_model->getTabelaQ("estoque_".$this->data['id'] ."s", '*', '', '', '');
        

        foreach ($this->data['results'] as $settings) {
            $idUrl = 'urlLogo' . ucfirst($this->data['id']);

            if (!empty($settings->$idUrl) or $settings->$idUrl != null) {
                $urlImg = $settings->$idUrl;
                $logo = "<img src='$urlImg' alt='logoMarca' class='img-responsive' />";
            } else {
                $logo = '<span class="material-icons">perm_media</span>';
            }

            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
                $v = '<a style="margin-right: 1%" href="' . site_url() . "settings/visualizar/".$this->data['titlo'] ."/" . $settings->{"id_estoque_".$this->data['id'] } . '" class="btn-nwe" title="Visualizar Setting"><i class="bx bx-show bx-xs"></i></a>  ';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eProduto')) {
                $e = '<a style="margin-right: 1%" href="' . site_url() . "settings/editar/".$this->data['titulo'] ."/" . $settings->{"id_estoque_".$this->data['id']} . '" class="btn-nwe3" title="Editar Setting"><i class="bx bx-edit bx-xs"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dProduto')) {
                $d = '<a style="margin-right: 1%" href="#modal-excluir" role="button" data-toggle="modal" setting="' .$this->data['id']. '" idSetting="' . $settings->{"id_estoque_".$this->data['id']} . '" class="btn-nwe4" title="Excluir Setting"><i class="bx bx-trash-alt bx-xs"></i></a>';
            }



            $result[] = [
                $logo,
                $settings->{"id_estoque_".$this->data['id']},
                $settings->{$this->data['id']},
                "<span class='textoDescricao'>" . $settings->{"descricao" . ucfirst($this->data['id'])} . "</span>",
                $this->setdb_model->hData($settings->{"cadastro" . ucfirst($this->data['id'])}),
                "$v $e $d",
            ];
        }

        if (!isset($result)) {
            $result = 0;
        };

        $settings = [
            'data' => $result
        ];

        echo json_encode($settings);
    }


    public function gerenciar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar produtos.');
            redirect(base_url());
        }
        $this->load->library('pagination');


        $this->data['configuration']['base_url'] = site_url('produtos/gerenciar/');
        $this->data['configuration']['total_rows'] = $this->setdb_model->count('estoque_produtos');


        $this->pagination->initialize($this->data['configuration']);

        $this->data['custom_error'] = '';

        $this->data['categorias'] = $this->setdb_model->getTabelaQ('estoque_categorias');

        $this->data['medidas'] = $this->setdb_model->getTabelaQ('estoque_medidas', $this->setquery_model->getFields('medidas'), '', $this->setquery_model->getJoin('medidas'));

        $this->data['view'] = 'produtos/settings/';

        return $this->layout();
    }

    public function settings()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar produtos.');
            redirect(base_url());
        }


        $this->data['view'] = 'produtos/settings/';

        return $this->layout();
    }

    public function adicionar($id)
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para configurar estoque.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        

        $this->getLinkReturnData($id); //RETORNA DADOS DE TITULO E BANCO DE DADOS A PARTIR DO ID DO MODAL

        if ($this->input->post('nome') != "") {
  
            $this->getLinkInsertData($this->data['id']); //RETORNA COLUNAS A SEREM ALTERADAS NO BANCO DE DADOS A PARTIR DO ID DO MODAL
            
            if ($this->setdb_model->add("estoque_".$this->data['id'] . "s", $this->dataInsert) == true) {
                $this->session->set_flashdata('success', mb_strtoupper($this->data['titulo']) . " adicionado com sucesso!");
                log_info('Adicionou um produto');
                redirect(site_url("settings/adicionar/".$this->data['id']));
            } else {
                log_info("Houve um erro ao cadastrar ". $this->data['titulo']. " produto ");
                $this->session->set_flashdata('error', "Erro ao adicionar " .mb_strtoupper($this->data['titulo']));
            }
        }



        $this->data['config'] = $this->data['titulo'];
        $this->data['id'] = $id;
        $this->data['view'] = 'produtos/settings/adicionar';
        return $this->layout();
    }

    public function editar($id)
    {
        if (!$this->uri->segment(4) || !is_numeric($this->uri->segment(4))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar produtos.');
            redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->load->model('produtos_model');
        
        
        $this->getLinkReturnData($id); //RETORNA DADOS DE TITULO E BANCO DE DADOS A PARTIR DO ID DO MODAL
       
        $this->data['result'] = $this->setdb_model->getTabelaQID("estoque_".$this->data['id']."s", '*', "id_estoque_".$this->data['id']."=" . $this->uri->segment(4));
        $a = "$id";
        $b = "descricao" . ucfirst($id);
        $c = 'urlLogo' . ucfirst($id);


        $this->data['nome'] = $this->data['result']->$a;
        $this->data['descricao'] = $this->data['result']->$b;
        $this->data['urlLogo'] = $this->data['result']->$c;
        

        if ($this->input->post('nome') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {


           $this->getLinkInsertData($this->data['id'], "up", $this->uri->segment(4)); //RETORNA COLUNAS A SEREM ALTERADAS NO BANCO DA DADOS A PARTIR DO ID DO MODAL
      
            if ($this->setdb_model->edit("estoque_".$this->data['id']."s", $this->dataInsert, "id_estoque_".$this->data['id'], $this->uri->segment(4)) == true) {
                $this->session->set_flashdata('success', 'Item '.$this->data['titulo'].' editado com sucesso!');
                log_info("Alterou um ".$this->data['titulo']." ID: " . $this->uri->segment(4));
                redirect("settings/editar/grupo/".$this->uri->segment(4));
            } else {
                log_info("Houve um erro ao editar ". $this->data['titulo']. " com ID: ".$this->uri->segment(4));
                $this->session->set_flashdata('error', "Não foi possível cadastrar". $this->data['titulo']."!");
                redirect("produtos");
            }
        }
        
        $this->data['config'] = $this->data['titulo'];
        $this->data['view'] = 'produtos/settings/editar';
        return $this->layout();
    }


    public function visualizar($id)
    {
        if (!$this->uri->segment(4) || !is_numeric($this->uri->segment(4))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar configurações de estoque.');
            redirect(base_url());
        }

        $this->getLinkReturnData($id); //RETORNA DADOS DE TITULO E BANCO DE DADOS A PARTIR DO ID DO MODAL

        $this->data['result'] = $this->setdb_model->getTabelaQID("estoque_$id" . "s", '*', "id_estoque_$id=" . $this->uri->segment(4));

        $a = "$id";
        $b = "descricao" . ucfirst($id);
        $c = "cadastro" . ucfirst($id);
        $d = "update" . ucfirst($id);
        $e = 'urlLogo' . ucfirst($id);

        $this->data['nome'] = $this->data['result']->$a;
        $this->data['descricao'] = $this->data['result']->$b;
        $this->data['dataCadastro'] = ($this->setdb_model->validaDate($this->data['result']->$c) == true) ? $this->setdb_model->hData($this->data['result']->$c) : 'Não informado';
        $this->data['dataUpdate'] = ($this->setdb_model->validaDate($this->data['result']->$d) == true) ? $this->setdb_model->hData($this->data['result']->$d) : 'Não informado';
        $this->data['urlLogo'] = ($this->data['result']->$e != '' and $this->data['result']->$e != null) ? $this->data['result']->$e : 'https://sistema.wltopos.com/assets/img/sem_logo.png';


        if ($this->data['result'] == null) {
            $this->session->set_flashdata('error', $id . "  não encontrado.");
            log_info("Encontrou um erro ao tentar vizualizar produto de ID: ".$this->uri->segment(4));
            redirect(site_url('settings/editar/') . $this->input->post('idProdutos'));
        }else{
            log_info("Alterou um ".$this->data['titulo']." ID: " . $this->uri->segment(4));
        }

        
        $this->data['config'] = $this->data['titulo'];
        $this->data['view'] = 'produtos/settings/visualizarSettings';
        return $this->layout();
    }

    public function atualizar_estoque()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para atualizar estoque de produtos.');
            redirect(base_url());
        }

        $idProduto = $this->input->post('id');
        $novoEstoque = $this->input->post('estoque');
        $estoqueAtual = $this->input->post('estoqueAtual');

        $estoque = $estoqueAtual + $novoEstoque;

        $data = [
            'estoque' => $estoque,
        ];

        if ($this->setdb_model->edit('estoque_produtos', $data, 'id_estoque_produto', $idProduto) == true) {
            $this->session->set_flashdata('success', 'Estoque de Produto atualizado com sucesso!');
            log_info('Atualizou estoque de um produto. ID: ' . $idProduto);
            redirect(site_url('produtos/visualizar/') . $idProduto);
        } else {
            $this->data['custom_error'] = '<div class="alert">Ocorreu um erro.</div>';
        }
    }

    public function excluir($id)
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dProduto')) {
            $this->session->set_flashdata('error', "Você não tem permissão para excluir $id");
            redirect(base_url());
        }

        $setting = $this->input->post('idSetting');

        if ($setting == null || !is_numeric($setting)) {
            $this->session->set_flashdata('error', 'Erro! O arquivo não pode ser localizado.');
            redirect(site_url("produtos/settings/$id"));
        }

        $file = $this->setdb_model->getTabelaQID("estoque_$id" . "s", '*', "id_estoque_$id=" . $setting);
        $path = "path".ucfirst($id);
        if ($this->setdb_model->delete("estoque_$id" . "s", "id_estoque_$id", $setting)) {
            if ($file->$path != null) {
                unlink($file->$path);
            }

            $this->session->set_flashdata('success', $id . ' excluido com sucesso!');
            log_info("Removeu setting $id. ID: " . $setting);
        } else {
            $this->session->set_flashdata('error', "Ocorreu um erro ao tentar excluir setting $id.");
        }
        redirect(site_url("produtos/settings/$id"));
    }

    public function consultaProduto($urlID)
    {
        // $urlID = $_POST['urlID'];
        //echo $urlID;
        $url = 'https://api.cosmos.bluesoft.com.br/gtins/' . $urlID . '.json';
        $agent = 'Cosmos-API-Request';
        $headers = array(
            "Content-Type: application/json",
            "X-Cosmos-Token: SgteGyzmkZ_nRp45EbrcuQ"
        );

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_USERAGENT, $agent);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);

        $data = curl_exec($curl);
        if ($data === false || $data == NULL) {
            $data = 0;
            echo $data;
        } else {
            $object = json_encode($data);

            echo $data;
        }

        curl_close($curl);
    }

    private function do_upload($id, $setting)
    {

        $config['upload_path'] = './assets/uploads/' . $this->session->userdata('dbEmpresa') . "/logo".ucfirst($this->data['titulo'])."s/";
        $config['allowed_types'] = 'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size'] = 0;
        $config['max_width'] = '3000';
        $config['max_height'] = '2000';
        $config['encrypt_name'] = true;

        if (!is_dir('./assets/uploads/' . $this->session->userdata('dbEmpresa') . "/logo".ucfirst($this->data['titulo'])."s/")) {
            mkdir('./assets/uploads/' . $this->session->userdata('dbEmpresa') . "/logo".ucfirst($this->data['titulo'])."s/", 0777, true);
        }

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            // $error = ['error' => $this->upload->display_errors()];

            // $this->session->set_flashdata('error', 'Erro ao fazer upload do arquivo, verifique se a extensão do arquivo é permitida.');
            // redirect(site_url('settings/'));
            if($setting != null){
                $path = "path".ucfirst($id);
                $file = $this->setdb_model->getTabelaQID("estoque_$id" . "s", '*', "id_estoque_$id=" . $setting);
                if ($file->$path != null) {
                    unlink($file->$path);
                }
            }
            
            return 0;
        } else {
            //$data = array('upload_data' => $this->upload->data());
            $file = $this->upload->data('file_name');
            $path = $this->upload->data('full_path');
            $url = base_url('assets/uploads/' . $this->session->userdata('dbEmpresa') . "/logo".ucfirst($this->data['titulo'])."s/" . $file) ;
            $tamanho = $this->upload->data('file_size');
            $tipo = $this->upload->data('file_ext');

            $this->dataInsert["urlLogo" . ucfirst($id)] =  $url;
            $this->dataInsert["path" . ucfirst($id)]  =  $path;
            $this->upload->data();

            return  $this->upload->data();
        }
    }

    private function getLinkReturnData($id)
    {
        switch ($id) { //RETORNA DADOS POR ID DE MODAL SELECIONADO
            case 'medida':
                $this->data['medidasSistema'] = $this->setdb_model->getTabelaQ("estoque_sistema_medidas", '*');
                $this->data['titulo'] =  'medida';
                $this->data['id'] =  'medida';
                break;
            case 'location':
                $this->data['titulo'] =  'local';
                $this->data['id'] =  'location';
                break;
            case 'sector':
                $this->data['titulo'] =  'setor';
                $this->data['id'] =  'sector';
                break;
            case 'addCampo':
                $this->data['titulo'] =  'campo';
                $this->data['id'] =  'addCampo';
                break;
            case 'grupo':
                $this->data['categorias'] = $this->setdb_model->getTabelaQ("estoque_categorias", '*');
                $this->data['setores'] = $this->setdb_model->getTabelaQ("estoque_sectors", '*');
                $this->data['titulo'] = 'grupo';
                $this->data['id'] = 'tipo_produto';
                break;
            default:
                $this->data['titulo'] = $id;
                $this->data['id'] = $id;
        }
    }

    private function getLinkInsertData($id, $op="cad", $setting = null)
    {
       
       if($op == "cad"){
        $this->dataInsert = [
            $this->data['id']        => mb_strtoupper($this->input->post('nome')),
            "sigla".ucfirst($id)     => mb_strtoupper($this->input->post('nome')),
            "descricao".ucfirst($id) => mb_strtoupper($this->input->post('descricao')),
            'cadastro'.ucfirst($id)  => date('Y-m-d h:i:s'),
            "urlLogo".ucfirst($id)   =>  $this->input->post('urlLogo'),


        ];
       }
       if($op == "up"){
        $this->dataInsert = [
            $this->data['id']        => mb_strtoupper($this->input->post('nome')),
            "sigla".ucfirst($id)     => mb_strtoupper($this->input->post('nome')),
            "descricao".ucfirst($id) => mb_strtoupper($this->input->post('descricao')),
            'update'.ucfirst($id)    => date('Y-m-d h:i:s'),
            "urlLogo".ucfirst($id)   =>  $this->input->post('urlLogo'),


        ];


       }
       
        switch ($id) {
            case 'tipo_produto':
                $this->dataInsert['estoque_categoria_id'] = $this->input->post('categoria');
                $this->dataInsert['estoque_sector_id']     = $this->input->post('sector');
                break;
            case  'medida':
                $this->dataInsert['estoque_sistema_medida_id'] = $this->input->post('medidaSistema');
                $this->dataInsert['multiplicador'] = $this->input->post('multiplicador');
                break;
            case  'location':
                $this->dataInsert['ambiente'] = mb_strtoupper($this->input->post('ambiente'));
                break;
        }

       $this->do_upload($id, $setting);
    }
}
