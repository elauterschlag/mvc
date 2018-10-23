-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Okt 2018 um 22:33
-- Server-Version: 10.1.36-MariaDB
-- PHP-Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mvc`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `lastname` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mail` varchar(80) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(80) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `acl` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `deleted` tinyint(4) DEFAULT '0',
  `last_login` timestamp NULL DEFAULT NULL,
  `secretkey` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `secretkey_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `mail`, `password`, `acl`, `deleted`, `last_login`, `secretkey`, `secretkey_time`) VALUES
(1, 'Enrico', 'Lauterschlag', 'enrico.lauterschlag@reiseland.de', '$2y$10$cv9.AjyVdDXOsxIPeQ1U9eoq0yp5HHNgUsmJwP5gcprfYBYdlYY5e', NULL, 0, '2018-04-30 09:53:37', '08714a21dabc9dfebb52fd615fe7f4e4', '2018-02-20 16:50:11'),
(2, 'Andree', 'Meinecke', 'andree.meinecke@reiseland.de', '$2y$10$cv9.AjyVdDXOsxIPeQ1U9eoq0yp5HHNgUsmJwP5gcprfYBYdlYY5e', NULL, 0, '2018-02-14 14:59:20', NULL, NULL),
(16, 'Nicole', 'Junker', 'nicole.junker@reiseland.de', '$2y$10$cv9.AjyVdDXOsxIPeQ1U9eoq0yp5HHNgUsmJwP5gcprfYBYdlYY5e', NULL, 0, '2018-04-24 17:36:28', NULL, NULL),
(25, 'Laif', 'Lange', 'laif.lange@reiseland.de', '$2y$10$Hi5Os/MVmtdAi65jvapYvecONO5C4BZNUM4SpAXJk/ee.QVAJyM2q', NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_sessions`
--

CREATE TABLE `user_sessions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `user_agent` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT für Tabelle `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
