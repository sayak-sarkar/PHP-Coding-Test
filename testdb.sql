-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- হোষ্ট: localhost
-- তৈরী করার জন্য সময়: এপ্রিল 06, 2012 at 04:37 PM
-- Server version: 5.5.21
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ডাটাবেজ: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `response_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `browser` varchar(20) NOT NULL,
  `reason` varchar(255) NOT NULL,
  PRIMARY KEY (`response_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- টেবিল এর জন্য ডাটা ডাম্পিং করুন `test`
--

INSERT INTO `test` (`response_id`, `name`, `email`, `browser`, `reason`) VALUES
(1, 'Sayak Sarkar', 'sayak.bugsmith@gmail.com', 'FireFox', 'Availability of a large number of Extensions');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
