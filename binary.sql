-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.9 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.3.0.5077
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para binary
CREATE DATABASE IF NOT EXISTS `binary` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `binary`;

-- Copiando estrutura para tabela binary.distribuidores
CREATE TABLE IF NOT EXISTS `distribuidores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supervisor` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `lado` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela binary.distribuidores: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `distribuidores` DISABLE KEYS */;
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
	(18, 13, 'Quatorze', 'e'),
	(19, 10, 'Quinze', 'd'),
	(20, 6, 'Dezesseis', 'e');
/*!40000 ALTER TABLE `distribuidores` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
