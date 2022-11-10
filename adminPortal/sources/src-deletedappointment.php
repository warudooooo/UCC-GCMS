<?php 
if (isset($_POST['delete_appointment'])) {

	$aID = $_POST['aID'];
	$aID = $mysqli->real_escape_string($aID);

	$delete = "DELETE FROM tbl_delpendingappointments WHERE appointmentID='$aID'";
	$del = mysqli_query($mysqli, $delete);
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

}
?>