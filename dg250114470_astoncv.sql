-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2026 at 03:57 PM
-- Server version: 8.0.45-0ubuntu0.22.04.1
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dg250114470_astoncv`
--

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyprogramming` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `URLlinks` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `name`, `email`, `password`, `keyprogramming`, `profile`, `education`, `URLlinks`) VALUES
(1, 'mario ortega', 'marioso@gmail.com', '$2y$12$1Ul1XkXPL5kBv7W1IpO0uu9CI1OcC/PGwbQzB5YjNWOYRXlt2JoHC', 'i do NodeJS and PHP backend development, 5 years experience in both', 'i work on a commision basis to build the best backend system for all companies based on their needs, with 5 years under my belt, i can confidently say that i will exceed any and all expectations', 'self trained', 'https://gb.linkedin.com/'),
(3, 'mark frederickson', 'eppers@outlook.com', '$2y$12$5RpGVY5I9k5i0SW7r0V7NuiaQvFdkljGOQZPPOMbSay6n8dcNzaxG', 'i do frontend web development in HTML, javascript and CSS', 'Frontend web developer experienced in making jaw dropping websites so good, the customers have to stay to explore more', 'Software and web development at Halesowen college', 'https://gb.linkedin.com/'),
(4, 'david super', 'theUltra@gaming.com', '$2y$12$tzHTtrQT29p/gHWJXSNhW.oGf6Dc6OW1j4.HSGDE0RI9IWc41LzgO', 'i primarily specialize in rust with over 5 years of experience in many libraries aswell as tauri for backend web dev', 'Rust developer with industry experience in making blazingly fast applications for top tech employers', 'masters degree at cambridge university, 3 years working at google', 'https://gb.linkedin.com/'),
(5, 'Micheal Afton', 'micheal@afton.com', '$2y$12$8jKtdqznvg.m78n9lcbl6ugc/9MroyucHwLCRUBMVfdd8iq.sNZDm', 'I do backend SQL database management primarily, expert of 10 years\r\n\r\ni manage databases with docker compose', 'backend server manager and administrator focused on making sure your customers never see a day of downtime', 'Masters degree in Server administration at University of birmingham', 'https://gb.linkedin.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
