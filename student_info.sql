-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2016 at 06:54 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sname` varchar(30) NOT NULL,
  `enrollment` varchar(15) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL,
  UNIQUE KEY `enrollment` (`enrollment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sname`, `enrollment`, `email`, `phone_number`, `password`, `type`) VALUES
('keyur', '111110107009', 'keyursuthar@gmail.com', '98752591705', '559421073ee0986dd8373cc069b715ab69f4848d', 'faculty'),
('Arushi', '120410107048', 'arushi28@gmail.com', '9979322111', 'f13d5513cd0a5e413b07aad0904855c71c6fb87f', 'student'),
('Vishal', '130410107009', 'vishal09@gmail.com', '8238088093', '84e251d2fbc04b522786147b3ab8cde294e84c47', 'student'),
('Hemant', '130410107010', 'hemant95@hotmail.com', '7383525791', '35210bba421bad9675f0a6ea114a9390a82323e5', 'student'),
('Karan', '130410107014', 'karan14@hotmail.com', '9409156640', '0653a8307f12f64959ca427125a04fa3b2349502', 'student'),
('Pallav', '130410107044', 'pallavjhaveri2512@gmail.com', '9924130194', '2292d1016969cbf1b3f1637c31bb25eeb23df88b', 'student'),
('Aayush', '130410107057', 'aayush20@gmail.com', '9898195823', '20e5d2fa7a1efd34061f10ed93fa4171c6f5e9da', 'student'),
('Archil', '130410107059', 'archil59@hotmail.com', '8734048403', '6f432dfe983851713b9c526a5d9ec071c3efaefd', 'student'),
('Sachi', '130410107076', 'sachi76@gmail.com', '8732914315', 'd9ed2777e11caa4606fc48d659527e0a54c5fc12', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
