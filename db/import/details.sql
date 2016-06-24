-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2016 at 02:58 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `Name`, `Email`, `Message`, `Date`) VALUES
(1, 'Manish', 'mj@mj.com', 'Hello', '2016-01-27'),
(2, 'Satish', 'satish@mj.com', 'hi', '2016-01-25'),
(3, 'hghg', 'hghg', 'ghjgh', '2016-01-06'),
(4, 'jfghfgf', 'hgjhghj', 'jhghjg', '2016-01-14'),
(5, 'ytyty', 'ytyt', 'ytuyhjgh', '2016-01-16'),
(6, 'ererewr', 'rybg', 'hghjgjh', '2016-01-22'),
(7, 'hghjger', 'rvghf', 'vbnfgh', '2016-01-14'),
(8, 'test', 'test', 'test', '2016-01-28'),
(9, 'test1', 'test1', 'test1', '2016-01-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
