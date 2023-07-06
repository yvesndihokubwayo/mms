-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 06, 2023 at 01:12 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menteementorspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `adminID` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`adminID`)
) ENGINE=MyISAM AUTO_INCREMENT=1613912 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminID`, `email`, `password`, `registration_date`) VALUES
(1613911, 'yvesnickylirf@gmail.com', 'Yves1613911', '2023-07-06 05:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `client_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_of_message` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2023000002 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`client_id`, `name`, `email`, `subject`, `message`, `date_of_message`) VALUES
(2023000001, 'Yves NDIHOKUBWAYO', 'yndihokubwayo911@daviscollege.com', 'MM^S Testing', 'I am testing this database. I am happy it works.', '2023-07-06 07:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `mentees`
--

DROP TABLE IF EXISTS `mentees`;
CREATE TABLE IF NOT EXISTS `mentees` (
  `mentee_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mentee_reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mentee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2023000003 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mentees`
--

INSERT INTO `mentees` (`mentee_id`, `name`, `email`, `password`, `mentee_reg_date`) VALUES
(2023000001, 'Yves NDIHOKUBWAYO', 'yndihokubwayo911@daviscollege.com', '1234', '2023-07-06 09:00:07'),
(2023000002, 'Bolard Ndayishimiye', 'bolard@gmail.com', '12345678', '2023-07-06 11:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `mentees_info`
--

DROP TABLE IF EXISTS `mentees_info`;
CREATE TABLE IF NOT EXISTS `mentees_info` (
  `mentee_info_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `profile_photo_file` varchar(255) DEFAULT NULL,
  `national_id_file` varchar(255) DEFAULT NULL,
  `education_level` varchar(255) DEFAULT NULL,
  `field_of_interest` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `bio` text,
  `enrollment_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mentee_info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2023000001 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

DROP TABLE IF EXISTS `mentor`;
CREATE TABLE IF NOT EXISTS `mentor` (
  `mentor_id` int NOT NULL AUTO_INCREMENT,
  `mentor_fname` varchar(30) NOT NULL,
  `mentor_lname` varchar(30) NOT NULL,
  `mentor_gender` varchar(6) NOT NULL,
  `mentor_age` date NOT NULL,
  `mentor_phonenumber` varchar(16) NOT NULL,
  `mentor_email` varchar(40) NOT NULL,
  `mentor_username` varchar(20) NOT NULL,
  `mentor_password` varchar(40) NOT NULL,
  `mentor_location` varchar(30) NOT NULL,
  `mentor_field_of_expertise` varchar(400) NOT NULL,
  `mentor_degree` varchar(30) NOT NULL,
  `mentor_cv` varchar(30) NOT NULL,
  `mentor_national_id` int NOT NULL,
  `mentor_profile` varchar(30) NOT NULL,
  `mentor_bio` varchar(500) NOT NULL,
  `mentor_regDate` timestamp NOT NULL,
  PRIMARY KEY (`mentor_id`),
  UNIQUE KEY `mentor_email` (`mentor_email`),
  UNIQUE KEY `mentor_national_id` (`mentor_national_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

DROP TABLE IF EXISTS `mentors`;
CREATE TABLE IF NOT EXISTS `mentors` (
  `Mentor_id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Mentor_reg_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Mentor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2023000002 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`Mentor_id`, `Name`, `Email`, `Password`, `Mentor_reg_date`) VALUES
(2023000001, 'Ulrick Iteka', 'itelka@gmail.com', '1234', '2023-07-06 12:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `mentors_info`
--

DROP TABLE IF EXISTS `mentors_info`;
CREATE TABLE IF NOT EXISTS `mentors_info` (
  `mentor_info_id` int NOT NULL AUTO_INCREMENT,
  `mentor_id` int DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(10) NOT NULL,
  `diploma_degree_file` varchar(255) NOT NULL,
  `national_id_file` varchar(255) NOT NULL,
  `cv_resume_file` varchar(255) NOT NULL,
  `profile_photo_file` varchar(255) NOT NULL,
  `education_level` varchar(50) NOT NULL,
  `field_of_interest` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `bio` text,
  `enrollment_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mentor_info_id`),
  KEY `mentor_id` (`mentor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2023000001 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `subscriber_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `date_of_subscription` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`subscriber_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2023000003 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscriber_id`, `email`, `date_of_subscription`) VALUES
(2023000001, 'yvesnickylirf@gmail.com', '2023-07-06 07:33:37'),
(2023000002, 'parfait@gmail.com', '2023-07-06 07:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('mentee','mentor') NOT NULL,
  `mentee_id` int DEFAULT NULL,
  `mentor_id` int DEFAULT NULL,
  `connected_mentee_mentor` int DEFAULT '0',
  `mentee_waiting_mentor` int DEFAULT '0',
  `mentor_waiting_mentee` int DEFAULT '0',
  PRIMARY KEY (`user_id`),
  KEY `mentee_id` (`mentee_id`),
  KEY `mentor_id` (`mentor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
