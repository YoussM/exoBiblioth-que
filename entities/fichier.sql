-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 07 déc. 2017 à 10:58
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `author` varchar(30) NOT NULL,
  `dates` year(4) NOT NULL,
  `category` varchar(55) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `resum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `id_user`, `title`, `author`, `dates`, `category`, `availability`, `resum`) VALUES
(1, 0, 'tintin au congo', 'herge', 1980, 'bd', 1, 'azertyuiop'),
(3, 0, 'les enquetes de mr patate', 'tim burtton', 0000, 'science fiction', 1, 'azertyuiop');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
