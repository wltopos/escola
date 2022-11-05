<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Notasfiscais_model extends CI_Model
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
    
    public function delete($table, $fieldID, $id)
    {
        $this->db_empresa->where($fieldID, $id);
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

    public function search($pesquisa, $de, $ate)
    {
        if ($pesquisa != null) { 
            $this->db_empresa->like('notaFiscal', $pesquisa);
        }

        if ($de != null) {
            $this->db_empresa->where('dataEmissao >=', $de);
            $this->db_empresa->where('dataEmissao <=', $ate);
        }
        $this->db_empresa->join('clientes', 'notas_fiscais.fornecedorId = clientes.idClientes' );
        $this->db_empresa->limit(10);
        return $this->db_empresa->get('notas_fiscais')->result();
    }
}

/* End of file arquivos_model.php */
/* Location: ./application/models/arquivos_model.php */
