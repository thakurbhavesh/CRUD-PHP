-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 05:40 AM
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
-- Database: `ecommerce-v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_states`
--

DROP TABLE IF EXISTS `master_states`;
CREATE TABLE `master_states` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 0,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_code` int(10) UNSIGNED DEFAULT NULL,
  `short_name` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_states`
--

INSERT INTO `master_states` (`id`, `country_id`, `state`, `st_code`, `short_name`, `created_at`, `updated_at`) VALUES
(1, 100, 'Tamilnadu', 22, 'TN', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(2, 100, 'Andhra Pradesh', 1, 'AP', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(3, 100, 'Arunachal Pradesh', 2, 'AN', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(4, 100, 'Assam', 3, 'AS', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(5, 100, 'Bihar', 4, 'BH', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(6, 100, 'Tripura', 23, 'TP', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(7, 100, 'Chattisgarh', 28, 'CG', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(9, 100, 'Other', 30, 'OT', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(10, 100, 'Delhi', 26, 'DL', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(11, 100, 'Goa', 5, 'GO', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(12, 100, 'Gujrat', 6, 'GJ', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(13, 100, 'Haryana', 7, 'HR', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(14, 100, 'Himachal Pradesh', 8, 'HP', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(15, 100, 'Jammu & Kashmir', 9, 'JK', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(16, 100, 'Jharkhand', 29, 'JH', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(17, 100, 'Karnataka', 10, 'KT', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(18, 100, 'Kerala', 11, 'KL', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(19, 100, 'Lakshdweep', 31, 'LD', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(20, 100, 'Madhya Pradesh', 12, 'MP', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(21, 100, 'Maharashtra', 13, 'MH', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(22, 100, 'Manipur', 14, 'MN', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(23, 100, 'Meghalaya', 15, 'MG', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(24, 100, 'Mizoram', 16, 'MZ', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(25, 100, 'Nagaland', 17, 'NG', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(26, 100, 'Orissa', 18, 'OR', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(27, 100, 'Pondichery', 32, 'PC', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(28, 100, 'Punjab', 19, 'PJ', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(29, 100, 'Rajasthan', 20, 'RJ', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(30, 100, 'Sikkim', 21, 'SK', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(33, 100, 'Uttar Pradesh', 24, 'UP', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(34, 100, 'Uttarakhand', 27, 'UK', '2021-11-10 07:40:42', '2021-11-10 07:40:42'),
(35, 100, 'West Bengal', 25, 'WB', '2021-11-10 07:40:42', '2021-11-10 07:40:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_states`
--
ALTER TABLE `master_states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_states`
--
ALTER TABLE `master_states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
