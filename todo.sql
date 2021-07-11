-- phpMyAdmin SQL Dump
-- version 4.1.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2021 at 01:03 AM
-- Server version: 5.1.62
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sidehustle`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE IF NOT EXISTS `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `list` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `list`) VALUES
(0, 'HhCook'),
(1, 'Cook'),
(3, 'Cook'),
(4, 'Cook'),
(5, 'Cook'),
(6, 'Cook'),
(7, 'Cook'),
(8, 'Cook'),
(9, 'Cook'),
(10, 'Cook'),
(11, 'Cook'),
(12, 'Cook'),
(13, 'Cook'),
(14, 'Cook'),
(15, 'Cook'),
(16, 'Cook'),
(17, 'Cook'),
(18, 'Cook'),
(19, 'Cook'),
(20, 'Cook'),
(21, 'Cook'),
(22, 'Climbing'),
(23, 'Climbing'),
(24, 'Shooting'),
(25, 'Dance'),
(26, 'Dance'),
(27, 'Check'),
(28, 'Check'),
(29, ''),
(30, 'Cook'),
(31, 'Fishing'),
(32, 'Leech'),
(33, 'Mark'),
(34, 'HhCook');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
