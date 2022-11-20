<?php

class Relatorios_model extends CI_Model
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
    }

    public function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        $this->db_empresa->select($fields);
        $this->db_empresa->from($table);
        $this->db_empresa->limit($perpage, $start);
        if ($where) {
            $this->db_empresa->where($where);
        }

        $query = $this->db_empresa->get();

        $result = !$one ? $query->result() : $query->row();
        return $result;
    }

    public function add($table, $data)
    {
        $this->db_empresa->insert($table, $data);
        if ($this->db_empresa->affected_rows() == '1') {
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

    public function clientesCustom($dataInicial = null, $dataFinal = null, $tipo = null)
    {
        $whereData = '';
        if ($dataInicial != null) {
            $whereData .= "AND dataCadastro >= " . $this->db_empresa->escape($dataInicial);
        }
        if ($dataFinal != null) {
            $whereData .= "AND dataCadastro <= " . $this->db_empresa->escape($dataFinal);
        }
        if ($tipo != null) {
            $whereData .= "AND fornecedor = " . $this->db_empresa->escape($tipo);
        }
        $query = "SELECT * FROM comercial_clientes WHERE dataCadastro $whereData ORDER BY nomeCliente";

        return $this->db_empresa->query($query, [$dataInicial, $dataFinal])->result();
    }

    public function clientesRapid($array = false)
    {
        $this->db_empresa->order_by('nomeCliente', 'asc');

        $result = $this->db_empresa->get('comercial_clientes');
        if ($array) {
            return $result->result_array();
        }
        return $result->result();
    }


    public function produtosRapidMin()
    {
        $this->load->model('setdb_model');
    
        $this->db_empresa->select('*, ((estoque_produtos.estoque * estoque_produtos.precoCompra) / estoque_medidas.multiplicador) as valorEstoque');
    
        $this->db_empresa->from('estoque_produtos');     
        $this->db_empresa->join('estoque_medidas', 'estoque_produtos.estoque_medida_id = estoque_medidas.id_estoque_medida');
        $this->db_empresa->join('estoque_marcas', 'estoque_produtos.estoque_marca_id = estoque_marcas.id_estoque_marca');
        $this->db_empresa->join('estoque_tipo_produtos', 'estoque_produtos.estoque_tipo_produto_id = estoque_tipo_produtos.id_estoque_tipo_produto');
        $this->db_empresa->join('estoque_categorias', 'estoque_tipo_produtos.estoque_categoria_id = estoque_categorias.id_estoque_categoria');
        $this->db_empresa->join('estoque_sistema_medidas', 'estoque_medidas.estoque_sistema_medida_id = estoque_sistema_medidas.id_estoque_sistema_medida');
        $this->db_empresa->where('estoque <= estoqueMinimo');
        return $this->db_empresa->get()->result() ;
    }

    public function produtosCustom($precoInicial = null, $precoFinal = null, $estoqueInicial = null, $estoqueFinal = null, $tipoProduto = null, $marca = null, $sector = null, $categoria = null, $dataCadastro = null, $dataUpdate = null, $notaFiscal = null, $location = null, $addCampo = null )
    {

        $wherePreco = "";
        $whereEstoque = "";
        if ($tipoProduto != null) {
            $this->db_empresa->where('estoque_tipo_produto_id', $tipoProduto);
        }
        if ($marca != null) {
            $this->db_empresa->where('estoque_marca_id', $marca);
        }
        if ($sector != null) {
            $this->db_empresa->where('estoque_sector_id', $sector);
        }
        if ($categoria != null) {
            $this->db_empresa->where('estoque_categoria_id', $categoria);
        }
        if ($dataCadastro != null) {
            $this->db_empresa->like('dataCadastro', $dataCadastro);
        }
        if ($dataUpdate != null) {
            $this->db_empresa->like('dateUpdate', $dataUpdate);
        }
        if ($notaFiscal != null) {
            $this->db_empresa->join('financeiro_notas', 'estoque_produtos.financeiro_nota_id = financeiro_notas.id_financeiro_nota');
            $this->db_empresa->where('financeiro_nota_id', $notaFiscal);
        }
        if ($location != null) {
            $this->db_empresa->join('estoque_locations', 'estoque_produtos.estoque_location_id = estoque_locations.id_estoque_location');
            $this->db_empresa->where('estoque_location_id', $location);
        }
        if ($addCampo != null) {
            
            $this->db_empresa->like('observacao', $addCampo);
        }
       
        if ($precoInicial != null) {
            $wherePreco = "precoCompra BETWEEN " . $this->db_empresa->escape($precoInicial) . " AND " . $this->db_empresa->escape($precoFinal);
            $this->db_empresa->where($wherePreco);
        }
        if ($estoqueInicial != null) {
            $whereEstoque = "(estoque / estoque_medidas.multiplicador) BETWEEN " . $this->db_empresa->escape($estoqueInicial) . " AND " . $this->db_empresa->escape($estoqueFinal);
            $this->db_empresa->where($whereEstoque);
        }

        $this->db_empresa->select('*, ((estoque_produtos.estoque * estoque_produtos.precoCompra) / estoque_medidas.multiplicador) as valorEstoque');
    
        $this->db_empresa->from('estoque_produtos');     
        $this->db_empresa->join('estoque_medidas', 'estoque_produtos.estoque_medida_id = estoque_medidas.id_estoque_medida');
        $this->db_empresa->join('estoque_marcas', 'estoque_produtos.estoque_marca_id = estoque_marcas.id_estoque_marca');
        $this->db_empresa->join('estoque_tipo_produtos', 'estoque_produtos.estoque_tipo_produto_id = estoque_tipo_produtos.id_estoque_tipo_produto');
        $this->db_empresa->join('estoque_categorias', 'estoque_tipo_produtos.estoque_categoria_id = estoque_categorias.id_estoque_categoria');
        $this->db_empresa->join('estoque_sistema_medidas', 'estoque_medidas.estoque_sistema_medida_id = estoque_sistema_medidas.id_estoque_sistema_medida');
     

        return $this->db_empresa->get()->result() ;

       
    }

    public function produtosEtiquetas($de, $ate)
    {
        $query = "SELECT * FROM estoque_produtos WHERE id_estoque_produto BETWEEN " . $this->db_empresa->escape($de) . " AND " . $this->db_empresa->escape($ate) . " ORDER BY id_estoque_produto";

        $this->db_empresa->order_by('produtoDescricao', 'asc');

        return $this->db_empresa->query($query)->result();
        

    }

    public function skuRapid($array = false)
    {
        $this->db_empresa->select('clientes.idClientes, clientes.nomeCliente, produtos.idProdutos, produtos.descricao, itens_de_vendas.quantidade, vendas.idVendas as idRelacionado, vendas.dataVenda as dataOcorrencia, itens_de_vendas.preco, (itens_de_vendas.preco * itens_de_vendas.quantidade) as precoTotal, "venda" as origem');
        $this->db_empresa->from('vendas');
        $this->db_empresa->join('itens_de_vendas', 'vendas.idVendas = itens_de_vendas.vendas_id');
        $this->db_empresa->join('clientes', 'clientes.idClientes = vendas.clientes_id');
        $this->db_empresa->join('produtos', 'produtos.idProdutos = itens_de_vendas.produtos_id');
        $subQuery1 = $this->db_empresa->get_compiled_select();
        $this->db_empresa->reset_query();

        $this->db_empresa->select('clientes.idClientes, clientes.nomeCliente, produtos.idProdutos, produtos.descricao, produtos_os.quantidade, os.idOs as idRelacionado, os.dataInicial as dataOcorrencia, produtos_os.preco , (produtos_os.preco * produtos_os.quantidade) as precoTotal, "os" as origem');
        $this->db_empresa->from('os');
        $this->db_empresa->join('produtos_os', 'produtos_os.os_id = os.idOs');
        $this->db_empresa->join('clientes', 'clientes.idClientes = os.clientes_id');
        $this->db_empresa->join('produtos', 'produtos.idProdutos = produtos_os.produtos_id');
        $subQuery2 = $this->db_empresa->get_compiled_select();
        $this->db_empresa->reset_query();

        $query = $this->db_empresa->query("SELECT * FROM ($subQuery1 UNION $subQuery2) as result ORDER BY dataOcorrencia DESC");
        if ($array) {
            return $query->result_array();
        }

        return $query->result();
    }

    public function skuCustom($dataInicial = null, $dataFinal = null, $cliente = null, $origem = null, $array = false)
    {
        $this->db_empresa->select('clientes.idClientes, clientes.nomeCliente, produtos.idProdutos, produtos.descricao, itens_de_vendas.quantidade, vendas.idVendas as idRelacionado, vendas.dataVenda as dataOcorrencia, itens_de_vendas.preco, (itens_de_vendas.preco * itens_de_vendas.quantidade) as precoTotal, "venda" as origem');
        $this->db_empresa->from('vendas');
        $this->db_empresa->join('itens_de_vendas', 'vendas.idVendas = itens_de_vendas.vendas_id');
        $this->db_empresa->join('clientes', 'clientes.idClientes = vendas.clientes_id');
        $this->db_empresa->join('produtos', 'produtos.idProdutos = itens_de_vendas.produtos_id');
        $subQuery1 = $this->db_empresa->get_compiled_select();
        $this->db_empresa->reset_query();

        $this->db_empresa->select('clientes.idClientes, clientes.nomeCliente, produtos.idProdutos, produtos.descricao, produtos_os.quantidade, os.idOs as idRelacionado, os.dataInicial as dataOcorrencia, produtos_os.preco , (produtos_os.preco * produtos_os.quantidade) as precoTotal, "os" as origem');
        $this->db_empresa->from('os');
        $this->db_empresa->join('produtos_os', 'produtos_os.os_id = os.idOs');
        $this->db_empresa->join('clientes', 'clientes.idClientes = os.clientes_id');
        $this->db_empresa->join('produtos', 'produtos.idProdutos = produtos_os.produtos_id');
        $subQuery2 = $this->db_empresa->get_compiled_select();
        $this->db_empresa->reset_query();

        $query = "
            CREATE TEMPORARY TABLE IF NOT EXISTS results
            (SELECT * FROM ($subQuery1 UNION $subQuery2) as unionTable)
        ";
        $this->db_empresa->query($query);

        $this->db_empresa->from("results");
        $this->db_empresa->order_by("dataOcorrencia", "desc");
        if ($dataInicial) {
            $this->db_empresa->where('dataOcorrencia >=', $dataInicial);
        }

        if ($dataFinal) {
            $this->db_empresa->where('dataOcorrencia <=', $dataFinal);
        }

        if ($cliente) {
            $this->db_empresa->where('idClientes =', $cliente);
        }

        if ($origem) {
            $this->db_empresa->where('origem =', $origem);
        }

        $result = $this->db_empresa->get();
        if ($array) {
            return $result->result_array();
        }

        return $result->result();
    }

    public function servicosRapid()
    {
        $this->db_empresa->order_by('nome', 'asc');

        return $this->db_empresa->get('servicos')->result();
    }

    public function servicosCustom($precoInicial = null, $precoFinal = null)
    {
        $query = "SELECT * FROM servicos WHERE preco BETWEEN ? AND ? ORDER BY nome";

        return $this->db_empresa->query($query, [$precoInicial, $precoFinal])->result();
    }

    public function osRapid($array = false)
    {
        $query = 'CREATE TEMPORARY TABLE IF NOT EXISTS total_produtos SELECT SUM(subTotal) as total_produto, os_id FROM produtos_os GROUP BY os_id; ';
        $this->db_empresa->query($query);

        $query = 'CREATE TEMPORARY TABLE IF NOT EXISTS total_servicos SELECT SUM(subTotal) as total_servico, os_id FROM servicos_os GROUP BY os_id; ';
        $this->db_empresa->query($query);

        $this->db_empresa->select('os.*,clientes.nomeCliente, total_servicos.total_servico, total_produtos.total_produto');
        $this->db_empresa->from('os');
        $this->db_empresa->join('clientes', 'clientes.idClientes = os.clientes_id');
        $this->db_empresa->join('total_produtos', 'total_produtos.os_id = os.idOs', 'left');
        $this->db_empresa->join('total_servicos', 'total_servicos.os_id = os.idOs', 'left');
        $this->db_empresa->order_by('os.dataInicial', 'DESC');

        $result = $this->db_empresa->get();
        if ($array) {
            return $result->result_array();
        }

        return $result->result();
    }

    public function osCustom($dataInicial = null, $dataFinal = null, $cliente = null, $responsavel = null, $status = null, $array = false)
    {
        $whereData = "";
        $whereCliente = "";
        $whereResponsavel = "";
        $whereStatus = "";
        if ($dataInicial != null) {
            $whereData .= "AND dataInicial >= " . $this->db_empresa->escape($dataInicial);
        }
        if ($dataFinal != null) {
            $whereData .= "AND dataInicial <= " . $this->db_empresa->escape($dataFinal);
        }
        if ($cliente != null) {
            $whereCliente = "AND clientes_id = " . $this->db_empresa->escape($cliente);
        }
        if ($responsavel != null) {
            $whereResponsavel = "AND usuarios_id = " . $this->db_empresa->escape($responsavel);
        }
        if ($status != null) {
            $whereStatus = "AND status = " . $this->db_empresa->escape($status);
        }
        $query = 'CREATE TEMPORARY TABLE IF NOT EXISTS total_produtos SELECT SUM(subTotal) as total_produto, os_id FROM produtos_os GROUP BY os_id; ';
        $this->db_empresa->query($query);

        $query = 'CREATE TEMPORARY TABLE IF NOT EXISTS total_servicos SELECT SUM(subTotal) as total_servico, os_id FROM servicos_os GROUP BY os_id; ';
        $this->db_empresa->query($query);

        $query = "SELECT os.*,clientes.nomeCliente, total_servicos.total_servico, total_produtos.total_produto FROM os
                   LEFT JOIN total_produtos ON total_produtos.os_id = os.idOs
                   LEFT JOIN total_servicos ON total_servicos.os_id = os.idOs
                   LEFT JOIN clientes ON os.clientes_id = clientes.idClientes
                   WHERE idOs != 0 $whereData $whereCliente $whereResponsavel $whereStatus
                   ORDER BY os.dataInicial";

        $result = $this->db_empresa->query($query);
        if ($array) {
            return $result->result_array();
        }

        return $result->result();
    }

    public function financeiroRapid($array = false)
    {
        $primeiroDiaMes = new \DateTime('first day of this month');
        $ultimodiaMes = new DateTime('last day of this month');

        $this->db_empresa->where('data_vencimento >=', $primeiroDiaMes->format('Y-m-d'));
        $this->db_empresa->where('data_vencimento <=', $ultimodiaMes->format('Y-m-d'));
        $this->db_empresa->order_by('data_vencimento', 'asc');
        $result = $this->db_empresa->get('lancamentos');
        if ($array) {
            return $result->result_array();
        }

        return $result->result();
    }

    public function financeiroCustom($dataInicial = null, $dataFinal = null, $tipo = null, $situacao = null, $array = false)
    {
        if ($dataInicial) {
            $this->db_empresa->where('data_vencimento >=', $dataInicial);
        }

        if ($dataFinal) {
            $this->db_empresa->where('data_vencimento <=', $dataFinal);
        }

        if ($tipo !== 'todos' && $tipo) {
            $this->db_empresa->where('tipo', $tipo);
        }

        if ($situacao !== 'todos' && $situacao) {
            if ($situacao === 'pendente') {
                $this->db_empresa->where('baixado', 0);
            }
            if ($situacao === 'pago') {
                $this->db_empresa->where('baixado', 1);
            }
        }

        $this->db_empresa->order_by('data_vencimento', 'asc');
        $result = $this->db_empresa->get('financeiro_lancamentos');
        if ($array) {
            return $result->result_array();
        }

        return $result->result();
    }

    public function vendasRapid($array = false)
    {
        $this->db_empresa->select('vendas.*,clientes.nomeCliente, funcionarios.nome');
        $this->db_empresa->from('vendas');
        $this->db_empresa->join('clientes', 'clientes.idClientes = vendas.clientes_id');
        $this->db_empresa->join('funcionarios', 'funcionarios.idFuncionarios = vendas.funcionario_id');
        $this->db_empresa->order_by('vendas.idVendas', 'ASC');

        $result = $this->db_empresa->get();
        if ($array) {
            return $result->result_array();
        }

        return $result->result();
    }

    public function vendasCustom($dataInicial = null, $dataFinal = null, $cliente = null, $responsavel = null, $array = false)
    {
        $whereData = "";
        $whereCliente = "";
        $whereResponsavel = "";
        $whereStatus = "";
        if ($dataInicial != null) {
            $whereData .= "AND dataVenda >= " . $this->db_empresa->escape($dataInicial);
        }
        if ($dataFinal != null) {
            $whereData .= "AND dataVenda <= " . $this->db_empresa->escape($dataFinal);
        }
        if ($cliente != null) {
            $whereCliente = "AND clientes_id = " . $this->db_empresa->escape($cliente);
        }
        if ($responsavel != null) {
            $whereResponsavel = "AND usuarios_id = " . $this->db_empresa->escape($responsavel);
        }

        $query = "SELECT vendas.*,clientes.nomeCliente, usuarios.nome FROM vendas
        LEFT JOIN clientes ON vendas.clientes_id = clientes.idClientes
        LEFT JOIN usuarios ON vendas.usuarios_id = usuarios.idUsuarios
        WHERE idVendas != 0 $whereData $whereCliente $whereResponsavel ORDER BY vendas.idVendas";

        $result = $this->db_empresa->query($query);
        if ($array) {
            return $result->result_array();
        }

        return $result->result();
    }

    public function receitasBrutasRapid()
    {
        $emitente = $this->db->query("SELECT * FROM administrativo_emitentes LIMIT 1")->row_array();

        $inicio = (new DateTime())->modify('first day of this month');
        $fim = (new DateTime())->modify('last day of this month');

        $query = "
            SELECT
                SUM(valor) total,
                SUM(case when descricao NOT LIKE '%Fatura de OS%' AND descricao NOT LIKE '%Fatura de Venda%' then valor else 0 end) as totalOutros,
                SUM(case when descricao LIKE '%Fatura de OS%' then valor else 0 end) as totalServicos,
                SUM(case when descricao LIKE '%Fatura de Venda%' then valor else 0 end) as totalVendas
            FROM financeiro_lancamentos
                WHERE baixado = 1
                AND tipo = 'receita'
                AND data_vencimento >= ?
                AND data_vencimento <= ?
        ";

        $relatorio = $this->db_empresa->query($query, [$inicio->format('c'), $fim->format('c')])->row_array();

        $mercadoriasTotalSemNf = floatval($relatorio['totalVendas']);
        $mercadoriasTotalComNf = 0;
        $mercadoriasTotal = $mercadoriasTotalSemNf + $mercadoriasTotalComNf;

        $industriaTotalSemNf = 0;
        $industriaTotalComNf = 0;
        $industriaTotal = $industriaTotalSemNf + $industriaTotalComNf;

        $servicosTotalSemNf = floatval($relatorio['totalServicos']);
        $servicosTotalComNf = 0;
        $servicosTotal = $servicosTotalSemNf + $servicosTotalComNf;

        $totalMes = $mercadoriasTotal + $industriaTotal = $servicosTotal;

        $periodo = sprintf("%s à %s", $inicio->format('d/m/Y'), $fim->format('d/m/Y'));

        return [
            'cnpj' => $emitente['cnpj'],
            'emitente' => $emitente['empresa'],
            'periodo' => $periodo,
            'mercadoriasTotalSemNf' => number_format($mercadoriasTotalSemNf, 2, ',', '.'),
            'mercadoriasTotalComNf' => number_format($mercadoriasTotalComNf, 2, ',', '.'),
            'mercadoriasTotal' => number_format($mercadoriasTotal, 2, ',', '.'),
            'industriaTotalSemNf' => number_format($industriaTotalSemNf, 2, ',', '.'),
            'industriaTotalComNf' => number_format($industriaTotalComNf, 2, ',', '.'),
            'industriaTotal' => number_format($industriaTotal, 2, ',', '.'),
            'servicosTotalSemNf' => number_format($servicosTotalSemNf, 2, ',', '.'),
            'servicosTotalComNf' => number_format($servicosTotalComNf, 2, ',', '.'),
            'servicosTotal' => number_format($servicosTotal, 2, ',', '.'),
            'totalMes' => number_format($totalMes, 2, ',', '.'),
            'localEdata' => sprintf("%s, %s", $emitente['cidadeEmitente'], (new DateTime())->format('d/m/Y')),
        ];
    }

    public function receitasBrutasCustom($dataInicial = null, $dataFinal = null)
    {
        $emitente = $this->db_empresa->query("SELECT * FROM administrativo_emitentes LIMIT 1")->row_array();

        $query = "
            SELECT
                SUM(valor) total,
                SUM(case when descricao NOT LIKE '%Fatura de OS%' AND descricao NOT LIKE '%Fatura de Venda%' then valor else 0 end) as totalOutros,
                SUM(case when descricao LIKE '%Fatura de OS%' then valor else 0 end) as totalServicos,
                SUM(case when descricao LIKE '%Fatura de Venda%' then valor else 0 end) as totalVendas
            FROM financeiro_lancamentos
                WHERE baixado = 1
                AND tipo = 'receita'
                AND data_vencimento >= ?
                AND data_vencimento <= ?
        ";

        $inicio = new DateTime($dataInicial);
        $fim = new DateTime($dataFinal);

        $relatorio = $this->db_empresa->query($query, [$inicio->format('c'), $fim->format('c')])->row_array();

        $mercadoriasTotalSemNf = floatval($relatorio['totalVendas']);
        $mercadoriasTotalComNf = 0;
        $mercadoriasTotal = $mercadoriasTotalSemNf + $mercadoriasTotalComNf;

        $industriaTotalSemNf = 0;
        $industriaTotalComNf = 0;
        $industriaTotal = $industriaTotalSemNf + $industriaTotalComNf;

        $servicosTotalSemNf = floatval($relatorio['totalServicos']);
        $servicosTotalComNf = 0;
        $servicosTotal = $servicosTotalSemNf + $servicosTotalComNf;

        $totalMes = $mercadoriasTotal + $industriaTotal = $servicosTotal;

        $periodo = sprintf("%s à %s", $inicio->format('d/m/Y'), $fim->format('d/m/Y'));

        return [
            'cnpj' => $emitente['cnpj'],
            'emitente' => $emitente['nome'],
            'periodo' => $periodo,
            'mercadoriasTotalSemNf' => number_format($mercadoriasTotalSemNf, 2, ',', '.'),
            'mercadoriasTotalComNf' => number_format($mercadoriasTotalComNf, 2, ',', '.'),
            'mercadoriasTotal' => number_format($mercadoriasTotal, 2, ',', '.'),
            'industriaTotalSemNf' => number_format($industriaTotalSemNf, 2, ',', '.'),
            'industriaTotalComNf' => number_format($industriaTotalComNf, 2, ',', '.'),
            'industriaTotal' => number_format($industriaTotal, 2, ',', '.'),
            'servicosTotalSemNf' => number_format($servicosTotalSemNf, 2, ',', '.'),
            'servicosTotalComNf' => number_format($servicosTotalComNf, 2, ',', '.'),
            'servicosTotal' => number_format($servicosTotal, 2, ',', '.'),
            'totalMes' => number_format($totalMes, 2, ',', '.'),
            'localEdata' => sprintf("%s, %s", $emitente['cidadeEmitente'], (new DateTime())->format('d/m/Y')),
        ];
    }
}
