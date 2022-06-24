-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 11:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `nophone` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `comments` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `fullname`, `nophone`, `date`, `time`, `comments`, `status`, `action`) VALUES
(1, 'Muhammad Khairul Akmal', '0123456789', '2021-10-11', '12:00:00', 'Hair Styling', 'done', 'done'),
(2, 'Muhammad Nur Aidil Adha', '0199999999', '2021-10-12', '03:00:00', 'Shaving', 'submitted', 'pending'),
(3, 'Mohammad Iskandar', '0188888888', '2021-11-03', '05:00:00', 'Shaving', 'done', 'done'),
(4, 'Muhammad Deenal Afnan', '0177777777', '2021-10-09', '03:00:00', 'Face Masking', 'done', 'done'),
(6, 'Muhammad Alif Zikri', '0144444444', '2021-10-08', '07:00:00', 'Face Masking', 'submitted', 'pending'),
(18, 'Muhammad Harith Hazim', '0155555555', '2021-11-19', '17:30:00', 'Hair Styling', 'declined', 'pending'),
(21, 'Muhammad Ali Abu', '0166666666', '2021-11-22', '15:20:00', 'Hair Styling', 'approved', 'pending'),
(23, 'Muhammad Alif Fahmi', '0133333333', '2021-11-23', '16:00:00', 'Hair Styling', 'declined', 'pending'),
(37, 'Muhammad Firdaus', '0122222222', '2021-12-06', '17:00:00', 'Hair Styling', 'done', 'done'),
(38, 'Muhammad Firdaus', '0122222222', '2021-12-06', '15:00:00', 'Hair Styling', 'declined', 'pending'),
(39, 'Muhammad Firdaus', '0122222222', '2021-12-06', '17:00:00', 'Shaving', 'declined', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `comments` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `subject`, `comments`) VALUES
(1, 'khairulakmal@gmail.com', 'Some bugs', 'U need to fix some bugs..'),
(3, 'iskandar@gmail.com', 'Need more services', 'Add more services..'),
(4, 'aidiladha@gmail.com', 'More content', 'Need more content on this website..'),
(5, 'deenalafnan@gmail.com', 'Best services', 'this barber have good services..');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nophone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nophone`, `password`) VALUES
(1, 'Khairul Akmal', '0123456789', '202cb962ac59075b964b07152d234b70'),
(2, 'Aidil Adha', '0199999999', '202cb962ac59075b964b07152d234b70'),
(3, 'Iskandar', '0188888888', '202cb962ac59075b964b07152d234b70'),
(4, 'Deenal Afnan', '0177777777', '202cb962ac59075b964b07152d234b70'),
(6, 'Alif Zikri', '0144444444', '202cb962ac59075b964b07152d234b70'),
(9, 'Harith Hazim', '0155555555', '202cb962ac59075b964b07152d234b70'),
(10, 'Ali Abu', '0166666666', '202cb962ac59075b964b07152d234b70'),
(11, 'Alif Fahmi', '0133333333', '202cb962ac59075b964b07152d234b70'),
(14, 'Firdaus', '0122222222', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
