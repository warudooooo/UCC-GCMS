<?php

use voku\helper\AntiXSS;

require_once '../vendor/autoload.php'; // example path

$antiXss = new AntiXSS();

$msg = "";
if (isset($_POST['view_student'])) {

    $_SESSION['dbID'] = $_POST['dbID'];
    $_SESSION['sName'] = $_POST['sName'];
    $_SESSION['stCourse'] = $_POST['stCourse'];
    $_SESSION['stNumber'] = $_POST['stNumber'];
    $_SESSION['stEmail'] = $_POST['stEmail'];
    $_SESSION['regForm'] = $_POST['regForm'];
}

if (isset($_POST['markasactive'])) {
    $dbID = $mysqli->real_escape_string($_POST['dbID']);

    $edit = "UPDATE `tbl_students` SET userStatus='1' WHERE ID='$dbID'";
    $result = mysqli_query($mysqli, $edit);
}

if (isset($_POST['markasinactive'])) {
    $dbID = $mysqli->real_escape_string($_POST['dbID']);

    $edit = "UPDATE `tbl_students` SET userStatus='0' WHERE ID='$dbID'";
    $result = mysqli_query($mysqli, $edit);
}

if (isset($_POST['sancMarkAsDone'])) {
    $ssID = $mysqli->real_escape_string($_POST['ssID']);

    $update = "UPDATE tbl_sanctions SET sanctionStatus = 'Completed' WHERE sanctionID = '$ssID'";
    $result = mysqli_query($mysqli, $update);

}

if (isset($_POST['edit_student'])) {

    $dbID = filter_input(INPUT_POST, 'dbID', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sName = filter_input(INPUT_POST, 'sName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sNumber = filter_input(INPUT_POST, 'sNumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sCourse = filter_input(INPUT_POST, 'sCourse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sEmail = filter_input(INPUT_POST, 'sEmail', FILTER_SANITIZE_EMAIL);

    $dbID = $antiXss->xss_clean($dbID);
    $sName = $antiXss->xss_clean($sName);
    $sNumber = $antiXss->xss_clean($sNumber);
    $sCourse = $antiXss->xss_clean($sCourse);
    $sEmail = $antiXss->xss_clean($sEmail);

    $oldsName = filter_input(INPUT_POST, 'oldsName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $oldsNumber = filter_input(INPUT_POST, 'oldsNumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $oldsCourse = filter_input(INPUT_POST, 'oldsCourse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $oldsEmail = filter_input(INPUT_POST, 'oldsEmail', FILTER_SANITIZE_EMAIL);

    $oldsName = $antiXss->xss_clean($oldsName);
    $oldsNumber = $antiXss->xss_clean($oldsNumber);
    $oldsCourse = $antiXss->xss_clean($oldsCourse);
    $oldsEmail = $antiXss->xss_clean($oldsEmail);


    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    



    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE ID='{$dbID}'")) > 0) {
        if ($admPassword == $curPassword) {
            if ($sNumber == "" || $sName == "" || $sEmail == "" || $sCourse == "") {
                $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
            } else {
                $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='$sEmail' WHERE ID='$dbID'";
                $result = mysqli_query($mysqli, $sql);

                $before =
                    "Student Number: $oldsNumber
Student Name: $oldsName
Course: $oldsCourse
Email: $oldsEmail";

                $after =
                    "Student Number: $sNumber
Student Name: $sName
Course: $sCourse
Email: $sEmail
";

                $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                VALUES('$admName','$before','$after','Edited Student Account Succesfully.')";
                $runActivity = mysqli_query($mysqli, $activity);


                header("location: redirects/studentIndv-edit-success.php");
            }
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; width: 100%;"><h3 style="margin: auto;">The password you entered is incorrect.</h3></div>';
        }
    }
}
