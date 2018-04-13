-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2018 at 06:03 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swe1`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentid` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `parentid`, `name`) VALUES
(1, 1, 'Egypt'),
(2, 1, 'Cairo'),
(3, 2, 'Maadi'),
(4, 3, 'Digla'),
(5, 3, 'Zahraa El-Maadi'),
(6, 3, 'Old Maadi');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `main_id` (`main_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attend_int`
--

DROP TABLE IF EXISTS `attend_int`;
CREATE TABLE IF NOT EXISTS `attend_int` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `week_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `week_id` (`week_id`),
  KEY `child_id` (`child_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `time` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `payment_id` (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ddoe` int(8) NOT NULL,
  `childtype` int(11) NOT NULL,
  `main_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `main_id` (`main_id`),
  KEY `childtype` (`childtype`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `ddoe`, `childtype`, `main_id`) VALUES
(1, 4, 2, 2),
(2, 5, 1, 4),
(3, 5, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `childtype`
--

DROP TABLE IF EXISTS `childtype`;
CREATE TABLE IF NOT EXISTS `childtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `childtype`
--

INSERT INTO `childtype` (`id`, `type`) VALUES
(1, 'Junior'),
(2, 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

DROP TABLE IF EXISTS `contactinfo`;
CREATE TABLE IF NOT EXISTS `contactinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `cellphone` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `main_id` (`main_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `main_id`, `cellphone`) VALUES
(1, 1, '01140050616'),
(15, 5, '123456789'),
(23, 5, '1140050616'),
(24, 5, '1140050616'),
(27, 5, '1140050616'),
(29, 1, '1140050616'),
(30, 1, '01144050616'),
(31, 5, '01000197120');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `description`) VALUES
(1, 'Blocks/Puzzle/PlayDough/Coloring'),
(2, 'Breakfast'),
(4, 'Circle Time'),
(5, 'Garden'),
(6, 'Snack'),
(7, 'Let\'s Play'),
(9, 'Lunch'),
(10, 'Reading'),
(11, 'Cutting Skill'),
(12, 'Montessori/Work Sheet, Art'),
(13, 'Mon,Tues, Wed: Arabic / Sun,Thurs: Qur\'an'),
(14, 'Sun, Wed: Let\'s Dance/ Mon, Tues: I can do it, Thurs. Reading'),
(15, 'Sun: Dance, Mon: Colouring, Tues: Nursery songs, Wed: Small play, Thurs: Cartoon'),
(16, 'Sun: Tracing Names, Mon: Punching/Sewing, Tues: Playdough, Wed: Coloring/Thinking Games, Thurs: Cartoon ');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

DROP TABLE IF EXISTS `emergency`;
CREATE TABLE IF NOT EXISTS `emergency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `ecname` varchar(100) NOT NULL,
  `ecnum` int(11) NOT NULL,
  `ecaddress_id` int(11) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `extrainfo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ecaddress_id` (`ecaddress_id`),
  KEY `main_id` (`main_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `main_id`, `ecname`, `ecnum`, `ecaddress_id`, `relation`, `extrainfo`) VALUES
(1, 2, 'Moustafa waly', 0, 5, 'jasnouda', 'jnicuansiufnaiusnc'),
(2, 5, 'mostafa waly', 1140050616, 3, 'something', 'dude is lost');

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

DROP TABLE IF EXISTS `errors`;
CREATE TABLE IF NOT EXISTS `errors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  KEY `lang_id` (`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `errortype`
--

DROP TABLE IF EXISTS `errortype`;
CREATE TABLE IF NOT EXISTS `errortype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

DROP TABLE IF EXISTS `main`;
CREATE TABLE IF NOT EXISTS `main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utype` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `ssn` bigint(14) NOT NULL COMMENT 'can also be social num',
  `Dateofapply` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `utype` (`utype`),
  KEY `dob` (`dob`) USING BTREE,
  KEY `status_id` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `utype`, `status_id`, `fname`, `lname`, `dob`, `ssn`, `Dateofapply`) VALUES
(1, 1, 3, 'Mustafa', 'WALLY', '1998-05-27', 987654321, '2018-04-01 14:38:33'),
(2, 1, 3, 'mostwfa', 'wasfaw', '1997-11-27', 1234567543263, '2018-04-01 14:48:06'),
(3, 1, 3, 'mostafa', 'waly', '1997-11-27', 2612395129357, '2018-04-01 15:57:21'),
(4, 1, 3, 'mostafa', 'waly', '1997-11-27', 2612395129357, '2018-04-01 15:57:21'),
(5, 2, 3, 'mostafa', 'waly1', '1997-11-27', 1234567890, '2018-04-04 21:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `maritalstatus`
--

DROP TABLE IF EXISTS `maritalstatus`;
CREATE TABLE IF NOT EXISTS `maritalstatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maritalstatus`
--

INSERT INTO `maritalstatus` (`id`, `value`) VALUES
(1, 'Married'),
(2, 'Divorced '),
(3, 'Married'),
(4, 'Widowed'),
(5, 'Never Married'),
(15, 'widowed like a ');

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

DROP TABLE IF EXISTS `nationality`;
CREATE TABLE IF NOT EXISTS `nationality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`id`, `name`) VALUES
(1, 'American'),
(2, 'Egyptian'),
(3, 'English'),
(4, 'masry');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL COMMENT 'name, expiration date, etc',
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `friendlyname` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `html` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `friendlyname`, `path`, `html`) VALUES
(1, 'schedule', 'asdfae', '<html> </html>');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `mother_id` int(11) NOT NULL,
  `father_id` int(11) NOT NULL,
  `ffbook` varchar(200) NOT NULL,
  `foccupation` varchar(100) NOT NULL,
  `mfbook` varchar(200) NOT NULL,
  `moccupation` varchar(100) NOT NULL,
  `mstatus_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `usualpickup` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `child_id` (`child_id`) USING BTREE,
  KEY `mother_id` (`mother_id`),
  KEY `father_id` (`father_id`),
  KEY `mstatus_id` (`mstatus_id`),
  KEY `address_id` (`address_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `child_id`, `mother_id`, `father_id`, `ffbook`, `foccupation`, `mfbook`, `moccupation`, `mstatus_id`, `address_id`, `usualpickup`) VALUES
(1, 2, 3, 4, 'nuasfunasuf', 'nsva soufnaousnf', 'nainasivnaonsfouan', 'savnaoisnoianvioan', 5, 5, 'mohamed');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentopt`
--

DROP TABLE IF EXISTS `paymentopt`;
CREATE TABLE IF NOT EXISTS `paymentopt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `options_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `options_id` (`options_id`,`payment_id`),
  KEY `payment_id` (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pm_o_v`
--

DROP TABLE IF EXISTS `pm_o_v`;
CREATE TABLE IF NOT EXISTS `pm_o_v` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `payment_o_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `payment_o_id` (`payment_o_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

DROP TABLE IF EXISTS `qualifications`;
CREATE TABLE IF NOT EXISTS `qualifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qual_link`
--

DROP TABLE IF EXISTS `qual_link`;
CREATE TABLE IF NOT EXISTS `qual_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qual_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `qual_id` (`qual_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qual_look`
--

DROP TABLE IF EXISTS `qual_look`;
CREATE TABLE IF NOT EXISTS `qual_look` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quallink_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL COMMENT 'masters,  phd etc.',
  `date` timestamp NOT NULL COMMENT 'time stamp',
  PRIMARY KEY (`id`),
  KEY `quallink_id` (`quallink_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `discounts` int(11) NOT NULL,
  `bonuses_id` int(11) NOT NULL,
  `deductables_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `course_id`, `start`, `end`) VALUES
(41, 1, 800, 1000),
(42, 2, 1000, 1030),
(43, 4, 1030, 1100),
(44, 5, 1100, 1200),
(45, 6, 1200, 1230),
(46, 7, 1230, 100),
(47, 10, 100, 130),
(48, 5, 130, 200),
(49, 9, 200, 230),
(50, 15, 230, 300),
(51, 11, 300, 400),
(52, 12, 800, 1000),
(53, 2, 1000, 1030),
(54, 4, 1030, 1100),
(55, 5, 1100, 1200),
(56, 6, 1200, 1230),
(57, 13, 1230, 100),
(58, 14, 100, 130),
(59, 5, 130, 200),
(60, 9, 200, 230),
(61, 16, 230, 300),
(62, 11, 300, 400);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_int`
--

DROP TABLE IF EXISTS `schedule_int`;
CREATE TABLE IF NOT EXISTS `schedule_int` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `schedule_id` (`schedule_id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Accepted'),
(2, 'Denied'),
(3, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nationality` int(100) NOT NULL,
  `address_id` int(11) NOT NULL,
  `main_id` int(11) NOT NULL,
  `mstatus_id` int(11) NOT NULL,
  `acaqual1` varchar(300) NOT NULL,
  `date_acaqual1` int(8) NOT NULL,
  `personal_qual1` varchar(300) NOT NULL,
  `date_ppersonalqual1` int(8) NOT NULL,
  `pempname` varchar(100) NOT NULL,
  `pempaddress_id` int(11) NOT NULL,
  `pempnum` int(11) NOT NULL,
  `corlsalary` int(5) NOT NULL,
  `reqsalary` int(5) NOT NULL,
  `othernursery` varchar(500) NOT NULL,
  `povnursery` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `main_id` (`main_id`),
  KEY `pempaddress_id` (`pempaddress_id`),
  KEY `address_id` (`address_id`),
  KEY `nationality` (`nationality`),
  KEY `maritalstatus` (`mstatus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `nationality`, `address_id`, `main_id`, `mstatus_id`, `acaqual1`, `date_acaqual1`, `personal_qual1`, `date_ppersonalqual1`, `pempname`, `pempaddress_id`, `pempnum`, `corlsalary`, `reqsalary`, `othernursery`, `povnursery`) VALUES
(1, 3, 3, 4, 1, 'fnakhs vha shffausfiunfa', 214123, 'uianfiuansfuinag', 1235123, 'gunuisanuiafg', 4, 1234567, 25123, 12351, 'jknaiuvnauisnfuiansuifn', 'uadguiansuifnuiansf'),
(3, 1, 1, 5, 1, 'a degree from', 27111997, 'a degree from ', 27111997, 'farouk el said', 1, 123456789, 5000, 5000, 'because why the hell not!!', 'a nursery should be a palce of nurture');

-- --------------------------------------------------------

--
-- Table structure for table `tranlog`
--

DROP TABLE IF EXISTS `tranlog`;
CREATE TABLE IF NOT EXISTS `tranlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `Message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `u_id` (`u_id`,`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

DROP TABLE IF EXISTS `translation`;
CREATE TABLE IF NOT EXISTS `translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_lang` varchar(50) NOT NULL,
  `to_lang` varchar(50) NOT NULL,
  `from_word` varchar(30) NOT NULL,
  `to_word` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `from_lang` (`from_lang`),
  KEY `to_lang` (`to_lang`),
  KEY `from_word` (`from_word`),
  KEY `to_word` (`to_word`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertypelu`
--

DROP TABLE IF EXISTS `usertypelu`;
CREATE TABLE IF NOT EXISTS `usertypelu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usertype` (`usertype`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertypelu`
--

INSERT INTO `usertypelu` (`id`, `usertype`) VALUES
(1, 'Admin'),
(2, 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `utl_int`
--

DROP TABLE IF EXISTS `utl_int`;
CREATE TABLE IF NOT EXISTS `utl_int` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `utl_id` int(11) NOT NULL COMMENT 'from user type look up',
  PRIMARY KEY (`id`),
  KEY `page_id` (`page_id`,`utl_id`),
  KEY `utl_id` (`utl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `week`
--

DROP TABLE IF EXISTS `week`;
CREATE TABLE IF NOT EXISTS `week` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week`
--

INSERT INTO `week` (`id`, `day`) VALUES
(1, 'Full Time'),
(2, 'Part Time'),
(11, 'Sunday'),
(12, 'Monday'),
(13, 'Tuesday'),
(14, 'Wednesday'),
(15, 'Thursday');

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

DROP TABLE IF EXISTS `word`;
CREATE TABLE IF NOT EXISTS `word` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang_id` (`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`parentid`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attend_int`
--
ALTER TABLE `attend_int`
  ADD CONSTRAINT `attend_int_ibfk_1` FOREIGN KEY (`week_id`) REFERENCES `week` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attend_int_ibfk_2` FOREIGN KEY (`child_id`) REFERENCES `child` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `child`
--
ALTER TABLE `child`
  ADD CONSTRAINT `child_ibfk_1` FOREIGN KEY (`main_id`) REFERENCES `main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `child_ibfk_2` FOREIGN KEY (`childtype`) REFERENCES `childtype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD CONSTRAINT `contactinfo_ibfk_1` FOREIGN KEY (`main_id`) REFERENCES `main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emergency`
--
ALTER TABLE `emergency`
  ADD CONSTRAINT `emergency_ibfk_1` FOREIGN KEY (`main_id`) REFERENCES `main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emergency_ibfk_2` FOREIGN KEY (`ecaddress_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `main`
--
ALTER TABLE `main`
  ADD CONSTRAINT `main_ibfk_3` FOREIGN KEY (`utype`) REFERENCES `usertypelu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `main_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_2` FOREIGN KEY (`child_id`) REFERENCES `main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parent_ibfk_3` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parent_ibfk_4` FOREIGN KEY (`mother_id`) REFERENCES `main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parent_ibfk_5` FOREIGN KEY (`father_id`) REFERENCES `main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parent_ibfk_6` FOREIGN KEY (`mstatus_id`) REFERENCES `maritalstatus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paymentopt`
--
ALTER TABLE `paymentopt`
  ADD CONSTRAINT `paymentopt_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paymentopt_ibfk_2` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pm_o_v`
--
ALTER TABLE `pm_o_v`
  ADD CONSTRAINT `pm_o_v_ibfk_1` FOREIGN KEY (`payment_o_id`) REFERENCES `paymentopt` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pm_o_v_ibfk_2` FOREIGN KEY (`parent_id`) REFERENCES `parent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qual_link`
--
ALTER TABLE `qual_link`
  ADD CONSTRAINT `qual_link_ibfk_1` FOREIGN KEY (`qual_id`) REFERENCES `qualifications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qual_look`
--
ALTER TABLE `qual_look`
  ADD CONSTRAINT `qual_look_ibfk_1` FOREIGN KEY (`quallink_id`) REFERENCES `qual_link` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule_int`
--
ALTER TABLE `schedule_int`
  ADD CONSTRAINT `schedule_int_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `child` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_int_ibfk_2` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`main_id`) REFERENCES `main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_ibfk_3` FOREIGN KEY (`pempaddress_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_ibfk_4` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_ibfk_5` FOREIGN KEY (`nationality`) REFERENCES `nationality` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_ibfk_6` FOREIGN KEY (`mstatus_id`) REFERENCES `maritalstatus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `utl_int`
--
ALTER TABLE `utl_int`
  ADD CONSTRAINT `utl_int_ibfk_1` FOREIGN KEY (`utl_id`) REFERENCES `usertypelu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utl_int_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `word`
--
ALTER TABLE `word`
  ADD CONSTRAINT `word_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
