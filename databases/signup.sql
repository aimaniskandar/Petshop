-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2021 at 06:31 PM
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
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `House_Address` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Phone_Number` bigint NOT NULL,
  `User_password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Username`, `Email_Address`, `House_Address`, `DOB`, `Phone_Number`, `User_password`) VALUES
(1, 'aiman', 'aimaniskandar5858@gmail.com', 'Bukit bintang', '2002-03-23', 1151157560, 'abcd'),
(2, 'Pugendra', 'Pugendra@gmail.com', 'melaka city', '2002-02-16', 123456789, 'password'),
(4, 'vikneshan', 'vikneshan@gmail.com', 'Klang  city', '2002-11-23', 143456789, 'VIKICHAN'),
(13, 'sean', 'sean@gmail.com', 'Kepong', '2002-12-14', 1555123412, 'seantan123'),
(12, 'wilson', 'wilsonwong@gmail.com', 'Sarawak ', '2002-12-12', 1567891234, 'Wilsonwong'),
(14, 'jonathanjoestar', 'jonathan@gmail.com', 'STARPLATINUM', '2222-12-12', 1876541234, 'Starplatinum'),
(15, 'april', 'april@gmail.com', 'Bukit bintang', '2002-02-13', 1987651234, 'password'),
(16, 'Gen', 'Gen@gmail.com', 'melaka city', '2021-11-13', 1234567890, 'melakagen');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
