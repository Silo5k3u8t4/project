-- phpMyAdmin SQL Dump
-- version 5.2.1deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2024 at 06:12 PM
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
-- Database: `ME`
--

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `note_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`note_link`) VALUES
('https://shrinkme.site/chem_unit_1'),
('https://shrinkme.site/chem_unit_2'),
('https://shrinkme.site/phy_unit_1'),
('https://shrinkme.site/phy_unit_2'),
('https://shrinkme.site/phy_unit_3'),
('https://shrinkme.site/phy_unit_4'),
('https://shrinkme.site/eng_unit_1'),
('https://shrinkme.site/eng_unit_2'),
('https://shrinkme.site/eng_unit_3'),
('https://shrinkme.site/eng_unit_4');

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE `sem3` (
  `note_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sem3`
--

INSERT INTO `sem3` (`note_link`) VALUES
('https://shrinkme.site/fee_unit_1'),
('https://shrinkme.site/fee_unit_2'),
('https://shrinkme.site/fee_unit_3'),
('https://shrinkme.site/fee_unit_4'),
('https://shrinkme.site/sm_unit_1'),
('https://shrinkme.site/sm_unit_2'),
('https://shrinkme.site/sm_unit_3'),
('https://shrinkme.site/sm_unit_4');

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE `sem5` (
  `note_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sem5`
--

INSERT INTO `sem5` (`note_link`) VALUES
('https://shrinkme.site/dme_unit_3'),
('https://shrinkme.site/dme_unit_4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
