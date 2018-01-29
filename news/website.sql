-- phpMyAdmin SQL Dump
-- version 3.3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2018 at 06:01 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(10) NOT NULL auto_increment,
  `date` date NOT NULL,
  `image` varchar(50) character set utf8 NOT NULL,
  `title` varchar(200) character set utf8 NOT NULL,
  `content` text character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `date`, `image`, `title`, `content`) VALUES
(14, '2018-01-28', '14', 'asdasd', '<p>asdasd</p>'),
(15, '2018-01-28', '15', 'aaaaaaaaaasbdfb', '<p>bsbgwerfq</p>'),
(16, '2018-01-28', '16', 'asgg45g44', '<p>asfae2r32r</p>'),
(9, '2015-12-22', '4.png', 'WHYSIWYG Web Editor', 'tes'),
(12, '2015-12-23', '10', 'facebook form login', '<p>Who doesnt know facebook ?</p>'),
(13, '2018-01-28', '13', 'aaaaaaaaaaaaaaaaaa', '<p>sadasdasdasdas</p>');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL auto_increment,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `pass`, `email`) VALUES
(1, 'admin', '1234', 'nunavx.rf@gmail.com');
