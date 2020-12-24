-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 09 nov. 2020 à 08:38
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `commune_annexe_management_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectations`
--

CREATE TABLE `affectations` (
  `affectation_id` int(11) NOT NULL,
  `nomAgent` varchar(75) DEFAULT NULL,
  `matriculeAgent` varchar(75) DEFAULT NULL,
  `telephoneAgent` varchar(75) DEFAULT NULL,
  `date_affectation` date DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `troupe_affecter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `avenues`
--

CREATE TABLE `avenues` (
  `avenue_id` int(11) NOT NULL,
  `nomAvenue` varchar(75) DEFAULT NULL,
  `nomChefAvenue` varchar(75) DEFAULT NULL,
  `adresseChefAvenue` text,
  `telephoneChefAvenue` varchar(75) DEFAULT NULL,
  `nombreMaisons` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `cellule_sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cellules`
--

CREATE TABLE `cellules` (
  `cellule_id` int(11) NOT NULL,
  `nomCellule` varchar(75) DEFAULT NULL,
  `nomChefCellule` varchar(75) DEFAULT NULL,
  `adresseChefCellule` text,
  `telephoneChefCellule` varchar(75) DEFAULT NULL,
  `nombreAvenues` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `quartier_sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `communes`
--

CREATE TABLE `communes` (
  `commune_id` int(11) NOT NULL,
  `nomCommune` varchar(75) DEFAULT NULL,
  `nomBourgmestre` varchar(75) DEFAULT NULL,
  `adresseBourgmestre` text,
  `telephoneBourgmestre` varchar(75) DEFAULT NULL,
  `nombreQuartiers` int(11) DEFAULT NULL,
  `contactBureau` varchar(75) DEFAULT NULL,
  `adresseBureau` text,
  `date_created` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `communes`
--

INSERT INTO `communes` (`commune_id`, `nomCommune`, `nomBourgmestre`, `adresseBourgmestre`, `telephoneBourgmestre`, `nombreQuartiers`, `contactBureau`, `adresseBureau`, `date_created`, `last_update`) VALUES
(1, 'Annexe', 'Remy', ' Lubumbashi, Haut-Katanga RDC', '0977090011', 28, '', 'Kamalondo,  Lubumbashi, Haut-Katanga RDC', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `demandesactesmariages`
--

CREATE TABLE `demandesactesmariages` (
  `demande_id` int(11) NOT NULL,
  `nomHomme` varchar(75) DEFAULT NULL,
  `nomFemme` varchar(75) DEFAULT NULL,
  `nomTemoin` varchar(75) DEFAULT NULL,
  `telephoneCouple` varchar(75) DEFAULT NULL,
  `telephoneTemoin` varchar(75) DEFAULT NULL,
  `adresseCouple` text,
  `territoireOrigineCouple` varchar(75) DEFAULT NULL,
  `villeResidenceCouple` varchar(75) DEFAULT NULL,
  `date_ceremonie` date DEFAULT NULL,
  `heure_ceremonie` time DEFAULT NULL,
  `frais_ceremonie` varchar(75) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `officierCommune` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `districts`
--

CREATE TABLE `districts` (
  `district_id` int(11) NOT NULL,
  `nomDistrict` varchar(75) DEFAULT NULL,
  `nomResponsable` varchar(75) DEFAULT NULL,
  `telephoneResponsable` varchar(75) DEFAULT NULL,
  `nombreTroupes` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `quartier_sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `quartiers`
--

CREATE TABLE `quartiers` (
  `quartier_id` int(11) NOT NULL,
  `nomQuartier` varchar(75) DEFAULT NULL,
  `nomChefQuatier` varchar(75) DEFAULT NULL,
  `adresseChefQuatier` text,
  `telephoneChefQuatier` varchar(75) DEFAULT NULL,
  `nombreCellules` int(11) DEFAULT NULL,
  `contactBureauQuartier` varchar(75) DEFAULT NULL,
  `adresseBureauQuartier` text,
  `date_created` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `commune_sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quartiers`
--

INSERT INTO `quartiers` (`quartier_id`, `nomQuartier`, `nomChefQuatier`, `adresseChefQuatier`, `telephoneChefQuatier`, `nombreCellules`, `contactBureauQuartier`, `adresseBureauQuartier`, `date_created`, `last_update`, `commune_sid`) VALUES
(1, 'Naviundu', 'Élie Mwez Rubuz', '25, Rue des Rosiers, Naviundu, Haut-Katanga RDC', '0977090011', 10, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `situations`
--

CREATE TABLE `situations` (
  `situation_id` int(11) NOT NULL,
  `intitule` varchar(75) DEFAULT NULL,
  `avenue_sid` varchar(75) DEFAULT NULL,
  `cellule_sid` varchar(75) DEFAULT NULL,
  `date_jour_situation` date DEFAULT NULL,
  `contenu_situation` text,
  `date_created` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `quartier_sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `situations`
--

INSERT INTO `situations` (`situation_id`, `intitule`, `avenue_sid`, `cellule_sid`, `date_jour_situation`, `contenu_situation`, `date_created`, `last_update`, `quartier_sid`) VALUES
(1, 'Cambriolage Maison', 'des rosiers', 'xxxxxx', '0000-00-00', 'jajhjakakakaj', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_users`
--

CREATE TABLE `tb_im_users` (
  `id_asset` int(11) NOT NULL,
  `asset_fullname` varchar(75) NOT NULL,
  `asset_username` varchar(50) DEFAULT NULL,
  `asset_password` varchar(60) DEFAULT NULL,
  `asset_email` varchar(50) DEFAULT NULL,
  `asset_sexe` varchar(10) DEFAULT NULL,
  `asset_phone` varchar(50) DEFAULT NULL,
  `asset_type` varchar(20) DEFAULT 'agent',
  `date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_connected` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `account_activated` varchar(25) DEFAULT 'active',
  `asset_avatar` varchar(75) DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  `asset_fonction` varchar(75) NOT NULL,
  `asset_matricule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_users`
--

INSERT INTO `tb_im_users` (`id_asset`, `asset_fullname`, `asset_username`, `asset_password`, `asset_email`, `asset_sexe`, `asset_phone`, `asset_type`, `date_ajout`, `date_connected`, `account_activated`, `asset_avatar`, `date_update`, `asset_fonction`, `asset_matricule`) VALUES
(21, 'Elie Mwez', 'eliemwez', '$2y$12$lgSZ78FDfw7MUBBIrMgsfOB2BEBDapoD4jIJEtr.arj6dSYRoBDZG', 'eliemwez.rubuz@gmail.com', 'Masculin', '+243858533285', 'admin', '2020-09-11 08:08:58', '2020-09-21 08:02:11', 'active', 'global/img/avatars/avatar-eliemwez2.jpg', '2020-09-19 14:07:30', 'admin', '11220'),
(26, 'Emma Tshinenge', 'tshinenge', '$2y$12$iYgPuYl0T3Xn6HBQgocdeuFu1ZGN0qGfvzPexk60RU6l.q9YdS9Ju', 'emmabilldo3@gmail.com', 'masculin', '0993076047', 'user', '2020-09-21 07:59:39', '2020-09-21 08:42:27', 'active', NULL, NULL, 'guichetier', '202005'),
(27, 'Administrateur', 'admin', '$2y$12$bGYGbrhUKpkUVun35wVyq.E3xoHKEsztWso0Hw6xlP4pRPrhNqxpu', 'admin@gmail.com', 'Homme', '+243+243903774951', 'admin', '2020-09-21 08:01:52', '2020-11-04 07:33:54', 'active', 'global/img/avatars/12f5af7aaaaf19c688cbddeb0cac45a5.jpg', '2020-10-25 14:26:54', 'admin', '2020010');

-- --------------------------------------------------------

--
-- Structure de la table `troupes`
--

CREATE TABLE `troupes` (
  `troupe_id` int(11) NOT NULL,
  `nomTroupe` varchar(75) DEFAULT NULL,
  `nomResponsable` varchar(75) DEFAULT NULL,
  `telephoneResponsable` varchar(75) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `district_sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affectations`
--
ALTER TABLE `affectations`
  ADD PRIMARY KEY (`affectation_id`);

--
-- Index pour la table `avenues`
--
ALTER TABLE `avenues`
  ADD PRIMARY KEY (`avenue_id`);

--
-- Index pour la table `cellules`
--
ALTER TABLE `cellules`
  ADD PRIMARY KEY (`cellule_id`);

--
-- Index pour la table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`commune_id`);

--
-- Index pour la table `demandesactesmariages`
--
ALTER TABLE `demandesactesmariages`
  ADD PRIMARY KEY (`demande_id`);

--
-- Index pour la table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`);

--
-- Index pour la table `quartiers`
--
ALTER TABLE `quartiers`
  ADD PRIMARY KEY (`quartier_id`);

--
-- Index pour la table `situations`
--
ALTER TABLE `situations`
  ADD PRIMARY KEY (`situation_id`);

--
-- Index pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  ADD PRIMARY KEY (`id_asset`),
  ADD UNIQUE KEY `asset_username` (`asset_username`,`asset_email`);

--
-- Index pour la table `troupes`
--
ALTER TABLE `troupes`
  ADD PRIMARY KEY (`troupe_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affectations`
--
ALTER TABLE `affectations`
  MODIFY `affectation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avenues`
--
ALTER TABLE `avenues`
  MODIFY `avenue_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cellules`
--
ALTER TABLE `cellules`
  MODIFY `cellule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `communes`
--
ALTER TABLE `communes`
  MODIFY `commune_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `demandesactesmariages`
--
ALTER TABLE `demandesactesmariages`
  MODIFY `demande_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `districts`
--
ALTER TABLE `districts`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `quartiers`
--
ALTER TABLE `quartiers`
  MODIFY `quartier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `situations`
--
ALTER TABLE `situations`
  MODIFY `situation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `troupes`
--
ALTER TABLE `troupes`
  MODIFY `troupe_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
