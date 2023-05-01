-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 02:40 PM
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
  `admFile` varchar(255) NOT NULL,
  `activityActionBefore` mediumtext NOT NULL,
  `activityActionAfter` mediumtext NOT NULL,
  `activityReason` mediumtext NOT NULL,
  `activityDetails` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data for table `tbl_admissiontestrecords`
--

INSERT INTO `tbl_admissiontestrecords` (`admID`, `admYear`, `admFile`, `admSize`, `admDownloads`) VALUES
(28, 2020, '2020-ADMISSION-TEST.docx', 11915, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admissiontestschedule`
--

CREATE TABLE `tbl_admissiontestschedule` (
  `admID` int(11) NOT NULL,
  `admDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admissiontestschedule`
--

INSERT INTO `tbl_admissiontestschedule` (`admID`, `admDate`) VALUES
(11, '2023-03-09'),
(12, '2023-04-26'),
(14, '2023-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cases`
--

CREATE TABLE `tbl_cases` (
  `caseID` int(11) NOT NULL,
  `caseName` varchar(255) NOT NULL,
  `caseDescription` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cases`
--

INSERT INTO `tbl_cases` (`caseID`, `caseName`, `caseDescription`) VALUES
(9, 'Flag Ceremony Attendance', 'Students with first period classes every Monday morning are required to attend the Flag Ceremony as a legal and civic duty of every Filipino citizen. The University, after observing the rudiment of due process, shall impose the following penalty for this infraction and the above preceding prohibitions:\r\n\r\n1st Offense    ---    Warning\r\n2nd Offense   ---    Written reprimand\r\n3rd Offense    ---    One (1) day suspension and 12 hours of community service'),
(10, 'No ID, No Entry Policy', 'Every student must have the UCC ID that is every enrollment period, and shall wear it inside validated the room and school premises at all times. The University strictly observes NO ID, NO ENTRY Policy, in all Campuses. Hence, any violation thereof shall be meted with any of the following penalty:\r\n\r\n1st Offense    ---   Warning\r\n2nd Offense   ---   Written reprimand\r\n3rd Offense    ---   One (1) week suspension and 6 hours of community service\r\n\r\nThe community service means office, maintenance and other community services as prescribed by the Office of Legal and Student Affairs.'),
(11, 'Immoral and Obscene Conduct', 'Students shall be respectful, obedient, and well-disciplined at all times. They should refrain from using or publishing vulgar language, committing indecent acts and improper conduct that may cause disturbance to other students, faculty members, staffs and officials of the University, be it actual or in cyber space (text message, images, video in the internet). Otherwise, administrative disciplinary case shall be instituted against them with a penalty of reprimand, suspension or discipline, after appropriate notice and hearing conducted by the Committee on Discipline.'),
(12, 'Loitering, Littering and Commiting Unsanitary Acts', 'Students shall not be allowed to loiter or commit littering, unhygienic and unsanitary acts or conduct in the campuses/premises. The University, after observing due process, shall impose the following penalty for violation thereof:\r\n\r\n1st Offense   ---   Warning\r\n2nd Offense  ---   Written reprimand\r\n3rd Offense   ---   One (1) week Suspension'),
(13, 'Libelous, Subversive and Defamatory Acts', 'Students shall not write, draw nor engrave libelous, defamatory, subversive words or figures in blackboards, walls, or any place in the campus premises. The University, after observing due process, shall impose the following penalty for violation thereof:\r\n\r\n1st Offense    ---   One (1) Week Suspension\r\n2nd offense    ---   Two (2) Weeks Suspension\r\n3rd Offense    ---   Dismissal'),
(14, 'Theft and Damage of University properties', 'Students shall not steal nor cause damage to any property of the University. Otherwise, they shall be meted with the penalty of suspension or dismissal depending on the gravity of the damage caused to the University properties.'),
(15, 'Morally and Offensive and Defematory Materials', 'Students shall not bring in the campus objects, pictures or literature in any form which is morally qoffensive or defamatory materials, nor any objects or implements that are potentially dangerous to life or limb. The University, after observing due process, shall impose the following penalty for violation thereof:\r\n\r\n1st Offense   ---   Written reprimand\r\n2nd Offense  ---   One (1) week Suspension\r\n3rd Offense   ---   Dismissal'),
(16, 'Alcohol, Smoking, and Drugs', 'Students shall not smoke in the premises and bring or take any alcoholic beverages and prohibited drugs. The University, after observing due process, shall impose the following penalty for violation thereof:\r\n\r\n1st Offense     ---   Suspension for one week\r\n2nd Offense    ---   Dismissal\r\n\r\nThe same penalties will be imposed to students coming or entering the University premises under the influence of liquor or drugs. The University shall implement automatic dismissal against any student who shall be caught possessing and/ or using illegal/prohibited drugs.'),
(17, 'Habitual Disobedience to Policies, Rules and Regulations', 'Students shall be punctual in enrolling, securing permit, taking exam, attending classes, complying with school requirement and complying with appropriate punishment, sanctions and penalties. The University, after observing due process, impose the penalty of warning, reprimand shall or suspension against those found guilty of habitual disobedience or disregard of the University policies, rules and regulations, subject to the application of three-strike rule.');

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
  `counselorRemarks` mediumtext NOT NULL,
  `dateCompleted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `serviceName` varchar(45) NOT NULL,
  `serviceDetails` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_counselingservices`
--

INSERT INTO `tbl_counselingservices` (`serviceID`, `serviceName`, `serviceDetails`) VALUES
(2, 'Orientation and Information Service', 'Orientation and Information Service involves dissemination of pertinent and updated information about the University, including its courses, programs and policies.'),
(3, 'Counseling Service', 'Counseling Service is given to the students either individual or by group. Students may come voluntarily or be referred by faculty and other school official.'),
(4, 'Psychological Assessment', 'Psychological Assessment is given to measure, interpret and assess the students\' intelligence/mental ability and personality.'),
(5, 'Placement and follow-up', 'Placement and follow-up provides job assistance, endorsement and/or placement for students and graduates.'),
(7, 'Admission Service', 'Admission Service supports the Registrar in providing entrance examination to applicants.'),
(9, 'Enrichment Service', 'Enrichment Service provides seminars and workshops regarding personality and values development, behavior modification and gender sensitivity.');

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
(1, 'Alden Richards'),
(3, 'Joey De Leon'),
(4, 'Vic Sotto');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proctors`
--

CREATE TABLE `tbl_proctors` (
  `proctorID` int(11) NOT NULL,
  `proctorName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, 'LR1');

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
(9, 'Warning'),
(10, 'Written reprimand'),
(11, 'One (1) day Suspension and 12 hours of community service'),
(12, 'One (1) week Suspension'),
(13, 'One (1) week Suspension and 6 hours of community service'),
(14, 'Dismissal');

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
  `regSelfie` varchar(255) NOT NULL,
  `resetCode` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`ID`, `studentNumber`, `studentName`, `studentCourse`, `studentEmail`, `studentPassword`, `vkey`, `studentCreateDate`, `studentVerified`, `userType`, `userStatus`, `regForm`, `regSelfie`, `resetCode`) VALUES
(174, 'admin', 'Waldo', 'admin', 'adminwaldo@admin.com', '0192023a7bbd73250516f069df18b500', '', '2023-04-25 12:28:59.199899', 'yes', 'admin', 1, 'RF-Yambao.jpg', 'Screenshot 2023-02-08 131652.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studentsregistrar`
--

CREATE TABLE `tbl_studentsregistrar` (
  `ID` int(11) NOT NULL,
  `studentNumber` varchar(255) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `studentCourse` varchar(255) NOT NULL,
  `studentAddress` varchar(255) NOT NULL,
  `studentEmail` varchar(255) NOT NULL,
  `studentPhoneNumber` varchar(255) NOT NULL,
  `studentStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_studentsregistrar`
--

INSERT INTO `tbl_studentsregistrar` (`ID`, `studentNumber`, `studentName`, `studentCourse`, `studentAddress`, `studentEmail`, `studentPhoneNumber`, `studentStatus`) VALUES
(195, '20190001-M', 'Baui, Joel R.', 'BSIS 4-A', '18 L. Pascual St., Grace Park East, Caloocan City', 'joeligoprosalesbaui@gmail.com', '639374592831', 'Regular'),
(196, '20191356-M', 'Santos, Maria T.', 'BSIS 1-A', '23 G. De Jesus St., Barangay 187, Caloocan City', 'qwertyuiopz@testemail.com', '639554662039', 'Irregular'),
(197, '20200212-M', 'Reyes, Juan D.', 'BSIS 2-A', '45 4th Avenue, Barangay 12, Caloocan City', 'asdfghjklzx@testemail.com', '639978463760', 'Regular'),
(198, '20210235-M', 'Gonzales, Jose R.', 'BSIS 3-A', '88 D. Aquino St., Barangay 129, Caloocan City', '1234567890x@testemail.com', '639008991184', 'Irregular'),
(199, '20190219-M', 'Cruz, Ana L.', 'BSIS 4-A', '6 F. Sevilla St., Barangay 162, Caloocan City', 'myemailaddress@testemail.com', '639556183903', 'Regular'),
(200, '20231162-M', 'Dela Cruz, Paolo M.', 'BSIS 1-B', '13 C. Reyes St., Barangay 44, Caloocan City', 'ilovecodingx@testemail.com', '639139096167', 'Irregular'),
(201, '20223180-M', 'Tan, Maria C.', 'BSIS 2-B', '28 B. Serrano St., Barangay 164, Caloocan City', 'sampleusernamex@testemail.com', '639642266818', 'Regular'),
(202, '20193241-M', 'Lim, Jose R.', 'BSIS 3-B', '72 R. Pascual St., Barangay 43, Caloocan City', 'hello_worldx@testemail.com', '639944537503', 'Regular'),
(203, '20231145-M', 'Garcia, Ana V.', 'BSIS 1-A', '56 P. Aquino St., Barangay 174, Caloocan City', 'user_1234x@testemail.com', '639046644992', 'Irregular'),
(204, '20231197-M', 'Martinez, Miguel A.', 'BSIS 2-A', '90 D. Garcia St., Barangay 175, Caloocan City', 'happybirthdayx@testemail.com', '639184071120', 'Regular'),
(205, '20191018-M', 'Fernandez, Cristina P.', 'BSIS 1-A', '16 J. Santos St., Barangay 172, Caloocan City', 'randomstringx@testemail.com', '639487982925', 'Irregular'),
(206, '20193102-M', 'Aguilar, Rafael S.', 'BSIS 2-A', '19 A. Garcia St., Barangay 178, Caloocan City', 'myemailaddresstest@testemail.com', '639086620101', 'Regular'),
(207, '20201213-M', 'Pascual, Andrea M.', 'BSIS 3-A', '32 M. Rodriguez St., Barangay 183, Caloocan City', '1234567890test@testemail.com', '639579902343', 'Irregular'),
(208, '20222127-M', 'Reyes, John P.', 'BSIS 4-A', '67 N. Reyes St., Barangay 175, Caloocan City', 'ilovecodingtest@testemail.com', '639128741383', 'Regular'),
(209, '20193245-M', 'Cruz, Melissa G.', 'BSIS 1-B', '41 B. Rodriguez St., Barangay 35, Caloocan City', 'sampleusernametest@testemail.com', '639881835809', 'Regular'),
(210, '20192105-M', 'Garcia, Michael V.', 'BSIS 2-B', '11 P. Santos St., Barangay 45, Caloocan City', 'hello_worldtest@testemail.com', '639394772315', 'Irregular'),
(211, '20190247-M', 'Cruz, Ana P.', 'BSIS 3-B', '83 L. Garcia St., Barangay 182, Caloocan City', 'user_1234test@testemail.com', '639156097614', 'Regular'),
(212, '20222351-M', 'Sison, Rafael R.', 'BSIS 1-A', '58 S. Reyes St., Barangay 175, Caloocan City', 'happybirthdaytest@testemail.com', '639312801899', 'Irregular'),
(213, '20192249-M', 'Ramos, Maria S.', 'BSIS 2-A', '29 F. Santos St., Barangay 39, Caloocan City', 'randomstringtest@testemail.com', '639864163741', 'Regular'),
(214, '20192329-M', 'Santiago, Renato A.', 'BSIS 1-A', '76 E. Rodriguez St., Barangay 180, Caloocan City', 'qwertyuiopztest@testemail.com', '639731942023', 'Irregular'),
(215, '20193223-M', 'borath', 'sdasadsadasd', 'asdadsasddasads', 'asdasddasads@sdaas.com', '2323442324342', 'Regular');

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
-- Indexes for table `tbl_studentsregistrar`
--
ALTER TABLE `tbl_studentsregistrar`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activitylog`
--
ALTER TABLE `tbl_activitylog`
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=371;

--
-- AUTO_INCREMENT for table `tbl_admissiontestrecords`
--
ALTER TABLE `tbl_admissiontestrecords`
  MODIFY `admID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_admissiontestschedule`
--
ALTER TABLE `tbl_admissiontestschedule`
  MODIFY `admID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_cases`
--
ALTER TABLE `tbl_cases`
  MODIFY `caseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_counselinghistory`
--
ALTER TABLE `tbl_counselinghistory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_counselings`
--
ALTER TABLE `tbl_counselings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tbl_counselingservices`
--
ALTER TABLE `tbl_counselingservices`
  MODIFY `serviceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_counselors`
--
ALTER TABLE `tbl_counselors`
  MODIFY `counselorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_proctors`
--
ALTER TABLE `tbl_proctors`
  MODIFY `proctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_proctorschedule`
--
ALTER TABLE `tbl_proctorschedule`
  MODIFY `proctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_sanctions`
--
ALTER TABLE `tbl_sanctions`
  MODIFY `sanctionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_sanctionservices`
--
ALTER TABLE `tbl_sanctionservices`
  MODIFY `sanctionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `tbl_studentsregistrar`
--
ALTER TABLE `tbl_studentsregistrar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
