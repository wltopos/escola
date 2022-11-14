<?php defined('BASEPATH') OR exit('Pasta raiz não localizada ou inacessível'); ?>

ERROR - 2022-05-27 07:39:06 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'on clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `marcas` ON `produtos`.`marcaId` = `tipo_produtos`.`idMarca`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
ORDER BY `idProduto` DESC
ERROR - 2022-05-27 07:39:38 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'on clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `marcas` ON `produtos`.`marcaId` = `tipo_produtos`.`idMarca`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
ORDER BY `idProduto` DESC
ERROR - 2022-05-27 07:41:05 --> Query error: Unknown column 'idProduto' in 'order clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
ORDER BY `idProduto` DESC
