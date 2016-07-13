-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Fev-2016 às 21:03
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pyramid`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `distribuidores`
--

CREATE TABLE `distribuidores` (
  `id` int(11) NOT NULL,
  `supervisor` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `lado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `distribuidores`
--

INSERT INTO `distribuidores` (`id`, `supervisor`, `nome`, `nivel`, `lado`) VALUES
(1, 0, 'Um', NULL),
(2, 1, 'Dois', 'e'),
(3, 1, 'Tres', 'd'),
(4, 3, 'Quatro', 'e'),
(5, 4, 'Cinco', 'e'),
(6, 4, 'Seis', 'd'),
(7, 5, 'Sete', 'e'),
(8, 5, 'Oito', 'd'),
(9, 2, 'Nove', 'e'),
(10, 2, 'Dez'', 'd'),
(11, 10, 'Onze', 'e'),
(12, 11, 'Doze', 'e'),
(13, 8, 'Treze', 'e'),
(14, 9, 'Quatorze', 'e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribuidores`
--
ALTER TABLE `distribuidores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribuidores`
--
ALTER TABLE `distribuidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
