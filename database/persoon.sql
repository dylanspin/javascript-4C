-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 okt 2019 om 16:02
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bedrijf`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `persoon`
--

CREATE TABLE `persoon` (
  `voornaam` varchar(30) NOT NULL,
  `achternaam` varchar(30) NOT NULL,
  `straat` varchar(30) NOT NULL,
  `huisnummer` varchar(5) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `woonplaats` varchar(30) NOT NULL,
  `telefoonnummer` int(10) NOT NULL,
  `tijdToegevoegd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `persoon`
--

INSERT INTO `persoon` (`voornaam`, `achternaam`, `straat`, `huisnummer`, `postcode`, `woonplaats`, `telefoonnummer`, `tijdToegevoegd`, `id`) VALUES
('Dylan', 'spin', 'veenakkers', '50', '9511TA', 'Gieterveen', 651848484, '2019-10-16 11:00:38', 1),
('Bono', 'Spin', 'veenakkers', '50', '9511TA', 'Gieterveen', 651844209, '2019-10-17 07:09:47', 2),
('Kevin', 'Blank', 'ergens', '30', '9332PA', 'Assen', 651869693, '2019-10-16 11:02:51', 3),
('JayJay', 'sasan', 'ergens', '10', '5885PA', 'Assen', 654206991, '2019-10-16 11:02:56', 4),
('Dylan', 'spin', 'Veenakkers', '50', '9511 TA', 'gieterveen', 648680501, '2019-10-18 14:02:19', 5),
('Dylan', 'spin', 'Veenakkers', '50', '9511 TA', 'gieterveen', 648680501, '2019-10-18 14:02:25', 6),
('Michel', 'Gerding', 'Ergens', '65', '1660TI', 'Groningen', 648680501, '2019-10-18 14:02:30', 7),
('Dylan', 'spin', 'Veenakkers', '30', '9511 TA', 'gieterveen', 648680501, '2019-10-18 14:02:34', 8);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `persoon`
--
ALTER TABLE `persoon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `persoon`
--
ALTER TABLE `persoon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
