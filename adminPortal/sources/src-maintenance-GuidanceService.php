<?php
$msg = "";
if (isset($_POST['addService'])){
    $pName = $mysqli->real_escape_string($_POST['pName']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_counselingservices WHERE serviceName='{$pName}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Service is already exists</h3></div>';
    }else{
        $add = "INSERT INTO tbl_counselingservices(serviceName)
        VALUES('$pName')";
        $result = mysqli_query($mysqli, $add);
        // $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','ADDED PROCTOR [ Details: $pName ]')";
	    // $runActivity = mysqli_query($mysqli, $activity);
    }
}

if (isset($_POST['editService'])){

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = $mysqli->real_escape_string($_POST['pName']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_counselingservices WHERE serviceName='{$pName}'")) > 0) {
    	$msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Service already exists</h3></div>';
    }else{
        $edit = "UPDATE `tbl_counselingservices` SET serviceName='$pName' WHERE serviceID='$pID'";
        $result = mysqli_query($mysqli, $edit);
        // $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','EDITED PROCTOR DETAILS [ Details: $pName ]')";
	    // $runActivity = mysqli_query($mysqli, $activity);
    }
}


if (isset($_POST['deleteService'])){

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = $mysqli->real_escape_string($_POST['pName']);

	$delete = "DELETE FROM tbl_counselingservices WHERE serviceID = '$pID'";
    $result = mysqli_query($mysqli, $delete);

    // $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','DELETED PROCTOR [ Details: $pName ]')";
	// $runActivity = mysqli_query($mysqli, $activity);
}

?>