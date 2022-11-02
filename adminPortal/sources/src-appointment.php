<?php 
if (isset($_POST['submit'])) {
	$sName = $_POST['sName'];
	$sNumber = $_POST['sNumber'];
	$sCourse = $_POST['sCourse'];
	$sEmail = $_POST['sEmail'];
	$aSchedule = ($_POST['aSchedule']);
    $aReason = ($_POST['aReason']);
    $aType = ($_POST['aType']);
    $Details = ($_POST['Details']);


	
	$sName = $mysqli->real_escape_string($sName);
	$sNumber = $mysqli->real_escape_string($sNumber);
	$sCourse = $mysqli->real_escape_string($sCourse);
	$sEmail = $mysqli->real_escape_string($sEmail);
	$aSchedule = $mysqli->real_escape_string($aSchedule);
    $aReason = $mysqli->real_escape_string($aReason);
    $aType = $mysqli->real_escape_string($aType);
    $Details = $mysqli->real_escape_string($Details);

    $sql = "INSERT INTO tbl_approvedappointments(studentNumber,studentName,studentCourse,studentEmail,appointmentSchedule,appointmentReason,appointmentType,appointmentDetails) 
    VALUES('$sNumber','$sName','$sCourse','$sEmail','$aSchedule','$aReason','$aType','$Details')";
    $result = mysqli_query($mysqli, $sql);

}
?>