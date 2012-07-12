-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2012 at 02:31 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(20) NOT NULL,
  `itemtype` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `itemname` (`itemname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `itemname`, `itemtype`) VALUES
(2, 'DVD Player', 'Electronics'),
(4, 'Renault Logan', 'Vehicles'),
(5, 'Hammer', 'Tools'),
(9, 'BMW SUV', 'Vehicles'),
(25, 'John Deer Tractor', 'Vehicles'),
(35, 'Ford GT', 'Vehicles'),
(39, 'Samsung Galaxy Y', 'Electronics'),
(42, 'Tata Nano', 'Vehicles'),
(45, 'Nailcutter', 'Tools'),
(67, 'Apple iPod', 'Electronics'),
(69, 'Stapler', 'Tools'),
(70, '', ''),
(76, 'Apple iPad', 'Electronics'),
(78, 'Louis Phillipe Suite', 'Clothes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
