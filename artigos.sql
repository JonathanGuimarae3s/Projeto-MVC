-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Fev-2023 às 02:55
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `conteudo`) VALUES
(7, 'Jonathan', 'teste de update'),
(8, 'Jonathan', 'enten'),
(9, 'TESTE', 'REDIRECIONAMENTO'),
(10, 'TESTE', 'REDIRECIONAMENTO'),
(11, 'Jonathan', 'REDIRECIONAMENTO'),
(12, 'Jonathan', 'REDIRECIONAMENTO'),
(13, 'Jonathan', 'REDIRECIONAMENTO'),
(14, 'tete', 'tet'),
(15, 'tete', 'este'),
(16, 'tete', 'este'),
(17, 'tete', 'este'),
(18, 'tete', 'este'),
(19, 'tete', 'este'),
(20, 'tete', 'este'),
(21, 'tete', 'este'),
(22, 'tete', 'este'),
(23, 'tete', 'este'),
(24, 'tete', 'este'),
(25, 'jonth', 'obnfap'),
(26, 'jonth', 'obnfap');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
