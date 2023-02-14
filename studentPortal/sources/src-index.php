<?php 
if (isset($_POST['cancel_btn'])) {

	$appID = $mysqli->real_escape_string($_POST['appID']);

	$cancel = "UPDATE tbl_counselings SET counselingStatus = 'Cancelled' WHERE ID='$appID'";
    $result = mysqli_query($mysqli, $cancel);
	
// 	$activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','PERMANENTLY DELETED APPOINTMENT HISTORY')";
// 	$runActivity = mysqli_query($mysqli, $activity);
}
?>