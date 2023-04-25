<?php
$msg = "";
if (isset($_POST['addService'])){
    $pName = $mysqli->real_escape_string($_POST['pName']);
    $pDesc = $mysqli->real_escape_string($_POST['pDesc']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_counselingservices WHERE serviceName='{$pName}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Service is already exists</h3></div>';
    }else{
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

if (isset($_POST['editService'])){

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = $mysqli->real_escape_string($_POST['pName']);
    $pDesc = $mysqli->real_escape_string($_POST['pDesc']);

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


if (isset($_POST['deleteService'])){

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = $mysqli->real_escape_string($_POST['pName']);

    $after = "
Service Name: $pName
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Deleted Service Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);
	$delete = "DELETE FROM tbl_counselingservices WHERE serviceID = '$pID'";
    $result = mysqli_query($mysqli, $delete);

}

?>