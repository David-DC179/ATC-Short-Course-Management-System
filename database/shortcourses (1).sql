-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2022 at 07:05 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shortcourses`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
CREATE TABLE IF NOT EXISTS `batches` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `course` int NOT NULL,
  `instractor` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `finish_date` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`),
  KEY `course` (`course`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `name`, `course`, `instractor`, `start_date`, `finish_date`, `status`) VALUES
(3, 'April Batch 3', 2, 'DC ', '12-03-2022', '23-03-2022', 'active'),
(4, 'April Batch 3', 2, 'DC ', '12-03-2022', '23-03-2022', 'Complete'),
(5, 'April Batch 3', 4, 'DC ', '12-03-2022', '23-03-2022', 'active'),
(10, 'Not Assigned ', 10, 'Not Assigned ', 'Not Assigned ', 'Not Assigned ', 'Pending'),
(11, 'David-DC', 1, 'DC', '2022-05-08', '2022-05-08', 'Pending'),
(12, 'David-DC', 1, 'DC', '2022-05-08', '2022-05-08', 'Pending'),
(13, 'David-DC', 1, 'DC', '2022-05-08', '2022-05-08', 'Pending'),
(14, 'David-DC', 1, 'DC', '2022-05-08', '2022-05-08', 'Pending'),
(15, 'David-DC', 1, 'DC', '2022-05-08', '2022-05-08', 'Pending'),
(16, 'David-DC', 1, 'DC', '2022-05-08', '2022-05-08', 'Pending'),
(17, 'David-DC', 1, 'DC', '2022-05-08', '2022-05-08', 'Pending'),
(18, 'David-DC', 1, 'DC', '2022-05-08', '2022-05-08', 'Pending'),
(19, 'David-DC', 1, 'DC', '2022-05-08', '2022-05-08', 'Pending'),
(20, 'David-DC', 1, 'DC', '2022-05-08', '2022-05-08', 'active'),
(21, 'David-DC', 4, 'DC', '2022-05-08', '2022-05-08', 'Pending'),
(22, 'David-DC', 1, 'DC', '2022-06-02', '2022-06-07', 'Pending'),
(23, 'dc', 2, 'DC', '2022-06-10', '2022-06-08', 'Pending'),
(24, 'David-DC', 1, 'DC', '2022-05-15', '2022-06-07', 'Pending'),
(25, 'David-DCc', 4, 'Grand', '2022-06-08', '2022-06-11', 'Pending'),
(26, 'Anna Christopher', 1, 'Grand', '2022-06-07', '2022-06-07', 'Pending'),
(27, 'Anna Christopher', 1, 'Grand', '2022-06-07', '2022-06-07', 'Pending'),
(28, 'july', 1, 'Grand', '2022-05-31', '2022-05-15', 'Pending'),
(29, 'jull', 1, 'DC', '2022-06-07', '2022-06-08', 'Pending'),
(30, 'dc', 1, 'Grand', '2022-06-08', '2022-06-08', 'Pending'),
(31, 'dc', 1, 'Grand', '2022-05-31', '2022-05-31', 'Pending'),
(32, 'David-DC', 1, 'DC', '2022-05-30', '2022-05-23', 'active'),
(33, 'dc', 4, 'Grand', '2022-05-31', '2022-06-11', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `departiment_id` int NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deletes` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`),
  KEY `departiment_id` (`departiment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `departiment_id`, `duration`, `deletes`) VALUES
(1, 'Servers and Administration', 1, '2 weeks', 'active'),
(2, 'Computer Application', 1, '3 weeks', 'active'),
(3, 'Web Design And Development', 1, '5 weeks', 'active'),
(4, 'Driving', 7, '4 weeks', 'active'),
(10, 'Not Assigned', 10, 'Not Assigned', 'deleted'),
(11, 'Solar Energy and Installation', 4, '3 weeks', 'active'),
(12, 'Painting and decoration', 3, '2 weeks', 'deleted');

-- --------------------------------------------------------

--
-- Table structure for table `departiments`
--

DROP TABLE IF EXISTS `departiments`;
CREATE TABLE IF NOT EXISTS `departiments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `coordinator` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deletes` varchar(10) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departiments`
--

INSERT INTO `departiments` (`id`, `name`, `coordinator`, `deletes`) VALUES
(1, 'ICT Department', 'Mr Govella', 'active'),
(2, 'Administration', 'HR Manager', 'active'),
(3, 'Civil Engineering', 'Eng Philipo', 'active'),
(4, 'Electrical engineering', 'Eng Habibu', 'active'),
(5, 'Mechanical Engneering', 'Eng Ramadhan', 'active'),
(6, 'Civil Irrigation', 'Mr Magoti', 'deleted'),
(7, 'Automotive Engineering', 'Eng Philipo', 'active'),
(10, 'Not Assigned ', 'Not Assigned ', 'deleted');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

DROP TABLE IF EXISTS `instructors`;
CREATE TABLE IF NOT EXISTS `instructors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `departiment_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `departiment_id` (`departiment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `name`, `last_name`, `email`, `phone`, `departiment_id`) VALUES
(1, 'David Christopher ', 'Christopher', 'davidchristophersenior@gmail.com', '0764063426', 1),
(2, 'David Christopher ', 'Christopher', 'davidchristophersenior@gmail.com', '0764063426', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Coordinator'),
(3, 'Instructor'),
(4, 'Accountant '),
(5, 'Rector\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `marital_status` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `phonenumber` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `current_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `batch_id` int NOT NULL DEFAULT '10',
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Potential',
  `payment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`),
  KEY `batch_id` (`batch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `place_of_birth`, `nationality`, `marital_status`, `gender`, `phonenumber`, `email`, `current_address`, `batch_id`, `status`, `payment`) VALUES
(1, 'Habibu', 'Muhangwa', 'Jumanne', '08-08-8888', 'Mwanza', 'Tanzanian ', 'Married ', 'Male', '0764063426', 'habibu255@gmail.com', 'Sakina,Arusha', 3, 'Active', 'Payed'),
(3, 'David', 'Christopher', 'Christopher', '1995-09-17', 'Dar Es salaam', 'Tanzanian', 'Single', 'Male', '0764063426', 'davidchristophersenior@gmail.com', 'Sakina Arusha', 3, 'Active', 'Payed'),
(4, 'Emmanuel', 'John', 'Raphael', '2022-05-03', 'Dar Es salaam', 'Tanzanian', 'Single', 'Male', '0745854570', 'davidchristophersenior@gmail.com', 'Sakina Arusha', 10, 'Active', 'Payed'),
(5, 'Rabin', 'Hassan', 'Said', '2022-05-03', 'Dar Es salaam', 'Tanzanian', 'Single', 'Male', '0745854570', 'philipobagaya@gmail.com', 'Sakina Arusha', 10, 'Active', 'Pending'),
(6, 'Rabin', 'Hassan', 'Said', '2022-05-03', 'Dar Es salaam', 'Tanzanian', 'Single', 'Male', '0745854570', 'philipobagaya@gmail.com', 'Sakina Arusha', 10, 'Active', 'Pending'),
(7, 'Teddy', 'Hassan', 'Raphael', '2022-05-03', 'Dar Es salaam', 'Tanzanian', 'Married', 'Female', '0746766595', 'habibujumanne@gmail.com', 'Sakina Arusha', 3, 'Active', 'Pending'),
(8, 'Emmanuel', 'John', 'Raphael', '2022-05-03', 'Dar Es salaam', 'Tanzanian', 'Single', 'Male', '0745854570', 'davidchristophersenior@gmail.com', 'Sakina Arusha', 3, 'Active', 'Pending'),
(9, 'David', 'Christopher', 'Christopher', '1995-09-17', 'Dar Es salaam', 'Tanzanian', 'Single', 'Male', '0764063426', 'davidchristophersenior@gmail.com', 'Sakina Arusha', 10, 'Potential', 'Pending'),
(10, 'Anna', 'Christopher', 'Ladslaus', '2002-05-04', 'Mwanza', 'Tanzanian', 'Single', 'Female', '0745854570', 'davidchristophersenior@gmail.com', 'Sakina Arusha', 10, 'Potential', 'Pending'),
(11, 'Govella', 'Go', 'Govellamg', '2022-05-04', 'Mwanza', 'Tanzanian', 'Single', 'Male', '0745854570', 'govella@example.com', 'Sakina Arusha', 10, 'Potential', 'Pending'),
(12, 'David', 'Christopher', 'Christopher', '2022-05-04', 'Dar Es salaam', 'Tanzanian', 'Single', 'Male', '0746766595', 'dddddddd', 'dc', 10, 'Potential', 'Pending'),
(13, 'David', 'Hassan', 'Raphael', '2022-05-04', 'Dar Es salaam', 'Tanzanian', 'Single', 'Male', '0746766595', 'fff', 'Sakina Arusha', 10, 'Potential', 'Pending'),
(14, 'David', 'Christopher', 'Said', '2022-05-05', 'Dar Es salaam', 'Tanzanian', 'Married', 'Male', 'sak', 'gbbb', 'Sakina Arusha', 10, 'Potential', 'Pending'),
(15, 'David', 'Christopher', 'Hassan', '2022-05-05', 'Dar Es salaam', 'Tanzanian', 'divoced', 'Male', 'dccc', 'dd', 'Sakina Arusha', 10, 'Potential', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `departiment_id` int NOT NULL,
  `role` int NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '123',
  PRIMARY KEY (`id`),
  KEY `departiment_id` (`departiment_id`),
  KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `departiment_id`, `role`, `status`, `password`) VALUES
(1, 'David Christopher ', 'DC', 1, 1, 'Actives', '123'),
(3, 'Mathias Prosper', 'Mapro', 3, 2, 'Offline', '123'),
(4, 'Annastazia Christopher', 'AC', 2, 4, 'Actives', '123'),
(5, 'Sarah Kitundu', 'SK', 1, 2, 'Actives', '123'),
(6, 'David-DC', 'DCD', 4, 4, 'Actives', '123'),
(7, 'Philipo Bagaya', 'PB', 5, 3, 'Offline', '123'),
(8, 'David-DC', 'DCD', 3, 3, 'Offline', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batches`
--
ALTER TABLE `batches`
  ADD CONSTRAINT `batches_ibfk_1` FOREIGN KEY (`course`) REFERENCES `courses` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`departiment_id`) REFERENCES `departiments` (`id`);

--
-- Constraints for table `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_ibfk_1` FOREIGN KEY (`departiment_id`) REFERENCES `departiments` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`departiment_id`) REFERENCES `departiments` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
