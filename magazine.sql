-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 25 mrt 2022 om 22:29
-- Serverversie: 5.7.36
-- PHP-versie: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazine`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `assortment`
--

DROP TABLE IF EXISTS `assortment`;
CREATE TABLE IF NOT EXISTS `assortment` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE latin1_bin NOT NULL,
  `total` int(10) NOT NULL,
  `outstanding` int(10) NOT NULL,
  `available` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Gegevens worden geëxporteerd voor tabel `assortment`
--

INSERT INTO `assortment` (`id`, `name`, `total`, `outstanding`, `available`) VALUES
(1, 'Schaar', 5000, 1300, 3700),
(2, 'Laptop', 23, 6, 17),
(3, 'Draadloze Muis', 32, 16, 16),
(4, 'Toetsenbord', 100, 42, 58),
(5, 'Stekkerdoos', 160, 80, 80),
(6, 'Koptelefoon', 100, 21, 79),
(7, 'USB 32GB', 263, 22, 241),
(8, 'USB-C Kabel 50cm', 59, 12, 47),
(9, 'iPhone oplader', 150, 1, 149);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product` varchar(100) COLLATE latin1_bin NOT NULL,
  `link` varchar(300) COLLATE latin1_bin NOT NULL,
  `description` varchar(300) COLLATE latin1_bin DEFAULT NULL,
  `status` enum('New','Accepted','Added') COLLATE latin1_bin NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Gegevens worden geëxporteerd voor tabel `order`
--

INSERT INTO `order` (`id`, `product`, `link`, `description`, `status`, `createdAt`, `updatedAt`) VALUES
(5, 'pen', 'www.website.com/pen', 'Een prachtige blauwe balpen', 'New', '2022-03-25 22:39:23', '2022-03-25 22:39:23'),
(6, 'pen', 'www.website.com/pen', 'Een prachtige blauwe balpen', 'New', '2022-03-25 22:54:43', '2022-03-25 22:54:43'),
(7, 'papier', 'www.papier.com/papier-product', 'Een A4&#39;tje', 'New', '2022-03-25 22:59:04', '2022-03-25 22:59:04'),
(8, 'papier', 'www.papier.com/papier-product', 'Een A4&#39;tje', 'New', '2022-03-25 23:00:41', '2022-03-25 23:00:41'),
(16, 'papier', 'www.papier.com/papier-product', 'Een A4&#39;tje', 'New', '2022-03-25 23:26:37', '2022-03-25 23:26:37'),
(17, 'Poopoo', 'www.poopie.nl/xxx', 'Lalala', 'New', '2022-03-25 23:28:12', '2022-03-25 23:28:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
