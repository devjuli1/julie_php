-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2023 at 12:36 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liste_des_apprenants`
--

-- --------------------------------------------------------

--
-- Table structure for table `apprenant`
--

CREATE TABLE `apprenant` (
  `id` int NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `ville_origine` varchar(255) DEFAULT NULL,
  `formation_base` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `apprenant`
--

INSERT INTO `apprenant` (`id`, `nom`, `prenom`, `date_naissance`, `ville_origine`, `formation_base`) VALUES
(2, 'BONKOUGOU', ' Ulrich', '2018-06-28', ' POA', 'informatique'),
(3, 'SO', 'Anatou', '2020-06-03', 'Latodin', ' histoire'),
(4, 'MIHIN', 'Hugues', '2023-06-13', 'wengdo', 'developpeur'),
(5, 'ZOROME ', 'Faozia', '2023-06-28', 'LEO', 'SEG'),
(6, 'KONFO', 'Abou', '2023-06-14', 'Titao', 'GRH'),
(7, 'DAMIBA', 'Romaric', '2023-06-15', 'koudougou', 'enseignement'),
(8, 'GUELA', 'BOUCANTIER', '2023-06-06', 'kdg', 'anglais');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
