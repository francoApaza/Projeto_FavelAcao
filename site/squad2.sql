-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 03-Nov-2020 às 18:07
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `squad2`
--
CREATE DATABASE IF NOT EXISTS `squad2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `squad2`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `idcadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `data_nascimento` date NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `complemento` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`idcadastro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `cadastro`
--

--
-- Estrutura da tabela `cadastro_residuos`
--

CREATE TABLE IF NOT EXISTS `cadastro_residuos` (
  `idcadastro_residuos` int(11) NOT NULL AUTO_INCREMENT,
  `res_endereco` varchar(100) NOT NULL,
  `res_ponto_referencia` varchar(100) NOT NULL,
  `res_quantidade` varchar(100) NOT NULL,
  `res_presenca_insetos` varchar(100) NOT NULL,
  `res_quais_insetos` varchar(100) NOT NULL,
  `res_informacoes` varchar(100) NOT NULL,
  PRIMARY KEY (`idcadastro_residuos`),
  KEY `idcadastro_residuos` (`idcadastro_residuos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `cadastro_residuos`
--

INSERT INTO `cadastro_residuos` (`idcadastro_residuos`, `res_endereco`, `res_ponto_referencia`, `res_quantidade`, `res_presenca_insetos`, `res_quais_insetos`, `res_informacoes`) VALUES
(1, 'Rua A, 25', 'Perto de um parque', 'Pouco', 'Sim', 'Baratas', 'Urgente!'),
(2, 'Rua B, 17', 'Perto da Padaria C', 'Muito', 'Sim', 'Baratas, Larvas', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
