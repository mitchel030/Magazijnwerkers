-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 12 apr 2022 om 11:05
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
-- Tabelstructuur voor tabel `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `LoginId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) COLLATE latin1_bin NOT NULL,
  `Password` varchar(255) COLLATE latin1_bin NOT NULL,
  `Salt` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `Username` varchar(50) COLLATE latin1_bin DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1',
  `CreatedDtm` datetime NOT NULL,
  `UpdatedDtm` datetime NOT NULL,
  PRIMARY KEY (`LoginId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`LoginId`, `Email`, `Password`, `Salt`, `Username`, `IsActive`, `CreatedDtm`, `UpdatedDtm`) VALUES
(3, 'superuser@test.nl', '$2y$10$rFTt7emY1tEZ6GxXcdg7fOLl9oEMwP1pweI035YhX3bVrVlVal9YG', 'be6423edae8804837de0', 'Superuser', b'1', '2022-04-05 11:45:18', '2022-04-05 11:45:18'),
(4, 'financeadmin@test.nl', '$2y$10$rFTt7emY1tEZ6GxXcdg7fOLl9oEMwP1pweI035YhX3bVrVlVal9YG', 'be6423edae8804837de0', 'Financeadmin', b'1', '2022-04-05 11:45:18', '2022-04-05 11:45:18'),
(5, 'warehouseadmin@test.nl', '$2y$10$rFTt7emY1tEZ6GxXcdg7fOLl9oEMwP1pweI035YhX3bVrVlVal9YG', 'be6423edae8804837de0', 'Warehouseadmin', b'1', '2022-04-05 11:45:18', '2022-04-05 11:45:18'),
(6, 'student@test.nl', '$2y$10$rFTt7emY1tEZ6GxXcdg7fOLl9oEMwP1pweI035YhX3bVrVlVal9YG', 'be6423edae8804837de0', 'Student', b'1', '2022-04-05 11:45:18', '2022-04-05 11:45:18');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `loginrole`
--

DROP TABLE IF EXISTS `loginrole`;
CREATE TABLE IF NOT EXISTS `loginrole` (
  `LoginRoleId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `LoginId` int(10) NOT NULL,
  `RoleId` int(10) NOT NULL,
  `Description` varchar(200) COLLATE latin1_bin DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1',
  `CreatedDtm` datetime NOT NULL,
  `UpdatedDtm` datetime NOT NULL,
  PRIMARY KEY (`LoginRoleId`),
  KEY `FK_LoginRole_LoginId_Login` (`LoginId`),
  KEY `FK_LoginRole_RoleId_Role` (`RoleId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Gegevens worden geëxporteerd voor tabel `loginrole`
--

INSERT INTO `loginrole` (`LoginRoleId`, `LoginId`, `RoleId`, `Description`, `IsActive`, `CreatedDtm`, `UpdatedDtm`) VALUES
(1, 3, 1, NULL, b'1', '2022-04-05 15:15:35', '2022-04-05 15:15:35'),
(2, 4, 2, NULL, b'1', '2022-04-12 11:03:21', '2022-04-12 11:03:21'),
(3, 5, 3, NULL, b'1', '2022-04-12 11:04:06', '2022-04-12 11:04:06'),
(4, 6, 4, NULL, b'1', '2022-04-12 11:04:06', '2022-04-12 11:04:06');

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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `PersonId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Usernumber` varchar(10) COLLATE latin1_bin NOT NULL,
  `Gender` varchar(50) COLLATE latin1_bin NOT NULL,
  `Title` varchar(50) COLLATE latin1_bin DEFAULT NULL,
  `FirstName` varchar(50) COLLATE latin1_bin NOT NULL,
  `LastName` varchar(100) COLLATE latin1_bin NOT NULL,
  `NickName` varchar(50) COLLATE latin1_bin NOT NULL,
  `BirthDate` date NOT NULL,
  `Photo` varchar(20) COLLATE latin1_bin NOT NULL DEFAULT 'default.jpg',
  `IsActive` bit(1) NOT NULL DEFAULT b'1',
  `Description` varchar(200) COLLATE latin1_bin DEFAULT NULL,
  `CreatedDtm` datetime NOT NULL,
  `UpdatedDtm` datetime NOT NULL,
  PRIMARY KEY (`PersonId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personlogin`
--

DROP TABLE IF EXISTS `personlogin`;
CREATE TABLE IF NOT EXISTS `personlogin` (
  `PersonLoginId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `PersonId` int(10) NOT NULL,
  `LoginId` int(10) NOT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1',
  `CreatedDtm` datetime NOT NULL,
  `UpdatedDtm` datetime NOT NULL,
  PRIMARY KEY (`PersonLoginId`),
  KEY `FK_PersonLogin_PersonId_Person` (`PersonId`),
  KEY `FK_PersonLogin_LoginId_Login` (`LoginId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `request`
--

INSERT INTO `request` (`id`, `product`, `amount`, `description`, `createdAt`, `updatedAt`) VALUES
(1, '1', 1, '1', '2022-03-29 14:47:00', '2022-03-29 14:47:00'),
(2, '1', 1, '1', '2022-03-29 15:03:50', '2022-03-29 15:03:50');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `RoleId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Userrole` varchar(50) COLLATE latin1_bin NOT NULL,
  `Description` varchar(200) COLLATE latin1_bin DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1',
  `CreatedDtm` datetime NOT NULL,
  `UpdatedDtm` datetime NOT NULL,
  PRIMARY KEY (`RoleId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Gegevens worden geëxporteerd voor tabel `role`
--

INSERT INTO `role` (`RoleId`, `Userrole`, `Description`, `IsActive`, `CreatedDtm`, `UpdatedDtm`) VALUES
(1, 'superusers', 'Able to order new articles, approve orders, request articles and view the magazine', b'1', '2022-04-04 00:57:31', '2022-04-04 00:57:31'),
(2, 'financeadmins', 'Able to approve/decline orders and view the magazine', b'1', '2022-04-04 00:57:31', '2022-04-04 00:57:31'),
(3, 'warehouseadmins', 'Able to take and lend articles, view magazine and read, update and delete articles', b'1', '2022-04-04 00:57:31', '2022-04-04 00:57:31'),
(4, 'students', 'Able to request articles', b'1', '2022-04-04 00:57:31', '2022-04-04 00:57:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
