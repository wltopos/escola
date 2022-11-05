<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Conecte_model extends CI_Model
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

    public function getLastOs($cliente)
    {
        $this->db_empresa->from('os');
        $this->db_empresa->join('funcionarios', 'os.funcionarios_id = usuarios.idFuncionario', 'left');
        $this->db_empresa->where('clientes_id', $cliente);
        $this->db_empresa->limit(5);
        $this->db_empresa->order_by('idOs', 'desc');

        return $this->db_empresa->get()->result();
    }

    public function getLastCompras($cliente)
    {
        $this->db_empresa->select('vendas.*,usuarios.nome');
        $this->db_empresa->from('vendas');
        $this->db_empresa->join('funcionarios', 'usuarios.idFuncionario = vendas.funcionarios_id');
        $this->db_empresa->where('clientes_id', $cliente);
        $this->db_empresa->limit(5);

        return $this->db_empresa->get()->result();
    }


    public function getCompras($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array', $cliente)
    {
        $this->db_empresa->select($fields);
        $this->db_empresa->from($table);
        $this->db_empresa->join('funcionarios', 'vendas.funcionarios_id = usuarios.idFuncionario', 'left');
        $this->db_empresa->where('clientes_id', $cliente);
        $this->db_empresa->limit($perpage, $start);
        if ($where) {
            $this->db_empresa->where($where);
        }

        $query = $this->db_empresa->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    public function getCobrancas($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array', $cliente)
    {
        $this->db_empresa->select($fields);
        $this->db_empresa->from($table);
        $this->db_empresa->join('clientes', 'cobrancas.clientes_id = clientes.idClientes', 'left');
        $this->db_empresa->where('clientes_id', $cliente);
        $this->db_empresa->limit($perpage, $start);
        if ($where) {
            $this->db_empresa->where($where);
        }

        $query = $this->db_empresa->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }
    public function getOs($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array', $cliente)
    {
        $this->db_empresa->select($fields);
        $this->db_empresa->from($table);
        $this->db_empresa->join('funcionarios', 'os.funcionarios_id = usuarios.idFuncionario', 'left');
        $this->db_empresa->where('clientes_id', $cliente);
        $this->db_empresa->limit($perpage, $start);
        $this->db_empresa->order_by('idOs', 'desc');
        if ($where) {
            $this->db_empresa->where($where);
        }

        $query = $this->db_empresa->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }
    
    public function getById($id)
    {
        $this->db_empresa->select('os.*, clientes.*, clientes.celular as celular_cliente, garantias.refGarantia, usuarios.telefone as telefone_usuario, usuarios.email as email_usuario, usuarios.nome');
        $this->db_empresa->from('os');
        $this->db_empresa->join('clientes', 'clientes.idClientes = os.clientes_id');
        $this->db_empresa->join('funcionarios', 'usuarios.idFuncionario = os.funcionarios_id');
        $this->db_empresa->join('garantias', 'garantias.idGarantias = os.garantias_id', 'left');
        $this->db_empresa->where('os.idOs', $id);
        $this->db_empresa->limit(1);

        return $this->db_empresa->get()->row();
    }

    public function count($table, $cliente)
    {
        $this->db_empresa->where('clientes_id', $cliente);
        return $this->db_empresa->count_all_results($table);
    }

    public function getDados()
    {
        $this->db_empresa->where('idclientes', $this->session->userdata('cliente_id'));
        $this->db_empresa->limit(1);
        return $this->db_empresa->get('clientes')->row();
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
}

/* End of file conecte_model.php */
/* Location: ./application/models/conecte_model.php */
