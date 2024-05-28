-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28/05/2024 às 01:44
-- Versão do servidor: 8.2.0
-- Versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `IdCategoria` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`IdCategoria`, `Nome`) VALUES
(1, 'ALIMENTOS PERECIVEIS'),
(2, 'ALIMENTOS NAO PARECIVEIS'),
(6, 'ROUPAS'),
(7, 'CALÇADOS'),
(8, 'MEDICAMENTOS');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `IdProduto` int NOT NULL AUTO_INCREMENT,
  `Numero` int NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Quantidade` int DEFAULT NULL,
  `Categoria` varchar(100) DEFAULT NULL,
  `Fornecedor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`IdProduto`, `Numero`, `Nome`, `Quantidade`, `Categoria`, `Fornecedor`) VALUES
(18, 4, 'LEITE', 12, 'ALIMENTOS PERECIVEIS', 'DOAÇAO SOLIDARIA'),
(17, 1, 'ARROZ', 20, 'ALIMENTOS NAO PARECIVEIS', 'SUPERMERCADO UNIAO'),
(16, 6, 'DIPIRONA', 10, 'MEDICAMENTOS', 'FARMACIA'),
(19, 7, 'LEITE', 34, 'ALIMENTOS NAO PARECIVEIS', 'DOAÇAO SOLIDARIA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `IdFornecedor` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL,
  PRIMARY KEY (`IdFornecedor`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `fornecedor`
--

INSERT INTO `fornecedor` (`IdFornecedor`, `Nome`) VALUES
(1, 'SUPERMERCADO UNIAO'),
(2, 'DOAÇAO SOLIDARIA'),
(3, 'PERNAMBUCANA'),
(4, 'FARMACIA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(80) NOT NULL,
  `Sobrenome` varchar(90) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` varchar(256) NOT NULL,
  `NivelUsuario` int NOT NULL,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nome`, `Sobrenome`, `Email`, `Senha`, `NivelUsuario`, `Status`) VALUES
(6, 'junia', 'melo', 'juninha123@hotmail.com', '6f107ec7164e5a90df51717c098e93eddd0bd61d', 1, 'Ativo'),
(3, 'Mateus', 'Barbosa', 'desenvolvedormateusbarbosa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'Ativo'),
(4, 'Gabriel', 'Melo', 'gbmelo@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 'Ativo'),
(5, 'Maria', 'Rosana', 'maria_ro@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 'Ativo'),
(7, '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 1, 'Ativo'),
(9, '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 3, 'Inativo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
