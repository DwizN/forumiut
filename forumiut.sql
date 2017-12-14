-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Jeu 14 Décembre 2017 à 09:59
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

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
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `id_eleve` int(11) NOT NULL,
  `nom_eleve` varchar(30) NOT NULL,
  `prenom_eleve` varchar(30) NOT NULL,
  `dn_eleve` int(11) NOT NULL,
  `mail_eleve` varchar(70) NOT NULL,
  `sit_eleve` varchar(20) NOT NULL,
  `dep_eleve` varchar(35) NOT NULL,
  `ville_eleve` varchar(35) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `annee_eleve` int(11) NOT NULL,
  `q1_eleve` varchar(10) NOT NULL,
  `q2_eleve` varchar(300) DEFAULT NULL,
  `q3_eleve` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `eleve`
--

INSERT INTO `eleve` (`id_eleve`, `nom_eleve`, `prenom_eleve`, `dn_eleve`, `mail_eleve`, `sit_eleve`, `dep_eleve`, `ville_eleve`, `id_forum`, `annee_eleve`, `q1_eleve`, `q2_eleve`, `q3_eleve`) VALUES
(1, 'OFFROY', 'Antoine', 1997, 'antoinelebg@gmail.com', 'Etudiant', '62', 'Marquise', 1, 2, 'oui', 'blblblblblblblblblblblblbllblblblblblb', 'non'),
(1, 'BECQUET', 'Maxime', 1997, 'becquetlebg@outlook.com', 'Terminale', '59', 'Dunkerque', 1, 2, 'non', NULL, 'oui'),
(3, 'CAROUX', 'Guillaume', 1995, 'guiguideboursin@gmail.com', 'Premiere', '62', 'Boursin', 1, 1, 'oui', 'voix du nord', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE `forum` (
  `id_for` bigint(20) UNSIGNED NOT NULL,
  `id_interv` int(10) UNSIGNED NOT NULL,
  `lieu` varchar(25) NOT NULL,
  `date_forum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `forum`
--

INSERT INTO `forum` (`id_for`, `id_interv`, `lieu`, `date_forum`) VALUES
(1, 1, 'Calais', '2017-11-30'),
(2, 2, 'Marquise', '2017-11-28');

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

CREATE TABLE `intervenant` (
  `id_int` int(11) UNSIGNED NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `intervenant`
--

INSERT INTO `intervenant` (`id_int`, `nom`, `prenom`, `role`) VALUES
(1, 'OFFROY', 'Antoine', 'Etudiant'),
(2, 'FERNANDEZ', 'Marguerite', 'Intervenant');

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
-- Index pour la table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_for`),
  ADD UNIQUE KEY `id_for` (`id_for`),
  ADD KEY `id_interv` (`id_interv`),
  ADD KEY `id_interv_2` (`id_interv`),
  ADD KEY `id_interv_3` (`id_interv`);

--
-- Index pour la table `intervenant`
--
ALTER TABLE `intervenant`
  ADD PRIMARY KEY (`id_int`),
  ADD UNIQUE KEY `id_int` (`id_int`);

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
-- AUTO_INCREMENT pour la table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_for` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `intervenant`
--
ALTER TABLE `intervenant`
  MODIFY `id_int` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `fk_int` FOREIGN KEY (`id_interv`) REFERENCES `intervenant` (`id_int`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
