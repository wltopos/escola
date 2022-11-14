<?php defined('BASEPATH') OR exit('Pasta raiz não localizada ou inacessível'); ?>

ERROR - 2022-06-04 07:17:31 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-04 17:46:15 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
