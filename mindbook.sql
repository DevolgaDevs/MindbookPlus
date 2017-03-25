-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 25 Mars 2017 à 13:52
-- Version du serveur :  5.5.54-0+deb8u1
-- Version de PHP :  5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mindbook`
--

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
`id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `answers`
--

INSERT INTO `answers` (`id`, `text`) VALUES
(1, 'Oui'),
(2, 'Non');

-- --------------------------------------------------------

--
-- Structure de la table `classees`
--

CREATE TABLE IF NOT EXISTS `classees` (
`id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `classees`
--

INSERT INTO `classees` (`id`, `name`) VALUES
(1, 'NoClass'),
(2, 'M2 MIAGE apprentissage');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`id` int(11) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `isOpenQuestion` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `questions`
--

INSERT INTO `questions` (`id`, `text`, `isOpenQuestion`) VALUES
(1, 'Est-tu gay ?', 0),
(2, 'Aura-t-on plus de 15/20 à ce projet ?', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `question_answers`
--

CREATE TABLE IF NOT EXISTS `question_answers` (
`id` int(11) NOT NULL,
  `questionId` int(11) DEFAULT NULL,
  `answerId` int(11) DEFAULT NULL,
  `isRightAnswer` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `question_answers`
--

INSERT INTO `question_answers` (`id`, `questionId`, `answerId`, `isRightAnswer`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `question_choices`
--

CREATE TABLE IF NOT EXISTS `question_choices` (
`id` int(11) NOT NULL,
  `questionId` int(11) DEFAULT NULL,
  `answerId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `classId` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `hasQuestions` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sessions`
--

INSERT INTO `sessions` (`id`, `name`, `userId`, `classId`, `date`, `hasQuestions`) VALUES
(1, 'Gestion des SI', 2, 1, '2017-03-25 23:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `isTeacher` tinyint(1) DEFAULT NULL,
  `classId` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `isAdmin`, `isTeacher`, `classId`) VALUES
(1, 'UserMail', 'UserFirstname', 'userLastname', 'UserPassword', 0, 0, 1),
(2, 'Marvin', 'user2firstname', 'user2lastname', '$2y$10$aJdWDv/Bz1SF2O4jc2exA.VnOdr0Gofh29h4ITxXPDbKlWycHI79K', 0, 0, 2);

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
 ADD PRIMARY KEY (`id`), ADD KEY `QUESTION_ANSWER_QUESTION_ID_idx` (`questionId`), ADD KEY `QUESTION_ANSWER_ANSWER_ID_idx` (`answerId`);

--
-- Index pour la table `question_choices`
--
ALTER TABLE `question_choices`
 ADD PRIMARY KEY (`id`), ADD KEY `QUESTION_CHOICE_QUESTION_ID_idx` (`questionId`), ADD KEY `QUESTION_CHOICE_ANSWER_ID_idx` (`answerId`), ADD KEY `QUESTION_CHOICE_USER_ID_idx` (`userId`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
 ADD PRIMARY KEY (`id`), ADD KEY `SESSION_USER_ID_idx` (`userId`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `USER_CLASS_ID_idx` (`classId`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `classees`
--
ALTER TABLE `classees`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `question_answers`
--
ALTER TABLE `question_answers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `question_choices`
--
ALTER TABLE `question_choices`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sessions`
--
ALTER TABLE `sessions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
ADD CONSTRAINT `SESSION_USER_ID` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `SESSION_CLASS_ID` FOREIGN KEY (`classId`) REFERENCES `classees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `USER_CLASS_ID` FOREIGN KEY (`classId`) REFERENCES `classees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
