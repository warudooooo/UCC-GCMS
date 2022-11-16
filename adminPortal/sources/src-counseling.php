<?php 
if (isset($_POST['delete_counseling'])) {

	$counsID = $_POST['counsID'];
	$counsName = $_POST['counsName'];
	$counsNumber = $_POST['counsNumber'];
	$counsCourse = $_POST['counsCourse'];
	$counsEmail = $_POST['counsEmail'];
    $counsType = ($_POST['counsType']);
    $counsDetails = ($_POST['counsDetails']);

	$counsID = $mysqli->real_escape_string($counsID);
	$counsName = $mysqli->real_escape_string($counsName);
	$counsNumber = $mysqli->real_escape_string($counsNumber);
	$counsCourse = $mysqli->real_escape_string($counsCourse);
	$counsEmail = $mysqli->real_escape_string($counsEmail);
    $counsType = $mysqli->real_escape_string($counsType);
    $counsDetails = $mysqli->real_escape_string($counsDetails);

    $add = "INSERT INTO tbl_delpendingcounsellings(studentNumber,requesterName,studentCourse,studentEmail,counsellingType,counsellingDetails)
    VALUES('$counsNumber','$counsName','$counsCourse','$counsEmail','$counsType','$counsDetails')";
	$delete = "DELETE FROM tbl_pendingcounsellings WHERE ID='$counsID'";
    $result = mysqli_query($mysqli, $add);
	$del = mysqli_query($mysqli, $delete);

}

if (isset($_POST['submit'])) {

	$cID = $_POST['cID'];
	$sName = $_POST['sName'];
	$sNumber = $_POST['sNumber'];
	$sCourse = $_POST['sCourse'];
	$sEmail = $_POST['sEmail'];
	$cSchedule = ($_POST['cSchedule']);
    $cType = ($_POST['cType']);
    $Details = ($_POST['Details']);

	$cID = $mysqli->real_escape_string($cID);
	$sName = $mysqli->real_escape_string($sName);
	$sNumber = $mysqli->real_escape_string($sNumber);
	$sCourse = $mysqli->real_escape_string($sCourse);
	$sEmail = $mysqli->real_escape_string($sEmail);
	$cSchedule = $mysqli->real_escape_string($cSchedule);
    $cType = $mysqli->real_escape_string($cType);
    $Details = $mysqli->real_escape_string($Details);

    $add = "INSERT INTO tbl_approvedcounsellings(studentNumber,requesterName,studentCourse,studentEmail,counsellingSchedule,counsellingType,counsellingDetails)
    VALUES('$sNumber','$sName','$sCourse','$sEmail','$cSchedule','$cType','$Details')";
	$delete = "DELETE FROM tbl_pendingcounsellings WHERE ID='$cID'";
    $result = mysqli_query($mysqli, $add);
	$del = mysqli_query($mysqli, $delete);

}
?>