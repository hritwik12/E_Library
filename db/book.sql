-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 08:51 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book`
--
CREATE DATABASE IF NOT EXISTS `book` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `book`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `BID` int(11) NOT NULL AUTO_INCREMENT,
  `BTITLE` varchar(150) NOT NULL,
  `KEYWORDS` varchar(150) NOT NULL,
  `FILE` varchar(150) NOT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BID`, `BTITLE`, `KEYWORDS`, `FILE`) VALUES
(1, 'Head First In PHP', 'PHP', 'upload/PHP BOOK.pdf'),
(2, 'C# Form Design', 'C# Tutorial', 'upload/1 J42ZjHdsTHd99Sivm53gAw.png');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `BID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `COMM` varchar(150) NOT NULL,
  `LOGS` date NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CID`, `BID`, `SID`, `COMM`, `LOGS`) VALUES
(1, 1, 1, 'Nice Book', '2017-11-08'),
(2, 1, 1, 'Awesome', '2017-11-20'),
(3, 2, 1, 'Nice Example', '2017-11-20'),
(4, 1, 4, 'Good', '2017-11-20'),
(5, 1, 1, 'nice', '2017-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `RID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `MES` text NOT NULL,
  `LOGS` datetime NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RID`, `ID`, `MES`, `LOGS`) VALUES
(1, 4, 'Neeed More Books In HTML', '2017-11-20 13:52:55'),
(2, 1, 'i need php book', '2017-11-20 14:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(150) NOT NULL,
  `PASS` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `DEP` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `NAME`, `PASS`, `MAIL`, `DEP`) VALUES
(1, 'ram', '1234', 'ram@gmail.com', 'BCA'),
(2, 'Sara', '1234', 'sara@gmail.com', 'B.SC CS'),
(3, 'Tom', '1234', 'tom@gmail.com', 'BCA'),
(4, 'Priya', '1234', 'priya@gmail.com', 'BCA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
