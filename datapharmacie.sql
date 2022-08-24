-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 05 juil. 2022 à 18:48
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `datapharmacie`
--
CREATE DATABASE IF NOT EXISTS `datapharmacie` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `datapharmacie`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE `administrateur` (
  `idadmin` int(11) NOT NULL,
  `NomAdmin` varchar(45) DEFAULT NULL,
  `EmailAdmin` text DEFAULT NULL,
  `MotdepasseAdmin` text DEFAULT NULL,
  `Etatcompte` text DEFAULT NULL,
  `DateCreation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`idadmin`, `NomAdmin`, `EmailAdmin`, `MotdepasseAdmin`, `Etatcompte`, `DateCreation`) VALUES
(1, 'Jacques', 'jacquesjack69@gmail.com', 'admin', '1', '02-05-2022 pm 19:52'),
(2, 'bon', 'bonbon@gmail.com', 'admin', '1', '22-05-2022 am 11:20'),
(5, 'Admin', 'jacquesconcepteur69@gmail.com', 'admin', '2', '22-05-2022 pm 12:38'),
(6, 'Venus', 'Pharmacievenus69@gmail.com', 'admin', '0', '29-06-2022 pm 21:22');

-- --------------------------------------------------------

--
-- Structure de la table `pdpharmacie`
--

DROP TABLE IF EXISTS `pdpharmacie`;
CREATE TABLE `pdpharmacie` (
  `idpharma` int(11) NOT NULL,
  `Nom_Article` varchar(45) DEFAULT NULL,
  `Code_Article` varchar(45) DEFAULT NULL,
  `Prix_F` double DEFAULT NULL,
  `Date_F` text DEFAULT NULL,
  `Date_P` text DEFAULT NULL,
  `DateCreation` text DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pdpharmacie`
--

INSERT INTO `pdpharmacie` (`idpharma`, `Nom_Article`, `Code_Article`, `Prix_F`, `Date_F`, `Date_P`, `DateCreation`, `stock`) VALUES
(20, 'Sed consequatur Lab', 'Quaerat esse minima ', 78, '2022-02-21', '1979-01-02', '04-Jul-2022 à 22:16:15', 21),
(21, 'Ut consequatur conse', 'Asperiores iste anim', 47, '1985-11-08', '1996-02-22', '04-Jul-2022 à 22:16:20', 8),
(22, 'Nulla aut culpa reru', 'Dolorum veniam offi', 27, '1983-02-02', '2007-03-11', '04-Jul-2022 à 22:16:29', 560),
(23, 'Nemo totam iure ut e', 'Dolor omnis explicab', 65, '1984-12-03', '1982-01-27', '04-Jul-2022 à 22:16:34', 16),
(24, 'Labore sint similiqu', 'Facilis et voluptate', 74, '1991-10-24', '1974-08-21', '04-Jul-2022 à 22:16:37', 1),
(25, 'Fuga Consectetur fu', 'Ipsum aut dolor minu', 68, '1982-08-10', '2013-07-14', '04-Jul-2022 à 22:16:40', 37),
(26, 'Sequi id cupiditate', 'Sint excepturi perfe', 58, '1990-03-19', '1997-07-02', '04-Jul-2022 à 22:32:38', 72),
(27, 'Repudiandae voluptat', 'Ipsa consectetur a ', 56, '2000-03-29', '2000-11-02', '04-Jul-2022 à 22:32:55', 18),
(28, 'Pariatur Ipsa erro', 'Explicabo Qui ex vo', 10, '2003-01-08', '1990-09-01', '04-Jul-2022 à 22:33:03', 89),
(29, 'Sunt voluptates aut ', 'Quia temporibus prov', 99, '1992-06-22', '1995-02-18', '04-Jul-2022 à 22:33:07', 82),
(30, 'Quis sit odit aperi', 'Ex voluptas saepe ad', 67, '2000-11-21', '2014-04-13', '04-Jul-2022 à 22:33:10', 44),
(31, 'Sunt nulla aute rati', 'Quia error eveniet ', 61, '1992-09-13', '2017-06-24', '04-Jul-2022 à 22:33:13', 38),
(32, 'Pariatur Dolore por', 'Fugiat est consect', 91, '2004-09-04', '1986-01-01', '04-Jul-2022 à 22:33:16', 51),
(33, 'last', 'Eos eveniet sint ex', 200, '1995-05-29', '1985-05-20', '04-Jul-2022 à 22:35:34', 23),
(34, 'Qui magni minim omni EDIT', 'Est aut dolorum eius', 44, '1981-06-04', '2016-01-27', '05-Jul-2022 à 18:27:25', 380),
(36, 'Dolor eveniet ut es', 'Reprehenderit dolore', 100, '1985-06-19', '2000-01-23', '05-Jul-2022 à 18:44:13', 40);

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

DROP TABLE IF EXISTS `vente`;
CREATE TABLE `vente` (
  `idvente` int(11) NOT NULL,
  `idpharma` int(11) NOT NULL,
  `prix` double DEFAULT NULL,
  `qte` int(11) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`idvente`, `idpharma`, `prix`, `qte`, `date`) VALUES
(11, 22, 27, 45, '2022-07-04 22:17:02'),
(12, 23, 65, 3, '2022-07-04 22:17:23'),
(13, 23, 65, 5, '2022-07-04 22:17:27'),
(14, 23, 65, 2, '2022-07-04 22:17:29'),
(15, 24, 74, 7, '2022-07-04 22:17:47'),
(16, 24, 74, 11, '2022-07-04 22:18:04'),
(17, 23, 65, 70, '2022-07-04 22:33:57'),
(18, 33, 19, 30, '2022-07-05 17:56:43');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`idadmin`);

--
-- Index pour la table `pdpharmacie`
--
ALTER TABLE `pdpharmacie`
  ADD PRIMARY KEY (`idpharma`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`idvente`),
  ADD KEY `fk_vente_pdpharmacie_idx` (`idpharma`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `pdpharmacie`
--
ALTER TABLE `pdpharmacie`
  MODIFY `idpharma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `idvente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `fk_vente_pdpharmacie` FOREIGN KEY (`idpharma`) REFERENCES `pdpharmacie` (`idpharma`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
