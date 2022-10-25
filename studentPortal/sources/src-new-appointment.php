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

}
if (isset($_POST['submit'])) {
    if($_POST['sDetails'] == '' || $_POST['sReason'] == '' || $_POST['sOptions'] == ''){
        $msg = "<div class='eml'>PLEASE FILL UP ALL THE FIELDS</div>";
    }else{
    $sReason = $_POST['sReason'];
	$sDetails = $_POST['sDetails'];
	$sOptions = $_POST['sOptions'];

    $sReason = $mysqli->real_escape_string($sReason);
	$sDetails = $mysqli->real_escape_string($sDetails);
	$sOptions = $mysqli->real_escape_string($sOptions);

    //Insert to DB
		$sql = "INSERT INTO tbl_pendingappointments(studentNumber,studentName,studentCourse,appointmentReason,appointmentDetails,appointmentType) VALUES('$sNumber','$sName','$sCourse','$sReason','$sDetails','$sOptions')";
        $result = mysqli_query($mysqli, $sql);

        header("Location: redirects/appointment-success-sub.php");
    }
    }
?>
