-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2015 às 19:34
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unesp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_area`
--

CREATE TABLE IF NOT EXISTS `sl_area` (
  `cod_area` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_artigo`
--

CREATE TABLE IF NOT EXISTS `sl_artigo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `criado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resumo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `coautor` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `apresentacao` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `orientador` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `sl_artigo`
--

INSERT INTO `sl_artigo` (`id`, `criado`, `titulo`, `resumo`, `area`, `coautor`, `apresentacao`, `orientador`, `descricao`) VALUES
(1, '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_cadusu`
--

CREATE TABLE IF NOT EXISTS `sl_cadusu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `criado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `modificado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nascimento` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `deficiente` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `instituicao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `contato` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `emailverificado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=73 ;

--
-- Extraindo dados da tabela `sl_cadusu`
--

INSERT INTO `sl_cadusu` (`id`, `criado`, `modificado`, `senha`, `nome`, `sobrenome`, `nascimento`, `sexo`, `deficiente`, `email`, `cpf`, `endereco`, `cidade`, `estado`, `instituicao`, `telefone`, `contato`, `emailverificado`) VALUES
(52, '', '', 'a', 'sdf', 'sdfsdfs', 'dfsdfsdf', 'Masculino', 'Não', 'a', 'sdfsdfsdf', 'sdfsdfsdf', 'sdfsdfds', 'SP', 'fsdfsdfs', 'sdfsdfsd', 'sdfsdfsdfsdf', 1),
(53, '', '', '1234', 'marlon', 'santos', '07081995', 'Masculino', 'Não', 'marlu_tcu@hotmail.com', '43420866895', 'r orlindo de bages', 'taiaçu', 'SP', 'sao luis', '993161826', '123123123123', 1),
(54, '', '', 'a', 'dfgdfg', 'dfgdfg', 'dfgd', 'Masculino', 'Não', 'a', 'dfgdfg', 'dfg', 'dfgf', 'SP', 'dfg', 'dfgdfg', 'dfgdf', 1),
(55, '', '', '1234', 'teste', 'teste', 'teste', 'Masculino', 'Não', 'teste@gmail.com', 'teste', 'teste', 'teste', 'SP', 'teste', 'teste', 'teste', 1),
(56, '', '', '1234', 'teste', 'teste', 'teste', 'Masculino', 'Não', 'teste2@gmail.com', 'teste', 'teste', 'teste', 'SP', 'teste', 'teste', 'teste', 1),
(57, '', '', 'aa', 'aa', 'aa', 'aa', 'Masculino', 'Não', 'aa', 'aa', 'aa', 'aa', 'SP', 'aa', 'aa', 'aa', 1),
(58, '', '', '$senha', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(59, '', '', '$senha', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(60, '', '', '$senha', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(61, '', '', '$senha', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(62, '', '', '$senha', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(63, '', '', '$senha', '$nome', '$sobrenome', '$nasciment', '$sexo', '$de', '$email', '$cpf', '$endereco', '$cidade', '$es', '$instituicao', '$telefone', '$contato', 0),
(64, '', '', '$senha', '$nome', '$sobrenome', '$nasciment', '$sexo', '$de', '$email', '$cpf', '$endereco', '$cidade', '$es', '$instituicao', '$telefone', '$contato', 0),
(65, '', '', '$senha', '$nome', '$sobrenome', '$nasciment', '$sexo', '$de', '$email', '$cpf', '$endereco', '$cidade', '$es', '$instituicao', '$telefone', '$contato', 0),
(66, '', '', 'a', '$nome', '$sobrenome', '$nasciment', '$sexo', '$de', '$email', '$cpf', '$endereco', '$cidade', '$es', '$instituicao', '$telefone', '$contato', 0),
(67, '', '', 'a', 'a', 'a', 'a', 'Masculino', 'Não', 'a', 'a', 'a', 'a', 'SP', 'a', 'a', 'a', 1),
(68, '', '', 'a', 'a', 'a', 'a', 'Masculino', 'Não', 'a', 'a', 'a', 'a', 'SP', 'a', 'a', 'a', 1),
(69, '', '', 'a', 'a', 'a', 'a', 'Masculino', 'Não', 'a', 'a', 'a', 'a', 'SP', 'a', 'a', 'a', 1),
(70, '', '', 'a', 'a', 'a', 'a', 'Masculino', 'Não', 'a', 'a', 'a', 'a', 'SP', 'a', 'a', 'a', 1),
(71, '', '', 'abc', 'Anderson Guilherme ', 'de Souza', '13/11/1994', 'Masculino', 'Não', 'anderson.souza13@hotmail.com', '427.666.978-29', 'Rua José Missali 579', 'Guariba', 'SP', 'Faculdade de Educação São Luis', '1632515243', '1632514021', 1),
(72, '', '', 's', 's', 's', 's', 'Masculino', 'Não', 's', 's', 's', 's', 'SP', 's', 's', 's', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_evento`
--

CREATE TABLE IF NOT EXISTS `sl_evento` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `abertura` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fechamento` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sl_status`
--

CREATE TABLE IF NOT EXISTS `sl_status` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
