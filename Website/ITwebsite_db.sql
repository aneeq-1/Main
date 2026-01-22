-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2025 at 06:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ITwebsite_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Basket`
--

CREATE TABLE `Basket` (
  `Quantity` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `Game` varchar(60) NOT NULL,
  `Price` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`Game`, `Price`, `id`) VALUES
('Minecraft', 19.99, 1),
('God of War:Ragnarok', 69.99, 2),
('Marvel\'s Spider-Man: Miles Morales', 49.99, 3),
('EA Sports Fc25', 59.99, 4),
('Ghost of Tsushima', 49.99, 5),
('Gran Turismo 7', 59.99, 6),
('Elden Ring', 59.99, 7),
('Black ops 6', 69.99, 8),
('Hogwarts Legacy', 59.99, 9),
('Rust', 49.99, 10),
('Doom eternal', 39.99, 11),
('Forza horizon', 59.99, 12),
('Sea of thieves', 39.99, 13),
('Super Smash Bros Ultimate', 59.99, 14),
('It takes two', 59.99, 15),
('Animal Crossing: New Horizon', 49.99, 16),
('The Legend of Zelda: Echoes of Wisdom', 69.99, 17),
('Pokémon Legends: Arceus', 49.99, 18),
('Kirby', 59.99, 19),
('Final Fantasy VII remake intergrade', 49.99, 20),
('Lost Ark', 13.99, 21);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Email` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Username` varchar(60) NOT NULL,
  `Role` varchar(20) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Email`, `Password`, `Username`, `Role`) VALUES
('user123@gmail.com', '12345', 'User123', 'USER'),
('Admin123@gmail.com', '12345', 'Admin123', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
