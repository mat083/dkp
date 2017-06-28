-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lun 13 Avril 2009 à 01:44
-- Version du serveur: 5.0.51
-- Version de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `croiseslordaeron`
--
-- --------------------------------------------------------

--
-- Structure de la table `adminsite`
--

CREATE TABLE `adminsite` (
  `login` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY  (`login`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `adminsite`
--

INSERT INTO `adminsite` (`login`, `pwd`) VALUES
('admin', 'mat083'),
('officier', 'motdepassetest');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `pseudo` varchar(50) NOT NULL,
  `Pt_actu` int(10) NOT NULL,
  `Pt_dep` int(10) NOT NULL,
  `Pt_ttx` int(10) NOT NULL,
  `mail` varchar(50) default NULL,
  `login` varchar(50) default NULL,
  `pwd` varchar(50) default NULL,
  PRIMARY KEY  (`pseudo`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--


-- --------------------------------------------------------

--
-- Structure de la table `suivi`
--

CREATE TABLE `suivi` (
  `numpk` int(10) NOT NULL auto_increment,
  `pseudo` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `com` varchar(200) default NULL,
  `points` int(10) NOT NULL,
  PRIMARY KEY  (`numpk`),
  KEY `FK_suiv` (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `suivi`
--


--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD CONSTRAINT `FK_suiv` FOREIGN KEY (`pseudo`) REFERENCES `membre` (`pseudo`);
