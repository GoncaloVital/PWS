-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 08, 2022 at 10:28 AM
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
(1, 'Eletronika', 'eletronika@gmail.com', 243255789, 412937102, 'Rua Jose Soares', 2080620, 'Leiria', 10000);

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faturas`
--

INSERT INTO `faturas` (`id`, `data`, `valortotal`, `ivatotal`, `estado`, `user_id`) VALUES
(1, '2022-06-06', 24, 12, 'emitida', 3),
(2, '2022-06-06', 24, 12, 'emitida', 3),
(31, '2022-06-07', 0, 0, 'em lancamento', 8),
(32, '2022-06-08', 0, 0, 'em lancamento', 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ivas`
--

INSERT INTO `ivas` (`id`, `percentagem`, `descricao`, `vigor_id`) VALUES
(1, 23, 'Taxa Normal', 1),
(2, 13, 'Taxa Intermedia', 1),
(3, 6, 'Taxa Reduzida', 2);

-- --------------------------------------------------------

--
-- Table structure for table `linhafaturas`
--

DROP TABLE IF EXISTS `linhafaturas`;
CREATE TABLE IF NOT EXISTS `linhafaturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` int(11) NOT NULL,
  `valorunitario` float NOT NULL,
  `valoriva` float NOT NULL,
  `fatura_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `produto_id` (`produto_id`),
  KEY `fatura_id` (`fatura_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` int(50) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `stock` int(11) NOT NULL,
  `iva_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iva_id` (`iva_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `referencia`, `descricao`, `preco`, `stock`, `iva_id`) VALUES
(3, 6785654, 'Processador I9', 500, 5, 1),
(4, 412425123, 'Processador I5', 250, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'administrador'),
(2, 'funcionario'),
(3, 'cliente');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `telefone`, `nif`, `morada`, `codpostal`, `localidade`, `role`) VALUES
(1, 'Admin', '123456', 'goncalo@outlook.com', 935786583, 872523542, 'Rua 25 Abril', 2080640, 'Leiria', 'administrador'),
(2, 'Funcionario', '123', 'funcionario@gmail.com', 935748571, 213214214, 'Rua Jose Soares', 2080620, 'Leiria', 'funcionario'),
(3, 'Cliente', '123', 'cliente@gmail.com', 935731271, 231241241, 'Rua Jose Soares', 2080620, 'Leiria', 'cliente'),
(6, 'Joao', '123', 'joao@gmail.com', 935764457, 243523635, 'Rua Dr.Jose', 2080620, 'Leiria', 'funcionario'),
(7, 'Andre', '123', 'andre@gmail.com', 935786583, 312512412, 'Rua 20 de  Abril', 2080640, 'Almeirim', 'funcionario'),
(8, 'Joana', '123', 'joana@hotmail.com', 935435436, 351124214, 'Rua Dr. Paninho', 2080213, 'Almeirim', 'cliente');

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
-- Constraints for table `linhafaturas`
--
ALTER TABLE `linhafaturas`
  ADD CONSTRAINT `linhafaturas_ibfk_1` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `linhafaturas_ibfk_2` FOREIGN KEY (`fatura_id`) REFERENCES `faturas` (`id`);

--
-- Constraints for table `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`iva_id`) REFERENCES `ivas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
