-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2017 at 12:50 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_form_details`
--

CREATE TABLE IF NOT EXISTS `application_form_details` (
  `application_date` date NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `branch` text NOT NULL,
  `year_admission` varchar(4) NOT NULL,
  `year_passing` year(4) NOT NULL,
  `percentage` int(3) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `sub_caste` text NOT NULL,
  `yr_admission` varchar(10) NOT NULL,
  `school` text NOT NULL,
  `student_sign` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_form_details`
--

INSERT INTO `application_form_details` (`application_date`, `lastname`, `firstname`, `middlename`, `phone`, `date_of_birth`, `branch`, `year_admission`, `year_passing`, `percentage`, `caste`, `sub_caste`, `yr_admission`, `school`, `student_sign`) VALUES
('2015-06-01', 'Shahani', 'Bhavika', 'Gulshan', '9920320552', '1997-06-21', 'inft', '2013', 2017, 89, 'on', '', 'on', 'Loreto Convent', 'Koala.jpg'),
('0000-00-00', '', '', '', '', '0000-00-00', '', '2013', 2017, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'abc@ves.ac.in', 'abc1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
