<?php 
if (isset($_POST['counsel_btn'])) {

    $_SESSION['sName'] = $_POST["sName"];
    $_SESSION['sNumber'] = $_POST["sNumber"];
    $_SESSION['sCourse'] = $_POST["sCourse"];
    $_SESSION['stEmail'] = $_POST["stEmail"];


}

if (isset($_POST['submit'])) {

	$sName = $mysqli->real_escape_string($_POST['sName']);
	$sNumber = $mysqli->real_escape_string($_POST['sNumber']);
	$sCourse = $mysqli->real_escape_string($_POST['sCourse']);
	$stEmail = $mysqli->real_escape_string($_POST['stEmail']);
	$cDetails = $mysqli->real_escape_string($_POST['cDetails']);
    $cType = $mysqli->real_escape_string($_POST['cType']);
    $cSchedule = $mysqli->real_escape_string($_POST['cSchedule']);


	$add = "INSERT INTO tbl_approvedcounsellings(studentNumber,requesterName,studentCourse,studentEmail,counsellingSchedule,counsellingType,counsellingDetails)
    VALUES('$sNumber','$sName','$sCourse','$stEmail','$cSchedule','$cType','$cDetails')";
    $result = mysqli_query($mysqli, $add);

    header("Location: services.php");
}

?>