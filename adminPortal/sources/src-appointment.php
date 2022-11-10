<?php 
if (isset($_POST['delete_appointment'])) {

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

	$archive = "INSERT INTO tbl_delpendingappointments(appointmentID,studentNumber,studentName,studentCourse,studentEmail,requestDate,appointmentReason,appointmentType,appointmentDetails)
    VALUES('$appID','$appsNumber','$appsName','$appsCourse','$appsEmail','$rDate','$appReason','$appType','$appDetails')";
	$arc = mysqli_query($mysqli, $archive);
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
    $result = mysqli_query($mysqli, $add);
	$delete = "DELETE FROM tbl_pendingappointments WHERE appointmentID='$aID'";
	$del = mysqli_query($mysqli, $delete);

}
?>