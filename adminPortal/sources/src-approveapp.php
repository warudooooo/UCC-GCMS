<?php 
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

    $add = "INSERT INTO tbl_history(studentNumber,studentName,studentCourse,studentEmail,personIncharge,remarks,appointmentReason,appointmentType,appointmentDetails)
    VALUES('$sNumber','$sName','$sCourse','$sEmail','$pIncharge','$remarks','$aReason','$aType','$Details')";
	$delete = "DELETE FROM tbl_approvedappointments WHERE appointmentID='$hID'";
    $result = mysqli_query($mysqli, $add);
	$del = mysqli_query($mysqli, $delete);

}
?>