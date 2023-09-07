-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Set-2023 às 02:28
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `supreme`
--
CREATE DATABASE IF NOT EXISTS `supreme` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `supreme`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `supreme_produtos`
--

DROP TABLE IF EXISTS `supreme_produtos`;
CREATE TABLE `supreme_produtos` (
  `id_produto` int(100) NOT NULL,
  `nome_produto` varchar(150) NOT NULL,
  `descricao_produto` varchar(350) NOT NULL,
  `quantidade_produto` int(150) NOT NULL,
  `fornecedor_produto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `supreme_produtos`
--

INSERT INTO `supreme_produtos` (`id_produto`, `nome_produto`, `descricao_produto`, `quantidade_produto`, `fornecedor_produto`) VALUES
(2, 'aaaaaa', 'aaaa aaa', 4, 'aaaaa'),
(3, 'Tenis branco', 'Um tênis com uma coloração bem clara', 351, 'White Sneakers Store'),
(4, 'Tenis preto', 'Um tênis com uma coloração não tão clara', 550, 'Non White Sneakers Store'),
(5, 'Tenis azul', 'Dizem que esse tênis foi abençoado pelos mares', 1, 'Ocean'),
(6, 'Tenis marrom', 'Um tênis marrom comum ', 1245, 'Non White Sneakers Store'),
(7, 'Camiseta bloqueada', 'Colete 50 tênis dourados para desbloquear', 1, 'Divindade superior'),
(8, 'Tenis dourado', 'Espera... onde você encontrou isso?', 50, 'Divindade superior'),
(9, 'Tijolo', 'Isso não é de vestir...', 999, 'ConstruMaia'),
(10, 'Blusa bem grande', 'Algumas pessoas acreditam que essa blusa cobre a terra, causando os calores no verão', 1, 'Divindade Superior'),
(11, 'bbbb', 'bbbbb', 3, 'bbbb'),
(12, 'ccccc', 'ccccc', 3, 'ccccc');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `supreme_produtos`
--
ALTER TABLE `supreme_produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `supreme_produtos`
--
ALTER TABLE `supreme_produtos`
  MODIFY `id_produto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
