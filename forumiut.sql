-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 26 Novembre 2017 à 20:26
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forumiut`
--

-- --------------------------------------------------------

--
-- Structure de la table `departement_iut`
--

CREATE TABLE `departement_iut` (
  `id_dep` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(25) NOT NULL,
  `ville` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `departement_iut`
--

INSERT INTO `departement_iut` (`id_dep`, `nom`, `ville`) VALUES
(1, 'INFO', 'Calais'),
(2, 'GEII', 'Calais'),
(3, 'GEA', 'Calais'),
(4, 'GACO', 'Saint Omer'),
(5, 'TC', 'Dunkerque'),
(6, 'GIM', 'Saint Omer'),
(7, 'BIO', 'Boulogne Sur Mer'),
(8, 'GTE', 'Dunkerque');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `dpt_user` int(11) NOT NULL,
  `prenom_user` varchar(20) NOT NULL,
  `nom_user` varchar(20) NOT NULL,
  `mail_user` varchar(50) NOT NULL,
  `pass_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `dpt_user`, `prenom_user`, `nom_user`, `mail_user`, `pass_user`) VALUES
(1, 1, 'Antoine', 'OFFROY', 'antoine@antoine.fr', '0e5091a25295e44fea9957638527301f'),
(2, 3, 'Lucas', 'Gournay', 'lucas@lucas.fr', 'dc53fc4f621c80bdc2fa0329a6123708'),
(3, 3, 'gea', 'gea', 'gea@gea.fr', '05c346d0b077584257e3b50a4b8db2f0'),
(4, 4, 'gaco', 'gaco', 'gaco@gaco.fr', 'dd2b6fba511b2ce90135501adf6f1b0f'),
(5, 5, 'TC', 'TC', 'tc@tc.fr', '5c4fefda27cfe84c3999be13e6b8608a'),
(6, 6, 'gim', 'gim', 'gim@gim.fr', 'da3e07e8edb2eaa315e8c7a7af7ad03e'),
(7, 7, 'bio', 'bio', 'bio@bio.fr', 'e5ba7590156e333ef9aa4b9616a55921'),
(8, 8, 'gte', 'gte', 'gte@gte.fr', 'b37b2584364bc47a5fcadf2da504e0d3');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `departement_iut`
--
ALTER TABLE `departement_iut`
  ADD PRIMARY KEY (`id_dep`),
  ADD UNIQUE KEY `id_dep` (`id_dep`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `departement_iut`
--
ALTER TABLE `departement_iut`
  MODIFY `id_dep` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
