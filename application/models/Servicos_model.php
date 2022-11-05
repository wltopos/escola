<?php
class Servicos_model extends CI_Model
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
        $this->db_empresa->select($fields);
        $this->db_empresa->from($table);
        $this->db_empresa->order_by('idServicos', 'desc');
        $this->db_empresa->limit($perpage, $start);
        if ($where) {
            $this->db_empresa->where($where);
        }
        
        $query = $this->db_empresa->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    public function getById($id)
    {
        $this->db_empresa->where('idServicos', $id);
        $this->db_empresa->limit(1);
        return $this->db_empresa->get('servicos')->row();
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
}
