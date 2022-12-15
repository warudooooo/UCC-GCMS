<?php
$msg = "";
if (isset($_POST['submit'])) {
    
    $sName = $_POST['sName'];
    $sNumber = $_POST['sNumber'];
    $sCourse = $_POST['sCourse'];
    $sVerified = 'no'; 

    $sName = $mysqli->real_escape_string($sName);
    $sNumber = $mysqli->real_escape_string($sNumber);
    $sCourse = $mysqli->real_escape_string($sCourse);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentName='{$sName}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Student already exists.</h3></div>';
    } else if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Student Number already exists.</h3></div>';
    } else {
    $sql = "INSERT INTO tbl_students(studentName,studentNumber,studentCourse,studentVerified,studentEmail,studentPassword,userType,vkey) VALUES('$sName','$sNumber','$sCourse','$sVerified','','','user','')";
    $result = mysqli_query($mysqli, $sql);
    }
}

if (isset($_POST['edit_student'])) {
    $sName = $_POST['sName'];
    $sNumber = $_POST['sNumber'];
    $sEmail = $_POST['sEmail'];
    $sCourse = $_POST['sCourse'];
    $sPassword = $_POST['sPassword'];

    $sName = $mysqli->real_escape_string($sName);
    $sNumber = $mysqli->real_escape_string($sNumber);
    $sEmail = $mysqli->real_escape_string($sEmail);
    $sCourse = $mysqli->real_escape_string($sCourse);
    $sPassword = $mysqli->real_escape_string($sPassword);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
    $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='$sEmail',studentPassword='$sPassword',vkey='',studentVerified='yes',userType='user' WHERE studentNumber='$sNumber'";
	$result = mysqli_query($mysqli, $sql);
    }
}

if (isset($_POST['unvedit_student'])) {
    $sName = $_POST['sName'];
    $sNumber = $_POST['sNumber'];
    $sEmail = $_POST['sEmail'];
    $sCourse = $_POST['sCourse'];
    $sPassword = $_POST['sPassword'];
    $vkey = $_POST['vkey'];


    $sName = $mysqli->real_escape_string($sName);
    $sNumber = $mysqli->real_escape_string($sNumber);
    $sEmail = $mysqli->real_escape_string($sEmail);
    $sCourse = $mysqli->real_escape_string($sCourse);
    $sPassword = $mysqli->real_escape_string($sPassword);
    $vkey = $mysqli->real_escape_string($vkey);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
    $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='$sEmail',studentPassword='$sPassword',vkey='$vkey',studentVerified='no',userType='user' WHERE studentNumber='$sNumber'";
	$result = mysqli_query($mysqli, $sql);
    }
}

if (isset($_POST['admedit_student'])) {
    $sName = $_POST['sName'];
    $sNumber = $_POST['sNumber'];
    $sCourse = $_POST['sCourse'];
    $sEmail = $_POST['sEmail'];

    $sName = $mysqli->real_escape_string($sName);
    $sNumber = $mysqli->real_escape_string($sNumber);
    $sCourse = $mysqli->real_escape_string($sCourse);
    $sEmail = $mysqli->real_escape_string($sEmail);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
    $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='$sEmail',studentPassword='',vkey='',studentVerified='no',userType='user' WHERE studentNumber='$sNumber'";
	$result = mysqli_query($mysqli, $sql);
    }
}

if (isset($_POST['delete_student'])) {
    $sNumber = $_POST['sNumber'];

    $sNumber = $mysqli->real_escape_string($sNumber);

	$delete = "DELETE FROM tbl_students WHERE studentNumber = '$sNumber'";
    $result = mysqli_query($mysqli, $delete);
}

if (isset($_POST['sanction_btn'])) {

    $sName = $_POST["sName"];
    $sNumber = $_POST["sNumber"];
    $sCourse = $_POST["sCourse"];
    $stEmail = $_POST["stEmail"];

}

if (isset($_POST['counsel_btn'])) {

    $_SESSION['sName'] = $_POST["sName"];
    $_SESSION['sNumber'] = $_POST["sNumber"];
    $_SESSION['sCourse'] = $_POST["sCourse"];
    $_SESSION['stEmail'] = $_POST["stEmail"];

}
