-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Lut 2021, 21:20
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `crud_maksymilian_jachymczak`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `city` varchar(30) NOT NULL,
  `fm` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `customers`
--

INSERT INTO `customers` (`id`, `name`, `surname`, `city`, `fm`) VALUES
(1, 'MIKOŁAJ', 'KOWALSKI', 'Gdańsk', 'm'),
(2, 'NATALIA', 'STĘPIEŃ', 'Wrocław', 'k'),
(3, 'MIROSłAW', 'KRAWCZYK', 'Wrocław', 'm'),
(4, 'ALEKS', 'SZYMCZAK', 'Wrocław', 'm'),
(5, 'ANASTAZY', 'KWIATKOWSKI', 'Gdańsk', 'm'),
(6, 'DORIAN', 'ZIELIŃSKI', 'Wrocław', 'm'),
(7, 'CEZARY', 'CIEŃLAK', 'Kraków', 'm'),
(8, 'MARTIN', 'BŁASZCZYK', 'Zakopane', 'm'),
(9, 'KAROL', 'SIKORSKA', 'Zakopane', 'm'),
(10, 'ALEKS', 'BARAN', 'Wrocław', 'm'),
(11, 'NORBERT', 'BORKOWSKI', 'Warszawa', 'm'),
(12, 'ALEK', 'KRUPA', 'Warszawa', 'm'),
(13, 'MIłOSZ', 'WALCZAK', 'Wrocław', 'm'),
(14, 'EMANUEL', 'WITKOWSKI', 'Kraków', 'm'),
(15, 'KAJETAN', 'STĘPIEŃ', 'Zakopane', 'm'),
(16, 'ZUZA', 'ADAMSKA', 'Gdańsk', 'k'),
(17, 'JOWITA', 'NOWAK', 'Kraków', 'k'),
(18, 'WIKTORIA', 'KOZŁOWSKA', 'Warszawa', 'k'),
(19, 'JULIANNA', 'JAWORSKA', 'Wrocław', 'k'),
(20, 'ADRIANNA', 'BORKOWSKA', 'Kraków', 'k'),
(21, 'BALBINA ', 'CIEŃLAK', 'Wrocław', 'k'),
(22, 'ELżBIETA', 'BARANOWSKA', 'Warszawa', 'k'),
(23, 'LIDIA', 'BORKOWSKA', 'Kraków', 'k'),
(24, 'MARTA', 'ZIELIŃSKA', 'Zakopane', 'k'),
(25, 'ANTONINA', 'ZIÓŁKOWSKA', 'Kraków', 'k');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
