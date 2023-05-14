-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 02:10 PM
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

--
-- Dumping data for table `tbl_activitylog`
--

INSERT INTO `tbl_activitylog` (`activityID`, `admName`, `admFile`, `activityActionBefore`, `activityActionAfter`, `activityReason`, `activityDetails`, `date`) VALUES
(936, 'Waldo', '', 'Proctor Name: Walter, James A.', 'Waldo Added Walter, James A. as proctor.', '', '', '2023-05-03 11:14:54'),
(937, 'Waldo', '', '', 'Waldo Added 2023-05-31 for Admission Test Schedule', '', 'Added 2023-05-31 for Admission Test Schedule', '2023-05-03 11:15:18'),
(938, 'Waldo', '', '', '\r\nProctor Name: Walter, James A.\r\nRoom Assigned: CL2\r\nStart Time: 13:00\r\nEnd Time: 15:00\r\nDate: May 31, 2023\r\n			', '', 'Added Schedule for Walter, James A..', '2023-05-03 11:15:38'),
(939, 'Waldo', '', 'Status: \r\nStudent Number: \r\nStudent Name: \r\nCourse: \r\nAddress: \r\nEmail: \r\nPhone: ', 'Status: Regular\r\nStudent Number: 20191542-M\r\nStudent Name: Aquino, Christine Joy Gomez\r\nCourse: BSIS 4-A\r\nAddress: 1161 RD.3 Tambakan St. Maypajo Caloocan City\r\nEmail: achristinejoy126@gmail.com\r\nPhone: 12121212121212121', '', 'Edited Enrolled Student Details successfully', '2023-05-03 15:47:54'),
(940, 'Waldo', '', 'Status: \r\nStudent Number: \r\nStudent Name: \r\nCourse: \r\nAddress: \r\nEmail: \r\nPhone: ', 'Status: Irregular\r\nStudent Number: 20191542-M\r\nStudent Name: Aquino, Christine Joy Gomez\r\nCourse: BSIS 4-A\r\nAddress: 1161 RD.3 Tambakan St. Maypajo Caloocan City\r\nEmail: achristinejoy126@gmail.com\r\nPhone: 1234567890', '', 'Edited Enrolled Student Details successfully', '2023-05-03 15:48:06'),
(941, 'Waldo', '', '', '\r\nProctor Name: Walter, James A.\r\nRoom Assigned: CL2\r\nStart Time: 10:00\r\nEnd Time: 13:00\r\nDate: May 31, 2023\r\n			', '', 'Added Schedule for Walter, James A..', '2023-05-03 16:44:45'),
(942, 'Waldo', '', '', 'Waldo Marked Walter, James A. Schedule as Completed', '', 'Deleted Walter, James A. Schedule.', '2023-05-03 17:35:30'),
(943, 'Waldo', '', '', 'Waldo Marked Walter, James A. Schedule as Completed', '', 'Deleted Walter, James A. Schedule.', '2023-05-03 17:36:50'),
(944, 'Waldo', '', '', '\r\nCounselor Name: Ni&ntilde;o Barzaga\r\n        ', '', 'Added Counselor Successfully.', '2023-05-03 18:02:35'),
(945, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Orientation and Information Service\r\n        ', '', 'Approved Reyes, Romulado M. Appointment successfully.', '2023-05-04 18:16:52'),
(946, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nReason for Declining: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.\r\n        ', '', 'Declined Reyes, Romulado M. successfully.', '2023-05-04 18:17:05'),
(947, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Placement and follow-up\r\n        ', '', 'Approved Reyes, Romulado M. Appointment successfully.', '2023-05-04 18:17:09'),
(948, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Counseling Service\r\n        ', '', 'Approved Reyes, Romulado M. Appointment successfully.', '2023-05-04 18:17:23'),
(949, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Admission Service\r\n        ', '', 'Approved Reyes, Romulado M. Appointment successfully.', '2023-05-04 18:17:27'),
(950, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Counseling Service\r\n        ', '', 'Approved Reyes, Romulado M. Appointment successfully.', '2023-05-04 18:17:31'),
(951, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Counseling Service\r\n        ', '', 'Approved Reyes, Romulado M. Appointment successfully.', '2023-05-04 18:17:34'),
(952, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Placement and follow-up\r\n        ', '', 'Approved Reyes, Romulado M. Appointment successfully.', '2023-05-04 18:17:45'),
(953, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Psychological Assessment\r\n        ', '', 'Approved Reyes, Romulado M. Appointment successfully.', '2023-05-04 18:17:50'),
(954, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Orientation and Information Service\r\nCounselor: Niño Barzaga\r\nStatus: Completed\r\n        ', '', 'Completed Reyes, Romulado M. Appointment.', '2023-05-04 18:18:01'),
(955, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Counseling Service\r\nCounselor: Vic Sotto\r\nStatus: Completed\r\n        ', '', 'Completed Reyes, Romulado M. Appointment.', '2023-05-04 18:18:07'),
(956, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Counseling Service\r\nCounselor: Niño Barzaga\r\nStatus: Completed\r\n        ', '', 'Completed Reyes, Romulado M. Appointment.', '2023-05-04 18:18:10'),
(957, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Placement and follow-up\r\nCounselor: Vic Sotto\r\nStatus: Completed\r\n        ', '', 'Completed Reyes, Romulado M. Appointment.', '2023-05-04 18:18:13'),
(958, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Admission Service\r\nCounselor: Vic Sotto\r\nStatus: Completed\r\n        ', '', 'Completed Reyes, Romulado M. Appointment.', '2023-05-04 18:18:16'),
(959, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Counseling Service\r\nCounselor: Niño Barzaga\r\nStatus: Completed\r\n        ', '', 'Completed Reyes, Romulado M. Appointment.', '2023-05-04 18:18:23'),
(960, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Counseling Service\r\nCounselor: Vic Sotto\r\nStatus: Completed\r\n        ', '', 'Completed Reyes, Romulado M. Appointment.', '2023-05-04 18:18:26'),
(961, 'Waldo', '', '', '\r\nStudent Name: Reyes, Romulado M.\r\nCounseling Type: Placement and follow-up\r\nCounselor: Niño Barzaga\r\nStatus: Completed\r\n        ', '', 'Completed Reyes, Romulado M. Appointment.', '2023-05-04 18:18:29'),
(962, 'Waldo', '', '', '\r\nProctor Name: Walter, James A.\r\nRoom Assigned: CL1\r\nStart Time: 12:00\r\nEnd Time: 14:00\r\nDate: May 31, 2023\r\n			', '', 'Added Schedule for Walter, James A..', '2023-05-04 18:23:09'),
(963, 'Waldo', '', '', '\r\nProctor Name: Walter, James A.\r\nRoom Assigned: CL2\r\nStart Time: 11:00\r\nEnd Time: 14:00\r\nDate: May 31, 2023\r\n			', '', 'Added Schedule for Walter, James A..', '2023-05-04 18:23:20'),
(964, 'Waldo', '', '', '\r\nProctor Name: Walter, James A.\r\nRoom Assigned: CL3\r\nStart Time: 11:00\r\nEnd Time: 14:00\r\nDate: May 31, 2023\r\n			', '', 'Added Schedule for Walter, James A..', '2023-05-04 18:24:11'),
(965, 'Waldo', '', '', '\r\nProctor Name: Walter, James A.\r\nRoom Assigned: LR1\r\nStart Time: 12:00\r\nEnd Time: 14:00\r\nDate: May 31, 2023\r\n			', '', 'Added Schedule for Walter, James A..', '2023-05-04 18:25:39'),
(966, 'Waldo', '', '', '\r\nProctor Name: Walter, James A.\r\nRoom Assigned: LR1\r\nStart Time: 11:00\r\nEnd Time: 14:00\r\nDate: May 31, 2023\r\n			', '', 'Added Schedule for Walter, James A..', '2023-05-04 18:27:16'),
(967, 'Waldo', '', '', '\r\nProctor Name: Walter, James A.\r\nRoom Assigned: CL1\r\nStart Time: 10:00\r\nEnd Time: 13:00\r\nDate: 2023-05-31\r\n			', '', 'Edited Walter, James A. Schedule.', '2023-05-04 18:27:29'),
(968, 'Waldo', '', '', 'Waldo Scheduled Reyes, Romulado M. for counseling', '', 'Scheduled Reyes, Romulado M. for counseling.', '2023-05-11 12:59:55'),
(969, 'Waldo', '', '', 'Waldo Scheduled Reyes, Romulado M. for counseling', '', 'Scheduled Reyes, Romulado M. for counseling.', '2023-05-11 13:00:35'),
(970, 'Waldo', '', '', 'Waldo Sanctioned Reyes, Romulado M.', '', 'Sanctioned Reyes, Romulado M..', '2023-05-11 13:15:13'),
(971, 'Waldo', '', 'Waldo approved Baui, Joel R. account successfully.', '', '', 'Approved Student Account Successfully.', '2023-05-13 14:06:10'),
(972, 'Waldo', '', 'Waldo approved Conde, Tristan Deo M. account successfully.', '', '', 'Approved Student Account Successfully.', '2023-05-13 14:06:18'),
(973, 'Waldo', '', 'Waldo approved Paragas, Jaren B. account successfully.', '', '', 'Approved Student Account Successfully.', '2023-05-13 14:06:54'),
(974, 'Waldo', '', 'Waldo approved Yambao, Ryan Jacob C. account successfully.', '', '', 'Approved Student Account Successfully.', '2023-05-13 14:07:03'),
(975, 'Waldo', '', 'Waldo approved Lloyd Kenn Biscaro account successfully.', '', '', 'Approved Student Account Successfully.', '2023-05-13 14:07:11'),
(976, 'Waldo', '', '', 'Waldo Sanctioned Reyes, Romulado M.', '', 'Sanctioned Reyes, Romulado M..', '2023-05-13 19:48:29'),
(977, 'Waldo', '', '', 'Waldo Sanctioned Reyes, Romulado M.', '', 'Sanctioned Reyes, Romulado M..', '2023-05-13 21:53:18'),
(978, 'Waldo', '', '', 'Waldo Sanctioned Reyes, Romulado M.', '', 'Sanctioned Reyes, Romulado M..', '2023-05-14 11:29:47'),
(979, 'Waldo', '', '', 'Waldo Sanctioned Reyes, Romulado M.', '', 'Sanctioned Reyes, Romulado M..', '2023-05-14 11:29:59'),
(980, 'Waldo', '', '', '\r\nSanction Name: One (1) week Suspension and 6 hours of community servsice\r\n        ', '', 'Added Sanction Successfully.', '2023-05-14 12:47:56'),
(981, 'Waldo', '', '', '\r\nSanction Name: One (1) week Suspension and 6 hours of community service\r\n        ', '', 'Added Sanction Successfully.', '2023-05-14 12:48:02'),
(982, 'Waldo', '', '', '\r\nSanction Name: Two (1) week Suspension\r\n        ', '', 'Added Sanction Successfully.', '2023-05-14 12:48:12'),
(983, 'Waldo', '', '', '\r\nSanction Name: One (1) week Suspension and 6 hours of community service\r\n        ', '', 'Added Sanction Successfully.', '2023-05-14 12:48:18'),
(984, 'Waldo', '', '', '\r\nSanction Name: Dismissal\r\n        ', '', 'Added Sanction Successfully.', '2023-05-14 12:48:26');

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
(15, '2023-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cases`
--

CREATE TABLE `tbl_cases` (
  `caseID` int(11) NOT NULL,
  `caseName` varchar(255) NOT NULL,
  `caseDescription` mediumtext NOT NULL,
  `caseUniqueID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cases`
--

INSERT INTO `tbl_cases` (`caseID`, `caseName`, `caseDescription`, `caseUniqueID`) VALUES
(1, 'Flag Ceremony Attendance', 'Students with first period classes every Monday morning are required to attend the Flag Ceremony as a legal and civic duty of every Filipino citizen. The University, after observing the rudiment of due process, shall impose the following penalty for this infraction and the above preceding prohibitions:\r\n\r\n1st Offense    ---    Warning\r\n2nd Offense   ---    Written reprimand\r\n3rd Offense    ---    One (1) day suspension and 12 hours of community service', 1),
(2, 'No ID, No Entry Policy', 'Every student must have the UCC ID that is every enrollment period, and shall wear it inside validated the room and school premises at all times. The University strictly observes NO ID, NO ENTRY Policy, in all Campuses. Hence, any violation thereof shall be meted with any of the following penalty:\r\n\r\n1st Offense    ---   Warning\r\n2nd Offense   ---   Written reprimand\r\n3rd Offense    ---   One (1) week suspension and 6 hours of community service\r\n\r\nThe community service means office, maintenance and other community services as prescribed by the Office of Legal and Student Affairs.', 2),
(3, 'Immoral and Obscene Conduct', 'Students shall be respectful, obedient, and well-disciplined at all times. They should refrain from using or publishing vulgar language, committing indecent acts and improper conduct that may cause disturbance to other students, faculty members, staffs and officials of the University, be it actual or in cyber space (text message, images, video in the internet). Otherwise, administrative disciplinary case shall be instituted against them with a penalty of reprimand, suspension or discipline, after appropriate notice and hearing conducted by the Committee on Discipline.', 3),
(4, 'Loitering, Littering and Commiting Unsanitary Acts', 'Students shall not be allowed to loiter or commit littering, unhygienic and unsanitary acts or conduct in the campuses/premises. The University, after observing due process, shall impose the following penalty for violation thereof:\r\n\r\n1st Offense   ---   Warning\r\n2nd Offense  ---   Written reprimand\r\n3rd Offense   ---   One (1) week Suspension', 4),
(5, 'Libelous, Subversive and Defamatory Acts', 'Students shall not write, draw nor engrave libelous, defamatory, subversive words or figures in blackboards, walls, or any place in the campus premises. The University, after observing due process, shall impose the following penalty for violation thereof:\r\n\r\n1st Offense    ---   One (1) Week Suspension\r\n2nd offense    ---   Two (2) Weeks Suspension\r\n3rd Offense    ---   Dismissal', 5),
(6, 'Theft and Damage of University properties', 'Students shall not steal nor cause damage to any property of the University. Otherwise, they shall be meted with the penalty of suspension or dismissal depending on the gravity of the damage caused to the University properties.', 6),
(7, 'Morally and Offensive and Defematory Materials', 'Students shall not bring in the campus objects, pictures or literature in any form which is morally qoffensive or defamatory materials, nor any objects or implements that are potentially dangerous to life or limb. The University, after observing due process, shall impose the following penalty for violation thereof:\r\n\r\n1st Offense   ---   Written reprimand\r\n2nd Offense  ---   One (1) week Suspension\r\n3rd Offense   ---   Dismissal', 7),
(8, 'Alcohol, Smoking, and Drugs', 'Students shall not smoke in the premises and bring or take any alcoholic beverages and prohibited drugs. The University, after observing due process, shall impose the following penalty for violation thereof:\r\n\r\n1st Offense     ---   Suspension for one week\r\n2nd Offense    ---   Dismissal\r\n\r\nThe same penalties will be imposed to students coming or entering the University premises under the influence of liquor or drugs. The University shall implement automatic dismissal against any student who shall be caught possessing and/ or using illegal/prohibited drugs.', 8),
(9, 'Habitual Disobedience to Policies, Rules and Regulations', 'Students shall be punctual in enrolling, securing permit, taking exam, attending classes, complying with school requirement and complying with appropriate punishment, sanctions and penalties. The University, after observing due process, impose the penalty of warning, reprimand shall or suspension against those found guilty of habitual disobedience or disregard of the University policies, rules and regulations, subject to the application of three-strike rule.', 9);

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

--
-- Dumping data for table `tbl_counselinghistory`
--

INSERT INTO `tbl_counselinghistory` (`ID`, `counselingType`, `requesterName`, `studentNumber`, `studentCourse`, `studentEmail`, `counselingDetails`, `counselingSchedule`, `counselingStatus`, `counselor`, `counselorRemarks`, `dateCompleted`) VALUES
(106, 'Psychological Assessment', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '106', 'May 25, 2023 12:00 PM (Thursday)', 'Completed', 'Joey De Leon', 'adssaddsa', '2023-01-01 18:37:58'),
(107, 'Counseling Service', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '107', 'May 17, 2023 01:00 PM (Wednesday)', 'Completed', 'Vic Sotto', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.', '2023-02-04 18:18:07'),
(108, 'Orientation and Information Service', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '108', 'May 4, 2023 12:00 PM (Thursday)', 'Completed', 'Niño Barzaga', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.', '2023-03-04 18:18:01'),
(109, 'Counseling Service', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '109', 'May 4, 2023 08:00 AM (Thursday)', 'Completed', 'Niño Barzaga', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.', '2023-04-04 18:18:10'),
(110, 'Counseling Service', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '110', 'May 4, 2023 09:00 AM (Thursday)', 'Completed', 'Niño Barzaga', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.', '2023-04-04 18:18:23'),
(111, 'Counseling Service', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '111', 'May 4, 2023 10:00 AM (Thursday)', 'Completed', 'Vic Sotto', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.', '2023-04-04 18:18:26'),
(112, 'Admission Service', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '112', 'May 4, 2023 11:00 AM (Thursday)', 'Completed', 'Vic Sotto', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.', '2023-04-04 18:18:16'),
(114, 'Placement and follow-up', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '114', 'May 4, 2023 02:00 PM (Thursday)', 'Completed', 'Niño Barzaga', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.', '2023-05-04 18:18:29'),
(118, 'Placement and follow-up', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '118', 'May 5, 2023 04:00 PM (Friday)', 'Completed', 'Vic Sotto', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.', '2023-05-04 18:18:13');

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

--
-- Dumping data for table `tbl_counselings`
--

INSERT INTO `tbl_counselings` (`ID`, `counselingType`, `requesterName`, `studentNumber`, `studentCourse`, `studentEmail`, `counselingDetails`, `counselingSchedule`, `counselingStatus`) VALUES
(113, 'Psychological Assessment', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.', '2023-05-04 13:00:00', 'Declined'),
(115, 'Psychological Assessment', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.', '2023-05-05 12:00:00', 'Pending'),
(116, 'Psychological Assessment', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.', '2023-05-12 12:00:00', 'Pending'),
(117, 'Psychological Assessment', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada, nisl vel gravida dignissim, nunc est ultricies diam, quis lobortis purus nisi tincidunt neque. Vestibulum risus quam, efficitur id quam nec, vehicula finibus diam. Curabitur odio velit, mollis sit amet dignissim quis, volutpat condimentum nulla. Sed bibendum fringilla mi sed volutpat. Ut eu tempor ex. Nulla vel nibh a lorem lobortis semper in sed dui. Vestibulum condimentum nunc vestibulum nunc accumsan, id placerat ligula laoreet. Integer dapibus tellus at risus euismod laoreet. Proin laoreet euismod vehicula. Sed vel aliquam orci.', '2023-05-06 12:00:00', 'Approved'),
(119, 'Psychological Assessment', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'testing123', '2023-05-11 12:00:00', 'Pending'),
(122, 'Psychological Assessment', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'testing123', '2023-05-20 12:00:00', 'Approved'),
(123, 'Placement and follow-up', 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'testing123asda', '2023-05-19 12:00:00', 'Approved');

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
(4, 'Vic Sotto'),
(6, 'Ni&ntilde;o Barzaga');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proctors`
--

CREATE TABLE `tbl_proctors` (
  `proctorID` int(11) NOT NULL,
  `proctorName` varchar(255) NOT NULL,
  `completedSchedules` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_proctors`
--

INSERT INTO `tbl_proctors` (`proctorID`, `proctorName`, `completedSchedules`) VALUES
(9, 'Walter, James A.', 1);

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
  `examDate` varchar(255) NOT NULL,
  `scheduleStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_proctorschedule`
--

INSERT INTO `tbl_proctorschedule` (`proctorID`, `proctorName`, `roomAssigned`, `startTime`, `endTime`, `examDate`, `scheduleStatus`) VALUES
(42, 'Walter, James A.', 'CL2', '13:00', '15:00', 'May 31, 2023', 'Completed'),
(43, 'Walter, James A.', 'CL2', '10:00', '13:00', 'May 31, 2023', 'Pending'),
(44, 'Walter, James A.', 'CL1', '12:00', '14:00', 'May 31, 2023', 'Pending'),
(45, 'Walter, James A.', 'CL2', '11:00', '14:00', 'May 31, 2023', 'Pending'),
(48, 'Walter, James A.', 'CL1', '10:00', '13:00', '2023-05-31', 'Pending');

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
-- Table structure for table `tbl_sanctioncounter`
--

CREATE TABLE `tbl_sanctioncounter` (
  `ID` int(11) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `caseDetails` mediumtext NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanctioncounter`
--

INSERT INTO `tbl_sanctioncounter` (`ID`, `studentNumber`, `caseDetails`, `count`) VALUES
(3, '20190084-M', 'Flag Ceremony Attendance', 1);

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
  `degree` varchar(45) NOT NULL,
  `sanctionStatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanctions`
--

INSERT INTO `tbl_sanctions` (`sanctionID`, `studentName`, `studentNumber`, `studentCourse`, `studentEmail`, `sanctionCase`, `sanctionType`, `sanctionMessage`, `dateIssued`, `degree`, `sanctionStatus`) VALUES
(37, 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Flag Ceremony Attendance', 'Dismissal', 'asasasa', '2023-05-13 19:48:26', 'Mild', 'Active'),
(38, 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Flag Ceremony Attendance', 'Warning', 'erer', '2023-05-13 21:53:15', 'Mild', 'Active'),
(39, 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Flag Ceremony Attendance', 'Warning', 'testing', '2023-05-14 11:24:40', 'Mild', 'Active'),
(40, 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Flag Ceremony Attendance', 'Warning', 'testing', '2023-05-14 11:26:59', 'Mild', 'Active'),
(41, 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Flag Ceremony Attendance', 'Warning', 'testing', '2023-05-14 11:28:32', 'Mild', 'Active'),
(42, 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Flag Ceremony Attendance', 'Warning', 'testing', '2023-05-14 11:29:44', 'Mild', 'Active'),
(43, 'Reyes, Romulado M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Flag Ceremony Attendance', 'Written reprimand', 'fsdsdfs', '2023-05-14 11:29:57', 'Mild', 'Active');

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
(13, 'Two (2) weeks Suspension'),
(14, 'One (1) week Suspension and 6 hours of community service'),
(16, 'Dismissal');

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
  `studentPassword` varchar(255) NOT NULL,
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
(174, 'admin', 'Waldo', 'admin', 'adminwaldo@admin.com', '0192023a7bbd73250516f069df18b500', '', '2023-04-25 12:28:59.199899', 'yes', 'admin', 1, 'RF-Yambao.jpg', 'Screenshot 2023-02-08 131652.jpg', ''),
(176, '20190084-M', 'Reyes, Romulado M.', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '7cda131528089c476d4b041013460ec8', '', '2023-04-26 20:47:49.005692', 'yes', 'user', 1, 'RF-Reyes.jpg', 'Screenshot 2023-02-08 131652.jpg', ''),
(186, '20191185-M', 'Baui, Joel R.', 'BSIS 4-A', 'joelbauiigop@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1', '', '2023-05-13 06:01:43.319969', 'yes', 'user', 1, 'RF-Yambao.jpg', 'Screenshot 2023-02-08 131652.jpg', ''),
(187, '20190607-M', 'Conde, Tristan Deo M.', 'BSIS 4-A', 'mahniggaboitristan@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1', '', '2023-05-13 06:02:53.085709', 'yes', 'user', 1, 'RF-Conde.jpg', '330906103_527385246052063_9031424975735442718_n.jpg', ''),
(188, '20191220-M', 'Paragas, Jaren B.', 'BSIS 4-A', 'jarenkanekiidolo@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1', '', '2023-05-13 06:03:34.074187', 'yes', 'user', 1, 'RF-Conde.jpg', '330906103_527385246052063_9031424975735442718_n.jpg', ''),
(189, '20190473-M', 'Yambao, Ryan Jacob C.', 'bsis 4-a', 'kingjacobbadger@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1', '', '2023-05-13 06:04:29.274616', 'yes', 'user', 1, 'RF-Reyes.jpg', 'Screenshot 2023-02-08 131652.jpg', ''),
(190, '20190369-M', 'Lloyd Kenn Biscaro', 'BSIS 4-a', 'lloydkentot@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1', '', '2023-05-13 06:05:39.278114', 'yes', 'user', 1, 'RF-Conde.jpg', '330906103_527385246052063_9031424975735442718_n.jpg', '');

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
(751, '20191542-M', 'Aquino, Christine Joy Gomez', 'BSIS 4-A', '1161 RD.3 Tambakan St. Maypajo Caloocan City', 'achristinejoy126@gmail.com', '1234567890', 'Dropped'),
(752, '20191390-M', 'Atienza, Nico Timbal', 'BSIS 4-A', '74 Bagong Sikat St Brgy 132 Bagong Barrio Caloocan City', 'nicoatienza28@gmail.com', '(+63) 9664963353', 'Regular'),
(753, '20191568-M', 'Azuela, Ramil Garay', 'BSIS 4-A', 'Blk 2 Brgy 160 221 Libis Baesa Caloocan City', 'rhams.garay@gmail.com', '(+63) 9614209324', 'Regular'),
(754, '20190048-M', 'Baldos, Felma Verterra', 'BSIS 4-A', 'F. Aguilar St. Bagong Barrio Caloocan City', 'felmabaldos23@gmail.com', '(+63) 9364064035', 'Regular'),
(755, '20191185-M', 'Baui, Joel Rosales', 'BSIS 4-A', '136 P.Sevilla St. 5th Avenue Caloocan City', 'joelbaui12@gmail.com', '(+63) 9274177463', 'Regular'),
(756, '20191403-M', 'Bendillo, Gilbert Duapa', 'BSIS 4-A', '42-A Katarungan St. Bagong Barrio Caloocan City', 'gilbertbendillo@gmail.com', '(+63) 9308533995', 'Regular'),
(757, '20190369-M', 'Biscaro, Lloyd Kenn Tutor', 'BSIS 4-A', '342 Cordero St 10th Ave Caloocan City', 'lloydkenn.biscaro@gmail.com', '(+63) 9479783856', 'Regular'),
(758, '20190607-M', 'Conde, Tristan Deo Mabao', 'BSIS 4-A', 'Phase 3 Gozon Complex Letre Road Baranggay Tonsuya Malabon City', 'tristandeo100100@gmail.com', '(+63) 9108973760', 'Regular'),
(759, '20190437-M', 'Cruz, Nheza Abella', 'BSIS 4-A', '608 Int2 7th Avenue Brgy 105 Caloocan City', 'cruznheza2@gmail.com', '(+63) 9612393456', 'Regular'),
(760, '20191637-M', 'Dela Cruz, Acel Juercie', 'BSIS 4-A', '344 Tullahan Road Sta. Quiteria Caloocan City', 'delacruzacel833@gmail.com', '(+63) 9954297526', 'Regular'),
(761, '20191360-M', 'Delos Reyes, Matthew Jamir', 'BSIS 4-A', '134 Libis Talisay St. Caloocan City', 'mjamirdelosreyes.12@gmail.com', '(+63) 9166277030', 'Regular'),
(762, '20191609-M', 'Enriquez, Melvin Medryck', 'BSIS 4-A', '249 Laon Laan St Maypajo Caloocan City', 'ateengaming@gmail.com', '(+63) 9054951806', 'Regular'),
(763, '20191356-M', 'Febres, Aira Y.', 'BSIS 4-A', 'Blk 54 #20 Sapsap St. Caloocan City', 'febresaira21@gmail.com', '(+63) 9394361197', 'Regular'),
(764, '20191794-M', 'Frigillana, John Rey G.', 'BSIS 4-A', '403 2nd St. 4th Avenue Caloocan City', 'johnreyfrigillana55@gmail.com', '(+63) 9953366370', 'Regular'),
(765, '20191260-M', 'Galang, Clinth Patrick L.', 'BSIS 4-A', 'Blk 5 lot 62 Tambakol St. Brgy 28 Dagat Dagatan Caloocan City', 'patrickgalang941@gmail.com', '(+63) 9636473241 ', 'Regular'),
(766, '20191257-M', 'Gonzales, John Paul Castillo', 'BSIS 4-A', '108 2nd St 1st Ave Grace Park Caloocan City', 'johnpaulgonzales122@gmail.com', '(+63) 9093673757', 'Regular'),
(767, '20190309-M', 'Jacalne, Christian Fanto', 'BSIS 4-A', '308 Maginoo St. Gen Tirona, Bagong Barrio Caloocan City', 'christianjacalne7@gmail.com', '(+63) 9052334101', 'Regular'),
(768, '20191523-M', 'Jacalne, James Andrei Reyes', 'BSIS 4-A', '#355 Cuadra Compound Sta. Quiteria Caloocan City', 'jamesandreijacalne@gmail.com', '(+63) 9753611363', 'Irregular'),
(769, '20191209-M', 'Lacombis, Katelyn Ubay', 'BSIS 4-A', 'Blk 12 L4 Salmon St. Dagat-dagatan Caloocan City', 'klacombis@gmail.com', '(+63) 9158929125', 'Regular'),
(770, '20191194-M', 'Mallari, Zairome Philip Noel', 'BSIS 4-A', '37 Bustamante St. Tinajeros Malabon City', 'zairome330@gmail.com', '(+63) 9197167229', 'Regular'),
(771, '20190223-M', 'Nacion, Shane Lynch', 'BSIS 4-A', '181 P. Zamora Street, Caloocan City', 'shanenacion11@gmail.com', '(+63) 9427938924', 'Regular'),
(772, '20191220-M', 'Paragas, Jaren Buenaventura', 'BSIS 4-A', '4411 NPC Road Bagbaguin, Caloocan City', 'jarenkaneki@gmail.com', '(+63) 9150793574', 'Regular'),
(773, '20191320-M', 'Posadas, Melvin Cortez', 'BSIS 4-A', '84 Kalayaan St. Bagong Barrio Caloocan City', 'melvinposadas02@gmail.com', '(+63) 9565220554', 'Regular'),
(774, '20191534-M', 'Quiambao, Ronald', 'BSIS 4-A', '43 Intr. Tirona Bagong Barrio Caloocan City', 'ronaldkiyambaw1999@gmail.com', '(+63) 9567925623', 'Regular'),
(775, '20190294-M', 'Remolado, Lamuel Bobby', 'BSIS 4-A', '#107 Agno St. 6th Avenue Caloocan City', 'bobbyremolado@gmail.com', '(+63) 9332784015', 'Regular'),
(776, '20190084-M', 'Reyes, Romualdo Montero', 'BSIS 4-A', '11-11th Ave B. Galino Caloocan City', 'waldoreyes2301@gmail.com', '(+63) 9991818210', 'Regular'),
(777, '20190629-M', 'Sadugan, Arnel Guias', 'BSIS 4-A', '#68 Francisco St. Barangay 75 Caloocan City', 'arnelsads@gmail.com', '(+63)9616048344', 'Regular'),
(778, '20191560-M', 'Tolentino, Arvin Chester ', 'BSIS 4-A', '42 Nirvana St. Tugatog Malabon City', 'chrono.breaker13@gmail.com', '(+63) 9777471940', 'Regular'),
(779, '20190113-M', 'Valles, Albert Lance Linaban', 'BSIS 4-A', '38 Sanroque St Bisig ng Kabataan Caloocan City', 'popoybasha589@gmail.com', '(+63) 9162902609', 'Regular'),
(780, '20190473-M', 'Yambao, Ryan Jacob ', 'BSIS 4-A', '15 Chico Road Potrero Malabon City', 'ryanjacobyambao@gmail.com', '(+63) 9565311106', 'Regular');

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
-- Indexes for table `tbl_sanctioncounter`
--
ALTER TABLE `tbl_sanctioncounter`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=985;

--
-- AUTO_INCREMENT for table `tbl_admissiontestrecords`
--
ALTER TABLE `tbl_admissiontestrecords`
  MODIFY `admID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_admissiontestschedule`
--
ALTER TABLE `tbl_admissiontestschedule`
  MODIFY `admID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_cases`
--
ALTER TABLE `tbl_cases`
  MODIFY `caseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_counselinghistory`
--
ALTER TABLE `tbl_counselinghistory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_counselings`
--
ALTER TABLE `tbl_counselings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tbl_counselingservices`
--
ALTER TABLE `tbl_counselingservices`
  MODIFY `serviceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_counselors`
--
ALTER TABLE `tbl_counselors`
  MODIFY `counselorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_proctors`
--
ALTER TABLE `tbl_proctors`
  MODIFY `proctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_proctorschedule`
--
ALTER TABLE `tbl_proctorschedule`
  MODIFY `proctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_sanctioncounter`
--
ALTER TABLE `tbl_sanctioncounter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sanctions`
--
ALTER TABLE `tbl_sanctions`
  MODIFY `sanctionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_sanctionservices`
--
ALTER TABLE `tbl_sanctionservices`
  MODIFY `sanctionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `tbl_studentsregistrar`
--
ALTER TABLE `tbl_studentsregistrar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=781;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
