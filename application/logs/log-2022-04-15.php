<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-04-15 21:59:09 --> 404 Page Not Found: Produtos/autoCompleteClient
ERROR - 2022-04-15 22:14:07 --> 404 Page Not Found: /index
ERROR - 2022-04-15 22:14:09 --> 404 Page Not Found: /index
ERROR - 2022-04-15 20:48:38 --> Query error: Unknown column 'desconto' in 'field list' - Invalid query: SELECT SUM(CASE WHEN baixado = 1 AND tipo = 'receita' THEN valor - ((desconto * valor) / 100)  END) as total_receita,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'despesa' THEN valor END) as total_despesa,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'receita' THEN valor - ((desconto * valor) / 100)  END) as total_receita_pendente,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'despesa' THEN valor END) as total_despesa_pendente FROM lancamentos
ERROR - 2022-04-15 20:58:16 --> Query error: Unknown column 'desconto' in 'field list' - Invalid query: SELECT SUM(CASE WHEN baixado = 1 AND tipo = 'receita' THEN valor - ((desconto * valor) / 100)  END) as total_receita,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'despesa' THEN valor END) as total_despesa,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'receita' THEN valor - ((desconto * valor) / 100)  END) as total_receita_pendente,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'despesa' THEN valor END) as total_despesa_pendente FROM lancamentos
