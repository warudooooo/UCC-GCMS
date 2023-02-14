<?php
session_start();
if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: ../index.php");
    die();
}

include '../config.php';
$msg = "";

$query = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$_SESSION['SESSION_EMAIL']}'");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);

    $sName = $row['studentName'];
    $sNumber = $row['studentNumber'];
    $sCourse = $row['studentCourse'];
    $sEmail = $row['studentEmail'];
}

if (isset($_POST['submit'])) {

    if ($_POST['sDetails'] == '' || $_POST['sOptions'] == '') {
        $msg = "<div class='eml'>PLEASE FILL UP ALL THE FIELDS</div>";
    } else {

        $sDetails = $mysqli->real_escape_string($_POST['sDetails']);
        $sOptions = $mysqli->real_escape_string($_POST['sOptions']);
        $cSchedule = $mysqli->real_escape_string($_POST['cSchedule']);

        //Insert to DB
        if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE counselingSchedule='{$cSchedule}'")) > 0) {
            $msg = '<div class="eml" style="text-align: center; color: crimson;"><h3>THE SCHEDULE YOU SELECTED IS NOT AVAILABLE AT THIS TIME.</h3></div>';
        } else if ($cSchedule == "") {
            $msg = '<div class="eml" style="text-align: center; color: crimson;"><h3>PLEASE SELECT A DATE</h3></div>';
        } else {
            $sql = "INSERT INTO tbl_counselings(studentNumber,requesterName,studentCourse,studentEmail,counselingDetails,counselingType,counselingSchedule,counselingStatus)
            VALUES('$sNumber','$sName','$sCourse','$sEmail','$sDetails','$sOptions','$cSchedule','Pending')";
            $result = mysqli_query($mysqli, $sql);

            header("Location: redirects/request-success-sub.php");
        }
    }
}
