/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  joliveira
 * Created: 28/02/2018
 */

CREATE TABLE `perguntas` (
  `myid` int(150) NOT NULL,
  `id_questionario` int(150) NOT NULL,
  `id_resposta` int(150) NOT NULL,
  `texto_pergunta` varchar(300) CHARACTER SET utf8 NOT NULL,  
 )
 ALTER TABLE `perguntas` ADD `pgt_ordem` DOUBLE NULL FIRST, ADD `pgt_coment` DOUBLE NOT NULL AFTER `pgt_ordem`, ADD `pgt_tipo` VARCHAR(100) NULL AFTER `pgt_coment`;

ALTER TABLE `perguntas` ADD `pgt_sexo` VARCHAR(100) NOT NULL FIRST;
 
 
  CREATE TABLE `feedback` (
  `myid` int(150) NOT NULL,
  `texto_feed` varchar(300),
  `sugestoes` varchar(300),
)

CREATE TABLE `questionario` (
  `myid` int(150) NOT NULL,
  `nome_questionario` varchar(300),
  `descricao` varchar(300),
  `categoria` varchar(300),
  `data` datetime(6),
  `data_update` datetime(6),
  `autor` varchar(300)
  
)

CREATE TABLE `respostas` (
  `myid` int(150) NOT NULL,
  `id_questionionario` int(150) NOT NULL,
  `id_perguntas` int(150) NOT NULL,
  `texto_resposta` varchar(300),
  `correct` varchar(300)
 
    
)