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
