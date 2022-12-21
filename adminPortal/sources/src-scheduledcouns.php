<?php 

if (isset($_POST['schedulecouns_delete'])) {
	$scdID = $_POST['scdID'];
	$scdName = $_POST['scdName'];
	$scdNumber = $_POST['scdNumber'];
	$scdCourse = $_POST['scdCourse'];
	$scdEmail = $_POST['scdEmail'];
	$scdSchedule = ($_POST['scdSchedule']);
	$scdDateapproved = ($_POST['scdDateapproved']);
    $scdType = ($_POST['scdType']);
    $scdDetails = ($_POST['scdDetails']);


	$scdID = $mysqli->real_escape_string($scdID);
	$scdName = $mysqli->real_escape_string($scdName);
	$scdNumber = $mysqli->real_escape_string($scdNumber);
	$scdCourse = $mysqli->real_escape_string($scdCourse);
	$scdEmail = $mysqli->real_escape_string($scdEmail);
	$scdSchedule = $mysqli->real_escape_string($scdSchedule);
	$scdDateapproved = $mysqli->real_escape_string($scdDateapproved);
    $scdType = $mysqli->real_escape_string($scdType);
    $scdDetails = $mysqli->real_escape_string($scdDetails);

    $add = "INSERT INTO tbl_delapprovedcounsellings(studentNumber,requesterName,studentCourse,studentEmail,counsellingSchedule,counsellingType,counsellingDetails,dateApproved)
    VALUES('$scdNumber','$scdName','$scdCourse','$scdEmail','$scdSchedule','$scdType','$scdDetails','$scdDateapproved')";
	$delete = "DELETE FROM tbl_approvedcounsellings WHERE counsellingID='$scdID'";
    $result = mysqli_query($mysqli, $add);
	$del = mysqli_query($mysqli, $delete);
	$activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','DELETED SCHEDULED COUNSELING [ Details: $scdName- $scdSchedule ]')";
	$runActivity = mysqli_query($mysqli, $activity);

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
	$activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','MARKED AS DONE (COUNSELING) [ Details: $sName ]')";
	$runActivity = mysqli_query($mysqli, $activity);
}
?>