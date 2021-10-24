-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 01:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `fav_food`
--

CREATE TABLE `fav_food` (
  `phoneID` varchar(11) NOT NULL,
  `pizza` varchar(255) DEFAULT NULL,
  `pasta` varchar(255) DEFAULT NULL,
  `pap_wors` varchar(255) DEFAULT NULL,
  `chick_stir_fry` varchar(255) DEFAULT NULL,
  `beef_stir_fry` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fav_food`
--

INSERT INTO `fav_food` (`phoneID`, `pizza`, `pasta`, `pap_wors`, `chick_stir_fry`, `beef_stir_fry`, `other`) VALUES
('0721116352', 'Pizza', NULL, NULL, NULL, 'Beef stir fry', 'Spicy Chicken'),
('0723947645', 'Pizza', 'Pasta', NULL, 'Chicken stir fry', 'Beef stir fry', ''),
('0749123454', NULL, 'Pasta', NULL, 'Chicken stir fry', NULL, ''),
('0784449233', 'Pizza', 'Pasta', 'Pap and Wors', NULL, NULL, 'Grilled Steak'),
('0793337263', NULL, 'Pasta', NULL, 'Chicken stir fry', NULL, ''),
('0795559122', 'Pizza', NULL, NULL, 'Chicken stir fry', NULL, ''),
('0824449122', 'Pizza', NULL, 'Pap and Wors', NULL, 'Beef stir fry', '');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `phoneID` varchar(11) NOT NULL,
  `eat_out` int(11) DEFAULT NULL,
  `watch_movies` int(11) DEFAULT NULL,
  `watch_tv` int(11) DEFAULT NULL,
  `radio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`phoneID`, `eat_out`, `watch_movies`, `watch_tv`, `radio`) VALUES
('0721116352', 2, 3, 3, 2),
('0723947645', 3, 1, 5, 5),
('0749123454', 2, 3, 2, 2),
('0784449233', 3, 1, 5, 5),
('0793337263', 3, 2, 5, 4),
('0795559122', 2, 4, 1, 3),
('0824449122', 3, 1, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date_created` date NOT NULL,
  `age` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`lname`, `fname`, `phone`, `date_created`, `age`) VALUES
('Bapela', 'Thabiso', '0721116352', '2021-10-24', 57),
('Mahloko', 'Thato', '0723947645', '2021-10-22', 34),
('Nkosi', 'Jabulani', '0749123454', '2021-10-23', 32),
('Puane', 'Rudolph', '0784449233', '2021-10-22', 25),
('Ranko', 'Lethabo', '0793337263', '2021-10-23', 55),
('Mahlase', 'Ruddy', '0795559122', '2021-10-24', 5),
('Ronald', 'Thabiso', '0824449122', '2021-10-23', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fav_food`
--
ALTER TABLE `fav_food`
  ADD PRIMARY KEY (`phoneID`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`phoneID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
