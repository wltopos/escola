<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-07-21 00:04:52 --> 404 Page Not Found: AutoComplete/autoCompleteFornecedor
ERROR - 2022-07-21 00:05:05 --> 404 Page Not Found: AutoComplete/autoCompleteFornecedor
ERROR - 2022-07-21 00:05:12 --> 404 Page Not Found: AutoComplete/autoCompleteFornecedor
ERROR - 2022-07-21 00:21:45 --> 404 Page Not Found: /index
ERROR - 2022-07-21 00:22:39 --> 404 Page Not Found: /index
ERROR - 2022-07-21 00:22:48 --> 404 Page Not Found: /index
ERROR - 2022-07-21 00:25:52 --> 404 Page Not Found: /index
ERROR - 2022-07-21 00:26:10 --> 404 Page Not Found: /index
ERROR - 2022-07-21 00:26:18 --> 404 Page Not Found: /index
ERROR - 2022-07-21 00:26:26 --> 404 Page Not Found: /index
ERROR - 2022-07-21 00:36:35 --> 404 Page Not Found: /index
ERROR - 2022-07-21 00:46:02 --> 404 Page Not Found: /index
ERROR - 2022-07-21 00:47:51 --> 404 Page Not Found: /index
ERROR - 2022-07-21 00:51:54 --> 404 Page Not Found: /index
ERROR - 2022-07-21 06:43:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN `clientes` ON `clientes`.`idCliente` = `notas_fiscais`.`fornecedorId`
WHERE' at line 2 - Invalid query: SELECT `notas_fiscais`
JOIN `clientes` ON `clientes`.`idCliente` = `notas_fiscais`.`fornecedorId`
WHERE `idNotaFiscal` = '2'
 LIMIT 1
ERROR - 2022-07-21 06:47:45 --> Query error: Unknown column 'clientes.idCliente' in 'on clause' - Invalid query: SELECT `notas_fiscais`.*
FROM `notas_fiscais`
JOIN `clientes` ON `clientes`.`idCliente` = `notas_fiscais`.`fornecedorId`
WHERE `idNotaFiscal` = '2'
 LIMIT 1
ERROR - 2022-07-21 07:49:38 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '4'
ERROR - 2022-07-21 07:49:55 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '4'
ERROR - 2022-07-21 07:51:25 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '4'
ERROR - 2022-07-21 07:51:57 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '2'
ERROR - 2022-07-21 09:40:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' desc
ORDER BY `idMedida` DESC
 LIMIT 0' at line 3 - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
WHERE idProdutos, desc
ORDER BY `idMedida` DESC
 LIMIT 0
ERROR - 2022-07-21 09:43:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' desc
ORDER BY `idMedida` DESC
 LIMIT 0' at line 3 - Invalid query: SELECT *
FROM `categorias`
WHERE idCategoria, desc
ORDER BY `idMedida` DESC
 LIMIT 0
ERROR - 2022-07-21 09:44:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' desc
 LIMIT 0' at line 3 - Invalid query: SELECT *
FROM `categorias`
WHERE idCategoria, desc
 LIMIT 0
ERROR - 2022-07-21 09:44:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' desc
 LIMIT 0' at line 3 - Invalid query: SELECT *
FROM `categorias`
WHERE idCategoria, desc
 LIMIT 0
ERROR - 2022-07-21 09:44:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' desc
 LIMIT 0' at line 3 - Invalid query: SELECT *
FROM `categorias`
WHERE idCategoria, desc
 LIMIT 0
ERROR - 2022-07-21 09:46:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESC
 LIMIT 0' at line 8 - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade`=`medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId`=`marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId`=`categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId`=`tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema`=`medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC,  DESC
 LIMIT 0
ERROR - 2022-07-21 09:47:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESC
 LIMIT 0' at line 8 - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade`=`medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId`=`marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId`=`categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId`=`tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema`=`medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC,  DESC
 LIMIT 0
ERROR - 2022-07-21 09:48:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESC
 LIMIT 0' at line 8 - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade`=`medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId`=`marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId`=`categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId`=`tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema`=`medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC,  DESC
 LIMIT 0
ERROR - 2022-07-21 09:49:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESC
 LIMIT 0' at line 8 - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade`=`medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId`=`marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId`=`categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId`=`tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema`=`medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC,  DESC
 LIMIT 0
ERROR - 2022-07-21 09:55:01 --> Query error: Unknown column 'medidas.idMedida' in 'field list' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `produtos`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
ORDER BY `idMedida` DESC
 LIMIT 0
ERROR - 2022-07-21 10:07:03 --> Query error: Unknown table 'medidas' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.`idNotaFiscal`, `notas_fiscais`.`notaFiscal`
FROM `produtos`
WHERE `produtos`.`idProdutos` IS NULL
 LIMIT 1
ERROR - 2022-07-21 10:09:09 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '4'
ERROR - 2022-07-21 10:16:08 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '1'
ERROR - 2022-07-21 10:16:26 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '1'
ERROR - 2022-07-21 10:19:58 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '1'
ERROR - 2022-07-21 10:23:12 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '2'
ERROR - 2022-07-21 10:23:24 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '4'
ERROR - 2022-07-21 10:24:22 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '2'
ERROR - 2022-07-21 10:27:47 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '4'
ERROR - 2022-07-21 10:28:17 --> Query error: Unknown column 'idNotasFiscais' in 'where clause' - Invalid query: DELETE FROM `notas_fiscais`
WHERE `idNotasFiscais` = '4'
