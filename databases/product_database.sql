-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2021 at 06:26 PM
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
-- Database: `product_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

DROP TABLE IF EXISTS `product_info`;
CREATE TABLE IF NOT EXISTS `product_info` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Product_Name` text NOT NULL,
  `Product_Price` decimal(10,0) NOT NULL,
  `Type` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`Id`, `Product_Name`, `Product_Price`, `Type`) VALUES
(1, 'Royal Canin', '50', 1),
(3, 'Mazuri', '35', 1),
(5, 'Dog Treat', '45', 1),
(6, 'Hedgehog', '200', 2),
(9, 'Bengal cats', '545', 2),
(11, 'Mini Turtle', '150', 2),
(13, 'Mini House', '75', 3),
(15, 'Miacara Sito', '69', 3),
(17, 'Cat Travel bag', '80', 3),
(50, 'cat nip', '10', 0),
(55, 'cat collar', '12', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
