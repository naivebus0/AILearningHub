-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 23, 2024 at 04:39 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LearningHub`
--

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `quiz_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `user_id`, `score`, `quiz_date`) VALUES
(1, 1, 2, '2024-04-12'),
(2, 1, 2, '2024-04-14'),
(3, 1, 1, '2024-04-15'),
(4, 11, 1, '2024-04-15'),
(13, 11, 2, '2024-04-16'),
(14, 1, 2, '2024-04-21'),
(15, 1, 2, '2024-04-22'),
(16, 1, 5, '2024-04-22'),
(17, 1, 4, '2024-04-22'),
(18, 1, 3, '2024-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Aatif', '$2y$10$QjQ4JxUjlunZFFcFwhlKQO4WrJaPY2brX7JlQseOT2zfyPy79Jmau'),
(2, 'Test', '$2y$10$BZXYMrbr7ewIzmr1jXhcQu9p4cHLHL00YM0MkbEcRghpwHsrFo.6e'),
(4, 'Aatif1', '$2y$10$sQmwbkaXc95eJWHNCWBnRuwmy3Nbm8jRdYLfLvIJ0XUwhEYiVXyIO'),
(6, 'Aatif new', '$2y$10$snfY3yXvjJReQ7jOU.qkqOGLq0SCehLxH8zVmyQ9Lw9dgdNNxXjY.'),
(7, 'Testing', '$2y$10$Jm0OkPQrgtJI5hmfTrqTgOU/5TWt6Ng..WyKk59AWtbQEVuwzz1FS'),
(8, 'Testing1', '$2y$10$Fgs8qtbfPtGeUBjgv1yYsulMIVJ2aqlF3WReuk0p3wU2qd/Kk00Zm'),
(9, 'Testing123', '$2y$10$Oxrl1FwhtagK6JoJuJX75egqV7U9KHWXJZEu2/rQo79NKjSVjAy4S'),
(10, 'Testing12', '$2y$10$BlIpy0kMJMYUFxJKskXvGuLbSZI9fJ2KvopBDrsVBb4OjCGycApO2'),
(11, '123', '$2y$10$s26PTCcpGQ/aMr6JIzZXCebHPQ43PbW9GBYXIc.z5cjt9PP1VwTLa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
