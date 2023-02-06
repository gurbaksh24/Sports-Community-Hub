-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2023 at 12:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_comm_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `email` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `booking_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`email`, `event_name`, `event_date`, `booking_date`) VALUES
('vivek@gmail.com', '', '2023-01-25', '2023-01-23'),
('vivek@gmail.com', '', '2023-01-25', '2023-01-23'),
('vivek@gmail.com', '', '2023-01-26', '2023-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `first_name`, `last_name`, `mobile`, `pass`) VALUES
('abc@ccc.com', 'a', 'b', '1123123123', '123'),
('adsa@asd.com', 'asdsa', 'asdasd', '9988223133', '123'),
('as221das@asd.com', 'asd', 'asd', '9988223133', '12'),
('asdaaas@asd.com1123', 'asd', 'asd', '9988776655', 'a'),
('asdas@asd.com1123', 'asd', 'asd', '9988776655', '123'),
('asdas@asd.com112322', 'asdas', 'asdas', '9988223133', 'aa'),
('asdas@asd.coma', 'asd', 'asd', '9988776655', '123'),
('asdas@asd1.com', 'asds', 'asda', '9988776655', 'adad'),
('asdsad@asd.com', 'asd', 'asfas', '9988223133', '11'),
('gurbakshsinghgabbi@gmail.com', 'asdsd', 'asdas', '9988776655', 'a1'),
('vivek@gmail.com', 'Vivek', 'S', '9988223133', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
