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

    if($_POST['sDetails'] == '' || $_POST['sOptions'] == ''){
        $msg = "<div class='eml'>PLEASE FILL UP ALL THE FIELDS</div>";
    }else{
        $sDetails = $_POST['sDetails'];
        $sOptions = $_POST['sOptions'];
    
        $sDetails = $mysqli->real_escape_string($sDetails);
        $sOptions = $mysqli->real_escape_string($sOptions);
    
        //Insert to DB
            $sql = "INSERT INTO tbl_pendingrequest(studentNumber,requesterName,studentCourse,studentEmail,requestDetails,requestType) VALUES('$sNumber','$sName','$sCourse','$sEmail','$sDetails','$sOptions')";
            $result = mysqli_query($mysqli, $sql);

            header("Location: redirects/request-success-sub.php");
    }
    }
?>