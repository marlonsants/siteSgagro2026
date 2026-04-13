-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 11-Nov-2015 às 11:17
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `unesp`
--
CREATE DATABASE IF NOT EXISTS `unesp` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `unesp`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_artigo`
--

CREATE TABLE IF NOT EXISTS `sl_artigo` (
  `id_artigo` int(11) NOT NULL AUTO_INCREMENT,
  `criado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resumo` varchar(2400) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `coautor` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `apresentacao` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `orientador` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idartigo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_artigo`),
  UNIQUE KEY `id` (`id_artigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=184 ;

--
-- Extraindo dados da tabela `sl_artigo`
--

INSERT INTO `sl_artigo` (`id_artigo`, `criado`, `titulo`, `resumo`, `area`, `coautor`, `apresentacao`, `orientador`, `descricao`, `categoria`, `idartigo`, `email`) VALUES
(183, '', 'titulo teste', 'A informática já é parte importante da vida das pessoas no mundo de hoje, más, muitos ainda tem dificuldade de entender os termos e nomes comuns que acompanham tudo que envolve computadores e tudo que o envolve, como Smartfones, Tablets, Videogames, entre outros. Vamos começar com Software e Hardware.Software são os programas que estão dentro do seu computador como jogos, programas de visualização de imagens e vídeos por exemplo. Já Hardware é toda a parte física do computador como Teclado, Mouse, Monitor entre outros. Ainda falando em Hardware encontramos termos que confundem muitas pessoas como HD que nada mais é do que uma abreviação em inglês para Disco Rígido que armazena as informações dentro do computador como músicas, programas, vídeos entre outros. Existe também a Memória RAM que é uma memória temporária do computador, ou seja, assim que o computador é desligado ou algum programa é fechado as informações são apagadas a não ser que sejam salvas antes no HD, Pendrive, ou qualquer outro dispositivo de armazenamento.Quando entrá na Internet, o usuário se depara com vários outros termos como Download, Upload e até mesmo o significado de Internet é confuso para eles. Vamos começar por Internet, que é uma abreviação em inglês para Rede Internacional de Computadores, ou seja, vários computadores interligados trocando informações. Essas informações são transmitidas na forma de Downloads e Uploads, sendo que, Download é quando o usuário recebe a informação e Upload quando envia uma informação. É como em uma conversa, quando uma pessoa fala(faz o Upload), a outra escuta (faz o Download) e vice e versa.Todos os termos aqui citados não equivalem nem a dez por cento dos termos encontrados na área de informática, más são os com o que mais nos deparamos no cotidiano até por que assim como dito no começo do texto, esses termos já não são mais exclusividade dos computadores, eles são encontrados também em Smartfones, Tablets, até mesmo em eletrodomésticos como TVs, Aparelhos de Blu-ray, Geladeiras e Fornos de Micro Ondas. O que só vem a confirmar que a informática já é, e irá se tornar cada vez mais, uma parte importante de nossas vidas', 'Gestão de Pessoas e ', '2', 'Banner', 'emanuel', 'mestre', 'Resumo Expandido', '1328456420b5f479b8', 'marlu_tcu@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_cadusu`
--

CREATE TABLE IF NOT EXISTS `sl_cadusu` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `criado` datetime NOT NULL,
  `modificado` varchar(10) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nome` varchar(20) CHARACTER SET latin1 NOT NULL,
  `sobrenome` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nascimento` varchar(10) CHARACTER SET latin1 NOT NULL,
  `sexo` varchar(10) CHARACTER SET latin1 NOT NULL,
  `deficiente` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cpf` varchar(15) CHARACTER SET latin1 NOT NULL,
  `endereco` varchar(30) CHARACTER SET latin1 NOT NULL,
  `cidade` varchar(30) CHARACTER SET latin1 NOT NULL,
  `estado` varchar(3) CHARACTER SET latin1 NOT NULL,
  `instituicao` varchar(50) CHARACTER SET latin1 NOT NULL,
  `telefone` varchar(15) CHARACTER SET latin1 NOT NULL,
  `contato` varchar(15) CHARACTER SET latin1 NOT NULL,
  `emailverificado` int(11) NOT NULL,
  `publicado` int(11) NOT NULL,
  `idartigo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipocadastro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=103 ;

--
-- Extraindo dados da tabela `sl_cadusu`
--

INSERT INTO `sl_cadusu` (`id_usuario`, `criado`, `modificado`, `senha`, `nome`, `sobrenome`, `nascimento`, `sexo`, `deficiente`, `email`, `cpf`, `endereco`, `cidade`, `estado`, `instituicao`, `telefone`, `contato`, `emailverificado`, `publicado`, `idartigo`, `numero`, `complemento`, `cep`, `bairro`, `tipocadastro`) VALUES
(102, '2015-11-10 15:18:00', '', '1234', 'marlon', 'santos', '07/08/1995', 'Masculino', 'Não', 'marlu_tcu@hotmail.com', '434.208.668-95', 'r: orlindo de bages ', 'taiaçu', 'SP', 'FELS', '(16) 99336 - 18', '(16) 3275 - 756', 1, 2, '1328456420b5f479b8', '406', 'casa', '14.725-000', 'bela vista', 'Academico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_coautor`
--

CREATE TABLE IF NOT EXISTS `sl_coautor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` text COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(17) COLLATE utf8_unicode_ci NOT NULL,
  `autorprincipal` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

--
-- Extraindo dados da tabela `sl_coautor`
--

INSERT INTO `sl_coautor` (`id`, `nome`, `sobrenome`, `cpf`, `autorprincipal`) VALUES
(44, 'coautor 1', 'scoautor 1', '12345678912', 'marlu_tcu@hotmail.com'),
(45, 'coautor2', 'scoautor2', '1234567812', 'marlu_tcu@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_grupo`
--

CREATE TABLE IF NOT EXISTS `sl_grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `id_artigo` int(11) NOT NULL,
  `id_usuario1` int(11) NOT NULL,
  `id_usuario2` int(11) NOT NULL,
  `id_usuario3` int(11) NOT NULL,
  `id_usuario4` int(11) NOT NULL,
  `id_usuario5` int(11) NOT NULL,
  `id_apresentador` int(11) NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_status`
--

CREATE TABLE IF NOT EXISTS `sl_status` (
  `id_artigo` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `publicado` int(11) NOT NULL,
  `emailverificado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
