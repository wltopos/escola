<?php defined('BASEPATH') OR exit('Pasta raiz não localizada ou inacessível'); ?>

ERROR - 2022-06-03 06:16:32 --> Query error: Unknown column 'lancamentos.valor_desconto' in 'field list' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "receita"), 0) totalReceitas, COALESCE((SELECT SUM(lancamentos.valor - lancamentos.valor_desconto) FROM lancamentos WHERE lancamentos.tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-05-29T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-07-10T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-06-03 06:16:39 --> Query error: Unknown column 'valor_desconto' in 'field list' - Invalid query: SELECT SUM(case when tipo = 'despesa' then valor end) as despesas, SUM(case when tipo = 'receita' then valor end) as receitas, SUM(case when tipo = 'receita'  then valor_desconto end) as descontos_receita, SUM(case when tipo = 'despesa'  then valor_desconto end) as descontos_despesa, SUM(case when tipo = 'receita'  then valor_pago end) as valor_pago_receita, SUM(case when tipo = 'despesa'  then valor_pago end) as valor_pago_despesa, SUM(case when tipo = 'despesa' and baixado = '1' then valor end) as despesas_pagas, SUM(case when tipo = 'receita' and baixado = '1' then valor end) as receitas_pagas, SUM(case when tipo = 'receita' and baixado = '1'  then valor_pago end) as valor_pago_receitas_pagas, SUM(case when tipo = 'despesa' and baixado = '1'  then valor_pago end) as valor_pago_despesas_pagas
FROM `lancamentos`
WHERE `data_vencimento` >= '2022-06-03' AND `data_vencimento` <= '2022-06-03'
ERROR - 2022-06-03 06:33:46 --> Query error: Unknown column 'valor_desconto' in 'field list' - Invalid query: SELECT SUM(CASE WHEN baixado = 1 AND tipo = 'receita' THEN valor END) as total_receitas_pagas_sem_desconto,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'despesa' THEN valor END) as total_valor_despesas_sem_desconto,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'receita' THEN valor END) as total_valor_receitas_pendentes,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'despesa' THEN valor END) as total_valor_despesas_pendentes,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'receita' THEN valor_pago END) as total_valor_pago_receitas,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'despesa' THEN valor_pago END) as total_valor_pago_despesas,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'receita' THEN valor_desconto END) as total_descontos_pagos_receita,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'receita' THEN valor_desconto END) as total_valor_descontos_receita_pendentes,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'receita' AND valor_desconto = 0 THEN valor END) as total_receitas_pagas_sem_desconto,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'despesa' AND valor_desconto = 0 THEN valor END) as total_pagas_despesas_sem_desconto
                       FROM lancamentos
