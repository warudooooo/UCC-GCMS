<?php 
if (isset($_POST['delete_counseling'])) {
	$counsID = $_POST['counsID'];

	$counsID = $mysqli->real_escape_string($counsID);

	$delete = "DELETE FROM tbl_pendingcounsellings WHERE ID='$counsID'";
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