-- phpMyAdmin SQL Dump
-- version 4.1.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2021 at 06:21 PM
-- Server version: 5.1.62
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `marketitems`
--

CREATE TABLE IF NOT EXISTS `marketitems` (
  `itemid` int(10) NOT NULL AUTO_INCREMENT,
  `items` varchar(100) NOT NULL,
  `price` int(255) NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `marketitems`
--

INSERT INTO `marketitems` (`itemid`, `items`, `price`) VALUES
(1, 'Chair', 4500),
(2, 'Marker', 0),
(3, 'Marker', 8888),
(4, 'Marker', 885),
(5, 'Marker', 555),
(6, 'Marker', 555),
(7, 'Marker', 795),
(8, 'Marker', 555),
(9, 'Ginger', 200),
(10, 'Ginger', 200),
(11, 'Tomato', 58);

-- --------------------------------------------------------

--
-- Table structure for table `marketuser`
--

CREATE TABLE IF NOT EXISTS `marketuser` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `marketuser`
--

INSERT INTO `marketuser` (`id`, `username`, `email`, `password`) VALUES
(1, 'Teemax', 'mik@gmail.com', '54321'),
(2, 'Michael', 'mikealomotola@gmail.com', '54321'),
(4, 'Thomas', 'mikemotola@gmail.com', '54321'),
(5, 'Dan', 'dan@gmail.xom', '54321'),
(6, 'Gabriel', 'gab@gmail.com', '54321'),
(7, 'Dave', 'dav@gmail.com', '54321');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
