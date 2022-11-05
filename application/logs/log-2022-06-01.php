<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-06-01 12:33:33 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-01 15:33:42 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-01 15:36:21 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-01 15:36:53 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-01 15:37:13 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-01 15:43:44 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-01 15:44:30 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-01 15:45:15 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-01 15:46:24 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-01 15:46:43 --> Query error: Unknown column 'valor_desconto' in 'field list' - Invalid query: SELECT SUM(case when tipo = 'despesa' then valor end) as despesas, SUM(case when tipo = 'receita' then valor end) as receitas, SUM(case when tipo = 'receita'  then valor_desconto end) as descontos_receita, SUM(case when tipo = 'despesa'  then valor_desconto end) as descontos_despesa, SUM(case when tipo = 'receita'  then valor_pago end) as valor_pago_receita, SUM(case when tipo = 'despesa'  then valor_pago end) as valor_pago_despesa, SUM(case when tipo = 'despesa' and baixado = '1' then valor end) as despesas_pagas, SUM(case when tipo = 'receita' and baixado = '1' then valor end) as receitas_pagas, SUM(case when tipo = 'receita' and baixado = '1'  then valor_pago end) as valor_pago_receitas_pagas, SUM(case when tipo = 'despesa' and baixado = '1'  then valor_pago end) as valor_pago_despesas_pagas
FROM `lancamentos`
WHERE `data_vencimento` >= '2022-06-01' AND `data_vencimento` <= '2022-06-01'
ERROR - 2022-06-01 15:47:05 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-01 15:49:49 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
