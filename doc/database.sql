
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 04:38 PM
-- Server version: 8.0.28
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id`            int           NOT NULL,
  `full_name_ar`  varchar(255)  NOT NULL,
  `first_name_en` varchar(255)  NOT NULL,
  `second_name_en`varchar(255)  NOT NULL,
  `third_name_en` varchar(255)  NOT NULL,
  `last_name_en`  varchar(255)  NOT NULL,
  `birth_day`     date          NOT NULL,
  `full_address`  varchar(255)  NOT NULL,
  `phone`         bigint        NOT NULL,
  `final_result`  varchar(255)  NOT NULL,
  `email`         varchar(255)  NOT NULL,
  `nationality`   tinytext      NOT  NULL,
  `class`         tinytext      NOT  NULL,
  `parent_num_id` bigint        NOT NULL,
  `parent_name`   int           NOT NULL,
  `parent_phone`  bigint        NOT NULL,
  `student_num_id`int           NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT; 
  COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CREATE TABLE `parents` (
  `id`            int           NOT NULL,
  `full_name_ar`  varchar(255)  NOT NULL,
  `first_name_en` varchar(255)  NOT NULL,
  `second_name_en`varchar(255)  NOT NULL,
  `third_name_en` varchar(255)  NOT NULL,
  `last_name_en`  varchar(255)  NOT NULL,
  `birth_day`     date          NOT NULL,
  `full_address`  varchar(255)  NOT NULL,
  `phone`         bigint        NOT NULL,
  `final_result`  varchar(255)  NOT NULL,
  `email`         varchar(255)  NOT NULL,
  `nationality`   tinytext      NOT  NULL,
  `class`         tinytext      NOT  NULL,
  `parent_num_id` bigint        NOT NULL,
  `parent_name`   int           NOT NULL,
  `parent_phone`  bigint        NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;