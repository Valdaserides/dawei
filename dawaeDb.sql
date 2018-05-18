-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 18 maj 2018 kl 09:56
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
-- Tabellstruktur `bokning`
--

CREATE TABLE `bokning` (
  `bokning_id` int(8) NOT NULL,
  `bokning_bord` int(8) DEFAULT NULL,
  `bokning_tid` varchar(32) DEFAULT NULL,
  `bokning_datum` varchar(32) DEFAULT NULL,
  `bokning_antal` int(8) DEFAULT NULL,
  `bokning_namn` varchar(50) DEFAULT NULL,
  `bokning_extra` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `bokning`
--

INSERT INTO `bokning` (`bokning_id`, `bokning_bord`, `bokning_tid`, `bokning_datum`, `bokning_antal`, `bokning_namn`, `bokning_extra`) VALUES
(1, 1, '18:00', '2018-04-29', 5, 'Max', ''),
(2, 1, '18:00', '2018-04-28', 6, 'HELLO', ''),
(3, 1, '19:30', '2018-04-26', 6, 'Max', 'Vi har en rullstol'),
(4, 1, '18:00', '2018-05-24', 6, 'Max', ''),
(5, 1, '16:30', '2018-05-06', 5, 'Max', ''),
(6, 1, '16:30', '2000-05-06', 3, 'Max', '');

-- --------------------------------------------------------

--
-- Tabellstruktur `bord`
--

CREATE TABLE `bord` (
  `bord_id` int(8) NOT NULL,
  `bord_platser` int(8) DEFAULT '6'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `bord`
--

INSERT INTO `bord` (`bord_id`, `bord_platser`) VALUES
(1, 8),
(2, 8),
(3, 5),
(4, 6),
(5, 3),
(6, 5);

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
('Yam Taley', 150, 'yamtaley.jpg', 'Marinerade skaldjur med lime, vårlök, chili, inlagd vitlök, thai-selleri och färsk koriander.', 5, 1),
('Pad Thai', 119, 'padthai.jpg', 'Traditionell risnudelwok i tamarindsås på fläskfilé, ägg, tofu, lime, rödlök, nötter, riven morot, teblad och böngroddar.', 3, 1),
('Pad Pet Nua', 139, 'padpetnua.jpg', 'Biff i stark röd thaicurry med katchairot, longbeans, färsk grönpeppar, bambuskott, eggplant, chili, vitlök och koriander.', 2, 2),
('Gai Pad', 139, 'gaipadmedmamong.jpg', 'Wokad kycklingfilé i ostronsås med cashewnötter, vitlök, gul lök, vårlök, sweet basil, chiliolja, ananas & paprika.', 1, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `omdomen`
--

CREATE TABLE `omdomen` (
  `omdome` text,
  `betyg` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `omdomen`
--

INSERT INTO `omdomen` (`omdome`, `betyg`) VALUES
('Bra restaurang', 4),
('Bra personal', 5),
('Bra restaurang Bra restaurang Bra restaurang Bra restaurang ', 3),
('sdfsdf', 5);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `bokning`
--
ALTER TABLE `bokning`
  ADD PRIMARY KEY (`bokning_id`),
  ADD KEY `bokning_bord` (`bokning_bord`);

--
-- Index för tabell `bord`
--
ALTER TABLE `bord`
  ADD PRIMARY KEY (`bord_id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `bokning`
--
ALTER TABLE `bokning`
  MODIFY `bokning_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT för tabell `bord`
--
ALTER TABLE `bord`
  MODIFY `bord_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `bokning`
--
ALTER TABLE `bokning`
  ADD CONSTRAINT `bokning_ibfk_1` FOREIGN KEY (`bokning_bord`) REFERENCES `bord` (`bord_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
