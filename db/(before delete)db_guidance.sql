-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 04:06 PM
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
(4, 'Romualdo Reyes', 'ADDED 2021-ADMISSION-TEST.docx', '2022-12-21 12:24:23'),
(5, 'Romualdo Reyes', 'ADDED 2022-ADMISSION-TEST.docx', '2022-12-21 12:24:30'),
(29, 'Romualdo Reyes', 'UPDATED ACCOUNT PASSWORD', '2022-12-21 14:11:38'),
(53, 'Romualdo Reyes', 'ADDED ADMINISTRATOR [ Details: Administrator Wally ]', '2022-12-21 14:15:29'),
(64, 'Romualdo Reyes', 'UPDATED ACCOUNT DETAILS', '2022-12-22 08:54:20'),
(86, 'Romualdo Reyes', 'UPDATED ACCOUNT PASSWORD', '2022-12-22 10:42:28'),
(87, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: Reyes, Romualdo M. ]', '2022-12-22 10:44:03'),
(88, 'Romualdo Reyes', 'ADDED EXAMINTAION SCHEDULE', '2022-12-22 10:44:43'),
(89, 'Romualdo Reyes', 'ADDED PROCTOR SCHEDULE [ Details: Ryan Jacob Contridas Yambao- 2023-01-06 ]', '2022-12-22 10:45:08'),
(90, 'Romualdo Reyes', 'ADDED PROCTOR SCHEDULE [ Details: Ryan Jacob Contridas Yambao- 2023-01-09 ]', '2022-12-22 10:45:46'),
(91, 'Romualdo Reyes', 'ADDED PROCTOR SCHEDULE [ Details: Ryan Jacob Contridas Yambao- 2022-12-28 ]', '2022-12-22 10:48:02'),
(92, 'Romualdo Reyes', 'APPROVED APPOINTMENT [ Details: Reyes, Romualdo M.- 2022-12-23 12:00 ]', '2022-12-22 11:07:14'),
(93, 'Romualdo Reyes', 'APPROVED APPOINTMENT [ Details: Reyes, Romualdo M.- 2022-12-28 12:00 ]', '2022-12-22 11:09:35'),
(94, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: Reyes, Romualdo M. ]', '2022-12-22 11:28:58'),
(95, 'Romualdo Reyes', 'COUNSELED STUDENT [ Details: Reyes, Romualdo M. ]', '2022-12-22 11:38:22'),
(96, 'Romualdo Reyes', 'DELETED SCHEDULED COUNSELING [ Details: Reyes, Romualdo M.- 12/25/2022 12:00 PM ]', '2022-12-22 11:38:38'),
(97, 'Romualdo Reyes', 'UPDATED ACCOUNT DETAILS', '2022-12-22 11:42:17'),
(98, 'Romualdo Reyes', 'UPDATED ACCOUNT PASSWORD', '2022-12-22 11:42:25'),
(99, 'Romualdo Reyes', 'ADDED ADMINISTRATOR [ Details: Administrator 2 ]', '2022-12-22 11:43:32'),
(100, 'Romualdo Reyes', 'MARKED AS INACTIVE STUDENT[ Details: Rechagre, Alden R. ]', '2023-01-12 16:38:20'),
(101, 'Romualdo Reyes', 'MARKED AS ACTIVE STUDENT [ Details: Rechagre, Alden R. ]', '2023-01-12 16:38:40'),
(102, 'Romualdo Reyes', 'ADDED STUDENT [ Details: weq ]', '2023-01-12 18:43:28'),
(103, 'Romualdo Reyes', 'ADDED STUDENT [ Details: rfte ]', '2023-01-12 18:43:31'),
(104, 'Romualdo Reyes', 'ADDED STUDENT [ Details: ghj ]', '2023-01-12 18:43:37'),
(105, 'Romualdo Reyes', 'ADDED STUDENT [ Details: sedredf ]', '2023-01-12 18:43:40'),
(106, 'Romualdo Reyes', 'ADDED STUDENT [ Details: dxfvvdxf ]', '2023-01-12 18:43:43'),
(107, 'Romualdo Reyes', 'ADDED STUDENT [ Details: vxf ]', '2023-01-12 18:43:46'),
(108, 'Romualdo Reyes', 'ADDED STUDENT [ Details: gvdf ]', '2023-01-12 18:43:49'),
(109, 'Romualdo Reyes', 'ADDED STUDENT [ Details: hjdgsdfgv ]', '2023-01-12 18:43:53'),
(110, 'Romualdo Reyes', 'ADDED STUDENT [ Details: vgsrsgv ]', '2023-01-12 18:43:57'),
(111, 'Romualdo Reyes', 'ADDED STUDENT [ Details: sdgfsdg ]', '2023-01-12 18:44:01'),
(112, 'Romualdo Reyes', 'ADDED STUDENT [ Details: gerg ]', '2023-01-12 18:44:04'),
(113, 'Romualdo Reyes', 'ADDED STUDENT [ Details: sgvevsevrse ]', '2023-01-12 18:44:09'),
(114, 'Romualdo Reyes', 'ADDED STUDENT [ Details: sgresgversgver ]', '2023-01-12 18:44:13'),
(115, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: test ]', '2023-01-18 11:55:56'),
(116, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: Be, Jin F. ]', '2023-01-18 12:17:26'),
(117, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: Be, Jin F. ]', '2023-01-18 12:22:11'),
(118, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: testuser ]', '2023-01-18 12:26:50'),
(119, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: testuser ]', '2023-01-18 12:36:09'),
(120, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: testuser ]', '2023-01-18 12:37:38'),
(121, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: testuser ]', '2023-01-18 12:52:06'),
(122, 'Romualdo Reyes', 'DECLINED STUDENT ACCOUNT REQUEST [ Details: vxqtnrycwrbh@triots.com ]', '2023-01-18 19:02:09'),
(123, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: testuser ]', '2023-01-18 19:12:04'),
(124, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: testuser ]', '2023-01-18 19:12:59'),
(125, 'Romualdo Reyes', 'ADDED STUDENT [ Details: te ]', '2023-02-01 11:54:18'),
(126, 'Romualdo Reyes', 'EDITED STUDENT [ Details: te ]', '2023-02-01 11:54:36'),
(127, 'Romualdo Reyes', 'DECLINED STUDENT ACCOUNT REQUEST [ Details: fjfcsetgpqha@eurokool.com ]', '2023-02-01 16:51:55'),
(128, 'Romualdo Reyes', 'DECLINED STUDENT ACCOUNT REQUEST [ Details: fjfcsetgpqha@eurokool.com ]', '2023-02-01 17:02:03'),
(129, 'Romualdo Reyes', 'DECLINED STUDENT ACCOUNT REQUEST [ Details: pocgheizmdkyolp@eurokool.com ]', '2023-02-01 17:02:20'),
(130, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: Dela Cruz, Juan Marie M. ]', '2023-02-01 18:45:44'),
(131, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Reyes, Romualdo M. - 02/04/2023 12:00 PM ]', '2023-02-07 15:03:32'),
(132, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Reyes, Romualdo M. - 02/04/2023 12:00 PM ]', '2023-02-07 15:04:02'),
(133, 'Romualdo Reyes', 'DECLINED STUDENT ACCOUNT REQUEST [ Details: test user 1 ]', '2023-02-11 15:12:21'),
(134, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: testuser1 ]', '2023-02-11 15:13:57'),
(135, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details:  ]', '2023-02-11 15:20:22'),
(136, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: testuser1 ]', '2023-02-11 15:23:36'),
(137, 'Romualdo Reyes', 'DECLINED STUDENT ACCOUNT REQUEST [ Details: testuser1 ]', '2023-02-11 15:26:38'),
(138, 'Romualdo Reyes', 'DECLINED STUDENT ACCOUNT REQUEST [ Details:  ]', '2023-02-11 15:27:56'),
(139, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: testuser1 ]', '2023-02-11 15:28:55'),
(140, 'Romualdo Reyes', 'DELETED SCHEDULED COUNSELING [ Details: -  ]', '2023-02-11 20:43:30'),
(141, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: Test, User ]', '2023-02-13 14:10:04'),
(142, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Reyes, Romualdo M. - 02/23/2023 12:00 PM (Thursday) ]', '2023-02-13 16:20:13'),
(143, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Reyes, Romualdo M. - 02/23/2023 12:00 PM (Thursday) ]', '2023-02-13 16:20:16'),
(144, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - 02/14/2023 02:00 PM (Tuesday) ]', '2023-02-13 18:02:19'),
(145, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - 02/14/2023 02:00 PM (Tuesday) ]', '2023-02-13 18:10:43'),
(146, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - 02/14/2023 02:00 PM (Tuesday) ]', '2023-02-13 18:11:45'),
(147, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - February 17, 2023 12:00 PM (Friday) ]', '2023-02-13 18:22:25'),
(148, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - February 16, 2023 12:00 PM (Thursday) ]', '2023-02-13 18:28:00'),
(149, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - February 16, 2023 12:00 PM (Thursday) ]', '2023-02-13 18:35:14'),
(150, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - February 16, 2023 12:00 PM (Thursday) ]', '2023-02-13 18:36:22'),
(151, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - February 16, 2023 12:00 PM (Thursday) ]', '2023-02-13 18:37:51'),
(152, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - February 16, 2023 12:00 PM (Thursday) ]', '2023-02-13 18:39:57'),
(153, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - February 16, 2023 12:00 PM (Thursday) ]', '2023-02-13 18:45:42'),
(154, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - February 16, 2023 12:00 PM (Thursday) ]', '2023-02-13 18:46:33'),
(155, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - February 16, 2023 12:00 PM (Thursday) ]', '2023-02-13 18:50:43'),
(156, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - February 16, 2023 12:00 PM (Thursday) ]', '2023-02-13 18:54:01'),
(157, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Reyes, Romualdo M. - February 14, 2023 09:00 AM (Tuesday) ]', '2023-02-13 18:54:57'),
(158, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Reyes, Romualdo M. - February 16, 2023 03:00 PM (Thursday) ]', '2023-02-14 13:43:14'),
(159, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Reyes, Romualdo M. - February 16, 2023 03:00 PM (Thursday) ]', '2023-02-14 13:43:18'),
(160, 'Romualdo Reyes', 'MARKED AS INACTIVE STUDENT[ Details: te ]', '2023-02-14 13:46:18'),
(161, 'Romualdo Reyes', 'UPDATED ACCOUNT DETAILS', '2023-02-14 14:23:20'),
(162, 'Romualdo Reyes', 'UPDATED ACCOUNT DETAILS', '2023-02-14 14:23:23'),
(163, 'Romualdo Reyes2', 'UPDATED ACCOUNT DETAILS', '2023-02-14 14:23:29'),
(164, 'Romualdo Reyes', 'APPROVE STUDENT ACCOUNT [ Details: Alden, Yot Maine ]', '2023-02-14 14:32:08'),
(165, 'Romualdo Reyes', 'MARKED AS INACTIVE STUDENT[ Details: Rechagre, Alden R. ]', '2023-02-14 14:35:26'),
(166, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: bin Laden, Osama ]', '2023-02-14 15:14:47'),
(167, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: bin Laden, Osama ]', '2023-02-14 15:15:16'),
(168, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: bin Laden, Osama ]', '2023-02-14 15:23:25'),
(169, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: Reyes, Romualdo M. ]', '2023-02-14 15:24:12'),
(170, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: Reyes, Romualdo M. ]', '2023-02-14 15:28:32'),
(171, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: Reyes, Romualdo M. ]', '2023-02-14 15:30:47'),
(172, 'Romualdo Reyes', 'REMOVED SANCTION [ Details: Romualdo Reyes ]', '2023-02-14 18:02:36'),
(173, 'Romualdo Reyes', 'ADDED PROCTOR SCHEDULE [ Details: Joel Rosales Baui- April 16, 2023 ]', '2023-02-14 19:33:05'),
(174, 'Romualdo Reyes', 'DELETED PROCTOR SCHEDULE [ Details: Joel Rosales Baui ]', '2023-02-14 19:33:14'),
(175, 'Romualdo Reyes', 'ADDED PROCTOR SCHEDULE [ Details: Joel Rosales Baui- April 15, 2023 ]', '2023-02-14 19:51:41'),
(176, 'Romualdo Reyes', 'DELETED PROCTOR SCHEDULE [ Details: Joel Rosales Baui ]', '2023-02-14 19:53:30'),
(177, 'Romualdo Reyes', 'ADDED PROCTOR SCHEDULE [ Details: Joel Rosales Baui- April 15, 2023 ]', '2023-02-14 19:53:37'),
(178, 'Romualdo Reyes', 'ADDED PROCTOR SCHEDULE [ Details: Joel Rosales Baui- April 20, 2023 ]', '2023-02-14 19:54:26'),
(179, 'Romualdo Reyes', 'EDITED PROCTOR SCHEDULE [ Details: Joel Rosales Baui- 2023-04-15 ]', '2023-02-14 19:57:32'),
(180, 'Romualdo Reyes', 'DELETED PROCTOR [ Details: Ryan Jacob Contridas Yambao ]', '2023-02-14 20:17:28'),
(181, 'Romualdo Reyes', 'ADDED PROCTOR [ Details: Ryan Jacob Contridas Yammbao ]', '2023-02-14 20:17:39'),
(182, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: bin Laden, Osama ]', '2023-02-14 21:20:41'),
(183, 'Romualdo Reyes', 'REMOVED SANCTION [ Details: Romualdo Reyes ]', '2023-02-14 21:34:37'),
(184, 'Romualdo Reyes', 'COUNSELED STUDENT [ Details: bin Laden, Osama ]', '2023-02-14 21:37:45'),
(185, 'Romualdo Reyes', 'COUNSELED STUDENT [ Details: bin Laden, Osama ]', '2023-02-14 21:39:27'),
(186, 'Romualdo Reyes', 'COUNSELED STUDENT [ Details: bin Laden, Osama ]', '2023-02-14 21:41:00'),
(187, 'Romualdo Reyes', 'COUNSELED STUDENT [ Details: bin Laden, Osama ]', '2023-02-14 21:42:55'),
(188, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: Reyes, Romualdo M. ]', '2023-02-14 21:47:48'),
(189, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: Baui, Joel R ]', '2023-02-14 21:50:28'),
(190, 'Romualdo Reyes', 'APPROVED COUNSELING [ Details: Test, User - February 14, 2023 01:00 PM (Tuesday) ]', '2023-02-14 21:55:56'),
(191, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: Reyes, Romualdo M. ]', '2023-02-14 21:59:58'),
(192, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: Reyes, Romualdo M. ]', '2023-02-14 22:00:10');

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
(14, 2019, '2019-ADMISSION-TEST.docx', 11869, 2),
(15, 2020, '2020-ADMISSION-TEST.docx', 11915, 0),
(17, 2021, '2021-ADMISSION-TEST.docx', 11869, 0),
(18, 2022, '2022-ADMISSION-TEST.docx', 11915, 0);

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
(6, '2023-04-15'),
(7, '2023-04-16'),
(9, '2023-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointmenthistory`
--

CREATE TABLE `tbl_appointmenthistory` (
  `historyID` int(11) NOT NULL,
  `studentName` varchar(45) NOT NULL,
  `studentNumber` varchar(11) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `appointmentReason` varchar(45) NOT NULL,
  `appointmentType` varchar(45) NOT NULL,
  `personIncharge` varchar(45) NOT NULL,
  `remarks` varchar(45) NOT NULL,
  `appointmentDetails` varchar(45) NOT NULL,
  `dateCompleted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_approvedappointments`
--

CREATE TABLE `tbl_approvedappointments` (
  `appointmentID` int(11) NOT NULL,
  `studentName` varchar(45) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `appointmentReason` varchar(45) NOT NULL,
  `appointmentDetails` mediumtext NOT NULL,
  `appointmentType` varchar(45) NOT NULL,
  `appointmentSchedule` varchar(45) NOT NULL,
  `dateApproved` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_approvedappointments`
--

INSERT INTO `tbl_approvedappointments` (`appointmentID`, `studentName`, `studentNumber`, `studentEmail`, `studentCourse`, `appointmentReason`, `appointmentDetails`, `appointmentType`, `appointmentSchedule`, `dateApproved`) VALUES
(51, 'Reyes, Romualdo M.', '20190084-M', 'romualdoreyes2301@gmail.com', 'BSIS', 'WORK', 'Lorem ipsum dolor sit amet. Ut dolor similique qui aspernatur dolore quo temporibus sint. Et quibusdam veritatis vel voluptatem quia a maxime praesentium hic veritatis pariatur non amet consequuntur non quaerat consequatur. Eos ipsam distinctio in veritatis quam et debitis animi id iure fugiat.', 'Clearance', '2022-12-23 12:00', '2022-12-22 11:07:14'),
(52, 'Reyes, Romualdo M.', '20190084-M', 'romualdoreyes2301@gmail.com', 'BSIS', 'WORK', 'Qui nostrum explicabo aut ipsa nisi vel iure nostrum ut itaque sint eum reiciendis laboriosam aut minima commodi quo amet dolores. Sed repellat autem sed iste minima eos quaerat exercitationem. Ut provident sint At beatae nihil est enim neque ut odio fugit qui quam sint sed libero aspernatur.', 'Honorable Dismissal', '2022-12-28 12:00', '2022-12-22 11:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_approvedcounsellings`
--

CREATE TABLE `tbl_approvedcounsellings` (
  `counsellingID` int(11) NOT NULL,
  `counsellingType` varchar(45) NOT NULL,
  `requesterName` varchar(45) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `dateApproved` date NOT NULL DEFAULT current_timestamp(),
  `counsellingSchedule` varchar(45) NOT NULL,
  `counsellingDetails` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_approvedcounsellings`
--

INSERT INTO `tbl_approvedcounsellings` (`counsellingID`, `counsellingType`, `requesterName`, `studentCourse`, `studentEmail`, `studentNumber`, `dateApproved`, `counsellingSchedule`, `counsellingDetails`) VALUES
(47, 'Cognitive Therapy', 'bin Laden, Osama', 'ISIS 4-A', '', '2001911-M', '2023-02-14', '2023-02-23 12:00', 'dasdasadsdas'),
(48, 'Behavior Therapy', 'bin Laden, Osama', 'ISIS 4-A', '', '2001911-M', '2023-02-14', '2023-02-23 12:00', 'dasdasdas'),
(49, 'Holistic Therapy', 'bin Laden, Osama', 'ISIS 4-A', '', '2001911-M', '2023-02-14', '2023-02-23 12:00', 'dasdasdas');

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
(62, 'Behavior Therapy', 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '62', '02/15/2023 02:00 PM (Wednesday)', 'Completed', 'Alden Richards', 'Next time ulit ha?'),
(65, 'Behavior Therapy', 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '65', 'February 14, 2023 09:00 AM (Tuesday)', 'Completed', 'Alden Richards', 'HE'),
(71, 'Behavior Therapy', 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '71', 'February 16, 2023 03:00 PM (Thursday)', 'Completed', 'Alden Richards', 'sfdfd');

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
(63, 'Behavior Therapy', 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'f', '2023-02-04 08:00:00', 'Declined'),
(64, 'Educational Counseling', 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'test tickles', '2023-02-07 12:00:00', 'Declined'),
(67, 'Mental Health Counseling', 'Test, User', 'testuser1', 'BSALDEN', 'rmzldgcwunig@eurokool.com', 'Ang pogi ko kasi lagi ako pinipicturan sa room', '2023-03-31 12:00:00', 'Approved'),
(68, 'Behavior Therapy', 'Test, User', 'testuser1', 'BSALDEN', 'rmzldgcwunig@eurokool.com', 'HUHUHHUHUUHHUHU', '2023-02-15 10:00:00', 'Declined'),
(69, 'Educational Counseling', 'Test, User', 'testuser1', 'BSALDEN', 'rmzldgcwunig@eurokool.com', 'sadadasas', '2023-02-14 14:00:00', 'Declined'),
(70, 'Cognitive Therapy', 'Test, User', 'testuser1', 'BSALDEN', 'rmzldgcwunig@eurokool.com', 'sdsdds', '2023-02-16 12:00:00', 'Declined'),
(72, 'Holistic Therapy', 'Alden, Yot Maine', '230239', 'BSLA', 'cgvhrfzcmhnjxya@eurokool.com', 'dadsadaa', '2023-02-15 12:00:00', 'Declined'),
(73, 'Holistic Therapy', 'bin Laden, Osama', '2001911-M', 'ISIS 4-A', '', 'dsadadada', '2023-02-23 12:00:00', 'Approved');

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
-- Table structure for table `tbl_delapprovedappointments`
--

CREATE TABLE `tbl_delapprovedappointments` (
  `ID` int(1) NOT NULL,
  `appointmentID` int(11) NOT NULL,
  `studentName` varchar(45) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `appointmentReason` varchar(45) NOT NULL,
  `appointmentDetails` mediumtext NOT NULL,
  `appointmentType` varchar(45) NOT NULL,
  `appointmentSchedule` varchar(45) NOT NULL,
  `dateApproved` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delapprovedcounsellings`
--

CREATE TABLE `tbl_delapprovedcounsellings` (
  `counsellingID` int(11) NOT NULL,
  `counsellingType` varchar(45) NOT NULL,
  `requesterName` varchar(45) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `dateApproved` date NOT NULL DEFAULT current_timestamp(),
  `counsellingSchedule` varchar(45) NOT NULL,
  `counsellingDetails` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_delapprovedcounsellings`
--

INSERT INTO `tbl_delapprovedcounsellings` (`counsellingID`, `counsellingType`, `requesterName`, `studentCourse`, `studentEmail`, `studentNumber`, `dateApproved`, `counsellingSchedule`, `counsellingDetails`) VALUES
(40, 'Behavior Theraphy', 'Reyes, Romualdo M.', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '20190084-M', '2022-12-22', '12/25/2022 12:00 PM', 'dasdasasddsasdda'),
(41, '', '', '', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delpendingappointments`
--

CREATE TABLE `tbl_delpendingappointments` (
  `ID` int(11) NOT NULL,
  `appointmentID` int(11) NOT NULL,
  `studentName` varchar(45) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `appointmentReason` varchar(45) NOT NULL,
  `appointmentDetails` mediumtext NOT NULL,
  `appointmentType` varchar(45) NOT NULL,
  `requestDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delpendingcounsellings`
--

CREATE TABLE `tbl_delpendingcounsellings` (
  `ID` int(11) NOT NULL,
  `counsellingType` varchar(45) NOT NULL,
  `requesterName` varchar(45) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `counsellingDetails` mediumtext NOT NULL,
  `dateCreated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendingappointments`
--

CREATE TABLE `tbl_pendingappointments` (
  `appointmentID` int(11) NOT NULL,
  `studentName` varchar(45) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `appointmentReason` varchar(45) NOT NULL,
  `appointmentDetails` mediumtext NOT NULL,
  `appointmentType` varchar(45) NOT NULL,
  `requestDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendingappointments`
--

INSERT INTO `tbl_pendingappointments` (`appointmentID`, `studentName`, `studentNumber`, `studentEmail`, `studentCourse`, `appointmentReason`, `appointmentDetails`, `appointmentType`, `requestDate`) VALUES
(87, 'Reyes, Romualdo M.', '20190084-M', 'romualdoreyes2301@gmail.com', 'BSIS 4-A', 'WORK', 'Lorem ipsum dolor sit amet. Sed perspiciatis officiis non aliquid porro est fugit repellendus et voluptas numquam est perspiciatis blanditiis et galisum velit. Vel molestiae illo qui deserunt omnis nam minima veniam et commodi quasi ut soluta debitis et molestias dignissimos. Id delectus inventore est quam ullam rem optio veritatis rem numquam voluptas ad odit mollitia sit architecto voluptatem. Et culpa unde et accusamus temporibus vel incidunt quas est voluptatem explicabo.', 'Diploma', '2022-12-22'),
(88, 'Reyes, Romualdo M.', '20190084-M', 'romualdoreyes2301@gmail.com', 'BSIS 4-A', 'SCHOLARSHIP', 'Et nihil enim sit assumenda rerum qui totam asperiores rem alias eveniet vel nemo temporibus vel omnis dolore. A dolorem perspiciatis non velit expedita ut quasi minus At nobis aperiam qui quam quidem cum veniam dolores ex tenetur reprehenderit. Quo temporibus internos et enim labore et aliquam ducimus hic voluptas natus sit nemo modi ut explicabo possimus vel minima eaque.', 'Transcript of Records', '2022-12-22'),
(89, 'Reyes, Romualdo M.', '20190084-M', 'romualdoreyes2301@gmail.com', 'BSIS 4-A', 'Lorem ipsum dolor sit amet.', 'Et nihil enim sit assumenda rerum qui totam asperiores rem alias eveniet vel nemo temporibus vel omnis dolore. A dolorem perspiciatis non velit expedita ut quasi minus At nobis aperiam qui quam quidem cum veniam dolores ex tenetur reprehenderit. Quo temporibus internos et enim labore et aliquam ducimus hic voluptas natus sit nemo modi ut explicabo possimus vel minima eaque.', 'Others (Explain details below)', '2022-12-22');

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

--
-- Dumping data for table `tbl_proctorschedule`
--

INSERT INTO `tbl_proctorschedule` (`proctorID`, `proctorName`, `roomAssigned`, `startTime`, `endTime`, `examDate`) VALUES
(28, 'Ryan Jacob Contridas Yambao', 'CL1', '13:00', '15:00', '2022-12-30'),
(29, 'Ryan Jacob Contridas Yambao', 'CL1', '13:00', '15:00', '2022-12-29'),
(30, 'Ryan Jacob Contridas Yambao', 'CL2', '08:00', '11:00', '2023-01-11'),
(31, 'Ryan Jacob Contridas Yambao', 'CL3', '10:00', '12:00', '2023-01-06'),
(32, 'Ryan Jacob Contridas Yambao', 'LR2', '12:00', '14:00', '2023-01-09'),
(33, 'Ryan Jacob Contridas Yambao', 'lr1', '12:10', '15:00', '2022-12-28'),
(36, 'Joel Rosales Baui', 'CL3', '12:00', '13:00', 'April 15, 2023'),
(37, 'Joel Rosales Baui', 'CL2', '12:00', '13:00', '2023-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `questionID` int(11) NOT NULL,
  `qYear` int(4) NOT NULL,
  `qSubject` mediumtext NOT NULL,
  `question` mediumtext NOT NULL,
  `optionOne` mediumtext NOT NULL,
  `optionTwo` mediumtext NOT NULL,
  `optionThree` mediumtext NOT NULL,
  `optionFour` mediumtext NOT NULL,
  `answer` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`questionID`, `qYear`, `qSubject`, `question`, `optionOne`, `optionTwo`, `optionThree`, `optionFour`, `answer`) VALUES
(2, 2020, 'MATHEMATICS', 'What is 18% of 36?', '1/2', '1/4', '12', '6.48', '6.48'),
(3, 2020, 'English', 'In the first paragraph, inferences means?', 'Graphs ', 'Articles', 'Conclusions', 'Circumferences', 'Conclusions'),
(4, 2020, 'English', 'Could you please tell me where _____________?', 'the office is located.', 'Is located the office.', 'Is the office located.', 'the office locate.', 'the office is located.');

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

--
-- Dumping data for table `tbl_sanctions`
--

INSERT INTO `tbl_sanctions` (`sanctionID`, `studentName`, `studentNumber`, `studentCourse`, `studentEmail`, `sanctionCase`, `sanction`, `sanctionType`, `sanctionMessage`, `dateIssued`, `degree`) VALUES
(19, 'Baui, Joel R', '20191185-M', 'BSIS 4-A', 'joelrosalesbaui@gmail.com', 'Sexual offenses or obscenities', 'Disciplinary Sanction', 'Suspension', 'Hinipuan si maam trinidad', '2023-02-14 21:50:28', 'Moderate'),
(20, 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Possessing drugs, alcohol or weapons', 'Disciplinary Sanction', 'Suspension', 'Nagdala ng Bazooka', '2023-02-14 21:59:58', 'Mild');

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
(60, '20190001-M', 'Be, Jin F.', 'BSIS 1-A', 'bossjinbe@fishman.com', '7cda131528089c476d4b041013460ec8', '94d6e6c70562deea827223c70636f9e3', '2022-11-02 08:34:18.373039', 'no', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(89, '20190473-M', 'Yambao, Ryan Jacob C.', 'BSIS 4-A', 'ryanjacobyambao@gmail.com', '', '', '2022-11-03 06:25:57.517350', 'yes', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(91, '20190084-M', 'Reyes, Romualdo M.', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '7cda131528089c476d4b041013460ec8', '', '2022-11-03 06:33:05.935565', 'yes', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(92, '20190607-M', 'Conde, Tristan Deo M.', 'BSIS 4-A', 'mahniggahboitristan@gmail.com', '', '', '2022-11-03 11:00:58.839511', 'yes', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(93, '20190000-M', 'Manke, Loppy D.', 'STRHT 4-A', '', '', '', '2022-11-03 11:03:18.047111', 'no', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(101, '20200129-M', 'Rechagre, Alden R.', 'BSA 4-A', '', '', '', '2022-11-15 06:07:35.258565', 'no', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(103, '20191185-M', 'Baui, Joel R', 'BSIS 4-A', 'joelrosalesbaui@gmail.com', '7cda131528089c476d4b041013460ec8', 'c8bdbc798167387ce52659564c3df89f', '2022-11-24 04:53:23.045669', 'no', 'user', 1, 'Screenshot 2023-02-08 131652.jpg', ''),
(114, 'admin2', 'Administrator 2', 'Romualdo Reyes', 'admins@admin.com', '0192023a7bbd73250516f069df18b500', '', '2022-12-22 03:43:32.242775', 'yes', 'admin', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(135, 'te', 'te', 'BSLS', '', '', '', '2023-02-01 03:54:18.029339', 'no', 'user', 0, '', ''),
(139, '203022-M', 'Dela Cruz, Juan Marie M.', 'BSSLS', 'pocgheizmdkyolp@eurokool.com', '3737f3256f5adf26574a4ba6db00dac1', '', '2023-02-01 10:05:48.736962', 'yes', 'user', 1, 'Screenshot 2023-01-16 133025.jpg', ''),
(146, 'testuser1', 'Test, User', 'BSALDEN', 'rmzldgcwunig@eurokool.com', '96c8223516ecfb8b5a28296e9f3b6cde', '', '2023-02-13 06:09:41.226824', 'yes', 'user', 1, 'Screenshot 2023-02-08 131652.jpg', ''),
(147, '230239-M', 'Alden, Yot Maine', 'BSLA', 'cgvhrfzcmhnjxya@eurokool.com', '676f58abbcd7ed87e3c4d74af3770b6b', '', '2023-02-14 06:31:10.345398', 'yes', 'user', 1, 'Screenshot 2023-02-08 131652.jpg', '');

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
-- Indexes for table `tbl_appointmenthistory`
--
ALTER TABLE `tbl_appointmenthistory`
  ADD PRIMARY KEY (`historyID`);

--
-- Indexes for table `tbl_approvedappointments`
--
ALTER TABLE `tbl_approvedappointments`
  ADD PRIMARY KEY (`appointmentID`);

--
-- Indexes for table `tbl_approvedcounsellings`
--
ALTER TABLE `tbl_approvedcounsellings`
  ADD PRIMARY KEY (`counsellingID`);

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
-- Indexes for table `tbl_delapprovedappointments`
--
ALTER TABLE `tbl_delapprovedappointments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_delapprovedcounsellings`
--
ALTER TABLE `tbl_delapprovedcounsellings`
  ADD PRIMARY KEY (`counsellingID`);

--
-- Indexes for table `tbl_delpendingappointments`
--
ALTER TABLE `tbl_delpendingappointments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_delpendingcounsellings`
--
ALTER TABLE `tbl_delpendingcounsellings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_pendingappointments`
--
ALTER TABLE `tbl_pendingappointments`
  ADD PRIMARY KEY (`appointmentID`);

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
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`questionID`);

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
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `tbl_admissiontestrecords`
--
ALTER TABLE `tbl_admissiontestrecords`
  MODIFY `admID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_admissiontestschedule`
--
ALTER TABLE `tbl_admissiontestschedule`
  MODIFY `admID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_appointmenthistory`
--
ALTER TABLE `tbl_appointmenthistory`
  MODIFY `historyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_approvedappointments`
--
ALTER TABLE `tbl_approvedappointments`
  MODIFY `appointmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_approvedcounsellings`
--
ALTER TABLE `tbl_approvedcounsellings`
  MODIFY `counsellingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

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
-- AUTO_INCREMENT for table `tbl_delapprovedappointments`
--
ALTER TABLE `tbl_delapprovedappointments`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_delapprovedcounsellings`
--
ALTER TABLE `tbl_delapprovedcounsellings`
  MODIFY `counsellingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_delpendingappointments`
--
ALTER TABLE `tbl_delpendingappointments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_delpendingcounsellings`
--
ALTER TABLE `tbl_delpendingcounsellings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_pendingappointments`
--
ALTER TABLE `tbl_pendingappointments`
  MODIFY `appointmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

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
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sanctions`
--
ALTER TABLE `tbl_sanctions`
  MODIFY `sanctionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_sanctionservices`
--
ALTER TABLE `tbl_sanctionservices`
  MODIFY `sanctionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
