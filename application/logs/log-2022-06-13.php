<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-06-13 13:49:07 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-13 14:42:02 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-13 19:29:37 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-13 21:17:16 --> Query error: Column 'unidadeVenda' cannot be null - Invalid query: INSERT INTO `itens_de_vendas` (`unidadeVenda`, `quantidade`, `subTotal`, `produtos_id`, `preco`, `vendas_id`) VALUES (NULL, '2', NULL, NULL, NULL, '34')
ERROR - 2022-06-13 21:17:48 --> Query error: Column 'unidadeVenda' cannot be null - Invalid query: INSERT INTO `itens_de_vendas` (`unidadeVenda`, `quantidade`, `subTotal`, `produtos_id`, `preco`, `vendas_id`) VALUES (NULL, '2', NULL, NULL, NULL, '34')
ERROR - 2022-06-13 21:18:38 --> Query error: Column 'unidadeVenda' cannot be null - Invalid query: INSERT INTO `itens_de_vendas` (`unidadeVenda`, `quantidade`, `subTotal`, `produtos_id`, `preco`, `vendas_id`) VALUES (NULL, '2', NULL, NULL, NULL, '34')
ERROR - 2022-06-13 21:19:00 --> Query error: Column 'unidadeVenda' cannot be null - Invalid query: INSERT INTO `itens_de_vendas` (`unidadeVenda`, `quantidade`, `subTotal`, `produtos_id`, `preco`, `vendas_id`) VALUES (NULL, '2', NULL, NULL, NULL, '34')
ERROR - 2022-06-13 21:19:48 --> Query error: Column 'unidadeVenda' cannot be null - Invalid query: INSERT INTO `itens_de_vendas` (`unidadeVenda`, `quantidade`, `subTotal`, `produtos_id`, `preco`, `vendas_id`) VALUES (NULL, '2', NULL, NULL, NULL, '34')
ERROR - 2022-06-13 21:20:38 --> Query error: Column 'unidadeVenda' cannot be null - Invalid query: INSERT INTO `itens_de_vendas` (`unidadeVenda`, `quantidade`, `subTotal`, `produtos_id`, `preco`, `vendas_id`) VALUES (NULL, '2', NULL, NULL, NULL, '34')
ERROR - 2022-06-13 21:21:03 --> Query error: Column 'unidadeVenda' cannot be null - Invalid query: INSERT INTO `itens_de_vendas` (`unidadeVenda`, `quantidade`, `subTotal`, `produtos_id`, `preco`, `vendas_id`) VALUES (NULL, '2', NULL, NULL, NULL, '34')
ERROR - 2022-06-13 21:23:09 --> Query error: Column 'unidadeVenda' cannot be null - Invalid query: INSERT INTO `itens_de_vendas` (`unidadeVenda`, `quantidade`, `subTotal`, `produtos_id`, `preco`, `vendas_id`) VALUES (NULL, 0.002, 0.021333333333333, '254', 10.666666666667, '34')
ERROR - 2022-06-13 21:23:30 --> Query error: Column 'unidadeVenda' cannot be null - Invalid query: INSERT INTO `itens_de_vendas` (`unidadeVenda`, `quantidade`, `subTotal`, `produtos_id`, `preco`, `vendas_id`) VALUES (NULL, 0.002, 0.021333333333333, '254', 10.666666666667, '34')
ERROR - 2022-06-13 21:23:50 --> Query error: Column 'unidadeVenda' cannot be null - Invalid query: INSERT INTO `itens_de_vendas` (`unidadeVenda`, `quantidade`, `subTotal`, `produtos_id`, `preco`, `vendas_id`) VALUES (NULL, '2', 21.333333333333, '254', 10.666666666667, '34')
ERROR - 2022-06-13 21:26:18 --> Query error: Column 'unidadeVenda' cannot be null - Invalid query: INSERT INTO `itens_de_vendas` (`unidadeVenda`, `quantidade`, `subTotal`, `produtos_id`, `preco`, `vendas_id`) VALUES (NULL, '2', 21.333333333333, '254', 10.666666666667, '34')
ERROR - 2022-06-13 23:33:01 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-13 23:36:21 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-13 23:36:39 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-13 23:42:56 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:43:17 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:43:36 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:43:40 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:46:20 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = 'oi', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:46:42 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:48:12 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:48:15 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:48:41 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:48:45 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:48:50 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:48:53 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:52:31 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:54:21 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:57:45 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:57:54 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
ERROR - 2022-06-13 23:58:57 --> Query error: Unknown column 'categoria' in 'field list' - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoria` = '1', `marca` = 'JEL_PLAST', `complemento` = 'KIT', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `unidade` = 'SC25KG', `precoCompra` = '100.00', `margemLucro` = '10', `precoVenda` = '110.00', `estoque` = '250000', `observacao` = '', `estoqueMinimo` = '10', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '1', `entrada` = '1'
WHERE `idProdutos` = '255'
