-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2022 at 08:57 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faturadb`
--
CREATE DATABASE IF NOT EXISTS `faturadb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `faturadb`;

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacaosocial` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(9) NOT NULL,
  `nif` int(9) NOT NULL,
  `morada` varchar(50) NOT NULL,
  `codpostal` int(10) NOT NULL,
  `localidade` varchar(50) NOT NULL,
  `capitalsocial` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`id`, `designacaosocial`, `email`, `telefone`, `nif`, `morada`, `codpostal`, `localidade`, `capitalsocial`) VALUES
(1, 'Eletronika', 'eletronika@gmail.com', 243666758, 256785908, 'Rua Jose Soares', 2080620, 'Leiria', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `faturas`
--

DROP TABLE IF EXISTS `faturas`;
CREATE TABLE IF NOT EXISTS `faturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `valortotal` float NOT NULL,
  `ivatotal` float NOT NULL,
  `estado` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faturas`
--

INSERT INTO `faturas` (`id`, `data`, `valortotal`, `ivatotal`, `estado`, `user_id`) VALUES
(104, '2022-06-16', 2759.47, 450.47, 'Emitida', 14),
(105, '2022-06-16', 1449.54, 211.54, 'Emitida', 14),
(106, '2022-06-16', 780, 90, 'Emitida', 13),
(107, '2022-06-16', 4238.15, 533.15, 'Emitida', 15),
(108, '2022-06-16', 0, 0, 'em lancamento', 13),
(109, '2022-05-16', 497.14, 28.14, 'Emitida', 14);

-- --------------------------------------------------------

--
-- Table structure for table `ivas`
--

DROP TABLE IF EXISTS `ivas`;
CREATE TABLE IF NOT EXISTS `ivas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `percentagem` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `vigor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vigor_id` (`vigor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ivas`
--

INSERT INTO `ivas` (`id`, `percentagem`, `descricao`, `vigor_id`) VALUES
(1, 23, 'Taxa Normal', 1),
(2, 13, 'Taxa Intermedia', 1),
(3, 6, 'Taxa Reduzida', 1),
(4, 4, 'Taxa Simples', 2);

-- --------------------------------------------------------

--
-- Table structure for table `linha_faturas`
--

DROP TABLE IF EXISTS `linha_faturas`;
CREATE TABLE IF NOT EXISTS `linha_faturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` int(11) NOT NULL,
  `valorunitario` float NOT NULL,
  `valoriva` float NOT NULL,
  `fatura_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `produto_id` (`produto_id`),
  KEY `fatura_id` (`fatura_id`)
) ENGINE=InnoDB AUTO_INCREMENT=190 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linha_faturas`
--

INSERT INTO `linha_faturas` (`id`, `quantidade`, `valorunitario`, `valoriva`, `fatura_id`, `produto_id`) VALUES
(166, 1, 329, 42.77, 104, 7),
(167, 1, 129, 16.77, 104, 9),
(168, 3, 500, 115, 104, 6),
(169, 2, 174, 22.62, 104, 13),
(170, 1, 3, 0.69, 104, 12),
(172, 1, 174, 22.62, 106, 13),
(173, 1, 3, 0.69, 106, 12),
(174, 1, 55, 7.15, 106, 10),
(175, 1, 129, 16.77, 106, 9),
(176, 1, 329, 42.77, 106, 7),
(177, 2, 174, 22.62, 105, 13),
(178, 2, 3, 0.69, 105, 12),
(179, 1, 329, 42.77, 105, 7),
(180, 1, 500, 115, 105, 6),
(181, 1, 55, 7.15, 105, 10),
(182, 1, 174, 22.62, 107, 13),
(183, 5, 3, 0.69, 107, 12),
(185, 9, 329, 42.77, 107, 7),
(186, 1, 500, 115, 107, 6),
(187, 1, 55, 7.15, 107, 10),
(188, 1, 55, 7.15, 108, 10),
(189, 1, 469, 28.14, 109, 11);

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `stock` int(11) NOT NULL,
  `iva_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iva_id` (`iva_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `referencia`, `descricao`, `preco`, `stock`, `iva_id`) VALUES
(6, '4123124152512', ' Processador I9', 500, 0, 1),
(7, '31234125125123', ' Processador AMD Ryzen 7', 329, 5, 2),
(8, '3123125125151265125', ' Processador AMD Ryzen Threadripper', 432, 9, 3),
(9, '435456346346', 'MemÃ³ria RAM Corsair Dominator Platinum RGB 32GB', 129, 0, 2),
(10, '3124576908870', 'Fonte de AlimentaÃ§Ã£o MSI MAG', 55, 17, 2),
(11, '5870768979769', ' Placa GrÃ¡fica Gigabyte GeForce RTX 3060', 469, 7, 3),
(12, '545786970800879', 'Pasta TÃ©rmica Arctic MX-2 4g', 3, 13, 1),
(13, '769650578356', 'Monitor HP V27i IPS 27\" FHD', 174, 30, 2),
(14, '564754786854753754', 'Router TP-Link TL-MR100 N300 Single-Band', 54, 0, 3),
(15, '64586970000000', ' SSD 2.5', 109, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` int(9) NOT NULL,
  `nif` int(9) NOT NULL,
  `morada` varchar(30) NOT NULL,
  `codpostal` int(15) NOT NULL,
  `localidade` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `telefone`, `nif`, `morada`, `codpostal`, `localidade`, `role`) VALUES
(1, 'Admin', 'admin', 'goncalo@outlook.com', 935786583, 872523542, 'Rua 25 Abril', 2080640, 'Leiria', 'administrador'),
(11, 'Antonio', '12345', 'antonio@gmail.com', 937436587, 254731842, 'Avenida da Liberdade', 2080213, 'Leiria', 'funcionario'),
(12, 'Gilberto', '123', 'gilberto@gmail.com', 934436587, 234415125, 'Rua Fernando Pessoa', 2090647, 'Lisboa', 'funcionario'),
(13, 'Joao', '1234', 'joaofelix@hotmail.com', 931289312, 231412412, 'Rua das Ãguias', 2003942, 'SantarÃ©m', 'cliente'),
(14, 'Ricardo Fazeres', '5436', 'ricfazeres@gmail.com', 910733333, 423423432, 'Rua dos Pinguins', 2011932, 'Coimbra', 'cliente'),
(15, 'Rita Pereira', 'rita123', 'ritapereira@outlook.com', 912121212, 124124124, 'Rua da Quarta Feira', 2013232, 'Amadora', 'cliente');

-- --------------------------------------------------------

--
-- Table structure for table `vigors`
--

DROP TABLE IF EXISTS `vigors`;
CREATE TABLE IF NOT EXISTS `vigors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vigors`
--

INSERT INTO `vigors` (`id`, `valor`) VALUES
(1, 'Sim'),
(2, 'Nao');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faturas`
--
ALTER TABLE `faturas`
  ADD CONSTRAINT `faturas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ivas`
--
ALTER TABLE `ivas`
  ADD CONSTRAINT `ivas_ibfk_1` FOREIGN KEY (`vigor_id`) REFERENCES `vigors` (`id`);

--
-- Constraints for table `linha_faturas`
--
ALTER TABLE `linha_faturas`
  ADD CONSTRAINT `linha_faturas_ibfk_1` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `linha_faturas_ibfk_2` FOREIGN KEY (`fatura_id`) REFERENCES `faturas` (`id`);

--
-- Constraints for table `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`iva_id`) REFERENCES `ivas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
