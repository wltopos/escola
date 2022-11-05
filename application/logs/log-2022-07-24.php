<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-07-24 09:47:35 --> Query error: Unknown column 'medidas.idMedida' in 'field list' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `produtos`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 10:17:50 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `idMedida` = `undefined`
 LIMIT 1
ERROR - 2022-07-24 10:19:49 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `idMedida` = `undefined`
 LIMIT 1
ERROR - 2022-07-24 11:52:00 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 11:53:18 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 11:53:30 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.*, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:07:07 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:08:05 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:09:22 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:09:23 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:09:25 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:10:23 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:13:33 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:13:37 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:18:40 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:18:41 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:18:41 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:18:41 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:18:42 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:19:21 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:20:22 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:20:23 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:20:23 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:20:24 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:20:24 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:20:24 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:21:18 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:21:19 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:21:20 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:23:11 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:25:47 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:26:36 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:26:48 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:27:06 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:27:19 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:29:22 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 12:29:23 --> Query error: Unknown column 'medidas_sistema.multiplicadorSistema' in 'field list' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`descricao`, `produtos`.`precoVenda`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`, `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`multiplicadorSistema`, `medidas_sistema`.`statusMedidaSistema`
FROM `produtos`
JOIN `medidas` ON `medidas`.`idMedida`=`produtos`.`idUnidade`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
 LIMIT 5
ERROR - 2022-07-24 13:32:21 --> 404 Page Not Found: Produtos/convertemedida
ERROR - 2022-07-24 13:33:08 --> 404 Page Not Found: Produtos/convertemedida
ERROR - 2022-07-24 13:40:58 --> Query error: Unknown column 'und' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `und` = `medida`
 LIMIT 1
ERROR - 2022-07-24 13:43:04 --> Query error: Unknown column 'medida' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `medida` = `und`
 LIMIT 1
ERROR - 2022-07-24 13:43:05 --> Query error: Unknown column 'medida' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `medida` = `und`
 LIMIT 1
ERROR - 2022-07-24 13:44:13 --> Query error: Unknown column 'und' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `descricaoMedida` = `und`
 LIMIT 1
ERROR - 2022-07-24 13:44:14 --> Query error: Unknown column 'und' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `descricaoMedida` = `und`
 LIMIT 1
ERROR - 2022-07-24 13:44:49 --> Query error: Unknown column 'und' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `und`
 LIMIT 1
ERROR - 2022-07-24 13:44:50 --> Query error: Unknown column 'und' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `und`
 LIMIT 1
ERROR - 2022-07-24 13:45:07 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:45:08 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:45:21 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `medidas`.`sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:45:22 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `medidas`.`sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:45:23 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `medidas`.`sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:45:24 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `medidas`.`sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:46:43 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `medidas`.`sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:46:45 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `medidas`.`sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:46:46 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `medidas`.`sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:46:46 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `medidas`.`sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:47:53 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:49:00 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:49:01 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:49:02 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:49:02 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:49:38 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:49:39 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `UND`
 LIMIT 1
ERROR - 2022-07-24 13:49:56 --> Query error: Unknown column 'und' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`sigla`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `und`
 LIMIT 1
ERROR - 2022-07-24 13:50:18 --> Query error: Unknown column 'und' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `und`
 LIMIT 1
ERROR - 2022-07-24 13:52:31 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `sigla` = `UND`
ERROR - 2022-07-24 13:52:51 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `UND`
ERROR - 2022-07-24 13:52:52 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `UND`
ERROR - 2022-07-24 13:52:53 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `UND`
ERROR - 2022-07-24 13:52:53 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `UND`
ERROR - 2022-07-24 13:52:54 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `UND`
ERROR - 2022-07-24 13:53:59 --> Query error: Unknown column 'und' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `und`
ERROR - 2022-07-24 13:54:00 --> Query error: Unknown column 'und' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `und`
ERROR - 2022-07-24 13:54:14 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `UND`
ERROR - 2022-07-24 13:54:24 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `medidas`.`sigla` = `UND`
ERROR - 2022-07-24 13:54:25 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `medidas`.`sigla` = `UND`
ERROR - 2022-07-24 13:54:26 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `medidas`.`sigla` = `UND`
ERROR - 2022-07-24 13:55:02 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `UND`
ERROR - 2022-07-24 13:56:14 --> Query error: Unknown column 'UND' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla` = `UND`
ERROR - 2022-07-24 13:57:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' UND' at line 3 - Invalid query: SELECT *
FROM `medidas`
WHERE sigla, UND
ERROR - 2022-07-24 13:57:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' UND' at line 3 - Invalid query: SELECT *
FROM `medidas`
WHERE sigla, UND
ERROR - 2022-07-24 13:57:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' UND' at line 3 - Invalid query: SELECT *
FROM `medidas`
WHERE sigla, UND
ERROR - 2022-07-24 13:58:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' UND' at line 3 - Invalid query: SELECT *
FROM `medidas`
WHERE sigla, UND
ERROR - 2022-07-24 14:06:13 --> Query error: Unknown column 'sigla,PC100M' in 'where clause' - Invalid query: SELECT *
FROM `medidas`
WHERE `sigla,PC100M` IS NULL
ERROR - 2022-07-24 14:12:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 3 - Invalid query: SELECT *
FROM `medidas`
WHERE  IS NULL
ERROR - 2022-07-24 18:23:56 --> Query error: Unknown column 'idProdutos' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas`.`sigla`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `idProdutos` = ' Array'
ERROR - 2022-07-24 18:24:17 --> Query error: Unknown column 'idProdutos' in 'where clause' - Invalid query: SELECT `medidas_sistema`.`idMedidaSistema`, `medidas`.`sigla`, `medidas_sistema`.`siglaMedidaSistema`, `medidas_sistema`.`siglaFracaoSistema`, `medidas_sistema`.`medidaSistema`, `medidas_sistema`.`fracionadorSistema`, `medidas_sistema`.`statusMedidaSistema`, `medidas`.`idMedida`, `medidas`.`descricaoMedida`, `medidas`.`multiplicador`, `medidas`.`status`
FROM `medidas`
JOIN `medidas_sistema` ON `medidas_sistema`.`idMedidaSistema`=`medidas`.`idMedidaSistema`
WHERE `idProdutos` = ' Array'
ERROR - 2022-07-24 19:18:42 --> Query error: Column 'valor_ajuste_tipo' cannot be null - Invalid query: INSERT INTO `lancamentos` (`vendas_id`, `descricao`, `valor`, `valor_pago`, `valor_ajuste`, `valor_ajuste_tipo`, `clientes_id`, `data_vencimento`, `data_pagamento`, `baixado`, `cliente_fornecedor`, `forma_pgto`, `tipo`, `usuarios_id`) VALUES ('1', 'Fatura de Venda Nº: 1', '160.76', '0.00', '0.00', NULL, '1', '2022-07-24', '2022-07-24', 1, 'DISTIBUIDORA ADAUTO CARVALHO LTDA', 'Dinheiro', 'receita', '1')
ERROR - 2022-07-24 19:40:05 --> Query error: Unknown column 'itens_de_vendas.diVenda' in 'field list' - Invalid query: SELECT `itens_de_vendas`.`diVenda`, `itens_de_vendas`.`quantidade`
FROM `itens_de_vendas`
WHERE `idVenda` = ' '
 LIMIT 1
ERROR - 2022-07-24 19:42:17 --> Query error: Unknown column 'itens_de_vendas.idVenda' in 'field list' - Invalid query: SELECT `itens_de_vendas`.`idVenda`, `itens_de_vendas`.`quantidade`
FROM `itens_de_vendas`
WHERE `idVenda` = ' '
 LIMIT 1
ERROR - 2022-07-24 19:43:21 --> Query error: Unknown column 'idVenda' in 'where clause' - Invalid query: SELECT `itens_de_vendas`.`idItens`, `itens_de_vendas`.`quantidade`
FROM `itens_de_vendas`
WHERE `idVenda` = ' '
 LIMIT 1
ERROR - 2022-07-24 20:30:42 --> Query error: Unknown column 'venda_id' in 'where clause' - Invalid query: SELECT `itens_de_vendas`.*, `produtos`.*, `medidas`.*, `medidas_sistema`.*
FROM `itens_de_vendas`
JOIN `produtos` ON `produtos`.`idProdutos`=`itens_de_vendas`.`produtos_id`
JOIN `medidas` ON `produtos`.`idUnidade`=`medidas`.`idMedida`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema`=`medidas_sistema`.`idMedidaSistema`
WHERE `venda_id` = '2'
ERROR - 2022-07-24 20:57:47 --> Query error: Column 'valor_ajuste_tipo' cannot be null - Invalid query: INSERT INTO `lancamentos` (`vendas_id`, `descricao`, `valor`, `valor_pago`, `valor_ajuste`, `valor_ajuste_tipo`, `clientes_id`, `data_vencimento`, `data_pagamento`, `baixado`, `cliente_fornecedor`, `forma_pgto`, `tipo`, `usuarios_id`) VALUES ('2', 'Fatura de Venda Nº: 2', '120.57', '0.00', '0.00', NULL, '1', '2022-07-24', '2022-07-24', 1, 'DISTIBUIDORA ADAUTO CARVALHO LTDA', 'Dinheiro', 'receita', '1')
ERROR - 2022-07-24 20:58:06 --> Query error: Column 'valor_ajuste_tipo' cannot be null - Invalid query: INSERT INTO `lancamentos` (`vendas_id`, `descricao`, `valor`, `valor_pago`, `valor_ajuste`, `valor_ajuste_tipo`, `clientes_id`, `data_vencimento`, `data_pagamento`, `baixado`, `cliente_fornecedor`, `forma_pgto`, `tipo`, `usuarios_id`) VALUES ('2', 'Fatura de Venda Nº: 2', '120.57', '0.00', '0.00', NULL, '1', '2022-07-24', '2022-07-24', 1, 'DISTIBUIDORA ADAUTO CARVALHO LTDA', 'Dinheiro', 'receita', '1')
ERROR - 2022-07-24 21:00:41 --> Query error: Column 'valor_ajuste_tipo' cannot be null - Invalid query: INSERT INTO `lancamentos` (`vendas_id`, `descricao`, `valor`, `valor_pago`, `valor_ajuste`, `valor_ajuste_tipo`, `clientes_id`, `data_vencimento`, `data_pagamento`, `baixado`, `cliente_fornecedor`, `forma_pgto`, `tipo`, `usuarios_id`) VALUES ('2', 'Fatura de Venda Nº: 2', '120.57', '0.00', '0.00', NULL, '1', '2022-07-24', '2022-07-24', 1, 'DISTIBUIDORA ADAUTO CARVALHO LTDA', 'Dinheiro', 'receita', '1')
ERROR - 2022-07-24 21:02:22 --> Query error: Column 'valor_ajuste_tipo' cannot be null - Invalid query: INSERT INTO `lancamentos` (`vendas_id`, `descricao`, `valor`, `valor_pago`, `valor_ajuste`, `valor_ajuste_tipo`, `clientes_id`, `data_vencimento`, `data_pagamento`, `baixado`, `cliente_fornecedor`, `forma_pgto`, `tipo`, `usuarios_id`) VALUES ('2', 'Fatura de Venda Nº: 2', '120.57', '0.00', '0.00', NULL, '1', '2022-07-24', '2022-07-24', 1, 'DISTIBUIDORA ADAUTO CARVALHO LTDA', 'Dinheiro', 'receita', '1')
ERROR - 2022-07-24 21:07:50 --> Query error: Column 'valor_ajuste_tipo' cannot be null - Invalid query: INSERT INTO `lancamentos` (`vendas_id`, `descricao`, `valor`, `valor_pago`, `valor_ajuste`, `valor_ajuste_tipo`, `clientes_id`, `data_vencimento`, `data_pagamento`, `baixado`, `cliente_fornecedor`, `forma_pgto`, `tipo`, `usuarios_id`) VALUES ('2', 'Fatura de Venda Nº: 2', '120.57', '0.00', '0.00', NULL, '1', '2022-07-24', '', 0, 'DISTIBUIDORA ADAUTO CARVALHO LTDA', 'Dinheiro', 'receita', '1')
ERROR - 2022-07-24 21:08:17 --> Query error: Column 'valor_ajuste_tipo' cannot be null - Invalid query: INSERT INTO `lancamentos` (`vendas_id`, `descricao`, `valor`, `valor_pago`, `valor_ajuste`, `valor_ajuste_tipo`, `clientes_id`, `data_vencimento`, `data_pagamento`, `baixado`, `cliente_fornecedor`, `forma_pgto`, `tipo`, `usuarios_id`) VALUES ('2', 'Fatura de Venda Nº: 2', '120.57', '0.00', '0.00', NULL, '1', '2022-07-24', '', 0, 'DISTIBUIDORA ADAUTO CARVALHO LTDA', 'Dinheiro', 'receita', '1')
ERROR - 2022-07-24 23:51:44 --> Query error: Unknown column 'vendas_id' in 'where clause' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`codDeBarra`, `produtos`.`descricao`, `produtos`.`estoque`, `produtos`.`precoCompra`, `produtos`.`precoVenda`, `produtos`.`idUnidade`, `medidas`.*, `medidas_sistema`.*, `tipo_produtos`.`idTipo`, `tipo_produtos`.`tipo_produto`, `marcas`.`marca`, SUM(produtos.estoque * produtos.precoVenda) as valorEstoque
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade`=`medidas`.`idMedida`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema`=`medidas_sistema`.`idMedidaSistema`
JOIN `tipo_produtos` ON `tipo_produtos`.`idTipo`=`produtos`.`tipoId`
JOIN `marcas` ON `marcas`.`idMarca`=`produtos`.`marcaId`
WHERE `vendas_id` = ' 1'
ERROR - 2022-07-24 23:51:50 --> Query error: Unknown column 'vendas_id' in 'where clause' - Invalid query: SELECT `produtos`.`idProdutos`, `produtos`.`codDeBarra`, `produtos`.`descricao`, `produtos`.`estoque`, `produtos`.`precoCompra`, `produtos`.`precoVenda`, `produtos`.`idUnidade`, `medidas`.*, `medidas_sistema`.*, `tipo_produtos`.`idTipo`, `tipo_produtos`.`tipo_produto`, `marcas`.`marca`, SUM(produtos.estoque * produtos.precoVenda) as valorEstoque
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade`=`medidas`.`idMedida`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema`=`medidas_sistema`.`idMedidaSistema`
JOIN `tipo_produtos` ON `tipo_produtos`.`idTipo`=`produtos`.`tipoId`
JOIN `marcas` ON `marcas`.`idMarca`=`produtos`.`marcaId`
WHERE `vendas_id` = ' 1'
ERROR - 2022-07-24 23:54:53 --> Query error: Unknown column 'produtos.idUnidade' in 'on clause' - Invalid query: SELECT `itens_de_vendas`.*, `produtos`.*, `medidas`.*, `medidas_sistema`.*
FROM `itens_de_vendas`
JOIN `medidas` ON `produtos`.`idUnidade`=`medidas`.`idMedida`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema`=`medidas_sistema`.`idMedidaSistema`
JOIN `tipo_produtos` ON `tipo_produtos`.`idTipo`=`produtos`.`tipoId`
JOIN `produtos` ON `produtos`.`idProdutos`=`itens_de_vendas`.`produtos_id`
WHERE `vendas_id` = ' 1'
ERROR - 2022-07-24 23:54:54 --> Query error: Unknown column 'produtos.idUnidade' in 'on clause' - Invalid query: SELECT `itens_de_vendas`.*, `produtos`.*, `medidas`.*, `medidas_sistema`.*
FROM `itens_de_vendas`
JOIN `medidas` ON `produtos`.`idUnidade`=`medidas`.`idMedida`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema`=`medidas_sistema`.`idMedidaSistema`
JOIN `tipo_produtos` ON `tipo_produtos`.`idTipo`=`produtos`.`tipoId`
JOIN `produtos` ON `produtos`.`idProdutos`=`itens_de_vendas`.`produtos_id`
WHERE `vendas_id` = ' 1'
