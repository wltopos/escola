<?php
class Setquery_model extends CI_Model
{

    /**
     * author: Lucas Rocha
     * email: silva018-mg@yahoo.com.br
     *
     */

    public function __construct()
    {
        parent::__construct();
    }



    public function getFields($consulta)
    {
        return $this->setVarFields($consulta);
    }
    public function getJoin($join)
    {
        return $this->setVarJoins($join);
    }

    private function setVarFields($consulta)
    {
        $data['medidas'] = 'estoque_medidas.descricaoMedida, estoque_medidas.siglaMedida, estoque_medidas.multiplicador, estoque_medidas.status, estoque_medidas.estoque_sistema_medida_id, estoque_sistema_medidas.*';

        $data['tipo_categoria_setor'] = 'estoque_categorias.categoria, estoque_categorias.id_estoque_categoria, estoque_tipo_produtos.tipo_produto, estoque_sectors.sector, estoque_sectors.id_estoque_sector';

        $data['produtosRelatorio'] = 'estoque_produtos.id_estoque_produto, estoque_produtos.codDeBarra, estoque_produtos.produtoDescricao, estoque_produtos.estoque, estoque_produtos.precoCompra, estoque_produtos.precoVenda, estoque_produtos.estoque_medida_id, estoque_medidas.*, estoque_sistema_medidas.*, estoque_tipo_produtos.id_estoque_tipo_produto, estoque_tipo_produtos.tipo_produto, estoque_marcas.marca, ((estoque_produtos.estoque * estoque_produtos.precoCompra) / estoque_medidas.multiplicador) as valorEstoque';

        $data['produtosID'] = 'estoque_produtos.*, estoque_medidas.*, estoque_marcas.marca, estoque_marcas.urlLogoMarca, estoque_tipo_produtos.tipo_produto, estoque_tipo_produtos.estoque_categoria_id, estoque_tipo_produtos.id_estoque_tipo_produto, estoque_sistema_medidas.*, financeiro_notas.*, estoque_categorias.categoria, estoque_sectors.sector, comercial_clientes.nomeCliente, estoque_locations.location, estoque_locations.descricaoLocation, estoque_locations.ambiente';
        
        $data['produtosID_os'] = 'estoque_produtos.*, comercial_os_produtos.*, estoque_medidas.*, estoque_marcas.marca, estoque_tipo_produtos.tipo_produto, estoque_tipo_produtos.estoque_categoria_id, estoque_tipo_produtos.id_estoque_tipo_produto, estoque_sistema_medidas.*, financeiro_notas.*, estoque_categorias.categoria, estoque_sectors.sector';

        $data['produtos'] = 'estoque_produtos.*, estoque_medidas.*, estoque_marcas.marca, estoque_categorias.categoria, estoque_tipo_produtos.tipo_produto, estoque_tipo_produtos.id_estoque_tipo_produto , estoque_tipo_produtos.estoque_categoria_id, estoque_tipo_produtos.id_estoque_tipo_produto, estoque_sistema_medidas.*';

        $data['vendas_clientes_lancamentos'] = 'comercial_vendas.*, comercial_clientes.*, comercial_clientes.email as emailCliente, financeiro_lancamentos.data_vencimento';

        $data['vendas_clientes_lancamentos_cobrancas'] = 'comercial_vendas.*, comercial_clientes.*, comercial_clientes.email as emailCliente, financeiro_lancamentos.data_vencimento';

        $data['clientes_cobrancas'] = 'comercial_cobrancas.*, comercial_clientes.*';

        $data['osClientes_clientes_lancamentos_cobrancas'] = 'comercial_os_clientes.*, comercial_clientes.*, comercial_clientes.email as emailCliente, financeiro_lancamentos.data_vencimento';

        // $data['vendas_clientes_funcionarios'] = 'comercial_vendas.*, comercial_clientes.*, comercial_clientes.email as emailCliente,  administrativo_funcionarios.telefone as telefone_funcionario, administrativo_funcionarios.email as email_funcionario, administrativo_funcionarios.nome';

        $data['vendas_clientes'] = 'comercial_clientes.*, comercial_vendas.*';
       
        $data['financeiro_clientes'] = 'comercial_clientes.*, financeiro_notas.*';
        
        $data['funcionario_vendas'] = 'administrativo_funcionarios.*, comercial_vendas.*';

        $data['itens_de_vendas'] = 'comercial_itens_de_vendas.*, estoque_produtos.*, estoque_medidas.*, estoque_sistema_medidas.*,estoque_tipo_produtos.tipo_produto, estoque_categorias.categoria';

        return $data[$consulta];
    } 

    private function setVarJoins($join)
    {
        $data['medidas'] = [
            [
                'tabela' => 'estoque_sistema_medidas',
                'id1' => 'estoque_medidas.estoque_sistema_medida_id',
                'id2' => 'estoque_sistema_medidas.id_estoque_sistema_medida',
            ]
        ];

        $data['produtosID'] = [
            [
                'tabela' => "estoque_medidas",
                'id1' => 'estoque_produtos.estoque_medida_id',
                'id2' => 'estoque_medidas.id_estoque_medida',
            ],
            [
                'tabela' => 'estoque_marcas',
                'id1' => 'estoque_produtos.estoque_marca_id',
                'id2' => 'estoque_marcas.id_estoque_marca',
            ],
            [
                'tabela' => "estoque_tipo_produtos",
                'id1' => 'estoque_produtos.estoque_tipo_produto_id',
                'id2' => 'estoque_tipo_produtos.id_estoque_tipo_produto',
            ],
            [
                'tabela' => "estoque_categorias",
                'id1' => 'estoque_tipo_produtos.estoque_categoria_id',
                'id2' => 'estoque_categorias.id_estoque_categoria',
            ],
            [
                'tabela' => "estoque_sectors",
                'id1' => 'estoque_tipo_produtos.estoque_sector_id',
                'id2' => 'estoque_sectors.id_estoque_sector',
            ],
            [
                'tabela' => "estoque_sistema_medidas",
                'id1' => 'estoque_medidas.estoque_sistema_medida_id',
                'id2' => 'estoque_sistema_medidas.id_estoque_sistema_medida',
            ],
            [
                'tabela' => "estoque_locations",
                'id1' => 'estoque_produtos.estoque_location_id',
                'id2' => 'estoque_locations.id_estoque_location',
            ],
            [
                'tabela' => "financeiro_notas",
                'id1' => 'financeiro_notas.id_financeiro_nota',
                'id2' => 'estoque_produtos.financeiro_nota_id',
            ],
            [
                'tabela' => "comercial_clientes",
                'id1' => 'financeiro_notas.comercial_cliente_id',
                'id2' => 'comercial_clientes.id_comercial_cliente',
            ]

        ];

        $data['produtosID_os'] = [
            [
                'tabela' => "comercial_os_produtos",
                'id1' => 'estoque_produtos.id_estoque_produto',
                'id2' => 'comercial_os_produtos.estoque_produt_id',
            ],
            [
                'tabela' => "estoque_medidas",
                'id1' => 'estoque_produtos.estoque_medida_id',
                'id2' => 'estoque_medidas.id_estoque_medida',
            ],
            [
                'tabela' => 'estoque_marcas',
                'id1' => 'estoque_produtos.estoque_marca_id',
                'id2' => 'estoque_marcas.id_estoque_marca',
            ],
            [
                'tabela' => "estoque_tipo_produtos",
                'id1' => 'estoque_produtos.estoque_tipo_produto_id',
                'id2' => 'estoque_tipo_produtos.id_estoque_tipo_produto',
            ],
            [
                'tabela' => "estoque_categorias",
                'id1' => 'estoque_tipo_produtos.estoque_categoria_id',
                'id2' => 'estoque_categorias.id_estoque_categoria',
            ],
            [
                'tabela' => "estoque_sectors",
                'id1' => 'estoque_tipo_produtos.estoque_sector_id',
                'id2' => 'estoque_sectors.id_estoque_sector',
            ],
            [
                'tabela' => "estoque_sistema_medidas",
                'id1' => 'estoque_medidas.estoque_sistema_medida_id',
                'id2' => 'estoque_sistema_medidas.id_estoque_sistema_medida',
            ],
            [
                'tabela' => "financeiro_notas",
                'id1' => 'financeiro_notas.id_financeiro_nota',
                'id2' => 'estoque_produtos.financeiro_nota_id',
            ],
            [
                'tabela' => "comercial_clientes",
                'id1' => 'financeiro_notas.comercial_cliente_id',
                'id2' => 'comercial_clientes.id_comercial_cliente',
            ],
           

        ];

        $data['produtos'] = [
            [
                'tabela' => "estoque_medidas",
                'id1' => 'estoque_produtos.estoque_medida_id',
                'id2' => 'estoque_medidas.id_estoque_medida',
            ],
            [
                'tabela' => 'estoque_marcas',
                'id1' => 'estoque_produtos.estoque_marca_id',
                'id2' => 'estoque_marcas.id_estoque_marca',
            ],
            [
                'tabela' => "estoque_tipo_produtos",
                'id1' => 'estoque_produtos.estoque_tipo_produto_id',
                'id2' => 'estoque_tipo_produtos.id_estoque_tipo_produto',
            ],
            [
                'tabela' => "estoque_categorias",
                'id1' => 'estoque_tipo_produtos.estoque_categoria_id',
                'id2' => 'estoque_categorias.id_estoque_categoria',
            ],
            [
                'tabela' => "estoque_sistema_medidas",
                'id1' => 'estoque_medidas.estoque_sistema_medida_id',
                'id2' => 'estoque_sistema_medidas.id_estoque_sistema_medida',
            ]

        ];

        $data['tipo_categoria_setor'] = [
            [
                'tabela' => 'estoque_categorias',
                'id1' => 'estoque_tipo_produtos.estoque_categoria_id',
                'id2' => 'estoque_categorias.id_estoque_categoria',
            ],
            [
                'tabela' => 'estoque_sectors',
                'id1' => 'estoque_tipo_produtos.estoque_sector_id',
                'id2' => 'estoque_sectors.id_estoque_sector',
            ],

        ];

        $data['vendas_clientes'] = [
            [
                'tabela' => 'comercial_clientes',
                'id1' => 'comercial_clientes.id_comercial_cliente',
                'id2' => 'comercial_vendas.comercial_cliente_id',
            ]

        ];

        $data['financeiro_clientes'] = [
            [
                'tabela' => 'comercial_clientes',
                'id1' => 'comercial_clientes.id_comercial_cliente',
                'id2' => 'financeiro_notas.comercial_cliente_id',
            ]

        ];

        $data['funcionario_vendas'] = [
            [
                'tabela' => 'comercial_vendas',
                'id1' => 'administrativo_funcionarios.id_administrativo_funcionario',
                'id2' => 'comercial_vendas.administrativo_funcionario_id',
            ]

        ];

        $data['vendas_clientes_lancamentos'] = [
            [
                'tabela' => 'comercial_clientes',
                'id1' => 'comercial_vendas.comercial_cliente_id',
                'id2' => 'comercial_clientes.id_comercial_cliente',
            ],
            [
                'tabela' => 'financeiro_lancamentos',
                'id1' => 'comercial_vendas.financeiro_lancamento_id',
                'id2' => 'financeiro_lancamentos.id_financeiro_lancamento',
            ]

        ];

        $data['vendas_clientes_lancamentos_cobrancas'] = [
            [
                'tabela' => 'comercial_clientes',
                'id1' => 'comercial_vendas.comercial_cliente_id',
                'id2' => 'comercial_clientes.id_comercial_cliente',
            ],
            [
                'tabela' => 'financeiro_lancamentos',
                'id1' => 'comercial_vendas.financeiro_lancamento_id',
                'id2' => 'financeiro_lancamentos.id_financeiro_lancamento',
            ],
            [
                'tabela' => 'comercial_cobrancas',
                'id1' => 'comercial_cobrancas.comercial_venda_id',
                'id2' => 'comercial_vendas.id_comercial_venda',
            ],

        ];

        $data['clientes_cobrancas'] = [
            [
                'tabela' => 'comercial_clientes',
                'id1' => 'comercial_cobrancas.comercial_cliente_id',
                'id2' => 'comercial_clientes.id_comercial_cliente',
            ]

        ];

        $data['osClientes_clientes_lancamentos_cobrancas'] = [
            [
                'tabela' => 'comercial_clientes',
                'id1' => 'comercial_os_clientes.comercial_cliente_id',
                'id2' => 'comercial_clientes.id_comercial_cliente',
            ],
            [
                'tabela' => 'financeiro_lancamentos',
                'id1' => 'comercial_os_clientes.financeiro_lancamento_id',
                'id2' => 'financeiro_lancamentos.id_financeiro_lancamento',
            ],
            [
                'tabela' => 'comercial_cobrancas',
                'id1' => 'comercial_cobrancas.comercial_os_cliente_id',
                'id2' => 'comercial_os_clientes.id_comercial_os_cliente',
            ],
            [
                'tabela' => 'comercial_cobrancas',
                'id1' => 'comercial_cobrancas.comercial_venda_id',
                'id2' => 'comercial_vendas.id_comercial_venda',
            ],

        ];

        // $data['vendas_clientes_funcionarios'] = [
        //     [
        //         'tabela' => 'comercial_clientes',
        //         'id1' => 'comercial_vendas.comercial_cliente_id',
        //         'id2' => 'comercial_clientes.id_comercial_cliente',
        //     ],
        //     [
        //         'tabela' => 'administrativo_funcionarios',
        //         'id1' => 'comercial_vendas.administrativo_funcionario_id',
        //         'id2' => 'administrativo_funcionarios.id_administrativo_funcionario',
        //     ]

        // ];


        $data['itens_de_vendas'] = [
            [
                'tabela' => "estoque_produtos",
                'id1' => 'estoque_produtos.id_estoque_produto',
                'id2' => 'comercial_itens_de_vendas.estoque_produto_id',
            ],
            [
                'tabela' => "estoque_medidas",
                'id1' => 'estoque_produtos.estoque_medida_id',
                'id2' => 'estoque_medidas.id_estoque_medida', 
            ],
            [
                'tabela' => 'estoque_marcas',
                'id1' => 'estoque_produtos.estoque_marca_id',
                'id2' => 'estoque_marcas.id_estoque_marca',
            ],
            [
                'tabela' => "estoque_tipo_produtos",
                'id1' => 'estoque_produtos.estoque_tipo_produto_id',
                'id2' => 'estoque_tipo_produtos.id_estoque_tipo_produto',
            ],
            [
                'tabela' => "estoque_categorias",
                'id1' => 'estoque_tipo_produtos.estoque_categoria_id',
                'id2' => 'estoque_categorias.id_estoque_categoria',
            ],
            [
                'tabela' => "estoque_sistema_medidas",
                'id1' => 'estoque_medidas.estoque_sistema_medida_id',
                'id2' => 'estoque_sistema_medidas.id_estoque_sistema_medida',
            ]

        ];

        return $data[$join];
    }
}
