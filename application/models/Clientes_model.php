<?php
class Clientes_model extends CI_Model
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

    public function getOsByCliente($id)
    {
        $this->db_empresa ->where('clientes_id', $id);
        $this->db_empresa ->order_by('idOs', 'desc');
        $this->db_empresa ->limit(10);
        return $this->db_empresa ->get('os')->result();
    }

    /**
     * Retorna todas as OS vinculados ao cliente
     * @param int $id
     * @return array
     */
    public function getAllOsByClient($id)
    {
        $this->db_empresa ->where('comercial_cliente_id', $id);
        return $this->db_empresa ->get('comercial_os_clientes')->result();
    }

    /**
     * Remover todas as OS por cliente
     * @param array $os
     * @return boolean
     */

    public function removeClientOs($os)
    {
        try {
            foreach ($os as $id) {
                $this->db_empresa ->where('comercial_os_cliente_id', $id->id_comercial_venda);
                $this->db_empresa ->delete('comercial_os_servicos');

                $this->db_empresa ->where('comercial_os_cliente_id', $id->id_comercial_venda);
                $this->db_empresa ->delete('comercial_os_produtos');

                $this->db_empresa ->where('id_comercial_os_cliente', $id->id_comercial_venda);
                $this->db_empresa ->delete('comercial_os_clientes');
            }
        } catch (Exception $e) {
            return false;
        }
        return true;
    }

    /**
     * Retorna todas as Vendas vinculados ao cliente
     * @param int $id
     * @return array
     */
    public function getAllVendasByClient($id)
    {
        $this->db_empresa ->where('comercial_cliente_id', $id);
        return $this->db_empresa ->get('comercial_vendas')->result();
    }

    /**
     * Remover todas as Vendas por cliente
     * @param array $vendas
     * @return boolean
     */
    public function removeClientVendas($vendas)
    {
        try {
            foreach ($vendas as $v) {
                $this->db_empresa ->where('comercial_venda_id', $v->id_comercial_venda);
                $this->db_empresa ->delete('comercial_itens_de_vendas');

                $this->db_empresa ->where('id_comercial_venda', $v->id_comercial_venda);
                $this->db_empresa ->delete('comercial_vendas');
            }
        } catch (Exception $e) {
            return false;
        }
        return true;
    }
}
