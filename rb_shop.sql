-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 20 fév. 2022 à 16:46
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
-- Base de données : `rb_shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_categorie`) VALUES
(16, 'captain salvador'),
(17, 'captain tfoyu'),
(18, 'captain america'),
(19, 'warrior'),
(23, 'Tongs pour femme'),
(26, 'claquette havana'),
(30, 'Tongs pour Hommes');

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

CREATE TABLE `couleur` (
  `id_couleur` int(11) NOT NULL,
  `nom_couleur` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `couleur`
--

INSERT INTO `couleur` (`id_couleur`, `nom_couleur`) VALUES
(1, 'blue'),
(2, 'blanc'),
(3, 'rouge'),
(4, 'jaune motarde'),
(6, 'white black');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(222) NOT NULL,
  `description` varchar(500) NOT NULL,
  `prix_produit` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_sous_catégorie` int(11) NOT NULL,
  `id_couleur` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `description`, `prix_produit`, `id_categorie`, `id_sous_catégorie`, `id_couleur`, `images`) VALUES
(13, 'Havaianas Brasil Fresh\r\n', 'Les classiques Havaianas Brasil prennent une touche de modernité. En plus du drapeau emblématique sur les lanières, ce modèle est désormais doté d\'un appelant motif dégradé en forme de diamant sur les semelles, ce qui le rend encore plus élégant.', 23, 26, 9, 4, '/images/havana_A.jpg'),
(14, 'Havaianas Sunny II\r\n', 'Les Havaianas Sunny II sont vos sandales à porter toute la journée. Les lanières à la cheville vous offrent confort et sécurité, tout en ajoutant un petit détail à votre style. Avec une large gamme de couleurs au choix, vous en trouverez une qui vous convient… ou peut-être plusieurs.', 5, 30, 12, 4, '/images/Havaianas_homme.jpg'),
(15, 'dqdqd', 'qdqd', 22, 30, 18, 1, '/images/castelennetong.php');

-- --------------------------------------------------------

--
-- Structure de la table `sous_catégorie`
--

CREATE TABLE `sous_catégorie` (
  `id_sous_catégorie` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `nom_sous_catégorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sous_catégorie`
--

INSERT INTO `sous_catégorie` (`id_sous_catégorie`, `id_categorie`, `nom_sous_catégorie`) VALUES
(9, 26, 'havana street claquette mother'),
(12, 30, 'Havaianas Sunny'),
(15, 30, 'havana street '),
(18, 30, 'street czstellane ');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `mot_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user_droit`
--

CREATE TABLE `user_droit` (
  `id_user_droit` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nom_droit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

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
  ADD KEY `id_sous_catégorie` (`id_sous_catégorie`);

--
-- Index pour la table `sous_catégorie`
--
ALTER TABLE `sous_catégorie`
  ADD PRIMARY KEY (`id_sous_catégorie`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Index pour la table `user_droit`
--
ALTER TABLE `user_droit`
  ADD PRIMARY KEY (`id_user_droit`),
  ADD UNIQUE KEY `id_users` (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `couleur`
--
ALTER TABLE `couleur`
  MODIFY `id_couleur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `sous_catégorie`
--
ALTER TABLE `sous_catégorie`
  MODIFY `id_sous_catégorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user_droit`
--
ALTER TABLE `user_droit`
  MODIFY `id_user_droit` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`id_couleur`) REFERENCES `couleur` (`id_couleur`),
  ADD CONSTRAINT `produit_ibfk_3` FOREIGN KEY (`id_sous_catégorie`) REFERENCES `sous_catégorie` (`id_sous_catégorie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sous_catégorie`
--
ALTER TABLE `sous_catégorie`
  ADD CONSTRAINT `sous_catégorie_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user_droit`
--
ALTER TABLE `user_droit`
  ADD CONSTRAINT `user_droit_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
