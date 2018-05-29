-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2018 at 08:53 AM
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
-- Table structure for table `json_example`
--

CREATE TABLE `json_example` (
  `id` int(11) NOT NULL,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ;

--
-- Dumping data for table `json_example`
--

INSERT INTO `json_example` (`id`, `json`) VALUES
(1, '{\"name\": \"Nick Wahlberg\", \"roles\": [\"Administrator\", \"Power User\", \"User\", \"Guest\"], \"active\": true}'),
(2, '{\"name\": \"Penelope Guiness\", \"roles\": [\"User\", \"Guest\"], \"active\": true}'),
(3, '{\"name\": \"Ed Chase\", \"roles\": [\"User\", \"Guest\"], \"active\": false}'),
(4, '{\"name\": \"Anonymous\", \"roles\": \"Guest\", \"active\": true}');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `json_example`
--
ALTER TABLE `json_example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
