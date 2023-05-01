-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 01 mai 2023 à 20:22
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `leprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `ancheres`
--

DROP TABLE IF EXISTS `ancheres`;
CREATE TABLE IF NOT EXISTS `ancheres` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ref` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'REFERENCE',
  `userID` int UNSIGNED NOT NULL,
  `annonceID` int UNSIGNED NOT NULL,
  `prix` int NOT NULL DEFAULT '0',
  `datEdite` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `statut` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIF',
  `dateMaj` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ancheres_id_unique` (`id`),
  KEY `ancheres_userid_index` (`userID`),
  KEY `ancheres_annonceid_index` (`annonceID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ref` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'REFERENCE',
  `userID` int UNSIGNED NOT NULL,
  `categorie` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'CATEGORIE',
  `prix_depart` int NOT NULL DEFAULT '102030405',
  `prix_final` int NOT NULL DEFAULT '102030405',
  `modele` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'MODELE',
  `marque` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'MARQUE',
  `puissance` int NOT NULL DEFAULT '0',
  `annee` int NOT NULL DEFAULT '2000',
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `datEdite` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `statut` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIF',
  `dateMaj` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `annonces_id_unique` (`id`),
  KEY `annonces_userid_index` (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ateliers`
--

DROP TABLE IF EXISTS `ateliers`;
CREATE TABLE IF NOT EXISTS `ateliers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sujet` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domaine` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BACK-END',
  `user_id` bigint UNSIGNED NOT NULL,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'atelier_1',
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'EN COURS',
  `datEdite` timestamp NOT NULL,
  `dateMaj` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cadeaux`
--

DROP TABLE IF EXISTS `cadeaux`;
CREATE TABLE IF NOT EXISTS `cadeaux` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ref` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'REFERENCE',
  `userID` int UNSIGNED NOT NULL,
  `prix` int UNSIGNED NOT NULL DEFAULT '0',
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NOM BENEFICIAIRE',
  `prenom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PRENOM BENEFICIAIRE',
  `nomAgent` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NOM AGENT EDITEUR',
  `prenomAgent` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PRENOM AGENT EDITEUR',
  `agentID` int UNSIGNED NOT NULL DEFAULT '0',
  `datEdite` datetime NOT NULL,
  `statut` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIF',
  `dateMaj` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cadeaux_id_unique` (`id`),
  KEY `cadeaux_userid_index` (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NOM DU DEMANDEUR',
  `prenom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PRENOM DU DEMANDEUR',
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'exemple@workgroup.com',
  `telephone` int NOT NULL DEFAULT '102030405',
  `userID` int UNSIGNED NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `datEdite` datetime NOT NULL,
  `statut` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIF',
  `dateMaj` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacts_id_unique` (`id`),
  KEY `contacts_userid_index` (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `domaines`
--

DROP TABLE IF EXISTS `domaines`;
CREATE TABLE IF NOT EXISTS `domaines` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `domaine` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BACK-END',
  `groupe` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'HTML',
  `userID` bigint UNSIGNED NOT NULL,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'atelier_1',
  `note` int UNSIGNED NOT NULL DEFAULT '0',
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'EN COURS',
  `datEdite` timestamp NOT NULL,
  `dateMaj` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `domaines`
--

INSERT INTO `domaines` (`id`, `domaine`, `groupe`, `userID`, `nom`, `note`, `description`, `statut`, `datEdite`, `dateMaj`) VALUES
(1, 'DEVELOPPEMENT', 'PHP', 1, 'developpement[_]1', 0, 'Développer sa première application web', 'ACTIF', '2023-04-14 16:13:59', '2023-04-14 16:13:59');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL,
  `comments` int NOT NULL,
  `notes` int NOT NULL,
  `participants` int NOT NULL,
  `public` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT 'TOUT PUBLIC',
  `click` bigint DEFAULT NULL,
  `statut` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `datEdite` timestamp NOT NULL,
  `dateMaj` timestamp NOT NULL,
  `agent` int NOT NULL,
  `link_img` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `titre`, `lieu`, `description`, `date`, `comments`, `notes`, `participants`, `public`, `click`, `statut`, `datEdite`, `dateMaj`, `agent`, `link_img`) VALUES
(1, 'BLACK ADAM', 'AIX-EN-PROVENCE', 'Une documentation du film black adam', '2023-05-15 10:30:00', 0, 0, 0, 'TOUT PUBLIC', 0, 'EN COURS', '2023-05-01 18:04:48', '2023-05-01 18:04:48', 1, 'https://www.youtube.com/embed/BbjDI5k03JE');

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

DROP TABLE IF EXISTS `groupes`;
CREATE TABLE IF NOT EXISTS `groupes` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `nb_place` int UNSIGNED DEFAULT '0',
  `place_prise` int UNSIGNED DEFAULT '0',
  `userID` int UNSIGNED NOT NULL,
  `datEdite` datetime NOT NULL,
  `statut` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'EN COURS',
  `dateMaj` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `groupes_userid_index` (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_04_13_214657_create_domaines_table', 1),
(3, '2023_04_14_174817_create_users_table', 1),
(4, '2023_04_14_174818_create_utilisateurs_table', 1),
(5, '2023_04_14_174819_create_groupes_table', 1),
(6, '2023_04_14_174820_create_personnages_table', 1),
(7, '2023_04_14_174821_create_ancheres_table', 1),
(8, '2023_04_14_174822_create_contacts_table', 1),
(9, '2023_04_14_174823_create_reservations_table', 1),
(10, '2023_04_14_174825_create_pokemons_table', 1),
(11, '2023_04_14_174826_create_password_reset_tokens_table', 1),
(12, '2023_04_14_174827_create_cadeaux_table', 1),
(13, '2023_04_14_174830_create_annonces_table', 1),
(14, '2023_04_14_175545_create_ateliers_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

DROP TABLE IF EXISTS `personnages`;
CREATE TABLE IF NOT EXISTS `personnages` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NOM PERSONNAGE',
  `specialites` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ARCHER',
  `magie` int UNSIGNED NOT NULL DEFAULT '0',
  `force` int UNSIGNED NOT NULL DEFAULT '0',
  `agilite` int UNSIGNED NOT NULL DEFAULT '0',
  `intelligeance` int UNSIGNED NOT NULL DEFAULT '0',
  `pv` int UNSIGNED NOT NULL DEFAULT '0',
  `userID` int UNSIGNED NOT NULL DEFAULT '0',
  `groupID` int UNSIGNED NOT NULL DEFAULT '0',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `datEdite` datetime NOT NULL,
  `statut` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIF',
  `dateMaj` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personnages_id_unique` (`id`),
  KEY `personnages_userid_index` (`userID`),
  KEY `personnages_groupid_index` (`groupID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pokemons`
--

DROP TABLE IF EXISTS `pokemons`;
CREATE TABLE IF NOT EXISTS `pokemons` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ref` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'REFERENCE',
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'TYPE POKEMON',
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NOM DU POKEMON',
  `attaque` int NOT NULL DEFAULT '0',
  `defense` int UNSIGNED NOT NULL DEFAULT '0',
  `pv` int UNSIGNED NOT NULL DEFAULT '0',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `datEdite` datetime NOT NULL,
  `statut` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIF',
  `dateMaj` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pokemons_id_unique` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ref` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'REFERENCE',
  `nomV` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NOM VOYAGEUR',
  `prenom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PRENOM VOYAGEUR',
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'email@workgroup.com',
  `telephone` int NOT NULL DEFAULT '102030405',
  `destination` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DESTINATION',
  `datEdite` datetime NOT NULL,
  `statut` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIF',
  `dateMaj` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reservations_id_unique` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'PRENOM',
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telephone` int DEFAULT '102030405',
  `email_verif` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cle_token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `etat` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'EN COURS',
  `statut` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'ACTIF',
  `qualite` char(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'PARTICULIER',
  `datEdite` timestamp NOT NULL,
  `dateMaj` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_telephone_unique` (`telephone`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `telephone`, `email_verif`, `password`, `cle_token`, `etat`, `statut`, `qualite`, `datEdite`, `dateMaj`) VALUES
(1, 'ABOUDOU', 'ABOUDOU', 'aboudou@gmail.com', 102030405, 'aboudou@gmail.com_NON', '$2y$10$2ccTl20PnFirpoMckFuTfuyHwhUo2SIGh30iPbP4nWyvVMk2col8q', '$2y$10$wP1Jp72FoI9COuYQf8E7MOQRdkNGPtKmiX4N6ukLe35GuWXW4KNKG', 'VERIFICATION', 'EN COURS', 'PARTICULIER', '2023-04-14 18:33:22', '2023-04-14 18:33:22'),
(2, 'KARIM', 'KARIM', 'bourguiba@gmail.com', 11, 'bourguiba@gmail.com_NON', '$2y$10$7WktfAoRKcxZmlZ.WBCdZelCrAsDmQe.v83UIgTlopti3O/hS4nA6', '6cPyxcLOyAcAy66UhpfW2Yq4stSRGZMK1bDDUm0MW3sxOjQndm9K2KmE7cAw', 'VERIFICATION', 'EN COURS', 'PARTICULIER', '2023-04-24 14:47:19', '2023-04-24 14:47:19'),
(3, 'ABOUDOU', 'Assoumani', 'assoumani@gmail.com', 1384418783, 'assoumani@gmail.com_NON', '$2y$10$ytZXwyIQZNzLBhdrrTv4Xe/UHqs/cBwkIbUP12Rjm5938UM./v.Ta', 'eMnx4pnW1Hc4oCTKJE90Rqtfjqb5QIkU53uHO1vVUlTExY8DwCLaNIql5crl', 'VERIFICATION', 'EN COURS', 'PARTICULIER', '2023-04-30 15:24:46', '2023-04-30 15:24:46'),
(4, 'KARIM', 'Mchangama', 'mchangama@gmail.com', 1757080800, 'mchangama@gmail.com_NON', '$2y$10$opTXuhKdtZyoPpjP/xkw/OV5DNhB/C6JCgwI32qo55ZOpP4s0JyPO', 'zcXCc8eNAzyOoHv70UN1fHTrYflJkkty1s3uXATNflIZjp6OGdtFAhT4ddhD', 'VERIFICATION', 'EN COURS', 'PARTICULIER', '2023-04-30 17:29:53', '2023-04-30 17:29:53');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IDENTIFIANT',
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NOM UTILISATEUR',
  `prenom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PRENOM UTILISATEUR',
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'exemple@workgroup.com',
  `telephone` int NOT NULL DEFAULT '102030405',
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nimportequoi1259875pourfinir35677idiot9875enfin',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `categorie` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'CATEGORIE',
  `domaine` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DOMAINE',
  `datEdite` datetime NOT NULL,
  `statut` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIF',
  `dateMaj` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `utilisateurs_id_unique` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
