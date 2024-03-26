-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 02:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdat`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbms`
--

CREATE TABLE `dbms` (
  `No` int(100) NOT NULL,
  `question` varchar(1200) NOT NULL,
  `opt_A` varchar(1200) NOT NULL,
  `opt_B` varchar(1200) NOT NULL,
  `opt_C` varchar(1200) NOT NULL,
  `opt_D` varchar(1200) NOT NULL,
  `correct` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dbms`
--

INSERT INTO `dbms` (`No`, `question`, `opt_A`, `opt_B`, `opt_C`, `opt_D`, `correct`) VALUES
(1, 'What is Functional Dependency represented by?', 'Arrow sign', 'Equal sign', 'Plus sign', 'Minus sign', 'Arrow sign'),
(2, 'Which of Armstrong\'s Axioms involves a set of attributes and its subset?', 'Reflexive rule', 'Augmentation rule', 'Transitivity rule', 'All of the above', 'Reflexive rule'),
(3, 'What type of Functional Dependency always holds?', 'Non-trivial FD', 'Trivial FD', 'Completely non-trivial FD', 'None of the above', 'Trivial FD'),
(4, 'What is the first rule for a table to be in the First Normal Form (1NF)?', 'All columns should have unique names', 'It should only have single(atomic) valued attributes/columns', 'The order in which data is stored does not matter', 'Each attribute must contain only a single value from its pre-defined domain', 'It should only have single(atomic) valued attributes/columns'),
(5, 'Which of the following is NOT a content type under the web course according to 1NF?', 'HTML', 'PHP', 'ASP', 'Java', 'Java'),
(6, 'What does the Second Normal Form (2NF) require in addition to 1NF?', 'No Partial Dependency', 'Unique column names', 'Single(atomic) valued attributes/columns', 'Data stored in alphabetical order', 'No Partial Dependency'),
(7, 'What is the key and only prime key in the Student_Detail relation?', 'Stu_Name', 'City', 'Stu_ID', 'Zip', 'Stu_ID'),
(8, 'Which of the following is a condition for a table to be in BCNF?', 'It must be in 2nd Normal Form', 'It must have a primary key', 'It must be in 3rd Normal Form and every functional dependency X → Y, X should be a super Key', 'All attributes must be unique', 'It must be in 3rd Normal Form and every functional dependency X → Y, X should be a super Key'),
(9, 'What is the main advantage of a mobile database?', 'Limited access to data', 'Can only be accessed with a password', 'Can be accessed from anywhere using a mobile database', 'Requires physical connection to access data', 'Can be accessed from anywhere using a mobile database'),
(10, 'Which of the following is NOT listed as an advantage of mobile databases in the image?', 'Seamless delivery process', 'Data encryption', 'Synchronized with multiple devices', 'Very little support and maintenance', 'Very little support and maintenance'),
(11, 'What allows the transfer of data between the mobile database and the main database?', 'Mobile Data', 'Communication Link', 'Corporate Server', 'Laptop', 'Communication Link'),
(12, 'What does SQL stand for?', 'Simple Query Language', 'Structured Question Language', 'Structured Query Language', 'System Query Language', 'Structured Query Language'),
(13, 'In what year was SQL recognized by the American National Standards Institute (ANSI)?', '1986', '1987', '1990', '2000', '1990'),
(14, 'What is the main advantage of a mobile database?', 'Limited access to data', 'Can only be accessed with a password', 'Can be accessed from anywhere using a mobile database', 'Requires physical connection to access data', 'Can be accessed from anywhere using a mobile database');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbms`
--
ALTER TABLE `dbms`
  ADD PRIMARY KEY (`No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
