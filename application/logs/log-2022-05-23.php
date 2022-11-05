<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-05-23 19:52:33 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`tipo_produtos`, CONSTRAINT `marca_tipoProdutos` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`idMarca`) ON UPDATE CASCADE) - Invalid query: INSERT INTO `tipo_produtos` (`tipo_produto`, `idMarca`, `status`) VALUES ('', '0', '1')
