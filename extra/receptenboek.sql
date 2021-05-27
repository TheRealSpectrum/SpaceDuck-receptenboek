-- phpMyAdmin SQL Dump
-- version 5.1.0-3.fc33
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2021 at 08:33 AM
-- Server version: 8.0.25
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receptenboek`
--

-- --------------------------------------------------------

--
-- Table structure for table `recepten`
--

CREATE TABLE `recepten` (
  `id` int NOT NULL,
  `naam_maker` varchar(100) NOT NULL,
  `naam_recept` varchar(100) NOT NULL,
  `naam_categorie` varchar(100) NOT NULL,
  `aantal_personen` int NOT NULL,
  `ingredienten` text NOT NULL,
  `recept` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recepten`
--

INSERT INTO `recepten` (`id`, `naam_maker`, `naam_recept`, `naam_categorie`, `aantal_personen`, `ingredienten`, `recept`) VALUES
(1, 'Patricia', 'test', 'test', 3, 'test', 'test'),
(2, 'Patricia', 'test', 'test', 3, 'test', 'test'),
(3, 'Patricia', 'test2', 'test2', 4, 'test2', 'test2'),
(4, 'Patricia', 'Test3', 'lunch', 5, 'Test3', 'Test3, bladibladibla'),
(5, 'djgfhdg', 'gdfjsdgh', 'fgdkjfg', 6, 'dfmg', 'dgfmdnfg jd  jgjdfgkjdfg jkdfgjfl'),
(6, 'Patricia', 'Boterham kaas', 'Lunch', 1, 'brood, boter, kaas', 'Neem een boterham, smeer hier boter op naar smaak. Kwak er een plak kaas op en vouw dubbel. Voila.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recepten`
--
ALTER TABLE `recepten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recepten`
--
ALTER TABLE `recepten`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
