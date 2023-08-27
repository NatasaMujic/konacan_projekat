-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 08:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `l_name`, `username`, `password`) VALUES
(1, 'Ana', 'Sabo', 'gugisinaulica@gmail.com', '$2y$10$/seOKaM0smYnC6rvfiFCiO5efi/Ahy3l95zPQQWZfxuKxVFUN6vbu'),
(2, 'Natasa', 'Mujic', 'mujicnatasa99@gmail.com', '$2y$10$/NqJO29hD7mFozrV90tnAubvNSMT1o8vF6BG12uXgnI.JqO7zbeC2');

-- --------------------------------------------------------

--
-- Table structure for table `event_reminder`
--

CREATE TABLE `event_reminder` (
  `id_reminder` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `guest_name` varchar(20) NOT NULL,
  `guest_email` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

CREATE TABLE `invitation` (
  `id_invitation` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `wish_list` varchar(200) NOT NULL,
  `attendance` varchar(20) NOT NULL,
  `id_event` int(11) NOT NULL,
  `guest_comment` varchar(100) NOT NULL,
  `wish_list_answer` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_event`
--

CREATE TABLE `new_event` (
  `id_event` int(11) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `image` blob NOT NULL,
  `description` varchar(500) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `allow_comments` tinyint(1) NOT NULL,
  `blocked` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `new_event`
--

INSERT INTO `new_event` (`id_event`, `event_name`, `image`, `description`, `address`, `city`, `state`, `date`, `allow_comments`, `blocked`, `user_id`) VALUES
(37, 'Bacon Event in SU', 0x6261636f6e2e6a7067, 'Come taste out bacons!', 'Bacon St. 123', 'Subotica', 'Serbia', '2023-08-27', 1, 0, 87),
(38, 'Fruit Charity', 0x6368657272792e6a7067, 'We pick cherries and donate them. Join in on the fun!', 'Cherry St. 2', 'Subotica', 'Serbia', '2023-08-31', 0, 0, 87);

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `organization_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(75) NOT NULL,
  `block_user` tinyint(4) NOT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`user_id`, `first_name`, `last_name`, `organization_name`, `email`, `password`, `block_user`, `activation_code`, `is_active`) VALUES
(87, 'Ana', 'Sabo', 'WebPro', 'gugisinaulica@gmail.com', '$2y$10$o/2Ij4oCaNAcwzxXu1fT3uzuLaYYtVjZAit2yg8XjU.UcuUs2R5wq', 0, '5559981c9b2f0a5f1cdf040949944307', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_reminder`
--
ALTER TABLE `event_reminder`
  ADD PRIMARY KEY (`id_reminder`),
  ADD KEY `fk_event_id` (`id_event`);

--
-- Indexes for table `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`id_invitation`),
  ADD KEY `FK_Event` (`id_event`);

--
-- Indexes for table `new_event`
--
ALTER TABLE `new_event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `FK_EventCreator` (`user_id`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_reminder`
--
ALTER TABLE `event_reminder`
  MODIFY `id_reminder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invitation`
--
ALTER TABLE `invitation`
  MODIFY `id_invitation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `new_event`
--
ALTER TABLE `new_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
