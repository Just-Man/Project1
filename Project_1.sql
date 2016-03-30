-- phpMyAdmin SQL Dump
-- version 4.5.5.1deb2.wily~ppa.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2016 at 07:47 AM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 7.0.4-5+deb.sury.org~wily+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `interest_id` smallint(6) NOT NULL,
  `interestcol` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interest_tree`
--

CREATE TABLE `interest_tree` (
  `id_parrent` smallint(6) NOT NULL,
  `id_child` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messege`
--

CREATE TABLE `messege` (
  `id_messege` int(11) NOT NULL,
  `msg_text` varchar(255) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `readed` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(45) CHARACTER SET utf8 NOT NULL,
  `user_lname` varchar(45) CHARACTER SET utf8 NOT NULL,
  `username` varchar(45) CHARACTER SET utf8 NOT NULL,
  `user_mail` varchar(45) CHARACTER SET utf8 NOT NULL,
  `user_pass` varchar(45) CHARACTER SET utf8 NOT NULL,
  `users_friends` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_has_interest`
--

CREATE TABLE `users_has_interest` (
  `users_user_id` int(11) NOT NULL,
  `interest_interest_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_has_interest_tree`
--

CREATE TABLE `users_has_interest_tree` (
  `users_user_id` int(11) NOT NULL,
  `interest_tree_id_parrent` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_has_users`
--

CREATE TABLE `users_has_users` (
  `users_user_id` int(11) NOT NULL,
  `users_user_id1` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_has_picture`
--

CREATE TABLE `user_has_picture` (
  `user_id` int(11) NOT NULL,
  `picture_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`interest_id`);

--
-- Indexes for table `interest_tree`
--
ALTER TABLE `interest_tree`
  ADD PRIMARY KEY (`id_parrent`),
  ADD UNIQUE KEY `id_child_UNIQUE` (`id_child`);

--
-- Indexes for table `messege`
--
ALTER TABLE `messege`
  ADD PRIMARY KEY (`id_messege`),
  ADD KEY `fk_messege_users1_idx` (`sender_id`),
  ADD KEY `fk_messege_users2_idx` (`recipient_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_pass_UNIQUE` (`user_pass`),
  ADD UNIQUE KEY `user_mail_UNIQUE` (`user_mail`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `users_friends_UNIQUE` (`users_friends`);

--
-- Indexes for table `users_has_interest`
--
ALTER TABLE `users_has_interest`
  ADD PRIMARY KEY (`users_user_id`,`interest_interest_id`),
  ADD KEY `fk_users_has_interest_interest1_idx` (`interest_interest_id`),
  ADD KEY `fk_users_has_interest_users_idx` (`users_user_id`);

--
-- Indexes for table `users_has_interest_tree`
--
ALTER TABLE `users_has_interest_tree`
  ADD PRIMARY KEY (`users_user_id`,`interest_tree_id_parrent`),
  ADD KEY `fk_users_has_interest_tree_interest_tree1_idx` (`interest_tree_id_parrent`),
  ADD KEY `fk_users_has_interest_tree_users1_idx` (`users_user_id`);

--
-- Indexes for table `users_has_users`
--
ALTER TABLE `users_has_users`
  ADD PRIMARY KEY (`users_user_id`,`users_user_id1`),
  ADD KEY `fk_users_has_users_users2_idx` (`users_user_id1`),
  ADD KEY `fk_users_has_users_users1_idx` (`users_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `interest_id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messege`
--
ALTER TABLE `messege`
  MODIFY `id_messege` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `interest_tree`
--
ALTER TABLE `interest_tree`
  ADD CONSTRAINT `fk_interest_tree_interest1` FOREIGN KEY (`id_child`) REFERENCES `interest` (`interest_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
