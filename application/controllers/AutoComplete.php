<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class AutoComplete extends MY_Controller
{

    /**
     * author: Wilmerson Felipe
     * email: will.phelipe@gmail.com
     *
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AutoComplete_model');
        $this->load->model('setquery_model');

    }

    public function autoCompleteUsuario()
    {
        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);
            $this->AutoComplete_model->autoCompleteUsuario($q);
        }
    }

    public function autoCompleteFornecedor()
    {
        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);
            $this->AutoComplete_model->autoCompleteFornecedor($q);
        }
    }
    
    public function autoCompleteCliente()
    {
        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);
            $this->AutoComplete_model->autoCompleteCliente($q);
        }
    }

    public function autoCompleteNotaFiscal()
    {
        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);
            $this->AutoComplete_model->autoCompleteNotaFiscal($q);
        }
    }

    public function autoCompleteMarca()
    {
        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);
            $this->AutoComplete_model->autoCompleteMarca($q);
        }
    }

    public function autoCompleteProduto()
    {
        if (isset($_GET['term'])) {
            $term = strtoupper($_GET['term']);
 
            $row_set['label']                    = '';
            $row_set['id_estoque_produto']       = 'id';
            $row_set['codDeBarra']               = 'codDeBarra';
            $row_set['produtoDescricao']         = 'descricao';
            $row_set['precoCompra']              = 'precoCompra';
            $row_set['precoVenda']               = 'precoVenda';
            $row_set['margemLucro']              = 'margem';
            $row_set['notaFiscal']               = 'notaFiscal';
            $row_set['id_financeiro_nota']       = 'id_financeiro_nota';
            $row_set['siglaMedida']              = 'siglaMedida';
            $row_set['multiplicador']            = 'multiplicador';
            $row_set['siglaMedidaSistema']       = 'siglaMedidaSistema';
            $row_set['siglaFracaoSistema']       = 'siglaFracaoSistema';
            $row_set['estoque_categoria_id']     = 'idCategoria';
            $row_set['estoque_marca_id']         = 'marca_id';
            $row_set['marca']                    = 'marca';
            $row_set['tipo_produto']             = 'produto';
            $row_set['estoque']                  = 'estoque';
            $row_set['estoqueMinimo']            = 'estoqueMinimo';
            $row_set['observacao']               = 'observacao';
            $row_set['estoque_tipo_produto_id']  = 'idTipo';
            $row_set['estoque_medida_id']        = 'idMedida';
            $row_set['estoque_location_id']      = 'location';
            $row_set['dataVencimento']           = 'dataVencimento';
            $row_set['imagemProduto']            = 'imagemProduto';

            $this->AutoComplete_model->autoCompleteProduto('estoque_produtos','codDeBarra,produtoDescricao', $term, $row_set, $this->setquery_model->getFields('produtosID'), $this->setquery_model->getJoin('produtosID'));
        }
    }


    public function autoCompleteTipoProduto()
    {
        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);
            $this->AutoComplete_model->autoCompleteTipoProduto($q);
        }
    }

    public function autoCompleteMedida()
    {
        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);
            $this->AutoComplete_model->autoCompleteMedida($q);
        }
    }

    public function autoCompleteCategoria()
    {
        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);
            $this->AutoComplete_model->autoCompleteCategoria($q);
        }
    } 


}
