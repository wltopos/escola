<?php defined('BASEPATH') OR exit('Pasta raiz não localizada ou inacessível'); ?>

ERROR - 2022-09-01 11:09:24 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`, `funcionarios`.`nome`, `cobrancas`.`vendas_id`, `cobrancas`.`idCobranca`, `cobrancas`.`status`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idfuncionario` = `vendas`.`funcionario_id`
JOIN `cobrancas` ON `cobrancas`.`vendas_id` = `vendas`.`idVendas`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '9'
 LIMIT 1
ERROR - 2022-09-01 11:12:18 --> 404 Page Not Found: /index
ERROR - 2022-09-01 12:40:28 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: UPDATE `vendas` SET `valorTotal` = '265.14', `ajustaValor` = 26.514, `ajustaValorTipo` = 'DESCONTO', `valor_ajuste` = '745.71'
WHERE `idVendas` = '1'
ERROR - 2022-09-01 12:42:15 --> Query error: Table 'u782442173_db_estoque.servicos' doesn't exist - Invalid query: INSERT INTO `servicos` (`nome`, `descricao`, `preco`) VALUES ('MANUTÊNÇÃO NA PRINCIPAL', 'DESCONTO 20%', '250.00')
ERROR - 2022-09-01 13:34:55 --> Query error: Table 'u782442173_db_estoque.os' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows` FROM `os`
ERROR - 2022-09-01 13:38:26 --> Query error: Unknown column 'idLogs' in 'order clause' - Invalid query: SELECT *
FROM `logs`
ORDER BY `idLogs` DESC
 LIMIT 10
ERROR - 2022-09-01 13:38:48 --> 404 Page Not Found: /index
ERROR - 2022-09-01 14:34:32 --> 404 Page Not Found: /index
ERROR - 2022-09-01 14:34:34 --> Query error: Unknown column 'idLogs' in 'order clause' - Invalid query: SELECT *
FROM `logs`
ORDER BY `idLogs` DESC
 LIMIT 10
ERROR - 2022-09-01 16:20:11 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`, `funcionarios`.`nome`, `cobrancas`.`vendas_id`, `cobrancas`.`idCobranca`, `cobrancas`.`status`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idfuncionario` = `vendas`.`funcionario_id`
JOIN `cobrancas` ON `cobrancas`.`vendas_id` = `vendas`.`idVendas`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '9'
 LIMIT 1
ERROR - 2022-09-01 22:10:53 --> Query error: Table 'u782442173_db_estoque.vendas' doesn't exist - Invalid query: SELECT `vendas`.*, `clientes`.*, `clientes`.`email` as `emailCliente`, `lancamentos`.`data_vencimento`, `funcionarios`.`telefone` as `telefone_funcionario`, `funcionarios`.`email` as `email_funcionario`, `funcionarios`.`nome`, `funcionarios`.`nome`, `cobrancas`.`vendas_id`, `cobrancas`.`idCobranca`, `cobrancas`.`status`
FROM `vendas`
JOIN `clientes` ON `clientes`.`idClientes` = `vendas`.`clientes_id`
JOIN `funcionarios` ON `funcionarios`.`idfuncionario` = `vendas`.`funcionario_id`
JOIN `cobrancas` ON `cobrancas`.`vendas_id` = `vendas`.`idVendas`
LEFT JOIN `lancamentos` ON `vendas`.`idVendas` = `lancamentos`.`vendas_id`
WHERE `vendas`.`idVendas` = '9'
 LIMIT 1
