<?php
class Mapos_model extends CI_Model
{

    /**
     * author: Lucas Rocha
     * email: silva018-mg@yahoo.com.br
     *
     */

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logado')) {

            $this->db_empresa = $this->load->database($this->session->userdata('dbEmpresa'), true);
        }
    }

    public function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        $this->db_empresa->select($fields);
        $this->db_empresa->from($table);
        $this->db_empresa->limit($perpage, $start);
        if ($where) {
            $this->db_empresa->where($where);
        }

        $query = $this->db_empresa->get();

        $result = !$one ? $query->result() : $query->row();
        return $result;
    }

    public function getById($id)
    {
        $this->db->from('usuarios');
        $this->db->select('usuarios.*, permissoes.nome as permissao');
        $this->db->join('permissoes', 'permissoes.idPermissao = usuarios.permissoes_id', 'left');
        $this->db->where('idUsuarios', $id);
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    public function alterarSenha($senha)
    {
        $this->db->set('senha', password_hash($senha, PASSWORD_DEFAULT));
        $this->db->where('idUsuarios', $this->session->userdata('id'));
        $this->db->update('usuarios');

        if ($this->db->affected_rows() >= 0) {
            return true;
        }
        return false;
    }

    public function pesquisar($termo)
    {
        $data = [];
        // buscando clientes
        $this->db_empresa->like('nomeCliente', $termo);
        $this->db_empresa->or_like('telefone', $termo);
        $this->db_empresa->or_like('celular', $termo);
        $this->db_empresa->limit(15);
        $data['clientes'] = $this->db_empresa->get('comercial_clientes')->result();

        // buscando os
        $this->db_empresa->like('id_comercial_os_cliente', $termo);
        $this->db_empresa->or_like('descricaoProduto', $termo);
        $this->db_empresa->limit(15);
        $data['os'] = $this->db_empresa->get('comercial_os_clientes')->result();

        // buscando produtos
        $this->db_empresa->join('estoque_marcas', 'estoque_marcas.id_estoque_marca = estoque_produtos.estoque_marca_id');
        $this->db_empresa->like('produtoDescricao', $termo);
        $this->db_empresa->or_like('observacao', $termo);
        $this->db_empresa->or_like('marca', $termo);
        $this->db_empresa->limit(50);
        $data['produtos'] = $this->db_empresa->get('estoque_produtos')->result();

        //buscando serviços
        $this->db_empresa->like('nome', $termo);
        $this->db_empresa->limit(15);
        $data['servicos'] = $this->db_empresa->get('comercial_servicos')->result();

        return $data;
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

    public function getOsAbertas()
    {
        $this->db_empresa->select('comercial_os_clientes.*, comercial_clientes.nomeCliente');
        $this->db_empresa->from('comercial_os_clientes');
        $this->db_empresa->join('comercial_clientes', 'comercial_clientes.id_comercial_cliente = comercial_os_clientes.comercial_cliente_id');
        $this->db_empresa->where('comercial_os_clientes.status', 'Aberto');
        $this->db_empresa->limit(10);
        return $this->db_empresa->get()->result();
    }

    public function getOsAguardandoPecas()
    {
        $this->db_empresa->select('comercial_os_clientes.*, comercial_clientes.nomeCliente');
        $this->db_empresa->from('comercial_os_clientes');
        $this->db_empresa->join('comercial_clientes', 'comercial_clientes.id_comercial_cliente = comercial_os_clientes.comercial_cliente_id');
        $this->db_empresa->where('comercial_os_clientes.status', 'Aguardando Peças');
        $this->db_empresa->limit(10);
        return $this->db_empresa->get()->result();
    }

    public function getOsAndamento()
    {
        $this->db_empresa->select('comercial_os_clientes.*, comercial_clientes.nomeCliente');
        $this->db_empresa->from('comercial_os_clientes');
        $this->db_empresa->join('comercial_clientes', 'comercial_clientes.id_comercial_cliente = comercial_os_clientes.comercial_cliente_id');
        $this->db_empresa->where('comercial_os_clientes.status', 'Em Andamento');
        $this->db_empresa->limit(10);
        return $this->db_empresa->get()->result();
    }

    public function calendario($start, $end, $status = null)
    {
        $this->db_empresa->select(
            'financeiro_lancamentos.*,
            comercial_clientes.nomeCliente,
            COALESCE((SELECT SUM(financeiro_lancamentos.valor - financeiro_lancamentos.valor_ajuste) FROM financeiro_lancamentos WHERE financeiro_lancamentos.tipo = "receita"), 0) totalReceitas,
            COALESCE((SELECT SUM(financeiro_lancamentos.valor - financeiro_lancamentos.valor_ajuste) FROM financeiro_lancamentos WHERE financeiro_lancamentos.tipo = "despesa"), 0) totalDespesas'
        );

        $this->db_empresa->from('financeiro_lancamentos');
        $this->db_empresa->join('comercial_clientes', 'comercial_clientes.id_comercial_cliente = financeiro_lancamentos.comercial_cliente_id');
        // $this->db_empresa->join('produtos_os', 'produtos_os.os_id = os.idOs', 'left');
        // $this->db_empresa->join('servicos_os', 'servicos_os.os_id = os.idOs', 'left');
        $this->db_empresa->where('financeiro_lancamentos.data_pagamento >=', $start);
        $this->db_empresa->where('financeiro_lancamentos.data_vencimento <=', $end);
        $this->db_empresa->group_by('financeiro_lancamentos.id_financeiro_lancamento');

        if (!empty($status)) {
            $this->db_empresa->where('financeiro_lancamentos.tipo', $status);
        }

        return $this->db_empresa->get()->result();
    }

    public function getProdutosMinimo()
    {
        $sql = "SELECT * FROM estoque_produtos WHERE estoque <= estoqueMinimo ORDER BY estoque LIMIT 10";
        return $this->db_empresa->query($sql)->result();
    }

    public function getOsEstatisticas()
    {
        $sql = "SELECT status, COUNT(status) as total FROM comercial_os_clientes GROUP BY status ORDER BY status";
        return $this->db_empresa->query($sql)->result();
    }

    public function getEstatisticasFinanceiro()
    {
        $sql = "SELECT SUM(CASE WHEN baixado = 1 AND tipo = 'receita' THEN valor_pago  END) as total_receita,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'despesa' THEN valor_pago END) as total_despesa,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'receita' THEN valor  END) as total_receita_pendente,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'despesa' THEN valor END) as total_despesa_pendente FROM financeiro_lancamentos";

        return $this->db_empresa->query($sql)->row();
    }

    public function getEstatisticasFinanceiroMes($year)
    {
        $numbersOnly = preg_replace('/[^0-9]/', '', $year);

        if (!$numbersOnly) {
            $numbersOnly = date('Y');
        }

        $sql = "
            SELECT
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_JAN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JAN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_FEV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_FEV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_MAR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_MAR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_ABR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_ABR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_MAI_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_MAI_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_JUN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JUN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_JUL_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JUL_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_AGO_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_AGO_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_SET_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_SET_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_OUT_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_OUT_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_NOV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_NOV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_DEZ_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_DEZ_DES
            FROM financeiro_lancamentos
            WHERE EXTRACT(YEAR FROM data_pagamento) = ?
        ";

        return $this->db_empresa->query($sql, [intval($numbersOnly)])->row();
    }

    public function getEstatisticasFinanceiroDia($year)
    {
        $numbersOnly = preg_replace('/[^0-9]/', '', $year);
        if (!$numbersOnly) {
            $numbersOnly = date('Y');
        }
        $sql = "
            SELECT
                SUM(CASE WHEN (EXTRACT(DAY FROM data_pagamento) = " . date('d') . ") AND EXTRACT(MONTH FROM data_pagamento) = " . date('m') . " AND baixado = 1 AND tipo = 'receita' THEN valor - ((desconto * valor) / 100)  END) AS VALOR_" . date('m') . "_REC,
                SUM(CASE WHEN (EXTRACT(DAY FROM data_pagamento) = " . date('d') . ") AND EXTRACT(MONTH FROM data_pagamento) = " . date('m') . " AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_" . date('m') . "_DES
            FROM financeiro_lancamentos
            WHERE EXTRACT(YEAR FROM data_pagamento) = ?
        ";
        return $this->db_empresa->query($sql, [intval($numbersOnly)])->row();
    }

    public function getEstatisticasFinanceiroMesInadimplencia($year)
    {
        $numbersOnly = preg_replace('/[^0-9]/', '', $year);

        if (!$numbersOnly) {
            $numbersOnly = date('Y');
        }

        $sql = "
            SELECT
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_JAN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_JAN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_FEV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_FEV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_MAR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_MAR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_ABR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_ABR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_MAI_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_MAI_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_JUN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_JUN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_JUL_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_JUL_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_AGO_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_AGO_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_SET_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_SET_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_OUT_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_OUT_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_NOV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_NOV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_DEZ_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_DEZ_DES
            FROM financeiro_lancamentos
            WHERE EXTRACT(YEAR FROM data_pagamento) = ?
        ";

        return $this->db_empresa->query($sql, [intval($numbersOnly)])->row();
    }

    public function getEmitente()
    {
        $this->db->join('administrativo_emitentes', 'usuarios.administrativo_emitente_id = administrativo_emitentes.id_administrativo_emitente');
        $this->db->where('idUsuarios', $this->session->userdata('id'));
        return $this->db->get('usuarios')->result();
    }

    public function addEmitente($empresa, $cnpj, $ie, $cep, $logradouro, $numero, $bairro, $cidade, $uf, $telefone, $email, $logo)
    {
        $this->db->set('empresa', $empresa);
        $this->db->set('cnpj', $cnpj);
        $this->db->set('ie', $ie);
        $this->db->set('cepEmitente', $cep);
        $this->db->set('ruaEmitente', $logradouro);
        $this->db->set('numeroEmitente', $numero);
        $this->db->set('bairroEmitente', $bairro);
        $this->db->set('cidadeEmitente', $cidade);
        $this->db->set('ufEmitente', $uf);
        $this->db->set('telefoneEmitente', $telefone);
        $this->db->set('url_logo', $logo);
        $this->db->set('emailEmitente', $email);
        $this->db->join('usuarios', 'usuarios.administrativo_emitente_id = administrativo_emitentes.id_administrativo_emitente');
        return $this->db->insert('administrativo_emitentes');
    }

    public function editEmitente($id, $empresa, $cnpj, $ie, $cep, $logradouro, $numero, $bairro, $cidade, $uf, $telefone, $email)
    {
        $this->db->set('empresa', $empresa);
        $this->db->set('cnpj', $cnpj);
        $this->db->set('ie', $ie);
        $this->db->set('cepEmitente', $cep);
        $this->db->set('ruaEmitente', $logradouro);
        $this->db->set('numeroEmitente', $numero);
        $this->db->set('bairroEmitente', $bairro);
        $this->db->set('cidadeEmitente', $cidade);
        $this->db->set('ufEmitente', $uf);
        $this->db->set('telefoneEmitente', $telefone);
        $this->db->set('emailEmitente', $email);
        $this->db->where('id_administrativo_emitente', $id);
        return $this->db->update('administrativo_emitentes');
    }

    public function editLogo($id, $logo)
    {
        $this->db->set('url_logo', $logo);
        $this->db->where('id_administrativo_emitente', $id);
        return $this->db->update('administrativo_emitentes');
    }

    public function editImageUser($id, $imageUserPath)
    {
        $this->db->set('url_image_user', $imageUserPath);
        $this->db->where('idUsuarios', $id);
        return $this->db->update('usuarios');
    }

    public function check_credentials($email)
    {
        $this->db->where('email', $email);
        $this->db->where('situacao', 1);
        $this->db->limit(1);
        return $this->db->get('usuarios')->row();
    }

    /**
     * Salvar configurações do sistema
     * @param array $data
     * @return boolean
     */
    public function saveConfiguracao($data)
    {
        try {
            foreach ($data as $key => $valor) {
                $this->db_empresa->set('valor', $valor);
                $this->db_empresa->where('config', $key);
                $this->db_empresa->update('administrativo_settings');
            }
        } catch (Exception $e) {
            return false;
        }
        return true;
    }

}
