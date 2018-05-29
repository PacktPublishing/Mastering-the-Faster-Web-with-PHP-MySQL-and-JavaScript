-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2018 at 02:26 AM
-- Server version: 10.2.8-MariaDB
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(5) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `superior` int(5) DEFAULT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `last_name`, `first_name`, `superior`, `salary`) VALUES
(1, 'GUINESS', 'PENELOPE', 10, 50000),
(2, 'WAHLBERG', 'NICK', NULL, 80000),
(3, 'CHASE', 'ED', 7, 50000),
(4, 'DAVIS', 'JENNIFER', 5, 70000),
(5, 'LOLLOBRIGIDA', 'JOHNNY', 15, 75000),
(6, 'NICHOLSON', 'BETTE', 4, 50000),
(7, 'MOSTEL', 'GRACE', 4, 70000),
(8, 'JOHANSSON', 'MATTHEW', 7, 50000),
(9, 'SWANK', 'JOE', 15, 50000),
(10, 'GABLE', 'CHRISTIAN', 5, 75000),
(11, 'CAGE', 'ZERO', 10, 50000),
(12, 'BERRY', 'KARL', 10, 50000),
(13, 'WOOD', 'UMA', 2, 50000),
(14, 'BERGEN', 'VIVIEN', 2, 50000),
(15, 'OLIVIER', 'CUBA', 2, 75000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
