<?php if (! defined('BASEPATH')) {
    exit('Pasta raiz não localizada ou inacessível');
}

class Financeiro_model extends CI_Model
{

    /**
     * author: Ramon Silva
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
        $this->db_empresa->select($fields.', funcionarios.*');
        $this->db_empresa->from($table);
        $this->db_empresa->join('funcionarios', 'funcionarios.idFuncionario = funcionario_id', 'left');
        $this->db_empresa->order_by('data_vencimento', 'asc');
        $this->db_empresa->limit($perpage, $start);
        if ($where) {
            $this->db_empresa->where($where);
        }

        $query = $this->db_empresa->get();

        $result = !$one ? $query->result() : $query->row();

        return $result;
    }

    public function getTotals($where = '')
    {
        $this->db_empresa->select("
            SUM(case when tipo = 'despesa' then valor end) as despesas,
            SUM(case when tipo = 'receita' then valor end) as receitas,
            SUM(case when tipo = 'receita'  then valor_ajuste end) as descontos_receita,
            SUM(case when tipo = 'despesa'  then valor_ajuste end) as descontos_despesa,
            SUM(case when tipo = 'receita'  then valor_pago end) as valor_pago_receita,
            SUM(case when tipo = 'despesa'  then valor_pago end) as valor_pago_despesa,
            SUM(case when tipo = 'despesa' and baixado = '1' then valor end) as despesas_pagas,
            SUM(case when tipo = 'receita' and baixado = '1' then valor end) as receitas_pagas,
            SUM(case when tipo = 'receita' and baixado = '1'  then valor_pago end) as valor_pago_receitas_pagas,
            SUM(case when tipo = 'despesa' and baixado = '1'  then valor_pago end) as valor_pago_despesas_pagas,
        ");
        $this->db_empresa->from('financeiro_lancamentos');

        if ($where) {
            $this->db_empresa->where($where);
        }

        return (array) $this->db_empresa->get()->row();
    }

// ======================================================================================
// RETORNO DE DADOS PARA GERAR COBRANÇAS
// ======================================================================================
public function getOSID_cobranca($id)
{
    $this->db_empresa->select('comercial_os_clientes.*, clientes.*, clientes.celular as celular_cliente, garantias.refGarantia, usuarios.telefone as telefone_usuario, usuarios.email as email_usuario, usuarios.nome');
    $this->db_empresa->from('comercial_os_clientes');
    $this->db_empresa->join('comercial_clientes', 'comercial_clientes.id_comercial_cliente = comercial_os_cliente.comercial_cliente_id');
    $this->db_empresa->join('coemercial_garantias', 'coemercial_garantias.id_coemercial_garantia = comercial_os_clientes.coemercial_garantia_id', 'left');
    $this->db_empresa->where('comercial_os_clientes.id_comercial_os_cliente', $id);
    $this->db_empresa->limit(1);

    return $this->db_empresa->get()->row();
}


public function getVendasId_cobranca($id)
    {
        $this->db_empresa->select('comercial_vendas.*, comercial_clientes.*, comercial_clientes.email as emailCliente, financeiro_lancamentos.data_vencimento');
        $this->db_empresa->from('comercial_vendas');
        $this->db_empresa->join('comercial_clientes', 'comercial_clientes.id_comercial_cliente = comercial_vendas.comercial_cliente_id');
        $this->db_empresa->join('financeiro_lancamentos', 'comercial_vendas.id_comercial_venda = financeiro_lancamentos.comercial_venda_id', 'LEFT');
        $this->db_empresa->where('comercial_vendas.id_comercial_venda', $id);
        $this->db_empresa->limit(1);
        return $this->db_empresa->get()->row();
    }
// =======================================================================
// FIM DADOS PARA GERAÇÃO DE COBRANÇAS
// =======================================================================

    public function getEstatisticasFinanceiro()
    {
        $sql = "SELECT SUM(CASE WHEN baixado = 1 AND tipo = 'receita' THEN valor END) as total_receitas_pagas_sem_desconto,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'despesa' THEN valor END) as total_valor_despesas_sem_desconto,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'receita' THEN valor END) as total_valor_receitas_pendentes,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'despesa' THEN valor END) as total_valor_despesas_pendentes,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'receita' THEN valor_pago END) as total_valor_pago_receitas,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'despesa' THEN valor_pago END) as total_valor_pago_despesas,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'receita' THEN valor_ajuste END) as total_descontos_pagos_receita,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'receita' THEN valor_ajuste END) as total_valor_descontos_receita_pendentes,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'receita' AND valor_ajuste = 0 THEN valor END) as total_receitas_pagas_sem_desconto,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'despesa' AND valor_ajuste = 0 THEN valor END) as total_pagas_despesas_sem_desconto
                       FROM financeiro_lancamentos";

    
        return $this->db_empresa->query($sql)->row();    
    }

    public function getById($id)
    {
        $this->db_empresa->where('idClientes', $id);
        $this->db_empresa->limit(1);
        return $this->db_empresa->get('clientes')->row();
    }

    public function add($table, $data)
    {
        $this->db_empresa->insert($table, $data);
        if ($this->db_empresa->affected_rows() == '1') {
            return true;
        }

        return false;
    }

    function add1($table,$data1){
        $this->db_empresa->insert($table, $data1);         
        if ($this->db_empresa->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;       
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

    public function count($table, $where='')
    {
        $this->db_empresa->from($table);
        if ($where !='') {
            $this->db_empresa->where($where);
        }
        return $this->db_empresa->count_all_results();
    }

    public function autoCompleteClienteFornecedor($q)
    {
        $this->db_empresa->select('DISTINCT(cliente_fornecedor) as cliente_fornecedor');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('cliente_fornecedor', $q);
        $query = $this->db_empresa->get('lancamentos');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = ['label' => $row['cliente_fornecedor'], 'id' => $row['cliente_fornecedor']];
            }
            echo json_encode($row_set);
        }
    }

    public function isEditable($id = null)
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eProdutos')) {
            return false;
        }
        if ($lancamentos = $this->getById($id)) {
            $lancamentosT = (int)($lancamentos->status === "Faturado" || $lancamentos->status === "Cancelado" || $lancamentos->faturado == 1);
            if ($lancamentosT) {
                return $this->data['configuration']['control_editos'] == '1';
            }
        }
        return true;
    }

    public function autoCompleteClienteReceita($q)
    {
        $this->db_empresa->select('id_comercial_cliente, nomeCliente');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('nomeCliente', $q);
        $query = $this->db_empresa->get('comercial_clientes');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = ['label' => $row['nomeCliente'], 'id' => $row['idClientes']];
            }
            echo json_encode($row_set);
        }
    }
}
