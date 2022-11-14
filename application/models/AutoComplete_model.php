<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class AutoComplete_model extends CI_Model
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
        $this->db_empresa->select($fields . ', clientes.nomeCliente, clientes.idClientes');
        $this->db_empresa->from($table);
        $this->db_empresa->limit($perpage, $start);
        $this->db_empresa->join('clientes', 'clientes.idClientes = ' . $table . '.clientes_id');
        $this->db_empresa->order_by('idVendas', 'desc');
        if ($where) {
            $this->db_empresa->where($where);
        }

        $query = $this->db_empresa->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    public function autoCompleteUsuario($q)
    {
        $this->db_empresa->select('*');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('nome', $q);
        $this->db_empresa->where('situacao', 1);
        $query = $this->db_empresa->get('administrativo_funcionarios');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = ['label' => $row['nome'] . ' | Telefone: ' . $row['telefone'], 'id' => $row['id_administrativo_funcionario']];
            }
            echo json_encode($row_set);
        }
    }

    public function autoCompleteCliente($q)
    {
        $this->db_empresa->select('*');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('nomeCliente', $q);
        $this->db_empresa->or_like('telefone', $q);
        $this->db_empresa->or_like('celular', $q);
        $query = $this->db_empresa->get('comercial_clientes');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = ['label' => $row['nomeCliente'] . ' | Telefone: ' . $row['telefone'], 'id' => $row['id_comercial_cliente']];
            }
            echo json_encode($row_set);
        } else {
            $row_set[] = ['label' => 'Adicionar cliente...', 'id' => null];
            echo json_encode($row_set);
        }
    }

    public function autoCompleteFornecedor($q)
    {
        $this->db_empresa->select('*');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('nomeCliente', $q);
        $this->db_empresa->where('pessoa_fisica', '1');
        $query = $this->db_empresa->get('comercial_clientes');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = ['label' => 'Fornecedor: ' . $row['nomeCliente'] . ' | Telefone: ' . $row['telefone'], 'id' => $row['id_comercial_cliente']];
            }
            echo json_encode($row_set);
        } else {
            $row_set[] = ['label' => 'Adicionar cliente...', 'id' => null];
            echo json_encode($row_set);
        }
    }

    public function autoCompleteNotaFiscal($q)
    {
        $this->db_empresa->select('*');
        $this->db_empresa->join('comercial_clientes', 'comercial_clientes.id_comercial_cliente = financeiro_notas.comercial_cliente_id');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('notaFiscal', $q);
        $this->db_empresa->or_like('notaFiscal', $q);
        $query = $this->db_empresa->get('financeiro_notas');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = ['label' => 'Nº ' . $row['notaFiscal'] . ' | fornecedor ' . $row['nomeCliente'], 'id' => $row['id_financeiro_nota'], 'notaFiscal' => $row['notaFiscal']];
            }
            echo json_encode($row_set);
        }
    }




    private function cadastroLinha($r)
    {
        $q['data'] = explode('#', $r);

        if (count($q['data']) > 1) {
            $q['modelo'] = $q['data'][count($q['data']) - 1];
            $q['parametro'] = $q['data'][0];
            
        } else {
             $q['modelo'] = $r;
        }

        return $q;
    }

    private function setJoin($join, $parametro)
    { 
        if (is_array($join)) {
            foreach ($join as $data) {
                $this->db_empresa->join($data['tabela'], $data['id1'] . '=' . $data['id2'], $parametro);
            }
        }
    }

    private function setLike($like, $term)
    {

        if ($like != '') {
            $like = explode(',', $like);
           
            for ($i = 0; $i < count($like); $i++) {
                
                if ($i == 0) {
                    $this->db_empresa->like($like[$i], $term);
                }
                if ($i > 0) {
                    $this->db_empresa->or_like($like[$i], $term);
                }
            }
        }
    }

    public function autoCompleteProduto($tabela, $like, $term, $row_setR, $select = '*', $join = '', $limite = 5, $parametro = '')
    {
        $this->load->model('produtos_model');
   //     $q = $this->cadastroLinha($term);

        $this->db_empresa->select($select);
        $this->db_empresa->from($tabela);
        $this->db_empresa->limit($limite);
       $this->setJoin($join, $parametro);
      $this->setLike($like, $term);
      
   
   
      
       $query = $this->db_empresa->get();
      
        if ($query->num_rows() > 0) {
     
            foreach ($query->result_array() as $row) {
                 $estoque =  $this->produtos_model->converteMedida($row['estoque'], $row['estoque_medida_id'], 'D', $row['estoqueMinimo']);         
                
                 $row['estoqueView'] = $estoque['textoRS'];

                if (is_array($row_setR)) {
                    $i = -1;
                    $i++;
                    foreach ($row_setR as $key => $value) {
                        if ($key == 'label') {
                            $rowQ[0][$key] = $row['codDeBarra'] . ' | ' . $row['marca'] . ' | ' . $row['tipo_produto'];
                        }
                        if ($key != 'label') {
                            $rowQ[0][$value] = $row[$key];
                        }
                    }
                }
            }
        
            echo json_encode($rowQ);
        } else {
            if (isset($q['parametro'])) {
                $q['parametro'] = explode(' ', $q['parametro']);
                if (count($q['parametro']) > 1) {
                    $this->validaAutoCompleteTipoProduto($q['parametro'][0], $q, $q['parametro'][1]);
                }
            }
        }
    }

    private function validaAutoCompleteTipoProduto($tipo, $parametro, $marca)
    {
        $this->db_empresa->select('*');
        $this->db_empresa->from('estoque_tipo_produtos');
        $this->db_empresa->join('estoque_categorias', 'estoque_categorias.id_estoque_categoria = estoque_tipo_produtos.estoque_categoria_id');
        $this->db_empresa->join('estoque_sectors', 'estoque_tipo_produtos.estoque_sector_id = estoque_sectors.id_estoque_sector');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('tipo_produto', $tipo);
        $this->db_empresa->or_like('siglaTipo', $tipo);
        $query = $this->db_empresa->get();
        if ($query->num_rows() > 0) {
            $this->load->model('setdb_model');
            $marca = $this->setdb_model->getTabelaID('estoque_marcas', '*', 'sigla =' . $marca);

            foreach ($query->result_array() as $row) {
                $row_set[] = [
                    'label' => 'Adicionar: ' . $row['tipo_produto'] . ' | Marca: ' . $marca->marca . ' | Modelo:' . $parametro,
                    'tipoProduto'     => $row['tipo_produto'],
                    'idTipo'          => $row['id_estoque_tipo_produto'],
                    'idSetor'         => $row['id_estoque_sector'],
                    'idCategoria'     => $row['id_estoque_categoria'],
                    'categoriaProduto' => $row['categoria'],
                    'siglaProduto'     => $row['sigla'],
                    'statusProduto'    => $row['status'],
                    'marca'            => $marca->id_marca,
                    'modelo'           => $parametro
                ];
            }
            
            echo json_encode($row_set);
        } else {
            $row_set[] = ['label' => 'Tipo produto não cadastrado => ' . $parametro];
            echo json_encode($row_set);
        }
    }

    public function autoCompleteProdutoSaida($q)
    {
        $this->db_empresa->select('*');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('codDeBarra', $q);
        $this->db_empresa->or_like('descricao', $q);
        $this->db_empresa->where('saida', 1);
        $query = $this->db_empresa->get('produtos');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = ['label' => $row['descricao'] . ' | Preço: R$ ' . $row['precoVenda'] . ' | Estoque: ' . $row['estoque'], 'estoque' => $row['estoque'], 'id' => $row['idProdutos'], 'preco' => $row['precoVenda'], 'unidade' => $row['unidade']];
            }
            echo json_encode($row_set);
        }
    }

    public function autoCompleteMarca($q)
    {
        $this->db_empresa->select('*');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('marca', $q);
        $this->db_empresa->or_like('sigla', $q);
        $query = $this->db_empresa->get('marcas');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = ['label' => $row['marca'], 'marca' => $row['marca'], 'id' => $row['idMarca'], 'siglaMarca' => $row['sigla'], 'statusMarca' => $row['status']];
            }
            echo json_encode($row_set);
        } else {
            $row_set[] = ['label' => 'Adicionar => ' . $q, 'id' => null, 'marca' => $q];
            echo json_encode($row_set);
        }
    }

    public function autoCompleteCategoria($q)
    {
        $this->db_empresa->select('*');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('categoria', $q);
        $this->db_empresa->or_like('sigla', $q);
        $query = $this->db_empresa->get('categorias');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = ['label' => strtoupper($row['categoria']) . ' | sigla: ' . strtoupper($row['sigla']), 'id' => $row['idCategoria'], 'descricaoCategoria' => strtoupper($row['categoria']), 'siglaCategoria' => strtoupper($row['sigla']), 'statusCategoria' => $row['status']];
            }
            echo json_encode($row_set);
        } else {
            $row_set[] = ['label' => 'Adicionar => ' . $q, 'id' => null, 'categoria' => strtoupper($q)];
            echo json_encode($row_set);
        }
    }

    public function autoCompleteMedida($q)
    {
        $this->db_empresa->select('*');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('descricaoMedida', $q);
        $this->db_empresa->or_like('sigla', $q);
        $query = $this->db_empresa->get('medidas');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = ['label' => strtoupper($row['descricaoMedida']) . ' | sigla: ' . strtoupper($row['sigla']), 'id' => $row['idMedida'], 'descricaoMedida' => strtoupper($row['descricaoMedida']), 'siglaMedida' => $row['sigla'], 'idMedidaSistema' => $row['idMedidaSistema'], 'multiplicador' => $row['multiplicador'], 'statusMedida' => $row['status'], 'bloqueio' => $row['bloqueio']];
            }
            echo json_encode($row_set);
        } else {
            $row_set[] = ['label' => 'Adicionar => ' . $q, 'id' => null, 'medida' => strtoupper($q)];
            echo json_encode($row_set);
        }
    }

    public function autoCompleteTermoGarantia($q)
    {
        $this->db_empresa->select('*');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('LOWER(refGarantia)', $q);
        $query = $this->db_empresa->get('garantias');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = ['label' => $row['refGarantia'], 'id' => $row['idGarantias']];
            }
            echo json_encode($row_set);
        }
    }

    public function autoCompleteServico($q)
    {
        $this->db_empresa->select('*');
        $this->db_empresa->limit(5);
        $this->db_empresa->like('nome', $q);
        $query = $this->db_empresa->get('servicos');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = ['label' => $row['nome'] . ' | Preço: R$ ' . $row['preco'], 'id' => $row['idServicos'], 'preco' => $row['preco']];
            }
            echo json_encode($row_set);
        }
    }
}

/* End of file vendas_model.php */
/* Location: ./application/models/vendas_model.php */
