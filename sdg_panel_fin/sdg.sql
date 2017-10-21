-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2017 at 04:19 PM
-- Server version: 5.6.33-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sdg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `user` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user`, `password`) VALUES
('Divya', 'divya');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_image` varchar(100) NOT NULL,
  `author_folder` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_folder` varchar(100) NOT NULL,
  `story` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `category`, `title`, `name`, `author_name`, `author_image`, `author_folder`, `image_name`, `image_folder`, `story`) VALUES
(2, 3, 'afs', 'aa', 'aaa', '', '', '', 'images/', 'aaaa'),
(3, 1, 'q', 'qq', 'qqq', '', '', 'GalleryComics_1920x1080_20150401_WW_Cv30_550cc8eb33e618.18011058.jpg', 'images/', 'sasa'),
(4, 0, 'w', 'ww', 'www', 'seperate_two_audios.png', 'authors/', 'myimage.jpg', 'images/', 'wwwwwwwwww');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category` int(1) NOT NULL,
  PRIMARY KEY (`category`),
  UNIQUE KEY `category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`) VALUES
(0),
(1),
(2),
(3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
