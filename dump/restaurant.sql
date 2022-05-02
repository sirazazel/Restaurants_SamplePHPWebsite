-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 28, 2022 at 02:32 PM
-- Server version: 8.0.28
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `phone` int NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `phone`, `address`, `description`, `picture`) VALUES
(1, 'Japo Santa Catalina\r\n', 971738321, 'Sant Magí, 25 07013\r\n', 'Sabores y texturas japonesas cuidadosamente fusionadas para satisfacer los paladares más exigentes.971738321\r\n', './../resources/japosc.png\r\n'),
(2, 'Enoteca 1918\r\n', 605939063, 'La Fàbrica, 3 07013\r\n', 'Enoteca1918 es la nueva propuesta en Palma que combina a la perfección la oferta gastronómica y enológica. Un lugar para degustar una selecta carta de tapas y platos gourmet y de autor, acompañados por el vino que potencia y nos hace descubrir todos los aromas y sabores de nuestro plato. Un espacio para compartir, disfrutar y aprender nuevas experiencias.\r\n', './../resources/enoteca.png\r\n\r\n'),
(3, 'Cannibal Cantina Bistro\r\n', 662542089, 'Sant Antoni, 8 07002\r\n', 'Este restaurante te ofrece platos de nuestra cocina mediterránea que pueden ir acompañadas de un sensacional vino.', './../resources/cannibal.png\r\n'),
(4, 'Izakaya Mallorca\r\n', 871037633, 'd\'Espartero, 15 07014\r\n', 'Grupo Izakaya compuesto por ‘Izakaya Taberna Japonesa’ expecializado en sushi y cocina tradicional japonesa, y ‘Ramen Bar Izakaya’ donde podrás disfrutar del auténtico Ramen Japonés.\r\n', './../resources/izakaya.png\r\n'),
(5, 'Fabrik\r\n', 610890621, 'Sant Magí 84, 07013\r\n', 'Ven a disfrutar de nuestras preparaciones caseras. Recetas mediterráneas elaboradas con productos locales.\r\n', './../resources/fabrik.png\r\n');
COMMIT;

CREATE TABLE `Users` (
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `surname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`username`, `name`, `surname`, `email`, `password`) VALUES
('admin', 'Administrator', '', 'admin@iesfbmoll.org', '3f28c9e5f49efe2ce08c056ec6ecc5d1'),
('jsmith', 'John', 'Smith', 'jsmith@iesfbmoll.org', '25d55ad283ºaa400af464c76d713c07ad'),
('pjohnson', 'Peter', 'Johnson', 'pjohnson@iesfbmoll.org', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
