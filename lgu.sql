-- phpMyAdmin SQL Dump
-- version 5.2.1deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2024 at 09:05 AM
-- Server version: 10.11.6-MariaDB-2
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lgu`
--

-- --------------------------------------------------------

--
-- Table structure for table `loggers`
--

CREATE TABLE `loggers` (
  `username` varchar(20) NOT NULL,
  `no_of_times` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loggers`
--

INSERT INTO `loggers` (`username`, `no_of_times`) VALUES
('pp', 1),
('tt', 1),
('pp', 1),
('pp', 1),
('pp', 1),
('pp', 1),
('pp', 1),
('pp', 1),
('pp', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('Rvcrohith', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1),
('MelJ', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
