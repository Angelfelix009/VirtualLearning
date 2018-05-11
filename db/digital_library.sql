-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2016 at 11:27 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `digital_library`
--
CREATE DATABASE IF NOT EXISTS `digital_library` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `digital_library`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `designation`) VALUES
(6, 'kenny', 'kenny', 'Hastrop', 'library assistant'),
(7, 'admin', 'admin', 'anme', 'nsnsn');

-- --------------------------------------------------------

--
-- Table structure for table `e_book`
--

CREATE TABLE IF NOT EXISTS `e_book` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `screenshot` text NOT NULL,
  `epath` text NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `e_book`
--

INSERT INTO `e_book` (`id`, `name`, `department`, `screenshot`, `epath`, `cdate`) VALUES
(9, 'Excel', 'Accountancy', ' ', 'ebook/Excel 2007.pdf', '0000-00-00'),
(10, 'Hacking', 'Computer Science', ' ', 'ebook/Hacking Dummies 3rd.pdf', '0000-00-00'),
(11, 'C++', 'Computer Science', ' ', 'ebook/The_C++_Programming_Language_3rd_Ed.pdf', '0000-00-00'),
(12, 'Computer Hardware', 'Computer Enginnering', ' ', 'ebook/Hardware Manual.pdf', '0000-00-00'),
(13, 'Php', 'Computer Science', ' ', 'ebook/10. CRUD Application in Zend Framework.pdf', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `surname` varchar(25) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `matricno` varchar(15) NOT NULL,
  `department` varchar(30) NOT NULL,
  `level` varchar(15) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `session` varchar(15) NOT NULL,
  `img` text NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `surname`, `othernames`, `username`, `password`, `matricno`, `department`, `level`, `phoneno`, `email`, `session`, `img`, `cdate`) VALUES
(1, 'Adetokunbo', 'Ajai Vinvent', 'admin', 'admin', 'HA20147837', 'Accountancy', 'ND1 FT', 2147483647, 'vincent@yahoo.comewe', '2012/2013', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `department` varchar(50) NOT NULL,
  `Screenshot` text NOT NULL,
  `vfile` text NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `department`, `Screenshot`, `vfile`, `cdate`) VALUES
(1, 'The Accountancy Guide', 'Accountancy', ' ', 'video/Visual Basic Tutorial - 1 - What Is Visual Basic.mp4', '0000-00-00'),
(2, 'Youtube', 'Banking and Finance', ' ', 'video/AppPresser - Submit your iOS app using Phonegap Build- Part 2 - YouTube.mp4', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
