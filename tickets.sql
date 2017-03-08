-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time:  8 март 2017 в 19:39
-- Версия на сървъра: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tickets`
--

-- --------------------------------------------------------

--
-- Структура на таблица `destinations`
--

CREATE TABLE `destinations` (
  `destination_id` int(11) NOT NULL,
  `destination_name` varchar(150) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `destinations`
--

INSERT INTO `destinations` (`destination_id`, `destination_name`, `date_deleted`) VALUES
(1, 'London', NULL),
(2, 'Ankara', NULL),
(3, 'Tokyo', NULL),
(4, 'New York', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `flights`
--

CREATE TABLE `flights` (
  `flight_id` int(11) NOT NULL,
  `flight_code` varchar(100) NOT NULL,
  `weekday_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `price` int(10) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `flights`
--

INSERT INTO `flights` (`flight_id`, `flight_code`, `weekday_id`, `destination_id`, `price`, `date_deleted`) VALUES
(1, 'DEUA125', 1, 1, 250, NULL),
(2, 'DELK44', 2, 1, 259, NULL),
(3, 'ERTP25', 1, 1, 750, NULL),
(4, 'RTTW89', 5, 2, 630, NULL),
(5, 'YUIN85', 3, 3, 1050, NULL),
(6, 'RRTT88', 4, 4, 1498, NULL),
(7, 'DERT85', 6, 2, 300, NULL),
(8, 'DERT99', 7, 4, 2251, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `weekdays`
--

CREATE TABLE `weekdays` (
  `weekday_id` int(11) NOT NULL,
  `weekday_name` varchar(100) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `weekdays`
--

INSERT INTO `weekdays` (`weekday_id`, `weekday_name`, `date_deleted`) VALUES
(1, 'Monday', NULL),
(2, 'Tuesday', NULL),
(3, 'Wednesday', NULL),
(4, 'Thursday', NULL),
(5, 'Friday', NULL),
(6, 'Saturday', NULL),
(7, 'Sunday', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`destination_id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flight_id`),
  ADD KEY `weekday_id` (`weekday_id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `weekdays`
--
ALTER TABLE `weekdays`
  ADD PRIMARY KEY (`weekday_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `destination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `weekdays`
--
ALTER TABLE `weekdays`
  MODIFY `weekday_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `flights`
--
ALTER TABLE `flights`
  ADD CONSTRAINT `flights_ibfk_1` FOREIGN KEY (`weekday_id`) REFERENCES `weekdays` (`weekday_id`),
  ADD CONSTRAINT `flights_ibfk_2` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`destination_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
