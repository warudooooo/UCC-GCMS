<?php

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use voku\helper\AntiXSS;

$antiXss = new AntiXSS();


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
                $studentStatus = filter_var($row['0'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $studentNumber = filter_var($row['1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $studentName = filter_var($row['2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $studentCourse = filter_var($row['3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $studentAddress = filter_var($row['4'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $studentEmail = filter_var($row['5'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $studentPhone = filter_var($row['6'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $studentStatus = $antiXss->xss_clean($studentStatus);
                $studentNumber = $antiXss->xss_clean($studentNumber);
                $studentName = $antiXss->xss_clean($studentName);
                $studentCourse = $antiXss->xss_clean($studentCourse);
                $studentAddress = $antiXss->xss_clean($studentAddress);
                $studentEmail = $antiXss->xss_clean($studentEmail);
                $studentPhone = $antiXss->xss_clean($studentPhone);

                if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_studentsregistrar WHERE studentNumber='{$studentNumber}'")) > 0) {
                    if($studentStatus == "" || $studentNumber == "" || $studentName == "" || $studentCourse == "" || $studentAddress == "" || $studentPhone == "" || $studentEmail == ""){
                        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
                        break;
                    }else{
                    $sql = "UPDATE tbl_studentsregistrar SET studentStatus='$studentStatus',studentName='$studentName',studentCourse='$studentCourse',studentAddress='$studentAddress',studentEmail='$studentEmail',studentPhoneNumber='$studentPhone' WHERE studentNumber='$studentNumber'";
                    $results = mysqli_query($mysqli, $sql);

                    $msg = "<div class='eml' style=' margin-bottom: 10px; display: inline-block; text-align: center; color: #38b000;'><h3>The system already contains some of the Students's data, so the data was updated.</h3></div>";
                    }
                } else {
                    if($studentStatus == "" || $studentNumber == "" || $studentName == "" || $studentCourse == "" || $studentAddress == "" || $studentPhone == "" || $studentEmail == ""){
                        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
                        break;
                    }else{
                    $sql = "INSERT INTO tbl_studentsregistrar (studentStatus, studentNumber, studentName, studentCourse, studentAddress, studentEmail, studentPhoneNumber) VALUES ('$studentStatus','$studentNumber','$studentName','$studentCourse','$studentAddress','$studentEmail','$studentPhone')";
                    $result = mysqli_query($mysqli, $sql);

                    $msg = '<div class="eml" style=" margin-bottom: 10px; display: inline-block; text-align: center; color: #38b000; "><h3>Import Success.</h3></div>';
                    }
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

        $studentStatus = filter_input(INPUT_POST, 'studentStatus', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $studentNumber = filter_input(INPUT_POST, 'studentNumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $studentName = filter_input(INPUT_POST, 'studentName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $studentCourse = filter_input(INPUT_POST, 'studentCourse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $studentAddress = filter_input(INPUT_POST, 'studentAddress', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $studentEmail = filter_input(INPUT_POST, 'studentEmail', FILTER_SANITIZE_EMAIL);
        $studentPhone = filter_input(INPUT_POST, 'studentPhone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $studentStatus = $antiXss->xss_clean($studentStatus);
        $studentNumber = $antiXss->xss_clean($studentNumber);
        $studentName = $antiXss->xss_clean($studentName);
        $studentCourse = $antiXss->xss_clean($studentCourse);
        $studentAddress = $antiXss->xss_clean($studentAddress);
        $studentEmail = $antiXss->xss_clean($studentEmail);
        $studentPhone = $antiXss->xss_clean($studentPhone);

        $after =
            "Status: $studentStatus
Student Number: $studentNumber
Student Name: $studentName
Course: $studentCourse
Address: $studentAddress
Email: $studentEmail
Phone: $studentPhone";


if($studentStatus == "" || $studentNumber == "" || $studentName == "" || $studentCourse == "" || $studentAddress == "" || $studentPhone == "" || $studentEmail == ""){
    $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
}else{
        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Added Enrolled Student successfully')";
        $runActivity = mysqli_query($mysqli, $activity);

        mysqli_query($mysqli, "INSERT INTO tbl_studentsregistrar (studentStatus,studentNumber,studentName,studentCourse,studentAddress,studentEmail,studentPhoneNumber) VALUES('$studentStatus','$studentNumber','$studentName','$studentCourse','$studentAddress','$studentEmail','$studentPhone')");
        header("location: redirects/student-addedRegistrar-success.php");
}
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
        $studentID = filter_input(INPUT_POST, 'studentID', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        // Before
        $sStatusBefore = filter_input(INPUT_POST, 'sStatusBefore', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $sNumberBefore = filter_input(INPUT_POST, 'sNumberBefore', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $sNameBefore = filter_input(INPUT_POST, 'sNameBefore', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $sCourseBefore = filter_input(INPUT_POST, 'sCourseBefore', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $sAddressBefore = filter_input(INPUT_POST, 'sAddressBefore', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $sEmailBefore = filter_input(INPUT_POST, 'sEmailBefore', FILTER_SANITIZE_EMAIL);
        $sPhoneBefore = filter_input(INPUT_POST, 'sPhoneBefore', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $sStatusBefore = $antiXss->xss_clean($sStatusBefore);
        $sNumberBefore = $antiXss->xss_clean($sNumberBefore);
        $sNameBefore = $antiXss->xss_clean($sNameBefore);
        $sCourseBefore = $antiXss->xss_clean($sCourseBefore);
        $sAddressBefore = $antiXss->xss_clean($sAddressBefore);
        $sEmailBefore = $antiXss->xss_clean($sEmailBefore);
        $sPhoneBefore = $antiXss->xss_clean($sPhoneBefore);


        // After
        $studentStatus = filter_input(INPUT_POST, 'studentStatus', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $studentNumber = filter_input(INPUT_POST, 'studentNumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $studentName = filter_input(INPUT_POST, 'studentName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $studentCourse = filter_input(INPUT_POST, 'studentCourse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $studentAddress = filter_input(INPUT_POST, 'studentAddress', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $studentEmail = filter_input(INPUT_POST, 'studentEmail', FILTER_SANITIZE_EMAIL);
        $studentPhone = filter_input(INPUT_POST, 'studentPhone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $studentStatus = $antiXss->xss_clean($studentStatus);
        $studentNumber = $antiXss->xss_clean($studentNumber);
        $studentName = $antiXss->xss_clean($studentName);
        $studentCourse = $antiXss->xss_clean($studentCourse);
        $studentAddress = $antiXss->xss_clean($studentAddress);
        $studentEmail = $antiXss->xss_clean($studentEmail);
        $studentPhone = $antiXss->xss_clean($studentPhone);


        if($studentStatus == "" || $studentNumber == "" || $studentName == "" || $studentCourse == "" || $studentAddress == "" || $studentPhone == "" || $studentEmail == ""){
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
        }else{

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
}
