-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 okt 2019 om 16:03
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
-- Tabelstructuur voor tabel `bedrijf_tabel`
--

CREATE TABLE `bedrijf_tabel` (
  `bedrijfsnaam` varchar(50) NOT NULL,
  `adres` varchar(30) NOT NULL,
  `woonplaats` varchar(40) NOT NULL,
  `telnr` int(9) NOT NULL,
  `num` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bedrijf_tabel`
--

INSERT INTO `bedrijf_tabel` (`bedrijfsnaam`, `adres`, `woonplaats`, `telnr`, `num`) VALUES
('Altera', 'Mistweg_45', 'Emmen', 524536987, 1),
('Mixed_media', 'Europaweg_345', 'Coevorden', 524536987, 2),
('Malware_protection', 'julianalaan_4 ', 'Emmen', 524536987, 3),
('X-mysterie', 'Megaweg_7', 'Coevorden', 524896325, 4);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bedrijf_tabel`
--
ALTER TABLE `bedrijf_tabel`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bedrijf_tabel`
--
ALTER TABLE `bedrijf_tabel`
  MODIFY `num` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
