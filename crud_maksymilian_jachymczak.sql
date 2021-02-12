-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Lut 2021, 19:58
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
(1, 'Mikołaj', 'Kowalski', '', ''),
(2, 'Natalia', 'Stępień', '', ''),
(3, 'Mirosław', 'Krawczyk', '', ''),
(4, 'Aleks', 'Szymczak', '', ''),
(5, 'Anastazy', 'Kwiatkowski', '', ''),
(6, 'Dorian', 'Zieliński', '', ''),
(7, 'Cezary', 'Cieślak', '', ''),
(8, 'Martin', 'Błaszczyk', '', ''),
(9, 'Karol', 'Sikorska', '', ''),
(10, 'Aleks', 'Baran', '', ''),
(11, 'Norbert', 'Borkowski', '', ''),
(12, 'Alek', 'Krupa', '', ''),
(13, 'Miłosz', 'Walczak', '', ''),
(14, 'Emanuel', 'Witkowski', '', ''),
(15, 'Kajetan', 'Stępień', '', ''),
(16, 'Zuza', 'Adamska', '', ''),
(17, 'Jowita', 'Nowak', '', ''),
(18, 'Wiktoria', 'Kozłowska', '', ''),
(19, 'Julianna', 'Jaworska', '', ''),
(20, 'Adrianna', 'Borkowska', '', ''),
(21, 'Balbina ', 'Cieślak', '', ''),
(22, 'Elżbieta', 'Baranowska', '', ''),
(23, 'Lidia', 'Borkowska', '', ''),
(24, 'Marta', 'Zielińska', '', ''),
(25, 'Antonina', 'Ziółkowska', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
