-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Out-2022 às 02:51
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estrutura da tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `cod_cliente` int NOT NULL,
  `cod_produto` int NOT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cod_cliente` int NOT NULL AUTO_INCREMENT,
  `cpf_cliente` varchar(14) NOT NULL,
  `telefone_cliente` varchar(11) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `endereco_cliente` varchar(100) NOT NULL,
  `senha_cliente` varchar(10) NOT NULL,
  `email_cliente` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `cpf_cliente`, `telefone_cliente`, `nome_cliente`, `endereco_cliente`, `senha_cliente`, `email_cliente`) VALUES
(4, '07881048530', '79999655208', 'Maria Eduarda Santos Boroni', 'Rua Divina Pastora, 1249', '1111', 'dudaboroni671@gmail.com'),
(5, '00879836563', '79999655207', 'Luiz Gustavo', 'Laranjeiras', '0101', 'luizgu@gmail.com'),
(6, '06254389576', '79988008209', 'John Soares Santos', 'São Cristovao', '0807', 'johnny@gmaiil.com'),
(7, '04875698720', '79999485632', 'João ', 'Aracaju', '3101', 'dandan@gmail.com'),
(9, '09648578962', '79988452178', 'Angelina Santos Ribeiro', 'Rua Divina Pastora, 1249', '2710', 'giba@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `cod_produto` int NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(20) NOT NULL COMMENT 'botar como chave estrangeira',
  `nome_produto` varchar(50) NOT NULL,
  `descricao_produto` varchar(100) NOT NULL,
  `qt_produto_estoque` int NOT NULL,
  `img_produto` varchar(100) NOT NULL,
  `valor_produto` float(10,2) NOT NULL,
  PRIMARY KEY (`cod_produto`),
  KEY `nome_usuario_fk` (`nome_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod_produto`, `nome_usuario`, `nome_produto`, `descricao_produto`, `qt_produto_estoque`, `img_produto`, `valor_produto`) VALUES
(36, 'Duda', 'Fone de ouvido', 'Fone de  ouvido de fio JBL', 1000, '93a0b4f095b64b588d7c55b041825189jfif', 100.00),
(38, 'Duda', 'Capinha de Iphone colorida', 'Capinha de Iphone XL nas cores vermelho, branco, verde e amarelo', 100, '77ebcd3ac8ba75bfa9cbcb40734a822e.jpg', 50.00),
(39, 'Duda', 'Caixinha de som JBL', 'Caixinha de som JBL preta Bombox', 78, '08ad634d0899d97136746372a09bbbb3.jpg', 200.00),
(40, 'Duda', 'Relógio', 'Smartwatch IWO7 branco', 61, 'a98cccbcde0bef37e008c6181e37e6b0.jpg', 300.00),
(43, 'Duda', 'Headphone Sansung', 'Headphones Branco sem fio, Sansung, bluetooth e pega cabo   ', 50, 'a5807062327684ac4157da0280c3a753jfif', 150.00),
(42, 'Duda', 'Capinha Moto E', 'Capinha para Moto E disponiveis nas cores branco , preto, roxo e rosa', 71, '116a585bc71dfc2fca058edf1225c9ba.jpg', 25.00),
(44, 'Duda', 'Smart Watch ', 'Relógio Smart Watch Preto Xiomi Aplle Sansung', 10, 'c1a9ef8efaaac42ca0c8d171681364c2.jpg', 170.00),
(45, 'Duda', 'Fone', 'Fone de  ouvido de fio JBL', 12, 'd776fca30fc4fbf1a6b247e42a2e53e9.jpg', 100.50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `id_upload` int NOT NULL AUTO_INCREMENT,
  `nome_upload` varchar(100) NOT NULL,
  `path_upload` varchar(100) NOT NULL,
  `data_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_upload`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `upload`
--

INSERT INTO `upload` (`id_upload`, `nome_upload`, `path_upload`, `data_upload`) VALUES
(1, 'sao-cristovao-sergipe-aerea.jpg', 'arquivos/', '2022-10-07 10:21:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
