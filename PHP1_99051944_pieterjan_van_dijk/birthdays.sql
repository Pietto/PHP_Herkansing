-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 25 jun 2019 om 10:33
-- Serverversie: 5.6.37
-- PHP-versie: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `birthdays`
--

CREATE TABLE IF NOT EXISTS `birthdays` (
  `id` int(11) NOT NULL,
  `person` varchar(255) NOT NULL,
  `day` tinyint(4) NOT NULL,
  `month` tinyint(4) NOT NULL,
  `year` smallint(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `birthdays`
--

INSERT INTO `birthdays` (`id`, `person`, `day`, `month`, `year`) VALUES
(7, 'Miroslav', 17, 7, 2010),
(8, 'Vesela', 14, 5, 1992),
(10, 'Mila', 25, 5, 1993),
(11, 'Goran', 19, 12, 2006),
(12, 'Brana', 7, 3, 1967),
(13, 'Darko', 4, 6, 1973),
(14, 'Dragoslav', 13, 6, 1982),
(16, 'Boris', 19, 4, 2001),
(17, 'Ludmila', 5, 5, 1969),
(18, 'Stanibor', 14, 5, 1999),
(55, 'de kaasboer', 2, 1, 2001),
(59, 'gekke henkie', 3, 12, 2000),
(60, 'l0zer', 5, 6, 2000);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `birthdays`
--
ALTER TABLE `birthdays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `birthdays`
--
ALTER TABLE `birthdays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
