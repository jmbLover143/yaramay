-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 05:17 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yaramay`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `opd` varchar(50) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `doc` varchar(50) NOT NULL,
  `uidi` varchar(50) NOT NULL,
  `no` varchar(20) NOT NULL,
  `total` varchar(100) NOT NULL,
  `sr1` varchar(50) NOT NULL,
  `sr2` varchar(50) NOT NULL,
  `sr3` varchar(50) NOT NULL,
  `sr4` varchar(50) NOT NULL,
  `sr5` varchar(50) NOT NULL,
  `sr6` varchar(50) NOT NULL,
  `sr7` varchar(50) NOT NULL,
  `sr8` varchar(50) NOT NULL,
  `sr9` varchar(50) NOT NULL,
  `sr10` varchar(50) NOT NULL,
  `sr11` varchar(50) NOT NULL,
  `sr12` varchar(50) NOT NULL,
  `sr13` varchar(50) NOT NULL,
  `item1` varchar(50) NOT NULL,
  `item2` varchar(50) NOT NULL,
  `item3` varchar(50) NOT NULL,
  `item4` varchar(50) NOT NULL,
  `item5` varchar(50) NOT NULL,
  `item6` varchar(50) NOT NULL,
  `item7` varchar(50) NOT NULL,
  `item8` varchar(50) NOT NULL,
  `item9` varchar(50) NOT NULL,
  `item10` varchar(50) NOT NULL,
  `item11` varchar(50) NOT NULL,
  `item12` varchar(50) NOT NULL,
  `item13` varchar(50) NOT NULL,
  `cost1` double NOT NULL,
  `cost2` float NOT NULL,
  `cost3` float NOT NULL,
  `cost4` double NOT NULL,
  `cost5` double NOT NULL,
  `cost6` double NOT NULL,
  `cost7` double NOT NULL,
  `cost8` double NOT NULL,
  `cost9` double NOT NULL,
  `cost10` double NOT NULL,
  `cost11` double NOT NULL,
  `cost12` double NOT NULL,
  `cost13` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`opd`, `invoice`, `name`, `age`, `doc`, `uidi`, `no`, `total`, `sr1`, `sr2`, `sr3`, `sr4`, `sr5`, `sr6`, `sr7`, `sr8`, `sr9`, `sr10`, `sr11`, `sr12`, `sr13`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`, `item7`, `item8`, `item9`, `item10`, `item11`, `item12`, `item13`, `cost1`, `cost2`, `cost3`, `cost4`, `cost5`, `cost6`, `cost7`, `cost8`, `cost9`, `cost10`, `cost11`, `cost12`, `cost13`) VALUES
('689740', '519730', 'wena', '12', 'dajon', '2121', '31314', '110', 'dad', '', '', '', '', '', '', '', '', '', '', '', '', '41414', '', '', '', '', '', '', '', '', '', '', '', '', 110, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `opd` int(50) NOT NULL,
  `shootdate` varchar(50) NOT NULL,
  `validdate` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `doc` varchar(50) NOT NULL,
  `reg` varchar(100) NOT NULL,
  `ui` varchar(50) NOT NULL,
  `no` int(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`opd`, `shootdate`, `validdate`, `name`, `age`, `sex`, `doc`, `reg`, `ui`, `no`, `time`) VALUES
(689740, '05/29/2020', '05/30/2020', 'wena', 12, 'FEMALE', 'dajon', '972308', '2121', 31314, '12:38:37pm'),
(834957, '05/29/2020', '05/30/2020', 'dede', 12, 'MALE', 'jhon', '964872', 'ds', 23134, '12:51:59pm'),
(914823, '05/30/2020', '05/30/2020', 'sample', 12, 'MALE', 'dadad', '140387', 'dad', 314, '05:09:31pm'),
(504182, '05/30/2020', '05/31/2020', 'dsad', 12, 'MALE', 'dadad', '409836', '212', 441434, '05:11:50pm'),
(684750, '05/30/2020', '05/31/2020', 'qwerty', 22, 'MALE', '12', '246870', '123', 41452, '05:15:59pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
