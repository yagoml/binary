--
-- Database: `binary`
--
CREATE TABLE `distribuidores` (
  `id` int(11) NOT NULL,
  `supervisor` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `lado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `distribuidores` (`id`, `supervisor`, `nome`, `lado`) VALUES
(1, 0, 'Um', NULL),
(2, 1, 'Dois', 'e'),
(3, 1, 'Tres', 'd'),
(4, 3, 'Quatro', 'e'),
(5, 4, 'Cinco', 'e'),
(6, 4, 'Seis', 'd'),
(7, 5, 'Sete', 'e'),
(8, 5, 'Oito', 'd'),
(9, 2, 'Nove', 'e'),
(10, 2, 'Dez', 'd'),
(11, 10, 'Onze', 'e'),
(12, 11, 'Doze', 'e'),
(13, 8, 'Treze', 'e'),
(14, 9, 'Quatorze', 'e');

--
-- Indexes for table `distribuidores`
--
ALTER TABLE `distribuidores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `distribuidores`
--
ALTER TABLE `distribuidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
