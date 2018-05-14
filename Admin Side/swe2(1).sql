-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 11:23 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwords` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `teacher_id`, `username`, `passwords`) VALUES
(5, 1, 'doha', '8534ffb994c369b627a4b9a65fe9ce3e6fa5c2a0');

-- --------------------------------------------------------

--
-- Table structure for table `attend_int`
--

CREATE TABLE `attend_int` (
  `id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `week_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attend_int`
--

INSERT INTO `attend_int` (`id`, `child_id`, `week_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `parent_id`, `discount`, `price`, `time`) VALUES
(1, 1, 2000, 5000, '2018-04-28 22:00:00'),
(2, 1, 12, 12441, '2018-06-29 04:00:00'),
(3, 1, 12, 1234, '2018-04-29 18:53:18'),
(4, 1, 200, 2455, '2018-05-01 18:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `child` (
  `id` int(11) NOT NULL,
  `main_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `ddoe` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `childtype` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `contactinfo` (
  `id` int(11) NOT NULL,
  `main_id` int(11) NOT NULL,
  `cellphone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `main_id`, `cellphone`) VALUES
(1, 1, '01140050616'),
(3, 3, '123456789'),
(4, 4, '1140050616'),
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

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(16, 'Sun: Tracing Names, Mon: Punching/Sewing, Tues: Playdough, Wed: Coloring/Thinking Games, Thurs: Cartoon '),
(22, 'din');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `id` int(11) NOT NULL,
  `main_id` int(11) NOT NULL,
  `ecname` varchar(100) NOT NULL,
  `ecnum` int(11) NOT NULL,
  `ecaddress_id` int(11) NOT NULL,
  `relation_id` int(50) NOT NULL,
  `extrainfo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `main_id`, `ecname`, `ecnum`, `ecaddress_id`, `relation_id`, `extrainfo`) VALUES
(1, 2, 'Moustafa waly', 0, 5, 1, 'jnicuansiufnaiusnc'),
(2, 5, 'mostafa waly', 1140050616, 3, 1, 'dude is lost'),
(3, 1, 'doha tariq', 1140050616, 1, 1, 'stuff');

-- --------------------------------------------------------

--
-- Table structure for table `error`
--

CREATE TABLE `error` (
  `id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `Location` varchar(200) NOT NULL COMMENT 'maybe can be address_id ',
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `description`, `Location`, `Time`) VALUES
(1, '2018-05-22', 'fun day', 'fun and learn nursery', '07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_int`
--

CREATE TABLE `event_int` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `utype` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `ssn` bigint(14) NOT NULL COMMENT 'can also be social num',
  `Dateofapply` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `utype`, `status_id`, `fname`, `lname`, `dob`, `ssn`, `Dateofapply`) VALUES
(1, 1, 3, 'Mustafa', 'WALLY', '1998-05-27', 987654321, '2018-04-01 14:38:33'),
(2, 1, 3, 'Doha', 'Tariq', '1997-11-27', 1234567543263, '2018-04-01 14:48:06'),
(3, 1, 3, 'Ahmed', 'Raed', '1997-11-27', 26123951129357, '2018-04-01 15:57:21'),
(4, 1, 3, 'habiba', 'tariq', '1997-11-27', 261239512932113, '2018-04-01 15:57:21'),
(5, 2, 3, 'habiba', 'nashaat', '1997-11-27', 1234567890, '2018-04-04 21:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `maritalstatus`
--

CREATE TABLE `maritalstatus` (
  `id` int(11) NOT NULL,
  `value` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `month` (
  `id` int(11) NOT NULL,
  `name` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `nationality` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL COMMENT 'name, expiration date, etc',
  `type` varchar(100) NOT NULL COMMENT 'This type is to be placed in the html so the fields can be generated without the need of creating forms for every new type of payment that is added'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `type`) VALUES
(1, 'visa card number', 'number');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `discount` int(11) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `package_int` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_int`
--

INSERT INTO `package_int` (`id`, `parent_id`, `package_id`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `friendlyname` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `html` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `friendlyname`, `path`, `html`) VALUES
(1, 'schedule', 'asdfae', '<html> </html>');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `mother_id` int(11) NOT NULL,
  `father_id` int(11) NOT NULL,
  `ffbook` varchar(200) NOT NULL,
  `foccupation` varchar(100) NOT NULL,
  `mfbook` varchar(200) NOT NULL,
  `moccupation` varchar(100) NOT NULL,
  `mstatus_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `usualpickup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `child_id`, `mother_id`, `father_id`, `ffbook`, `foccupation`, `mfbook`, `moccupation`, `mstatus_id`, `address_id`, `usualpickup`) VALUES
(1, 2, 3, 4, 'nuasfunasuf', 'nsva soufnaousnf', 'nainasivnaonsfouan', 'savnaoisnoianvioan', 5, 5, 'mohamed'),
(2, 1, 2, 3, 'abcd', 'something', 'something', 'something', 3, 1, 'Mostafa');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`) VALUES
(1, 'Visa');

-- --------------------------------------------------------

--
-- Table structure for table `paymentopt`
--

CREATE TABLE `paymentopt` (
  `id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentopt`
--

INSERT INTO `paymentopt` (`id`, `options_id`, `payment_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pmov_bill`
--

CREATE TABLE `pmov_bill` (
  `id` int(11) NOT NULL,
  `pmov_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pm_o_v`
--

CREATE TABLE `pm_o_v` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `payment_o_id` int(11) NOT NULL,
  `value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_o_v`
--

INSERT INTO `pm_o_v` (`id`, `parent_id`, `payment_o_id`, `value`) VALUES
(1, 1, 1, 'Mostafa');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `qualvalue` (
  `id` int(11) NOT NULL,
  `qual_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `value` varchar(300) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualvalue`
--

INSERT INTO `qualvalue` (`id`, `qual_id`, `teacher_id`, `value`, `date`) VALUES
(1, 1, 1, 'Baby sitting', '2018-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `relation`
--

CREATE TABLE `relation` (
  `id` int(11) NOT NULL,
  `relation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `month_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `bonuses` int(11) NOT NULL,
  `deduct` int(11) NOT NULL,
  `reason` varchar(300) NOT NULL COMMENT 'this includes the reason why the deducted and the bonus values are added'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `teacher_id`, `month_id`, `amount`, `bonuses`, `deduct`, `reason`) VALUES
(2, 1, 1, 2222, 3333, 4444, '1asfbhasbvubasifb'),
(3, 3, 7, 4000, 1000, 1000, '');

--
-- Triggers `salary`
--
DELIMITER $$
CREATE TRIGGER `Calctotal` AFTER INSERT ON `salary` FOR EACH ROW UPDATE salary SET salary.total = (SELECT * FROM (SELECT (s.amount + s.bonuses - s.deduct) FROM salary s)tblTmp)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `childtype_id` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `ends` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `course_id`, `childtype_id`, `start`, `ends`) VALUES
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

CREATE TABLE `schedule_int` (
  `id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `nationality` int(100) NOT NULL,
  `address_id` int(11) NOT NULL,
  `main_id` int(11) NOT NULL,
  `mstatus_id` int(11) NOT NULL,
  `pempname` varchar(100) NOT NULL,
  `pempaddress_id` int(11) NOT NULL,
  `pempnum` int(11) NOT NULL,
  `corlsalary` int(5) NOT NULL,
  `reqsalary` int(5) NOT NULL,
  `othernursery` varchar(500) NOT NULL,
  `povnursery` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `nationality`, `address_id`, `main_id`, `mstatus_id`, `pempname`, `pempaddress_id`, `pempnum`, `corlsalary`, `reqsalary`, `othernursery`, `povnursery`) VALUES
(1, 3, 3, 4, 1, 'gunuisanuiafg', 4, 1234567, 25123, 12351, 'jknaiuvnauisnfuiansuifn', 'uadguiansuifnuiansf'),
(3, 1, 1, 5, 1, 'farouk el said', 1, 123456789, 5000, 5000, 'because why the hell not!!', 'a nursery should be a palce of nurture');

-- --------------------------------------------------------

--
-- Table structure for table `tranlog`
--

CREATE TABLE `tranlog` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

CREATE TABLE `translation` (
  `id` int(11) NOT NULL,
  `from_lang` varchar(50) NOT NULL,
  `to_lang` varchar(50) NOT NULL,
  `from_word` varchar(30) NOT NULL,
  `to_word` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertypelu`
--

CREATE TABLE `usertypelu` (
  `id` int(11) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `utl_int` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `utl_id` int(11) NOT NULL COMMENT 'from user type look up'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `week`
--

CREATE TABLE `week` (
  `id` int(11) NOT NULL,
  `days` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `word` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentid` (`parentid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`) USING BTREE;

--
-- Indexes for table `attend_int`
--
ALTER TABLE `attend_int`
  ADD PRIMARY KEY (`id`),
  ADD KEY `week_id` (`week_id`),
  ADD KEY `child_id` (`child_id`) USING BTREE;

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_id` (`main_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `childtype`
--
ALTER TABLE `childtype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_id` (`main_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ecaddress_id` (`ecaddress_id`),
  ADD KEY `main_id` (`main_id`),
  ADD KEY `relation_id` (`relation_id`);

--
-- Indexes for table `error`
--
ALTER TABLE `error`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ssn` (`ssn`),
  ADD KEY `utype` (`utype`),
  ADD KEY `dob` (`dob`) USING BTREE,
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `maritalstatus`
--
ALTER TABLE `maritalstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_int`
--
ALTER TABLE `package_int`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_id` (`child_id`) USING BTREE,
  ADD KEY `mother_id` (`mother_id`),
  ADD KEY `father_id` (`father_id`),
  ADD KEY `mstatus_id` (`mstatus_id`),
  ADD KEY `address_id` (`address_id`) USING BTREE;

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentopt`
--
ALTER TABLE `paymentopt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_id` (`options_id`,`payment_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `pmov_bill`
--
ALTER TABLE `pmov_bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pmov_id` (`pmov_id`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Indexes for table `pm_o_v`
--
ALTER TABLE `pm_o_v`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `payment_o_id` (`payment_o_id`) USING BTREE;

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualvalue`
--
ALTER TABLE `qualvalue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qual_id` (`qual_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `relation`
--
ALTER TABLE `relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teacher_id_2` (`teacher_id`,`month_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `month_id` (`month_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `childtype_id` (`childtype_id`);

--
-- Indexes for table `schedule_int`
--
ALTER TABLE `schedule_int`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_id` (`schedule_id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_id` (`main_id`),
  ADD KEY `pempaddress_id` (`pempaddress_id`),
  ADD KEY `address_id` (`address_id`),
  ADD KEY `nationality` (`nationality`),
  ADD KEY `maritalstatus` (`mstatus_id`);

--
-- Indexes for table `tranlog`
--
ALTER TABLE `tranlog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`,`status_id`);

--
-- Indexes for table `translation`
--
ALTER TABLE `translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_lang` (`from_lang`),
  ADD KEY `to_lang` (`to_lang`),
  ADD KEY `from_word` (`from_word`),
  ADD KEY `to_word` (`to_word`);

--
-- Indexes for table `usertypelu`
--
ALTER TABLE `usertypelu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usertype` (`usertype`);

--
-- Indexes for table `utl_int`
--
ALTER TABLE `utl_int`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`,`utl_id`),
  ADD KEY `utl_id` (`utl_id`);

--
-- Indexes for table `week`
--
ALTER TABLE `week`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `attend_int`
--
ALTER TABLE `attend_int`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `childtype`
--
ALTER TABLE `childtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `error`
--
ALTER TABLE `error`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `maritalstatus`
--
ALTER TABLE `maritalstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `package_int`
--
ALTER TABLE `package_int`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `paymentopt`
--
ALTER TABLE `paymentopt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pmov_bill`
--
ALTER TABLE `pmov_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pm_o_v`
--
ALTER TABLE `pm_o_v`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `qualvalue`
--
ALTER TABLE `qualvalue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `relation`
--
ALTER TABLE `relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `schedule_int`
--
ALTER TABLE `schedule_int`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tranlog`
--
ALTER TABLE `tranlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `translation`
--
ALTER TABLE `translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usertypelu`
--
ALTER TABLE `usertypelu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `utl_int`
--
ALTER TABLE `utl_int`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `week`
--
ALTER TABLE `week`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
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
-- Constraints for table `pmov_bill`
--
ALTER TABLE `pmov_bill`
  ADD CONSTRAINT `pmov_bill_ibfk_1` FOREIGN KEY (`pmov_id`) REFERENCES `pm_o_v` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pmov_bill_ibfk_2` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
