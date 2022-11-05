<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-10-23 04:48:48 --> 404 Page Not Found: /index
ERROR - 2022-10-23 05:08:56 --> 404 Page Not Found: Produtos/teste
ERROR - 2022-10-23 08:16:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%campos%' ESCAPE '!' 
 LIMIT 10' at line 5 - Invalid query: SELECT *
FROM `financeiro_notas`
JOIN `comercial_clientes` ON `comercial_clientes`.`id_comercial_cliente`=`financeiro_notas`.`comercial_cliente_id`
WHERE `notaFiscal` LIKE '%campos%' ESCAPE '!'
OR    LIKE '%campos%' ESCAPE '!' 
 LIMIT 10
ERROR - 2022-10-23 08:24:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%campos%' ESCAPE '!' 
AND `dataEmissao` >= '2022-10-23'
AND `dataEmissa...' at line 5 - Invalid query: SELECT *
FROM `financeiro_notas`
JOIN `comercial_clientes` ON `comercial_clientes`.`id_comercial_cliente`=`financeiro_notas`.`comercial_cliente_id`
WHERE `notaFiscal` LIKE '%campos%' ESCAPE '!'
OR    LIKE '%campos%' ESCAPE '!' 
AND `dataEmissao` >= '2022-10-23'
AND `dataEmissao` <= '2022-10-23'
 LIMIT 10
ERROR - 2022-10-23 09:18:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
 LIMIT 10' at line 6 - Invalid query: SELECT *
FROM `financeiro_notas`
JOIN `comercial_clientes` ON `comercial_clientes`.`id_comercial_cliente`=`financeiro_notas`.`comercial_cliente_id`
WHERE `notaFiscal` LIKE '%14%' ESCAPE '!'
AND `dataEmissao` >= '2021-10-11'
AND `dataEmissao` < `IS` `NULL`
 LIMIT 10
ERROR - 2022-10-23 09:43:52 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$GPVUz1KAWgfFmlD6/DO89e74juQWoBgBoT8rDO3ZnoRN.specJmjC', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:44:07 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$kGgPULRr7hzioyqZgqXQLeL5tsARlovspvyZLpoJNTJTKUYwTwb8O', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:44:44 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$kqAGtzyIr08.D9UV3i1GDu2ewyMSLC1h.BeDcPiTz4avoXNESNPv.', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:45:37 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$TfofqYHYHRJ87/Ye66uOdOLe8eZZAf4tBWd2Bsc2ItWIdSZv7mEce', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:45:51 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$3q8OEdO9rKyM2HuuqrgU1OfHmIgM2QzeXliwpX35GPudif1Ckt1Pq', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:54:23 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$Et./QFRZfs5T8wegB9F7UuMD2cQfGS3aewVfOOUUh5YPsm1eczU.S', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:54:28 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$ikDWULEyJ30We.qpD5mL9.ZIXCSCC2JzPuVMqDtW1//fbpQHhfoFW', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:54:33 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$PBOaUuAn/oPTq3bWXAU3UOXP5j7dbiNygd5AkJv7BkRPvvRjnuJV.', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:54:36 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$PVTuYGUCsjRGmpyIP5iQDueXWgNbCMfOJUzpCsQsOJVDoK.RNAWeO', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:54:40 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$RhWSP.MiQ1U6NsbNs3mfnuIXPgB8mwXasq/TsVZMO.CDLWCePWgYe', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:54:50 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$AmWjDinPXxe85nH248Dn/.r2/ZYVoNpkrQmm3jttMjt9H9cBriPMO', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:54:53 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$C7CnVzonHTIPsW9S8qSy1.OG/Fs00O7ytrW.HXnZ1Rn.J8pgL9MBO', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:54:57 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$X3sFUgEjKAHwetqmhMNolOSnuMs0iKgclcbXGDUZkUWc7iiAemQDW', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:59:33 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$DkbS/LqLLo516k8mGueDp.pHVQp01LiNoWPKmi05/FS7tLHnqEUq6', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 09:59:35 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$JkBbzDDi1rWtLs3/eF1lqu9/1zMpkSsOCD01krAlwqDE5mmrbS/2y', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 10:04:06 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$0M8Gv9J./T/kjwdQrImG9uHplhW3fslZ3eQ742.kfYn0WlGOlQeqm', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 10:04:50 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$y7GHuACgjrCRsc9lzvIt9eCzEdm/bAALlNMideMtBTFsmX.X721/O', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 10:05:02 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$hG85QUi6DLmDT0o38RSxh.JEAz5i2fey5V0LdhDUxN1rqV6BIOsKS', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 10:06:24 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Eliene Nascimento Lima Dos Santos 93131534591', 'Eliene Nascimento', '', '29.464.116/0001-63', '(71)9874-8868', '', 'kill.luiz@hotmail.com', '$2y$10$qhPQqZlQaoXwhR2wz7b/5emc8Xtfu3eNCVztfqNWm/wkhBTcarCke', 'Rua Paracaína', '116', '', 'São Marcos', 'Salvador', 'BA', '41253-010', '2022-10-23', 0)
ERROR - 2022-10-23 10:06:56 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Ibazar.com Atividades De Internet Ltda.', 'Ibazar', '', '03.499.243/0001-04', '(11)2543-4155', '', 'naoresponder@mercadolivre.com', '$2y$10$E1cRrEgn3pfSGmkW7ps6c.b0eXkM6QgxRwiAgjPbO0scTQhXfJSNW', 'Avenida das Nações Unidas', '3003', 'Parte B', 'Bonfim', 'Osasco', 'SP', '06233-903', '2022-10-23', 0)
ERROR - 2022-10-23 10:09:19 --> Query error: Unknown column 'apelido' in 'field list' - Invalid query: INSERT INTO `comercial_clientes` (`nomeCliente`, `apelido`, `contato`, `documento`, `telefone`, `celular`, `email`, `senha`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `dataCadastro`, `fornecedor`) VALUES ('Ibazar.com Atividades De Internet Ltda.', 'apelido', 'apelido', '03.499.243/0001-04', '(11)2543-4155', '', 'naoresponder@mercadolivre.com', '$2y$10$49RWsLbhOMq4Ep4KbTVC9.FdfC7jJ.8dimpLD0oyuBjwNfyDm6YiS', 'Avenida das Nações Unidas', '3003', 'Parte B', 'Bonfim', 'Osasco', 'SP', '06233-903', '2022-10-23', 0)
ERROR - 2022-10-23 12:52:23 --> 404 Page Not Found: Produtos/undefined
ERROR - 2022-10-23 12:52:46 --> 404 Page Not Found: Produtos/undefined
ERROR - 2022-10-23 12:55:45 --> 404 Page Not Found: Produtos/undefined
ERROR - 2022-10-23 12:57:24 --> 404 Page Not Found: Produtos/undefined
ERROR - 2022-10-23 13:41:08 --> 404 Page Not Found: /index
ERROR - 2022-10-23 13:41:09 --> 404 Page Not Found: /index
ERROR - 2022-10-23 13:41:15 --> 404 Page Not Found: /index
ERROR - 2022-10-23 13:58:23 --> 404 Page Not Found: /index
ERROR - 2022-10-23 13:58:23 --> 404 Page Not Found: /index
ERROR - 2022-10-23 13:58:23 --> 404 Page Not Found: /index
ERROR - 2022-10-23 13:58:45 --> 404 Page Not Found: /index
ERROR - 2022-10-23 13:58:58 --> 404 Page Not Found: /index
ERROR - 2022-10-23 13:58:58 --> 404 Page Not Found: /index
ERROR - 2022-10-23 13:59:03 --> 404 Page Not Found: /index
ERROR - 2022-10-23 13:59:19 --> 404 Page Not Found: /index
ERROR - 2022-10-23 13:59:23 --> 404 Page Not Found: /index
ERROR - 2022-10-23 17:15:00 --> 404 Page Not Found: /index
ERROR - 2022-10-23 17:49:41 --> 404 Page Not Found: Vendas/consultaMedidas
ERROR - 2022-10-23 17:49:53 --> 404 Page Not Found: Vendas/consultaMedidas
ERROR - 2022-10-23 17:50:32 --> 404 Page Not Found: Vendas/consultaMedidas
ERROR - 2022-10-23 17:50:44 --> 404 Page Not Found: Vendas/consultaMedidas
ERROR - 2022-10-23 17:53:05 --> 404 Page Not Found: Vendas/consultaMedidas
ERROR - 2022-10-23 17:55:52 --> 404 Page Not Found: Vendas/consultaMedidas
ERROR - 2022-10-23 17:59:10 --> 404 Page Not Found: Vendas/consultaMedidas
ERROR - 2022-10-23 18:18:04 --> 404 Page Not Found: /index
ERROR - 2022-10-23 18:30:33 --> 404 Page Not Found: /index
ERROR - 2022-10-23 19:54:01 --> 404 Page Not Found: /index
ERROR - 2022-10-23 19:59:13 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:02:07 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:02:14 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:24:07 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:24:25 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:32:13 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:37:36 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:41:56 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:42:15 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:44:06 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:47:29 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:47:36 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:47:48 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:47:59 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:51:31 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:51:42 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:51:51 --> 404 Page Not Found: /index
ERROR - 2022-10-23 20:58:43 --> 404 Page Not Found: /index
