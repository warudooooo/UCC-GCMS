<?php 

if (isset($_POST['schedulecouns_delete'])) {
	$scdID = $_POST['scdID'];

	$scdID = $mysqli->real_escape_string($scdID);

	$delete = "DELETE FROM tbl_approvedcounsellings WHERE counsellingID='$scdID'";
	$del = mysqli_query($mysqli, $delete);

}

if (isset($_POST['submit'])) {

	$scID = $_POST['scID'];
	$sName = $_POST['sName'];
	$sNumber = $_POST['sNumber'];
	$sCourse = $_POST['sCourse'];
	$sEmail = $_POST['sEmail'];
	$pIncharge = ($_POST['pIncharge']);
	$remarks = ($_POST['remarks']);
    $scType = ($_POST['scType']);
    $Details = ($_POST['Details']);


	$scID = $mysqli->real_escape_string($scID);
	$sName = $mysqli->real_escape_string($sName);
	$sNumber = $mysqli->real_escape_string($sNumber);
	$sCourse = $mysqli->real_escape_string($sCourse);
	$sEmail = $mysqli->real_escape_string($sEmail);
	$pIncharge = $mysqli->real_escape_string($pIncharge);
	$remarks = $mysqli->real_escape_string($remarks);
    $scType = $mysqli->real_escape_string($scType);
    $Details = $mysqli->real_escape_string($Details);

    $add = "INSERT INTO tbl_counsellinghistory(studentNumber,studentName,studentCourse,studentEmail,personIncharge,remarks,counsellingType,counsellingDetails)
    VALUES('$sNumber','$sName','$sCourse','$sEmail','$pIncharge','$remarks','$scType','$Details')";
	$delete = "DELETE FROM tbl_approvedcounsellings WHERE counsellingID='$scID'";
    $result = mysqli_query($mysqli, $add);
	$del = mysqli_query($mysqli, $delete);

}
?>