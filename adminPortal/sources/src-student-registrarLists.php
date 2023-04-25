<?php

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$msg = "";
if (isset($_POST['importExcelFile'])) {
    $fileName = $_FILES['importFile']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['cls', 'csv', 'xls', 'xlsx'];

    if (in_array($file_ext, $allowed_ext)) {
        $inputFileNamePath = $_FILES['importFile']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();
        $count = 0;
        foreach ($data as $row) {

            if ($count > 0) {
                $studentStatus = $row['0'];
                $studentNumber = $row['1'];
                $studentName = $row['2'];
                $studentCourse = $row['3'];
                $studentAddress = $row['4'];
                $studentEmail = $row['5'];
                $studentPhone = $row['6'];

                if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_studentsregistrar WHERE studentNumber='{$studentNumber}'")) > 0) {

                    $sql = "UPDATE tbl_studentsregistrar SET studentStatus='$studentStatus',studentName='$studentName',studentCourse='$studentCourse',studentAddress='$studentAddress',studentEmail='$studentEmail',studentPhoneNumber='$studentPhone' WHERE studentNumber='$studentNumber'";
                    $results = mysqli_query($mysqli, $sql);

                    $msg = "<div class='eml' style=' margin-bottom: 10px; display: inline-block; text-align: center; color: #38b000;'><h3>The system already contains some of the Students's data, so the data was updated.</h3></div>";
                } else {
                    $sql = "INSERT INTO tbl_studentsregistrar (studentStatus, studentNumber, studentName, studentCourse, studentAddress, studentEmail, studentPhoneNumber) VALUES ('$studentStatus','$studentNumber','$studentName','$studentCourse','$studentAddress','$studentEmail','$studentPhone')";
                    $result = mysqli_query($mysqli, $sql);

                    $msg = '<div class="eml" style=" margin-bottom: 10px; display: inline-block; text-align: center; color: #38b000; "><h3>Import Success.</h3></div>';
                }
            } else {
                $count = 1;
            }
        }
        $before = "$admName imported student data from an excel file named: $fileName";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','$before','','Imported Student Data successfully')";
        $runActivity = mysqli_query($mysqli, $activity);
    } else {
        $msg = '<div class="eml" style=" margin-bottom: 10px; display: inline-block; text-align: center; color: crimson; "><h3>Only Excel file format are accepted.</h3></div>';
    }
}

if (isset($_POST['addStudent'])) {


    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_studentsregistrar WHERE studentNumber = '{$_POST['studentNumber']}'")) > 0) {
        $msg = '<div class="eml" style=" margin-bottom: 10px; display: inline-block; text-align: center; color: crimson;"><h3>This Student already exists.</h3></div>';
    } else if ($_POST['studentStatus'] == "") {
        $msg = '<div class="eml" style=" margin-bottom: 10px; display: inline-block; text-align: center; color: crimson;"><h3>Please add "Status" to the student. </h3></div>';
    } else {
        $studentStatus = $mysqli->real_escape_string($_POST['studentStatus']);
        $studentNumber = $mysqli->real_escape_string($_POST['studentNumber']);
        $studentName = $mysqli->real_escape_string($_POST['studentName']);
        $studentCourse = $mysqli->real_escape_string($_POST['studentCourse']);
        $studentAddress = $mysqli->real_escape_string($_POST['studentAddress']);
        $studentEmail = $mysqli->real_escape_string($_POST['studentEmail']);
        $studentPhone = $mysqli->real_escape_string($_POST['studentPhone']);

        $before =
            "Status: $studentStatus
Student Number: $studentNumber
Student Name: $studentName
Course: $studentCourse
Address: $studentAddress
Email: $studentEmail
Phone: $studentPhone";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','$before','','Added Enrolled Student successfully')";
        $runActivity = mysqli_query($mysqli, $activity);

        mysqli_query($mysqli, "INSERT INTO tbl_studentsregistrar (studentStatus,studentNumber,studentName,studentCourse,studentAddress,studentEmail,studentPhoneNumber) VALUES('$studentStatus','$studentNumber','$studentName','$studentCourse','$studentAddress','$studentEmail','$studentPhone')");
        header("location: redirects/student-addedRegistrar-success.php");
    }
}

if (isset($_POST['editStudent'])) {
    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    if ($admPassword != $curPassword) {
        $msg = '<div class="eml" style=" margin-bottom: 10px; display: inline-block; text-align: center; color: crimson;"><h3>Incorrect password.</h3></div>';
    } else if ($_POST['studentStatus'] == "") {
        $msg = '<div class="eml" style=" margin-bottom: 10px; display: inline-block; text-align: center; color: crimson;"><h3>Please add "Status" to the student. </h3></div>';
    } else {
        $studentID = $mysqli->real_escape_string($_POST['studentID']);
        // Before
        $sStatusBefore = $mysqli->real_escape_string($_POST['sStatusBefore']);
        $sNumberBefore = $mysqli->real_escape_string($_POST['sNumberBefore']);
        $sNameBefore = $mysqli->real_escape_string($_POST['sNameBefore']);
        $sCourseBefore = $mysqli->real_escape_string($_POST['sCourseBefore']);
        $sAddressBefore = $mysqli->real_escape_string($_POST['sAddressBefore']);
        $sEmailBefore = $mysqli->real_escape_string($_POST['sEmailBefore']);
        $sPhoneBefore = $mysqli->real_escape_string($_POST['sPhoneBefore']);

        // After
        $studentStatus = $mysqli->real_escape_string($_POST['studentStatus']);
        $studentNumber = $mysqli->real_escape_string($_POST['studentNumber']);
        $studentName = $mysqli->real_escape_string($_POST['studentName']);
        $studentCourse = $mysqli->real_escape_string($_POST['studentCourse']);
        $studentAddress = $mysqli->real_escape_string($_POST['studentAddress']);
        $studentEmail = $mysqli->real_escape_string($_POST['studentEmail']);
        $studentPhone = $mysqli->real_escape_string($_POST['studentPhone']);


        mysqli_query($mysqli, "UPDATE tbl_studentsregistrar SET studentStatus = '$studentStatus',studentNumber = '$studentNumber',studentName = '$studentName',studentCourse = '$studentCourse',studentCourse = '$studentCourse',studentAddress = '$studentAddress',studentEmail = '$studentEmail',studentPhoneNumber = '$studentPhone'  WHERE ID = '$studentID'");

        $before =
            "Status: $sStatusBefore
Student Number: $sNumberBefore
Student Name: $sNameBefore
Course: $sCourseBefore
Address: $sAddressBefore
Email: $sEmailBefore
Phone: $sPhoneBefore";

        $after =
            "Status: $studentStatus
Student Number: $studentNumber
Student Name: $studentName
Course: $studentCourse
Address: $studentAddress
Email: $studentEmail
Phone: $studentPhone";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','$before','$after','Edited Enrolled Student Details successfully')";
        $runActivity = mysqli_query($mysqli, $activity);

        $msg = '<div class="eml" style=" margin-bottom: 10px; display: inline-block; text-align: center; color: #457b9d; "><h3>Edit Success.</h3></div>';
    }
}
