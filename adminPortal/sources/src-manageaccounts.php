<?php
$msg = "";
if (isset($_POST['submit'])) {

    $sName = $mysqli->real_escape_string($_POST['sName']);
    $sEmail = $mysqli->real_escape_string($_POST['sEmail']);
    $userName = $mysqli->real_escape_string($_POST['userName']);
    $sPassword = $mysqli->real_escape_string(md5($_POST['sPassword']));
    $confPassword = $mysqli->real_escape_string(md5($_POST['confPassword']));


    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentName='{$sName}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This User already exists.</h3></div>';
    } else if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentEmail='{$sEmail}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Email already exists.</h3></div>';
    } else if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$userName}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Username already exists.</h3></div>';
    } else if ($sPassword != $confPassword) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>Password does not match.</h3></div>';
    } else {
        $sql = "INSERT INTO tbl_students(studentName,studentNumber,studentCourse,studentVerified,studentEmail,studentPassword,userType,vkey,userStatus)
    VALUES('$sName','$userName','$admName','yes','$sEmail','$sPassword','admin','','1')";
        $result = mysqli_query($mysqli, $sql);
        $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','ADDED ADMINISTRATOR [ Details: $sName ]')";
        $runActivity = mysqli_query($mysqli, $activity);
    }
}

// =======================================


if (isset($_POST['delete_permanent'])) {
    $sNumber = $_POST['sNumber'];
    $sName = $_POST['sName'];

    $sNumber = $mysqli->real_escape_string($sNumber);
    $sName = $mysqli->real_escape_string($sName);

    if ($admName == $sName) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>You cannot delete your own account.</h3></div>';
    } else {
        $delete = "DELETE FROM tbl_students WHERE studentNumber = '$sNumber'";
        $result = mysqli_query($mysqli, $delete);
        $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','DELETED ADMINISTRATOR [ Details: $sName ]')";
        $runActivity = mysqli_query($mysqli, $activity);
    }
}
