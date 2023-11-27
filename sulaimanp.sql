-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 03:23 AM
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
-- Database: `sulaimanp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(199) NOT NULL,
  `username` varchar(199) NOT NULL,
  `email` varchar(199) NOT NULL,
  `password` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'Khadaffe Abubakar Sulaiman', 'Kcpersonalacc', 'kcpersonalacc@gmail.com', 'admin'),
(2, 'Apple Mae Dinawanao', 'Appled', 'appledinawanao@gmail.com', 'admin'),
(3, 'Alfraskhan Jose', 'Alfraskhan', 'alfraskhanjose91@gmail.com', 'admin'),
(4, 'Khadaffe Abubakar Sulaiman', 'Kcpersonalacc_Portfolio', 'kcpersonalacc@gmail.com', 'portfolio'),
(5, 'Alfraskhan Jose', 'Alfraskhan_Portfolio', 'appledinawanao@gmail.com', 'portfolio'),
(6, 'Apple Dinawanao', 'Appled_Portfolio', 'appledinawanao@gmail.com', 'portfolio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
