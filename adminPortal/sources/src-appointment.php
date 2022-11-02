<?php 
if (isset($_POST['delete_appointment'])) {
	$appID = $_POST['appID'];

	$appID = $mysqli->real_escape_string($appID);

	$delete = "DELETE FROM tbl_pendingappointments WHERE appointmentID='$appID'";
	$del = mysqli_query($mysqli, $delete);

}

if (isset($_POST['submit'])) {
	$aID = $_POST['aID'];
	$sName = $_POST['sName'];
	$sNumber = $_POST['sNumber'];
	$sCourse = $_POST['sCourse'];
	$sEmail = $_POST['sEmail'];
	$aSchedule = ($_POST['aSchedule']);
    $aReason = ($_POST['aReason']);
    $aType = ($_POST['aType']);
    $Details = ($_POST['Details']);


	$aID = $mysqli->real_escape_string($aID);
	$sName = $mysqli->real_escape_string($sName);
	$sNumber = $mysqli->real_escape_string($sNumber);
	$sCourse = $mysqli->real_escape_string($sCourse);
	$sEmail = $mysqli->real_escape_string($sEmail);
	$aSchedule = $mysqli->real_escape_string($aSchedule);
    $aReason = $mysqli->real_escape_string($aReason);
    $aType = $mysqli->real_escape_string($aType);
    $Details = $mysqli->real_escape_string($Details);

    $add = "INSERT INTO tbl_approvedappointments(studentNumber,studentName,studentCourse,studentEmail,appointmentSchedule,appointmentReason,appointmentType,appointmentDetails)
    VALUES('$sNumber','$sName','$sCourse','$sEmail','$aSchedule','$aReason','$aType','$Details')";
	$delete = "DELETE FROM tbl_pendingappointments WHERE appointmentID='$aID'";
    $result = mysqli_query($mysqli, $add);
	$del = mysqli_query($mysqli, $delete);

}
?>