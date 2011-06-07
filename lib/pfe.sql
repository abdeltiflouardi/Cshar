-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Ven 03 Juin 2011 à 16:02
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `file` int(11) DEFAULT NULL,
  `member` int(11) DEFAULT NULL,
  `comment` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_COMPORTER` (`file`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`Id`, `file`, `member`, `comment`) VALUES
(1, 1, 1, 'Hello'),
(16, 1, 2, ''),
(20, 1, 2, 's'),
(21, 1, 9, 'Hellow fogk '),
(22, 1, 7, 'sjer');

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=157 ;

--
-- Contenu de la table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'France'),
(2, 'Belgique \n'),
(3, 'Luxembourg \n'),
(4, 'Suisse \n'),
(5, 'Canada \n'),
(6, 'Afghanistan \n'),
(7, 'Afrique du Sud  '),
(8, 'Alg&eacute;rie \n'),
(9, 'Allemagne \n'),
(10, 'Antilles N&eacute;erlandaises \n'),
(11, 'Arabie Saoudite \n'),
(12, 'Argentine \n'),
(13, 'Arm&eacute;nie \n'),
(14, 'Australie \n'),
(15, 'Autriche \n'),
(16, 'Azerba&iuml;djan \n'),
(17, 'Bahamas \n'),
(18, 'Bahre&iuml;n \n'),
(19, 'Belize \n'),
(20, 'B&eacute;nin \n'),
(21, 'Bi&eacute;lorussie \n'),
(22, 'Bolivie \n'),
(23, 'Bosnie-Herz&eacute;govine \n'),
(24, 'Br&eacute;sil \n'),
(25, 'Bulgarie \n'),
(26, 'Burkina \n'),
(27, 'Cameroun \n'),
(28, 'Cap-Vert \n'),
(29, 'Chili \n'),
(30, 'Chine \n'),
(31, 'Chypre \n'),
(32, 'Colombie \n'),
(33, 'Comores \n'),
(34, 'Congo \n'),
(35, 'Cor&eacute;e du Sud \n'),
(148, NULL),
(37, 'C&ocirc;te d''Ivoire \n'),
(38, 'Croatie \n'),
(39, 'Cuba \n'),
(40, 'Danemark \n'),
(41, 'Djibouti \n'),
(42, 'Egypte \n'),
(43, 'Emirats arabes unis \n'),
(44, 'Equateur \n'),
(45, 'Erythr&eacute;e \n'),
(46, 'Espagne \n'),
(47, 'Estonie \n'),
(48, 'Etats-Unis \n'),
(49, 'Ethiopie \n'),
(50, 'Finlande \n'),
(51, 'Gabon \n'),
(52, 'Gambie \n'),
(53, 'G&eacute;orgie \n'),
(54, 'Ghana \n'),
(55, 'Gr&ecirc;ce \n'),
(56, 'Guatemala \n'),
(57, 'Guin&eacute;e \n'),
(58, 'Guin&eacute;e &eacute;quatoriale \n'),
(59, 'Guin&eacute;e-Bissao \n'),
(60, 'Guyana \n'),
(61, 'Guyane Française \n'),
(62, 'Ha&iuml;ti \n'),
(63, 'Honduras \n'),
(64, 'Hong-Kong \n'),
(65, 'Hongrie \n'),
(66, 'Inde \n'),
(67, 'Indon&eacute;sie \n'),
(68, 'Iran \n'),
(69, 'Iraq \n'),
(70, 'Irlande \n'),
(71, 'Islande \n'),
(72, 'Isra&euml;l \n'),
(73, 'Italie \n'),
(74, 'Jama&iuml;que \n'),
(75, 'Japon \n'),
(76, 'Jordanie \n'),
(77, 'Kazakhstan \n'),
(78, 'Kenya \n'),
(79, 'Kirghizistan \n'),
(80, 'Kowe&iuml;t \n'),
(81, 'Lettonie \n'),
(82, 'Liban \n'),
(83, 'Liberia \n'),
(84, 'Libye \n'),
(85, 'Liechtenstein \n'),
(86, 'Lituanie \n'),
(87, 'Mac&eacute;doine \n'),
(88, 'Madagascar \n'),
(89, 'Mali \n'),
(90, 'Malte \n'),
(91, 'Maroc \n'),
(92, 'Maurice \n'),
(93, 'Mauritanie \n'),
(94, 'Mexique \n'),
(95, 'Moldavie \n'),
(96, 'Nicaragua \n'),
(97, 'Niger \n'),
(98, 'Nigeria \n'),
(99, 'Norv&ecirc;ge \n'),
(100, 'Nouvelle-Cal&eacute;donie \n'),
(101, 'Nouvelle-Z&eacute;lande \n'),
(102, 'Oman \n'),
(103, 'Ouganda \n'),
(104, 'Ouzb&eacute;kistan \n'),
(105, 'Pakistan \n'),
(106, 'Panama \n'),
(107, 'Paraguay \n'),
(108, 'Pays-Bas \n'),
(109, 'P&eacute;rou \n'),
(110, 'Philippines \n'),
(111, 'Pologne \n'),
(112, 'Polyn&eacute;sie Française \n'),
(113, 'Porto Rico \n'),
(114, 'Portugal \n'),
(115, 'Qatar \n'),
(116, 'R&eacute;publique centrafricaine \n'),
(117, 'R&eacute;publique D&eacute;mocratique du Congo \n'),
(118, 'R&eacute;publique dominicaine \n'),
(119, 'R&eacute;publique tch&ecirc;que \n'),
(120, 'Roumanie \n'),
(121, 'Royaume-Uni \n'),
(122, 'Russie \n'),
(123, 'Rwanda \n'),
(124, 'Salvador \n'),
(125, 'S&eacute;n&eacute;gal \n'),
(126, 'Serbie-et-Mont&eacute;n&eacute;gro \n'),
(127, 'Sierra Leone \n'),
(128, 'Slovaquie \n'),
(129, 'Slov&eacute;nie \n'),
(130, 'Somalie \n'),
(131, 'Soudan \n'),
(132, 'Su&ecirc;de \n'),
(133, 'Suriname \n'),
(134, 'Syrie \n'),
(135, 'Tadjikistan \n'),
(136, 'Ta&iuml;wan \n'),
(137, 'Tchad \n'),
(138, 'Tha&iuml;lande \n'),
(139, 'Togo \n'),
(140, 'Tunisie \n'),
(141, 'Turkm&eacute;nistan \n'),
(142, 'Turquie \n'),
(143, 'Ukraine \n'),
(144, 'Uruguay \n'),
(145, 'Venezuela \n'),
(146, 'Vi&ecirc;t Nam \n'),
(147, 'Y&eacute;men '),
(156, 'Zimbab'),
(155, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Structure de la table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `link` varchar(120) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `downloaded` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_COMPOSER` (`group`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `file`
--

INSERT INTO `file` (`id`, `group`, `name`, `link`, `created`, `downloaded`) VALUES
(1, 1, 'Jeux', 'azertyfkgto343', '2011-05-26 02:20:29', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `groupdetails`
--

CREATE TABLE IF NOT EXISTS `groupdetails` (
  `group` int(11) NOT NULL,
  `member` int(11) NOT NULL,
  `dateofintegration` date DEFAULT NULL,
  `notification` int(1) NOT NULL,
  PRIMARY KEY (`group`,`member`),
  KEY `FK_RELATIONSHIP_2` (`member`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groupdetails`
--

INSERT INTO `groupdetails` (`group`, `member`, `dateofintegration`, `notification`) VALUES
(1, 1, '2011-05-28', 0);

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `activity` varchar(30) DEFAULT NULL,
  `dateissue` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CREER` (`member`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `member`, `name`, `activity`, `dateissue`) VALUES
(1, 1, 'TSDI1', 'Cours de TSDI1', '2011-04-29 00:00:00'),
(10, 1, 'TSDI', 'Voila', '2011-05-30 22:57:42');

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) DEFAULT NULL,
  `firstname` varchar(60) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `occupation` varchar(30) DEFAULT NULL,
  `password` varchar(220) DEFAULT NULL,
  `nature` varchar(30) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_HABITER` (`country`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `member`
--

INSERT INTO `member` (`id`, `login`, `firstname`, `lastname`, `birthday`, `email`, `occupation`, `password`, `nature`, `country`, `status`) VALUES
(1, 'admin', 'Ayyoub', 'Dahhane', '1990-10-09', 'dahhane@gmail.com', 'Administrateur', '4dab7000c41bf675a83d8ced142d2e2b', 'admin', 91, 1),
(2, 'eayoub', '', '', '2011-06-01', 'ayoub@live.fr', '', '4dab7000c41bf675a83d8ced142d2e2b', 'user', 74, 1),
(3, 'adnane', NULL, NULL, NULL, 'h-adnane@live.fr', NULL, 'ab4f63f9ac65152575886860dde480a1', 'user', 91, 1),
(6, 'login', NULL, NULL, NULL, 'ayoub@live.fr', NULL, 'd56b699830e77ba53855679cb1d252da', 'user', 91, 1),
(7, 'login', NULL, NULL, NULL, 'ayoub@live.fr', NULL, 'd56b699830e77ba53855679cb1d252da', 'user', 91, 1),
(19, 'Fayçal', 'Fayçal', 'chebihi', '2011-06-05', 'faycal@gmail.com', 'Professeur', 'azerty', 'user', 17, 0),
(13, 'Eayoub', 'ayyoub', 'Dahhane', '2011-06-15', 'dahhane@gmail.com', 'azerty', 'azerty', 'user', 10, 0),
(18, 'eayoub', 'ayyoub', 'Dahhane', '2011-06-04', 'dahhane@gmail.com', 'Train', 'a', 'admin', 1, 0),
(14, 'azerty', 'ayyoub', 'Dahhane', '2011-06-02', 'dahhane@gmail.com', 'aze', 'az', 'moderator', 1, 0),
(16, 'oiseaulibre', 'Amine', 'Kennitrate', '2012-01-14', 'kenitrate@gmail.com', 'DagDag', 'azerty', 'moderator', 4, 0);
