-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 11 avr. 2022 à 11:46
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `havana`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles_commande`
--

CREATE TABLE `articles_commande` (
  `id` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_categorie`) VALUES
(23, 'captain cuba'),
(26, 'miami tongs'),
(28, 'Tongs pour Hommes et femme'),
(29, 'claquette havana'),
(40, 'Havaianas Espadrille');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id_cammande` int(11) NOT NULL,
  `id_utilisateur` int(250) NOT NULL,
  `letotalachat` float(10,2) NOT NULL,
  `creation` datetime NOT NULL,
  `status` enum('Pending','Completed','Cancelled') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaire` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `text_commentaire` varchar(250) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

CREATE TABLE `couleur` (
  `id_couleur` int(11) NOT NULL,
  `nom_couleur` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `couleur`
--

INSERT INTO `couleur` (`id_couleur`, `nom_couleur`) VALUES
(1, 'blue'),
(2, 'blanc'),
(3, 'rouge'),
(4, 'jaune laplateforme'),
(6, 'green'),
(7, 'noir et beige '),
(8, 'beiger rosé'),
(9, 'Corail'),
(10, 'ratatouille'),
(11, 'melange bleuté'),
(12, 'MILITARY GREEN'),
(13, 'MILITARY GREEN');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(250) NOT NULL,
  `description_produit` varchar(600) NOT NULL,
  `prix_produit` float(10,2) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_sous_catégorie` int(11) NOT NULL,
  `id_couleur` int(11) NOT NULL,
  `id_produit_type` int(11) NOT NULL,
  `file_images` text NOT NULL,
  `qte_stock` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `description_produit`, `prix_produit`, `id_categorie`, `id_sous_catégorie`, `id_couleur`, `id_produit_type`, `file_images`, `qte_stock`) VALUES
(29, 'Havaianas Top Logomania Mid Tech', 'Couleurs vibrantes et confort durable ? Cela doit être Havaianas… Avec le logo Havaianas sous la semelle et les lanières décorées avec les mêmes motifs de l\'année de lancement, vous n\'aurez pas des doutes. Presque 60 ans de clients satisfaits. Ils ne peuvent pas avoir tort !', 25.00, 26, 12, 4, 1, '714609.jpg', '50'),
(30, 'Havaianas Top Logomania', 'Alerte de tendance Logo ! Les Havaianas Top Logomania 2 rapportent le contraste des lanières et des semelles dans des couleurs fascinant créant un modèle moderne éblouissant.', 25.00, 29, 10, 1, 1, '583821.jpg', '12'),
(31, 'Logomania 2', ' Les Havaianas Top Logomania 2 rapportent le contraste des lanières et des semelles dans des couleurs fascinant créant un modèle moderne éblouissant.', 23.00, 26, 14, 3, 2, '205006.jpg', '45'),
(32, 'Havaianas Slim Nautical', 'Oh, capitaine ! Embarquement pour le lancement de Havaianas Slim Nautical. Doté d\'imprimés classiques inspirés de l\'océan, ce modèle apporte un raz-de-marée de style à votre tenue.', 23.00, 29, 10, 1, 2, '244830.jpg', '12'),
(33, 'Havaianas Slim Nautical', 'Oh, capitaine ! Embarquement pour le lancement de Havaianas Slim Nautical. Doté d\'imprimés classiques inspirés de l\'océan, ce modèle apporte un raz-de-marée de style à votre tenue.', 23.00, 29, 10, 1, 2, '441401.jpg', '12'),
(34, 'Havaianas Slim Summer', 'Havaianas pense vraiment à tout ! Clairement inspirées par les étés tropicaux,les Slim Summer arborent deux magnifiques imprimés représentant des pommes de cajou et des bananes. En plus d’être très colorées, les tongs sont faites à l’aide d’une technologie de pointe qui permet aux imprimés d’être à la fois sur les semelles et les brides.', 13.00, 23, 24, 1, 1, '736328.jpg', '34'),
(35, 'Havaianas Top Hello Kitty', 'Les tongs Kids Slim Hello Kitty sont absolument adorables. Les deux versions de ce modèle présentent des imprimés amusants de célèbres personnages japonais dans une gamme de couleurs qui joue sur la tendance du color block.', 23.00, 23, 24, 1, 2, '491190.jpg', '12'),
(38, 'Havaianas Espadrille Eco green', 'Unisexes et parfaites pour toutes les occasions, les espadrilles Havaianas sont fabriquées à partir de matériaux recyclés – car l\'éco responsabilité est plus qu\'une simple tendance : elle est tout simplement vitale !  Avec une grande palette de coloris disponibles,  une forme plus moderne et une structure interne qui lui permet de s\'adapter parfaitement au pied, ce modèle apportera une belle touche finale à votre look.', 25.00, 40, 25, 12, 1, '205681.jpg', '5'),
(39, 'Havaianas Espadrille Eco bleu', 'Unisexes et parfaites pour toutes les occasions, les espadrilles Havaianas sont fabriquées à partir de matériaux recyclés – car l\'éco responsabilité est plus qu\'une simple tendance : elle est tout simplement vitale !  Avec une grande palette de coloris disponibles,  une forme plus moderne et une structure interne qui lui permet de s\'adapter parfaitement au pied, ce modèle apportera une belle touche finale à votre look.', 13.00, 40, 25, 1, 1, '810500.jpg', '34'),
(40, 'Havaianas Espadrille Mule Eco', 'Pratique, élégante et confortable, la conception ouverte de la mule permet le glissement facile à mettre et à enlever. Havaianas a combiné les semelles en caoutchouc de signature avec le haut fait en cotton recyclé, certifié par la BCI (Better Cotton Initiative). Respectueuse de l\'environnement et pleine de charme, cette paire transformera votre look visuellement et éthiquement', 37.00, 40, 26, 3, 2, '230054.jpg', '45'),
(41, 'Havaianas Top Vibram', 'L’association de l’emblématique Havaianas TOP, essence même du Brésil et disponible en 4 couleurs éclatantes (jaune, vert, bleu et rose), et de la semelle légère, durable et confortable Betulla de Vibram crée un nouveau modèle unique à utiliser dans des contextes urbains et bien d’autres.', 23.00, 26, 12, 12, 2, '375563.jpg', '15');

-- --------------------------------------------------------

--
-- Structure de la table `produit_type`
--

CREATE TABLE `produit_type` (
  `id_produit_type` int(11) NOT NULL,
  `nom_produit_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit_type`
--

INSERT INTO `produit_type` (`id_produit_type`, `nom_produit_type`) VALUES
(1, 'homme'),
(2, 'femme'),
(3, 'enfant');

-- --------------------------------------------------------

--
-- Structure de la table `recuperation`
--

CREATE TABLE `recuperation` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recuperation`
--

INSERT INTO `recuperation` (`id`, `mail`, `code`, `id_utilisateur`) VALUES
(1, 'samirgonzalez1315@gmail.com', 11078344, 0),
(2, 'samirgonzalez1315@gmail.com', 57074680, 0);

-- --------------------------------------------------------

--
-- Structure de la table `sous_catégorie`
--

CREATE TABLE `sous_catégorie` (
  `id_sous_catégorie` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `nom_sous_catégorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sous_catégorie`
--

INSERT INTO `sous_catégorie` (`id_sous_catégorie`, `id_categorie`, `nom_sous_catégorie`) VALUES
(9, 29, 'havana street '),
(10, 29, 'california street'),
(11, 26, 'miami street homme'),
(12, 26, 'miami  street women'),
(14, 26, 'miami claquette'),
(24, 23, ' Slim Summer'),
(25, 40, 'Espadrille Eco I'),
(26, 40, 'Mule Eco'),
(27, 28, 'femme'),
(28, 28, 'enfant tongs'),
(29, 28, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthday` date NOT NULL,
  `avatar` varchar(250) DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `creation` datetime NOT NULL,
  `modification` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=actif|0=inactif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `firstname`, `lastname`, `mail`, `password`, `phone`, `city`, `postal_code`, `address`, `birthday`, `avatar`, `admin`, `creation`, `modification`, `status`) VALUES
(1, 'Sam', 'Belhadj', 's@s.s', 'c045c9838ba93fe23b0842c44195bfbd7298d35d', 102030405, '', 0, NULL, '1999-07-01', 'avatar.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'test', 'test', 'test@mail.fr', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, 'Mars', 13004, NULL, '1111-11-11', 'avatar.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(5, 'aa', 'aa', 'aa@aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 909090909, 'AA', 13002, NULL, '2111-02-11', 'avatar.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(6, 'marie', 'marie', 'marie@marie', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 790560945, 'nice', 456000, NULL, '1999-02-02', 'avatar.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(7, 'sonia', 'sonia', 'so@nia', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 60304505, 'paris', 75000, NULL, '2004-03-12', 'avatar.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(8, 'SI', 'SI', 'SI@SI', '2cd845399ebc86aad1fd9e1e6bfa6aa61179694a', 0, 'LILLE', 234033, NULL, '2000-02-12', 'avatar.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(9, 'sa', 'salvador', 'rid@rida', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 1234, 'marseille', 13001, NULL, '1988-09-12', 'avatar.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(10, 'ridha', 'lefou', 'rid', '4ec2b19306c9200ae3ee0d343b41e3395b3abcd6', 33333, 'marseille', 13011, NULL, '1997-12-12', 'avatar.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(11, 'marc', 'marc', 'marc@marc', '356a192b7913b04c54574d18c28d46e6395428ab', 6207925, 'marseille', 13001, NULL, '2000-12-17', 'avatar.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles_commande`
--
ALTER TABLE `articles_commande`
  ADD KEY `id` (`id`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id_cammande`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_produit` (`id_produit`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `couleur`
--
ALTER TABLE `couleur`
  ADD PRIMARY KEY (`id_couleur`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_categorie` (`id_categorie`),
  ADD KEY `id_couleur` (`id_couleur`),
  ADD KEY `id_sous_catégorie` (`id_sous_catégorie`),
  ADD KEY `id_produit_type` (`id_produit_type`);

--
-- Index pour la table `produit_type`
--
ALTER TABLE `produit_type`
  ADD PRIMARY KEY (`id_produit_type`);

--
-- Index pour la table `recuperation`
--
ALTER TABLE `recuperation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sous_catégorie`
--
ALTER TABLE `sous_catégorie`
  ADD PRIMARY KEY (`id_sous_catégorie`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id_cammande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `couleur`
--
ALTER TABLE `couleur`
  MODIFY `id_couleur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `produit_type`
--
ALTER TABLE `produit_type`
  MODIFY `id_produit_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `recuperation`
--
ALTER TABLE `recuperation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `sous_catégorie`
--
ALTER TABLE `sous_catégorie`
  MODIFY `id_sous_catégorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles_commande`
--
ALTER TABLE `articles_commande`
  ADD CONSTRAINT `articles_commande_ibfk_1` FOREIGN KEY (`id`) REFERENCES `commandes` (`id_cammande`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `articles_commande_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`) ON DELETE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`id_couleur`) REFERENCES `couleur` (`id_couleur`),
  ADD CONSTRAINT `produit_ibfk_3` FOREIGN KEY (`id_sous_catégorie`) REFERENCES `sous_catégorie` (`id_sous_catégorie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_4` FOREIGN KEY (`id_produit_type`) REFERENCES `produit_type` (`id_produit_type`) ON DELETE CASCADE;

--
-- Contraintes pour la table `sous_catégorie`
--
ALTER TABLE `sous_catégorie`
  ADD CONSTRAINT `sous_catégorie_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
