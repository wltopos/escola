<?php defined('BASEPATH') OR exit('Pasta raiz não localizada ou inacessível'); ?>

ERROR - 2022-06-16 05:03:03 --> 404 Page Not Found: Produtos/produtos
ERROR - 2022-06-16 05:03:31 --> 404 Page Not Found: Produtos/produtos
ERROR - 2022-06-16 05:32:02 --> Query error: Unknown column 'medidas.idMarca' in 'on clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `medidas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
WHERE 256 IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 05:35:29 --> Query error: Unknown column 'idProduto' in 'order clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
WHERE 256 IS NULL
ORDER BY `idProduto` DESC
ERROR - 2022-06-16 05:45:28 --> Query error: Unknown column 'tipo_produtos.idProdutos' in 'on clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idProdutos`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 10:01:16 --> 404 Page Not Found: /index
ERROR - 2022-06-16 10:04:16 --> 404 Page Not Found: /index
ERROR - 2022-06-16 10:04:19 --> 404 Page Not Found: /index
ERROR - 2022-06-16 10:07:03 --> 404 Page Not Found: /index
ERROR - 2022-06-16 10:07:12 --> 404 Page Not Found: /index
ERROR - 2022-06-16 10:07:28 --> 404 Page Not Found: /index
ERROR - 2022-06-16 10:08:17 --> 404 Page Not Found: /index
ERROR - 2022-06-16 10:09:17 --> 404 Page Not Found: /index
ERROR - 2022-06-16 10:54:18 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:18:13 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:18:24 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:18:41 --> 404 Page Not Found: NotasFiscais/autoCompleteFornecedor
ERROR - 2022-06-16 12:19:05 --> 404 Page Not Found: NotasFiscais/autoCompleteFornecedor
ERROR - 2022-06-16 12:19:09 --> 404 Page Not Found: NotasFiscais/autoCompleteFornecedor
ERROR - 2022-06-16 12:57:26 --> Query error: Unknown column 'documento' in 'field list' - Invalid query: INSERT INTO `notas_fiscais` (`documento`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES ('2335', 'produtos', '5b1023e12f816e85a0b2aa4530942b36.png', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/5b1023e12f816e85a0b2aa4530942b36.png', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/5b1023e12f816e85a0b2aa4530942b36.png', '2022-06-16', 12.58, '.png')
ERROR - 2022-06-16 13:00:14 --> Query error: Unknown column 'fornecedorId' in 'field list' - Invalid query: INSERT INTO `notas_fiscais` (`notaFiscal`, `fornecedorId`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES (NULL, 'Fornecedor: RODRIGO DOS SANTOS NUNES | Telefone: (74)3641-1717', 'produtos', 'e6b82fc652a3f8bdea6f69b1c038cac3.jpg', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/e6b82fc652a3f8bdea6f69b1c038cac3.jpg', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/e6b82fc652a3f8bdea6f69b1c038cac3.jpg', '2022-06-16', 184.04, '.jpg')
ERROR - 2022-06-16 13:22:10 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`notas_fiscais`, CONSTRAINT `fonecedor_notas_fiscais` FOREIGN KEY (`fornecedorId`) REFERENCES `notas_fiscais` (`idNotaFiscal`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `notas_fiscais` (`notaFiscal`, `fornecedorId`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES ('4512', '', 'po', '43a00bd6b9611a801db15dbc57272bcb.png', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/43a00bd6b9611a801db15dbc57272bcb.png', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/43a00bd6b9611a801db15dbc57272bcb.png', '2022-06-16', 0.22, '.png')
ERROR - 2022-06-16 13:22:49 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`notas_fiscais`, CONSTRAINT `fonecedor_notas_fiscais` FOREIGN KEY (`fornecedorId`) REFERENCES `notas_fiscais` (`idNotaFiscal`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `notas_fiscais` (`notaFiscal`, `fornecedorId`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES ('7845', '', 'produto', 'ed2da50a474029d1794d0accf279285a.jpg', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/ed2da50a474029d1794d0accf279285a.jpg', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/ed2da50a474029d1794d0accf279285a.jpg', '2022-06-16', 184.04, '.jpg')
ERROR - 2022-06-16 13:24:22 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`notas_fiscais`, CONSTRAINT `fonecedor_notas_fiscais` FOREIGN KEY (`fornecedorId`) REFERENCES `notas_fiscais` (`idNotaFiscal`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `notas_fiscais` (`notaFiscal`, `fornecedorId`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES ('2145', '', 'produtos', '3e8dcc9ad6c8bdb82241b47e35ef4e33.jpg', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/3e8dcc9ad6c8bdb82241b47e35ef4e33.jpg', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/3e8dcc9ad6c8bdb82241b47e35ef4e33.jpg', '2022-06-16', 35.58, '.jpg')
ERROR - 2022-06-16 13:24:55 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`notas_fiscais`, CONSTRAINT `fonecedor_notas_fiscais` FOREIGN KEY (`fornecedorId`) REFERENCES `notas_fiscais` (`idNotaFiscal`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `notas_fiscais` (`notaFiscal`, `fornecedorId`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES ('1245', '', 'produto', '6105453a1276ec85b790944fda511176.jpg', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/6105453a1276ec85b790944fda511176.jpg', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/6105453a1276ec85b790944fda511176.jpg', '2022-06-16', 35.58, '.jpg')
ERROR - 2022-06-16 13:27:22 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`notas_fiscais`, CONSTRAINT `fonecedor_notas_fiscais` FOREIGN KEY (`fornecedorId`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `notas_fiscais` (`notaFiscal`, `fornecedorId`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES ('1235', '', 'produtos', '40096efb6e8ecd660874bf596ea1bd46.jpg', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/40096efb6e8ecd660874bf596ea1bd46.jpg', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/40096efb6e8ecd660874bf596ea1bd46.jpg', '2022-06-16', 35.58, '.jpg')
ERROR - 2022-06-16 13:28:15 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`notas_fiscais`, CONSTRAINT `fonecedor_notas_fiscais` FOREIGN KEY (`fornecedorId`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `notas_fiscais` (`notaFiscal`, `fornecedorId`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES ('12745', '', 'po', '070164f76bdd4b6d101477cf6182e75d.jpg', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/070164f76bdd4b6d101477cf6182e75d.jpg', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/070164f76bdd4b6d101477cf6182e75d.jpg', '2022-06-16', 35.58, '.jpg')
ERROR - 2022-06-16 13:29:53 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`notas_fiscais`, CONSTRAINT `fonecedor_notas_fiscais` FOREIGN KEY (`fornecedorId`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `notas_fiscais` (`notaFiscal`, `fornecedorId`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES ('12745', '', 'po', 'a4f4cce9055878413cdbdc84a68f6988.jpg', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/a4f4cce9055878413cdbdc84a68f6988.jpg', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/a4f4cce9055878413cdbdc84a68f6988.jpg', '2022-06-16', 35.58, '.jpg')
ERROR - 2022-06-16 13:38:42 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`notas_fiscais`, CONSTRAINT `fonecedor_notas_fiscais` FOREIGN KEY (`fornecedorId`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `notas_fiscais` (`notaFiscal`, `fornecedorId`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES ('4511', 'Fornecedor: RODRIGO DOS SANTOS NUNES | Telefone: (74)3641-1717', 'produtos', 'd777b6abf7c40b2e9579e56ed1c8407e.jpg', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/d777b6abf7c40b2e9579e56ed1c8407e.jpg', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/d777b6abf7c40b2e9579e56ed1c8407e.jpg', '2022-06-16', 35.58, '.jpg')
ERROR - 2022-06-16 13:39:28 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`notas_fiscais`, CONSTRAINT `fonecedor_notas_fiscais` FOREIGN KEY (`fornecedorId`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `notas_fiscais` (`notaFiscal`, `fornecedorId`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES ('4511', 'Fornecedor: RODRIGO DOS SANTOS NUNES | Telefone: (74)3641-1717', 'produtos', 'f30ca8f107b8e00be453d2946e75d86c.jpg', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/f30ca8f107b8e00be453d2946e75d86c.jpg', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/f30ca8f107b8e00be453d2946e75d86c.jpg', '2022-06-16', 35.58, '.jpg')
ERROR - 2022-06-16 13:39:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`notas_fiscais`, CONSTRAINT `fonecedor_notas_fiscais` FOREIGN KEY (`fornecedorId`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `notas_fiscais` (`notaFiscal`, `fornecedorId`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES ('4511', 'Fornecedor: RODRIGO DOS SANTOS NUNES | Telefone: (74)3641-1717', 'produtos', '776eadc04e9679317d94b509337a7538.jpg', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/776eadc04e9679317d94b509337a7538.jpg', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/776eadc04e9679317d94b509337a7538.jpg', '2022-06-16', 35.58, '.jpg')
ERROR - 2022-06-16 13:39:57 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`notas_fiscais`, CONSTRAINT `fonecedor_notas_fiscais` FOREIGN KEY (`fornecedorId`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `notas_fiscais` (`notaFiscal`, `fornecedorId`, `descricao`, `file`, `path`, `url`, `cadastro`, `tamanho`, `tipo`) VALUES ('4523', 'Fornecedor: RODRIGO DOS SANTOS NUNES | Telefone: (74)3641-1717', 'produto', '1b0f1148e12b2e3f032575744456f8d8.jpg', '/home/wltoposc/public_html/sistemas/agrotec/assets/notas_fiscais/16-06-2022/1b0f1148e12b2e3f032575744456f8d8.jpg', 'https://wltopos.com.br/sistemas/agrotec/assets/notas_fiscais/16-06-2022/1b0f1148e12b2e3f032575744456f8d8.jpg', '2022-06-16', 35.58, '.jpg')
ERROR - 2022-06-16 14:14:48 --> Query error: Unknown column 'produtos' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
WHERE `produtos` IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 14:15:52 --> Query error: Unknown column 'produtos' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
WHERE `produtos` IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 14:16:18 --> Query error: Unknown column 'produtos' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
WHERE `produtos` IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 14:16:33 --> Query error: Unknown column 'produtos' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
WHERE `produtos` IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 14:17:48 --> Query error: Unknown column 'produtos' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
WHERE `produtos` IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 14:17:50 --> Query error: Unknown column 'produtos' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
WHERE `produtos` IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:23:17 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:24:34 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:33:13 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:33:31 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:34:11 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:34:12 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:34:15 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:34:18 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:41:09 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:42:24 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:42:33 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:46:32 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:50:33 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:50:35 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:51:55 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:53:31 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:55:18 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
WHERE `idMedida` = `idUnidade`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:55:44 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
WHERE `idMedida` = `idUnidade`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 15:57:11 --> Query error: Unknown column 'idMedida' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
WHERE `idMedida` = `idUnidade`
ERROR - 2022-06-16 15:58:29 --> Query error: Unknown column 'idMedida' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
WHERE `idMedida` = `idUnidade`
ERROR - 2022-06-16 16:01:03 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:01:29 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:01:46 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:01:55 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:01:56 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:02:23 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:02:39 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:02:52 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:02:54 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:03:40 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:06:04 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.*, `categorias`.*, `tipo_produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:06:06 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.*, `categorias`.*, `tipo_produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:06:13 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.*, `categorias`.*, `tipo_produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:06:14 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.*, `categorias`.*, `tipo_produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:06:53 --> Query error: Unknown table 'notas_fiscais' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.*, `categorias`.*, `tipo_produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:11:58 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:12:31 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:12:32 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:12:49 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:12:54 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:13:38 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `notas_fiscais` ON `notas_fiscais`.`idNotaFiscal` = `produtos`.`notaFiscalId`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:14:02 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `notas_fiscais` ON `notas_fiscais`.`NotaFiscal` = `produtos`.`notaFiscalId`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:14:23 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `notas_fiscais` ON `notas_fiscais`.`NotaFiscal` = `produtos`.`notaFiscalId`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:14:25 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `notas_fiscais` ON `notas_fiscais`.`NotaFiscal` = `produtos`.`notaFiscalId`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:14:35 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `notas_fiscais` ON `notas_fiscais`.`notaFiscal` = `produtos`.`notaFiscalId`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:16:24 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `notas_fiscais` ON `notas_fiscais`.`notaFiscal` = `produtos`.`notaFiscalId`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:16:25 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `notas_fiscais` ON `notas_fiscais`.`notaFiscal` = `produtos`.`notaFiscalId`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 16:25:26 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `notas_fiscais` ON `notas_fiscais`.`notaFiscal` = `produtos`.`notaFiscalId`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 18:19:51 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
LEFT JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`idNotaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 18:53:01 --> Query error: Unknown column 'produtos' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
WHERE `produtos` IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 19:06:20 --> Query error: Unknown column 'produtos' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
WHERE `produtos` IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 19:06:46 --> Query error: Unknown column 'produtos' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
WHERE `produtos` IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 19:06:49 --> Query error: Unknown column 'produtos' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
WHERE `produtos` IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 19:06:50 --> Query error: Unknown column 'produtos' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
WHERE `produtos` IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 19:07:05 --> Query error: Unknown column 'produtos' in 'where clause' - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
WHERE `produtos` IS NULL
ORDER BY `descricao` DESC
ERROR - 2022-06-16 19:19:32 --> Query error: Table 'wltoposc_agrotec.nostas_fiscais' doesn't exist - Invalid query: SELECT *
FROM `nostas_fiscais`
JOIN `clientes` ON `clientes`.`idClientes` = `notas_fiscais`.`fornecedorId`
WHERE `notaFiscal` LIKE '%1%' ESCAPE '!'
OR  `idNotaFiscal` LIKE '%1%' ESCAPE '!'
 LIMIT 5
ERROR - 2022-06-16 19:20:19 --> Query error: Table 'wltoposc_agrotec.nostas_fiscais' doesn't exist - Invalid query: SELECT *
FROM `nostas_fiscais`
JOIN `clientes` ON `clientes`.`idClientes` = `notas_fiscais`.`fornecedorId`
WHERE `notaFiscal` LIKE '%1%' ESCAPE '!'
OR  `idNotaFiscal` LIKE '%1%' ESCAPE '!'
 LIMIT 5
ERROR - 2022-06-16 20:09:08 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT *
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
LEFT JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 21:00:17 --> Query error: Unknown table 'notas_fiscais' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `medidas_sistema`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 21:15:00 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `tipo_prduto` FOREIGN KEY (`tipoId`) REFERENCES `tipo_produtos` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898939116250', `descricao` = 'produto', `categoriaId` = '8', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '', `caracteristicas` = 'SUPLEMENTO VITAMÍNICO', `idUnidade` = '20', `precoCompra` = '40.00', `margemLucro` = '60', `precoVenda` = '64.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '16'
ERROR - 2022-06-16 21:15:32 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `tipo_prduto` FOREIGN KEY (`tipoId`) REFERENCES `tipo_produtos` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898939116250', `descricao` = 'produto', `categoriaId` = '8', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '', `caracteristicas` = 'SUPLEMENTO VITAMÍNICO', `idUnidade` = '20', `precoCompra` = '40.00', `margemLucro` = '60', `precoVenda` = '64.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '16'
ERROR - 2022-06-16 21:16:01 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `tipo_prduto` FOREIGN KEY (`tipoId`) REFERENCES `tipo_produtos` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898939116250', `descricao` = 'produto', `categoriaId` = '8', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '', `caracteristicas` = 'SUPLEMENTO VITAMÍNICO', `idUnidade` = '20', `precoCompra` = '40.00', `margemLucro` = '60', `precoVenda` = '64.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '16'
ERROR - 2022-06-16 21:16:14 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `tipo_prduto` FOREIGN KEY (`tipoId`) REFERENCES `tipo_produtos` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898939116250', `descricao` = 'produto', `categoriaId` = '8', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '', `caracteristicas` = 'SUPLEMENTO VITAMÍNICO', `idUnidade` = '20', `precoCompra` = '40.00', `margemLucro` = '60', `precoVenda` = '64.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '16'
ERROR - 2022-06-16 21:17:37 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `tipo_prduto` FOREIGN KEY (`tipoId`) REFERENCES `tipo_produtos` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898939116250', `descricao` = 'produto', `categoriaId` = '8', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '', `caracteristicas` = 'SUPLEMENTO VITAMÍNICO', `idUnidade` = '41', `precoCompra` = '40.00', `margemLucro` = '60', `precoVenda` = '64.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '16'
ERROR - 2022-06-16 21:20:52 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `tipo_prduto` FOREIGN KEY (`tipoId`) REFERENCES `tipo_produtos` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898939116250', `descricao` = 'produto', `categoriaId` = '8', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '', `caracteristicas` = 'SUPLEMENTO VITAMÍNICO', `idUnidade` = '41', `precoCompra` = '40.00', `margemLucro` = '60', `precoVenda` = '64.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '16'
ERROR - 2022-06-16 21:20:56 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `tipo_prduto` FOREIGN KEY (`tipoId`) REFERENCES `tipo_produtos` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898939116250', `descricao` = 'produto', `categoriaId` = '8', `marcaId` = '1', `notaFiscalId` = '45112', `tipoId` = '', `caracteristicas` = 'SUPLEMENTO VITAMÍNICO', `idUnidade` = '41', `precoCompra` = '40.00', `margemLucro` = '60', `precoVenda` = '64.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '16'
ERROR - 2022-06-16 21:24:05 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `tipo_prduto` FOREIGN KEY (`tipoId`) REFERENCES `tipo_produtos` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898939116250', `descricao` = 'produto', `categoriaId` = '8', `marcaId` = '1', `notaFiscalId` = '45112', `tipoId` = '', `caracteristicas` = 'SUPLEMENTO VITAMÍNICO', `idUnidade` = '41', `precoCompra` = '40.00', `margemLucro` = '60', `precoVenda` = '64.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '16'
ERROR - 2022-06-16 21:24:10 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `tipo_prduto` FOREIGN KEY (`tipoId`) REFERENCES `tipo_produtos` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898939116250', `descricao` = 'produto', `categoriaId` = '8', `marcaId` = '1', `notaFiscalId` = '45112', `tipoId` = '', `caracteristicas` = 'SUPLEMENTO VITAMÍNICO', `idUnidade` = '41', `precoCompra` = '40.00', `margemLucro` = '60', `precoVenda` = '64.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '16'
ERROR - 2022-06-16 21:24:54 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `tipo_prduto` FOREIGN KEY (`tipoId`) REFERENCES `tipo_produtos` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898939116250', `descricao` = 'produto', `categoriaId` = '8', `marcaId` = '1', `notaFiscalId` = '45112', `tipoId` = '', `caracteristicas` = 'SUPLEMENTO VITAMÍNICO', `idUnidade` = '41', `precoCompra` = '40.00', `margemLucro` = '60', `precoVenda` = '64.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '16'
ERROR - 2022-06-16 21:24:57 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `tipo_prduto` FOREIGN KEY (`tipoId`) REFERENCES `tipo_produtos` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898939116250', `descricao` = 'produto', `categoriaId` = '8', `marcaId` = '1', `notaFiscalId` = '45112', `tipoId` = '', `caracteristicas` = 'SUPLEMENTO VITAMÍNICO', `idUnidade` = '41', `precoCompra` = '40.00', `margemLucro` = '60', `precoVenda` = '64.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '16'
ERROR - 2022-06-16 21:24:58 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `tipo_prduto` FOREIGN KEY (`tipoId`) REFERENCES `tipo_produtos` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898939116250', `descricao` = 'produto', `categoriaId` = '8', `marcaId` = '1', `notaFiscalId` = '45112', `tipoId` = '', `caracteristicas` = 'SUPLEMENTO VITAMÍNICO', `idUnidade` = '41', `precoCompra` = '40.00', `margemLucro` = '60', `precoVenda` = '64.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '16'
ERROR - 2022-06-16 22:40:32 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
LEFT JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 22:41:22 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
LEFT JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 22:44:07 --> Query error: Unknown table 'notas_fiscais' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 22:44:20 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
LEFT JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 22:44:21 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
LEFT JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 22:44:22 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
LEFT JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 22:44:23 --> Query error: Column 'descricao' in order clause is ambiguous - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
LEFT JOIN `notas_fiscais` ON `produtos`.`notaFiscalId` = `notas_fiscais`.`notaFiscal`
ORDER BY `descricao` DESC
ERROR - 2022-06-16 22:51:20 --> Query error: Unknown table 'notas_fiscais' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
JOIN `marcas` ON `produtos`.`marcaId` = `marcas`.`idMarca`
JOIN `categorias` ON `produtos`.`categoriaId` = `categorias`.`idCategoria`
JOIN `tipo_produtos` ON `produtos`.`tipoId` = `tipo_produtos`.`idTipo`
JOIN `medidas_sistema` ON `medidas`.`idMedidaSistema` = `medidas_sistema`.`idMedidaSistema`
WHERE `produtos`.`idProdutos` = '8'
ERROR - 2022-06-16 22:52:00 --> Query error: Unknown table 'medidas_sistema' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
WHERE `produtos`.`idProdutos` = '8'
ERROR - 2022-06-16 22:52:02 --> Query error: Unknown table 'medidas_sistema' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
WHERE `produtos`.`idProdutos` = '8'
ERROR - 2022-06-16 22:52:04 --> Query error: Unknown table 'medidas_sistema' - Invalid query: SELECT `produtos`.*, `medidas`.*, `marcas`.`marca`, `categorias`.`categoria`, `tipo_produtos`.`tipo_produto`, `tipo_produtos`.`idMarca`, `tipo_produtos`.`idTipo`, `medidas_sistema`.*, `notas_fiscais`.*
FROM `produtos`
JOIN `medidas` ON `produtos`.`idUnidade` = `medidas`.`idMedida`
WHERE `produtos`.`idProdutos` = '8'
ERROR - 2022-06-16 23:05:55 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `notaFiscal_produto` FOREIGN KEY (`notaFiscalId`) REFERENCES `notas_fiscais` (`notaFiscal`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7897807208707', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoriaId` = '1', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '9', `caracteristicas` = 'RACAO P/ CAES', `idUnidade` = '19', `precoCompra` = '140.00', `margemLucro` = '60', `precoVenda` = '224.00', `estoque` = '10', `observacao` = '', `estoqueMinimo` = '1', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '19'
ERROR - 2022-06-16 23:10:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `notaFiscal_produto` FOREIGN KEY (`notaFiscalId`) REFERENCES `notas_fiscais` (`notaFiscal`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '222222222', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoriaId` = '2', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '9', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `idUnidade` = '19', `precoCompra` = '140.00', `margemLucro` = '55', `precoVenda` = '217.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '2', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '248'
ERROR - 2022-06-16 23:14:50 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `notaFiscal_produto` FOREIGN KEY (`notaFiscalId`) REFERENCES `notas_fiscais` (`notaFiscal`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '222222222', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoriaId` = '2', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '9', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `idUnidade` = '19', `precoCompra` = '140.00', `margemLucro` = '55', `precoVenda` = '217.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '2', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '248'
ERROR - 2022-06-16 23:15:53 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `notaFiscal_produto` FOREIGN KEY (`notaFiscalId`) REFERENCES `notas_fiscais` (`notaFiscal`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '222222222', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoriaId` = '2', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '9', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `idUnidade` = '19', `precoCompra` = '140.00', `margemLucro` = '55', `precoVenda` = '217.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '2', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '248'
ERROR - 2022-06-16 23:15:56 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `notaFiscal_produto` FOREIGN KEY (`notaFiscalId`) REFERENCES `notas_fiscais` (`notaFiscal`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '222222222', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoriaId` = '2', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '9', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `idUnidade` = '19', `precoCompra` = '140.00', `margemLucro` = '55', `precoVenda` = '217.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '2', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '248'
ERROR - 2022-06-16 23:17:07 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `notaFiscal_produto` FOREIGN KEY (`notaFiscalId`) REFERENCES `notas_fiscais` (`notaFiscal`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '222222222', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoriaId` = '2', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '9', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `idUnidade` = '19', `precoCompra` = '140.00', `margemLucro` = '55', `precoVenda` = '217.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '2', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '248'
ERROR - 2022-06-16 23:18:40 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `notaFiscal_produto` FOREIGN KEY (`notaFiscalId`) REFERENCES `notas_fiscais` (`notaFiscal`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '222222222', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoriaId` = '2', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '9', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `idUnidade` = '19', `precoCompra` = '140.00', `margemLucro` = '55', `precoVenda` = '217.00', `estoque` = '1', `observacao` = '', `estoqueMinimo` = '2', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '248'
ERROR - 2022-06-16 23:30:34 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wltoposc_agrotec`.`produtos`, CONSTRAINT `notaFiscal_produto` FOREIGN KEY (`notaFiscalId`) REFERENCES `notas_fiscais` (`notaFiscal`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: UPDATE `produtos` SET `codDeBarra` = '7898167270366', `descricao` = 'RACAO CAES FOSTER PR.RAC.PEQUENO./M.', `categoriaId` = '1', `marcaId` = '1', `notaFiscalId` = '', `tipoId` = '9', `caracteristicas` = 'SABOR: CARNE COM OSSINHOS', `idUnidade` = '19', `precoCompra` = '100.00', `margemLucro` = '60', `precoVenda` = '160.00', `estoque` = '24', `observacao` = '', `estoqueMinimo` = '2.000', `dataCompra` = '2022-04-25', `dataVencimento` = '2022-04-25', `saida` = '', `entrada` = ''
WHERE `idProdutos` = '253'
