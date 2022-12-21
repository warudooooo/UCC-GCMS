<?php 
if (isset($_POST['appsubmit'])) {
	$hID = $_POST['hID'];

	$hID = $mysqli->real_escape_string($hID);

	$delete = "DELETE FROM tbl_appointmenthistory WHERE historyID='$hID'";
    $result = mysqli_query($mysqli, $delete);
	
	$activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','PERMANENTLY DELETED APPOINTMENT HISTORY')";
	$runActivity = mysqli_query($mysqli, $activity);
}

if (isset($_POST['counsubmit'])) {
	$hID = $_POST['hID'];

	$hID = $mysqli->real_escape_string($hID);

	$delete = "DELETE FROM tbl_counsellinghistory WHERE historyID='$hID'";
    $result = mysqli_query($mysqli, $delete);

	$activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','PERMANENTLY DELETED COUNSELING HISTORY')";
	$runActivity = mysqli_query($mysqli, $activity);
}
?>