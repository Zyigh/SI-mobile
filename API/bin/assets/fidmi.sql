-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 16 jan. 2018 à 22:24
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données :  `fidmi`
--
/*
CREATE DATABASE IF NOT EXISTS `fidmi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `fidmi`;
*/
-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `inscriptionDeadline` timestamp(6) NULL DEFAULT NULL,
  `user` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maxGuests` int(11) NOT NULL,
  `file` int(11) NOT NULL,
  PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fromUser` int(11) UNSIGNED NOT NULL,
  `toUser` int(11) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ranking`
--

CREATE TABLE IF NOT EXISTS `ranking` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` int(11) UNSIGNED NOT NULL,
  `score` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `registered`
--

CREATE TABLE IF NOT EXISTS `registered` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` int(11) UNSIGNED NOT NULL,
  `event` int(11) UNSIGNED NOT NULL,
  `guestsNum` int(11) UNSIGNED NOT NULL,
  `validated` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tagsEvent`
--

CREATE TABLE IF NOT EXISTS `tagsEvent` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag` int(11) UNSIGNED NOT NULL,
  `event` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` int(11) UNSIGNED NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whishlist` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*
ALTER TABLE `event`
  ADD FOREIGN KEY (`user`) REFERENCES `user`(`id`);
ALTER TABLE `event`
  ADD FOREIGN KEY (`file`) REFERENCES `file`(`id`);
ALTER TABLE `message`
  ADD FOREIGN KEY (`fromUser`) REFERENCES `user`(`id`);
ALTER TABLE `message`
  ADD FOREIGN KEY (`toUser`) REFERENCES `user`(`id`);
ALTER TABLE `ranking`
  ADD FOREIGN KEY (`user`) REFERENCES `user`(`id`);
ALTER TABLE `registered`
  ADD FOREIGN KEY (`user`) REFERENCES `user`(`id`);
ALTER TABLE `registered`
  ADD FOREIGN KEY (`event`) REFERENCES `event`(`id`);
ALTER TABLE `tagsEvent`
  ADD FOREIGN KEY (`tag`) REFERENCES `tag`(`id`);
ALTER TABLE `tagsEvent`
  ADD FOREIGN KEY (`event`) REFERENCES `event`(`id`);
ALTER TABLE `user`
  ADD FOREIGN KEY (`location`) REFERENCES `location`(`id`);
ALTER TABLE `user`
  ADD FOREIGN KEY (`file`) REFERENCES `file`(`id`);
*/
COMMIT;
