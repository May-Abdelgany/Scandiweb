-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 02:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `SKU` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float UNSIGNED NOT NULL,
  `Size` int(10) UNSIGNED NOT NULL,
  `Weight` float UNSIGNED NOT NULL,
  `Height` float UNSIGNED NOT NULL,
  `Width` float UNSIGNED NOT NULL,
  `Length` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `SKU`, `Name`, `Price`, `Size`, `Weight`, `Height`, `Width`, `Length`) VALUES
(48, 'JVC20013', 'Acme DISC', 1, 700, 0, 0, 0, 0),
(49, 'product1', 'Acme DISC2', 2, 800, 0, 0, 0, 0),
(50, 'product2', 'Acme DISC', 3, 400, 0, 0, 0, 0),
(51, 'product3', 'Acme DISC', 5, 10000, 0, 0, 0, 0),
(52, 'TR120555', 'Chair', 40, 0, 0, 24, 45, 15),
(53, 'product4', 'Chair', 50, 0, 0, 50, 20, 15),
(54, 'product5', 'Chair', 50, 0, 0, 15, 20, 15),
(55, 'product6', 'Chair', 18, 0, 0, 15, 17, 18),
(56, 'product7', 'Chair', 20, 0, 0, 10, 10, 10),
(57, 'GGWP0007', 'War and Peace', 20, 0, 15, 0, 0, 0),
(58, 'product8', 'Acme DISC', 20, 2, 0, 0, 0, 0),
(59, 'product9', 'Chair', 20, 0, 0, 15, 15, 15),
(60, 'product11', 'War and Peace', 20, 0, 2, 0, 0, 0),
(61, 'product13', 'War and Peace', 2, 0, 2, 0, 0, 0),
(64, 'product17', 'Acme DISC', 20, 1500, 0, 0, 0, 0),
(65, 'product18', 'Chair', 20, 0, 0, 10, 10, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `SKU` (`SKU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
