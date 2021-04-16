-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2020 at 07:54 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `house_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `psw`) VALUES
('admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `gregister`
--

CREATE TABLE `gregister` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gregister`
--

INSERT INTO `gregister` (`id`, `name`, `gender`, `age`, `email`, `phone`, `address`, `zip`, `uname`, `psw`) VALUES
(1, 'admin', 'male', '21', 'test@gmail.com', '9087408476', 'trichy', '620008', 'admin', '111');

-- --------------------------------------------------------

--
-- Table structure for table `hregist`
--

CREATE TABLE `hregist` (
  `id` varchar(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `htype` varchar(50) NOT NULL,
  `noh` varchar(50) NOT NULL,
  `rtype` varchar(50) NOT NULL,
  `hfor` varchar(50) NOT NULL,
  `rms` varchar(50) NOT NULL,
  `amnt` varchar(50) NOT NULL,
  `himg` blob NOT NULL,
  `dur` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hregist`
--

INSERT INTO `hregist` (`id`, `oname`, `loc`, `address`, `zip`, `htype`, `noh`, `rtype`, `hfor`, `rms`, `amnt`, `himg`, `dur`, `status`, `uid`) VALUES
('1', 'admin', 'Trichy', '      trichy', '620008', 'Indvidual Villa', '1', 'rent', 'Family', '2', '4000', 0x626c6f67312e6a7067, '2yrs', '2', '1'),
('2', 'admin', 'Trichy', '      trichy', '62008', 'Apartment', '2', 'Lease', 'Family', '2', '5,00,000lks', 0x626c6f67322e6a7067, '2yrs', '2', '2'),
('3', 'admin', 'Madurai', '      trichy', '620008', 'Indvidual Villa', '2', 'rent', 'Family', '2', '4000', 0x626c6f67322e6a7067, '2yrs', '0', ''),
('4', 'admin', 'Trichy', '     trichy ', '620008', 'Apartment', '2', 'Lease', 'Family', '4', '5000', '', '2yrs', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `details` varchar(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `gender`, `age`, `email`, `phone`, `address`, `details`, `uname`, `psw`) VALUES
(1, 'admin', 'male', '21', 'test@gmail.com', '9087408476', 'trichy', 'testing', 'admin', '111'),
(2, 'prasanna', 'male', '21', 'test@gmail.com', '9087408476', 'trichy ', '', 'prasanna', '123');
