-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 03:36 AM
-- Server version: 8.0.35
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `directorydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `persID` int NOT NULL,
  `persEmail` varchar(50) NOT NULL,
  `persPassword` varchar(50) NOT NULL,
  `persFName` varchar(50) NOT NULL,
  `persLName` varchar(50) NOT NULL,
  `persPhone` varchar(20) NOT NULL,
  `persOffice` varchar(100) NOT NULL,
  `persDept` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`persID`, `persEmail`, `persPassword`, `persFName`, `persLName`, `persPhone`, `persOffice`, `persDept`) VALUES
(1, 'alexbirch@uni.edu', 'ILoveCoffee123', 'Alex', 'Birch', '111-234-5678', '123 First St, Room 1', 1),
(2, 'calebdeer@uni.edu', 'orangeCats98', 'Caleb', 'Deer', '222-123-1234', '123 First St, Room 2', 1),
(3, 'emilyfiggs@uni.edu', '12dozenEggs', 'Emily', 'Figgs', '333-999-8888', '987 Second St, Room 1', 3),
(4, 'georgeheather@uni.edu', '23PinkEraser', 'George', 'Heather', '444-345-3456', '456 First St, Room 1', 2),
(5, 'isabellejones@uni.edu', 'Dave2011', 'Isabelle', 'Jones', '555-321-3213', '456 First St, Room 2', 2),
(6, 'kellylewis@uni.edu', '987SomeNumbers', 'Kelly', 'Lewis', '666-777-6767', '987 Second St, Room 2', 3),
(7, 'mirandenettles@uni.edu', 'InsecureSecurity456', 'Miranda', 'Nettles', '777-987-6543', '654 Second St, Room 1', 4),
(8, 'new@email.edu', 'StrongPassword', 'Liam', 'Johnson', '121-212-1212', '123 First St, Room 4', 1),
(9, 'email@new.edu', 'Password', 'Steve', 'Carson', '333-444-3333', '456 First St, Room 7', 2),
(10, 'email@new.edu', 'Password', 'Steve', 'Carson', '333-444-3333', '456 First St, Room 7', 2),
(11, 'email@new.edu', 'Password', 'Steve', 'Carson', '333-444-3333', '456 First St, Room 7', 2),
(12, 'email@new.edu', 'Password', 'Steve', 'Carson', '333-444-3333', '456 First St, Room 7', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`persID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `persID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
