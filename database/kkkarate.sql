-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2017 at 07:22 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `contactnumber` varchar(250) NOT NULL,
  `status` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `address`, `username`, `password`, `contactnumber`, `status`) VALUES
(1, 'prakashan', 'sdada', 'admin', 'admin', '9539931867', '1');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `names`, `email`, `mobile`, `comment`, `date`) VALUES
(22, 'arshadddd', 'aaaaaaaaaaaaa@gmail.', 8943098094, 'resybnmnbvcxfghjk', '2015-09-30'),
(24, 'anoop', 'anoopmohan08@gmail.c', 9539931867, 'sdasdasd', '2017-04-08'),
(25, 'anoop', 'anoopmohan08@gmail.c', 9539931867, ' adsdasd', '2017-04-08'),
(26, 'anoop', 'anoopmohan08@gmail.c', 9539931867, ' adsdasd', '2017-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `text`, `status`) VALUES
(1, 'dsadad', '0'),
(2, 'inuu calss illa', '0');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `bdate` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `cno` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `address` varchar(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `bdate`, `gender`, `country`, `state`, `city`, `cno`, `email_id`, `status`, `address`) VALUES
(14, 'rr', 'sdasd', '03/08/2017', 'Male', '1', 'select', 'select', '9539931867', 'anoop@gmail.com', '1', 'sadas'),
(19, 'ANOOP', 'parayil', '08/08/1995', 'Male', 'indian', 'kerala', 'wadakkancherry', '9539931867', 'anoop@gmail.com', '1', 'parayil house'),
(20, 'gfsdfsdf', 'sad', '05/02/2017', 'Male', 'indain', 'sadas', 'asdsa', '9539931867', 'anoop@gmail.com', '0', 'asdfsadas');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Imgname` varchar(250) NOT NULL,
  `Imagepath` varchar(250) NOT NULL,
  `Pagelocation` varchar(250) NOT NULL,
  `Caption` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `Imgname`, `Imagepath`, `Pagelocation`, `Caption`) VALUES
(1, '_X9A7941asas.jpg', 'uploads/_X9A7941asas.jpg', 'main', 'ss'),
(2, '_X9A7941asas.jpg', 'uploads/_X9A7941asas.jpg', 'main', 'sdd'),
(3, 'cropped-url1.jpg', 'uploads/cropped-url1.jpg', 'main', '5as'),
(4, '20160322222023.png', 'uploads/20160322222023.png', 'main', 'sas'),
(5, 'mQifmay2Hwf0UBYf0lUj2kg (1).jpg', 'uploads/mQifmay2Hwf0UBYf0lUj2kg (1).jpg', 'main', 'marrittundu'),
(6, '_X9A8054.jpg', 'uploads/_X9A8054.jpg', 'main', 'wee');
