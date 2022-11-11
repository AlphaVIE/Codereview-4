-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 11. Nov 2022 um 18:44
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `BE17_CR4_Arman_BigLibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `items`
--

CREATE TABLE `items` (
  `item_id` int(8) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `isbn` varchar(60) NOT NULL,
  `short_description` varchar(550) NOT NULL,
  `type` varchar(10) NOT NULL,
  `creator_first_name` varchar(60) NOT NULL,
  `creator_last_name` varchar(60) NOT NULL,
  `publisher_name` varchar(150) NOT NULL,
  `publish_date` date NOT NULL,
  `availability` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `items`
--

INSERT INTO `items` (`item_id`, `title`, `image`, `isbn`, `short_description`, `type`, `creator_first_name`, `creator_last_name`, `publisher_name`, `publish_date`, `availability`) VALUES
(1, 'Schnell denken, langsam denken', 'https://images.thalia.media/03/-/3404ef48eb9d4bd0af7ce05240d05287/schnelles-denken-langsames-denken-taschenbuch-daniel-kahneman.jpeg', '9780141033570', 'Das Werk fasst die teils Jahrzehnte lange Forschung von Kahnemann zusammen.', 'Book', 'Daniel', 'Kahnemann', 'Penguin Books', '2011-10-25', b'1'),
(2, 'Rich Dad, Poor Dad', 'https://images.thalia.media/00/-/b709b0cd8fe14e59b30c4b20645078ee/rich-dad-poor-dad-taschenbuch-robert-kiyosaki.jpeg', '9783898798822', 'Finanzielle Bildung auf einfache Art und Weise erklärt.', 'Book', 'Robert', 'Kiyosaki', 'Warner Books', '2000-04-01', b'1'),
(3, 'American Psycho', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSJkc5QBoCplF1PKcJyX4Ag0tfDuoXBbolfkYDfCYGGaeYNpXtc', '9780330484770', 'A story about a narcisstic Investmentbanker.', 'DVD', 'Mary', 'Herron', 'Muse Productions', '2000-01-21', b'0'),
(4, 'Anthrazit', 'https://upload.wikimedia.org/wikipedia/en/c/c9/Raf_Camora_-_Anthrazit_Album_Cover.jpg', '00000', 'One of RAF Camoras most successful solo albums', 'CD', 'Raphael', 'Ragucci', 'Indipendenza', '2017-08-25', b'1'),
(5, 'Zukunft', 'https://i.scdn.co/image/ab67616d0000b2738c38746d58174583887beafb', '00000', 'RAF Camoras comeback album', 'CD', 'Raphael', 'Ragucci', 'Indipendenza', '2021-07-16', b'1'),
(6, 'I want to eat your pancreas', 'https://m.media-amazon.com/images/M/MV5BNDM4MWE3NGQtODlkYS00NWU5LTg3ZjMtMTEyNjljOWI4NWIxXkEyXkFqcGdeQXVyNzkzODk2Mzc@._V1_.jpg', '00000', 'The saddest anime film ever made', 'DVD', 'Shinichiro', 'Ushijima', 'VOLN', '2018-09-01', b'1'),
(7, 'Your name', 'https://de.web.img3.acsta.net/pictures/17/10/20/12/08/5045213.jpg', '00000', 'The most successful anime film ever made', 'DVD', 'Makoto', 'Shinkai', 'CoMix Wave Films', '2016-08-26', b'1'),
(8, 'Reelle vie 2.0', 'https://i.scdn.co/image/ab67616d0000b2738e25fd660a6b4693cb0cadbb', '00000', 'The life of Maes', 'CD', 'Walid', 'Georgey', 'LDS', '2018-03-02', b'0'),
(9, 'Zéro Code', 'https://m.media-amazon.com/images/I/71utq518SFL._SL1500_.jpg', '00000', 'The breakthrough album of MRC', 'CD', 'Muhammed', 'Cil', 'Melek Records', '2018-06-29', b'1');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
