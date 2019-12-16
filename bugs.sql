-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 21 oct. 2019 à 10:58
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bug`
--

-- --------------------------------------------------------

--
-- Structure de la table `bugs`
--

CREATE TABLE `bugs` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `closed` tinyint(1) NOT NULL DEFAULT 0,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `bugs`
--

INSERT INTO `bugs` (`id`, `description`, `title`, `closed`, `createdAt`) VALUES
(1, 'Le formulaire ne s\'affiche pas', 'Formulaire', 0, '2019-10-17 22:00:00'),
(3, 'Le bouton ne fonctionne pas', 'Bouton', 0, '2019-10-17 22:00:00'),
(6, 'Je n\'arrive pas à me déconnecter', 'Déconnexion', 0, '2019-10-17 22:00:00'),
(7, 'Je n\'arrive pas à me connecter', 'Connexion', 0, '2019-10-17 22:00:00'),
(8, 'la page ne charge pas', 'chargement', 1, '2019-10-17 22:00:00'),
(38, 'def', 'chargement', 0, '2019-10-21 08:25:24'),
(39, 'def', 'abc', 0, '2019-10-21 08:33:45');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bugs`
--
ALTER TABLE `bugs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bugs`
--
ALTER TABLE `bugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
