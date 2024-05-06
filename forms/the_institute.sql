-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 06:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `name_with_initials` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `nic`, `full_name`, `name_with_initials`, `age`, `email`, `permanent_address`, `contact_number`, `gender`, `subjects`, `grade`) VALUES
(1, '200111504153', 'Haddagoda Ralalage Don Lochana Maleesha ThilakarathneH.R.D.L.M.Thilakarathne', '23', 0, 'No : 47 , Medagammedda , Walala , Menikhinna, Kandy, 20170', '0713498849', 'on', '', '10', NULL),
(2, '200111504153', 'Haddagoda Ralalage Don Lochana Maleesha ThilakarathneH.R.D.L.M.Thilakarathne', '23', 0, 'No : 47 , Medagammedda , Walala , Menikhinna, Kandy, 20170', '0713498849', 'on', '', '10', NULL),
(3, '120934875674', 'jkjkljlsak.l.f.ffjskfjs', '23', 0, 'dkljakdjlfsfksdf', '0713498849', 'on', '', '10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
