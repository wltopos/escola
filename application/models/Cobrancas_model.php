<?php if (! defined('BASEPATH')) {
    exit('Pasta raiz não localizada ou inacessível');
}

class Cobrancas_model extends CI_Model
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
        $this->db_empresa->select($fields, 'vendas.*,os.*');
        $this->db_empresa->from($table);
        $this->db_empresa->limit($perpage, $start);
        $this->db_empresa->order_by('idCobranca', 'desc');
        if ($where) {
            $this->db_empresa->where($where);
        }

        $query = $this->db_empresa->get();
        $result =  !$one  ? $query->result() : $query->row();

        return $result;
    }

    public function getById($id)
    {
        $this->db_empresa->select('comercial_cobrancas.*, comercial_clientes.*');
        $this->db_empresa->from('comercial_cobrancas');
        $this->db_empresa->where('comercial_cobrancas.id_comercial_cobranca', $id);
        $this->db_empresa->join('comercial_clientes', 'comercial_clientes.id_comercial_cliente = comercial_cobrancas.comercial_cliente_id');
        $this->db_empresa->limit(1);

        return $this->db_empresa->get()->row();
    }

    public function getByOs($id)
    {
        return $this->db_empresa->query("SELECT DISTINCT `cobrancas`.*,`clientes`.*,`os`.* FROM `cobrancas`,`clientes`,`os` WHERE `charge_id` = $id AND `os`.`idOs` = `cobrancas`.`os_id`")->row();
    }

    public function getByVendas($id)
    {
        return $this->db_empresa->query("SELECT DISTINCT `cobrancas`.*,`clientes`.*,`vendas`.* FROM `cobrancas`,`clientes`,`vendas` WHERE `charge_id` = $id AND `vendas`.`idVendas` = `cobrancas`.`vendas_id`")->row();
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

    public function atualizarStatus($idCobranca)
    {
        $cobranca = $this->getById($idCobranca);
        if (empty($cobranca)) {
            return $this->session->set_flashdata('error', 'Cobrança não existe!');
        }

        $gatewayDePagamento = $cobranca->payment_gateway;
        $this->load->library("Gateways/$gatewayDePagamento", null, 'PaymentGateway');

        $result = $this->PaymentGateway->atualizarDados($cobranca->id_comercial_cobranca);

        return $result;
    }

    public function confirmarPagamento($idCobranca)
    {
        $cobranca = $this->getById($idCobranca);
        if (empty($cobranca)) {
            return $this->session->set_flashdata('error', 'Cobrança não existe!');
        }

        $gatewayDePagamento = $cobranca->payment_gateway;
        $this->load->library("Gateways/$gatewayDePagamento", null, 'PaymentGateway');

        $result = $this->PaymentGateway->confirmarPagamento($cobranca->idCobranca);

        return $result;
    }

    public function cancelarPagamento($idCobranca)
    {
        $cobranca = $this->getById($idCobranca);
        if (empty($cobranca)) {
            return $this->session->set_flashdata('error', 'Cobrança não existe!');
        }

        $gatewayDePagamento = $cobranca->payment_gateway;
        $this->load->library("Gateways/$gatewayDePagamento", null, 'PaymentGateway');

        $result = $this->PaymentGateway->cancelar($cobranca->id_comercial_cobranca);

        return $result;
    }

    public function enviarEmail($idCobranca)
    {
        $cobranca = $this->getById($idCobranca);
        if (empty($cobranca)) {
            return $this->session->set_flashdata('error', 'Cobrança não existe!');
        }

        $gatewayDePagamento = $cobranca->payment_gateway;
        $this->load->library("Gateways/$gatewayDePagamento", null, 'PaymentGateway');

        $result = $this->PaymentGateway->enviarPorEmail($cobranca->idCobranca);

        return $result;
    }
}
