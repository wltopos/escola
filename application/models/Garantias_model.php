<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Garantias_model extends CI_Model
{

    /**
     * author: Wilmerson Felipe
     * email: will.phelipe@gmail.com
     *
     */

    public function __construct()
    {
        parent::__construct();
        $this->db_empresa = $this->load->database($this->session->userdata('dbEmpresa'), true);
    }

    
    public function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        $this->db_empresa->select($fields.', funcionarios.nome, funcionarios.idFuncionario');
        $this->db_empresa->from($table);
        $this->db_empresa->limit($perpage, $start);
        $this->db_empresa->join('funcionarios', 'funcionarios.idFuncionario = garantias.funcionario_id');
        $this->db_empresa->order_by('idGarantias', 'asc');
        if ($where) {
            $this->db_empresa->where($where);
        }
        
        $query = $this->db_empresa->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    public function getById($id)
    {
        $this->db_empresa->select('garantias.*, usuarios.telefone, usuarios.email, usuarios.nome');
        $this->db_empresa->from('garantias');
        $this->db_empresa->join('usuarios', 'usuarios.idUsuarios = garantias.usuarios_id');
        $this->db_empresa->where('garantias.idGarantias', $id);
        $this->db_empresa->limit(1);
        return $this->db_empresa->get()->row();
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


}

/* End of file vendas_model.php */
/* Location: ./application/models/vendas_model.php */
