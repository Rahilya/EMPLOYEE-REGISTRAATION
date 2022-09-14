-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 11:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `global`
--

-- --------------------------------------------------------

--
-- Table structure for table `power`
--

CREATE TABLE `power` (
  `Date` date NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Mobile No` varchar(12) NOT NULL,
  `Permanent Address` varchar(50) NOT NULL,
  `Temporary Address` varchar(50) NOT NULL,
  `Education` varchar(50) NOT NULL,
  `Date Of Birth` date NOT NULL,
  `Pan/Aadhar No` varchar(20) NOT NULL,
  `Emergency Contact Name` varchar(20) NOT NULL,
  `Relation` varchar(20) NOT NULL,
  `Mobile Number` varchar(15) NOT NULL,
  `Medical Fitness` varchar(50) NOT NULL,
  `Work Experience` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `power`
--

INSERT INTO `power` (`Date`, `Name`, `Mobile No`, `Permanent Address`, `Temporary Address`, `Education`, `Date Of Birth`, `Pan/Aadhar No`, `Emergency Contact Name`, `Relation`, `Mobile Number`, `Medical Fitness`, `Work Experience`) VALUES
('2022-09-06', 'nilesh', '25369841', 'avytsv aygs aua ayga5181', 'atvta ga gas asgasggagsg   ag sag as 1568', 'stvs gs,wutdgwdw,, wwwgdw', '2001-08-01', '51151843515', 'xbywyxwxx', 'bwbxywx', '564984151986', 'gtwegdgwdb6t fgf6tf6fg f6ff ', 'no'),
('2022-09-06', 'vuv', '51161', 'vtv tft ifvtf 61665', 'rcryc ft fff4651', 'hbcsba', '2022-09-05', '511151598', 'cacsvvdcdsdcs', 'vvev', '5181946662', '', 'YES'),
('2022-09-30', 'nielsh', '920374', 'pune blur ridgh chya maage', 'city center', 'bca', '2022-08-01', '4562', 'ram', 'bro', '987456321', '', ''),
('2022-09-30', 'nielsh', '920374', 'pune blur ridgh chya maage', 'city center', 'bca', '2022-08-01', '4562', 'ram', 'bro', '987456321', '', 'YES'),
('2022-09-08', '', '', '', '', '', '0000-00-00', '', '', '', '', 'fitaad', ''),
('2022-09-08', 'gfh', '6581', 'ghhvygbik', 'mfctk', 'tyytk', '2022-09-05', '516851352', 'cghv', 'cjftjgv', '3156489', 'fxhfcc', 'YES'),
('2022-09-07', 'vikas', '362514897', 'vikas nagar 1452', 'jay hind nagar 36529', 'diploma', '2000-02-02', '3652148975', 'nagesh', 'bro', '3325614256', 'avgvaia', 'YES');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
