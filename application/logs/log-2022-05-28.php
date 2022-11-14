<?php defined('BASEPATH') OR exit('Pasta raiz não localizada ou inacessível'); ?>

ERROR - 2022-05-28 17:01:13 --> Query error: Unknown column 'idMarca' in 'order clause' - Invalid query: SELECT *
FROM `medidas`
ORDER BY `idMarca` DESC
 LIMIT 26
ERROR - 2022-05-28 18:16:51 --> Query error: Unknown column 'KG' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `KG`
ORDER BY `idMedida` DESC
ERROR - 2022-05-28 18:17:58 --> Query error: Unknown column 'KG' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `KG` IS NULL
ORDER BY `idMedida` DESC
ERROR - 2022-05-28 18:31:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''15000'
ORDER BY `idMedida` DESC' at line 3 - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `=` '15000'
ORDER BY `idMedida` DESC
ERROR - 2022-05-28 18:36:59 --> Query error: Unknown column 'KG' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `KG`
ORDER BY `idMedida` DESC
