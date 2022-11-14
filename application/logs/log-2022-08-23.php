<?php defined('BASEPATH') OR exit('Pasta raiz não localizada ou inacessível'); ?>

ERROR - 2022-08-23 01:59:06 --> Query error: Unknown column 'estoque_produtos.siglaMedida' in 'on clause' - Invalid query: SELECT `estoque_produtos`.*, `estoque_medidas`.*, `estoque_marcas`.`marca`, `estoque_categorias`.`categoria`, `estoque_tipo_produtos`.`tipo_produto`, `estoque_tipo_produtos`.`id_estoque_tipo_produto`, `estoque_tipo_produtos`.`estoque_categoria_id`, `estoque_tipo_produtos`.`id_estoque_tipo_produto`, `estoque_sistema_medidas`.*
FROM `estoque_produtos`
JOIN `estoque_medidas` ON `estoque_produtos`.`siglaMedida`=`estoque_medidas`.`id_estoque_medida`
JOIN `estoque_marcas` ON `estoque_produtos`.`estoque_marca_id`=`estoque_marcas`.`id_estoque_marca`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id`=`estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_categorias` ON `estoque_tipo_produtos`.`estoque_categoria_id`=`estoque_categorias`.`id_estoque_categoria`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id`=`estoque_sistema_medidas`.`id_estoque_sistema_medida`
ERROR - 2022-08-23 01:59:15 --> Query error: Unknown column 'estoque_produtos.siglaMedida' in 'on clause' - Invalid query: SELECT `estoque_produtos`.*, `estoque_medidas`.*, `estoque_marcas`.`marca`, `estoque_categorias`.`categoria`, `estoque_tipo_produtos`.`tipo_produto`, `estoque_tipo_produtos`.`id_estoque_tipo_produto`, `estoque_tipo_produtos`.`estoque_categoria_id`, `estoque_tipo_produtos`.`id_estoque_tipo_produto`, `estoque_sistema_medidas`.*
FROM `estoque_produtos`
JOIN `estoque_medidas` ON `estoque_produtos`.`siglaMedida`=`estoque_medidas`.`id_estoque_medida`
JOIN `estoque_marcas` ON `estoque_produtos`.`estoque_marca_id`=`estoque_marcas`.`id_estoque_marca`
JOIN `estoque_tipo_produtos` ON `estoque_produtos`.`estoque_tipo_produto_id`=`estoque_tipo_produtos`.`id_estoque_tipo_produto`
JOIN `estoque_categorias` ON `estoque_tipo_produtos`.`estoque_categoria_id`=`estoque_categorias`.`id_estoque_categoria`
JOIN `estoque_sistema_medidas` ON `estoque_medidas`.`estoque_sistema_medida_id`=`estoque_sistema_medidas`.`id_estoque_sistema_medida`
