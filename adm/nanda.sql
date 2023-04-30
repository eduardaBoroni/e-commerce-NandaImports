-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Jul-2022 às 13:25
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nanda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

DROP TABLE IF EXISTS `adm`;
CREATE TABLE IF NOT EXISTS `adm` (
  `nome_usuario` varchar(20) NOT NULL,
  `senha_adm` varchar(10) NOT NULL,
  PRIMARY KEY (`nome_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`nome_usuario`, `senha_adm`) VALUES
('Nanda', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cpf_cliente` int(14) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `endereco_cliente` varchar(100) NOT NULL,
  `telefone_cliente` int(15) NOT NULL,
  `senha_cliente` varchar(10) NOT NULL,
  `email_cliente` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `cod_produto` int(10) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(20) NOT NULL COMMENT 'botar como chave estrangeira',
  `nome_produto` varchar(50) NOT NULL,
  `descricao_produto` varchar(100) NOT NULL,
  `qt_produto_estoque` int(5) NOT NULL,
  `img_produto` varchar(100) DEFAULT NULL,
  `valor_produto` float NOT NULL,
  PRIMARY KEY (`cod_produto`),
  KEY `nome_usuario_fk` (`nome_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod_produto`, `nome_usuario`, `nome_produto`, `descricao_produto`, `qt_produto_estoque`, `img_produto`, `valor_produto`) VALUES
(21, 'Nanda', 'Fone de ouvido', 'Fone de ouvido PRETO SAMSUNG', 10, '4d061473a61c5af83866af7d9aedfec1.jpg', 100),
(17, 'fsgfdg', 'sdgvfdg', 'fdgfdghtfr', 1, NULL, 11),
(18, 'gfsgrgfrw', 'ewtfrewtf', 'fdgfdgf', 1, '27e2611cfea587d56ade22cbbba1ccee.jpg', 2),
(19, 'Nanda', 'Fone de ouvido', 'Fone de ouvido AZUL JBL', 100, '7a03122e0bb9a45e20d00159fd98f6ec.jpg', 200),
(20, 'Nanda', 'Fone de ouvido', 'Fone de ouvido BRANCO JBL', 100, 'c1d5ca70e1c64a6c5f9d5064e47145c1.jpg', 99);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
