<?php
$msg = "";
if (isset($_POST['submit'])) {

    $sName = $mysqli->real_escape_string($_POST['sName']);
    $sEmail = $mysqli->real_escape_string($_POST['sEmail']);
    $userName = $mysqli->real_escape_string($_POST['userName']);
    $sPassword = $mysqli->real_escape_string(md5($_POST['sPassword']));
    $confPassword = $mysqli->real_escape_string(md5($_POST['confPassword']));


    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentName='{$sName}'")) > 0) {
        $msg = '<div class="eml" style="width: 100%; display: inline-block; text-align: center; color: crimson;"><h3>This User already exists.</h3></div>';
    } else if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentEmail='{$sEmail}'")) > 0) {
        $msg = '<div class="eml" style="width: 100%; display: inline-block; text-align: center; color: crimson;"><h3>This Email already exists.</h3></div>';
    } else if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$userName}'")) > 0) {
        $msg = '<div class="eml" style="width: 100%; display: inline-block; text-align: center; color: crimson;"><h3>This Username already exists.</h3></div>';
    } else if ($sPassword != $confPassword) {
        $msg = '<div class="eml" style="width: 100%; display: inline-block; text-align: center; color: crimson;"><h3>Password does not match.</h3></div>';
    } else {
        $sql = "INSERT INTO tbl_students(studentName,studentNumber,studentCourse,studentVerified,studentEmail,studentPassword,userType,vkey,userStatus)
    VALUES('$sName','$userName','$admName','yes','$sEmail','$sPassword','admin','','1')";
        $result = mysqli_query($mysqli, $sql);

        $after = "
Administrator Name: $sName
User Name: $userName
Email: $sEmail
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Added Administrator Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);

        header("location: manageaccounts.php");
    }
}

if (isset($_POST['editAdmin'])) {

    $sName = $mysqli->real_escape_string($_POST['sName']);
    $sEmail = $mysqli->real_escape_string($_POST['sEmail']);
    $userName = $mysqli->real_escape_string($_POST['userName']);
    $ID = $mysqli->real_escape_string($_POST['ID']);
    $adminPassword = $mysqli->real_escape_string(md5($_POST['adminPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);


    if ($adminPassword == $curPassword) {

        $after = "
Administrator Name: $sName
User Name: $userName
Email: $sEmail
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Edited Administrator Account Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);

        $sql = "UPDATE tbl_students SET studentNumber='$userName', studentName='$sName', studentEmail='$sEmail' WHERE ID='$ID'";
        $result = mysqli_query($mysqli, $sql);

        header("location: manageaccounts.php?edit_success=true");
    } else{
        $msg = '<div class="eml" style="width: 100%; display: inline-block; text-align: center; color: crimson;"><h3>Incorrect Password.</h3></div>';
    }
}


// =======================================


if (isset($_POST['delete_permanent'])) {
    $userNames = $_POST['userNames'];
    $sName = $_POST['sName'];

    $userNames = $mysqli->real_escape_string($userNames);
    $sName = $mysqli->real_escape_string($sName);

    if ($admName == $sName) {
        $msg = '<div class="eml" style="width: 100%; display: inline-block; text-align: center; color: crimson;"><h3>You cannot delete your own account.</h3></div>';
    } else {

        $after = "
Administrator Name: $sName
User Name: $userNames
                ";
        
                $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                            VALUES('$admName','','$after','Deleted Administrator Successfully.')";
                $runActivity = mysqli_query($mysqli, $activity);


        $delete = "DELETE FROM tbl_students WHERE studentNumber = '$userNames'";
        $result = mysqli_query($mysqli, $delete);

        header("location: manageaccounts.php?delete_success=true");
    }
}
