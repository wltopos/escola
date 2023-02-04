<?php
class Produtos_model extends CI_Model
{

    /**
     * author: Lucas Rocha
     * email: silva018-mg@yahoo.com.br
     *
     */

    public function __construct()
    {
        parent::__construct();

        $this->db_empresa = $this->load->database($this->session->userdata('dbEmpresa'), true);
        $this->load->model('setdb_model');
        $this->load->model('setquery_model');
    }

    public function add($table, $data)
    {
        $this->db_empresa->insert($table, $data);
        if ($this->db_empresa->affected_rows() == '1') {
            return true;
        }

        return false;
    }

    public function updateEstoque($produto, $quantidade, $operacao = '-')
    {
        $sql = "UPDATE estoque_produtos set estoque = estoque $operacao ? WHERE id_estoque_produto = ?";
        return $this->db_empresa->query($sql, [$quantidade, $produto]);
    }

    public function converteMedida($estoqueAtual, $idMedidaDefault, $medidaConvert, $estoqueMinimo = 1)
    {
        //MEDIDA PADRÃO <<<< MEDIDA SISTEMA >>>>> MEDIDA FRACIONADA

        $data = $this->setdb_model->getTabelaQID('estoque_medidas', '*', "id_estoque_medida=$idMedidaDefault", $this->setquery_model->getJoin('medidas'));
        $data = get_object_vars($data);


        if ($medidaConvert == 'D') { //Medida sistema para medida padrão
            $estoque['valorConvertido'] = $estoqueAtual / $data['multiplicador'];

            if ($data['status'] == 2) {
                $estoque['texto'] =  $estoque['valorConvertido'] . " " . ($estoque['valorConvertido'] > 1 ? $data['medida'] . 'S' : $data['medida']);
                $estoque['textoRS'] = $estoque['valorConvertido'] . " " . ($estoque['valorConvertido'] > 1 ? $data['medida'] . 'S' : $data['medida']);

                $estoque['valorConvertidoEstoqueMinimo'] = $estoqueMinimo / $data['multiplicador'];
                $estoque['textoEstoqueMinimo'] = $estoque['valorConvertidoEstoqueMinimo'] . " " . ($estoque['valorConvertido'] > 1 ? $data['medida'] . 'S' : $data['medida']);
                $estoque['textoEstoqueMinimoRS'] = $estoque['valorConvertidoEstoqueMinimo'] . " " . ($estoque['valorConvertido'] > 1 ? $data['medida'] . 'S' : $data['medida']);

            } else {
                $estoque['texto'] = $estoque['valorConvertido'] . " " . ($estoque['valorConvertido'] > 1 ? $data['medida'] . 'S' : $data['medida']) . " COM " . $data['multiplicador'] . " " . ($data['multiplicador'] > 1 ? $data['medidaSistema'] . 'S' : $data['medidaSistema']);
                $estoque['textoRS'] = $estoque['valorConvertido'] . " " . ($estoque['valorConvertido'] > 1 ? $data['medida'] . 'S' : $data['medida']);

                $estoque['valorConvertidoEstoqueMinimo'] = $estoqueMinimo / $data['multiplicador'];
                $estoque['textoEstoqueMinimo'] = $estoque['valorConvertidoEstoqueMinimo'] . " " . ($estoque['valorConvertido'] > 1 ? $data['medida'] . 'S' : $data['medida']) . " COM " . $data['multiplicador'] . " " . ($data['multiplicador'] > 1 ? $data['medidaSistema'] . 'S' : $data['medidaSistema']);
                $estoque['textoEstoqueMinimoRS'] = $estoque['valorConvertidoEstoqueMinimo'] . " " . ($estoque['valorConvertido'] > 1 ? $data['medida'] . 'S' : $data['medida']);
            }

            $estoque['sigla'] = $data['siglaMedida'];

            return $estoque;
        }

        if ($medidaConvert == 'S') { //Medida padrão para medida sistema
            $estoque['valorConvertido'] = $estoqueAtual * $data['multiplicador'];
            $estoque['texto'] = $estoque['valorConvertido'] . " " . ($estoque['valorConvertido'] > 1 ? $data['medidaSistema'] . 'S' : $data['medidaSistema']);

            $estoque['valorConvertidoEstoqueMinimo'] = $estoqueMinimo * $data['multiplicador'];
            $estoque['textoEstoqueMinimo'] = $estoque['valorConvertido'] . " " . ($estoque['valorConvertido'] > 1 ? $data['medidaSistema'] . 'S' : $data['medidaSistema']);

            $estoque['sigla'] = $data['siglaMedidaSistema'];

            return $estoque;
        }

        if ($medidaConvert == 'F') { //Medida sistema para medida fracionada
            $estoque['valorConvertido'] = $estoqueAtual * $data['fracionadorSistema'];
            $estoque['texto'] = $estoque['valorConvertido'] . " " . $data['fracionadorSistema'];

            $estoque['valorConvertidoEstoqueMinimo'] = $estoqueAtual * $data['fracionadorSistema'];
            $estoque['textoEstoqueMinimo'] = $estoque['valorConvertido'] . " " . $data['fracionadorSistema'];

            $estoque['sigla'] = $data['siglaFracaoSistema'];

            return $estoque;
        }

        if ($medidaConvert == 'FF') { //Medida fracionada para medida sistema
            $estoque['valorConvertido'] = $estoqueAtual / $data['fracionadorSistema'];
            $estoque['texto'] = $estoque['valorConvertido'] . " " . $data['fracionadorSistema'];

            $estoque['valorConvertidoEstoqueMinimo'] = $estoqueAtual * $data['fracionadorSistema'];
            $estoque['textoEstoqueMinimo'] = $estoque['valorConvertido'] . " " . $data['fracionadorSistema'];

            $estoque['sigla'] = $data['siglaFracaoSistema'];

            return $estoque;
        }
    }
}
