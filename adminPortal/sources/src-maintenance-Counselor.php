<?php
require '../vendor/autoload.php';

use voku\helper\AntiXSS;

$antiXss = new AntiXSS();
$msg = "";
if (isset($_POST['addCounselor'])){
    $pName = filter_input(INPUT_POST, 'pName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pName = $antiXss->xss_clean($pName);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_counselors WHERE CounselorName='{$pName}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Counselor is already exists</h3></div>';
    }else{
        if ($pName == "") {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
        } else {
        $add = "INSERT INTO tbl_counselors(CounselorName)
        VALUES('$pName')";
        $result = mysqli_query($mysqli, $add);
        $after = "
Counselor Name: $pName
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Added Counselor Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);
        }
    }
}

if (isset($_POST['editCounselor'])){

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = filter_input(INPUT_POST, 'pName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $pName = $antiXss->xss_clean($pName);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_counselors WHERE CounselorName='{$pName}'")) > 0) {
    	$msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Proctor already exists</h3></div>';
    }else{
        if ($pName == "") {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
        } else {
        $edit = "UPDATE `tbl_counselors` SET CounselorName='$pName' WHERE counselorID='$pID'";
        $result = mysqli_query($mysqli, $edit);
        $after = "
        Counselor Name: $pName
                ";
        
                $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                            VALUES('$admName','','$after','Edited Counselor Successfully.')";
                $runActivity = mysqli_query($mysqli, $activity);
        }
    }
}


if (isset($_POST['deleteCounselor'])){

    $pID = $mysqli->real_escape_string($_POST['pID']);

    $pName = filter_input(INPUT_POST, 'pName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $pName = $antiXss->xss_clean($pName);

    $after = "
Counselor Name: $pName
        ";
        if ($pName == "") {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
        } else {
        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Deleted Counselor Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);

	$delete = "DELETE FROM tbl_counselors WHERE counselorID = '$pID'";
    $result = mysqli_query($mysqli, $delete);
        }
}

?>