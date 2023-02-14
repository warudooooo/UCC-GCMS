<?php 
if (isset($_POST['delete_appointment'])) {

	$aID = $_POST['aID'];
	$aID = $mysqli->real_escape_string($aID);

	$delete = "DELETE FROM tbl_delpendingappointments WHERE appointmentID='$aID'";
	$del = mysqli_query($mysqli, $delete);
	$activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','PERMANENTLY DELETE (APPOINTMENT)')";
	$runActivity = mysqli_query($mysqli, $activity);
}

if (isset($_POST['submit'])) {

	$appID = $_POST['appID'];
	$appsName = $_POST['appsName'];
	$appsNumber = $_POST['appsNumber'];
	$appsCourse = $_POST['appsCourse'];
	$appsEmail = $_POST['appsEmail'];
    $appReason = ($_POST['appReason']);
    $appType = ($_POST['appType']);
    $appDetails = ($_POST['appDetails']);
	$rDate = ($_POST['rDate']);

	$appID = $mysqli->real_escape_string($appID);
	$appsName = $mysqli->real_escape_string($appsName);
	$appsNumber = $mysqli->real_escape_string($appsNumber);
	$appsCourse = $mysqli->real_escape_string($appsCourse);
	$appsEmail = $mysqli->real_escape_string($appsEmail);
    $appReason = $mysqli->real_escape_string($appReason);
    $appType = $mysqli->real_escape_string($appType);
    $appDetails = $mysqli->real_escape_string($appDetails);
	$rDate = $mysqli->real_escape_string($rDate);

	$archive = "INSERT INTO tbl_pendingappointments(appointmentID,studentNumber,studentName,studentCourse,studentEmail,requestDate,appointmentReason,appointmentType,appointmentDetails)
    VALUES('$appID','$appsNumber','$appsName','$appsCourse','$appsEmail','$rDate','$appReason','$appType','$appDetails')";
	$arc = mysqli_query($mysqli, $archive);
	$delete = "DELETE FROM tbl_delpendingappointments WHERE appointmentID='$appID'";
	$del = mysqli_query($mysqli, $delete);
	$activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','RESTORED PENDING APPOINTMENT [ Details: $appsName- $rDate ]')";
	$runActivity = mysqli_query($mysqli, $activity);
}
?>


<!-- ============================ -->


<?php 
if (isset($_POST['sdelete_appointment'])) {

	$saID = $_POST['saID'];
	$saID = $mysqli->real_escape_string($saID);

	$delete = "DELETE FROM tbl_delapprovedappointments WHERE appointmentID='$saID'";
	$del = mysqli_query($mysqli, $delete);

	$activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','PERMANENTLY DELETE (APPROVED APPOINTMENT)')";
	$runActivity = mysqli_query($mysqli, $activity);
}

if (isset($_POST['ssubmit'])) {

	$appID = $_POST['appID'];
	$appsName = $_POST['appsName'];
	$appsNumber = $_POST['appsNumber'];
	$appsCourse = $_POST['appsCourse'];
	$appsEmail = $_POST['appsEmail'];
    $appReason = ($_POST['appReason']);
    $appType = ($_POST['appType']);
    $appDetails = ($_POST['appDetails']);
	$rDate = ($_POST['rDate']);

	$appID = $mysqli->real_escape_string($appID);
	$appsName = $mysqli->real_escape_string($appsName);
	$appsNumber = $mysqli->real_escape_string($appsNumber);
	$appsCourse = $mysqli->real_escape_string($appsCourse);
	$appsEmail = $mysqli->real_escape_string($appsEmail);
    $appReason = $mysqli->real_escape_string($appReason);
    $appType = $mysqli->real_escape_string($appType);
    $appDetails = $mysqli->real_escape_string($appDetails);
	$rDate = $mysqli->real_escape_string($rDate);

	$archive = "INSERT INTO tbl_approvedappointments(appointmentID,studentNumber,studentName,studentCourse,studentEmail,appointmentSchedule,appointmentReason,appointmentType,appointmentDetails)
    VALUES('$appID','$appsNumber','$appsName','$appsCourse','$appsEmail','$rDate','$appReason','$appType','$appDetails')";
	$arc = mysqli_query($mysqli, $archive);


	$delete = "DELETE FROM tbl_delapprovedappointments WHERE appointmentID='$appID'";
	$del = mysqli_query($mysqli, $delete);

	$activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','RESTORED APPROVED APPOINTMENT [ Details: $appsName- $rDate ]')";
	$runActivity = mysqli_query($mysqli, $activity);
}
?>