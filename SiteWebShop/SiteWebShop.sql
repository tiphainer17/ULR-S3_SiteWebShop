-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 08 nov. 2020 à 14:56
-- Version du serveur :  5.7.31-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `SiteWebShop`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `designation` varchar(128) NOT NULL,
  `prix` decimal(6,0) NOT NULL,
  `tva` decimal(5,0) NOT NULL DEFAULT '20',
  `description` text NOT NULL,
  `img_article` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `id_categorie`, `designation`, `prix`, `tva`, `description`, `img_article`) VALUES
(2, 1, 'LEFT 4 DEAD DISTRESS-STYLED CAP', '15', '20', '100% cotton unstructured 6-panel construction. Enzyme-washed for a worn, apocalyptically-distressed look. One size fits all with metal d-ring slider buckle with hide-away strap closure.', 'images/magasin/L4DHat.jpg'),
(3, 1, 'TEAM FORTRESS 2 HAT', '15', '20', '100% cotton twill with 6-panel construction. Low profile. Goldenrod Team Fortress 2 embroidery . One size fits all with Velcro enclosure.', 'images/magasin/TF2Hat.jpg'),
(4, 1, 'HALF-LIFE 2 HAT', '15', '20', '100% Black brushed cotton twill with reflective details on bill and the back strap. Low profile with the Half-Life', 'images/magasin/HL2Hat.jpg'),
(5, 1, 'LEFT 4 DEAD LONG-SLEEVE TEE', '25', '20', 'Jet-black 4.3-ounce, 100% ring-spun combed cotton District Threads\"! t-shirt with Left 4 Dead logotype screen printed on upper left chest. Features a 40-singles fine knit perfect-weight cotton that\'s not too sheer, with a relaxed drape and a comfortable stretch. Lightweight and layerable.', 'images/magasin/L4DShirt.jpg'),
(6, 1, 'PORTAL SHIRT', '20', '20', 'Black American Apparel', 'images/magasin/PortalShirt.jpg'),
(7, 1, 'HALF-LIFE 2 DEATHMATCH LONG-SLEEVE SHIRT', '25', '20', 'Long-Sleeve Gildan', 'images/magasin/HL2DMLSShirt.jpg'),
(8, 1, 'COUNTER-STRIKE SHIRT', '19', '20', 'Navy. 100% Cotton tee with embroidered Counter-Strike logo in white and yellow.', 'images/magasin/CSShirt.jpg'),
(9, 1, 'HALF-LIFE 2 GOOD D0G SHIRT', '20', '20', 'Black Hanes', 'images/magasin/GoodD0gShirt.jpg'),
(10, 1, 'HALF-LIFE 2 SHIRT', '20', '20', 'Hanes', 'images/magasin/HL2Shirt.jpg'),
(11, 2, 'Counter-Strike: Source Mousepad (Yellow)', '13', '20', 'Precision surface with fine micro grid for perfect mouse operations.', 'images/magasin/CSSMousepad-YELLOW.jpg'),
(12, 2, 'Left 4 Dead Mousepad', '13', '20', 'Precision surface with fine micro grid for perfect mouse operations.', 'images/magasin/L4DMousepad.jpg'),
(13, 2, 'Team Fortress 2 Red Team Mousepad', '13', '20', 'Precision surface with fine micro grid for perfect mouse operations.', 'images/magasin/TF2RedTeamMousepad.jpg'),
(14, 2, 'Half-Life 2 D0G Mousepad', '13', '20', 'Precision surface with fine micro grid for perfect mouse operations.', 'images/magasin/HL2DOGMousepad.jpg'),
(15, 3, 'Left 4 Dead Hand Poster', '10', '20', 'Left 4 Dead Hand, 18\" x 24\" rolled poster.', 'images/magasin/L4DPoster.jpg'),
(16, 3, 'HALF-LIFE 2: EPISODE TWO POSTER', '10', '20', 'Four-color glossy, 18\" x 24\".', 'images/magasin/HL2EP202poster.jpg'),
(17, 3, 'HALF-LIFE 2: EPISODE ONE POSTER', '10', '20', 'Rolled, four-color glossy, 18\" x 24\"', 'images/magasin/HL2EP1Poster.jpg'),
(18, 3, 'DAY OF DEFEAT POSTER', '7', '20', 'Folded, four-color glossy, 18\" x 24\"', 'images/magasin/DoDPoster.jpg'),
(19, 4, 'Source Machinima Choreography', '50', '20', 'Direct a full range of digital characters and creatures using Valve\'s Source', 'images/magasin/NoesisSrcMachinimaChoreography.jpg'),
(20, 4, 'Real-time Character Animation', '40', '20', 'his DVD teaches you how to \"activate your Character\" by demonstrating techniques used by professional animators.\r\n\r\nDVD topics covered include: animation clips & sequences, animation blending, custom parameters, custom parameters, linked parameters, animating poses, device capture techniques, and real-time shadows.', 'images/magasin/NoesisRTCharacterAnimation.jpg'),
(21, 4, 'Intro to Source Vehicle Programming', '50', '20', 'Part of the Noesis Interactive MOD Your World training series, introduces you to the basic functions and methodologies of programming in the Source Engine.\r\n\r\nDVD topics covered include: Setting up your development environment. Installing a Version Control System. Overview of Source programming conventions. Creating new classes. Interfacing with GUI elements. Creating thrusters and adding enhancements. Integrating models & animations.', 'images/magasin/NoesisIntroSrcVehicleProgramming.jpg'),
(22, 4, 'ADVANCED CHARACTER ANIMATION WITH HALF-LIFE 2 DVD', '50', '20', 'Teaches how to \"Evolve Your Character \" by focusing on bringing your character to life by animating or applying motion capture data to your own custom design characters within Half-Life', 'images/magasin/NoesisCharAnim.jpg'),
(23, 4, '3D CONTENT / CREATION WITH XSI DVD', '40', '6', 'Part one of the MOD Your World training series from Noesis Interactive, focuses on teaching how to \"Build Your Character\". Learn the nuts and bolts of the SOFTIMAGE|XSI interface, polygon modeling, texture application, generate props from scratch, and follow step-by-step instructions for creating biped characters. The DVD covers the basics of SOFTIMAGE|XSI 3D software including 3D layout, modeling, texturing, prop and character modeling and provides you with all the short cuts and tips.', 'images/magasin/Noesis01.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
(1, 'Vetements'),
(2, 'Accessoires'),
(3, 'Posters'),
(4, 'DVD');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(10) NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mot_de_passe` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `civilite` varchar(32) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nom` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `prenom` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `adresse` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `code_postal` int(5) NOT NULL DEFAULT '0',
  `ville` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `pays` varchar(32) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `telephone` int(10) NOT NULL DEFAULT '0',
  `img_client` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT 'images/default_logo_user.png'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `email`, `mot_de_passe`, `civilite`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `pays`, `telephone`, `img_client`) VALUES
(2, 'tiphaine_r17@live.fr', '110812f67fa1e1f0117f6f3d70241c1a42a7b07711a93c2477cc516d9042f9db', 'Mme', 'Renouf', 'Tiphaine', '8 Rue adresse ailleurs', 17340, 'chatel', 'France', 646718261, 'images/clients/logo-user.png'),
(4, 'nic.per@gmail.com', '110812f67fa1e1f0117f6f3d70241c1a42a7b07711a93c2477cc516d9042f9db', 'Mme.', 'per', 'nic', '12 rue adresse au pif', 17000, 'les minimes', 'france ', 606060606, 'images/clients/logo-user.png');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `prix_total` decimal(9,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `id_commande` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `qte_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD KEY `id_commande` (`id_commande`),
  ADD KEY `id_article` (`id_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
