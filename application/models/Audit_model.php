<?php if (!defined('BASEPATH')) {
    exit('Pasta raiz não localizada ou inacessível');
}

class Audit_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logado')) {
            $this->db_empresa = $this->load->database($this->session->userdata('dbEmpresa'), true);
        }
        if ($this->session->userdata('idEmpresa')) {
            $this->db_empresa = $this->load->database($this->session->userdata('idEmpresa'), true);
        }
    }

    public function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        $this->db_empresa->select($fields);
        $this->db_empresa->from($table);
        $this->db_empresa->order_by('idLogs', 'desc');
        $this->db_empresa->limit($perpage, $start);
        if ($where) {
            $this->db_empresa->where($where);
        }

        $query = $this->db_empresa->get();

        $result = !$one ? $query->result() : $query->row();
        return $result;
    }

    public function add($data)
    {
        $this->db_empresa->insert('logs', $data);
        if ($this->db_empresa->affected_rows() == '1') {
            return true;
        }
        return false;
    }

    public function count($table)
    {
        return $this->db_empresa->count_all('logs');
    }

    public function clean()
    {
        $this->db_empresa->where('data <', date('Y-m-d', strtotime('- 30 days')));
        $this->db_empresa->delete('logs');

        if ($this->db_empresa->affected_rows()) {
            return true;
        }

        return false;
    }
}

/* End of file Log_model.php */
/* Location: ./application/models/Log_model.php */
