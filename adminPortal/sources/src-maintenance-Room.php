<?php
use voku\helper\AntiXSS;

require_once '../vendor/autoload.php';

$antiXss = new AntiXSS();
$msg = "";
if (isset($_POST['addRoom'])) {
    $pName = filter_input(INPUT_POST, 'pName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pName = $antiXss->xss_clean($pName);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_rooms WHERE roomName='{$pName}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Room already exists</h3></div>';
    } else {
        $add = "INSERT INTO tbl_rooms(roomName)
        VALUES('$pName')";
        $result = mysqli_query($mysqli, $add);


        $after = "
Room Name: $pName
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Addedd Room Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);
    }
}

if (isset($_POST['editRoom'])) {

    $pID = filter_input(INPUT_POST, 'pID', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pName = filter_input(INPUT_POST, 'pName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $pID = $antiXss->xss_clean($pID);
    $pName = $antiXss->xss_clean($pName);

    $edit = "UPDATE `tbl_rooms` SET roomName='$pName' WHERE RoomID='$pID'";
    $result = mysqli_query($mysqli, $edit);

    $after = "
Room Name: $pName
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Edited Room Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);

}

if (isset($_POST['deleteRoom'])) {

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = filter_input(INPUT_POST, 'pName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pName = $antiXss->xss_clean($pName);

    $after = "
Room Name: $pName
            ";
    
            $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                        VALUES('$admName','','$after','Deleted Room Successfully.')";
            $runActivity = mysqli_query($mysqli, $activity);

    $delete = "DELETE FROM tbl_rooms WHERE RoomID = '$pID'";
    $result = mysqli_query($mysqli, $delete);
}
