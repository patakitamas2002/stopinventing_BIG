-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Okt 10. 20:13
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `viccoldal`
--
CREATE DATABASE IF NOT EXISTS `viccoldal` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `viccoldal`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `postId` int(11) NOT NULL,
  `postTitle` varchar(200) NOT NULL,
  `joke` text NOT NULL,
  `postImage` varchar(200) NOT NULL,
  `postDate` datetime NOT NULL,
  `uploaderId` int(11) NOT NULL,
  `postType` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(5) NOT NULL,
  `pfp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `email`, `role`, `pfp`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@random', 'user', ''),
(2, 'mod', 'ad148a3ca8bd0ef3b48c52454c493ec5', 'mod@mod', 'mod', ''),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin', 'admin', '');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postId`),
  ADD KEY `FK_uploader` (`uploaderId`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `posts`
--
ALTER TABLE `posts`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_uploader` FOREIGN KEY (`uploaderId`) REFERENCES `users` (`userId`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
