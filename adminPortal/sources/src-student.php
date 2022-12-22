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
        $sql = "INSERT INTO tbl_students(studentName,studentNumber,studentCourse,studentVerified,studentEmail,studentPassword,userType,vkey,userStatus)
    VALUES('$sName','$sNumber','$sCourse','$sVerified','','','user','','1')";
        $result = mysqli_query($mysqli, $sql);
        $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','ADDED STUDENT [ Details: $sName ]')";
        $runActivity = mysqli_query($mysqli, $activity);
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: green; margin-left: 500px;"><h3>Success.</h3></div>';
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
    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
        if ($admPassword == $curPassword) {
            $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='$sEmail',studentPassword='$sPassword',vkey='',studentVerified='yes',userType='user',userStatus='1' WHERE studentNumber='$sNumber'";
            $result = mysqli_query($mysqli, $sql);
            $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','EDITED STUDENT [ Details: $sName ]')";
            $runActivity = mysqli_query($mysqli, $activity);
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: green; margin-left: 500px;"><h3>Success.</h3></div>';
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 500px;"><h3>Inorrect Password.</h3></div>';
        }
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
    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
        if ($admPassword == $curPassword) {
            $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='$sEmail',studentPassword='$sPassword',vkey='$vkey',studentVerified='no',userType='user',userStatus='1' WHERE studentNumber='$sNumber'";
            $result = mysqli_query($mysqli, $sql);
            $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','EDITED STUDENT [ Details: $sName ]')";
            $runActivity = mysqli_query($mysqli, $activity);
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: green; margin-left: 500px;"><h3>Success.</h3></div>';
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 500px;"><h3>Inorrect Password.</h3></div>';
        }
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
    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
        if ($admPassword == $curPassword) {
            $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='$sEmail',studentPassword='',vkey='',studentVerified='no',userType='user',userStatus='1' WHERE studentNumber='$sNumber'";
            $result = mysqli_query($mysqli, $sql);
            $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','EDITED STUDENT [ Details: $sName ]')";
            $runActivity = mysqli_query($mysqli, $activity);
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: green; margin-left: 500px;"><h3>Success.</h3></div>';
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 500px;"><h3>Inorrect Password.</h3></div>';
        }
    }
}

if (isset($_POST['delete_student'])) {
    $sName = $_POST['sName'];
    $sNumber = $_POST['sNumber'];
    $sEmail = $_POST['sEmail'];
    $sCourse = $_POST['sCourse'];
    $sPassword = $_POST['sPassword'];
    $vkey = $_POST['vkey'];
    $sVerified = $_POST['sVerified'];

    $sName = $mysqli->real_escape_string($sName);
    $sNumber = $mysqli->real_escape_string($sNumber);
    $sEmail = $mysqli->real_escape_string($sEmail);
    $sCourse = $mysqli->real_escape_string($sCourse);
    $sPassword = $mysqli->real_escape_string($sPassword);
    $vkey = $mysqli->real_escape_string($vkey);
    $sVerified = $mysqli->real_escape_string($sVerified);
    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);


    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
        if ($admPassword == $curPassword) {
            $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='$sEmail',studentPassword='$sPassword',vkey='$vkey',studentVerified='$sVerified',userType='user',userStatus='0' WHERE studentNumber='$sNumber'";
            $result = mysqli_query($mysqli, $sql);
            $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','MARKED AS INACTIVE STUDENT[ Details: $sName ]')";
            $runActivity = mysqli_query($mysqli, $activity);
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: green; margin-left: 500px;"><h3>Success.</h3></div>';
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 500px;"><h3>Inorrect Password.</h3></div>';
        }
    }
}

if (isset($_POST['markas_active'])) {
    $sName = $_POST['sName'];
    $sNumber = $_POST['sNumber'];
    $sEmail = $_POST['sEmail'];
    $sCourse = $_POST['sCourse'];
    $sPassword = $_POST['sPassword'];
    $vkey = $_POST['vkey'];
    $sVerified = $_POST['sVerified'];

    $sName = $mysqli->real_escape_string($sName);
    $sNumber = $mysqli->real_escape_string($sNumber);
    $sEmail = $mysqli->real_escape_string($sEmail);
    $sCourse = $mysqli->real_escape_string($sCourse);
    $sPassword = $mysqli->real_escape_string($sPassword);
    $vkey = $mysqli->real_escape_string($vkey);
    $sVerified = $mysqli->real_escape_string($sVerified);
    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
        if ($admPassword == $curPassword) {
            $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='$sEmail',studentPassword='$sPassword',vkey='$vkey',studentVerified='$sVerified',userType='user',userStatus='1' WHERE studentNumber='$sNumber'";
            $result = mysqli_query($mysqli, $sql);
            $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','MARKED AS ACTIVE STUDENT [ Details: $sName ]')";
            $runActivity = mysqli_query($mysqli, $activity);
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: green; margin-left: 500px;"><h3>Success.</h3></div>';
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 500px;"><h3>Inorrect Password.</h3></div>';
        }
    }
}

// =======================================


if (isset($_POST['delete_permanent'])) {
    $sNumber = $_POST['sNumber'];
    $sName = $_POST['sName'];

    $sNumber = $mysqli->real_escape_string($sNumber);
    $sName = $mysqli->real_escape_string($sName);
    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    if ($admPassword == $curPassword) {
        $delete = "DELETE FROM tbl_students WHERE studentNumber = '$sNumber'";
        $result = mysqli_query($mysqli, $delete);
        $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','DELETED STUDENT [ Details: $sName ]')";
        $runActivity = mysqli_query($mysqli, $activity);
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: green; margin-left: 500px;"><h3>Success.</h3></div>';
    } else {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 500px;"><h3>Inorrect Password.</h3></div>';
    }
}

if (isset($_POST['sanction_btn'])) {

    $sancName = $_POST["sName"];
    $sancNumber = $_POST["sNumber"];
    $sancCourse = $_POST["sCourse"];
    $sanctEmail = $_POST["stEmail"];
}

if (isset($_POST['counsel_btn'])) {

    $_SESSION['sName'] = $_POST["sName"];
    $_SESSION['sNumber'] = $_POST["sNumber"];
    $_SESSION['sCourse'] = $_POST["sCourse"];
    $_SESSION['stEmail'] = $_POST["stEmail"];
}
