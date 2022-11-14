<?php if (! defined('BASEPATH')) {
    exit('Pasta raiz não localizada ou inacessível');
}

class Arquivos_model extends CI_Model
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
    

    
    public function delete($table, $fieldID, $ID)
    {
        $this->db_empresa->where($fieldID, $ID);
        $this->db_empresa->delete($table);
        if ($this->db_empresa->affected_rows() == '1') {
            return true;
        }
        
        return false;
    }


    public function search($pesquisa, $de, $ate)
    {
        if ($pesquisa != null) {
            $this->db_empresa->like('documento', $pesquisa);
        }

        if ($de != null) {
            $this->db_empresa->where('cadastro >=', $de);
            $this->db_empresa->where('cadastro <=', $ate);
        }
        $this->db_empresa->limit(10);
        return $this->db_empresa->get('documentos')->result();
    }
}

/* End of file arquivos_model.php */
/* Location: ./application/models/arquivos_model.php */
