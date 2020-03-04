-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 dec 2019 om 18:22
-- Serverversie: 10.4.8-MariaDB
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vuurwerk`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vuurwerk`
--

CREATE TABLE `vuurwerk` (
  `img` varchar(100) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `art_id` int(50) NOT NULL,
  `euro` double(20,2) NOT NULL,
  `categorie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `vuurwerk`
--

INSERT INTO `vuurwerk` (`img`, `naam`, `art_id`, `euro`, `categorie`) VALUES
('../sier_img/dragoncandle.jpg', 'DragonCandle', 1, 4.99, 'sier'),
('../sier_img/facfountain.png', 'FaceFountain', 2, 6.99, 'sier'),
('../sier_img/vuurspuwers.png', 'FlameThrowers', 3, 3.99, 'sier'),
('../knal_img/ratelband.png', 'RatelBand', 4, 4.99, 'knal'),
('../knal_img/Strong_Salute.png', 'StrongSalute', 5, 12.99, 'knal'),
('../knal_img/thundermagic.png', 'ThunderMagic', 6, 29.99, 'knal');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `vuurwerk`
--
ALTER TABLE `vuurwerk`
  ADD UNIQUE KEY `art_id` (`art_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
