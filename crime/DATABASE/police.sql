-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2020 at 05:13 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `police`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `comid` mediumtext NOT NULL,
  `station` mediumtext NOT NULL,
  `sub` mediumtext NOT NULL,
  `cotype` mediumtext NOT NULL,
  `name` mediumtext NOT NULL,
  `address` mediumtext NOT NULL,
  `city` mediumtext NOT NULL,
  `pincode` mediumtext NOT NULL,
  `phone` mediumtext NOT NULL,
  `complaint` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`comid`, `station`, `sub`, `cotype`, `name`, `address`, `city`, `pincode`, `phone`, `complaint`) VALUES
('42', 'Keerathurai Police Station', 'Murder in our Street', 'Murdercase', 'devi', 'Madurakiri', 'madurai', '625021', '6547891230', 'in my street the murder is placed.'),
('852', 'AnnaNagar Police Station', 'In my house the 100000.rs is missing', 'Robberycase', 'a', 'Madurapalayam', 'madurai', '625021', '7894561230', 'my cash is missing lease find and give it to me\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(50) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `feedback`) VALUES
('Kala', '	super');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `username` mediumtext NOT NULL,
  `password` mediumtext NOT NULL,
  `gender` mediumtext NOT NULL,
  `address` mediumtext NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`, `gender`, `address`, `contact`) VALUES
('a', 'aaa', 'male', 'no,2 sothm east', '7895641230'),
('Meena', '123', 'female', 'xxx', '9488987564');

-- --------------------------------------------------------

--
-- Table structure for table `upcomplaint`
--

CREATE TABLE IF NOT EXISTS `upcomplaint` (
  `cid` mediumtext NOT NULL,
  `username` mediumtext NOT NULL,
  `upcom` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcomplaint`
--

INSERT INTO `upcomplaint` (`cid`, `username`, `upcom`) VALUES
('852', 'a', '	dsgdfgfhfhfhfghfg');
