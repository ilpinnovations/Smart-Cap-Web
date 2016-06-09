-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2016 at 02:59 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `raspberry`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructions`
--

CREATE TABLE IF NOT EXISTS `instructions` (
  `id` int(11) NOT NULL,
  `instruct` varchar(300) DEFAULT NULL,
  `read_status` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructions`
--

INSERT INTO `instructions` (`id`, `instruct`, `read_status`) VALUES
(1, ' ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(11) NOT NULL,
  `reply` varchar(300) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `read_status` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `reply`, `date`, `read_status`) VALUES
(1, 'How long should i go?', '2015-12-31 04:59:55', '1'),
(2, 'What should i do next?', '2015-12-31 05:00:26', '1'),
(3, 'Should i take a right?', '2015-12-31 05:00:47', '1'),
(4, 'Should i take a right?', '2015-12-31 05:49:40', '1'),
(5, 'Should i take a right?', '2015-12-31 05:49:42', '1'),
(6, 'Should i take a right?', '2015-12-31 05:49:44', '1'),
(7, 'Should i take a right?', '2015-12-31 05:49:44', '1'),
(8, 'Should i take a right?', '2015-12-31 05:49:45', '1'),
(9, 'Should i take a right?', '2015-12-31 05:49:45', '1'),
(10, 'Should i take a right?', '2015-12-31 05:49:46', '1'),
(11, 'Should i take a right?', '2015-12-31 05:49:46', '1'),
(12, 'Should i take a right and left?', '2015-12-31 06:06:08', '1'),
(13, 'Should i take a right and left?', '2015-12-31 06:25:28', '1'),
(14, 'sdfsd', '2015-12-31 06:47:45', '1'),
(15, 'yipieeee', '2015-12-31 06:49:50', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
