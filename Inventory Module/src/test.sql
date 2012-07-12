-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2012 at 12:10 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

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
-- Table structure for table `distributor`
--

CREATE TABLE IF NOT EXISTS `distributor` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(20) NOT NULL,
  `itemtype` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `itemname` (`itemname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122 ;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id`, `itemname`, `itemtype`, `quantity`) VALUES
(103, 'BMW 7 ', 'Cars', 0),
(110, 'Mercedes', 'Cars', 1),
(112, 'Sergio', 'Books', 1),
(121, 'Audi Q8', 'Automobile', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `itemname`, `itemtype`) VALUES
(118, 'spring into php', 'Books'),
(119, 'Sherlock Homes', 'Books'),
(120, 'Wings of Fire', 'Books'),
(121, 'Audi Q8', 'Automobile'),
(122, 'Scorpio', 'Automobile'),
(123, 'V8', 'Automobile');

-- --------------------------------------------------------

--
-- Table structure for table `itemtype`
--

CREATE TABLE IF NOT EXISTS `itemtype` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `itemtype` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `itemtype` (`itemtype`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `itemtype`
--

INSERT INTO `itemtype` (`id`, `itemtype`) VALUES
(37, 'Automobile'),
(36, 'Books');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `location` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `locations` (`location`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`) VALUES
(5, 'distributor'),
(3, 'stock'),
(4, 'store');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(20) NOT NULL,
  `itemtype` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `itemname` (`itemname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `itemname`, `itemtype`, `quantity`) VALUES
(103, 'BMW 7 ', 'Cars', 1),
(107, 'Davinci Code', 'Books', 7),
(112, 'Sergio', 'Books', 1),
(116, 'Mercedes', 'Cars', 1),
(117, 'Dell Inspiron', 'PC', 5),
(118, 'spring into php', 'Books', 10),
(119, 'Sherlock Homes', 'Books', 14),
(121, 'Audi Q8', 'Automobile', 5),
(122, 'Scorpio', 'Automobile', 22),
(123, 'V8', 'Automobile', 2);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(20) NOT NULL,
  `itemtype` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `itemname` (`itemname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122 ;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `itemname`, `itemtype`, `quantity`) VALUES
(103, 'BMW 7 ', 'Cars', 1),
(121, 'Audi Q8', 'Automobile', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` smallint(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(1, 'quark', 'ripopen'),
(2, 'sudharshan', 'sudhar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
