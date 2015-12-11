-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2015 at 08:07 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `mtype` int(2) NOT NULL COMMENT '0 ->not member, 1 -> member, 2-> cs member',
  `mid` int(10) NOT NULL,
  `section_id` int(2) NOT NULL,
  `college` varchar(50) NOT NULL,
  `food` int(1) NOT NULL DEFAULT '0',
  `acco1` int(1) NOT NULL DEFAULT '0',
  `acco2` int(1) NOT NULL DEFAULT '0',
  `acco3` int(1) NOT NULL DEFAULT '0',
  `payment_status` int(2) NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `name` varchar(30) NOT NULL,
  `mid` varchar(30) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `sec` varchar(30) NOT NULL,
  `mem` varchar(3) NOT NULL,
  `college` varchar(30) NOT NULL,
  `whatsapp` varchar(3) NOT NULL,
  `hrs` varchar(5) NOT NULL,
  `exp` varchar(1000) NOT NULL,
  `des` varchar(10) NOT NULL,
  `pub` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
