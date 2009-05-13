-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 13. Mai 2009 um 00:09
-- Server Version: 5.1.33
-- PHP-Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `content_adicted`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `content_adicted_news`
--

CREATE TABLE IF NOT EXISTS `content_adicted_news` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` bigint(20) NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Daten für Tabelle `content_adicted_news`
--

INSERT INTO `content_adicted_news` (`id`, `date`, `text`) VALUES
(16, 1242165600, '<p>&Uuml;berall dieselbe alte Leier. <strong>Das Layout ist fertig</strong>, der Text l&auml;sst auf sich warten. Damit das Layout nun nicht nackt im Raume steht und sich klein und leer vorkommt, springe ich ein: der Blindtext. Genau zu diesem Zwecke erschaffen, immer im Schatten meines gro&szlig;en Bruders &raquo;Lorem Ipsum&laquo;, freue ich mich jedes Mal, wenn Sie ein paar Zeilen lesen. Denn esse est percipi - Sein ist wahrgenommen werden.<br />\r\nUnd weil Sie nun schon die G&uuml;te haben, mich ein paar weitere S&auml;tze lang zu begleiten, m&ouml;chte ich diese Gelegenheit nutzen, Ihnen nicht nur als L&uuml;ckenf&uuml;ller zu dienen, sondern auf etwas hinzuweisen, das es ebenso verdient wahrgenommen zu werden: Webstandards n&auml;mlich.</p>');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `content_adicted_user`
--

CREATE TABLE IF NOT EXISTS `content_adicted_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `realname` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password_md5` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `logins` bigint(20) NOT NULL,
  `last_login` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `nameindex_idx` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Daten für Tabelle `content_adicted_user`
--

INSERT INTO `content_adicted_user` (`id`, `username`, `realname`, `password_md5`, `logins`, `last_login`) VALUES
(8, 'admin', 'Max Mustermann', '21232f297a57a5a743894a0e4a801fc3', 1, 1242165806);
