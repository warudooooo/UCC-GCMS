<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


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

if (isset($_POST['remove_sanction'])) {

    $ssID = $mysqli->real_escape_string($_POST['ssID']);

    $delete = "DELETE FROM tbl_sanctions WHERE sanctionID = '$ssID'";
    $result = mysqli_query($mysqli, $delete);

    $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','REMOVED SANCTION [ Details: $sName ]')";
    $runActivity = mysqli_query($mysqli, $activity);
}

if (isset($_POST['edit_student'])) {
    $dbID = $_POST['dbID'];
    $sName = $_POST['sName'];
    $sNumber = $_POST['sNumber'];
    $sCourse = $_POST['sCourse'];
    $sEmail = $_POST['sEmail'];

    $sName = $mysqli->real_escape_string($sName);
    $sNumber = $mysqli->real_escape_string($sNumber);
    $sCourse = $mysqli->real_escape_string($sCourse);
    $sEmail = $mysqli->real_escape_string($sEmail);
    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE ID='{$dbID}'")) > 0) {
        if ($admPassword == $curPassword) {
            $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='$sEmail' WHERE ID='$dbID'";
            $result = mysqli_query($mysqli, $sql);
            header("location: redirects/studentIndv-edit-success.php");
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; width: 100%;"><h3 style="margin: auto;">The password you entered is incorrect.</h3></div>';
        }
    }
}