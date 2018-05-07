-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2018 at 06:08 PM
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
-- Database: `swe2`
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
  `teacher_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwords` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_id` (`teacher_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `teacher_id`, `username`, `passwords`) VALUES
(1, 1, 'something', 'somethingsomething'),
(2, 1, 'something', 'somethingsomething');

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
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `payment_id` (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `parent_id`, `payment_id`, `price`, `discount`, `time`) VALUES
(1, 1, 1, 5000, 2000, '2018-04-28 22:00:00'),
(2, 1, 1, 12441, 12, '2018-06-29 04:00:00'),
(3, 1, 1, 1234, 12, '2018-04-29 18:53:18'),
(4, 1, 1, 2455, 200, '2018-05-01 18:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
CREATE TABLE IF NOT EXISTS `branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `value`) VALUES
(1, 'Al Me3rag'),
(2, 'Zahraa El Maadi'),
(3, 'Maadi');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `ddoe` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `main_id` (`main_id`),
  KEY `branch_id` (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `main_id`, `branch_id`, `ddoe`) VALUES
(1, 2, 1, 4),
(2, 4, 1, 5),
(3, 4, 1, 5);

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

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
(31, 5, '01000197120'),
(32, 5, '01000197120');

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
  `relation_id` int(50) NOT NULL,
  `extrainfo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ecaddress_id` (`ecaddress_id`),
  KEY `main_id` (`main_id`),
  KEY `relation_id` (`relation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `main_id`, `ecname`, `ecnum`, `ecaddress_id`, `relation_id`, `extrainfo`) VALUES
(1, 1, 'Moustafa waly', 0, 5, 1, 'jnicuansiufnaiusnc'),
(2, 5, 'mostafa waly', 1140050616, 3, 1, 'dude is lost'),
(3, 1, 'doha tariq', 1140050616, 1, 1, 'stuff');

-- --------------------------------------------------------

--
-- Table structure for table `error`
--

DROP TABLE IF EXISTS `error`;
CREATE TABLE IF NOT EXISTS `error` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `error`
--

INSERT INTO `error` (`id`, `description`) VALUES
(1, 'Error, This field can\'t be left empty'),
(2, 'Error, Only Letters and WhiteSpace allowed'),
(3, 'Error, Invalid Email Format'),
(4, 'Error, Data entered was not number'),
(5, 'Error, SQL Injection DETECTED!');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `Location` varchar(200) NOT NULL COMMENT 'maybe can be address_id ',
  `Time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `description`, `Location`, `Time`) VALUES
(1, '2018-05-22', 'fun day', 'fun and learn nursery', '07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_int`
--

DROP TABLE IF EXISTS `event_int`;
CREATE TABLE IF NOT EXISTS `event_int` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL
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
-- Table structure for table `month`
--

DROP TABLE IF EXISTS `month`;
CREATE TABLE IF NOT EXISTS `month` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`id`, `name`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL COMMENT 'name, expiration date, etc',
  `type` varchar(100) NOT NULL COMMENT 'This type is to be placed in the html so the fields can be generated without the need of creating forms for every new type of payment that is added',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `type`) VALUES
(1, 'visa card number', 'number');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
CREATE TABLE IF NOT EXISTS `package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `discount` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `discount`, `description`) VALUES
(1, '', 0, 'nfjkanfouanuna'),
(2, '', 0, 'sadashgahahesahaeh');

-- --------------------------------------------------------

--
-- Table structure for table `package_int`
--

DROP TABLE IF EXISTS `package_int`;
CREATE TABLE IF NOT EXISTS `package_int` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `package_id` (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_int`
--

INSERT INTO `package_int` (`id`, `parent_id`, `package_id`) VALUES
(2, 1, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `child_id`, `mother_id`, `father_id`, `ffbook`, `foccupation`, `mfbook`, `moccupation`, `mstatus_id`, `address_id`, `usualpickup`) VALUES
(1, 2, 3, 4, 'nuasfunasuf', 'nsva soufnaousnf', 'nainasivnaonsfouan', 'savnaoisnoianvioan', 5, 5, 'mohamed'),
(2, 1, 2, 3, '', 'something', 'something', 'something', 3, 1, 'Mostafa');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`) VALUES
(1, 'Visa');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentopt`
--

INSERT INTO `paymentopt` (`id`, `options_id`, `payment_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pm_o_v`
--

DROP TABLE IF EXISTS `pm_o_v`;
CREATE TABLE IF NOT EXISTS `pm_o_v` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `payment_o_id` int(11) NOT NULL,
  `value` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `payment_o_id` (`payment_o_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_o_v`
--

INSERT INTO `pm_o_v` (`id`, `parent_id`, `payment_o_id`, `value`) VALUES
(1, 1, 1, 'Mostafa');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

DROP TABLE IF EXISTS `qualification`;
CREATE TABLE IF NOT EXISTS `qualification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `name`) VALUES
(1, 'personal'),
(2, 'academic'),
(3, 'something');

-- --------------------------------------------------------

--
-- Table structure for table `qualvalue`
--

DROP TABLE IF EXISTS `qualvalue`;
CREATE TABLE IF NOT EXISTS `qualvalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qual_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `value` varchar(300) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `qual_id` (`qual_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualvalue`
--

INSERT INTO `qualvalue` (`id`, `qual_id`, `teacher_id`, `value`, `date`) VALUES
(1, 1, 1, 'Baby sitting', '2018-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `relation`
--

DROP TABLE IF EXISTS `relation`;
CREATE TABLE IF NOT EXISTS `relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `relation` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relation`
--

INSERT INTO `relation` (`id`, `relation`) VALUES
(1, 'Uncle(Mother\'s side)'),
(2, 'Uncle(Father\'s side)'),
(3, 'Cousin'),
(4, 'Sister'),
(5, 'Brother'),
(6, 'Father'),
(7, 'Mother'),
(8, 'Grandfather'),
(9, 'Grandmother'),
(10, 'Aunt (Mother\'s side)'),
(11, 'Aunt (Father\'s side)');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `month_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `bonuses` int(11) NOT NULL,
  `deduct` int(11) NOT NULL,
  `reason` varchar(300) NOT NULL COMMENT 'this includes the reason why the deducted and the bonus values are added',
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `teacher_id_2` (`teacher_id`,`month_id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `month_id` (`month_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `teacher_id`, `month_id`, `amount`, `bonuses`, `deduct`, `reason`, `total`) VALUES
(2, 1, 1, 2222, 3333, 4444, '1asfbhasbvubasifb', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `childtype_id` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  KEY `childtype_id` (`childtype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `course_id`, `childtype_id`, `start`, `end`) VALUES
(41, 1, 1, 800, 1000),
(42, 2, 1, 1000, 1030),
(43, 4, 1, 1030, 1100),
(44, 5, 1, 1100, 1200),
(45, 6, 1, 1200, 1230),
(46, 7, 1, 1230, 100),
(47, 10, 1, 100, 130),
(48, 5, 1, 130, 200),
(49, 9, 1, 200, 230),
(50, 15, 1, 230, 300),
(51, 11, 1, 300, 400),
(52, 12, 2, 800, 1000),
(53, 2, 2, 1000, 1030),
(54, 4, 2, 1030, 1100),
(55, 5, 2, 1100, 1200),
(56, 6, 2, 1200, 1230),
(57, 13, 2, 1230, 100),
(58, 14, 2, 100, 130),
(59, 5, 2, 130, 200),
(60, 9, 2, 200, 230),
(61, 16, 2, 230, 300),
(62, 11, 2, 300, 400),
(63, 2, 2, 1000, 1100),
(64, 2, 2, 1000, 1100);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
  `days` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week`
--

INSERT INTO `week` (`id`, `days`) VALUES
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
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `child_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `emergency_ibfk_2` FOREIGN KEY (`ecaddress_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emergency_ibfk_3` FOREIGN KEY (`relation_id`) REFERENCES `relation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `main`
--
ALTER TABLE `main`
  ADD CONSTRAINT `main_ibfk_3` FOREIGN KEY (`utype`) REFERENCES `usertypelu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `main_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package_int`
--
ALTER TABLE `package_int`
  ADD CONSTRAINT `package_int_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `package` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `package_int_ibfk_2` FOREIGN KEY (`parent_id`) REFERENCES `parent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `qualvalue`
--
ALTER TABLE `qualvalue`
  ADD CONSTRAINT `qualvalue_ibfk_1` FOREIGN KEY (`qual_id`) REFERENCES `qualification` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `qualvalue_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`month_id`) REFERENCES `month` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salary_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`childtype_id`) REFERENCES `childtype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
