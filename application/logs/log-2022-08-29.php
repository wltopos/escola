<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-08-29 00:07:02 --> Query error: Unknown table 'u782442173_db_estoque.clientes_cobrancas' - Invalid query: SELECT `clientes_cobrancas`.*, `comercial_cobrancas`.*
FROM `comercial_vendas`
JOIN `comercial_clientes` ON `comercial_cobrancas`.`comercial_cliente_id`=`comercial_clientes`.`id_comercial_cliente`
WHERE `id_comercial_venda` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:08:55 --> Query error: Unknown table 'u782442173_db_estoque.clientes_cobrancas' - Invalid query: SELECT `clientes_cobrancas`.*, `comercial_cobrancas`.*
FROM `comercial_vendas`
JOIN `comercial_clientes` ON `comercial_cobrancas`.`comercial_cliente_id`=`comercial_clientes`.`id_comercial_cliente`
WHERE `id_comercial_cobranca` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:08:56 --> Query error: Unknown table 'u782442173_db_estoque.clientes_cobrancas' - Invalid query: SELECT `clientes_cobrancas`.*, `comercial_cobrancas`.*
FROM `comercial_vendas`
JOIN `comercial_clientes` ON `comercial_cobrancas`.`comercial_cliente_id`=`comercial_clientes`.`id_comercial_cliente`
WHERE `id_comercial_cobranca` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:08:58 --> Query error: Unknown table 'u782442173_db_estoque.comercial_cobrancas' - Invalid query: SELECT `comercial_cobrancas`.*, `comercial_cobrancas`.*
FROM `comercial_vendas`
JOIN `comercial_clientes` ON `comercial_cobrancas`.`comercial_cliente_id`=`comercial_clientes`.`id_comercial_cliente`
WHERE `id_comercial_cobranca` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:09:00 --> Query error: Unknown table 'u782442173_db_estoque.comercial_cobrancas' - Invalid query: SELECT `comercial_cobrancas`.*, `comercial_cobrancas`.*
FROM `comercial_vendas`
JOIN `comercial_clientes` ON `comercial_cobrancas`.`comercial_cliente_id`=`comercial_clientes`.`id_comercial_cliente`
WHERE `id_comercial_cobranca` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:09:01 --> Query error: Unknown table 'u782442173_db_estoque.comercial_cobrancas' - Invalid query: SELECT `comercial_cobrancas`.*, `comercial_cobrancas`.*
FROM `comercial_vendas`
JOIN `comercial_clientes` ON `comercial_cobrancas`.`comercial_cliente_id`=`comercial_clientes`.`id_comercial_cliente`
WHERE `id_comercial_cobranca` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:09:57 --> Query error: Unknown table 'u782442173_db_estoque.comercial_cobrancas' - Invalid query: SELECT `comercial_cobrancas`.*, `comercial_cobrancas`.*
FROM `comercial_vendas`
JOIN `comercial_clientes` ON `comercial_cobrancas`.`comercial_cliente_id`=`comercial_clientes`.`id_comercial_cliente`
WHERE `id_comercial_cobranca` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:09:59 --> Query error: Unknown table 'u782442173_db_estoque.comercial_cobrancas' - Invalid query: SELECT `comercial_cobrancas`.*, `comercial_cobrancas`.*
FROM `comercial_vendas`
JOIN `comercial_clientes` ON `comercial_cobrancas`.`comercial_cliente_id`=`comercial_clientes`.`id_comercial_cliente`
WHERE `id_comercial_cobranca` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:10:57 --> Query error: Unknown table 'u782442173_db_estoque.comercial_cobrancas' - Invalid query: SELECT `comercial_cobrancas`.*, `comercial_clientes`.*
FROM `comercial_vendas`
JOIN `comercial_clientes` ON `comercial_cobrancas`.`comercial_cliente_id`=`comercial_clientes`.`id_comercial_cliente`
WHERE `id_comercial_cobranca` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:26:41 --> Query error: Table 'u782442173_db_estoque.cobrancas' doesn't exist - Invalid query: SELECT `cobrancas`.*, `clientes`.*
FROM `cobrancas`
JOIN `clientes` ON `clientes`.`idClientes` = `cobrancas`.`clientes_id`
WHERE `cobrancas`.`idCobranca` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:31:56 --> Query error: Table 'u782442173_db_estoque.cobrancas' doesn't exist - Invalid query: SELECT `cobrancas`.*, `clientes`.*
FROM `cobrancas`
JOIN `clientes` ON `clientes`.`idClientes` = `cobrancas`.`clientes_id`
WHERE `cobrancas`.`idCobranca` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:32:01 --> Query error: Table 'u782442173_db_estoque.comerciral_cobrancas' doesn't exist - Invalid query: SELECT `comerciral_cobrancas`.*, `comercial_clientes`.*
FROM `comerciral_cobrancas`
JOIN `comercial_clientes` ON `comercial_clientes`.`id_comercial_cliente` = `comercial_cobrancas`.`comercial_cliente_id`
WHERE `cobrancas`.`id_comercial_cobranca` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:32:06 --> Query error: Table 'u782442173_db_estoque.comerciral_cobrancas' doesn't exist - Invalid query: SELECT `comerciral_cobrancas`.*, `comercial_clientes`.*
FROM `comerciral_cobrancas`
JOIN `comercial_clientes` ON `comercial_clientes`.`id_comercial_cliente` = `comercial_cobrancas`.`comercial_cliente_id`
WHERE `cobrancas`.`id_comercial_cobranca` = '1'
 LIMIT 1
ERROR - 2022-08-29 00:49:17 --> 404 Page Not Found: Cobrancas/excluir1
ERROR - 2022-08-29 06:19:46 --> 404 Page Not Found: /index
ERROR - 2022-08-29 16:04:26 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:02 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:03 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:04 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:07 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:07 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:08 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:08 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:08 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:09 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:09 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:09 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:09 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:10 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:10 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:10 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:10 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:45 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:46 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:47 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:47 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:47 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:48 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:48 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:48 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:48 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:49 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:49 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:49 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:49 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:55 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:05:56 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:06:05 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:06:05 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
ERROR - 2022-08-29 16:06:06 --> Query error: Unknown column 'usuario.idUsuarios' in 'where clause' - Invalid query: SELECT *
FROM `administrativo_emitentes`
JOIN `usuarios` ON `usuarios`.`administrativo_emitente_id` = `administrativo_emitentes`.`id_administrativo_emitente`
WHERE `usuario`.`idUsuarios` = '2'
AND `dbEmpresa` = 'db_estoque'
