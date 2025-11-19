-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2025 at 01:47 AM
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
-- Database: `kneadbread_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform_data`
--

CREATE TABLE `contactform_data` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactform_data`
--

INSERT INTO `contactform_data` (`id`, `email`, `message`) VALUES
(14, 'Meljohn@gmail.com', 'Meljohn Message'),
(16, 'trial1@gmail.com', 'Hello this is jay'),
(17, 'melj.jayreyes@gmail.com', 'jay'),
(18, 'trial2@gmail.com', 'this is trial2'),
(19, 'Hello@gmail.com', 'hello ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `products` text NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_name`, `products`, `total_price`) VALUES
(33, 'jay', 'Pandesal-10₱ , Pandesal-10₱ , Ube Bread-15₱ , ', 35.00),
(34, 'Meljohn', 'Pandesal-10₱ , ', 10.00),
(35, 'Meljohn', '', 0.00),
(36, 'Meljohn', '', 0.00),
(37, 'Meljohn', '', 0.00),
(38, 'Meljohn', '', 0.00),
(39, 'Meljohn', '', 0.00),
(40, 'Meljohn', '', 0.00),
(41, 'Meljohn', '', 0.00),
(42, 'Meljohn', 'Pande Coco-5₱ , ', 5.00),
(43, 'jay', 'Ube Bread-15₱ , Ensaymada-10₱ , ', 25.00),
(44, 'jay', 'Ube Bread-15₱ , ', 15.00),
(45, 'jay', 'Ensaymada-10₱ , ', 10.00);

-- --------------------------------------------------------

--
-- Table structure for table `users_data`
--

CREATE TABLE `users_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_data`
--

INSERT INTO `users_data` (`id`, `name`, `email`, `password`) VALUES
(22, 'jay', 'jay@gmail.com', '$2y$10$S3XorPPwrf7JTInJzOU6veYqqm9S4iNGpAv2CXC0iAh5Jz1uLB3rG'),
(23, 'Meljohn', 'Meljohn@gmail.com', '$2y$10$MkYr.3fCbcGWcrWYR93E.OYf/NvV9hEQykGqIYxWPpqVzTyaLbJmO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform_data`
--
ALTER TABLE `contactform_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactform_data`
--
ALTER TABLE `contactform_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users_data`
--
ALTER TABLE `users_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
