-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Fev-2023 às 12:03
-- Versão do servidor: 10.6.11-MariaDB-cll-lve
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u782442173_db_wltopos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrativo_contas`
--

CREATE TABLE `administrativo_contas` (
  `id_administrativo_conta` int(11) NOT NULL,
  `conta` varchar(45) DEFAULT NULL,
  `banco` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `saldo` decimal(10,2) DEFAULT NULL,
  `cadastro` date DEFAULT NULL,
  `tipo` varchar(80) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrativo_documentos`
--

CREATE TABLE `administrativo_documentos` (
  `id_administrativo_documento` int(11) NOT NULL,
  `documento` varchar(70) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `path` varchar(300) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `cadastro` date DEFAULT NULL,
  `categoria` varchar(80) DEFAULT NULL,
  `tamanho` varchar(45) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrativo_emitentes`
--

CREATE TABLE `administrativo_emitentes` (
  `id_administrativo_emitentes` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `ie` varchar(50) DEFAULT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `uf` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `url_logo` varchar(225) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrativo_funcionarios`
--

CREATE TABLE `administrativo_funcionarios` (
  `id_administrativo_funcionario` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` varchar(20) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `situacao` tinyint(1) NOT NULL,
  `dataCadastro` date NOT NULL,
  `permissoes_id` int(11) NOT NULL,
  `dataExpiracao` date DEFAULT NULL,
  `asaas_id` varchar(255) DEFAULT NULL,
  `url_image_user` varchar(255) DEFAULT NULL,
  `sistema` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrativo_permissions`
--

CREATE TABLE `administrativo_permissions` (
  `id_administrativo_permission` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `permissoes` text DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrativo_resets_de_senhas`
--

CREATE TABLE `administrativo_resets_de_senhas` (
  `id_administrativo_resets_de_senha` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(255) NOT NULL,
  `data_expiracao` datetime NOT NULL,
  `token_utilizado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrativo_settings`
--

CREATE TABLE `administrativo_settings` (
  `id_administrativo_setting` int(11) NOT NULL,
  `config` varchar(20) NOT NULL,
  `valor` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_clientes`
--

CREATE TABLE `comercial_clientes` (
  `id_comercial_cliente` int(11) NOT NULL,
  `nomeCliente` varchar(255) NOT NULL,
  `apelido` varchar(100) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `pessoa_fisica` tinyint(1) NOT NULL DEFAULT 1,
  `documento` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `contato` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `fornecedor` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_cobrancas`
--

CREATE TABLE `comercial_cobrancas` (
  `id_comercial_cobranca` int(11) NOT NULL,
  `charge_id` varchar(255) DEFAULT NULL,
  `conditional_discount_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `custom_id` int(11) DEFAULT NULL,
  `expire_at` date NOT NULL,
  `message` varchar(255) NOT NULL,
  `payment_method` varchar(11) DEFAULT NULL,
  `payment_url` varchar(255) DEFAULT NULL,
  `request_delivery_address` varchar(64) DEFAULT NULL,
  `total` varchar(15) DEFAULT NULL,
  `barcode` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `payment_gateway` varchar(255) DEFAULT NULL,
  `payment` varchar(64) NOT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `situacao` varchar(36) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL,
  `comercial_venda_id` int(11) DEFAULT NULL,
  `comercial_os_cliente_id` int(11) DEFAULT NULL,
  `comercial_cliente_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_email_queues`
--

CREATE TABLE `comercial_email_queues` (
  `id_comercial_email_queue` int(11) NOT NULL,
  `to` varchar(255) NOT NULL,
  `cc` varchar(255) DEFAULT NULL,
  `bcc` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `headers` text DEFAULT NULL,
  `situacao` enum('pending','sending','sent','failed') DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_equipamentos`
--

CREATE TABLE `comercial_equipamentos` (
  `id_comercial_equipamento` int(11) NOT NULL,
  `equipamento` varchar(150) NOT NULL,
  `num_serie` varchar(80) DEFAULT NULL,
  `modelo` varchar(80) DEFAULT NULL,
  `cor` varchar(45) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `tensao` varchar(45) DEFAULT NULL,
  `potencia` varchar(45) DEFAULT NULL,
  `voltagem` varchar(45) DEFAULT NULL,
  `data_fabricacao` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL,
  `marcas_id` int(11) DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_garantias`
--

CREATE TABLE `comercial_garantias` (
  `id_comercial_garantia` int(11) NOT NULL,
  `dataGarantia` date DEFAULT NULL,
  `refGarantia` varchar(15) DEFAULT NULL,
  `textoGarantia` text DEFAULT NULL,
  `usuarios_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_itens_de_vendas`
--

CREATE TABLE `comercial_itens_de_vendas` (
  `id_comercial_itens_de_venda` int(11) NOT NULL,
  `subTotal` double(10,5) DEFAULT NULL,
  `quantidade` decimal(10,2) DEFAULT NULL,
  `unidadeVenda` varchar(10) DEFAULT NULL,
  `preco` double(10,5) DEFAULT NULL,
  `comercial_venda_id` int(11) NOT NULL,
  `estoque_produto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_os_anexos`
--

CREATE TABLE `comercial_os_anexos` (
  `id_comercial_os_anexo` int(11) NOT NULL,
  `anexo` varchar(45) DEFAULT NULL,
  `thumb` varchar(45) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `path` varchar(300) DEFAULT NULL,
  `os_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_os_clientes`
--

CREATE TABLE `comercial_os_clientes` (
  `id_comercial_os_cliente` int(11) NOT NULL,
  `dataInicial` date DEFAULT NULL,
  `dataFinal` date DEFAULT NULL,
  `garantia` varchar(45) DEFAULT NULL,
  `descricaoProduto` text DEFAULT NULL,
  `defeito` text DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  `laudoTecnico` text DEFAULT NULL,
  `valorTotal` varchar(15) DEFAULT NULL,
  `desconto` decimal(10,2) DEFAULT NULL,
  `valor_desconto` decimal(10,2) DEFAULT NULL,
  `faturado` tinyint(1) NOT NULL,
  `situacao` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL,
  `comercial_cliente_id` int(11) NOT NULL,
  `administrativo_funcionario_id` int(11) NOT NULL,
  `financeiro_lancamento_id` int(11) DEFAULT NULL,
  `comercial_garantia_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_os_equipamentos`
--

CREATE TABLE `comercial_os_equipamentos` (
  `id_comercial_os_equipamento` int(11) NOT NULL,
  `defeito_declarado` varchar(200) DEFAULT NULL,
  `defeito_encontrado` varchar(200) DEFAULT NULL,
  `solucao` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL,
  `equipamentos_id` int(11) DEFAULT NULL,
  `os_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_os_produtos`
--

CREATE TABLE `comercial_os_produtos` (
  `id_comercial_os_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `descricao` varchar(80) DEFAULT NULL,
  `preco` varchar(15) DEFAULT NULL,
  `subTotal` varchar(15) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL,
  `comercial_os_cliente_id` int(11) NOT NULL,
  `estoque_produto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_os_registros`
--

CREATE TABLE `comercial_os_registros` (
  `id_comercial_os_registro` int(11) NOT NULL,
  `anotacao` varchar(255) NOT NULL,
  `data_hora` datetime NOT NULL,
  `os_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_os_servicos`
--

CREATE TABLE `comercial_os_servicos` (
  `id_comercial_os_servico` int(11) NOT NULL,
  `servico` varchar(80) DEFAULT NULL,
  `quantidade` double DEFAULT NULL,
  `preco` varchar(15) DEFAULT NULL,
  `subTotal` varchar(15) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL,
  `comercial_os_cliente_id` int(11) NOT NULL,
  `comercial_servico_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_servicos`
--

CREATE TABLE `comercial_servicos` (
  `id_comercial_servico` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial_vendas`
--

CREATE TABLE `comercial_vendas` (
  `id_comercial_venda` int(11) NOT NULL,
  `dataVenda` date DEFAULT NULL,
  `valorTotal` varchar(45) DEFAULT NULL,
  `ajustaValor` decimal(10,2) DEFAULT NULL,
  `ajustaValorTipo` varchar(10) NOT NULL,
  `valor_ajuste` decimal(10,2) DEFAULT NULL,
  `faturado` tinyint(1) DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  `observacoes_cliente` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL,
  `comercial_cliente_id` int(11) NOT NULL,
  `administrativo_funcionario_id` int(11) DEFAULT NULL,
  `financeiro_lancamento_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_addCampos`
--

CREATE TABLE `estoque_addCampos` (
  `id_estoque_addCampo` int(11) NOT NULL,
  `addCampo` varchar(50) NOT NULL,
  `descricaoAddCampo` varchar(100) DEFAULT NULL,
  `siglaAddCampo` varchar(3) NOT NULL,
  `tipoAddCampo` varchar(10) NOT NULL DEFAULT 'text',
  `parametrosAddCampo` varchar(100) DEFAULT NULL,
  `pathAddCampo` varchar(200) DEFAULT NULL,
  `urlLogoAddCampo` varchar(200) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL,
  `cadastroAddCampo` datetime DEFAULT NULL,
  `updateAddCampo` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_categorias`
--

CREATE TABLE `estoque_categorias` (
  `id_estoque_categoria` int(11) NOT NULL,
  `categoria` varchar(80) DEFAULT NULL,
  `descricaoCategoria` varchar(200) NOT NULL,
  `siglaCategoria` varchar(100) NOT NULL,
  `pathCategoria` varchar(200) DEFAULT NULL,
  `urlLogoCategoria` varchar(200) DEFAULT NULL,
  `statusCategoria` tinyint(1) DEFAULT 1,
  `tipo` varchar(15) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL,
  `updateCategoria` datetime DEFAULT NULL,
  `cadastroCategoria` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_locations`
--

CREATE TABLE `estoque_locations` (
  `id_estoque_location` int(11) NOT NULL,
  `location` varchar(20) NOT NULL,
  `descricaoLocation` varchar(100) NOT NULL,
  `siglaLocation` varchar(200) NOT NULL,
  `ambiente` varchar(100) NOT NULL,
  `pathLocation` varchar(200) DEFAULT NULL,
  `urlLogoLocation` varchar(200) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL,
  `cadastroLocation` datetime DEFAULT NULL,
  `updateLocation` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_marcas`
--

CREATE TABLE `estoque_marcas` (
  `id_estoque_marca` int(11) NOT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `siglaMarca` varchar(10) DEFAULT NULL,
  `descricaoMarca` text DEFAULT NULL,
  `pathMarca` varchar(200) DEFAULT NULL,
  `urlLogoMarca` varchar(200) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL,
  `cadastroMarca` datetime DEFAULT NULL,
  `updateMarca` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_medidas`
--

CREATE TABLE `estoque_medidas` (
  `id_estoque_medida` int(11) NOT NULL,
  `descricaoMedida` varchar(100) NOT NULL,
  `medida` varchar(100) NOT NULL,
  `siglaMedida` varchar(100) NOT NULL,
  `multiplicador` int(10) NOT NULL,
  `pathMedida` varchar(200) DEFAULT NULL,
  `urlLogoMedida` varchar(200) DEFAULT NULL,
  `estoque_sistema_medida_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `cadastroMedida` datetime DEFAULT NULL,
  `updateMedida` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_produtos`
--

CREATE TABLE `estoque_produtos` (
  `id_estoque_produto` int(11) NOT NULL,
  `codDeBarra` varchar(200) DEFAULT NULL,
  `produtoDescricao` varchar(100) DEFAULT NULL,
  `estoque` double(11,3) DEFAULT NULL,
  `estoqueMinimo` double(11,3) DEFAULT 1.000,
  `precoCompra` decimal(10,2) DEFAULT NULL,
  `margemLucro` double(10,2) DEFAULT NULL,
  `precoVenda` decimal(10,2) DEFAULT NULL,
  `observacao` text DEFAULT NULL,
  `estoque_location_id` int(11) DEFAULT NULL,
  `estoque_medida_id` int(11) NOT NULL,
  `estoque_marca_id` int(11) DEFAULT NULL,
  `estoque_tipo_produto_id` int(11) DEFAULT NULL,
  `financeiro_nota_id` int(11) DEFAULT NULL,
  `imagemProduto` longtext DEFAULT NULL,
  `pathImagem` varchar(250) DEFAULT NULL,
  `saida` tinyint(1) NOT NULL DEFAULT 1,
  `entrada` tinyint(1) NOT NULL DEFAULT 1,
  `dataCadastro` datetime DEFAULT NULL,
  `dateUpdate` datetime DEFAULT NULL,
  `dataVencimento` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_sectors`
--

CREATE TABLE `estoque_sectors` (
  `id_estoque_sector` int(11) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `descricaoSector` varchar(200) NOT NULL DEFAULT 'sem descrição',
  `siglaSector` varchar(3) NOT NULL,
  `pathSector` varchar(200) DEFAULT NULL,
  `urlLogoSector` varchar(200) DEFAULT NULL,
  `statusSector` tinyint(1) NOT NULL DEFAULT 1,
  `cadastroSector` datetime DEFAULT NULL,
  `updateSector` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_sistema_medidas`
--

CREATE TABLE `estoque_sistema_medidas` (
  `id_estoque_sistema_medida` int(11) NOT NULL,
  `medidaSistema` varchar(10) NOT NULL,
  `siglaMedidaSistema` varchar(10) NOT NULL,
  `fracaoMedidaSistema` varchar(10) NOT NULL,
  `siglaFracaoSistema` varchar(10) NOT NULL,
  `fracionadorSistema` int(10) NOT NULL,
  `casasDecimais` int(11) NOT NULL,
  `statusMedidaSistema` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_tipo_produtos`
--

CREATE TABLE `estoque_tipo_produtos` (
  `id_estoque_tipo_produto` int(11) NOT NULL,
  `tipo_produto` varchar(100) NOT NULL,
  `descricaoTipo_produto` varchar(200) NOT NULL,
  `siglaTipo_produto` varchar(10) NOT NULL,
  `pathTipo_produto` varchar(200) DEFAULT NULL,
  `urlLogoTipo_produto` varchar(200) DEFAULT NULL,
  `statusTipo_produto` tinyint(4) DEFAULT 1,
  `estoque_categoria_id` int(11) DEFAULT NULL,
  `estoque_sector_id` int(11) NOT NULL,
  `updateTipo_produto` datetime DEFAULT NULL,
  `cadastroTipo_produto` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `financeiro_lancamentos`
--

CREATE TABLE `financeiro_lancamentos` (
  `id_financeiro_lancamento` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` varchar(15) NOT NULL,
  `valor_pago` decimal(15,2) DEFAULT NULL,
  `valor_frete` decimal(10,2) DEFAULT 0.00,
  `valor_ajuste` decimal(10,2) DEFAULT 0.00,
  `valor_ajuste_tipo` varchar(10) NOT NULL DEFAULT 'SEM_AJUSTE',
  `desconto` decimal(10,2) DEFAULT 0.00,
  `data_vencimento` date DEFAULT NULL,
  `data_pagamento` date DEFAULT NULL,
  `baixado` int(1) DEFAULT 0,
  `cliente_fornecedor` varchar(100) DEFAULT NULL,
  `forma_pgto` varchar(100) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `anexo` varchar(250) DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL,
  `comercial_cliente_id` int(11) DEFAULT NULL,
  `administrativo_conta_id` int(11) DEFAULT NULL,
  `comercial_venda_id` int(11) DEFAULT NULL,
  `administrativo_funcionario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `financeiro_notas`
--

CREATE TABLE `financeiro_notas` (
  `id_financeiro_nota` int(11) NOT NULL,
  `comercial_cliente_id` int(11) NOT NULL,
  `notaFiscal` int(70) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `dataEmissao` date DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `tamanho` varchar(45) DEFAULT NULL,
  `path` varchar(300) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `cadastro` datetime DEFAULT NULL,
  `dataUpdate` datetime NOT NULL,
  `categoria` varchar(80) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `msg_status` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL,
  `usuario` varchar(80) DEFAULT NULL,
  `tarefa` varchar(100) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrativo_contas`
--
ALTER TABLE `administrativo_contas`
  ADD PRIMARY KEY (`id_administrativo_conta`);

--
-- Índices para tabela `administrativo_documentos`
--
ALTER TABLE `administrativo_documentos`
  ADD PRIMARY KEY (`id_administrativo_documento`);

--
-- Índices para tabela `administrativo_emitentes`
--
ALTER TABLE `administrativo_emitentes`
  ADD PRIMARY KEY (`id_administrativo_emitentes`);

--
-- Índices para tabela `administrativo_funcionarios`
--
ALTER TABLE `administrativo_funcionarios`
  ADD PRIMARY KEY (`id_administrativo_funcionario`),
  ADD KEY `fk_usuarios_permissoes1_idx` (`permissoes_id`);

--
-- Índices para tabela `administrativo_permissions`
--
ALTER TABLE `administrativo_permissions`
  ADD PRIMARY KEY (`id_administrativo_permission`);

--
-- Índices para tabela `administrativo_resets_de_senhas`
--
ALTER TABLE `administrativo_resets_de_senhas`
  ADD PRIMARY KEY (`id_administrativo_resets_de_senha`);

--
-- Índices para tabela `administrativo_settings`
--
ALTER TABLE `administrativo_settings`
  ADD PRIMARY KEY (`id_administrativo_setting`),
  ADD UNIQUE KEY `config` (`config`);

--
-- Índices para tabela `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Índices para tabela `comercial_clientes`
--
ALTER TABLE `comercial_clientes`
  ADD PRIMARY KEY (`id_comercial_cliente`);

--
-- Índices para tabela `comercial_cobrancas`
--
ALTER TABLE `comercial_cobrancas`
  ADD PRIMARY KEY (`id_comercial_cobranca`),
  ADD KEY `fk_cobrancas_os1` (`comercial_os_cliente_id`),
  ADD KEY `fk_cobrancas_vendas1` (`comercial_venda_id`),
  ADD KEY `fk_cobrancas_clientes1` (`comercial_cliente_id`);

--
-- Índices para tabela `comercial_email_queues`
--
ALTER TABLE `comercial_email_queues`
  ADD PRIMARY KEY (`id_comercial_email_queue`);

--
-- Índices para tabela `comercial_equipamentos`
--
ALTER TABLE `comercial_equipamentos`
  ADD PRIMARY KEY (`id_comercial_equipamento`),
  ADD KEY `fk_equipanentos_marcas1_idx` (`marcas_id`),
  ADD KEY `fk_equipanentos_clientes1_idx` (`clientes_id`);

--
-- Índices para tabela `comercial_garantias`
--
ALTER TABLE `comercial_garantias`
  ADD PRIMARY KEY (`id_comercial_garantia`),
  ADD KEY `fk_garantias_usuarios1` (`usuarios_id`);

--
-- Índices para tabela `comercial_itens_de_vendas`
--
ALTER TABLE `comercial_itens_de_vendas`
  ADD PRIMARY KEY (`id_comercial_itens_de_venda`),
  ADD KEY `fk_itens_de_vendas_vendas1` (`comercial_venda_id`),
  ADD KEY `fk_itens_de_vendas_produtos1` (`estoque_produto_id`);

--
-- Índices para tabela `comercial_os_anexos`
--
ALTER TABLE `comercial_os_anexos`
  ADD PRIMARY KEY (`id_comercial_os_anexo`),
  ADD KEY `fk_anexos_os1` (`os_id`);

--
-- Índices para tabela `comercial_os_clientes`
--
ALTER TABLE `comercial_os_clientes`
  ADD PRIMARY KEY (`id_comercial_os_cliente`),
  ADD KEY `fk_os_clientes1` (`comercial_cliente_id`),
  ADD KEY `fk_os_usuarios1` (`administrativo_funcionario_id`),
  ADD KEY `fk_os_lancamentos1` (`financeiro_lancamento_id`),
  ADD KEY `fk_os_garantias1` (`comercial_garantia_id`);

--
-- Índices para tabela `comercial_os_equipamentos`
--
ALTER TABLE `comercial_os_equipamentos`
  ADD PRIMARY KEY (`id_comercial_os_equipamento`),
  ADD KEY `fk_equipamentos_os_equipanentos1_idx` (`equipamentos_id`),
  ADD KEY `fk_equipamentos_os_os1_idx` (`os_id`);

--
-- Índices para tabela `comercial_os_produtos`
--
ALTER TABLE `comercial_os_produtos`
  ADD PRIMARY KEY (`id_comercial_os_produto`),
  ADD KEY `fk_produtos_os_os1` (`comercial_os_cliente_id`),
  ADD KEY `fk_produtos_os_produtos1` (`estoque_produto_id`);

--
-- Índices para tabela `comercial_os_registros`
--
ALTER TABLE `comercial_os_registros`
  ADD PRIMARY KEY (`id_comercial_os_registro`);

--
-- Índices para tabela `comercial_os_servicos`
--
ALTER TABLE `comercial_os_servicos`
  ADD PRIMARY KEY (`id_comercial_os_servico`),
  ADD KEY `fk_servicos_os_os1` (`comercial_os_cliente_id`),
  ADD KEY `fk_servicos_os_servicos1` (`comercial_servico_id`);

--
-- Índices para tabela `comercial_servicos`
--
ALTER TABLE `comercial_servicos`
  ADD PRIMARY KEY (`id_comercial_servico`);

--
-- Índices para tabela `comercial_vendas`
--
ALTER TABLE `comercial_vendas`
  ADD PRIMARY KEY (`id_comercial_venda`),
  ADD KEY `fk_vendas_clientes1` (`comercial_cliente_id`),
  ADD KEY `fk_vendas_usuarios1` (`administrativo_funcionario_id`),
  ADD KEY `fk_vendas_lancamentos1` (`financeiro_lancamento_id`);

--
-- Índices para tabela `estoque_addCampos`
--
ALTER TABLE `estoque_addCampos`
  ADD PRIMARY KEY (`id_estoque_addCampo`);

--
-- Índices para tabela `estoque_categorias`
--
ALTER TABLE `estoque_categorias`
  ADD PRIMARY KEY (`id_estoque_categoria`);

--
-- Índices para tabela `estoque_locations`
--
ALTER TABLE `estoque_locations`
  ADD PRIMARY KEY (`id_estoque_location`);

--
-- Índices para tabela `estoque_marcas`
--
ALTER TABLE `estoque_marcas`
  ADD PRIMARY KEY (`id_estoque_marca`);

--
-- Índices para tabela `estoque_medidas`
--
ALTER TABLE `estoque_medidas`
  ADD PRIMARY KEY (`id_estoque_medida`),
  ADD KEY `estoque_medida_id` (`estoque_sistema_medida_id`);

--
-- Índices para tabela `estoque_produtos`
--
ALTER TABLE `estoque_produtos`
  ADD PRIMARY KEY (`id_estoque_produto`),
  ADD KEY `marcaId` (`estoque_marca_id`),
  ADD KEY `tipoId` (`estoque_tipo_produto_id`),
  ADD KEY `notaFiscalId` (`financeiro_nota_id`),
  ADD KEY `estoque_location_id` (`estoque_location_id`),
  ADD KEY `estoque_medidas_id` (`estoque_medida_id`);

--
-- Índices para tabela `estoque_sectors`
--
ALTER TABLE `estoque_sectors`
  ADD PRIMARY KEY (`id_estoque_sector`);

--
-- Índices para tabela `estoque_sistema_medidas`
--
ALTER TABLE `estoque_sistema_medidas`
  ADD PRIMARY KEY (`id_estoque_sistema_medida`);

--
-- Índices para tabela `estoque_tipo_produtos`
--
ALTER TABLE `estoque_tipo_produtos`
  ADD PRIMARY KEY (`id_estoque_tipo_produto`),
  ADD KEY `produto_categorias` (`estoque_categoria_id`),
  ADD KEY `setorId` (`estoque_sector_id`);

--
-- Índices para tabela `financeiro_lancamentos`
--
ALTER TABLE `financeiro_lancamentos`
  ADD PRIMARY KEY (`id_financeiro_lancamento`),
  ADD KEY `fk_lancamentos_clientes1` (`comercial_cliente_id`),
  ADD KEY `fk_lancamentos_contas1_idx` (`administrativo_conta_id`),
  ADD KEY `fk_lancamentos_usuarios1` (`administrativo_funcionario_id`),
  ADD KEY `fk_lancamentos_vendas1` (`comercial_venda_id`);

--
-- Índices para tabela `financeiro_notas`
--
ALTER TABLE `financeiro_notas`
  ADD PRIMARY KEY (`id_financeiro_nota`),
  ADD KEY `fonecedor` (`comercial_cliente_id`);

--
-- Índices para tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_log`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrativo_contas`
--
ALTER TABLE `administrativo_contas`
  MODIFY `id_administrativo_conta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `administrativo_documentos`
--
ALTER TABLE `administrativo_documentos`
  MODIFY `id_administrativo_documento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `administrativo_emitentes`
--
ALTER TABLE `administrativo_emitentes`
  MODIFY `id_administrativo_emitentes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `administrativo_funcionarios`
--
ALTER TABLE `administrativo_funcionarios`
  MODIFY `id_administrativo_funcionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `administrativo_permissions`
--
ALTER TABLE `administrativo_permissions`
  MODIFY `id_administrativo_permission` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `administrativo_resets_de_senhas`
--
ALTER TABLE `administrativo_resets_de_senhas`
  MODIFY `id_administrativo_resets_de_senha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `administrativo_settings`
--
ALTER TABLE `administrativo_settings`
  MODIFY `id_administrativo_setting` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_clientes`
--
ALTER TABLE `comercial_clientes`
  MODIFY `id_comercial_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_cobrancas`
--
ALTER TABLE `comercial_cobrancas`
  MODIFY `id_comercial_cobranca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_email_queues`
--
ALTER TABLE `comercial_email_queues`
  MODIFY `id_comercial_email_queue` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_equipamentos`
--
ALTER TABLE `comercial_equipamentos`
  MODIFY `id_comercial_equipamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_garantias`
--
ALTER TABLE `comercial_garantias`
  MODIFY `id_comercial_garantia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_itens_de_vendas`
--
ALTER TABLE `comercial_itens_de_vendas`
  MODIFY `id_comercial_itens_de_venda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_os_anexos`
--
ALTER TABLE `comercial_os_anexos`
  MODIFY `id_comercial_os_anexo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_os_clientes`
--
ALTER TABLE `comercial_os_clientes`
  MODIFY `id_comercial_os_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_os_equipamentos`
--
ALTER TABLE `comercial_os_equipamentos`
  MODIFY `id_comercial_os_equipamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_os_produtos`
--
ALTER TABLE `comercial_os_produtos`
  MODIFY `id_comercial_os_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_os_registros`
--
ALTER TABLE `comercial_os_registros`
  MODIFY `id_comercial_os_registro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_os_servicos`
--
ALTER TABLE `comercial_os_servicos`
  MODIFY `id_comercial_os_servico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_servicos`
--
ALTER TABLE `comercial_servicos`
  MODIFY `id_comercial_servico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comercial_vendas`
--
ALTER TABLE `comercial_vendas`
  MODIFY `id_comercial_venda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque_addCampos`
--
ALTER TABLE `estoque_addCampos`
  MODIFY `id_estoque_addCampo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque_categorias`
--
ALTER TABLE `estoque_categorias`
  MODIFY `id_estoque_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque_locations`
--
ALTER TABLE `estoque_locations`
  MODIFY `id_estoque_location` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque_marcas`
--
ALTER TABLE `estoque_marcas`
  MODIFY `id_estoque_marca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque_medidas`
--
ALTER TABLE `estoque_medidas`
  MODIFY `id_estoque_medida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque_produtos`
--
ALTER TABLE `estoque_produtos`
  MODIFY `id_estoque_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque_sectors`
--
ALTER TABLE `estoque_sectors`
  MODIFY `id_estoque_sector` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque_sistema_medidas`
--
ALTER TABLE `estoque_sistema_medidas`
  MODIFY `id_estoque_sistema_medida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque_tipo_produtos`
--
ALTER TABLE `estoque_tipo_produtos`
  MODIFY `id_estoque_tipo_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `financeiro_lancamentos`
--
ALTER TABLE `financeiro_lancamentos`
  MODIFY `id_financeiro_lancamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `financeiro_notas`
--
ALTER TABLE `financeiro_notas`
  MODIFY `id_financeiro_nota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `administrativo_funcionarios`
--
ALTER TABLE `administrativo_funcionarios`
  ADD CONSTRAINT `fk_usuarios_permissoes1` FOREIGN KEY (`permissoes_id`) REFERENCES `administrativo_permissions` (`id_administrativo_permission`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `comercial_equipamentos`
--
ALTER TABLE `comercial_equipamentos`
  ADD CONSTRAINT `fk_equipanentos_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `comercial_clientes` (`id_comercial_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipanentos_marcas1` FOREIGN KEY (`marcas_id`) REFERENCES `estoque_marcas` (`id_estoque_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `comercial_itens_de_vendas`
--
ALTER TABLE `comercial_itens_de_vendas`
  ADD CONSTRAINT `venda_item` FOREIGN KEY (`comercial_venda_id`) REFERENCES `comercial_vendas` (`id_comercial_venda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `venda_produtos` FOREIGN KEY (`estoque_produto_id`) REFERENCES `estoque_produtos` (`id_estoque_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `comercial_os_clientes`
--
ALTER TABLE `comercial_os_clientes`
  ADD CONSTRAINT `fk_os_clientes1` FOREIGN KEY (`comercial_cliente_id`) REFERENCES `comercial_clientes` (`id_comercial_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_os_lancamentos1` FOREIGN KEY (`financeiro_lancamento_id`) REFERENCES `financeiro_lancamentos` (`id_financeiro_lancamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_os_usuarios1` FOREIGN KEY (`administrativo_funcionario_id`) REFERENCES `administrativo_funcionarios` (`id_administrativo_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `comercial_os_produtos`
--
ALTER TABLE `comercial_os_produtos`
  ADD CONSTRAINT `fk_produtos_os_os1` FOREIGN KEY (`comercial_os_cliente_id`) REFERENCES `comercial_os_clientes` (`id_comercial_os_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produtos_os_produtos1` FOREIGN KEY (`estoque_produto_id`) REFERENCES `estoque_produtos` (`id_estoque_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `comercial_os_servicos`
--
ALTER TABLE `comercial_os_servicos`
  ADD CONSTRAINT `fk_servicos_os_os1` FOREIGN KEY (`comercial_os_cliente_id`) REFERENCES `comercial_os_clientes` (`id_comercial_os_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servicos_os_servicos1` FOREIGN KEY (`comercial_servico_id`) REFERENCES `comercial_servicos` (`id_comercial_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `comercial_vendas`
--
ALTER TABLE `comercial_vendas`
  ADD CONSTRAINT `fk_vendas_clientes1` FOREIGN KEY (`comercial_cliente_id`) REFERENCES `comercial_clientes` (`id_comercial_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendas_lancamentos1` FOREIGN KEY (`financeiro_lancamento_id`) REFERENCES `financeiro_lancamentos` (`id_financeiro_lancamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estoque_medidas`
--
ALTER TABLE `estoque_medidas`
  ADD CONSTRAINT `medida_medidaSistema2` FOREIGN KEY (`estoque_sistema_medida_id`) REFERENCES `estoque_sistema_medidas` (`id_estoque_sistema_medida`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estoque_produtos`
--
ALTER TABLE `estoque_produtos`
  ADD CONSTRAINT `local_produto` FOREIGN KEY (`estoque_location_id`) REFERENCES `estoque_locations` (`id_estoque_location`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `marca_produto` FOREIGN KEY (`estoque_marca_id`) REFERENCES `estoque_marcas` (`id_estoque_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `notaFiscal_produto` FOREIGN KEY (`financeiro_nota_id`) REFERENCES `financeiro_notas` (`id_financeiro_nota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `produto_medida` FOREIGN KEY (`estoque_medida_id`) REFERENCES `estoque_medidas` (`id_estoque_medida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tipo_prduto` FOREIGN KEY (`estoque_tipo_produto_id`) REFERENCES `estoque_tipo_produtos` (`id_estoque_tipo_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estoque_tipo_produtos`
--
ALTER TABLE `estoque_tipo_produtos`
  ADD CONSTRAINT `produto_categorias` FOREIGN KEY (`estoque_categoria_id`) REFERENCES `estoque_categorias` (`id_estoque_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tipo_prduto_Setor` FOREIGN KEY (`estoque_sector_id`) REFERENCES `estoque_sectors` (`id_estoque_sector`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `financeiro_lancamentos`
--
ALTER TABLE `financeiro_lancamentos`
  ADD CONSTRAINT `fk_lancamentos_clientes1` FOREIGN KEY (`comercial_cliente_id`) REFERENCES `comercial_clientes` (`id_comercial_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lancamentos_contas1` FOREIGN KEY (`administrativo_conta_id`) REFERENCES `administrativo_contas` (`id_administrativo_conta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lancamentos_vendas1` FOREIGN KEY (`comercial_venda_id`) REFERENCES `comercial_vendas` (`id_comercial_venda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `financeiro_notas`
--
ALTER TABLE `financeiro_notas`
  ADD CONSTRAINT `fk_fornecedor_nfe` FOREIGN KEY (`comercial_cliente_id`) REFERENCES `comercial_clientes` (`id_comercial_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
