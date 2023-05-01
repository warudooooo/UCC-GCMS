<?php
require '../vendor/autoload.php';

use voku\helper\AntiXSS;

$antiXss = new AntiXSS();
$msg = "";
if (isset($_POST['addService'])){
    $pName = filter_input(INPUT_POST, 'pName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pDesc = filter_input(INPUT_POST, 'pDesc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $pName = $antiXss->xss_clean($pName);
    $pDesc = $antiXss->xss_clean($pDesc);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_counselingservices WHERE serviceName='{$pName}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Service is already exists</h3></div>';
    }else{
        if ($pName == "" || $pDesc == "") {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
        } else {
        $add = "INSERT INTO tbl_counselingservices(serviceName,serviceDetails)
        VALUES('$pName','$pName')";
        $result = mysqli_query($mysqli, $add);
        
        $after = "
Service Name: $pName
Service Description: $pDesc
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Added Service Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);
        }
    }
}

if (isset($_POST['editService'])){

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = filter_input(INPUT_POST, 'pName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pDesc = filter_input(INPUT_POST, 'pDesc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $pName = $antiXss->xss_clean($pName);
    $pDesc = $antiXss->xss_clean($pDesc);
    if ($pName == "" || $pDesc == "") {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
    } else {
        $edit = "UPDATE `tbl_counselingservices` SET serviceName='$pName',serviceDetails='$pDesc' WHERE serviceID='$pID'";
        $result = mysqli_query($mysqli, $edit);
        $after = "
Service Name: $pName
Service Description: $pDesc
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Edited Service Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);
    }
}


if (isset($_POST['deleteService'])){

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = filter_input(INPUT_POST, 'pName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $pName = $antiXss->xss_clean($pName);
    if ($pName == "") {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
    } else {
    $after = "
Service Name: $pName
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Deleted Service Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);
	$delete = "DELETE FROM tbl_counselingservices WHERE serviceID = '$pID'";
    $result = mysqli_query($mysqli, $delete);
    }
}

?>