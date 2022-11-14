<?php defined('BASEPATH') OR exit('Pasta raiz não localizada ou inacessível'); ?>

ERROR - 2022-04-24 07:53:39 --> Query error: Unknown table 'os' - Invalid query: SELECT `os`.*, `clientes`.`nomeCliente`, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lamcamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lamcamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-03-27T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 07:53:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `os`.*, `clientes`.`nomeCliente`, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lamcamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lamcamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 07:54:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `os`.*, `clientes`.`nomeCliente`, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 07:54:38 --> Query error: Unknown table 'os' - Invalid query: SELECT `os`.*, `clientes`.`nomeCliente`, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-03-27T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 07:55:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 07:57:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 07:57:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT lancamentos.valor FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 08:03:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 08:08:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 08:13:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 08:37:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
ERROR - 2022-04-24 09:13:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 09:13:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 09:47:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 09:47:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 09:48:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 09:48:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 09:48:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-24 23:21:23 --> 404 Page Not Found: /index
ERROR - 2022-04-24 23:21:31 --> 404 Page Not Found: /index
ERROR - 2022-04-24 23:21:37 --> 404 Page Not Found: /index
