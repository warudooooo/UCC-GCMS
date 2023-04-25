<?php
$msg = "";
if (isset($_POST['addRoom'])) {
    $pName = $mysqli->real_escape_string($_POST['pName']);

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

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = $mysqli->real_escape_string($_POST['pName']);

    $edit = "UPDATE `tbl_rooms` SET roomName='$pName' WHERE RoomID='$pID'";
    $result = mysqli_query($mysqli, $edit);

    $after = "
Room Name: $pName
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Edited Room Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);

}

if (isset($_POST['viewsched'])) {

    $_SESSION['pID'] = $_POST["pID"];
    $_SESSION['pName'] = $_POST["pName"];
}

if (isset($_POST['deleteRoom'])) {

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = $mysqli->real_escape_string($_POST['pName']);

    $after = "
Room Name: $pName
            ";
    
            $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                        VALUES('$admName','','$after','Deleted Room Successfully.')";
            $runActivity = mysqli_query($mysqli, $activity);

    $delete = "DELETE FROM tbl_rooms WHERE RoomID = '$pID'";
    $result = mysqli_query($mysqli, $delete);
}
