<?php
$msg = "";

if (isset($_POST['account_submit'])) {
    $sNumber = $mysqli->real_escape_string($_POST['sNumber']);
    $sName = $mysqli->real_escape_string($_POST['sName']);
    $sEmail = $mysqli->real_escape_string($_POST['sEmail']);
    $oldPass = $mysqli->real_escape_string($_POST['oldPass']);

    $confPass = $mysqli->real_escape_string(md5($_POST['confPass']));

    if ($confPass == $oldPass) {
        $sql = "UPDATE `tbl_students` SET studentName='$sName',studentEmail='$sEmail' WHERE studentNumber='$sNumber'";
        $result = mysqli_query($mysqli, $sql);
        if ($result) {
            $before = "$sName Changed account information successfully.";

            $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
            VALUES('$admName','$before','','Changes Successfully.')";
            $runActivity = mysqli_query($mysqli, $activity);
            $msg = '<div class="suc" style="display: inline-block; text-align: center; color: #38b000; margin-left: 0px; "><h3>Update Successful.</h3></div>';
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
        }
    } else {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Incorrect Password.</h3></div>';
    }
}

if (isset($_POST['password_submit'])) {
    $sNumber = $mysqli->real_escape_string($_POST['sNumber']);
    $oldPass = $mysqli->real_escape_string($_POST['oldPass']);
    $confPass = $mysqli->real_escape_string(md5($_POST['confPass']));

    $newPass = $mysqli->real_escape_string(md5($_POST['newPass']));
    $confirmPass = $mysqli->real_escape_string(md5($_POST['confirmPass']));
    if ($confPass == $oldPass) {
        if ($newPass == $confirmPass) {
            $sql = "UPDATE `tbl_students` SET studentPassword='$newPass' WHERE studentNumber='$sNumber'";
            $result = mysqli_query($mysqli, $sql);
            if ($result) {
                $before = "$sName Changed password successfully.";

                $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','$before','','Changes Successfully.')";
                $runActivity = mysqli_query($mysqli, $activity);
                $msg = '<div class="suc" style="display: inline-block; text-align: center; color: #38b000; margin-left: 0px; "><h3>Password Update Successful.</h3></div>';
            } else {
                $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
            }
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>New Password and Confirm Password does not match.</h3></div>';
        }
    } else {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Incorrect Old Password.</h3></div>';
    }
}
