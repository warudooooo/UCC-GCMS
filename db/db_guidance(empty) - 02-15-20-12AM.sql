-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 05:17 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_guidance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activitylog`
--

CREATE TABLE `tbl_activitylog` (
  `activityID` int(11) NOT NULL,
  `admName` varchar(255) NOT NULL,
  `activityAction` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_activitylog`
--

INSERT INTO `tbl_activitylog` (`activityID`, `admName`, `activityAction`, `date`) VALUES
(201, 'Romualdo Reyes', 'ADDED EXAMINTAION SCHEDULE', '2023-02-15 00:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admissiontestrecords`
--

CREATE TABLE `tbl_admissiontestrecords` (
  `admID` int(11) NOT NULL,
  `admYear` int(4) NOT NULL,
  `admFile` varchar(255) NOT NULL,
  `admSize` int(11) NOT NULL,
  `admDownloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admissiontestschedule`
--

CREATE TABLE `tbl_admissiontestschedule` (
  `admID` int(11) NOT NULL,
  `admDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cases`
--

CREATE TABLE `tbl_cases` (
  `caseID` int(11) NOT NULL,
  `caseName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cases`
--

INSERT INTO `tbl_cases` (`caseID`, `caseName`) VALUES
(1, 'Assaulting or threatening to assault teachers or other students.'),
(2, 'Continuously engaging in disruptive conduct'),
(3, 'Possessing drugs, alcohol or weapons'),
(4, 'Stealing or damaging school property or property of others'),
(5, 'Sexual offenses or obscenities'),
(6, 'Disruption of reasonable school activity'),
(8, 'Willful defiance of school authority');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counselinghistory`
--

CREATE TABLE `tbl_counselinghistory` (
  `ID` int(11) NOT NULL,
  `counselingType` varchar(45) NOT NULL,
  `requesterName` varchar(45) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `counselingDetails` mediumtext NOT NULL,
  `counselingSchedule` varchar(255) NOT NULL,
  `counselingStatus` varchar(45) NOT NULL,
  `counselor` varchar(45) NOT NULL,
  `counselorRemarks` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_counselinghistory`
--

INSERT INTO `tbl_counselinghistory` (`ID`, `counselingType`, `requesterName`, `studentNumber`, `studentCourse`, `studentEmail`, `counselingDetails`, `counselingSchedule`, `counselingStatus`, `counselor`, `counselorRemarks`) VALUES
(62, 'Behavior Therapy', 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '62', '02/15/2023 02:00 PM (Wednesday)', 'Completed', 'Alden Richards', 'Next time ulit ha?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counselings`
--

CREATE TABLE `tbl_counselings` (
  `ID` int(11) NOT NULL,
  `counselingType` varchar(45) NOT NULL,
  `requesterName` varchar(45) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `counselingDetails` mediumtext NOT NULL,
  `counselingSchedule` datetime NOT NULL,
  `counselingStatus` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counselingservices`
--

CREATE TABLE `tbl_counselingservices` (
  `serviceID` int(11) NOT NULL,
  `serviceName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_counselingservices`
--

INSERT INTO `tbl_counselingservices` (`serviceID`, `serviceName`) VALUES
(2, ' Behavior Therapy'),
(3, ' Cognitive Therapy'),
(4, ' Holistic Therapy'),
(5, ' Educational Counseling'),
(7, ' Mental Health Counseling');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counselors`
--

CREATE TABLE `tbl_counselors` (
  `counselorID` int(11) NOT NULL,
  `counselorName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_counselors`
--

INSERT INTO `tbl_counselors` (`counselorID`, `counselorName`) VALUES
(1, 'Alden Richards');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proctors`
--

CREATE TABLE `tbl_proctors` (
  `proctorID` int(11) NOT NULL,
  `proctorName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_proctors`
--

INSERT INTO `tbl_proctors` (`proctorID`, `proctorName`) VALUES
(2, 'Joel Rosales Baui'),
(5, 'Ryan Jacob Contridas Yammbao');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proctorschedule`
--

CREATE TABLE `tbl_proctorschedule` (
  `proctorID` int(11) NOT NULL,
  `proctorName` varchar(255) NOT NULL,
  `roomAssigned` varchar(45) NOT NULL,
  `startTime` varchar(255) NOT NULL,
  `endTime` varchar(255) NOT NULL,
  `examDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE `tbl_rooms` (
  `roomID` int(11) NOT NULL,
  `roomName` varchar(54) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`roomID`, `roomName`) VALUES
(1, 'CL1'),
(2, 'CL2'),
(3, 'CL3'),
(4, 'LR1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanctions`
--

CREATE TABLE `tbl_sanctions` (
  `sanctionID` int(11) NOT NULL,
  `studentName` varchar(45) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `studentCourse` varchar(11) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `sanctionCase` mediumtext NOT NULL,
  `sanction` varchar(45) NOT NULL,
  `sanctionType` varchar(45) NOT NULL,
  `sanctionMessage` varchar(45) NOT NULL,
  `dateIssued` datetime NOT NULL DEFAULT current_timestamp(),
  `degree` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanctionservices`
--

CREATE TABLE `tbl_sanctionservices` (
  `sanctionID` int(11) NOT NULL,
  `sanctionName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanctionservices`
--

INSERT INTO `tbl_sanctionservices` (`sanctionID`, `sanctionName`) VALUES
(1, 'Probation'),
(2, 'Suspension'),
(3, 'Dismissal'),
(4, 'Seminar'),
(5, 'Assessment'),
(7, 'Educational/Reflective Assignment');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `ID` int(11) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `studentName` varchar(45) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `studentPassword` varchar(45) NOT NULL,
  `vkey` varchar(45) NOT NULL,
  `studentCreateDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `studentVerified` varchar(3) NOT NULL,
  `userType` varchar(5) NOT NULL,
  `userStatus` int(1) NOT NULL,
  `regForm` varchar(255) NOT NULL,
  `resetCode` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`ID`, `studentNumber`, `studentName`, `studentCourse`, `studentEmail`, `studentPassword`, `vkey`, `studentCreateDate`, `studentVerified`, `userType`, `userStatus`, `regForm`, `resetCode`) VALUES
(35, 'admin', 'Romualdo Reyes', 'administrator', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', '', '2022-10-26 05:23:35.628926', 'yes', 'admin', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(36, '2001911-M', 'bin Laden, Osama', 'ISIS 4-A', '', '', '', '2022-10-26 07:10:27.760490', 'no', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(60, '20190004-M', 'Be, Jin F.', 'BSIS 1-A', 'bossjinbe@fishman.com', '7cda131528089c476d4b041013460ec8', '94d6e6c70562deea827223c70636f9e3', '2022-11-02 08:34:18.373039', 'no', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(89, '20190003-M', 'Yambao, Ryan Jacob C.', 'BSIS 4-A', 'ryanjacobyambao@gmail.com', '', '', '2022-11-03 06:25:57.517350', 'yes', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(91, '20190084-M', 'Reyes, Romualdo M.', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '7cda131528089c476d4b041013460ec8', '', '2022-11-03 06:33:05.935565', 'yes', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(92, '20190002-M', 'Conde, Tristan Deo M.', 'BSIS 4-A', 'mahniggahboitristan@gmail.com', '', '', '2022-11-03 11:00:58.839511', 'yes', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(93, '20190000-M', 'Manke, Loppy D.', 'STRHT 4-A', '', '', '', '2022-11-03 11:03:18.047111', 'no', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(101, '20200005-M', 'Rechagre, Alden R.', 'BSA 4-A', '', '', '', '2022-11-15 06:07:35.258565', 'no', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(103, '20190001-M', 'Baui, Joel R', 'BSIS 4-A', 'joeligoprosalesbaui@gmail.com', '7cda131528089c476d4b041013460ec8', 'c8bdbc798167387ce52659564c3df89f', '2022-11-24 04:53:23.045669', 'no', 'user', 1, 'Screenshot 2023-02-08 131652.jpg', ''),
(114, 'admin2', 'Administrator 2', 'Romualdo Reyes', 'admins@admin.com', '0192023a7bbd73250516f069df18b500', '', '2022-12-22 03:43:32.242775', 'yes', 'admin', 1, 'Screenshot 2023-01-16 133025.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activitylog`
--
ALTER TABLE `tbl_activitylog`
  ADD PRIMARY KEY (`activityID`);

--
-- Indexes for table `tbl_admissiontestrecords`
--
ALTER TABLE `tbl_admissiontestrecords`
  ADD PRIMARY KEY (`admID`);

--
-- Indexes for table `tbl_admissiontestschedule`
--
ALTER TABLE `tbl_admissiontestschedule`
  ADD PRIMARY KEY (`admID`);

--
-- Indexes for table `tbl_cases`
--
ALTER TABLE `tbl_cases`
  ADD PRIMARY KEY (`caseID`);

--
-- Indexes for table `tbl_counselinghistory`
--
ALTER TABLE `tbl_counselinghistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_counselings`
--
ALTER TABLE `tbl_counselings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_counselingservices`
--
ALTER TABLE `tbl_counselingservices`
  ADD PRIMARY KEY (`serviceID`);

--
-- Indexes for table `tbl_counselors`
--
ALTER TABLE `tbl_counselors`
  ADD PRIMARY KEY (`counselorID`);

--
-- Indexes for table `tbl_proctors`
--
ALTER TABLE `tbl_proctors`
  ADD PRIMARY KEY (`proctorID`);

--
-- Indexes for table `tbl_proctorschedule`
--
ALTER TABLE `tbl_proctorschedule`
  ADD PRIMARY KEY (`proctorID`);

--
-- Indexes for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `tbl_sanctions`
--
ALTER TABLE `tbl_sanctions`
  ADD PRIMARY KEY (`sanctionID`);

--
-- Indexes for table `tbl_sanctionservices`
--
ALTER TABLE `tbl_sanctionservices`
  ADD PRIMARY KEY (`sanctionID`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activitylog`
--
ALTER TABLE `tbl_activitylog`
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `tbl_admissiontestrecords`
--
ALTER TABLE `tbl_admissiontestrecords`
  MODIFY `admID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_admissiontestschedule`
--
ALTER TABLE `tbl_admissiontestschedule`
  MODIFY `admID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_cases`
--
ALTER TABLE `tbl_cases`
  MODIFY `caseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_counselinghistory`
--
ALTER TABLE `tbl_counselinghistory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tbl_counselings`
--
ALTER TABLE `tbl_counselings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tbl_counselingservices`
--
ALTER TABLE `tbl_counselingservices`
  MODIFY `serviceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_counselors`
--
ALTER TABLE `tbl_counselors`
  MODIFY `counselorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_proctors`
--
ALTER TABLE `tbl_proctors`
  MODIFY `proctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_proctorschedule`
--
ALTER TABLE `tbl_proctorschedule`
  MODIFY `proctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sanctions`
--
ALTER TABLE `tbl_sanctions`
  MODIFY `sanctionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_sanctionservices`
--
ALTER TABLE `tbl_sanctionservices`
  MODIFY `sanctionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
