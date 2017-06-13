-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Úte 13. čen 2017, 10:37
-- Verze serveru: 5.7.11
-- Verze PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `howlongtobeat`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `consoles`
--

CREATE TABLE `consoles` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin2_czech_cs NOT NULL,
  `year` date NOT NULL,
  `dev_id` int(11) NOT NULL,
  `ver` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_czech_cs;

-- --------------------------------------------------------

--
-- Struktura tabulky `developers`
--

CREATE TABLE `developers` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin2_czech_cs NOT NULL,
  `year` date NOT NULL,
  `residence` varchar(50) COLLATE latin2_czech_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_czech_cs;

-- --------------------------------------------------------

--
-- Struktura tabulky `games`
--

CREATE TABLE `games` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin2_czech_cs NOT NULL,
  `dev_id` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `price` int(5) NOT NULL,
  `rating` int(11) NOT NULL,
  `cons_id` int(11) NOT NULL,
  `description` varchar(150) COLLATE latin2_czech_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_czech_cs;

--
-- Vypisuji data pro tabulku `games`
--

INSERT INTO `games` (`ID`, `name`, `dev_id`, `year`, `price`, `rating`, `cons_id`, `description`) VALUES
(1, 'Persona 5', 1, 1998, 1200, 10, 1, 'Persona 5 marks the return of the award-winning.');

-- --------------------------------------------------------

--
-- Struktura tabulky `subscriptions`
--

CREATE TABLE `subscriptions` (
  `ID` int(11) NOT NULL,
  `gamer_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `gametime` int(11) NOT NULL,
  `comment` varchar(1000) COLLATE latin2_czech_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_czech_cs;

--
-- Vypisuji data pro tabulku `subscriptions`
--

INSERT INTO `subscriptions` (`ID`, `gamer_id`, `game_id`, `gametime`, `comment`) VALUES
(1, 1, 1, 12, 'Bylo to super jako muj zivot');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(11) COLLATE latin2_czech_cs NOT NULL,
  `passwd` varchar(11) COLLATE latin2_czech_cs NOT NULL,
  `moto` varchar(250) COLLATE latin2_czech_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_czech_cs;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`ID`, `name`, `passwd`, `moto`) VALUES
(1, 'Casey', 'ahoj', 'Mam rad vlaky vic nez php.'),
(2, 'Petr', 'yeeej', 'Muj Metin ucet je nejsilnejsi ze vsech!');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `consoles`
--
ALTER TABLE `consoles`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `consoles`
--
ALTER TABLE `consoles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pro tabulku `developers`
--
ALTER TABLE `developers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pro tabulku `games`
--
ALTER TABLE `games`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pro tabulku `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
