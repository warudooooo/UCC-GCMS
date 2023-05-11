<?php
session_start();

use voku\helper\AntiXSS;

require_once '../vendor/autoload.php'; // example path

$antiXss = new AntiXSS();

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

        $sDetails = filter_input(INPUT_POST, 'sDetails', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $sOptions = filter_input(INPUT_POST, 'sOptions', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $cSchedule = filter_input(INPUT_POST, 'cSchedule', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $status ='Pending';
        $sDetails =  $antiXss->xss_clean($sDetails);
        $sOptions =  $antiXss->xss_clean($sOptions);
        $cSchedule =  $antiXss->xss_clean($cSchedule);
        //Insert to DB
        if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE counselingSchedule='{$cSchedule}' AND counselingStatus != 'Declined' AND counselingStatus != 'Cancelled'")) > 0) {
            $msg = '<div class="eml" style="text-align: center; color: crimson;"><h3>THE SCHEDULE YOU SELECTED IS NOT AVAILABLE AT THIS TIME.</h3></div>';
        } else if ($cSchedule == "") {
            $msg = '<div class="eml" style="text-align: center; color: crimson;"><h3>PLEASE SELECT A DATE</h3></div>';
        } else {
            if ($sDetails == "" || $sOptions == "" || $cSchedule == "") {
                $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
            } else {
                
                $stmt = $mysqli->prepare("INSERT INTO tbl_counselings(studentNumber,requesterName,studentCourse,studentEmail,counselingDetails,counselingType,counselingSchedule,counselingStatus)
                VALUES(?,?,?,?,?,?,?,?)");
                $stmt->bind_param("ssssssss",$sNumber,$sName,$sCourse,$sEmail,$sDetails,$sOptions,$cSchedule,$status);
                $stmt->execute();

                header("Location: redirects/request-success-sub.php");
            }
        }
    }
}
