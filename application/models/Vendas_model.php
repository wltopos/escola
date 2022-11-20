<?php

use Piggly\Pix\StaticPayload;

if (! defined('BASEPATH')) {
    exit('Pasta raiz não localizada ou inacessível');
}

class Vendas_model extends CI_Model
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
        $this->db_empresa = $this->load->database($this->session->userdata('dbEmpresa'), true);
    }


    public function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        $this->db_empresa->select($fields.', clientes.nomeCliente, clientes.idClientes');
        $this->db_empresa->from($table);
        $this->db_empresa->limit($perpage, $start);
        $this->db_empresa->join('clientes', 'clientes.idClientes = '.$table.'.clientes_id');
        $this->db_empresa->order_by('idVendas', 'desc');
        if ($where) {
            $this->db_empresa->where($where);
        }

        $query = $this->db_empresa->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    public function getById($id)
    {
        $this->db_empresa->select('comercial_vendas.*, comercial_clientes.*, comercial_clientes.email as emailCliente, financeiro_lancamentos.data_vencimento, administrativo_funcionarios.telefone as telefone_funcionario, administrativo_funcionarios.email as email_funcionario, administrativo_funcionarios.nome');
        $this->db_empresa->from('comercial_vendas');
        $this->db_empresa->join('comercial_clientes', 'comercial_clientes.id_comercial_cliente = comercial_vendas.comercial_cliente_id');
        $this->db_empresa->join('administrativo_funcionarios', 'administrativo_funcionarios.id_administrativo_funcionario = comercial_vendas.administrativo_funcionario_id');
        $this->db_empresa->join('financeiro_lancamentos', 'comercial_vendas.id_comercial_venda = financeiro_lancamentos.comercial_venda_id', 'LEFT');
        $this->db_empresa->where('comercial_vendas.id_comercial_venda', $id);
        $this->db_empresa->limit(1);
        return $this->db_empresa->get()->row();
    }

    public function isEditable($id = null)
    {
        
        if ($vendas =  $this->setdb_model->getTabelaQID('comercial_vendas', '*', 'id_comercial_venda='.$id)) {
         
            if ($vendas->faturado) {
                return $this->data['configuration']['control_edit_vendas'] == '1';
            }
        }
        return true;
       
    }

    public function getByIdCobrancas($id)
    {
        $this->db_empresa->select('vendas.*, clientes.*, clientes.email as emailCliente, lancamentos.data_vencimento, funcionarios.telefone as telefone_funcionario, funcionarios.email as email_funcionario, funcionarios.nome, funcionarios.nome, cobrancas.vendas_id,cobrancas.idCobranca,cobrancas.status');
        $this->db_empresa->from('vendas');
        $this->db_empresa->join('clientes', 'clientes.idClientes = vendas.clientes_id');
        $this->db_empresa->join('funcionarios', 'funcionarios.idfuncionario = vendas.funcionario_id');
        $this->db_empresa->join('cobrancas', 'cobrancas.vendas_id = vendas.idVendas');
        $this->db_empresa->join('lancamentos', 'vendas.idVendas = lancamentos.vendas_id', 'LEFT');
        $this->db_empresa->where('vendas.idVendas', $id);
        $this->db_empresa->limit(1);
        return $this->db_empresa->get()->row();
    }

    public function getProdutos($id = null)
    {
        $this->db_empresa->select('comercial_itens_de_vendas.*, estoque_produtos.*, estoque_medidas.*, estoque_sistema_medidas.*, estoque_tipo_produtos.tipo_produto');
        $this->db_empresa->from('comercial_itens_de_vendas');
        $this->db_empresa->join('estoque_produtos', 'estoque_produtos.id_estoque_produto = comercial_itens_de_vendas.estoque_produto_id');
        $this->db_empresa->join('estoque_tipo_produtos', 'estoque_produtos.estoque_tipo_produto_id = estoque_tipo_produtos.id_estoque_tipo_produto');
        $this->db_empresa->join('estoque_medidas', 'estoque_produtos.estoque_medida_id = estoque_medidas.id_estoque_medida');
        $this->db_empresa->join('estoque_sistema_medidas', 'estoque_medidas.estoque_sistema_medida_id = estoque_sistema_medidas.id_estoque_sistema_medida');
        $this->db_empresa->where('comercial_venda_id', $id);
        return $this->db_empresa->get()->result();
    }

    public function getCobrancas($id = null)
    {
        $this->db_empresa->select('comercial_cobrancas.*');
        $this->db_empresa->from('comercial_cobrancas');
        $this->db_empresa->where('comercial_venda_id', $id);
        return $this->db_empresa->get()->result();
    }

    public function add($table, $data, $returnId = false)
    {
        $this->db_empresa->insert($table, $data);
        if ($this->db_empresa->affected_rows() == '1') {
            if ($returnId == true) {
                return $this->db_empresa->insert_id($table);
            }
            return true;
        }

        return false;
    }

    public function edit($table, $data, $fieldID, $ID)
    {
        $this->db_empresa->where($fieldID, $ID);
        $this->db_empresa->update($table, $data);

        if ($this->db_empresa->affected_rows() >= 0) {
            return true;
        }

        return false;
    }

    public function delete($table, $fieldID, $ID)
    {
        $this->db_empresa->where($fieldID, $ID);
        $this->db_empresa->delete($table);
        if ($this->db_empresa->affected_rows() == '1') {
            return true;
        }

        return false;
    }

    public function count($table)
    {
        return $this->db_empresa->count_all($table);
    }

    public function getQrCode($id, $pixKey, $emitente)
    {
        if (empty($id) || empty($pixKey) || empty($emitente)) {
            return;
        }

        $this->vendasFields = $this->setquery_model->getFields('vendas_clientes');
        $this->vendasJoin   = $this->setquery_model->getJoin('vendas_clientes');

        $this->itens_de_vendasFields = $this->setquery_model->getFields('itens_de_vendas');
        $this->itens_de_vendasJoin   = $this->setquery_model->getJoin('itens_de_vendas');

        

        $produtos = $this->setdb_model->getTabelaQ('comercial_itens_de_vendas', $this->itens_de_vendasFields, 'comercial_venda_id='. $this->uri->segment(3), $this->itens_de_vendasJoin);
        $valorAjuste = $this->setdb_model->getTabelaQID('comercial_vendas', $this->vendasFields, 'id_comercial_venda='.$this->uri->segment(3), $this->vendasJoin);
        $totalProdutos = array_reduce(
            $produtos,
            function ($carry, $produto) {
                return $carry + ($produto->quantidade * $produto->preco);
            },
            0
        );

        if($valorAjuste->ajustaValorTipo == 'DESCONTO'){
            $valorDesconto = $valorAjuste->ajustaValorTipo;
        }else{
            $valorDesconto = 0;  
        }

        $amount = $valorDesconto != 0 ? round(floatval($valorDesconto), 2) : round(floatval($totalProdutos), 2);

        if ($amount <= 0) {
            return;
        }

        $pix = (new StaticPayload())
            ->applyValidCharacters()
            ->applyUppercase()
            ->setPixKey(getPixKeyType($pixKey), $pixKey)
            ->setMerchantName($emitente->nome, true)
            ->setMerchantCity($emitente->cidade, true)
            ->setAmount($amount)
            ->setTid($id)
            ->setDescription(sprintf("%s Venda %s", $emitente->nome, $id), true);

        return $pix->getQRCode();
    }


    public function converteMedida($quantidade, $idMedidaDefault, $medidaConvert, $valor)
    {
         //MEDIDA PADRÃO <<<< MEDIDA SISTEMA >>>>> MEDIDA FRACIONADA

         $data = $this->setdb_model->getTabelaQID('estoque_medidas', '*', "id_estoque_medida=$idMedidaDefault", $this->setquery_model->getJoin('medidas'));
         $data = get_object_vars($data);
 
         if($medidaConvert == 'D'){ //Medida sistema para medida padrão
             $venda['quantidadeConvertida'] = $quantidade * $data['multiplicador'];
             $venda['texto'] = $venda['quantidadeConvertida']." ".($venda['quantidadeConvertida']>1?$data['medida'].'S':$data['medida'])." COM ".$data['multiplicador']." ".($data['multiplicador']>1?$data['medidaSistema'].'S':$data['medidaSistema']);   
             $venda['textoRS'] = $venda['quantidadeConvertida']." ".($venda['quantidadeConvertida']>1?$data['medida'].'S':$data['medida']); 
             
            $venda['precoVenda'] = $valor;
            $venda['totalVenda'] = $venda['precoVenda'] * $quantidade;
             
            $venda['sigla'] = $data['siglaMedida'];  
 
             return $venda;  
         }
 
         if($medidaConvert == 'S'){ //Medida padrão para medida sistema
             $venda['quantidadeConvertida'] = $quantidade * 1;
             $venda['texto'] = $venda['quantidadeConvertida']." ".($venda['quantidadeConvertida']>1?$data['medidaSistema'].'S':$data['medidaSistema']);                  
             
             $venda['precoVenda'] = ($valor / $data['multiplicador']);
             $venda['totalVenda'] = $venda['precoVenda'] * $venda['quantidadeConvertida'];

             $venda['sigla'] = $data['siglaMedidaSistema']; 

             return $venda;  
         }
         
         if($medidaConvert == 'F'){ //Medida sistema para medida fracionada
             $venda['quantidadeConvertida'] = $quantidade / $data['fracionadorSistema'];
             $venda['texto'] = $venda['quantidadeConvertida']." ".$data['fracionadorSistema'];                  
             
             $venda['precoVenda'] = ($valor / $data['multiplicador']);
             $venda['totalVenda'] = $venda['precoVenda'] * $venda['quantidadeConvertida'];

             $venda['sigla'] = $data['siglaFracaoSistema']; 

             return $venda;  
         }
    
    }
}

/* End of file vendas_model.php */
/* Location: ./application/models/vendas_model.php */
