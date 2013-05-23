-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 22. Mai 2013 um 14:29
-- Server Version: 5.1.44
-- PHP-Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `coffeestar`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bewertung`
--

CREATE TABLE IF NOT EXISTS `bewertung` (
  `bewertung_id` int(11) NOT NULL AUTO_INCREMENT,
  `geschmack` int(11) NOT NULL,
  `essen` int(11) NOT NULL,
  `ambiente` int(11) NOT NULL,
  `beschreibung` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `usersystem_id` int(11) NOT NULL,
  `kaffee_db_id` int(11) NOT NULL,
  PRIMARY KEY (`bewertung_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Daten für Tabelle `bewertung`
--


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kaffee_db`
--

CREATE TABLE IF NOT EXISTS `kaffee_db` (
  `kaffee_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) CHARACTER SET utf8 NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `inhaber` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `usersystem_id` int(11) NOT NULL,
  PRIMARY KEY (`kaffee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Daten für Tabelle `kaffee_db`
--


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usersystem`
--

CREATE TABLE IF NOT EXISTS `usersystem` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr` varchar(120) CHARACTER SET latin1 NOT NULL,
  `pswd` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `usersystem`
--

INSERT INTO `usersystem` (`user_id`, `usr`, `pswd`) VALUES
(1, 'admin', 'admin'),
(2, 'test', 'test');
