-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2026 at 10:45 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gym`
--
CREATE DATABASE `gym` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gym`;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `booking_id` varchar(20) DEFAULT NULL,
  `gymname` varchar(20) DEFAULT NULL,
  `gymtype` varchar(20) DEFAULT NULL,
  `package` varchar(20) DEFAULT NULL,
  `total` varchar(20) DEFAULT NULL,
  `bill_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`booking_id`, `gymname`, `gymtype`, `package`, `total`, `bill_date`) VALUES
('18', 'Silver Gym', 'CrossFit Gym', '3223', '', '2026-05-05'),
('6', 'Power Gym', 'Yoga Gym/Studio', 'Monthly(1 Months)', '', '2026-05-05'),
('6', 'Power Gym', 'Yoga Gym/Studio', 'Monthly(1 Months)', '3000', '2026-05-05'),
('32', 'Fit Zone', 'Fitness Studio', 'All', '', '2026-05-05'),
('32', 'Fit Zone', 'Fitness Studio', 'All', '', '2026-05-05'),
('40', 'Suheel Gym', 'CrossFit Gym', '2000 (Monthly Packag', '2000', '2026-05-19'),
('44', 'Suheel Gym', 'CrossFit Gym', '2000 (Monthly Packag', '2000', '2026-05-19'),
('18', '03:04', 'CrossFit Gym', '3223', '2599', '2026-05-19'),
('50', 'Suheel Gym', 'CrossFit Gym', '2000 (Monthly Packag', '2000', '2026-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` varchar(20) DEFAULT NULL,
  `gym_id` varchar(20) DEFAULT NULL,
  `gym_name` varchar(20) DEFAULT NULL,
  `gym_type` varchar(20) DEFAULT NULL,
  `package` varchar(20) DEFAULT NULL,
  `agelim` varchar(20) DEFAULT NULL,
  `custname` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `pho` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `gym_id`, `gym_name`, `gym_type`, `package`, `agelim`, `custname`, `dob`, `pho`, `status`) VALUES
('6', '1014', 'Power Gym', 'Yoga Gym/Studio', 'Monthly(1 Months)', '18-55', 'Nikitha', '2005-06-20', '8073362007', 'Approved'),
('6', 'fit12345', 'Fit Zone', 'Fitness Studio', 'All', '18-50', 'suheel', '1999-09-06', '4356578695', 'Approved'),
('6', 'bro1234', 'silver gym', 'Commercial Gym', 'Yearly(12 Months)', '18-45', 'werthj', '2003-04-21', '123456789', 'Approved'),
('6', 'bro1234', 'silver gym', 'Commercial Gym', 'Yearly(12 Months)', '18-45', 'werthj', '2003-04-21', '123456789', 'Approved'),
('6', 'bro1234', 'silver gym', 'Commercial Gym', 'Yearly(12 Months)', '18-45', 'werthj', '2003-04-21', '123456789', 'Approved'),
('12', 'bro1234', 'silver gym', 'Commercial Gym', 'Yearly(12 Months)', '18-45', 'lakshmi', '2000-03-21', '9876316782', 'Pending'),
('14', '1014', 'Power Gym', 'Yoga Gym/Studio', 'Monthly(1 Months)', '18-55', 'Sushil', '2000-06-23', '7588946244', 'Pending'),
('16', '1014', 'Power Gym', 'Yoga Gym/Studio', 'Monthly(1 Months)', '18-55', 'Sushil', '2000-06-23', '7588946244', 'Pending'),
('18', 'silgym1234', 'Silver Gym', 'CrossFit Gym', '3223', '23', 'lakshmi', '2005-07-08', '8073179960', 'Approved'),
('18', 'silgym1234', 'Silver Gym', 'CrossFit Gym', '3223', '23', 'lakshmi', '2005-07-08', '8073179960', 'Approved'),
('18', 'silgym1234', 'Silver Gym', 'CrossFit Gym', '3223', '23', 'lakshmi', '2005-07-08', '8073179960', 'Approved'),
('18', 'silgym1234', 'Silver Gym', 'CrossFit Gym', '3223', '23', 'lakshmi', '2005-07-08', '8073179960', 'Approved'),
('18', 'silgym1234', 'Silver Gym', 'CrossFit Gym', '3223', '23', 'lakshmi', '2005-07-08', '8073179960', 'Approved'),
('18', 'silgym1234', 'Silver Gym', 'CrossFit Gym', '3223', '23', 'lakshmi', '2005-07-08', '8073179960', 'Approved'),
('18', 'silgym1234', 'Silver Gym', 'CrossFit Gym', '3223', '23', 'lakshmi', '2005-07-08', '8073179960', 'Approved'),
('32', 'fit12345', 'Fit Zone', 'Fitness Studio', 'All', '18-50', 'abcd', '2000-09-02', '1234567890', 'Approved'),
('34', 'bro1234', 'silver gym', 'Commercial Gym', 'Yearly(12 Months)', '18-45', '', '2004-11-02', '34363', 'Pending'),
('36', 'fit12345', 'Fit Zone', 'Fitness Studio', 'All', '18-50', 'akash', '2000-03-10', '9653572424', 'Pending'),
('40', '1046', 'Suheel Gym', 'CrossFit Gym', '2000 (Monthly Packag', '18-50', 'pavi', '2000-12-10', '7456238921', 'Approved'),
('40', '1046', 'Suheel Gym', 'CrossFit Gym', '2000 (Monthly Packag', '18-50', 'pavi', '2000-12-10', '7456238921', 'Approved'),
('44', '1046', 'Suheel Gym', 'CrossFit Gym', '2000 (Monthly Packag', '18-50', 'kishan', '2000-04-22', '8545', 'Approved'),
('46', '1014', 'Power Gym', 'Yoga Gym/Studio', 'Monthly(1 Months)', '18-55', 'anu', '2000-02-04', '6542468790', 'Pending'),
('48', 'bro1234', 'silver gym', 'Commercial Gym', 'Yearly(12 Months)', '18-45', 'kisha', '2004-10-02', '1123456789', 'Pending'),
('50', '1046', 'Suheel Gym', 'CrossFit Gym', '2000 (Monthly Packag', '18-50', 'tanu', '1999-10-20', '8723241324', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `custid`
--

CREATE TABLE IF NOT EXISTS `custid` (
  `bookid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custid`
--

INSERT INTO `custid` (`bookid`) VALUES
(52);

-- --------------------------------------------------------

--
-- Table structure for table `gymown`
--

CREATE TABLE IF NOT EXISTS `gymown` (
  `gname` varchar(20) DEFAULT NULL,
  `ownname` varchar(20) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `cno` varchar(10) DEFAULT NULL,
  `eid` varchar(20) DEFAULT NULL,
  `bussid` varchar(20) DEFAULT NULL,
  `idprof` varchar(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gymown`
--

INSERT INTO `gymown` (`gname`, `ownname`, `location`, `cno`, `eid`, `bussid`, `idprof`, `status`) VALUES
('silver gym', 'dev', '        vidyanagar,d', '1234567890', 'silvergymgmail.com', 'silgym1234', '', 'Active'),
('Bro Gym', 'Vijay', ' S S Layout Davanage', '1234567890', 'brogymgmail.com', 'bro1234', '', 'Active'),
('Fit Zone', 'Harshad', '     VidhyaNagar,Dav', '098765786', 'fitzone@gmail.com', 'fit12345', '', 'Active'),
('cultfit', 'pavani', '  banshankari Layout', '123467890', 'cultfit@gmail.com', '1000', '', 'Rejected'),
('cultfit', 'pavani', '  banshankari Layout', '123467890', 'cultfit@gmail.com', '1000', '', 'Rejected'),
('', '', '', '', '', '', '', NULL),
('Power gym', 'Tanu', ' Shamnur ,Davangere', '1234567890', 'powergym@gmail.com', '1014', '', 'Active'),
('Armstrong Gym', 'Ruchitha', ' Anjanaya Bandavane', '8073317193', 'armstrong@gmail.com', '1016', '', 'Active'),
('Kulambi Gym', 'Kavana', ' New RTO Davanagere', '9731846612', 'kulambi@gmail.com', '1018', '', 'Active'),
('snjk', '', ' ', '', '', '1020', '', 'Rejected'),
('Astroid Gym', '1234', '', '7654314789', 'astroid@gmail.com', '1022', '', 'New'),
('Manu Gym', '', 'vidhya nagar,davanag', '8353932921', 'manu@gmail.com', '1024', '', 'New'),
('Ruchitha Gym', 'Vikas', '', '9743216824', '', '1026', '', 'New'),
('meteroid gym', '', 'Old Rto', '', 'meteroidgym@gmail.co', '1028', '', 'New'),
('wertyjh', '', 'erdfghjkhygfcvbnjk', '1234567890', 'dxcvbhgfhh', '1030', '', 'New'),
('kavana gym', '', '', '', '', '1032', '', 'New'),
('Nayana Gym', 'Nayana', '', '', '', '1034', '', 'New'),
('Sumana Gym', '', '', '', '', '1036', '', 'New'),
('Kishan Gym', '', '', '', '', '1038', '', 'New'),
('', 'Manisha', '', '', '', '1040', '', 'New'),
('', 'hbby', '', '', '', '1042', '', 'New'),
('dxfghbjnm', '', '', '', '', '1044', '', 'New'),
('Suheel Gym', 'Suheel', ' roadbiet ', '0987654321', 'suheel@gmail.copm', '1046', '', 'Active'),
('jhp gym', 'anu', ' vidyanagara davanag', '8753643424', 'jhpgym@gmail.com', '1048', '', 'Active'),
('swat park', 'bhuvan', '    hdchjk', '4567890887', 'bhuvan@gmail.com', '1050', '', 'Active'),
('rocky gym', 'jafar', ' davanagere', '6361470522', 'mohammedeh12@gmail.c', '1052', '', 'Active'),
('titanic', 'ssss', '  k tj nager', '2356233626', 'sbjsdhuis@gmail', '1058', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `idcount`
--

CREATE TABLE IF NOT EXISTS `idcount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1061 ;

--
-- Dumping data for table `idcount`
--

INSERT INTO `idcount` (`id`) VALUES
(1060);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `buid` varchar(10) DEFAULT NULL,
  `gname` varchar(20) DEFAULT NULL,
  `items` varchar(20) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  `num` varchar(10) DEFAULT NULL,
  `weights` varchar(10) DEFAULT NULL,
  `photo` varchar(10) DEFAULT NULL,
  `descrip` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`buid`, `gname`, `items`, `category`, `num`, `weights`, `photo`, `descrip`) VALUES
(NULL, NULL, 'def', 'Cardio Equ', '6-10', 'def', '', 'awedfghjkoiuytfds'),
(NULL, NULL, 'def', 'Cardio Equ', '6-10', 'def', 'Screenshot', 'awedfghjkoiuytfds'),
(NULL, NULL, 'hghs', 'Strength T', '16-20', 'hghs', '', 'jkgyfcgv\r\n'),
(NULL, NULL, 'def', 'Recovery e', '11-15', 'def', '', ''),
('silgym1234', 'silver gym', 'su', '', '6-20', 'def', '', ''),
('silgym1234', 'silver gym', 'su', '', '6-20', 'def', '', ''),
('bro1234', 'bro gym', 'abcd', 'Free Weigh', '1-5', '20', '', 'black coloured equipment'),
('bro1234', 'bro gym', 'dumbells', 'Strength T', '11-15', '20', '', 'gqwhujhw'),
('fit12345', 'Fit Zone', 'Leg Press Machine', 'Strength T', '6-10', 'Weights', '', 'Strength'),
('silgym1234', 'silver gym', 'su', '', '6-20', 'def', '', ''),
('fit12345', 'Fit Zone', 'Threadmill', 'Cardio Equ', '1-5', 'Weights', '', 'Indoor Running Machine'),
('fit12345', 'Fit Zone', 'Rowing Machine', 'Cardio Equ', '6-10', 'Weights', '', 'Full body cardio'),
('fit12345', 'Fit Zone', 'Leg Curl', 'Strength T', '1-5', 'Weights', '', 'Hamstring isolation machine'),
('silgym1234', '', 'skipping', 'Cardio Equ', '6-10', 'Weights', '', ''),
('silgym1234', '', 'adsdfgh', 'Category', 'Number of ', 'Weights', '', ''),
('silgym1234', '', '', 'Category', 'Number of ', 'Weights', '', ''),
('fit12345', 'Fit Zone', 'thread mill', 'Cardio Equ', '1-5', 'No Weights', 'Screenshot', 'e34'),
('silgym1234', 'body fuel', 'dumbl', 'Free Weigh', '6-10', '5', 'Screenshot', 'hggfgfhgjhk'),
('1050', 'swat prak', 'barball', 'Free Weigh', '6-10', '12.5', 'car.j (2).', 'wertyguiop');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE IF NOT EXISTS `public` (
  `bookid` varchar(10) DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `cno` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`bookid`, `uname`, `dob`, `cno`, `status`) VALUES
('2', 'Sumana', '2005-06-20', '9901992195', 'Pending'),
('100', 'Akash', '2002-06-10', '1234567890', 'Pending'),
('100', 'Akash', '2002-06-10', '1234567890', 'Pending'),
('2', 'xgfx', '2000-03-02', '1234567890', 'Pending'),
('4', '', '', '', 'Pending'),
('', '', '', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `buid` varchar(20) DEFAULT NULL,
  `gname` varchar(20) DEFAULT NULL,
  `gymtype` varchar(20) DEFAULT NULL,
  `package` varchar(20) DEFAULT NULL,
  `agelim` varchar(20) DEFAULT NULL,
  `descrip` varchar(255) DEFAULT NULL,
  `photo` varchar(20) DEFAULT NULL,
  `otime` varchar(20) DEFAULT NULL,
  `ctime` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`buid`, `gname`, `gymtype`, `package`, `agelim`, `descrip`, `photo`, `otime`, `ctime`) VALUES
('bro1234', 'silver gym', 'Commercial Gym', 'Yearly(12 Months)', '18-45', 'well settled good environment ', '', '07:00', '22:30'),
('bro1234', 'Bro Gym', 'Personal Training Gy', 'Monthly(1 Months)', '22-30', 'uytrdxcvbnmkjhg', '', '22:06', '18:05'),
('fit12345', 'Fit Zone', 'Fitness Studio', 'All', '18-50', 'Good Environment', 'Screenshot 2026-03-0', '06:30', '22:30'),
('1014', 'Power Gym', 'Yoga Gym/Studio', 'Monthly(1 Months)', '18-55', 'A peaceful yoga studio dedicat', '', '06:00', '19:00'),
('silgym1234', '03:04', 'CrossFit Gym', '3223', '23', 'good environment', '', '03:04', '03:04'),
('silgym1234', '03:04', 'CrossFit Gym', '3223', '23', 'good environment', '', '03:04', '03:04'),
('fit12345', 'Fit Zone', 'Multiple Type', '2000(3 month)', '18-45', 'efrgtyfd', 'Screenshot 2026-03-0', '06:00', '21:30'),
('1046', 'Suheel Gym', 'CrossFit Gym', '2000 (Monthly Packag', '18-50', 'good Environment', 'Screenshot (2).png', '06:00', '20:30'),
('silgym1234', '03:04', 'CrossFit Gym', '3223', '23', 'good environment', '', '03:04', '03:04'),
('silgym1234', 'body fuel', 'Commercial Gym', '500', '18-55', 'hhhjhs', 'Screenshot (2).png', '06:00', '10:00'),
('1050', 'swat prak', 'Bodybuilding Gym', '1599', '18-54', 'shjklfghjkl;', 'Screenshot 2024-12-2', '01:59', '18:29'),
('1052', 'Rocky Gym', 'Bodybuilding Gym', '2000(Monthly Package', '18-50', 'good Environment', 'Screenshot (2).png', '06:30', '21:00');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE IF NOT EXISTS `trainers` (
  `buid` varchar(10) DEFAULT NULL,
  `tname` varchar(20) DEFAULT NULL,
  `gname` varchar(20) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `profi` varchar(10) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `eid` varchar(20) DEFAULT NULL,
  `expert` varchar(20) DEFAULT NULL,
  `experi` varchar(20) DEFAULT NULL,
  `certif` varchar(10) DEFAULT NULL,
  `workday` varchar(20) DEFAULT NULL,
  `worktime` varchar(20) DEFAULT NULL,
  `personal` varchar(20) DEFAULT NULL,
  `monthfee` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`buid`, `tname`, `gname`, `age`, `gender`, `profi`, `phno`, `eid`, `expert`, `experi`, `certif`, `workday`, `worktime`, `personal`, `monthfee`) VALUES
(NULL, 'manu', NULL, '29', 'male', '', '1234567890-', 'manu1234@gmail.com', 'weightlifting', '5yrs', '', '5days', '8am to 5pm', '2000', '5000'),
(NULL, 'dfghj', NULL, '32', 'female', '', '1234567890', 'sdrtfgyhjk', 'sdrtfghj', 'rdtfghbj', '', '345', '45', 'sedfg', 'fg'),
(NULL, 'kishan', NULL, '23', 'male', '', '67383388899', 'kishan@gmail.com', '', '2 years', '', '2 years', '10 to 10', '7000', '17666'),
(NULL, 'kishan', NULL, '23', 'male', '', '67383388899', 'kishan@gmail.com', '', '2 years', '', '2 years', '10 to 10', '7000', '17666'),
(NULL, 'kishan', NULL, '23', 'male', '', '67383388899', 'kishan@gmail.com', '', '2 years', '', '2 years', '10 to 10', '7000', '17666'),
(NULL, 'akash', NULL, '24', 'male', '', '678906789067', 'aksh@gmil.com', 'fcvghj', '2', '', '45', '45', '4567', '4567'),
('silgym1234', 'suheel', 'Silver Gym', '22', 'male', '', '24532456', 'jhv', 'hjgv', 'okjihv', '', 'jhb', 'okjkhbv', 'okjkhb', 'kjhb'),
('bro1234', 'suheel', 'Bro Gym', '21', 'male', '', '1234567890', 'suheel@gmail.com', 'yoga', '5 yrs', '', '6days', '7:00am  to 7:00pm', '5000', '3000'),
('silgym1234', 'harish', 'Silver Gym', '33', 'male', 'Screenshot', '1234567899', 'jhgvyuikjvh', 'squats', '1', 'Screenshot', '123', '6am-4pm', '3000', '9876'),
('fit12345', 'Manu', 'Fit Zone', '27', 'male', '', '1234567890', 'manu@gmail.com', 'Cardio', '5yrs', '', '6days', '10Am to 6Pm', '2000', '2000'),
('silgym1234', 'kishan', 'body fuel', '23', 'male', 'Screenshot', '9765345672', 'kisha@gmail.com', 'weight jefting', '4', 'Screenshot', '365', '6:00  to 10:00', '4000', '10000'),
('silgym1234', 'Vishnu', 'Silver Gym', '25', 'male', 'Screenshot', '8725262826', 'vishnu@gmail.com', 'cardio', '3yrs', 'Screenshot', '5 days', '7:00am  to 7:00pm', '3000', '3500'),
('1050', 'manohar', 'swat prak', '25', 'male', 'Screenshot', '9473827456', 'manohar@gmail.com', 'weight lifting', '5 years', 'Screenshot', '365', '6:00', '1000', '10000');
