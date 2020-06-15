-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 juin 2020 à 12:52
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profil` varchar(100) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `score` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `profil`, `nom`, `prenom`, `login`, `password`, `score`, `photo`) VALUES
(1, 'admin', 'sonatel', 'academy', 'admin', 'admin', '', 'sa.jpg'),
(2, 'joueur', 'joueur', 'quizz', 'joueur', 'joueur', '78', 'avatar.jpg'),
(3, 'joueur', 'dieng', 'mane', 'mane', 'mane', '98', 'avatar.jpg'),
(4, 'joueur', 'maina', 'wone', 'mai', '7b68f94205ba21d3c654e65f03f7ca4e', '129', 'avatar.jpg'),
(5, 'joueur', 'mboup', 'mouhamed', 'mm', 'mm', '19', 'avatar.jpg'),
(6, 'joueur', 'diallo', 'moctar', 'dm', 'dm', '190', 'avatar.jpg'),
(7, 'joueur', 'sembene', 'mariam', 'sm', 'sm', '90', 'avatar.jpg'),
(8, 'joueur', 'diarra', 'mame', 'diarra', 'diarra', '140', 'avatar.jpg'),
(9, 'joueur', 'sene', 'babacar', 'seneb', 'seneb', '87', 'avatar.jpg'),
(10, 'joueur', 'senegui', 'ndiaye', 'sened', 'sened', '187', 'avatar.jpg'),
(11, 'joueur', 'dial', 'mareme', 'dialma', 'dialma', '181', 'avatar.jpg'),
(12, 'joueur', 'diallo', 'celou', 'dialce', 'dialce', '59', 'avatar.jpg'),
(13, 'joueur', 'mamadou', 'fady', 'mafady', 'mafady', '99', 'avatar.jpg'),
(14, 'joueur', 'lo', 'modou', 'molo', 'molo', '199', 'avatar.jpg'),
(15, 'joueur', 'goudiaby', 'cheick', 'goud', 'goud', '179', 'avatar.jpg'),
(17, 'joueur', 'bebe', 'maelys', 'bbmael', 'bbmael', '149', 'avatar.jpg'),
(18, 'joueur', 'rangba', 'elfie', 'rose', 'rose', '249', 'avatar.jpg'),
(27, 'admin', 'rangba', 'gerry', 'rajerr', '1234', '', 'SA.JPG');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
