<?php if (! defined('BASEPATH')) {
    exit('Pasta raiz não localizada ou inacessível');
}

class ResetSenhas_model extends CI_Model
{

    /**
     * author: Wilmerson
     * email: will.phelipe@gmail.com
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->db_empresa = $this->load->database($this->session->userdata('dbEmpresa'), true);
    }

    public function getById($email)
    {
        $this->db_empresa->where('email', $email);
        $this->db_empresa->limit(1);
        return $this->db_empresa->get('resets_de_senha')->row();
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
}
