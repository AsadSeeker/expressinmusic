-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 15, 2023 at 03:23 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expressinmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `song_genere` varchar(55) NOT NULL,
  `user_id` int NOT NULL,
  `actual_file_name` varchar(255) NOT NULL,
  `upload_file_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `song_name`, `artist_name`, `song_genere`, `user_id`, `actual_file_name`, `upload_file_name`, `created_at`, `updated_at`) VALUES
(1, 'Huway TUm Ajnabi', 'Asad', 'Sad', 7, 'file_example_MP3_700KB.mp3', '7-1689432390.mp3', '2023-07-15 09:46:30', '2023-07-15 09:46:30'),
(2, 'Man Mial OST', 'Ahmad', 'Pop', 7, 'file_example_MP3_700KB.mp3', '7-1689432934.mp3', '2023-07-15 09:55:34', '2023-07-15 09:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(555) NOT NULL,
  `password_hash` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password_hash`, `created_at`, `updated_at`) VALUES
(1, 'Ikhlaq', 'najo@test.com', '$2y$10$lwQvfxtF7BkEefuGB1fyleSeZvgpA2DHOf6PNixurXnsRmBspCVz.', '2023-07-15 00:19:09', '2023-07-15 00:19:09'),
(2, 'Ahmad', 'ahmad@ahmad.com', '$2y$10$0IdRcrktRWbGiBXpINJWB.GnoCHoY.xn3B9UtKDQ4elqs4D1c4lmu', '2023-07-15 00:20:28', '2023-07-15 00:20:28'),
(7, 'asad', 'asad@seeker.com', '$2y$10$RH5JFFCuD7QJTVCuRtADpOBnS4FtfKng.CEb2TUVrIVXOk5ps7.5q', '2023-07-15 08:43:35', '2023-07-15 08:43:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `song_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
