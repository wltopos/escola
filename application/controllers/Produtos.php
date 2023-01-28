<?php if (!defined('BASEPATH')) {
    exit('Pasta raiz não localizada ou inacessível');
}

class Produtos extends MY_Controller
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

        $this->data['menuProdutos'] = 'Produtos';
    }

    public function index()
    {
        $this->gerenciar();
       
    }


    public function getProdutos()
    {
        
        $this->load->model('produtos_model');


        $this->produtosFields = $this->setquery_model->getFields('produtos');
        $this->produtosJoin   = $this->setquery_model->getJoin('produtos');

        $this->data['custom_error'] = '';
        $this->data['results'] = $this->setdb_model->getTabelaQ('estoque_produtos', $this->produtosFields, '', $this->produtosJoin, '');


        foreach ($this->data['results'] as $produto) {
            $estoque =  $this->produtos_model->converteMedida($produto->estoque, $produto->estoque_medida_id, 'D');
            
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
                $v = '<a style="margin-right: 1%" href="' . base_url() . 'index.php/produtos/visualizar/' . $produto->id_estoque_produto . '" class="btn-nwe" title="Visualizar Produto" ><i class="bx bx-show bx-xs" ></i></a>  ';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eProduto')) {
                $e = '<a style="margin-right: 1%" href="' . base_url() . 'index.php/produtos/editar/' . $produto->id_estoque_produto . '" class="btn-nwe3" title="Editar Produto" ><i class="bx bx-edit bx-xs" ></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dProduto')) {
                $d = '<a style="margin-right: 1%" href="#modal-excluir" role="button" data-toggle="modal" produto="' . $produto->id_estoque_produto . '" codigo="' . $produto->codDeBarra . '" class="btn-nwe4" title="Excluir Produto"><i class="bx bx-trash-alt bx-xs" ></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eProduto')) {
                $a = '<a href="#atualizar-estoque" role="button" data-toggle="modal" produto="' . $produto->id_estoque_produto . '" medida="' . $produto->estoque_medida_id . '" estoqueTxt="' . $estoque['texto'] .'"." estoque="' . $produto->estoque .'" data_result="'.$produto->siglaMedida.'|'.$produto->siglaMedidaSistema.'|'.$produto->siglaFracaoSistema.'" class="btn-nwe5" title="Atualizar Estoque"><i class="bx bx-plus-circle bx-xs" ></i></a>';
            }

            

            $result[] = [
                $produto->observacao,
                $produto->codDeBarra,
                $produto->tipo_produto,
                $produto->marca,
                $produto->produtoDescricao,
                $estoque['texto'],
                "$v $e $d $a",
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

        $this->data['view'] = 'produtos/produtos';

        return $this->layout();
    }
    
    public function settings()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar produtos.');
            redirect(base_url());
        }
       

        $this->data['view'] = 'produtos/settings/index.php';

        return $this->layout();
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar produtos.');
            redirect(base_url());
        }

        $this->produtosJoin   = $this->setquery_model->getJoin('medidas');

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        $this->data['resultMarca'] = $this->setdb_model->getTabelaQ('estoque_marcas','*','','','marca, asc');
        $this->data['resultMedida'] = $this->setdb_model->getTabelaQ('estoque_medidas','' ,'',$this->produtosJoin ,'siglaMedida,desc');
        $this->data['resultTipo'] = $this->setdb_model->getTabelaQ('estoque_tipo_produtos','*','','','tipo_produto, asc');
        $this->data['resultAddCampo'] = $this->setdb_model->getTabelaQ('estoque_addCampos','*','','','addCampo, asc');
        $this->data['resultLocations'] = $this->setdb_model->getTabelaQ('estoque_locations','*','','','location, asc');

        if ($this->form_validation->run('produtos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $precoCompra = $this->input->post('precoCompra');
            $precoCompra = str_replace(",", "", $precoCompra);
            $precoVenda = $this->input->post('precoVenda');
            $precoVenda = str_replace(",", "", $precoVenda);

            $campos = set_value('addCampoInput');
            $camposDB = NULL;
            if (is_array($campos)) {
                
                foreach ($campos as $campo => $valor) {
                    $valor = strtoupper($valor);
                    $campo = explode("_", $campo);
                    $camposDB .= "$campo[0]::$valor||";
                }
            }
            $this->load->model('produtos_model');
          

            $estoque =  $this->produtos_model->converteMedida($this->input->post('estoque'), $this->input->post('unidade'), 'S', $this->input->post('estoqueMinimo'));

            $this->dataInsert = [
                'codDeBarra'              => strtoupper($this->input->post('codDeBarra')),
                'produtoDescricao'       => strtoupper($this->input->post('descricao')),
                'estoque_location_id'     => strtoupper($this->input->post('location')),
                'estoque_medida_id'       => strtoupper($this->input->post('unidade')),
                'estoque_marca_id'        => strtoupper($this->input->post('marca')),
                'estoque_tipo_produto_id' => strtoupper($this->input->post('complemento')),
                'financeiro_nota_id'      => $this->input->post('adNotaFiscal_id'),
                'precoCompra'             => $this->input->post('precoCompra'),
                'margemLucro'             => $this->input->post('margemLucro'),
                'precoVenda'              => $precoVenda,
                'estoque'                 => $estoque['valorConvertido'],
                'observacao'              => $camposDB,
                'estoqueMinimo'           => $estoque['valorConvertidoEstoqueMinimo'],
                'dataCadastro'            => date('Y-m-d h:i:s'),
                'dataVencimento'          => $this->input->post('dataVencimento'),
                'saida'                   => "1",
                'entrada'                 => "1",
            ];

            $this->do_upload();
          
            if ($this->setdb_model->add('estoque_produtos', $this->dataInsert) == true) {
                $this->session->set_flashdata('success', 'Produto adicionado com sucesso!');
                log_info('Adicionou um produto');
                redirect(site_url('produtos/adicionar/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Verifique o preenchimento de todos os campos.</p></div>';
            }
        }
        $this->data['view'] = 'produtos/adicionarProduto';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar produtos.');
            redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->load->model('produtos_model');

        $this->medidasJoin   = $this->setquery_model->getJoin('medidas');

        $this->data['custom_error']     = '';
        $this->data['resultAddCampo']   = $this->setdb_model->getTabelaQ('estoque_addCampos','*','','','addCampo, asc');
        $this->data['resultLocations']  = $this->setdb_model->getTabelaQ('estoque_locations','*','','','location, asc');
        $this->data['resultMarca']      = $this->setdb_model->getTabelaQ('estoque_marcas','*','','','marca, asc');
        $this->data['resultMedida']     = $this->setdb_model->getTabelaQ('estoque_medidas','' ,'',$this->medidasJoin ,'siglaMedida,desc');
        $this->data['resultTipo']       = $this->setdb_model->getTabelaQ('estoque_tipo_produtos','*','','','tipo_produto, asc');
        $this->data['result']           = $this->setdb_model->getTabelaQID('estoque_produtos', $this->setquery_model->getFields('produtosID'), 'estoque_produtos.id_estoque_produto =' . $this->uri->segment(3), $this->setquery_model->getJoin('produtosID'));
         
        $this->data['estoque'] =  $this->produtos_model->converteMedida($this->data['result']->estoque, $this->data['result']->estoque_medida_id, 'D', $this->data['result']->estoqueMinimo);

        if ($this->form_validation->run('produtos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $precoCompra = $this->input->post('precoCompra');
            $precoCompra = str_replace(",", "", $precoCompra);
            $precoVenda = $this->input->post('precoVenda');
            $precoVenda = str_replace(",", "", $precoVenda);

            $campos = set_value('addCampoInput');
            $camposDB = null;
            if (is_array($campos)) {

                foreach ($campos as $campo => $valor) {
                    $campo = explode("_", $campo);
                    $camposDB .= "$campo[0]::$valor||";
                }
            }

           
           $estoque =  $this->produtos_model->converteMedida($this->input->post('estoque'), $this->input->post('unidade'), 'S', $this->input->post('estoqueMinimo'));

            $this->dataInsert = [
                'codDeBarra'              => strtoupper($this->input->post('codDeBarra')),
                'produtoDescricao'        => strtoupper($this->input->post('descricao')),
                'estoque_location_id'     => strtoupper($this->input->post('location')),
                'estoque_medida_id'       => strtoupper($this->input->post('unidade')),
                'estoque_marca_id'        => strtoupper($this->input->post('marca')),
                'estoque_tipo_produto_id' => strtoupper($this->input->post('complemento')),
                'financeiro_nota_id'      => $this->input->post('adNotaFiscal_id'),
                'precoCompra'             => $this->input->post('precoCompra'),
                'margemLucro'             => $this->input->post('margemLucro'),
                'precoVenda'              => $precoVenda,
                'estoque'                 => $estoque['valorConvertido'],
                'observacao'              => strtoupper($camposDB),
                'estoqueMinimo'           => $estoque['valorConvertidoEstoqueMinimo'],
                'dateUpdate'              => date('Y-m-d h:i:s'),
                'dataVencimento'          => $this->input->post('dataVencimento'),
                'saida'                   => "1",
                'entrada'                 => "1"
            ];

            $this->do_upload($this->input->post('id_estoque_produto'));
          
            if ($this->setdb_model->edit('estoque_produtos', $this->dataInsert, 'id_estoque_produto', $this->input->post('id_estoque_produto')) == true) {
                $this->session->set_flashdata('success', 'Produto editado com sucesso!');
                log_info('Alterou um produto. ID: ' . $this->input->post('id_estoque_produto'));
                redirect(site_url('produtos/editar/') . $this->input->post('id_estoque_produto'));
            } else {
                $this->session->set_flashdata('error', 'Não foi possível cadastrar o produto!');
            }
        }

        

        $this->data['view'] = 'produtos/editarProduto';
        return $this->layout();
    }

    public function visualizar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar produtos.');
            redirect(base_url());
        }


        $this->produtosFields = $this->setquery_model->getFields('produtosID');
        $this->produtosJoin   = $this->setquery_model->getJoin('produtosID');


        $this->data['result'] = $this->setdb_model->getTabelaQID('estoque_produtos', $this->produtosFields, 'estoque_produtos.id_estoque_produto =' . $this->uri->segment(3), $this->produtosJoin, 'LEFT');

        $this->data['dateCadastro'] = ($this->setdb_model->validaDate($this->data['result']->dataCadastro) == true)?$this->setdb_model->hData($this->data['result']->dataCadastro).' às '.(new DateTime($this->data['result']->dataCadastro))->format('H:i:s'):'Não informado';
        $this->data['dateUpdate'] = ($this->setdb_model->validaDate($this->data['result']->dateUpdate) == true)?$this->setdb_model->hData($this->data['result']->dateUpdate).' às '.(new DateTime($this->data['result']->dateUpdate))->format('H:i:s'):'Não informado';
        $this->data['dateVencimento'] = ($this->setdb_model->validaDate($this->data['result']->dataVencimento, 'Y-m-d') == true)?$this->setdb_model->hData($this->data['result']->dataVencimento):'Não informado';
        $this->data['dateEmissao'] = ($this->setdb_model->validaDate($this->data['result']->dataEmissao) == true)?$this->setdb_model->hData($this->data['result']->dataEmissao):'Não informado';
        
        $this->data['resultAddCampo']   = $this->setdb_model->getTabelaQ('estoque_addCampos');

        $medida               = $this->data['result']->estoque_medida_id;
        $estoqueAtual         = $this->data['result']->estoque;
        $estoqueMinimo        = $this->data['result']->estoqueMinimo;

        $this->load->model('produtos_model');
     
        $this->data['estoque'] =  $this->produtos_model->converteMedida($estoqueAtual, $medida, 'D', $estoqueMinimo);

        if ($this->data['result'] == null) {
            $this->session->set_flashdata('error', 'Produto não encontrado.');
            redirect(site_url('produtos/editar/') . $this->input->post('idProdutos'));
        }

        $this->data['view'] = 'produtos/visualizarProduto';
        return $this->layout();
    }

    public function atualizar_estoque()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para atualizar estoque de produtos.');
            redirect(base_url());
        }

        $this->load->model('produtos_model');

        $idProduto     = $this->input->post('id');
        $updateEstoque = $this->input->post('estoque');
        $medida        = $this->input->post('medida');
        $operacao      = $this->input->post('operacao');
        $selectMedida  = $this->input->post('selectMedida');
        $estoqueAtual  = $this->input->post('estoqueAtual');

        if($selectMedida == 'D'){
            $estoque =  $this->produtos_model->converteMedida($updateEstoque, $medida, 'S');
            $updateEstoque = $estoque['valorConvertido'];
        }
        if($selectMedida == 'F'){
            $estoque =  $this->produtos_model->converteMedida($updateEstoque, $medida, 'FF');
            $updateEstoque = $estoque['valorConvertido'];
        }     

        if($operacao == '+'){
            $estoque = (int)$estoqueAtual + (int)$updateEstoque;
        }
        if($operacao == '-'){
            $estoque = (int)$estoqueAtual - (int)$updateEstoque;
        }
        
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

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir produtos.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir produto.');
            redirect(base_url() . 'index.php/produtos/gerenciar/');
        }

        $this->setdb_model->delete('comercial_os_produtos', 'id_comercial_os_produto', $id);
        $this->setdb_model->delete('comercial_itens_de_vendas', 'id_comercial_itens_de_venda', $id);
        $this->setdb_model->delete('estoque_produtos', 'id_estoque_produto', $id);

        log_info('Removeu um produto. ID: ' . $id);

        $this->session->set_flashdata('success', 'Produto excluido com sucesso!');
        redirect(site_url('produtos/gerenciar/'));
    }

    public function consultaProduto($urlID = 0)
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

    public function returnAddCampos(){
     
        echo json_encode($this->setdb_model->getTabelaQ('estoque_addCampos'));
    }

    private function do_upload($setting = null)
    {

        $config['upload_path'] = './assets/uploads/' . $this->session->userdata('dbEmpresa') . "/"."imagemProdutos/";
        $config['allowed_types'] = 'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $config['encrypt_name'] = true;

        if (!is_dir('./assets/uploads/' . $this->session->userdata('dbEmpresa') . "/"."imagemProdutos/")) {
            mkdir('./assets/uploads/' . $this->session->userdata('dbEmpresa') . "/"."imagemProdutos/", 0777, true);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
       
        if (!$this->upload->do_upload()) {
             $error = ['error' => $this->upload->display_errors()];

            // $this->session->set_flashdata('error', 'Erro ao fazer upload do arquivo, verifique se a extensão do arquivo é permitida.');
            // redirect(site_url('settings/'));
                    
              try{
                
                $file = $this->setdb_model->getTabelaQID("estoque_produtos", '*', "id_estoque_produto=" . $setting);
                unlink($file->pathImagem);
              }catch(Exception $e){
                echo 'Exceção capturada: ',  $e->getMessage(), "\n";
              }
             echo $this->upload->display_errors();            
            return 0;
        } 
        
        if($this->upload->do_upload()){
            //$data = array('upload_data' => $this->upload->data());
            $file = $this->upload->data('file_name');
            $path = $this->upload->data('full_path');
            $url = base_url('assets/uploads/' . $this->session->userdata('dbEmpresa') . "/"."imagemProdutos/" . $file) ;
            $tamanho = $this->upload->data('file_size');
            $tipo = $this->upload->data('file_ext');

            $this->dataInsert["imagemProduto"]  =  $url;
            $this->dataInsert["pathImagem"]     =  $path;
            // $this->dataInsert["file"]     =  $file;
            // $this->dataInsert["tamanho"]  =  $tamanho;
            // $this->dataInsert["tipo"]     =  $tipo;

            $this->upload->data();
            
            return  $this->upload->data();
        }
    }
   
}
