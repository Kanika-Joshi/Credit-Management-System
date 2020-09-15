-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2020 at 01:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Spark`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `from_user` varchar(50) NOT NULL,
  `to_user` varchar(50) NOT NULL,
  `Credit` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`from_user`, `to_user`, `Credit`) VALUES
('Elvina', 'Sanka', 45),
('Sanka', 'Manjaro', 30),
('Allen', 'Danny', 45);

-- --------------------------------------------------------

--
-- Table structure for table `View_users`
--

CREATE TABLE `View_users` (
  `Name` varchar(50) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Credit` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `View_users`
--

INSERT INTO `View_users` (`Name`, `Email_ID`, `Credit`) VALUES
('Allen', 'allen1user@gmail.com', 9868),
('Danny', 'danny4user@gmail.com', 20764),
('Elvina', 'elvina5user@gmail.com', 3339),
('Hana', 'Hana8user@gmail.com', 4999),
('Jesof', 'jesof7user@gmail.com', 4480),
('Kanny', 'kanny2user1@gmail.com', 2520),
('Manjaro', 'Manjaro10user@linux.com', 5530),
('Sanka', 'Sanka6user@gmail.com', 5500),
('Suzi', 'suzi3user@gmail.com', 2840),
('Zomba', 'Zomba9user@gmail.com', 8022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `View_users`
--
ALTER TABLE `View_users`
  ADD PRIMARY KEY (`Email_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
