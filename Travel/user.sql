-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2016 at 07:10 AM
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
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `forename` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `username` varchar(20) CHARACTER SET hp8 NOT NULL,
  `password` varchar(20) CHARACTER SET hp8 NOT NULL,
  `age` int(11) DEFAULT NULL,
  `email` text,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `forename`, `surname`, `username`, `password`, `age`, `email`) VALUES
(1, 'Mehadi', 'Hassan', 'Tamim', '111', 25, 'mehadicse38@gmail.com'),
(2, 'Mehadi', 'Hassan', 'mehadi', '123', 23, 'mehadicse38@gmail.com'),
(3, '', '', '', '', 0, ''),
(4, '', '', '', '', 0, ''),
(8, '', '', '', '', 0, ''),
(9, 'aaa', 'bb', 'cc', 'dd', 12, 'mehadicse38@gmail.com'),
(11, 'ttt', 'a', 't', '15', 14, 'mehadicse38@gmail.com'),
(12, 'Turjo', 'Hasssan', 'tiab', '14789', 21, 'mehadicse38@gmail.com'),
(13, 'abc', 'def', 'kate', '123', 25, 'mehadicse38@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
