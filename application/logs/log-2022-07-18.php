<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-07-18 10:49:24 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-18 15:13:53 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-18 22:19:50 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-18 22:25:57 --> Query error: Unknown table 'medidas_sistema' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-18 22:28:50 --> Query error: Unknown column 'tipo_produtos.idCategoria' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idCategoria`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
