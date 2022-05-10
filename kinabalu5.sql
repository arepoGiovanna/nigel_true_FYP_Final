-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 07:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinabalu5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `adminID` int(10) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `adminPass` varchar(100) NOT NULL,
  `adminEmail` varchar(100) NOT NULL,
  `adminConnum` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`adminID`, `adminName`, `adminPass`, `adminEmail`, `adminConnum`, `user_type`, `verified`) VALUES
(1, 'admin', 'fcea920f7412b5da7be0cf42b8c93759', 'admin@admin.com', '0102152907', 'admin', 0),
(17, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(19, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(20, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(23, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(24, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(25, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(26, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(27, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(28, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(29, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(30, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(31, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(32, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(33, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(34, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(35, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(36, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(37, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(38, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(39, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(40, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(41, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(42, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(43, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(44, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(45, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(46, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(47, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(48, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(50, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(51, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(52, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(53, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(55, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(56, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(57, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(58, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(59, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(61, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(62, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(63, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(65, '', 'd41d8cd98f00b204e9800998ecf8427e', '1181101303@student.mmu.edu.my', '1234123', 'admin', 0),
(66, '', 'd41d8cd98f00b204e9800998ecf8427e', '1181101303@student.mmu.edu.my', '1234123', 'admin', 0),
(67, '', 'd41d8cd98f00b204e9800998ecf8427e', '1181101303@student.mmu.edu.my', '1234123', 'admin', 0),
(68, '', 'd41d8cd98f00b204e9800998ecf8427e', '1181101303@student.mmu.edu.my', '1234123', 'admin', 0),
(69, '', 'd41d8cd98f00b204e9800998ecf8427e', 'nigel@gmail.com', '1234123', 'admin', 0),
(70, 'admin1', 'f4e3a6de1e5d250a5b085e7618120487', 'admin1@admin.com', '111223', 'admin', 0),
(71, 'admin3', '21232f297a57a5a743894a0e4a801fc3', 'admin3@gmail.com', '1243123', 'admin', 0),
(72, 'tom', '750664a5394b899dac8bf17d0a27bda4', 'tom@jerry.com', '783276120', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `assign_mguide`
--

CREATE TABLE `assign_mguide` (
  `hikerID` int(10) NOT NULL,
  `mguideID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `cap_mly` int(100) NOT NULL,
  `cap_intl` int(100) NOT NULL,
  `assignID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bagent_account`
--

CREATE TABLE `bagent_account` (
  `bAgent_ID` int(10) NOT NULL,
  `bAgent_name` varchar(100) NOT NULL,
  `bAgent_pword` varchar(100) NOT NULL,
  `bAgent_email` varchar(100) NOT NULL,
  `bAgent_cNum` varchar(100) NOT NULL,
  `agname` varchar(100) NOT NULL,
  `comname` varchar(100) NOT NULL,
  `cert_img` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `routeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bagent_account`
--

INSERT INTO `bagent_account` (`bAgent_ID`, `bAgent_name`, `bAgent_pword`, `bAgent_email`, `bAgent_cNum`, `agname`, `comname`, `cert_img`, `user_type`, `routeID`) VALUES
(2, 'nigel123', 'd93591bdf7860e1e4ee2fca799911215', 'noEmail@gmail.com', '4139980', 'Tour Tour', 'Red Hot Chilli Peppers', 'certificate1.png', 'booking agent', 0),
(4, 'Isis', '81dc9bdb52d04dc20036dbd8313ed055', '123@La.com', '775408978', 'Yu Yu', 'Ya Ya', 'first_cert.jpg', 'booking agent', 0),
(5, 'noctis', '81dc9bdb52d04dc20036dbd8313ed055', 'bagent@gmail.com', '1234', 'Gary', 'Gary 2', 'certificate1.png', 'booking agent', 0),
(6, 'noname', '40126e9da9d56f473115e58bbf1420c0', 'noname@gmail.com', '7563483', 'La Tour', 'Not La Tour', 'first_cert.jpg', 'booking agent', 0),
(7, 'heremy', '81dc9bdb52d04dc20036dbd8313ed055', 'ac@gmail.com', '45678', 'Tour Tour', 'That tour', 'certificate1.png', 'booking agent', 0),
(8, 'Larry ', '2ed73085f2012f5bccff45d3fd493e96', 'larry@garfield.com', '94579472', 'Group Tour', 'Travel with Me', 'first_cert.jpg', 'booking agent', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hiker_account`
--

CREATE TABLE `hiker_account` (
  `hikerID` int(10) NOT NULL,
  `hikerUname` varchar(100) NOT NULL,
  `hikerPword` varchar(100) NOT NULL,
  `hikerEmail` varchar(100) NOT NULL,
  `hiker_pNum` varchar(100) NOT NULL,
  `hiker_nation` varchar(30) NOT NULL,
  `enquiries` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `routeID` int(11) NOT NULL,
  `MtGuideID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hiker_account`
--

INSERT INTO `hiker_account` (`hikerID`, `hikerUname`, `hikerPword`, `hikerEmail`, `hiker_pNum`, `hiker_nation`, `enquiries`, `user_type`, `routeID`, `MtGuideID`) VALUES
(3, 'nigel', 'fcea920f7412b5da7be0cf42b8c93759', 'nigel@gmail.com', '0102152907', '', '', '	\r\nhiker', 0, 0),
(4, 'arepo', 'fcea920f7412b5da7be0cf42b8c93759', 'arepo@gmail.com', '0102152907', '', '', '	\r\nhiker', 0, 0),
(8, 'Namine', '827ccb0eea8a706c4c34a16891f84e7b', 'fake@email.com', '12344', '', '', 'hiker', 0, 0),
(9, 'modern', '81dc9bdb52d04dc20036dbd8313ed055', 'modern@m.com', '413', '', '', 'hiker', 0, 0),
(10, 'jolyne', '81dc9bdb52d04dc20036dbd8313ed055', 'jolyne@g.com', '4563345', '', '', 'hiker', 0, 0),
(11, 'KY', '3c12398638c9a6f164935f3aac770745', 'k@y.com', '2345674', '', '', 'hiker', 0, 0),
(12, 'Jeremy', 'c1c7678ea7730848325ecf86944ecde3', 'l@gmail.com', '010234768', '', '', 'hiker', 0, 0),
(13, 'Harold', 'eed23196e62f8b98b6fd2ea881fec77a', 'harold@gmail.com', '111223', '', '', 'hiker', 0, 0),
(14, 'Fred', '81dc9bdb52d04dc20036dbd8313ed055', 'fred@yahoo.com', '111223', '', '', 'hiker', 0, 0),
(15, 'nigel1', '81dc9bdb52d04dc20036dbd8313ed055', 'nigel1@gmail.com', '2346345245', '', '', 'hiker', 0, 0),
(16, 'fetteney', '81dc9bdb52d04dc20036dbd8313ed055', 'fett@fett.com', '1245313', '', '', 'hiker', 0, 0),
(17, 'nigelTheGreat', 'd62216b582175b3b56a31c6877140bf2', 'nigel@demos.com', '0102152907', '', '', 'hiker', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mguide_account`
--

CREATE TABLE `mguide_account` (
  `mguideID` int(10) NOT NULL,
  `mguide_uname` varchar(100) NOT NULL,
  `mguide_pass` varchar(100) NOT NULL,
  `mguide_email` varchar(100) NOT NULL,
  `mguide_cpr_cert1` varchar(255) NOT NULL,
  `mguide_cpr_cert2` varchar(255) NOT NULL,
  `mguide_phone` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `experience` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mguide_account`
--

INSERT INTO `mguide_account` (`mguideID`, `mguide_uname`, `mguide_pass`, `mguide_email`, `mguide_cpr_cert1`, `mguide_cpr_cert2`, `mguide_phone`, `user_type`, `experience`) VALUES
(1, 'Joshua', '81dc9bdb52d04dc20036dbd8313ed055', 'joshua@gmail.com', 'certificate1.png', 'second_cert.jpg', '111223', 'mountain guide', 5),
(4, 'Huey', 'd93591bdf7860e1e4ee2fca799911215', 'ab@gmail.com', 'second_cert.jpg', 'first_cert.jpg', '124231', 'mountain guide', 5),
(5, 'Solomon', '32998eb32cba2a9a27430cd78a457acf', 'solomon@gmail.com', 'certificate1.png', 'first_cert.jpg', '123451', 'mountain guide', 10),
(6, 'joey', '81dc9bdb52d04dc20036dbd8313ed055', 'joaey@joey.com', 'second_cert.jpg', 'first_cert.jpg', '346323467564', 'mountain guide', 10),
(7, 'arnold', 'b88e4ca262c575efb123a249b2861dd0', 'arnold@swarchzenggar.com', 'certificate1.png', 'first_cert.jpg', '769474', 'mountain guide', 8);

-- --------------------------------------------------------

--
-- Table structure for table `sagent_account`
--

CREATE TABLE `sagent_account` (
  `sAgent_ID` int(10) NOT NULL,
  `sAgent_name` varchar(100) NOT NULL,
  `sAgent_pass` varchar(100) NOT NULL,
  `sAgent_email` varchar(100) NOT NULL,
  `sAgent_phone` varchar(100) NOT NULL,
  `sAgent_uni` varchar(100) NOT NULL,
  `sAgent_course` varchar(100) NOT NULL,
  `sAgent_cgpa` float NOT NULL,
  `sAgent_cert` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sagent_account`
--

INSERT INTO `sagent_account` (`sAgent_ID`, `sAgent_name`, `sAgent_pass`, `sAgent_email`, `sAgent_phone`, `sAgent_uni`, `sAgent_course`, `sAgent_cgpa`, `sAgent_cert`, `user_type`) VALUES
(1, 'uwu', '81dc9bdb52d04dc20036dbd8313ed055', 'uwu@uwu.com', '0102152907', 'UITM', 'Business', 4, 'certificate1.png', 'sales agent'),
(4, 'AngAng', '81dc9bdb52d04dc20036dbd8313ed055', 'AngAng@Kelvin.com', '1234635', 'Ang Kelvin', 'business', 3, 'second_cert.jpg', 'sales agent'),
(5, 'Wan', '81dc9bdb52d04dc20036dbd8313ed055', 'sagent@gmail.com', '45678', 'Harvard', 'Business', 3.4, 'certificate1.png', 'sales agent'),
(6, 'Vivian2', 'fcea920f7412b5da7be0cf42b8c93759', 'viv@hotmail.com', '64563234', 'UITM', 'Diploma in Business', 3.4, 'second_cert.jpg', 'sales agent'),
(7, 'yuri123', '01cfcd4f6b8770febfb40cb906715822', 'yuri@gagarin.com', '45678', 'MMU', 'Diploma in Business', 3.9, 'first_cert.jpg', 'sales agent'),
(8, 'gary', '81dc9bdb52d04dc20036dbd8313ed055', 'gary@gary.com', '1234412', 'Kolej Vokasional', 'Diploma in Accounting', 3.93, 'first_cert.jpg', 'sales agent'),
(9, 'averageJoe', '31d8c2fe81a635bef93315aa8234c1a0', 'average@joe.com', '0947392', 'Yale University', 'Masters in Business and Economy', 3.67, 'certificate1.png', 'sales agent');

-- --------------------------------------------------------

--
-- Table structure for table `sagent_product`
--

CREATE TABLE `sagent_product` (
  `routeID` int(11) NOT NULL,
  `route` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `capacity` int(100) NOT NULL,
  `accom` varchar(30) NOT NULL,
  `price_myr` int(200) NOT NULL,
  `price_intl` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sagent_product`
--

INSERT INTO `sagent_product` (`routeID`, `route`, `date`, `capacity`, `accom`, `price_myr`, `price_intl`) VALUES
(1, 'Ranau trail', '2022-04-15', 23, 'Aki House', 123, 123),
(2, 'Ranau trail', '2022-04-15', 23, 'Aki House', 123, 123),
(3, 'Via Ferrata', '2022-04-09', 20, 'Suria Rooms', 123, 123),
(4, 'Kota Belud trail', '2022-05-01', 30, 'Rumah Si Gaman', 900, 1000),
(5, 'Via Ferrata', '2023-01-16', 40, 'Suria Rooms', 800, 1000),
(6, 'Via Ferrata', '2022-05-20', 30, 'Aki House', 790, 900),
(7, 'Via Ferrata', '2022-04-26', 35, 'Rumah Si Gaman', 800, 900),
(8, 'Via Ferrata', '2022-04-27', 20, 'Aki House', 900, 1000),
(9, 'Kota Belud trail', '2022-05-31', 30, 'Aki House', 800, 900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `assign_mguide`
--
ALTER TABLE `assign_mguide`
  ADD PRIMARY KEY (`assignID`),
  ADD KEY `assign_fk2` (`hikerID`),
  ADD KEY `assign_fk3` (`mguideID`);

--
-- Indexes for table `bagent_account`
--
ALTER TABLE `bagent_account`
  ADD PRIMARY KEY (`bAgent_ID`);

--
-- Indexes for table `hiker_account`
--
ALTER TABLE `hiker_account`
  ADD PRIMARY KEY (`hikerID`);

--
-- Indexes for table `mguide_account`
--
ALTER TABLE `mguide_account`
  ADD PRIMARY KEY (`mguideID`);

--
-- Indexes for table `sagent_account`
--
ALTER TABLE `sagent_account`
  ADD PRIMARY KEY (`sAgent_ID`);

--
-- Indexes for table `sagent_product`
--
ALTER TABLE `sagent_product`
  ADD PRIMARY KEY (`routeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `adminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `assign_mguide`
--
ALTER TABLE `assign_mguide`
  MODIFY `assignID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bagent_account`
--
ALTER TABLE `bagent_account`
  MODIFY `bAgent_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hiker_account`
--
ALTER TABLE `hiker_account`
  MODIFY `hikerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mguide_account`
--
ALTER TABLE `mguide_account`
  MODIFY `mguideID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sagent_account`
--
ALTER TABLE `sagent_account`
  MODIFY `sAgent_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sagent_product`
--
ALTER TABLE `sagent_product`
  MODIFY `routeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign_mguide`
--
ALTER TABLE `assign_mguide`
  ADD CONSTRAINT `assign_fk2` FOREIGN KEY (`hikerID`) REFERENCES `hiker_account` (`hikerID`),
  ADD CONSTRAINT `assign_fk3` FOREIGN KEY (`mguideID`) REFERENCES `mguide_account` (`mguideID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
