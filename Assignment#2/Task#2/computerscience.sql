-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 08:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastnu`
--

-- --------------------------------------------------------

--
-- Table structure for table `computerscience`
--

CREATE TABLE `computerscience` (
  `id` int(11) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `Skills` varchar(50) NOT NULL,
  `Confirmed` char(1) NOT NULL,
  `signu_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computerscience`
--

INSERT INTO `computerscience` (`id`, `teacher`, `email`, `Skills`, `Confirmed`, `signu_date`) VALUES
(0, 'Muzamil', NULL, 'Programing', 'y', '2020-01-15'),
(1, 'A.Rehman', NULL, 'DataBases', 'y', '2017-01-15'),
(2, 'A.Aziz', NULL, 'Security', 'Y', '2017-01-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computerscience`
--
ALTER TABLE `computerscience`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
