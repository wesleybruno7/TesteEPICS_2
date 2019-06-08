-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 08-Jun-2019 às 18:59
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ORDERNUMBER` int(8) NOT NULL,
  `CAMPAIN` varchar(30) NOT NULL,
  `PRODUCTNAME` varchar(30) NOT NULL,
  `CUSTOMER` varchar(30) NOT NULL,
  `STATUS` varchar(30) NOT NULL,
  `UPDATEDATE` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `orders`
--

INSERT INTO `orders` (`ID`, `ORDERNUMBER`, `CAMPAIN`, `PRODUCTNAME`, `CUSTOMER`, `STATUS`, `UPDATEDATE`) VALUES
(1, 35610449, 'Mindinsole EN UP', 'Reflexology Insole', 'Pending Paypal Response', 'Delivered', '2018-10-15 00:00:00'),
(2, 35610450, 'Euphoric Feet DE VSL', 'Lifetime Warranty', 'Pending Paypal Response', 'New', '2018-10-15 00:00:00'),
(3, 35612183, 'Euphoric Feet DE VSL', 'Reflexology Insole x3', 'Andreas Bluthner', 'Paid', '2018-10-15 00:00:00'),
(4, 35612225, 'FreeseeTV | TVFix Anten...', 'HDTV Antenna', 'Ingeborg Geiss', 'Cancel', '2018-10-15 00:00:00'),
(5, 35610448, 'FreeseeTV | TVFix Anten...', 'HDTV Antenna', 'Luise Horns', 'Delivered', '2019-06-08 02:55:00'),
(6, 35612209, 'Euphoric Feet DE VSL', 'Reflexology Insole 2', 'Blandine Kayser', 'Delivered', '2019-06-08 03:06:00'),
(7, 356112191, 'Euphoric Feet DE VSL', 'Reflexology Insole 2', 'Cynthia McGrath', 'Delivered', '2019-06-08 03:07:00'),
(8, 35612183, 'Euphoric Feet DE VSL', 'Reflexology Insole', 'Cynthia McGrath', 'New', '2019-06-08 03:20:00'),
(9, 35612175, 'Euphoric Feet DE VSL', 'Reflexology Insole', 'Pending Paypal Response', 'New', '2019-06-08 03:20:00'),
(10, 35610447, 'Euphoric Feet DE VSL', 'Reflexology Insole 2', 'Sandra Naples', 'Cancel', '2019-06-08 03:21:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
