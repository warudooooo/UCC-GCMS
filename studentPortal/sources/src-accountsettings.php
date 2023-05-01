<?php

use voku\helper\AntiXSS;

require_once '../vendor/autoload.php'; // example path

$antiXss = new AntiXSS();

$msg = "";

if (isset($_POST['account_submit'])) {
    $ID = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sNumber = filter_input(INPUT_POST, 'sNumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sName = filter_input(INPUT_POST, 'sName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sCourse = filter_input(INPUT_POST, 'sCourse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sEmail = filter_input(INPUT_POST, 'sEmail', FILTER_SANITIZE_EMAIL);
    $oldPass = $mysqli->real_escape_string($_POST['oldPass']);
    $confPass = $mysqli->real_escape_string(md5($_POST['confPass']));

    $ID =  $antiXss->xss_clean($ID);
    $sNumber =  $antiXss->xss_clean($sNumber);
    $sName =  $antiXss->xss_clean($sName);
    $sCourse =  $antiXss->xss_clean($sCourse);
    $sEmail =  $antiXss->xss_clean($sEmail);

    $check = $antiXss->isXssFound();
    if ($confPass == $oldPass) {
        if ($sNumber == "" || $sName == "" || $sEmail == "" || $sCourse == "") {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
        } else {
            $sql = "UPDATE `tbl_students` SET studentName='$sName',studentEmail='$sEmail',studentNumber='$sNumber',studentCourse='$sCourse' WHERE ID='$ID'";
            $result = mysqli_query($mysqli, $sql);
            if ($result) {
                $msg = '<div class="suc" style="display: inline-block; text-align: center; color: #38b000; margin-left: 0px; "><h3>Update Successful.</h3></div>';
            } else {
                $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
            }
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
