<?php
if (isset($_POST['submit'])) {
    
    $sName = $_POST['sName'];
    $sNumber = $_POST['sNumber'];
    $sCourse = $_POST['sCourse'];
    $sVerified = 'no'; 

    $sName = $mysqli->real_escape_string($sName);
    $sNumber = $mysqli->real_escape_string($sNumber);
    $sCourse = $mysqli->real_escape_string($sCourse);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentName='{$sName}'")) > 0) {
    	$msg = "<div class='eml' style='margin-bottom: 10px; margin-top: -20px;'>This Student already exists.</div>";
    } else if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
    	$msg = "<div class='eml' style='margin-bottom: -5px; margin-top: -20px;'>This Student Number already exists.</div>";
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

    $sName = $mysqli->real_escape_string($sName);
    $sNumber = $mysqli->real_escape_string($sNumber);
    $sCourse = $mysqli->real_escape_string($sCourse);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
    $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='',studentPassword='',vkey='',studentVerified='no',userType='user' WHERE studentNumber='$sNumber'";
	$result = mysqli_query($mysqli, $sql);
    }
}

if (isset($_POST['delete_student'])) {
    $sNumber = $_POST['sNumber'];

    $sNumber = $mysqli->real_escape_string($sNumber);

	$delete = "DELETE FROM tbl_students WHERE studentNumber = '$sNumber'";
    $result = mysqli_query($mysqli, $delete);
}
?>
