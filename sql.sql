-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 16 mars 2018 kl 14:42
-- Serverversion: 10.1.26-MariaDB
-- PHP-version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `dawae`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `bordsbokning`
--

CREATE TABLE `bordsbokning` (
  `namn` varchar(100) DEFAULT NULL,
  `telefonnummer` bigint(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `matratter`
--

CREATE TABLE `matratter` (
  `namn` varchar(32) DEFAULT NULL,
  `pris` float DEFAULT NULL,
  `bild` varchar(32) DEFAULT NULL,
  `beskrivning` text,
  `kategori` int(8) DEFAULT NULL,
  `starkhet` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `matratter`
--

INSERT INTO `matratter` (`namn`, `pris`, `bild`, `beskrivning`, `kategori`, `starkhet`) VALUES
('Geng Pet Moo', 139, 'geng.jpg', 'FlÃ¤skfilÃ© i stark rÃ¶d thaicurry, chili, vitlÃ¶k, eggplant, fÃ¤rsk holeybasil, fÃ¤rska bambuskott och coconut cream.', 3, 3),
('Laab Moo', 165, 'laab.jpg', 'Wokad stark och syrlig hackad flÃ¤skfilÃ© med chili, vitlÃ¶k, limeblad, rÃ¶dlÃ¶k, citrongrÃ¤s, rostat ris, fÃ¤rsk mynta och koriander.', 3, 3),
('Moo Yang', 165, 'mooyang.jpg', 'Grillat flÃ¤skkÃ¶tt med stickyrice och MoonÂ´s chillipastesÃ¥s, longbeans, vitkÃ¥l, gurka och koriander.', 3, 2),
('Yam Nua', 150, 'yamnua.jpg', 'Ljummen marinerad biff med limejuice, chili-fisksÃ¥s, inlagd vitlÃ¶k, gurka, rÃ¶dlÃ¶k, tomat, thai-selleri, vÃ¥rlÃ¶k, thai-selleri och fÃ¤rsk koriander.', 2, 2),
('Tom Kha Gai', 110, 'tomkhagai.jpg', 'Kokosmjölksoppa på kycklingfilé, limejuice, galangalrot, svamp, tomat, gul lök, chillipeppar, limeblad, citrongräs & koriander.', 4, 2),
('Laab Nua', 140, 'laabnua.jpg', 'Wokad stark och syrlig hackad biff med chili, vitlök, limeblad, rödlök, citrongräs, rostat ris, färsk mynta och koriander.', 2, 3),
('Yam Taley', 150, 'yamtaley.jpg', 'Marinerade skaldjur med lime, vårlök, chili, inlagd vitlök, thai-selleri och färsk koriander.', 5, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `omdomen`
--

CREATE TABLE `omdomen` (
  `omdome` text,
  `betyg` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
