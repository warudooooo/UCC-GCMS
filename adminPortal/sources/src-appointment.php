<?php 
if (isset($_POST['submit'])) {
	$sName = $_POST['sName'];
	$sNumber = $_POST['sNumber'];
	$sCourse = $_POST['sCourse'];
	$sEmail = $_POST['sEmail'];
	$aSchedule = md5($_POST['aSchedule']);
    $aReason = md5($_POST['aReason']);
    $aType = md5($_POST['aType']);
    $aDetails = md5($_POST['aDetails']);


	
	$sName = $mysqli->real_escape_string($sName);
	$sNumber = $mysqli->real_escape_string($sNumber);
	$sCourse = $mysqli->real_escape_string($sCourse);
	$sEmail = $mysqli->real_escape_string($sEmail);
	$aSchedule = $mysqli->real_escape_string($aSchedule);
    $aReason = $mysqli->real_escape_string($aReason);
    $aType = $mysqli->real_escape_string($aType);
    $aDetails = $mysqli->real_escape_string($aDetails);

    $sql = "INSERT INTO tbl_approvedappointments(studentNumber,studentName,studentCourse,studentEmail,appointmentSchedule,appointmentReason,appointmentType,appointmentDetails) 
    VALUES('$sNumber','$sName','$sCourse','$sEmail','$aSchedule','$aReason','$aType','$aDetails')";
    $result = mysqli_query($mysqli, $sql);

}
?>