-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2022 at 04:08 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19586514_db_guidance`
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
(100, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: bin Laden, Osama ]', '2022-12-22 04:01:24'),
(101, 'Romualdo Reyes', 'REMOVED SANCTION [ Details: Romualdo Reyes ]', '2022-12-22 04:01:30'),
(102, 'Romualdo Reyes', 'SANCTIONED STUDENT [ Details: Reyes, Romualdo M. ]', '2022-12-22 04:01:40');

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
(14, 2019, '2019-ADMISSION-TEST.docx', 11869, 1),
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counsellinghistory`
--

CREATE TABLE `tbl_counsellinghistory` (
  `historyID` int(11) NOT NULL,
  `studentName` varchar(45) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `personIncharge` varchar(45) NOT NULL,
  `remarks` varchar(45) NOT NULL,
  `dateCompleted` date NOT NULL DEFAULT current_timestamp(),
  `counsellingType` varchar(45) NOT NULL,
  `counsellingDetails` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_counsellinghistory`
--

INSERT INTO `tbl_counsellinghistory` (`historyID`, `studentName`, `studentNumber`, `studentCourse`, `studentEmail`, `personIncharge`, `remarks`, `dateCompleted`, `counsellingType`, `counsellingDetails`) VALUES
(1, 'Reyes, Romualdo M.', '20190084-M', 'BSIS', 'waldoreyes2323@gmail.com', 'Ms. Hazel More', 'Come again if needed', '2022-11-03', 'Educational Counselling', '1914 translation by H. Rackham\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"'),
(10, 'Reyes, Romualdo M.', '20190084-M', 'BSIS', 'waldoreyes2301@gmail.com', 'Ms. Eva Elfie', 'Good boy', '2022-11-03', 'Holistic Theraphy', 'dsaaaaaaaaaaaaa');

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
(40, 'Behavior Theraphy', 'Reyes, Romualdo M.', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '20190084-M', '2022-12-22', '12/25/2022 12:00 PM', 'dasdasasddsasdda');

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
-- Table structure for table `tbl_pendingcounsellings`
--

CREATE TABLE `tbl_pendingcounsellings` (
  `ID` int(11) NOT NULL,
  `counsellingType` varchar(45) NOT NULL,
  `requesterName` varchar(45) NOT NULL,
  `studentNumber` varchar(45) NOT NULL,
  `studentCourse` varchar(45) NOT NULL,
  `studentEmail` varchar(45) NOT NULL,
  `counsellingDetails` mediumtext NOT NULL,
  `dateCreated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendingcounsellings`
--

INSERT INTO `tbl_pendingcounsellings` (`ID`, `counsellingType`, `requesterName`, `studentNumber`, `studentCourse`, `studentEmail`, `counsellingDetails`, `dateCreated`) VALUES
(51, 'Cognitive Theraphy', 'Reyes, Romualdo M.', '20190084-M', 'BSIS', 'romualdoreyes2301@gmail.com', 'Lorem ipsum dolor sit amet. Est laborum voluptatem est nemo ratione sed aspernatur sunt. Qui nobis praesentium ut nisi quam eos dolorem fugiat non fugit voluptas.\r\n\r\nAut voluptates facilis eum earum aliquid quo consequatur quia est molestiae debitis? Quo Quis nemo qui eius quia quo quisquam saepe eum quia dignissimos qui assumenda obcaecati vel molestiae veritatis ut dolores sunt.', '2022-12-15'),
(52, 'Behavior Theraphy', 'Reyes, Romualdo M.', '20190084-M', 'BSIS', 'romualdoreyes2301@gmail.com', 'Ut necessitatibus provident est recusandae sint non quam sint et sunt quia aut voluptatum iure est natus velit ea quidem accusamus. Vel libero omnis vel galisum nesciunt et architecto asperiores et totam quis? Et numquam assumenda hic officia beatae ea consequatur rerum ut velit autem vel deleniti suscipit. Ad vero illo ut voluptatibus voluptas qui minima delectus ab laborum consequatur est deserunt iure non perferendis asperiores et aliquid blanditiis.', '2022-12-15'),
(59, 'Others (Explain details below)', 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Lorem ipsum dolor sit amet. Aut eius voluptas sed exercitationem dicta id recusandae nostrum qui veniam quaerat. Qui saepe dolores non magni dolores est voluptatem fuga! Qui consequatur tempora eos unde saepe qui sunt eveniet.', '2022-12-22'),
(60, 'Holistic Theraphy', 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Est omnis commodi qui blanditiis harum rem repellat exercitationem eum similique dolores. Non nihil laborum ut cupiditate explicabo et recusandae odio. Nam voluptatem omnis sit accusamus Quis est suscipit placeat ut natus magnam est enim nemo et officiis recusandae!', '2022-12-22'),
(61, 'Mental Health Counseling', 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Et quas sunt qui rerum consequatur quo aliquid voluptas eum voluptate cumque et minima dignissimos. Qui perspiciatis velit aut quia vitae ea maiores debitis est voluptatibus neque. Rem ullam maxime quo architecto iste et atque fuga et fuga minima rem omnis reprehenderit ut eaque architecto qui vero dicta. Ad commodi dignissimos nam dolore totam id facere laboriosam.', '2022-12-22');

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
(3, 'Ryan Jacob Contridas Yambao');

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
(33, 'Ryan Jacob Contridas Yambao', 'lr1', '12:10', '15:00', '2022-12-28');

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
  `sanctionMessage` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanctions`
--

INSERT INTO `tbl_sanctions` (`sanctionID`, `studentName`, `studentNumber`, `studentCourse`, `studentEmail`, `sanctionCase`, `sanction`, `sanctionType`, `sanctionMessage`) VALUES
(6, 'BIN LADEN', '2001911-M', 'ISIS 4-A', '', 'Nagpasabog ng building', 'Disciplinary Sanction', 'Suspension', 'Tsk tsk tsk'),
(9, 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'Lorem ipsum dolor sit amet. Et mollitia magni eum doloribus illo et asperiores cupiditate ut explicabo voluptatem est veritatis nisi et perspiciatis omnis et natus molestiae. ', 'Disciplinary Sanction', 'Probation', 'Aut vitae reprehenderit At tempore esse qui p'),
(10, 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'sd', 'Disciplinary Sanction', 'Suspension', 'dsds'),
(12, 'Reyes, Romualdo M.', '20190084-M', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', 'adsasdsa', 'Educational Sanction', 'Suspension', 'sadasdsa');

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
  `resetCode` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`ID`, `studentNumber`, `studentName`, `studentCourse`, `studentEmail`, `studentPassword`, `vkey`, `studentCreateDate`, `studentVerified`, `userType`, `userStatus`, `resetCode`) VALUES
(35, 'admin', 'Romualdo Reyes', 'administrator', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', '', '2022-10-26 05:23:35.628926', 'yes', 'admin', 1, ''),
(36, '2001911-M', 'bin Laden, Osama', 'ISIS 4-A', '', '', '', '2022-10-26 07:10:27.760490', 'no', 'user', 1, ''),
(60, '20190001-M', 'Be, Jin F.', 'BSIS 1-A', 'bossjinbe@fishman.com', '7cda131528089c476d4b041013460ec8', 'c8bdbc798167387ce52659564c3df89f', '2022-11-02 08:34:18.373039', 'no', 'user', 1, ''),
(89, '20190473-M', 'Yambao, Ryan Jacob C.', 'BSIS 4-A', 'ryanjacobyambao@gmail.com', '7cda131528089c476d4b041013460ec8', '', '2022-11-03 06:25:57.517350', 'yes', 'user', 1, ''),
(91, '20190084-M', 'Reyes, Romualdo M.', 'BSIS 4-A', 'romualdoreyes2301@gmail.com', '7cda131528089c476d4b041013460ec8', '', '2022-11-03 06:33:05.935565', 'yes', 'user', 1, ''),
(93, '20190000-M', 'Manke, Loppy D.', 'STRHT 4-A', '', '', '', '2022-11-03 11:03:18.047111', 'no', 'user', 1, ''),
(101, '20200129-M', 'Rechagre, Alden R.', 'BSA 4-A', '', '', '', '2022-11-15 06:07:35.258565', 'no', 'user', 1, ''),
(114, 'admin2', 'Administrator 2', 'Romualdo Reyes', 'admins@admin.com', '0192023a7bbd73250516f069df18b500', '', '2022-12-22 03:43:32.242775', 'yes', 'admin', 1, '');

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
-- Indexes for table `tbl_counsellinghistory`
--
ALTER TABLE `tbl_counsellinghistory`
  ADD PRIMARY KEY (`historyID`);

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
-- Indexes for table `tbl_pendingcounsellings`
--
ALTER TABLE `tbl_pendingcounsellings`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `tbl_sanctions`
--
ALTER TABLE `tbl_sanctions`
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
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

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
  MODIFY `counsellingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_counsellinghistory`
--
ALTER TABLE `tbl_counsellinghistory`
  MODIFY `historyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_delapprovedappointments`
--
ALTER TABLE `tbl_delapprovedappointments`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_delapprovedcounsellings`
--
ALTER TABLE `tbl_delapprovedcounsellings`
  MODIFY `counsellingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
-- AUTO_INCREMENT for table `tbl_pendingcounsellings`
--
ALTER TABLE `tbl_pendingcounsellings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_proctors`
--
ALTER TABLE `tbl_proctors`
  MODIFY `proctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_proctorschedule`
--
ALTER TABLE `tbl_proctorschedule`
  MODIFY `proctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_sanctions`
--
ALTER TABLE `tbl_sanctions`
  MODIFY `sanctionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
