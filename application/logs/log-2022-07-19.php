<?php defined('BASEPATH') OR exit('Pasta raiz não localizada ou inacessível'); ?>

ERROR - 2022-07-19 00:01:21 --> Query error: Unknown column 'idCAtegoria' in 'where clause' - Invalid query: SELECT *
FROM `tipo_produtos`
WHERE `idCAtegoria` = 6
ORDER BY `idTipo` DESC
ERROR - 2022-07-19 00:01:53 --> Query error: Unknown column 'idCategoria' in 'where clause' - Invalid query: SELECT *
FROM `tipo_produtos`
WHERE `idCategoria` = 7
ORDER BY `idTipo` DESC
ERROR - 2022-07-19 00:19:32 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.`idNotaFiscal`, `notas_fiscais`.`notaFiscal`
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
LEFT JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
WHERE `produtos`.`idProdutos` = '13'
 LIMIT 1
ERROR - 2022-07-19 23:15:15 --> Query error: Unknown table 'medidas' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.`idNotaFiscal`, `notas_fiscais`.`notaFiscal`
FROM `produtos`
ORDER BY `idProdutos` DESC
 LIMIT 0
ERROR - 2022-07-19 23:15:17 --> Query error: Unknown table 'medidas' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.`idNotaFiscal`, `notas_fiscais`.`notaFiscal`
FROM `produtos`
ORDER BY `idProdutos` DESC
 LIMIT 0
ERROR - 2022-07-19 23:15:40 --> Query error: Unknown table 'medidas' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.`idNotaFiscal`, `notas_fiscais`.`notaFiscal`
FROM `produtos`
ORDER BY `idProdutos` DESC
 LIMIT 0
ERROR - 2022-07-19 23:15:42 --> Query error: Unknown table 'medidas' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.`idNotaFiscal`, `notas_fiscais`.`notaFiscal`
FROM `produtos`
ORDER BY `idProdutos` DESC
 LIMIT 0
ERROR - 2022-07-19 23:15:43 --> Query error: Unknown table 'medidas' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.`idNotaFiscal`, `notas_fiscais`.`notaFiscal`
FROM `produtos`
ORDER BY `idProdutos` DESC
 LIMIT 0
ERROR - 2022-07-19 23:16:15 --> Query error: Unknown table 'medidas' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.`idNotaFiscal`, `notas_fiscais`.`notaFiscal`
FROM `produtos`
ORDER BY `idProdutos` DESC
 LIMIT 0
ERROR - 2022-07-19 23:16:16 --> Query error: Unknown table 'medidas' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.`idNotaFiscal`, `notas_fiscais`.`notaFiscal`
FROM `produtos`
ORDER BY `idProdutos` DESC
 LIMIT 0
ERROR - 2022-07-19 23:28:10 --> 404 Page Not Found: Produtos/produtos_model
ERROR - 2022-07-19 23:35:28 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-19 23:37:09 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-19 23:37:13 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-19 23:37:26 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-19 23:38:53 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-19 23:38:55 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-19 23:38:55 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-19 23:38:56 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-19 23:38:57 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-19 23:38:57 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-19 23:40:22 --> Query error: Unknown column 'tipo_produtos.idMarca' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
ERROR - 2022-07-19 23:49:50 --> Query error: Unknown table 'medidas' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`categoriaId`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*
FROM `produtos`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `idProdutos` DESC
 LIMIT 10
