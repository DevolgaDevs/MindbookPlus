-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 24 Mars 2017 à 13:00
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mindbook`
--

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classees` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `classes`
--

INSERT INTO `classees` (`id`, `name`) VALUES
(1, 'NoClass'),
(2, 'M2 MIAGE apprentissage');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `text` text,
  `isOpenQuestion` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `question_answers`
--

CREATE TABLE `question_answers` (
  `id` int(11) NOT NULL,
  `questionId` int(11) DEFAULT NULL,
  `answerId` int(11) DEFAULT NULL,
  `isRightAnswer` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `question_choices`
--

CREATE TABLE `question_choices` (
  `id` int(11) NOT NULL,
  `questionId` int(11) DEFAULT NULL,
  `answerId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `name` text,
  `userId` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `hasQuestions` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `isTeacher` tinyint(1) DEFAULT NULL,
  `classId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `isAdmin`, `isTeacher`, `classId`) VALUES
(1, 'UserMail', 'UserFirstname', 'userLastname', 'UserPassword', 0, 0, 1),
(2, 'user2mail', 'user2firstname', 'user2lastname', 'user2pass', 0, 0, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `classees`
--
ALTER TABLE `classees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `question_answers`
--
ALTER TABLE `question_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `QUESTION_ANSWER_QUESTION_ID_idx` (`questionId`),
  ADD KEY `QUESTION_ANSWER_ANSWER_ID_idx` (`answerId`);

--
-- Index pour la table `question_choices`
--
ALTER TABLE `question_choices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `QUESTION_CHOICE_QUESTION_ID_idx` (`questionId`),
  ADD KEY `QUESTION_CHOICE_ANSWER_ID_idx` (`answerId`),
  ADD KEY `QUESTION_CHOICE_USER_ID_idx` (`userId`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `SESSION_USER_ID_idx` (`userId`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USER_CLASS_ID_idx` (`classId`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `classees`
--
ALTER TABLE `classees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `question_answers`
--
ALTER TABLE `question_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `question_choices`
--
ALTER TABLE `question_choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `question_answers`
--
ALTER TABLE `question_answers`
  ADD CONSTRAINT `QUESTION_ANSWER_ANSWER_ID` FOREIGN KEY (`answerId`) REFERENCES `answers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `QUESTION_ANSWER_QUESTION_ID` FOREIGN KEY (`questionId`) REFERENCES `questions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `question_choices`
--
ALTER TABLE `question_choices`
  ADD CONSTRAINT `QUESTION_CHOICE_ANSWER_ID` FOREIGN KEY (`answerId`) REFERENCES `answers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `QUESTION_CHOICE_QUESTION_ID` FOREIGN KEY (`questionId`) REFERENCES `questions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `QUESTION_CHOICE_USER_ID` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `SESSION_USER_ID` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `USER_CLASS_ID` FOREIGN KEY (`classId`) REFERENCES `classees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
