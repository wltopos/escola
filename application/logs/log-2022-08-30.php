<?php defined('BASEPATH') OR exit('Pasta raiz não localizada ou inacessível'); ?>

ERROR - 2022-08-30 10:45:06 --> 404 Page Not Found: /index
ERROR - 2022-08-30 15:16:04 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 15:23:22 --> Query error: Table 'u782442173_db_estoque.itens_de_vendas' doesn't exist - Invalid query: SELECT `itens_de_vendas`.*, `produtos`.*, `medidas`.*, `medidas_sistema`.*, `tipo_produtos`.`tipo_produto`
FROM `itens_de_vendas`
JOIN `produtos` ON `produtos`.`idProdutos` = `itens_de_vendas`.`produtos_id`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
WHERE `vendas_id` = '1'
ERROR - 2022-08-30 15:36:43 --> Query error: Table 'u782442173_db_estoque.esotque_produtos' doesn't exist - Invalid query: SELECT `comercial_itens_de_vendas`.*, `esotque_produtos`.*, `esotque_medidas`.*, `esotque_medidas_sistema`.*, `comercial_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `esotque_produtos` ON `esotque_produtos`.`id_esotque_produto` = `itens_de_vendas`.`esotque_produto_id`
JOIN `comercial_tipo_produtos` ON `esotque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produto_id` .`id_estoque_tipo_produto`
JOIN `esotque_medidas` ON `esotque_produtos`.`estoque_medida_id` = `esotque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:37:45 --> Query error: Table 'u782442173_db_estoque.esotque_produtos' doesn't exist - Invalid query: SELECT `comercial_itens_de_vendas`.*, `esotque_produtos`.*, `esotque_medidas`.*, `esotque_medidas_sistema`.*, `comercial_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `esotque_produtos` ON `esotque_produtos`.`id_esotque_produto` = `itens_de_vendas`.`esotque_produto_id`
JOIN `comercial_tipo_produtos` ON `esotque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produto_id` .`id_estoque_tipo_produto`
JOIN `esotque_medidas` ON `esotque_produtos`.`estoque_medida_id` = `esotque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:37:47 --> Query error: Table 'u782442173_db_estoque.esotque_produtos' doesn't exist - Invalid query: SELECT `comercial_itens_de_vendas`.*, `esotque_produtos`.*, `esotque_medidas`.*, `esotque_medidas_sistema`.*, `comercial_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `esotque_produtos` ON `esotque_produtos`.`id_esotque_produto` = `itens_de_vendas`.`esotque_produto_id`
JOIN `comercial_tipo_produtos` ON `esotque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produto_id` .`id_estoque_tipo_produto`
JOIN `esotque_medidas` ON `esotque_produtos`.`estoque_medida_id` = `esotque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:37:47 --> Query error: Table 'u782442173_db_estoque.esotque_produtos' doesn't exist - Invalid query: SELECT `comercial_itens_de_vendas`.*, `esotque_produtos`.*, `esotque_medidas`.*, `esotque_medidas_sistema`.*, `comercial_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `esotque_produtos` ON `esotque_produtos`.`id_esotque_produto` = `itens_de_vendas`.`esotque_produto_id`
JOIN `comercial_tipo_produtos` ON `esotque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produto_id` .`id_estoque_tipo_produto`
JOIN `esotque_medidas` ON `esotque_produtos`.`estoque_medida_id` = `esotque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:38:00 --> Query error: Table 'u782442173_db_estoque.comercial_tipo_produtos' doesn't exist - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `comercial_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `comercial_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produto_id` .`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:38:00 --> Query error: Table 'u782442173_db_estoque.comercial_tipo_produtos' doesn't exist - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `comercial_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `comercial_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produto_id` .`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:00 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:49 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:50 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:51 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:52 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:52 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:52 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:53 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:53 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:53 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:54 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:54 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `medidas_sistema`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:55 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:55 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:56 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:56 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:57 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:57 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:57 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:48:58 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:49:46 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:49:47 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:49:48 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:49:48 --> Query error: Unknown table 'u782442173_db_estoque.estoque_medidas_sistema' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_medidas_sistema`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:49:49 --> Query error: Unknown column 'comercial_vendas_id' in 'where clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:49:49 --> Query error: Unknown column 'comercial_vendas_id' in 'where clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:50:15 --> Query error: Unknown column 'comercial_vendas_id' in 'where clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:50:16 --> Query error: Unknown column 'comercial_vendas_id' in 'where clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:50:17 --> Query error: Unknown column 'comercial_vendas_id' in 'where clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:50:17 --> Query error: Unknown column 'comercial_vendas_id' in 'where clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_vendas_id` = '1'
ERROR - 2022-08-30 15:50:18 --> Query error: Unknown column 'itens_de_vendas.estoque_produto_id' in 'on clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_venda_id` = '1'
ERROR - 2022-08-30 15:50:18 --> Query error: Unknown column 'itens_de_vendas.estoque_produto_id' in 'on clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_venda_id` = '1'
ERROR - 2022-08-30 15:50:57 --> Query error: Unknown column 'itens_de_vendas.estoque_produto_id' in 'on clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_venda_id` = '1'
ERROR - 2022-08-30 15:50:58 --> Query error: Unknown column 'itens_de_vendas.estoque_produto_id' in 'on clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_venda_id` = '1'
ERROR - 2022-08-30 15:50:58 --> Query error: Unknown column 'itens_de_vendas.estoque_produto_id' in 'on clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_venda_id` = '1'
ERROR - 2022-08-30 15:50:59 --> Query error: Unknown column 'itens_de_vendas.estoque_produto_id' in 'on clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_venda_id` = '1'
ERROR - 2022-08-30 15:50:59 --> Query error: Unknown column 'itens_de_vendas.estoque_produto_id' in 'on clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_venda_id` = '1'
ERROR - 2022-08-30 15:50:59 --> Query error: Unknown column 'itens_de_vendas.estoque_produto_id' in 'on clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_venda_id` = '1'
ERROR - 2022-08-30 15:50:59 --> Query error: Unknown column 'itens_de_vendas.estoque_produto_id' in 'on clause' - Invalid query: SELECT `comercial_itens_de_vendas`.*, `estoque_produtos`.*, `estoque_medidas`.*, `estoque_sistema_medidas`.*, `estoque_tipo_produtos`.`tipo_produto`
FROM `comercial_itens_de_vendas`
JOIN `estoque_produtos` ON `estoque_produtos`.`id_estoque_produto` = `itens_de_vendas`.`estoque_produto_id`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id` = `estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_medidas` ON `estoque_produtos`.`estoque_medida_id` = `estoque_medidas`.`id_estoque_medida`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id` = `estoque_sistema_medidas`.`id_estoque_sistema_medida`
WHERE `comercial_venda_id` = '1'
ERROR - 2022-08-30 15:51:00 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 15:51:00 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 15:51:00 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 15:51:00 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 15:51:00 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 15:51:00 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 15:51:01 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 15:51:01 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 15:51:01 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 15:53:54 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 15:53:56 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 16:16:34 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:19:33 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:20:35 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:20:38 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:20:42 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:22:51 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:22:53 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:22:55 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:22:57 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:23:47 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:23:49 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:23:51 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:23:53 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:23:57 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:24:35 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:25:09 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:25:12 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:25:14 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:26:02 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:26:44 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:26:48 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:27:47 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:27:49 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:27:52 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:29:25 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:30:41 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:31:36 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:32:19 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:33:43 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:34:20 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:34:53 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:37:14 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:38:03 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:38:57 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:39:00 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:39:23 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:39:59 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:40:01 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:40:46 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:40:49 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:41:31 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:41:33 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:50:05 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:50:14 --> 404 Page Not Found: /index
ERROR - 2022-08-30 16:51:12 --> 404 Page Not Found: /index
ERROR - 2022-08-30 20:42:20 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:28:17 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:28:34 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:30:12 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:32:48 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:33:38 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:34:23 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:34:47 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:35:59 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:36:09 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:37:10 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:38:22 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:38:40 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:52:21 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:52:34 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:52:37 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:52:42 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:53:38 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:57:35 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:58:46 --> 404 Page Not Found: /index
ERROR - 2022-08-30 21:59:22 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:00:58 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:02:21 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:05:40 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:10:07 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:10:09 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:10:12 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:10:19 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:10:21 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:10:50 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:10:54 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:10:56 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:10:59 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:11:01 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:11:26 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:11:48 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:11:53 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:12 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:14 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:16 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:19 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:21 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:23 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:25 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:27 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:29 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:35 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:37 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:54 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:12:57 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:13:00 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:13:34 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:13:37 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:13:39 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:13:43 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:13:55 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:13:57 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:14:00 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:14:02 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:14:05 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:17:52 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:17:57 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:18:59 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:19:40 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:20:13 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:20:43 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:20:49 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:33:31 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:33:34 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:33:37 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:33:39 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:33:58 --> 404 Page Not Found: /index
ERROR - 2022-08-30 22:34:01 --> 404 Page Not Found: /index
ERROR - 2022-08-30 23:13:20 --> 404 Page Not Found: /index
ERROR - 2022-08-30 23:15:51 --> 404 Page Not Found: /index
ERROR - 2022-08-30 23:19:52 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idFuncionarios` = `vendas`.`funcionarios_id`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '1'
 LIMIT 1
ERROR - 2022-08-30 23:45:14 --> 404 Page Not Found: /index
ERROR - 2022-08-30 23:46:37 --> 404 Page Not Found: /index
