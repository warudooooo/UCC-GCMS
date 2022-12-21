<?php 

if (isset($_POST['delete_scheduledapp'])) {
	
	$appID = $_POST['appID'];
	$appsName = $_POST['appsName'];
	$appsNumber = $_POST['appsNumber'];
	$appsCourse = $_POST['appsCourse'];
	$appsEmail = $_POST['appsEmail'];
    $appReason = ($_POST['appReason']);
    $appType = ($_POST['appType']);
    $appDetails = ($_POST['appDetails']);
	$appDate = ($_POST['appDate']);

	$appID = $mysqli->real_escape_string($appID);
	$appsName = $mysqli->real_escape_string($appsName);
	$appsNumber = $mysqli->real_escape_string($appsNumber);
	$appsCourse = $mysqli->real_escape_string($appsCourse);
	$appsEmail = $mysqli->real_escape_string($appsEmail);
    $appReason = $mysqli->real_escape_string($appReason);
    $appType = $mysqli->real_escape_string($appType);
    $appDetails = $mysqli->real_escape_string($appDetails);
	$appDate = $mysqli->real_escape_string($appDate);

	$archive = "INSERT INTO tbl_delapprovedappointments(appointmentID,studentNumber,studentName,studentCourse,studentEmail,appointmentSchedule,appointmentReason,appointmentType,appointmentDetails)
    VALUES('$appID','$appsNumber','$appsName','$appsCourse','$appsEmail','$appDate','$appReason','$appType','$appDetails')";
	$arc = mysqli_query($mysqli, $archive);
	$delete = "DELETE FROM tbl_approvedappointments WHERE appointmentID='$appID'";
	$del = mysqli_query($mysqli, $delete);
	$activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','DELETED SCHEDULED APPOINTMENT [ Details: $appsName- $appDate ]')";
	$runActivity = mysqli_query($mysqli, $activity);
}

if (isset($_POST['submit'])) {
	$hID = $_POST['hID'];
	$sName = $_POST['sName'];
	$sNumber = $_POST['sNumber'];
	$sCourse = $_POST['sCourse'];
	$sEmail = $_POST['sEmail'];
	$pIncharge = ($_POST['pIncharge']);
	$remarks = ($_POST['remarks']);
    $aReason = ($_POST['aReason']);
    $aType = ($_POST['aType']);
    $Details = ($_POST['Details']);


	$hID = $mysqli->real_escape_string($hID);
	$sName = $mysqli->real_escape_string($sName);
	$sNumber = $mysqli->real_escape_string($sNumber);
	$sCourse = $mysqli->real_escape_string($sCourse);
	$sEmail = $mysqli->real_escape_string($sEmail);
	$pIncharge = $mysqli->real_escape_string($pIncharge);
	$remarks = $mysqli->real_escape_string($remarks);
    $aReason = $mysqli->real_escape_string($aReason);
    $aType = $mysqli->real_escape_string($aType);
    $Details = $mysqli->real_escape_string($Details);

    $add = "INSERT INTO tbl_appointmenthistory(studentNumber,studentName,studentCourse,studentEmail,personIncharge,remarks,appointmentReason,appointmentType,appointmentDetails)
    VALUES('$sNumber','$sName','$sCourse','$sEmail','$pIncharge','$remarks','$aReason','$aType','$Details')";
	$delete = "DELETE FROM tbl_approvedappointments WHERE appointmentID='$hID'";
    $result = mysqli_query($mysqli, $add);
	$del = mysqli_query($mysqli, $delete);
	$activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','MARKED AS DONE (APPOINTMENT) [ Details: $sName ]')";
	$runActivity = mysqli_query($mysqli, $activity);
}
?>