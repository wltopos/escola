<?php
class Usuarios_model extends CI_Model
{


    /**
     * author: Lucas Rocha
     * email: silva018-mg@yahoo.com.br
     *
     */
    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logado')){
      
            $this->db_empresa = $this->load->database($this->session->userdata('dbEmpresa'), true) ;
            }
        
    }

    

    public function get($perpage = 0, $start = 0, $one = false)
    {
        $this->db_empresa->from('administrativo_funcionarios');
       // $this->db->select('administrativo_funcionarios.*, permissoes.nome as permissao');
        $this->db_empresa->select('administrativo_funcionarios.*');
        $this->db_empresa->limit($perpage, $start);
        $this->db_empresa->join('administrativo_permissions', 'administrativo_funcionarios.permissoes_id = administrativo_permissions.id_administrativo_permission', 'left');
   
        $query = $this->db_empresa->get();
        
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
     
        $this->db_empresa->where('id_administrativo_funcionario', $id);
        $this->db_empresa->limit(1);
        return $this->db_empresa->get('administrativo_funcionarios')->row();
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
     
        $this->db_empresa->where($fieldID, $ID);
        $this->db_empresa->update($table, $data);

        if ($this->db_empresa->affected_rows() >= 0) {
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
