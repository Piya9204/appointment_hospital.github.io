-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 07:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(10) NOT NULL,
  `adminname` varchar(25) NOT NULL,
  `loginid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  `usertype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `loginid`, `password`, `status`, `usertype`) VALUES
(1, 'Alfiya Sayyad', 'admin', 'admin123', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentid` int(10) NOT NULL,
  `appointmenttype` varchar(25) NOT NULL,
  `patientid` int(10) NOT NULL,
  `roomid` int(10) NOT NULL,
  `departmentid` int(10) NOT NULL,
  `appointmentdate` date NOT NULL,
  `appointmenttime` time NOT NULL,
  `doctorid` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `app_reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentid`, `appointmenttype`, `patientid`, `roomid`, `departmentid`, `appointmentdate`, `appointmenttime`, `doctorid`, `status`, `app_reason`) VALUES
(10, '', 20, 0, 12, '2022-04-27', '04:21:00', 9, 'Approved', 'fractor'),
(11, '', 0, 0, 12, '2022-04-27', '04:30:00', 10, '', ''),
(12, '', 21, 0, 11, '2022-05-03', '03:03:00', 9, 'Approved', 'need doctor.....'),
(14, '', 23, 0, 14, '2022-04-30', '15:30:00', 12, 'Approved', ''),
(15, 'ONLINE', 25, 0, 12, '2022-05-04', '17:18:00', 10, 'Pending', 'sd'),
(16, 'ONLINE', 26, 0, 12, '2022-05-04', '17:18:00', 10, 'Pending', 'sd'),
(17, 'ONLINE', 27, 0, 12, '2022-05-04', '17:18:00', 10, 'Pending', 'sd'),
(18, 'ONLINE', 28, 0, 12, '2022-05-04', '17:18:00', 10, 'Pending', 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentid` int(10) NOT NULL,
  `departmentname` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `departmentname`, `description`, `status`) VALUES
(10, 'Neurology', 'its your department', 'Inactive'),
(11, 'Neurosurgen', 'Here is Neurosurgen Department', 'Active'),
(12, 'Orthopaedic', 'here is another department', 'Active'),
(13, 'Plastic Surgeory', 'here is next one department', 'Active'),
(14, 'Medicine', 'here is another one', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctorid` int(10) NOT NULL,
  `doctorname` varchar(50) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `departmentid` int(10) NOT NULL,
  `loginid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  `education` varchar(25) NOT NULL,
  `experience` float(11,1) NOT NULL,
  `consultancy_charge` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorid`, `doctorname`, `mobileno`, `departmentid`, `loginid`, `password`, `status`, `education`, `experience`, `consultancy_charge`) VALUES
(9, 'Vijay Kumar', '0000000000', 11, '01', 'password', 'Active', 'M.S.Mch', 0.0, 0.00),
(10, 'Dr. Amol Khairner', '0000000000', 12, '02', 'password', 'Active', 'MBBS,DNB,MNAMS', 0.0, 0.00),
(11, 'Dr. Rohan Nevadkar', '0000000000', 13, '03', 'password', 'Active', 'MBBS,DNB,Mch', 0.0, 0.00),
(12, 'Dr. Bhupesh Patil', '0000000000', 14, '04', 'password', 'Active', 'MBBS,FCPS(Medicine)AFIH', 0.0, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientid` int(10) NOT NULL,
  `patientname` varchar(50) NOT NULL,
  `admissiondate` date NOT NULL,
  `admissiontime` time NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientid`, `patientname`, `admissiondate`, `admissiontime`, `address`, `mobileno`, `city`, `pincode`, `loginid`, `password`, `bloodgroup`, `gender`, `dob`, `status`) VALUES
(12, 'alfiya', '2022-04-17', '19:13:23', 'old dhule,dhule', '0000000000', 'dhule', '424001', 'alfiya', 'password', 'O+', 'FEMALE', '2004-02-09', 'Active'),
(13, 'Arshin', '2022-04-17', '22:05:03', 'old dhule,dhule', '0000000000', 'dhule', '424001', 'arshin', 'password', 'A+', 'FEMALE', '2022-04-07', 'Active'),
(14, 'dimpal pansare ', '2022-04-18', '07:08:01', 'deopur dhule', '0000000000', 'dhule', '424001', 'dimpal', 'password', 'AB+', 'FEMALE', '2022-04-07', 'Active'),
(15, 'thakare tejaswi', '2022-04-18', '08:25:26', 'parola.dist jalgoan', '7447692636', 'parola', '425111', 'tejasvi', 'password', 'O+', 'FEMALE', '2022-04-08', 'Active'),
(16, 'abc', '2022-04-22', '21:06:37', 'xyz', '0000000000', 'lmn', '123456', 'abc', 'password', 'O+', 'MALE', '2022-04-09', 'Active'),
(17, 'meera patil', '2022-04-24', '19:31:05', 'green colony,pune', '0000000000', 'pune', '', 'meera', 'password', '', 'Female', '2022-04-26', 'Active'),
(18, 'meera patil', '2022-04-24', '19:36:46', 'green colony,pune', '0000000000', 'pune', '', 'meera', 'password', '', 'Female', '2022-04-26', 'Active'),
(19, 'meera patil', '2022-04-24', '19:38:06', 'green colony,pune', '0000000000', 'pune', '', 'meera', 'password', '', 'Female', '2022-04-26', 'Active'),
(20, 'neha patil', '2022-04-24', '21:49:31', 'old dhule,dhule', '0000000000', 'dhule', '', 'neha', 'password', '', 'Female', '1997-06-07', 'Active'),
(21, 'Rohini Patil', '2022-04-29', '20:31:06', 'deopur, dhule', '0000000000', 'dhule', '', 'rohini', 'password', '', '', '2022-04-14', 'Active'),
(22, 'abc', '2022-04-30', '07:38:18', 'dhule deopur', '123456790', 'dhule', '', 'abc', 'Abc212345', '', 'Male', '2003-10-27', 'Active'),
(23, 'xyz', '2022-04-30', '07:41:55', 'de', '123456413', 'dhule', '', 'xyz', 'xyz@12345', '', 'Male', '2003-10-27', 'Active'),
(24, 'xyz', '2022-04-30', '07:42:46', 'de', '123456413', 'dhule', '', 'xyz', 'xyz@12345', '', 'Male', '2003-10-27', 'Active'),
(25, 'xyz', '2022-04-30', '07:49:19', 'de', '123456413', 'dhule', '', 'xyz', 'xyz12345', '', 'Male', '2022-04-15', 'Active'),
(26, 'xyz', '2022-04-30', '07:51:59', 'de', '123456413', 'dhule', '', 'xyz', 'xyz12345', '', 'Male', '2022-04-15', 'Active'),
(27, 'xyz', '2022-04-30', '07:52:44', 'de', '123456413', 'dhule', '', 'xyz', 'xyz12345', '', 'Male', '2022-04-15', 'Active'),
(28, 'xyz', '2022-04-30', '07:53:28', 'de', '123456413', 'dhule', '', 'xyz', 'xyz12345', '', 'Male', '2022-04-15', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`),
  ADD UNIQUE KEY `adminname` (`adminname`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctorid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`),
  ADD KEY `loginid` (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departmentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctorid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
