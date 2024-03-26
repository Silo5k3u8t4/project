-- phpMyAdmin SQL Dump
-- version 5.2.1deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2024 at 05:26 AM
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
-- Database: `sps`
--

-- --------------------------------------------------------

--
-- Table structure for table `si`
--

CREATE TABLE `si` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `college` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `si`
--

INSERT INTO `si` (`user`, `pass`, `college`) VALUES
('poly', 'mti', 'poly'),
('pp', 'pp', 'mti'),
('tt', 'tt', 'mti'),
('poly', 'poly@321', 'mti'),
('lj', 'lj', 'THS'),
('ss', 'ss', 'mti'),
('jj', '123', 'mti'),
('aqil', 'aqil', 'mti'),
('MelJ', 'e7a74c6464774s', 'MTI'),
('MelJ', 'e7a74c6464774s', 'MTI'),
('ll', 'll', 'lgd'),
('Rvcrohith', '500rvc2k03', 'MTI'),
('Rvcrohith', '500rvc2k03', 'MTI'),
('Rvcrohith', '500rvc2k03', 'MTI'),
('ShamnasS', 'shamna@123', 'MTI'),
('SammyCS', 'samuelcs1002', 'MTI'),
('JoyalJJ', 'joyal@123', 'MTI'),
('AishuPS', '2685', 'MTI');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
