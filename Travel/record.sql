-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2016 at 07:06 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `region` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `city` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `geoinfo` text CHARACTER SET ascii COLLATE ascii_bin,
  `comment` text,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`eid`, `country`, `region`, `city`, `datetime`, `geoinfo`, `comment`) VALUES
(1, 'Bangladesh', 'South', 'Bagerhat', '2016-01-01 00:00:00', 0x436f6c6c6c6c6c6c6c6c6c6c6c6c6c6c6c6c, 'Nice'),
(2, '', '', '', '0000-00-00 00:00:00', '', ''),
(3, 'Bangladesh', 'South', 'Rajshahi', '2016-12-01 00:00:00', 0x576561746865722053756e6e79, 'Good'),
(4, '', '', '', '0000-00-00 00:00:00', '', ''),
(8, 'Brazil', 'North', 'texas', '2017-01-01 00:00:00', 0x486f7420, 'so boring'),
(9, 'Chaina', 'East', 'Yanho', '2016-12-01 00:00:00', 0x486f7420616e6420636f6c64, 'nice and tidy'),
(10, '', '', '', '0000-00-00 00:00:00', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
