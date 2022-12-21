<?php 
if (isset($_POST['sanction_btn'])) {

    $sName = $_POST["sName"];
    $sNumber = $_POST["sNumber"];
    $sCourse = $_POST["sCourse"];
    $stEmail = $_POST["stEmail"];

}

if (isset($_POST['counsel_btn'])) {

    $sName = $_POST["sName"];
    $sNumber = $_POST["sNumber"];
    $sCourse = $_POST["sCourse"];
    $stEmail = $_POST["stEmail"];

}

if (isset($_POST['remove_sanction'])) {

    $ssID = $mysqli->real_escape_string($_POST['ssID']);

	$delete = "DELETE FROM tbl_sanctions WHERE sanctionID = '$ssID'";
    $result = mysqli_query($mysqli, $delete);
    
    $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','REMOVED SANCTION [ Details: $sName ]')";
	$runActivity = mysqli_query($mysqli, $activity);
}


if (isset($_POST['submit'])) {

	$sName = $mysqli->real_escape_string($_POST['sName']);
	$sNumber = $mysqli->real_escape_string($_POST['sNumber']);
	$sCourse = $mysqli->real_escape_string($_POST['sCourse']);
	$sEmail = $mysqli->real_escape_string($_POST['sEmail']);
	$sCase = $mysqli->real_escape_string($_POST['sCase']);
    $sSanction = $mysqli->real_escape_string($_POST['sSanction']);
    $sType = $mysqli->real_escape_string($_POST['sType']);
    $sMessage = $mysqli->real_escape_string($_POST['sMessage']);


	$add = "INSERT INTO tbl_sanctions(studentNumber,studentName,studentCourse,studentEmail,sanctionCase,sanction,sanctionType,sanctionMessage)
    VALUES('$sNumber','$sName','$sCourse','$sEmail','$sCase','$sSanction','$sType','$sMessage')";
    $result = mysqli_query($mysqli, $add);
    $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','SANCTIONED STUDENT [ Details: $sName ]')";
	$runActivity = mysqli_query($mysqli, $activity);
    header("Location: services.php");

}

?>