<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-04-23 18:12:25 --> 404 Page Not Found: Relatorios/pasta
ERROR - 2022-04-23 18:12:50 --> 404 Page Not Found: Relatorios/pasta
ERROR - 2022-04-23 20:33:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT_pagoN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo =' at line 1 - Invalid query: 
            SELECT_pagoN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_JAN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JAN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_FEV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_FEV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_MAR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_MAR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_ABR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_ABR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_MAI_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_MAI_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_JUN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JUN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_JUL_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JUL_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_AGO_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_AGO_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_SET_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_SET_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_OUT_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_OUT_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_NOV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_NOV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'receita' THEN valor_pago  END) AS VALOR_DEZ_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_DEZ_DES
            FROM lancamentos
            WHERE EXTRACT(YEAR FROM data_pagamento) = 2022
        
ERROR - 2022-04-23 20:34:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT_pagoN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo =' at line 1 - Invalid query: 
            SELECT_pagoN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_JAN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JAN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_FEV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_FEV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_MAR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_MAR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_ABR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_ABR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_MAI_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_MAI_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_JUN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JUN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_JUL_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JUL_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_AGO_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_AGO_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_SET_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_SET_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_OUT_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_OUT_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_NOV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_NOV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_DEZ_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_DEZ_DES
            FROM lancamentos
            WHERE EXTRACT(YEAR FROM data_pagamento) = 2022
        
ERROR - 2022-04-23 20:36:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'THEN valor - valor_desconto  END) AS VALOR_JAN_REC,
                SUM(CASE WHE' at line 1 - Invalid query: 
            SELECT - valor_descontoN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_JAN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JAN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_FEV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_FEV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_MAR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_MAR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_ABR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_ABR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_MAI_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_MAI_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_JUN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JUN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_JUL_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JUL_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_AGO_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_AGO_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_SET_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_SET_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_OUT_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_OUT_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_NOV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_NOV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_DEZ_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_DEZ_DES
            FROM lancamentos
            WHERE EXTRACT(YEAR FROM data_pagamento) = 2022
        
ERROR - 2022-04-23 20:39:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'THEN valor - valor_desconto  END) AS VALOR_JAN_REC,
                SUM(CASE WHE' at line 1 - Invalid query: 
            SELECT - valor_desconto (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_JAN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JAN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_FEV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_FEV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_MAR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_MAR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_ABR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_ABR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_MAI_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_MAI_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_JUN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JUN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_JUL_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JUL_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_AGO_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_AGO_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_SET_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_SET_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_OUT_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_OUT_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_NOV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_NOV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_DEZ_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_DEZ_DES
            FROM lancamentos
            WHERE EXTRACT(YEAR FROM data_pagamento) = 2022
        
ERROR - 2022-04-23 20:39:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'THEN valor - valor_desconto  END) AS VALOR_JAN_REC,
                SUM(CASE WHE' at line 1 - Invalid query: 
            SELECT - valor_desconto (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_JAN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JAN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_FEV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_FEV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_MAR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_MAR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_ABR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_ABR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_MAI_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_MAI_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_JUN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JUN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_JUL_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_JUL_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_AGO_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_AGO_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_SET_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_SET_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_OUT_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_OUT_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_NOV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_NOV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'receita' THEN valor - valor_desconto  END) AS VALOR_DEZ_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'despesa' THEN valor END) AS VALOR_DEZ_DES
            FROM lancamentos
            WHERE EXTRACT(YEAR FROM data_pagamento) = 2022
        
ERROR - 2022-04-23 21:23:39 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` >= '2022-03-27T00:00:00-03:00'
AND `os`.`dataFinal` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 21:24:24 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` >= '2022-03-27T00:00:00-03:00'
AND `os`.`dataFinal` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 21:25:37 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` >= '2022-03-27T00:00:00-03:00'
AND `os`.`dataFinal` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 21:30:58 --> Query error: Unknown column 'os.dataFinal' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` >= '2022-03-27T00:00:00-03:00'
AND `os`.`dataFinal` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 21:31:03 --> Query error: Unknown column 'os.dataFinal' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` >= '2022-03-27T00:00:00-03:00'
AND `os`.`dataFinal` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 21:33:03 --> Query error: Unknown column 'os.dataFinal' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` >= '2022-03-27T00:00:00-03:00'
AND `os`.`dataFinal` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 21:34:29 --> Query error: Unknown column 'os.dataFinal' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` >= '2022-03-27T00:00:00-03:00'
AND `os`.`dataFinal` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 21:34:33 --> Query error: Unknown column 'os.dataFinal' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` >= '2022-03-27T00:00:00-03:00'
AND `os`.`dataFinal` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 21:37:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` > `IS` `NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 21:38:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, `SELECT valor FROM lancamentos WHERE tipo =` "despesa"
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` > `IS` `NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 21:39:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` > `IS` `NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 21:39:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` > `IS` `NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 21:40:03 --> Query error: Unknown table 'lancamentos' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
ERROR - 2022-04-23 21:45:40 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2022-04-23 21:46:12 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2022-04-23 22:02:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` > `IS` `NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:02:23 --> Query error: Unknown column 'os.dataFinal' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` >= '2022-03-27T00:00:00-03:00'
AND `os`.`dataFinal` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:03:46 --> Query error: Unknown column 'os.dataFinal' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` >= '2022-03-27T00:00:00-03:00'
AND `os`.`dataFinal` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:06:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` > `IS` `NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:07:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` > `IS` `NULL`
AND `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:10:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:10:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:10:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:10:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:11:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:11:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:11:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:13:21 --> Query error: Unknown column 'os.dataFinal' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` <= 16
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:13:30 --> Query error: Unknown column 'os.dataFinal' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`dataFinal` <= 16
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:25:34 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `os`.`data_vencimento` >= '2022-03-27T00:00:00-03:00'
AND `os`.`data_pagamento` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:26:01 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` >= '2022-03-27T00:00:00-03:00'
AND `lancamentos`.`data_pagamento` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:27:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` > `IS` `NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`
ERROR - 2022-04-23 22:27:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` > `IS` `NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`
ERROR - 2022-04-23 22:27:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` > `IS` `NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`
ERROR - 2022-04-23 22:29:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` > `IS` `NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`
ERROR - 2022-04-23 22:30:00 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` >= '2022-03-27T00:00:00-03:00'
AND `lancamentos`.`data_pagamento` <= '2022-05-08T00:00:00-03:00'
ERROR - 2022-04-23 22:32:33 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` >= '2022-03-27T00:00:00-03:00'
AND `lancamentos`.`data_pagamento` <= '2022-05-08T00:00:00-03:00'
ERROR - 2022-04-23 22:32:47 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` >= '2022-02-27T00:00:00-03:00'
AND `lancamentos`.`data_pagamento` <= '2022-04-10T00:00:00-03:00'
ERROR - 2022-04-23 22:32:56 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` >= '2022-03-27T00:00:00-03:00'
AND `lancamentos`.`data_pagamento` <= '2022-05-08T00:00:00-03:00'
ERROR - 2022-04-23 22:33:15 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` >= '2022-03-27T00:00:00-03:00'
AND `lancamentos`.`data_pagamento` <= '2022-05-08T00:00:00-03:00'
ERROR - 2022-04-23 22:33:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` > `IS` `NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`
ERROR - 2022-04-23 22:33:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` > `IS` `NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`
ERROR - 2022-04-23 22:34:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:35:48 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
ERROR - 2022-04-23 22:35:56 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
ERROR - 2022-04-23 22:37:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`
GROUP BY `lancamentos`.`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM servicos_os WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` > `IS` `NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:43:40 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` >= '2022-03-27T00:00:00-03:00'
AND `lancamentos`.`data_pagamento` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:43:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`
GROUP BY `lancamentos`.`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` > `IS` `NULL`
AND `lancamentos`.`data_pagamento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:44:14 --> Query error: Unknown column 'tipos' in 'where clause' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipos = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:45:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:45:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` > `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:46:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` > `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 22:52:54 --> Query error: Unknown table 'lancamentos' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
ERROR - 2022-04-23 22:53:20 --> Query error: Unknown table 'lancamentos' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
ERROR - 2022-04-23 22:54:33 --> Query error: Unknown table 'lancamentos' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
ERROR - 2022-04-23 22:54:41 --> Query error: Unknown table 'lancamentos' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
ERROR - 2022-04-23 22:59:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_vencimento` > `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 23:02:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `lancamentos`.`idLancamentos`' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 23:04:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 23:04:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 23:06:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.' at line 4 - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 1) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 1) totalDespesas
FROM `lancamentos`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` > `IS` `NULL`
AND `lancamentos`.`data_vencimento` < `IS` `NULL`
GROUP BY `lancamentos`.`idLancamentos`
ERROR - 2022-04-23 23:11:53 --> Query error: Not unique table/alias: 'clientes' - Invalid query: SELECT `lancamentos`.*, `clientes`.`nomeCliente`, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "receita"), 0) totalReceitas, COALESCE((SELECT valor FROM lancamentos WHERE tipo = "despesa"), 0) totalDespesas
FROM `clientes`
JOIN `clientes` ON `clientes`.`idClientes` = `lancamentos`.`clientes_id`
WHERE `lancamentos`.`data_pagamento` >= '2022-03-27T00:00:00-03:00'
AND `lancamentos`.`data_vencimento` <= '2022-05-08T00:00:00-03:00'
GROUP BY `lancamentos`.`idLancamentos`
