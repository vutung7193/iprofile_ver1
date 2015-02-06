-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 06 Février 2015 à 15:34
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `iprofile2`
--

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `short_name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `company`
--

INSERT INTO `company` (`id`, `name`, `short_name`) VALUES
(1, 'Tinh Van Incubator', 'TVI'),
(2, 'null', '');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(500) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `now_address` varchar(500) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `school_id` int(11) NOT NULL,
  `major_id` int(11) NOT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `mail` varchar(500) NOT NULL,
  `facebook` varchar(500) DEFAULT NULL,
  `skype` varchar(500) DEFAULT NULL,
  `phone` varchar(500) NOT NULL,
  `ident_number` varchar(500) DEFAULT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `school_id` (`school_id`),
  KEY `major_id` (`major_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `employee`
--

INSERT INTO `employee` (`id`, `name`, `birthdate`, `sex`, `address`, `now_address`, `school_id`, `major_id`, `logo`, `mail`, `facebook`, `skype`, `phone`, `ident_number`, `status`) VALUES
(7, 'Vũ Văn Tùng', '2018-02-04', 'Nam', 'Tien Hai - Thai Binh', 'My Dinh - Ha Noi', 3, 1, '/Upload/2015-01-14/hoangsa.PNG', 'vvt7193@gmail.com', 'vutung.vvt93', 'mrvvt93', '0988332563', '151936607', 1),
(8, 'Luong Ba Trung', '2015-01-01', 'Nam', 'Hai Phong', 'Ha Noi', 3, 1, '/Upload/2015-01-26/Dinh.png', 'trungluongict@gmail.com', '', '', '0988334532', '', 1),
(9, 'Pham Van Manh', '0000-00-00', 'Nam', 'Thai Binh', 'Ha Noi', 2, 1, '/Upload/2015-01-14/hat.PNG', 'phammanh@gmail.com', '', '', '0988831293', '', 1),
(10, 'Le Huu Dong', '0000-00-00', 'Nam', 'Ha Noi', 'Ha Noi', 1, 1, '/Upload/2015-01-21/huudong.ptit.jpg', 'dfvfdbvdfb', '', '', 'fgnfnghn', '', 1),
(12, 'Phạm Kiều Thanh', '1992-01-09', 'Nam', '', '', 3, 1, NULL, '243435', '', '', '2434', '', 1),
(15, 'Nguyễn Văn Đỉnh', '2015-01-13', 'Nam', 'Hà Nội', 'Hà Nội', 1, 1, NULL, 'xvsdvsdvf', '', '', 'dfgf', '', 1),
(16, 'Phạm Kiều Thanh', '2015-01-12', 'Nam', '', '', 3, 1, NULL, 'fe', '', '', 'rthrth', '', 1),
(17, 'Nguyễn Văn Nam', '2015-01-05', 'Nam', '', '', 1, 1, NULL, 'dfg', '', '', 'hfdfhfd', '', 1),
(18, 'Nguyễn Thu Hằng', '2015-01-07', 'Nam', '', '', 1, 1, NULL, 'gfhfgh', '', '', 'fhfgh', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `employee_asset`
--

CREATE TABLE IF NOT EXISTS `employee_asset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `board_number` varchar(500) DEFAULT NULL,
  `type` varchar(500) DEFAULT NULL,
  `color` varchar(500) DEFAULT NULL,
  `WAC` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `employee_asset`
--

INSERT INTO `employee_asset` (`id`, `employee_id`, `board_number`, `type`, `color`, `WAC`) VALUES
(1, 7, '0941', 'wave', 'white', '9u98r92jsdvjfd');

-- --------------------------------------------------------

--
-- Structure de la table `employee_cv`
--

CREATE TABLE IF NOT EXISTS `employee_cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `date_send` date DEFAULT NULL,
  `date_transfer` date DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `employee_cv`
--

INSERT INTO `employee_cv` (`id`, `employee_id`, `date_send`, `date_transfer`, `company_id`) VALUES
(2, 8, '2015-01-02', '2015-01-07', 1);

-- --------------------------------------------------------

--
-- Structure de la table `employee_ktkl`
--

CREATE TABLE IF NOT EXISTS `employee_ktkl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `ktkl_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `note` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`),
  KEY `ktkl_id` (`ktkl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `employee_ktkl`
--

INSERT INTO `employee_ktkl` (`id`, `employee_id`, `ktkl_id`, `date`, `note`) VALUES
(14, 8, 1, '2008-01-20', ''),
(15, 8, 1, '2015-01-05', '');

-- --------------------------------------------------------

--
-- Structure de la table `employee_leader`
--

CREATE TABLE IF NOT EXISTS `employee_leader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`),
  KEY `team_id` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `employee_leader`
--

INSERT INTO `employee_leader` (`id`, `employee_id`, `team_id`) VALUES
(1, 8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `employee_project`
--

CREATE TABLE IF NOT EXISTS `employee_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `roles` text,
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `employee_project`
--

INSERT INTO `employee_project` (`id`, `employee_id`, `date_start`, `date_end`, `project_id`, `roles`) VALUES
(1, 7, '2014-12-04', '2015-01-31', 1, ''),
(2, 8, '0000-00-00', '0000-00-00', 1, ''),
(4, 10, '0000-00-00', '0000-00-00', 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `employee_trainning`
--

CREATE TABLE IF NOT EXISTS `employee_trainning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `trainning_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`),
  KEY `trainning_id` (`trainning_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `employee_trainning`
--

INSERT INTO `employee_trainning` (`id`, `employee_id`, `trainning_id`) VALUES
(1, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `employee_work`
--

CREATE TABLE IF NOT EXISTS `employee_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `intership_signup` date DEFAULT NULL,
  `intership_start` date DEFAULT NULL,
  `intership_end` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`),
  KEY `position_id` (`position_id`),
  KEY `team_id` (`team_id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `employee_work`
--

INSERT INTO `employee_work` (`id`, `employee_id`, `team_id`, `position_id`, `company_id`, `intership_signup`, `intership_start`, `intership_end`) VALUES
(1, 8, 1, 1, 1, '2015-01-08', '2015-01-09', '2015-01-12'),
(2, 7, 1, 1, 1, '0000-00-00', '0000-00-00', '0000-00-00'),
(3, 10, 1, 1, 1, '0000-00-00', '0000-00-00', '0000-00-00'),
(4, 18, 7, 1, 1, '0000-00-00', '0000-00-00', '0000-00-00'),
(5, 18, 7, 1, 1, '0000-00-00', '0000-00-00', '0000-00-00'),
(6, 17, 5, 1, 1, '0000-00-00', '0000-00-00', '0000-00-00'),
(7, 12, 2, 1, 1, '0000-00-00', '0000-00-00', '0000-00-00'),
(8, 15, 2, 1, 1, '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `ktkl`
--

CREATE TABLE IF NOT EXISTS `ktkl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` mediumtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `ktkl`
--

INSERT INTO `ktkl` (`id`, `name`) VALUES
(1, 'Tinh Binh'),
(2, 'Tinh Vang');

-- --------------------------------------------------------

--
-- Structure de la table `major`
--

CREATE TABLE IF NOT EXISTS `major` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `short_name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `major`
--

INSERT INTO `major` (`id`, `name`, `short_name`) VALUES
(1, 'Information Technology', 'IT');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(500) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaytao` date DEFAULT NULL,
  `ngaysua` date DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `tacgia` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'PHP Developer');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `describe` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci,
  `logo` varchar(500) DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `money` double DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id`, `name`, `describe`, `logo`, `date_start`, `date_end`, `money`, `link`) VALUES
(1, 'I-Profile', 'Manage human resources', '', '2014-12-04', '2015-01-31', NULL, ''),
(2, 'KPI_Tool', '', '/Upload/2015-01-28/mamau.png', '0000-00-00', '0000-00-00', NULL, ''),
(3, 'chấm công', 'chấm công, tính lương', '', '2014-12-11', '0000-00-00', NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `short_name` varchar(500) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `school`
--

INSERT INTO `school` (`id`, `name`, `short_name`, `link`) VALUES
(1, 'Đại Học Bách Khoa Hà Nội', 'HUST', ''),
(2, 'Kinh Doanh Công Nghệ Hà Nội', 'HUBT', ''),
(3, 'Đại Học Hà Nội', 'HNU', ''),
(4, 'Học Viện Công Nghệ Bưu Chính Viễn Thông', 'PTIT', ''),
(5, 'Đại Học Công Nghệ', 'HTU', ''),
(6, 'Đại Học Công Nghiệp Hà Nội', '', ''),
(7, 'Đại Học Ngoại Thương', '', ''),
(8, 'Đại Học Thương Mại Hà Nội', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `team`
--

INSERT INTO `team` (`id`, `name`) VALUES
(1, 'PHP Team'),
(2, 'JS Team'),
(4, 'Solution Team'),
(5, 'Mobile Team'),
(6, 'Marketing Team'),
(7, 'HR Team');

-- --------------------------------------------------------

--
-- Structure de la table `trainning`
--

CREATE TABLE IF NOT EXISTS `trainning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `date_trainning` date DEFAULT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci,
  `content` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `trainning`
--

INSERT INTO `trainning` (`id`, `name`, `date_trainning`, `address`, `content`) VALUES
(1, 'Overview Company', '2015-01-24', 'room 801', '<p><br /></p><p>sdbvjdfvbjfd</p>');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `profile` text NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `profile`, `status`) VALUES
(3, 'admin', 'admin', 'mrvvt93@gmail.com', '', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`major_id`) REFERENCES `major` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `employee_asset`
--
ALTER TABLE `employee_asset`
  ADD CONSTRAINT `employee_asset_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `employee_cv`
--
ALTER TABLE `employee_cv`
  ADD CONSTRAINT `employee_cv_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_cv_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `employee_ktkl`
--
ALTER TABLE `employee_ktkl`
  ADD CONSTRAINT `employee_ktkl_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ktkl_ibfk_2` FOREIGN KEY (`ktkl_id`) REFERENCES `ktkl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `employee_leader`
--
ALTER TABLE `employee_leader`
  ADD CONSTRAINT `employee_leader_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_leader_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `employee_project`
--
ALTER TABLE `employee_project`
  ADD CONSTRAINT `employee_project_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_project_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `employee_trainning`
--
ALTER TABLE `employee_trainning`
  ADD CONSTRAINT `employee_trainning_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_trainning_ibfk_2` FOREIGN KEY (`trainning_id`) REFERENCES `trainning` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `employee_work`
--
ALTER TABLE `employee_work`
  ADD CONSTRAINT `employee_work_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_work_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `position` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_work_ibfk_3` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_work_ibfk_4` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
