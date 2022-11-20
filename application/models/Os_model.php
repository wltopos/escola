<?php

use Piggly\Pix\StaticPayload;

class Os_model extends CI_Model
{

    /**
     * author: Lucas Rocha
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
        $this->db_empresa->select($fields . ',clientes.nomeCliente, clientes.celular as celular_cliente');
        $this->db_empresa->from($table);
        $this->db_empresa->join('clientes', 'clientes.idClientes = os.clientes_id');
        $this->db_empresa->limit($perpage, $start);
        $this->db_empresa->order_by('idOs', 'desc');
        if ($where) {
            $this->db_empresa->where($where);
        }

        $query = $this->db_empresa->get();

        $result = !$one ? $query->result() : $query->row();

        return $result;
    }

    public function getOs($table, $fields, $where = [], $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        $lista_clientes = [];
        if ($where) {
            if (array_key_exists('pesquisa', $where)) {
                $this->db_empresa->select('idClientes');
                $this->db_empresa->like('nomeCliente', $where['pesquisa']);
                $this->db_empresa->limit(5);
                $clientes = $this->db_empresa->get('clientes')->result();

                foreach ($clientes as $c) {
                    array_push($lista_clientes, $c->idClientes);
                }
            }
        }

        $this->db_empresa->select($fields . ',clientes.idClientes, clientes.nomeCliente, clientes.celular as celular_cliente, usuarios.nome, garantias.*');
        $this->db_empresa->from($table);
        $this->db_empresa->join('clientes', 'clientes.idClientes = os.clientes_id');
        $this->db_empresa->join('usuarios', 'usuarios.idUsuarios = os.usuarios_id');
        $this->db_empresa->join('garantias', 'garantias.idGarantias = os.garantias_id', 'left');
        $this->db_empresa->join('produtos_os', 'produtos_os.os_id = os.idOs', 'left');
        $this->db_empresa->join('servicos_os', 'servicos_os.os_id = os.idOs', 'left');

        // condicionais da pesquisa

        // condicional de status
        if (array_key_exists('status', $where)) {
            $this->db_empresa->where_in('status', $where['status']);
        }

        // condicional de clientes
        if (array_key_exists('pesquisa', $where)) {
            if ($lista_clientes != null) {
                $this->db_empresa->where_in('os.clientes_id', $lista_clientes);
            }
        }

        // condicional data inicial
        if (array_key_exists('de', $where)) {
            $this->db_empresa->where('dataInicial >=', $where['de']);
        }
        // condicional data final
        if (array_key_exists('ate', $where)) {
            $this->db_empresa->where('dataFinal <=', $where['ate']);
        }

        $this->db_empresa->limit($perpage, $start);
        $this->db_empresa->order_by('os.idOs', 'desc');
        $this->db_empresa->group_by('os.idOs');

        $query = $this->db_empresa->get();

        $result = !$one ? $query->result() : $query->row();

        return $result;
    }

    public function getById($id)
    {
        $this->db_empresa->select('os.*, clientes.*, clientes.celular as celular_cliente, garantias.refGarantia, usuarios.telefone as telefone_usuario, usuarios.email as email_usuario, usuarios.nome');
        $this->db_empresa->from('os');
        $this->db_empresa->join('clientes', 'clientes.idClientes = os.clientes_id');
        $this->db_empresa->join('usuarios', 'usuarios.idUsuarios = os.usuarios_id');
        $this->db_empresa->join('garantias', 'garantias.idGarantias = os.garantias_id', 'left');
        $this->db_empresa->where('os.idOs', $id);
        $this->db_empresa->limit(1);

        return $this->db_empresa->get()->row();
    }

    public function getByIdCobrancas($id)
    {
        $this->db_empresa->select('os.*, clientes.*, clientes.celular as celular_cliente, garantias.refGarantia, usuarios.telefone as telefone_usuario, usuarios.email as email_usuario, usuarios.nome,cobrancas.os_id,cobrancas.idCobranca,cobrancas.status');
        $this->db_empresa->from('os');
        $this->db_empresa->join('clientes', 'clientes.idClientes = os.clientes_id');
        $this->db_empresa->join('funcionarios', 'funcionarios.idFuncionarios = os.funcionario_id');
        $this->db_empresa->join('cobrancas', 'cobrancas.os_id = os.idOs');
        $this->db_empresa->join('garantias', 'garantias.idGarantias = os.garantias_id', 'left');
        $this->db_empresa->where('os.idOs', $id);
        $this->db_empresa->limit(1);

        return $this->db_empresa->get()->row();
    }

    public function getProdutos($id = null)
    {
        $this->db_empresa->select('produtos_os.*, produtos.*');
        $this->db_empresa->from('produtos_os');
        $this->db_empresa->join('produtos', 'produtos.idProdutos = produtos_os.produtos_id');
        $this->db_empresa->where('os_id', $id);

        return $this->db_empresa->get()->result();
    }

    public function getServicos($id = null)
    {
        $this->db_empresa->select('servicos_os.*, servicos.nome, servicos.preco as precoVenda');
        $this->db_empresa->from('servicos_os');
        $this->db_empresa->join('servicos', 'servicos.idServicos = servicos_os.servicos_id');
        $this->db_empresa->where('os_id', $id);

        return $this->db_empresa->get()->result();
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

    public function anexar($os, $anexo, $url, $thumb, $path)
    {
        $this->db_empresa->set('anexo', $anexo);
        $this->db_empresa->set('url', $url);
        $this->db_empresa->set('thumb', $thumb);
        $this->db_empresa->set('path', $path);
        $this->db_empresa->set('os_id', $os);

        return $this->db_empresa->insert('anexos');
    }

    public function getAnexos($os)
    {
        $this->db_empresa->where('os_id', $os);
        return $this->db_empresa->get('anexos')->result();
    }

    public function getAnotacoes($os)
    {
        $this->db_empresa->where('os_id', $os);
        $this->db_empresa->order_by('idAnotacoes', 'desc');

        return $this->db_empresa->get('anotacoes_os')->result();
    }

    public function getCobrancas($id = null)
    {
        $this->db_empresa->select('cobrancas.*');
        $this->db_empresa->from('cobrancas');
        $this->db_empresa->where('os_id', $id);

        return $this->db_empresa->get()->result();
    }

    public function criarTextoWhats($textoBase, $troca)
    {
        $procura = ["{CLIENTE_NOME}", "{NUMERO_OS}", "{STATUS_OS}", "{VALOR_OS}", "{DESCRI_PRODUTOS}", "{EMITENTE}", "{TELEFONE_EMITENTE}", "{OBS_OS}", "{DEFEITO_OS}", "{LAUDO_OS}", "{DATA_FINAL}", "{DATA_INICIAL}", "{DATA_GARANTIA}"];
        $textoBase = str_replace($procura, $troca, $textoBase);
        $textoBase = strip_tags($textoBase);
        $textoBase = htmlentities(urlencode($textoBase));
        return $textoBase;
    }

    public function valorTotalOS($id = null)
    {
        $totalServico = 0;
        $totalProdutos = 0;
        $valorDesconto = 0;
        if ($servicos = $this->getServicos($id)) {
            foreach ($servicos as $s) {
                $preco = $s->preco ?: $s->precoVenda;
                $totalServico = $totalServico + ($preco * ($s->quantidade ?: 1));
            }
        }
        if ($produtos = $this->getProdutos($id)) {
            foreach ($produtos as $p) {
                $totalProdutos = $totalProdutos + $p->subTotal;
            }
        }
        if ($valorDescontoBD = $this->getById($id)) {
            $valorDesconto = $valorDescontoBD->valor_desconto;
        }

        return ['totalServico' => $totalServico, 'totalProdutos' => $totalProdutos, 'valor_desconto' => $valorDesconto];
    }

    public function isEditable($id = null)
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eOs')) {
            return false;
        }
        if ($os = $this->getById($id)) {
            $osT = (int)($os->status === "Faturado" || $os->status === "Cancelado" || $os->faturado == 1);
            if ($osT) {
                return $this->data['configuration']['control_editos'] == '1';
            }
        }
        return true;
    }

    public function getQrCode($id, $pixKey, $emitente)
    {
        if (empty($id) || empty($pixKey) || empty($emitente)) {
            return;
        }

        $result = $this->valorTotalOS($id);
        $amount = $result['valor_desconto'] != 0 ? round(floatval($result['valor_desconto']), 2) : round(floatval($result['totalServico'] + $result['totalProdutos']), 2);

        if ($amount <= 0) {
            return;
        }

        $pix = (new StaticPayload())
            ->applyValidCharacters()
            ->applyUppercase()
            ->setPixKey(getPixKeyType($pixKey), $pixKey)
            ->setMerchantName($emitente->nome, true)
            ->setMerchantCity($emitente->cidade, true)
            ->setAmount($amount)
            ->setTid($id)
            ->setDescription(sprintf("%s OS %s", $emitente->nome, $id), true);

        return $pix->getQRCode();
    }
}
