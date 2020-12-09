-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 03:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `ID` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`First_name`, `Last_name`, `ID`, `type`) VALUES
('RUSHANK', 'SHETA', '9820', 'STUDENT'),
('SOHAM', 'MADHVANI', '9664', 'STUDENT'),
('HARSH', 'PANDYA', '9833', 'STUDENT'),
('ADMIN', 'STUDENT', '12345', 'STUDENT'),
('ADMIN', 'PROFESSOR', '12345', 'PROFESSOR'),
('YOGESH', 'PINGLE', '12345', 'PROFESSOR');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `College_ID_number` varchar(50) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `Conference` varchar(50) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Stage` varchar(50) NOT NULL,
  `Academic_Year` varchar(50) NOT NULL,
  `DATE` date NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Start_page_number` varchar(50) NOT NULL,
  `End_page_number` varchar(50) NOT NULL,
  `Link` varchar(500) NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`First_name`, `Last_name`, `College_ID_number`, `Year`, `Department`, `Title`, `Conference`, `Venue`, `Stage`, `Academic_Year`, `DATE`, `ISBN`, `Start_page_number`, `End_page_number`, `Link`, `file_name`) VALUES
('yogesh', 'pingle', '45', 'First Year Engineering (F.E)', 'Mechanical Engineering', ' NOAA dataset visualizationOAA dataset visualizationOAA dataset visualization', 'dffff', 'Mumbai', 'National', '2018-2019', '2020-10-22', '5454fsd', '1', '4', 'file:///C:/wamp64/www/TEMP/proj_php_2/index.html', 'pdf/Coursera-Advance Machine Learning.pdf'),
('1', '1', '1', '', 'Mechanical Engineering', '1', '1', '11', 'National', '2018-2019', '0001-01-01', '11', '1', '111', 'https://www.google.com', 'file_path'),
('1', '1', '1', '', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '1111-01-11', '1', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('1', '1', '1', '', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '1111-01-11', '1', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `College_ID_number` varchar(50) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `Conference` varchar(50) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Stage` varchar(50) NOT NULL,
  `Academic_Year` varchar(50) NOT NULL,
  `DATE` date NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Start_page_number` varchar(50) NOT NULL,
  `End_page_number` varchar(50) NOT NULL,
  `Link` varchar(500) NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`First_name`, `Last_name`, `College_ID_number`, `Year`, `Department`, `Title`, `Conference`, `Venue`, `Stage`, `Academic_Year`, `DATE`, `ISBN`, `Start_page_number`, `End_page_number`, `Link`, `file_name`) VALUES
('harsh', 'pandya', '45', 'First Year Engineering (F.E)', 'Mechanical Engineering', ' NOAA dataset visualization', 'dffff', 'Mumbai', 'National', '2018-2019', '2020-10-22', '5454fsd', '1', '4', 'url', 'pdf_loc'),
('vikas', 'dabhi', '12345', 'T.E', 'IT', 't', 'c', 'v', 'stage', '2020-2021', '2010-10-20', '12345', '1', '2', '.com', '.pdf'),
('vikas', '1', '1', 'First Year Engineering (B.E)', 'Mechanical Engineering', '1', '11', '1', 'National', '2018-2019', '1111-11-01', '1', '1', '1', 'https://www.google.com', 'file_path'),
('1', '1', '1', 'First Year Engineering (B.E)', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '0111-01-01', '11', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('1', '1', '1', 'First Year Engineering (B.E)', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '0111-01-01', '11', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('1', '1', '1', 'First Year Engineering (B.E)', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '0111-01-01', '11', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('1', '1', '1', 'First Year Engineering (B.E)', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '0111-01-01', '11', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('1', '1', '1', 'First Year Engineering (B.E)', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '0111-01-01', '11', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('1', '1', '1', 'First Year Engineering (B.E)', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '0111-01-01', '11', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('1', '1', '1', 'First Year Engineering (B.E)', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '0111-01-01', '11', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('1', '1', '1', 'First Year Engineering (B.E)', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '0111-01-01', '11', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('1', '1', '1', 'First Year Engineering (B.E)', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '0111-01-01', '11', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('1', '1', '1', 'First Year Engineering (B.E)', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '0111-01-01', '11', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('1', '1', '1', 'First Year Engineering (B.E)', 'Mechanical Engineering', '1', '1', '1', 'National', '2018-2019', '0111-01-01', '11', '1', '1', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('f', 'f', '6', 'Final Year Engineering (B.E)', 'Mechanical Engineering', 'f', 'f', 'f', 'National', '2018-2019', '0000-00-00', 'ffffff', '6', '6', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('f', 'f', '6', 'Final Year Engineering (B.E)', 'Mechanical Engineering', 'f', 'f', 'f', 'National', '2018-2019', '0000-00-00', 'ffffff', '6', '6', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('f', 'f', '6', 'Final Year Engineering (B.E)', 'Mechanical Engineering', 'f', 'f', 'f', 'National', '2018-2019', '0000-00-00', 'ffffff', '6', '6', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('f', 'f', '6', 'Final Year Engineering (B.E)', 'Mechanical Engineering', 'f', 'f', 'f', 'National', '2018-2019', '0000-00-00', 'ffffff', '6', '6', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('f', 'f', '6', 'Final Year Engineering (B.E)', 'Mechanical Engineering', 'f', 'f', 'f', 'National', '2018-2019', '0000-00-00', 'ffffff', '6', '6', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('f', 'f', '6', 'Final Year Engineering (B.E)', 'Mechanical Engineering', 'f', 'f', 'f', 'National', '2018-2019', '0000-00-00', 'ffffff', '6', '6', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('f', 'f', '6', 'Final Year Engineering (B.E)', 'Mechanical Engineering', 'f', 'f', 'f', 'National', '2018-2019', '0000-00-00', 'ffffff', '6', '6', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('f', 'f', '6', 'Final Year Engineering (B.E)', 'Mechanical Engineering', 'f', 'f', 'f', 'National', '2018-2019', '0000-00-00', 'ffffff', '6', '6', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('6', '6', '6', 'First Year Engineering (B.E)', 'Mechanical Engineering', '6', '6', '66', 'National', '2018-2019', '0006-06-06', '6', '6', '6', 'https://www.google.com/', 'pdf/India MAR-2020.pdf'),
('9', '9', '9', 'First Year Engineering (B.E)', 'Mechanical Engineering', '9', '9', '99', 'National', '2018-2019', '0009-09-09', '9', '9', '9', 'https://www.google.com/', 'pdf/Coffee_Can_Investing_-_the_low_risk_road_to_stupendous_wealth.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
