<?php
class Setdb_model extends CI_Model
{

    /**
     * author: Lucas Rocha
     * email: wltopos@gmail.com
     *
     */

    /** Para inserir os parâmetros corretos não funções de Setdb deve-se observar os padrões adotados em cada função
     *  para a função getTabela -> $tabela = tabela principal, $fields = ou colunas começando pela tabela principal
     *  e adotando o seguinte padrão (<nome da tabela> :coluna1 :coluna2<nome da segunda tabela> coluna1: coluna2:).
     * Desta forma o sistema estenderá todas as variáveis de configuração
     *
     *       
     */
    public function __construct()
    {
        parent::__construct();
        
    }

    public function getTabelaID($table, $fields, $where = '', $join = '', $paramentro = '')
    {


        $this->setFields($table, $fields, $paramentro);
        $this->setJoinOut($join);
        $this->setWhere($where);
        $this->db->limit(1);
        return $this->db->get()->row();
    }
    public function getTabela($table, $fields = '*', $where = '', $join = '', $order = '', $perpage = 0, $start = 0, $one = false)
    {


        $this->setFields($table, $fields);
        $this->setWhere($where);
        $this->setOrderBy($order);
        $this->setPageLimit($perpage, $start);


        $query = $this->db->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }
    public function getTabelaQID($table, $fields = '*', $where = '', $join = '', $parametro = '')
    {


        $this->db->select($fields);
        $this->db->from($table);
        $this->setJoinOut($join, $parametro);
        $this->setWhere($where);

        $this->db->limit(1);
        return $this->db->get()->row();
    }
    public function getTabelaQ($table, $fields = '*', $where = '', $join = '', $order = '', $parametro = '', $perpage = 0, $start = 0, $one = false)
    {


        $this->db->select($fields);
        $this->db->from($table);
        $this->setJoinOut($join, $parametro);
        $this->setWhere($where);
        $this->setOrderBy($order);
        $this->setPageLimit($perpage, $start);


        $query = $this->db->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    public function add($table, $data, $returnId = false)
    {
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            if ($returnId == true) {
                return $this->db->insert_id($table);
            }
            return true;
        } else {
            return false;
        }
    }

    public function edit($table, $data, $fieldID, $id)
    {
        $this->db->where($fieldID, $id);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($table, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1') {
            return true;
        } else {
            return false;
        }
    }

    public function count($table, $where = '')
    {

        if ($where != '') {
            $this->db->from($table);
            $this->db->where($where);
            return $this->db->count_all_results();
        } else {
            return $this->db->count_all($table);
        }
    }
    public function search($tabela, $like, $pesquisa = null, $where, $de = null, $ate = null, $fields = null, $join = null)
    {
        if ($pesquisa != null) {
            $this->setLike($like, $pesquisa);
        }

        if ($de != null) {
            $this->db->where("$where >=", $de);
        }
        if ($ate != null) {
            $this->db->where("$where <=", $ate);
        }

        $this->db->select($fields);
        $this->db->from($tabela);
        $this->setJoinOut($join);
        $this->db->limit(10);

        $query = $this->db->get();
        $result =  $query->result();
        return $result;
    }

    public function check_login($email)
    {
        $this->db->where('email', $email);
        $this->db->where('situacao', 1);
        $this->db->limit(1);
        return $this->db->get('usuarios')->row();
    }

    public function check_credentials($id = '')
    {

        $this->db->from('usuarios');
        $this->db->where('idUsuarios', $id);
        $this->db->where('situacao', 1);
        $this->db->where('dbEmpresa', $this->session->userdata('dbEmpresa'));
        $this->db->limit(1);
        return $this->db->get()->row();
    }
    public function list_credentials()
    {
        $this->db->from('usuarios');
        $this->db->where('situacao', 1);
        $this->db->where('dbEmpresa', $this->session->userdata('dbEmpresa'));

        return $this->db->get()->row();
    }
    public function getEmitente($id)
    {
        $this->db->from('administrativo_emitentes');
        $this->db->join('usuarios', 'usuarios.administrativo_emitente_id = administrativo_emitentes.id_administrativo_emitente');
        $this->db->where('usuarios.administrativo_emitente_id', $id);
        $this->db->where('dbEmpresa', $this->session->userdata('dbEmpresa'));

        return $this->db->get()->row();
    }

    public function validaDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    public function hData($date)
    {

        $data = new DateTime($date);
        $formatter = new IntlDateFormatter(
            'pt_BR',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
            'America/Sao_Paulo',
            IntlDateFormatter::GREGORIAN
        );
        return $formatter->format($data);
    }

    //Funções privadas que configuram as consultas, update, edit e delete
    private function setFields($tabelaPrincipal, $fields = '*', $parametro = '')
    {
        $fields_limpa = preg_replace('/( )+/', ' ', $fields);

        $tabelas_fields_groups = explode('<', $fields_limpa);

        if (count($tabelas_fields_groups) > 1) {


            $tabelasForJoin = '';
            $formatFields = '';
            foreach ($tabelas_fields_groups as  $tabelas_fields) {

                $tabela_fields = explode('>', $tabelas_fields);
                $tabela = $tabela_fields[0];
                $field  = $tabela_fields[1];
                $tabelasForJoin .= $tabela . ', ';

                $formatFields .= str_replace(' :', ", $tabela.", $field);
            }

            $selectFields = ltrim($formatFields, ",");
            $this->db->select($selectFields);
            $this->db->from($tabelaPrincipal);



            $fieldsJoin =  ltrim($tabelasForJoin, "$tabelaPrincipal,");
            $fieldsJoin =  rtrim($fieldsJoin, ', ');
            if ($fieldsJoin != '*') {

                $this->setJoin($tabelaPrincipal, $fieldsJoin, $parametro);
            }
        } else {
            $this->db->select("$tabelaPrincipal.$fields");
            $this->db->from($tabelaPrincipal);
        }
    }
    private function setJoin($tabelaPrincipal, $tabelasJoin, $parametro = '')
    {

        $tabelaJoin_arr = explode(',', $tabelasJoin);


        if (count($tabelaJoin_arr) > 1) {
            foreach ($tabelaJoin_arr as $join) {
                $join = trim($join);
                $tabelaPrincipal = trim($tabelaPrincipal);

                if ($join != $tabelaPrincipal) {
                    $joinFields = rtrim($join, "s");

                    $joinList =  "$join.id_$joinFields = $tabelaPrincipal.$joinFields" . '_id';

                    $this->db->join($join, $joinList, $parametro);
                }
            }
        }

        if (count($tabelaJoin_arr) == 1) {
            $join = trim($join);
            $tabelaPrincipal = trim($tabelaPrincipal);

            if ($join != $tabelaPrincipal) {
                $joinFields = rtrim($join, "s");

                $joinList =  "$join.id_$joinFields = $tabelaPrincipal.$joinFields" . '_id';

                $this->db->join($join, $joinList);
            }
        }
    }
    private function setJoinOut($joins, $parametro = '')
    {

        if (is_array($joins)) {
            foreach ($joins as $data) {
                $this->db->join($data['tabela'], $data['id1'] . '=' . $data['id2'], $parametro);
            }
        }
    }
    private function setWhere($where)
    {
        if ($where != '') {
            $where = explode('=', $where);
            $this->db->where($where[0], $where[1]);
        }
    }

    private function setOrderBy($order)
    {
        if ($order != '') {
            $orderBy = explode(",", $order);
            $this->db->order_by($orderBy[0], $orderBy[1]);
        }
    }

    private function setPageLimit($perpage, $start)
    {
        if ($perpage != 0) {
            $this->db->limit($perpage, $start);
        }
    }
    private function setLike($like, $term)
    {

        if ($like != '') {
            $like = explode(',', $like);

            for ($i = 0; $i < count($like); $i++) {

                if ($i == 0) {
                    $this->db->like($like[$i], $term);
                }
                if ($i > 0) {
                    $this->db->or_like($like[$i], $term);
                }
            }
        }
    }
}
