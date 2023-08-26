-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 26, 2023 at 04:44 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `f_name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `l_name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `l_name`, `username`, `password`) VALUES
(2, 'Natasa', 'Mujic', 'mujicnatasa99@gmail.com', '$2y$10$/NqJO29hD7mFozrV90tnAubvNSMT1o8vF6BG12uXgnI.JqO7zbeC2');

-- --------------------------------------------------------

--
-- Table structure for table `event_reminder`
--

DROP TABLE IF EXISTS `event_reminder`;
CREATE TABLE IF NOT EXISTS `event_reminder` (
  `id_reminder` int NOT NULL AUTO_INCREMENT,
  `id_event` int NOT NULL,
  `guest_name` varchar(20) COLLATE utf16_bin NOT NULL,
  `guest_email` varchar(30) COLLATE utf16_bin NOT NULL,
  `message` varchar(100) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id_reminder`),
  KEY `fk_event_id` (`id_event`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `event_reminder`
--

INSERT INTO `event_reminder` (`id_reminder`, `id_event`, `guest_name`, `guest_email`, `message`) VALUES
(2, 19, 'Natasa', 'mujicnatasa99@gmail.com', 'We want to remind you on our event: Rakijada sljivovica that will happen in three days');

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

DROP TABLE IF EXISTS `invitation`;
CREATE TABLE IF NOT EXISTS `invitation` (
  `id_invitation` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `wish_list` varchar(200) NOT NULL,
  `attendance` varchar(20) NOT NULL,
  `id_event` int NOT NULL,
  `guest_comment` varchar(100) NOT NULL,
  `wish_list_answer` varchar(50) NOT NULL,
  PRIMARY KEY (`id_invitation`),
  KEY `FK_Event` (`id_event`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `invitation`
--

INSERT INTO `invitation` (`id_invitation`, `first_name`, `last_name`, `email`, `comment`, `wish_list`, `attendance`, `id_event`, `guest_comment`, `wish_list_answer`) VALUES
(1, 'Branka', 'Mujic', 'mujicbranka66@gmail.com', 'You are welcome to come to our worlds food event with Chinese food including sushi.', '', 'coming', 123, '', ''),
(2, 'Natasa', 'Mujic', 'mujicnatasa99@gmail.com', 'You are welcome to come to our selling hoby materials event', '', 'maybe coming', 123, '', ''),
(8, 'Nebojsa', 'Mujic', 'mujicnebojsa97@gmail.com', 'Hey, you are welcome to our night of poetry event! :)', '', 'coming', 20, '', ''),
(4, 'Natasa', 'Mujic', 'mujicbranka66@gmail.com', 'Evo radi i slanje fajla za svaki slucaj ako se odlucimo za tu opciju', '', 'coming', 0, '', ''),
(5, 'Natasa', 'Mujic', 'mujicbranka66@gmail.com', 'Isprobavam slanje mail-a', '', 'coming', 15, '', ''),
(9, 'Nebojsa', 'Mujic', 'mujicnebojsa97@gmail.com', 'Isprobavam slanje mail-a', '', '0', 22, 'fdadsad', ''),
(10, 'Branka', 'Jicmu', 'mujicbranka66@gmail.com', 'You are invited to our LADIES NIGHT Indonesian event', '', 'coming', 24, 'thank you it was awesome', ''),
(11, 'Branka', 'Mujic', 'mujicbranka66@gmail.com', 'You are welcome to come to our jewelry shop event', '', '0', 26, '', 'Hvala'),
(12, 'Natasa', 'Mujic', 'mujicnatasa99@gmail.com', 'Isprobavam slanje mail-a', 'Naš Food Event Wishlist:\r\n\r\n1. Predjelo:\r\n   - Slani minjoni sa različitim prelivima\r\n   - Brusketi sa paradajzom i bosiljkom\r\n   - Guacamole sa tortilja čipsom\r\n\r\n2. Glavno jelo:\r\n   - Grilovana pile', 'maybe coming', 19, 'dobra vam bila sljivovica!', 'Dobra vam rakija bila!'),
(14, 'Branka', 'Mujic', 'mujicbranka66@gmail.com', 'Vozdra isprobavam slanje mail-ova za projekat', '', '0', 28, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `new_event`
--

DROP TABLE IF EXISTS `new_event`;
CREATE TABLE IF NOT EXISTS `new_event` (
  `id_event` int NOT NULL AUTO_INCREMENT,
  `event_name` varchar(30) NOT NULL,
  `image` blob NOT NULL,
  `description` varchar(500) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `allow_comments` tinyint(1) NOT NULL,
  `blocked` tinyint(1) NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id_event`),
  KEY `FK_EventCreator` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `new_event`
--

INSERT INTO `new_event` (`id_event`, `event_name`, `image`, `description`, `address`, `city`, `state`, `date`, `allow_comments`, `blocked`, `user_id`) VALUES
(35, 'Kobasicijada', 0x433a5c77616d7036345c746d705c706870364336432e746d70, 'Kobasicijada event', 'Jovana Mikica 34', 'Krusevac', 'Serbia', '2023-08-31', 1, 0, 81),
(12, 'Exit Festival', 0x433a5c77616d7036345c746d705c706870363332462e746d70, 'Our exit festival is held every year in Novi Sad', 'Petra Drapsina 56', 'Novi Sad', 'Serbia', '2023-08-31', 1, 0, 71),
(16, 'Fashion Week', 0x433a5c77616d7036345c746d705c706870344138462e746d70, 'Welcome to our fashion week event', 'Sergeja Jesenjina 19/8', 'Subotica', 'Serbia', '2023-08-31', 1, 0, 75),
(17, 'Hoby materials', 0x433a5c77616d7036345c746d705c706870393430372e746d70, 'Welcome to our event', 'Sergeja Jesenjina 19/8', 'Subotica', 'Serbia', '2023-08-30', 1, 0, 77),
(19, 'Rakijada', 0x433a5c77616d7036345c746d705c706870313032432e746d70, 'Welcom to rakijada!', 'Sergeja Jesenjina 19/8', 'Subotica', 'Serbia', '2023-08-21', 1, 0, 81),
(20, 'Night of poetry', 0x433a5c77616d7036345c746d705c706870433041372e746d70, 'You are welcome to come to our Night of poetry.\r\n', 'Milovana Glisica 34', 'Kragujevac', 'Serbia', '2023-08-29', 1, 0, 81),
(22, 'Jewellery for women', 0x433a5c77616d7036345c746d705c706870464233462e746d70, 'Jewellery for women shop event', 'Dimitrija Tucovica 23', 'Subotica', 'Serbia', '2023-08-20', 1, 0, 81),
(24, 'Ladies Night ', 0x433a5c77616d7036345c746d705c706870463741432e746d70, 'We will be very happy to have you with us on Saturday August 22th.\r\nThank you again for your participation and save the next special date:\r\n*August 22th, 2023 – LADIES NIGHT*', 'Sent Luis 45', 'Jakarta', 'Indonesia', '2023-08-22', 1, 1, 81),
(28, 'Camping Night', 0x433a5c77616d7036345c746d705c706870344641412e746d70, 'Biggest camping night event in the world!', 'Sergeja Jesenjina 19/8', 'Subotica', 'Serbia', '2023-08-27', 1, 1, 81);

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

DROP TABLE IF EXISTS `registered_user`;
CREATE TABLE IF NOT EXISTS `registered_user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) COLLATE utf8mb3_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb3_unicode_ci NOT NULL,
  `organization_name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(75) COLLATE utf8mb3_unicode_ci NOT NULL,
  `block_user` tinyint NOT NULL,
  `activation_code` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `is_active` tinyint NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`user_id`, `first_name`, `last_name`, `organization_name`, `email`, `password`, `block_user`, `activation_code`, `is_active`) VALUES
(37, 'Milena', 'Vasic', 'vasic DOO', 'milenavasic@gmail.com', '$2y$10$ajCXcikr5G0YQ1D2loTL0esbFm1d0zBzlEhlWHJE3TmRBUvgFupv2', 0, NULL, 1),
(82, 'Ana', 'Sabo', '', 'gugisinaulica@gmail.com', '$2y$10$p4KAjRiXQvMlNIcMkzhK6uUwUbxlUf.yO83DVB67gkNVWyWBs3l2S', 0, 'c2e7dcae581041567b32e8569fe3d839', 0),
(76, 'Branka', 'Mujic', '', 'mujicbranka66@gmail.com', '$2y$10$aUUcvhkNgALvuiQPhYm75uULmuP9UusYFgD7bqZqDtNs4.fR1yLMW', 1, '85d647f0d9c4f0966d548dea6bbe6809', 0),
(81, 'Natasa', 'Mujic', '', 'mujicnatasa99@gmail.com', '$2y$10$a/NeEVjOReHmEQFnQAn9SOlzpdWFFW5Oj4WoJfv1QVGFupEyIArpy', 0, '363950b760798c34ef49373b07e311de', 0),
(84, 'Nebojsa', 'Mujic', '', 'mujicnebojsa17@gmail.com', '$2y$10$uhPtUOqP.NihmkCTD4Sb5.KWzVpTyKvjY1IEI4Za/Yw9LIVky7McK', 0, '9bb3927743738dda6cf70eb6edfe0ec1', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
