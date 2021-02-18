-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 18 fév. 2021 à 23:18
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `my_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `etu` int(11) NOT NULL,
  `dbase` varchar(50) NOT NULL,
  `webdev` varchar(50) NOT NULL,
  `glpi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `etu`, `dbase`, `webdev`, `glpi`) VALUES
(1, 3, '12', '13', '14'),
(2, 5, '10', '11', '20'),
(3, 6, '14', '18', '11'),
(4, 7, '10', '11', '12'),
(5, 8, '9.5', '19', '18'),
(6, 9, '11.5', '13', '14'),
(7, 10, '11', '19', '17.5');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(250) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `name`) VALUES
(4, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'rafik hammas'),
(5, 'user', 'rami', '7b93bc9e19f7023489bb784cc364d67b', 'rami'),
(7, 'user', 'mohamed', '309cd3800aacbd003ac36199fa537295', 'mohamed'),
(8, 'user', 'kais', 'd560e5a9a01291a6983b538428f216aa', 'kais'),
(9, 'user', 'walid', '992054a407ee4c3978ace4088908acf4', 'walid'),
(10, 'user', 'haythem', '7bb2d178b598612e12ac439d5e219303', 'haythem');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_etu` (`etu`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
