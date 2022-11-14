<?php
class Usuarios_model extends CI_Model
{


    /**
     * author: Ramon Silva
     * email: silva018-mg@yahoo.com.br
     *
     */
    
    public function __construct()
    {
        parent::__construct();
        
    }

    

    public function get($perpage = 0, $start = 0, $one = false)
    {
        $this->db->from('administrativo_funcionarios');
       // $this->db->select('administrativo_funcionarios.*, permissoes.nome as permissao');
        $this->db->select('administrativo_funcionarios.*');
        $this->db->limit($perpage, $start);
        $this->db->join('administrativo_permission', 'administrativo_funcionarios.permissions_id = administrativo_permissions.id_administrativo_permission', 'left');
   
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    public function getAllTipos()
    {
        $this->db->where('dbEmpresa', $this->session->userdata('dbEmpresa'));
        $this->db->where('situacao', 1);
        return $this->db->get('tiposUsuario')->result();
    }

    public function getById($id)
    {
        $this->db->where('dbEmpresa', $this->session->userdata('dbEmpresa'));
        $this->db->where('idUsuarios', $id);
        $this->db->limit(1);
        return $this->db->get('usuarios')->row();
    }

    public function getAll()
    {
        
        $this->db->where('dbEmpresa', $this->session->userdata('dbEmpresa'));
        return $this->db->get('usuarios')->result();
    }
    
    public function add($table, $data)
    {
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            return true;
        }
        
        return false;
    }
    
    public function edit($table, $data, $fieldID, $ID)
    {
        $this->db->where('dbEmpresa', $this->session->userdata('dbEmpresa'));
        $this->db->where($fieldID, $ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0) {
            return true;
        }
        
        return false;
    }
    
    public function delete($table, $fieldID, $ID)
    {
        $this->db->where('dbEmpresa', $this->session->userdata('dbEmpresa'));
        $this->db->where($fieldID, $ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1') {
            return true;
        }
        
        return false;
    }
    
    public function count($table)
    {
        $this->db->where('dbEmpresa', $this->session->userdata('dbEmpresa'));
        return $this->db->count_all($table);
    }
}
