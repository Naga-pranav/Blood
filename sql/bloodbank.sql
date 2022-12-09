-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 06:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodinfo`
--

CREATE TABLE `bloodinfo` (
  `bid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `pd` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodinfo`
--

INSERT INTO `bloodinfo` (`bid`, `hid`, `bg`, `pd`) VALUES
(1, 1, 'B+', 'Yes'),
(2, 2, 'A+', 'No'),
(3, 3, 'O+', 'Yes'),
(4, 3, 'B+', 'Yes'),
(5, 3, 'AB-', 'Yes'),
(6, 4, 'B-', 'No'),
(7, 4, 'AB+', 'Yes'),
(8, 5, 'O-', 'Yes'),
(9, 5, 'B+', 'Yes'),
(10, 6, 'A-', 'Yes'),
(11, 6, 'B-', 'No'),
(13, 1, 'A+', 'No'),
(14, 1, 'AB+', 'No'),
(15, 1, 'O-', 'No'),
(16, 7, 'B+', 'Yes'),
(17, 7, 'A+', 'Yes'),
(18, 7, 'AB+', 'No'),
(19, 1, 'AB-', NULL),
(20, 4, 'A+', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `reqid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `bg` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `guardiansname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `plasma` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `guardiansname`, `gender`, `dob`, `weight`, `bloodgroup`, `plasma`, `email`, `address`, `contact`, `username`, `password`) VALUES
(19, 'Harry Den', 'Stephen Den', 'M', '1998-06-17', 70, 'B+', 'Yes', 'harry.den20@gmail.co', 'Demo Address', '7854445420', 'harry', 'pass'),
(20, 'Will Williams', 'Reth R Williams', 'M', '1996-07-16', 70, 'B+', 'Yes', 'williams@gmail.com', 'Demo Address', '0248887540', 'williams', 'williams'),
(21, 'John Doe', 'Kevin Doe', 'M', '1991-12-09', 69, 'AB+', 'No', 'doejohn@gmail.com', '905  Chandler Hollow', '7854445470', 'johnd', 'password'),
(22, 'Ramona Jr Pippin', 'Noramo Pippin', 'F', '1995-02-22', 55, 'O-', 'Yes', 'pippin@gmail.com', '3237  Drummond Stree', '7854445200', 'pippin', 'password'),
(23, 'Robert', 'Simon L Berg', 'M', '1994-06-21', 82, 'AB-', 'No', 'robert@gmail.com', '524  Duff Avenue', '2547778452', 'robert', 'robert'),
(24, 'Arunima', 'Agarwal', 'F', '2022-10-13', 50, 'B+', 'No', 'arunima@gmail.com', 'hyderabad', '9632587410', 'arun123', 'arun123'),
(27, 'Akshaya', 'Akshaya', 'F', '2022-09-28', 50, 'AB+', 'Yes', 'akshaya@gmail.com', 'chennai', '9895236145', 'akshaya', 'aksh123'),
(28, 'arunima', 'hh', 'm', '2009-09-09', 66, 'O-', 'No', 'bb@bb.com', '88', '88', 'root', ''),
(44, 'Demo', 'gg', 'M', '2005-04-04', 66, 'B-', 'No', 'HH@HH.COM', 'HH', '667788990', 'root', ''),
(45, 'Altrin', 'hudson', 'M', '2002-12-28', 65, 'O+', 'Yes', 'altrin@gmail.com', 'karur', '9889988990', 'root', '');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `hemail` varchar(100) NOT NULL,
  `hpassword` varchar(100) NOT NULL,
  `hphone` varchar(100) NOT NULL,
  `hcity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hname`, `hemail`, `hpassword`, `hphone`, `hcity`) VALUES
(1, 'Fortis Mallar Hospital', 'healthcare@fortismalarhospital.com', 'Fortismalar@123', '914442892222', 'Chennai'),
(2, 'SRM Hospital', 'healthmatters@srmhospital.com', 'Srm@123', '914427452270', 'Kancheepuram'),
(3, 'Apollo Multi Speciality Hospital', 'Apollocares@apollohospitals.com', 'Apollo@123', '914428290200', 'Chennai'),
(4, 'MIOT Hospital', 'miotcares@miothospital.com', 'Miot@123', '9122492288', 'Chennai'),
(5, 'CSI Kalyani Hospital', 'healthpioneer@csikalyanihospital.com', 'Csikalyani@123', '914428476433', 'Chennai'),
(6, 'Kauvery Hospital', 'lifecare@kauveryhospital.com', 'Kauvery@123', '914462855324', 'Salem'),
(7, 'SIMS', 'hospital@sims.com', 'Sims@123', '09236523652', 'Chennai'),
(8, 'aaa', 'SS@G.COM', 'asd9999', '914455667788', 'hyd'),
(9, 'SIMS', 'sims@yahoo.in', 'sims@123', '0998899983', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `plasmarequest`
--

CREATE TABLE `plasmarequest` (
  `reqid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `pd` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `id` int(11) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `remail` varchar(100) NOT NULL,
  `rpassword` varchar(100) NOT NULL,
  `rphone` varchar(100) NOT NULL,
  `rbg` varchar(10) NOT NULL,
  `rcity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `rname`, `remail`, `rpassword`, `rphone`, `rbg`, `rcity`) VALUES
(1, 'Vinoth', 'vinoth@gmail.com', 'vinoth@123', '9178234217', 'A-', 'Trichy'),
(2, 'Joshua', 'joshua@gmail.com', 'joshua@123', '7256300185', 'O-', 'Thiruvallur'),
(3, 'Hari', 'hari@gmail.com', 'hari@123', '9174568052', 'B+', 'Madurai'),
(4, 'Naga Pranava Shashank', 'abc@gmail.com', 'asdfghj', '9360899552', 'A+', 'Chennai'),
(5, 'asssssa', 'ss@hotmail.com', 'aassdd', '9988998800', 'AB-', 'ss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD PRIMARY KEY (`reqid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hemail` (`hemail`);

--
-- Indexes for table `plasmarequest`
--
ALTER TABLE `plasmarequest`
  ADD PRIMARY KEY (`reqid`);

--
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `remail` (`remail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `plasmarequest`
--
ALTER TABLE `plasmarequest`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  ADD CONSTRAINT `bloodinfo_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hospitals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
