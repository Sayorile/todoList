-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 15 oct. 2021 à 22:38
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `todolist`
--

-- --------------------------------------------------------

--
-- Structure de la table `do_lists`
--

CREATE TABLE `do_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''new''',
  `end` tinyint(1) NOT NULL DEFAULT 0,
  `progression` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `do_lists`
--

INSERT INTO `do_lists` (`id`, `name`, `description`, `status`, `end`, `progression`, `created_at`, `updated_at`, `categorie`) VALUES
(1, 'Manger', 'five centuries, but also the leap ', '\'in progress\'', 1, '10', '2021-10-15 15:42:15', '2021-10-15 15:42:15', 1),
(2, 'Boire', ', remaining essentially unchanged.', '\'awaiting\'', 0, '20', '2021-10-11 15:43:36', '2021-10-15 15:43:36', 1),
(3, 'dodo', 'doooooo', '\'awaiting\'', 0, '0', '2021-10-15 16:26:19', '2021-10-15 16:26:19', 1),
(4, 'azert', 'asccvghstyjjytjgjnfwjnfjnthrgs', '\'new\'', 0, '0', '2021-10-15 16:49:01', '2021-10-15 16:49:01', 1),
(5, 'Devoirs', 'exercices math', '\'abort\'', 0, '0', '2021-10-15 16:51:59', '2021-10-15 16:51:59', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `do_lists`
--
ALTER TABLE `do_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie` (`categorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `do_lists`
--
ALTER TABLE `do_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
