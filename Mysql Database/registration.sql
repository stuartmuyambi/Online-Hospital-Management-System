-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 06, 2018 at 02:02 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

DROP TABLE IF EXISTS `admissions`;
CREATE TABLE IF NOT EXISTS `admissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dob` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `dob`, `name`, `email`, `address`, `phone`, `sex`) VALUES
(1, '2018-06-20', 'Mukisa Moses', 'mukisamoses@gmali.com', 'Kyengera', '0781816947', 'Male'),
(2, '2018-06-12', 'Lubowa Mike', 'lubowa@gmail.com', 'Kampala', '0772390920', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `patient` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `date`, `patient`, `doctor`) VALUES
(1, '2018-06-29', 'Bayo Simon', 'Gavamukulya Fudel'),
(2, '2018-06-19', 'Anguyi Remmy', 'Muyambi Stuart'),
(3, '2018-06-28', 'Ojambo Fredrick', 'Musenero Rebecca'),
(4, '2018-06-13', 'Lubowa Mike', 'Anguyi Remmy');

-- --------------------------------------------------------

--
-- Table structure for table `bedallotment`
--

DROP TABLE IF EXISTS `bedallotment`;
CREATE TABLE IF NOT EXISTS `bedallotment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bednumber` varchar(200) NOT NULL,
  `wardnumber` varchar(200) NOT NULL,
  `patient` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bedallotment`
--

INSERT INTO `bedallotment` (`id`, `bednumber`, `wardnumber`, `patient`, `sex`, `date`) VALUES
(1, 'B001', 'WN001', 'Ojambo Fredrick', 'Male', '2018-06-13'),
(2, 'B112', 'MN001', 'Anguyi Remmy', 'Male', '2018-06-12'),
(3, 'B041', 'WN512', 'Bayern Shadia', 'Female', '2018-06-15'),
(4, 'B043', 'WN001', 'Lubowa Mike', 'Male', '2018-06-27'),
(5, 'B053', 'MN442', 'Robert Mugerwa', 'Male', '2018-06-12'),
(6, 'B042', 'WN022', 'Sebunga Herbert', 'Male', '2018-06-12'),
(7, 'B045', 'WN512', 'Mukisa Moses', 'Male', '2018-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `birthreports`
--

DROP TABLE IF EXISTS `birthreports`;
CREATE TABLE IF NOT EXISTS `birthreports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(33) NOT NULL,
  `date` varchar(33) NOT NULL,
  `baby` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthreports`
--

INSERT INTO `birthreports` (`id`, `description`, `date`, `baby`) VALUES
(1, 'Ward', '12/09/2018', 'Muyambi Stuart'),
(2, 'Test', '12/09/2018', 'Lubowa Mike'),
(3, 'Test', '12/09/2018', 'Keeya Faizo'),
(4, 'Test', '12/09/2018', 'Lemi Simon'),
(5, 'Test', '23/09/2018', 'Lukwago Hamidu');

-- --------------------------------------------------------

--
-- Table structure for table `deaths`
--

DROP TABLE IF EXISTS `deaths`;
CREATE TABLE IF NOT EXISTS `deaths` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(22) NOT NULL,
  `date` varchar(22) NOT NULL,
  `deceased` varchar(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deaths`
--

INSERT INTO `deaths` (`id`, `description`, `date`, `deceased`) VALUES
(1, 'Accident', '12/12/2018', 'Sekibogo Moses'),
(2, 'Brain Tumor', '12/09/1994', 'AK 47'),
(3, 'Driveby Shooting', '08/04/2004', 'Afande Kaweesi'),
(4, 'Shooting', '11/08/2018', 'Abiriga Ibrahim');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Department` varchar(2000) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `Department`, `Description`) VALUES
(1, 'Admissions', 'At the Admitting Department, the patient will be required to provide personal information and sign consent forms before being taken to the clinic unit or ward. If the individual is critically ill, then this information is usually obtained from a family member. '),
(2, 'Cardiology', 'This is the department which provides medical care to patients who have problems with their heart or circulation. This kind of patients will be admitted to he Heart Clinic '),
(3, 'Critical Care', 'This department is also refered to as The Intensive Care. This department is for seriously ill patients. This kind of patients are usually in a comma of just suffered a dangerous accident. '),
(4, 'Finance Department', 'Performs all works related to budget and ideal use of the items of such budget. Also, it prepares payrolls and montyly wages, and concludes contracts of operation and maintenance and purchases. In addition, it makes available all amounts of money_format required for procurement of all materials and equipment. ');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `address`, `phone`, `department`) VALUES
(1, 'Musenero Rebecca', 'rmusenero@gmail.com', 'Kampala', 702431269, 'Cardiology'),
(2, 'Gavamukulya Fudel', 'gava256@gmail.com', 'Kawempe', 792345438, 'Intensive Care Unit'),
(3, 'Lemi Simon', 'lemistone@gmail.com', 'Kyebando', 772345465, 'Cardiology'),
(4, 'Stuart Muyambi', 'stuartmuyambi@gmail.com', 'Kawempe', 702431269, 'Intensive Care Unit'),
(5, 'Lukwago Hamidu', 'lukwago@gmail.com', 'Kawempe', 702431269, 'Intensive Care Unit'),
(6, 'Mukisa Moses', 'mukisamoses@gmail.com', 'Kampala', 778234323, 'Cardiology');

-- --------------------------------------------------------

--
-- Table structure for table `donars`
--

DROP TABLE IF EXISTS `donars`;
CREATE TABLE IF NOT EXISTS `donars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donars`
--

INSERT INTO `donars` (`id`, `name`, `age`, `sex`, `bloodgroup`) VALUES
(1, 'Lubowa Mike', 22, 'Male', 'O-'),
(2, 'Mukisa Moses', 44, 'Male', 'A+'),
(3, 'Musenero Rebecca', 12, 'Female', 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE IF NOT EXISTS `medicine` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mname` varchar(200) NOT NULL,
  `mcategory` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `manufacturer` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `mname`, `mcategory`, `description`, `manufacturer`, `price`, `status`) VALUES
(1, 'Aceclofenat', 'Analgesic ', 'Gets rid of Allergies', 'Escorts Pharmaceuticals', 'UGX 43000', 'Available'),
(2, 'Diclofenac Sodium 50 mg', 'Antipyretic', 'Body muscle relaxant', 'Cipla Quality Chemicals', 'UGX 32000', 'Available'),
(3, 'Beclomethasone 0.025%', 'Dermatology', 'Cough releaf', 'Abacus Pharma (A) Ltd', 'UGX 62000', 'Available'),
(4, 'Povidone lodine', 'Dermatology', 'Gets rid of allergic symptoms', 'Alexion Pharmaceuticals', 'UGX 65000', 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dob` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `dob`, `name`, `email`, `address`, `phone`, `sex`, `bloodgroup`) VALUES
(1, '1996-05-06', 'Bayani Shadia', 'bayern256@gmail.com', 'Mukono', 702431269, 'O-', ''),
(2, '1989-03-14', 'Lukwago Hamidu', 'lukwago@gmail.com', 'Kampala', 781816944, 'O+', ''),
(3, '2018-06-12', 'Musenero Rebecca', 'rmusenero@gmail.com', 'Kampala', 781816947, 'Female', '');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `date`, `status`) VALUES
(2, 'Anguyi Remmy', '2018-06-13', 'PENDING'),
(3, 'Ojambo Fredrick', '2018-06-06', 'PAID'),
(4, 'Mukasa Samuel', '2018-06-06', 'PAID'),
(5, 'Lubowa Mike', '2018-06-05', 'PAID'),
(6, 'Mukisa Moses', '2018-06-14', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(14, 'Lukwago Hamidu', 'f01fa46fd13db60092dde5ccb386f153'),
(13, 'Musenero Rebecca', 'f01fa46fd13db60092dde5ccb386f153'),
(12, 'Gavamukulya Fudel', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'Stuart Muyambi', 'f01fa46fd13db60092dde5ccb386f153');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
