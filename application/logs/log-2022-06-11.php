<?php defined('BASEPATH') OR exit('Pasta raiz não localizada ou inacessível'); ?>

ERROR - 2022-06-11 12:18:40 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-11 12:19:19 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-11 12:40:44 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-11 13:52:01 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-11 14:20:17 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-11 14:20:55 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-01T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-06-12T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-11 14:31:07 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-11 15:27:05 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-11 15:28:46 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-11 15:51:30 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-11 15:52:09 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-11 15:52:20 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-11 16:20:13 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
