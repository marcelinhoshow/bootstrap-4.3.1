-- --------------------------------------------------------
--
-- Cria o banco de dados
--
-- --------------------------------------------------------
DROP DATABASE IF EXISTS tcc_vestibulize;
CREATE DATABASE IF NOT EXISTS tcc_vestibulize;

-- --------------------------------------------------------
--
-- Usa o banco de dados
--
-- --------------------------------------------------------

USE tcc_vestibulize;

-- --------------------------------------------------------
--
-- Estrutura da tabela `usuarios`
--
-- --------------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usu_cod` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `usu_nome` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usu_email` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usu_senha` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usu_acesso` int(1) NOT NULL DEFAULT '1'
)DEFAULT CHARSET= utf8;

-- --------------------------------------------------------
--
-- Estrutura da tabela `perguntas`
--
-- --------------------------------------------------------

DROP TABLE IF EXISTS `perguntas`;
CREATE TABLE IF NOT EXISTS `perguntas` (
  `perg_cod` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `perg_ano` int(4) NOT NULL,
  `perg_vestibular` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `perg_materia` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `perg_conteudo` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `perg_data` date NOT NULL,
  `perg_usuario` int(11) DEFAULT NULL,
  `perg_alternativacorreta` varchar(2) NOT NULL
)DEFAULT CHARSET= utf8;

-- --------------------------------------------------------
--
-- Estrutura da tabela `respostas`
--
-- --------------------------------------------------------

DROP TABLE IF EXISTS `respostas`;
CREATE TABLE IF NOT EXISTS `respostas` (
  `resp_cod` int(9) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `resp_conteudo` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `resp_resposta` varchar(2) NOT NULL DEFAULT '1',
  `resp_pergcod` int(11) NOT NULL
)DEFAULT CHARSET= utf8;

-- --------------------------------------------------------
--
-- Estrutura da tabela `avaliacoes`
--
-- --------------------------------------------------------

DROP TABLE IF EXISTS `avaliacoes`;
CREATE TABLE IF NOT EXISTS `avaliacoes` (
  `ava_pergcod` int(11) NOT NULL PRIMARY KEY,
  `ava_like` int(11) NOT NULL,
  `ava_dislike` int(11) NOT NULL
)DEFAULT CHARSET= utf8;