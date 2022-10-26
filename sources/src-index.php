<?php
session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
	header("Location: index.php");
	die();
}
//DB connect
include 'config.php';
$msg = "";
//Signup Button
if (isset($_POST['signup'])) {
	if ($result) {
		header('location:register.php');
	}
}
//Check if email is verified
if (isset($_GET['verification'])) {
	if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE vkey='{$_GET['verification']}'")) > 0) {
		$query = mysqli_query($mysqli, "UPDATE tbl_students SET vkey='' WHERE vkey='{$_GET['verification']}'");
		$del = mysqli_query($mysqli, "UPDATE tbl_students SET studentVerified='yes'");
		if ($query) {
			$msg = "<div class='suc'>Verification Successful. You can now Log in.</div>";
		}
	} else {
		header("Location: index.php");
	}
}
//Login
if (isset($_POST['submit'])) {

	$sNumber = $_POST['sNumber'];
	$sPassword = md5($_POST['sPassword']);

	$mysqli = $mysqli;
	$sNumber = $mysqli->real_escape_string($sNumber);
	$sPassword = $mysqli->real_escape_string($sPassword);

	$sql = "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}' AND studentPassword='{$sPassword}'";
	$result = mysqli_query($mysqli, $sql);
	$row = mysqli_fetch_assoc($result);
	
	if($row["userType"] == "admin"){
		$_SESSION['SESSION_EMAIL'] = $sNumber;
		header("Location: adminPortal/index.php");
	} else if ($row["userType"] == "user") {
		$row = mysqli_fetch_assoc($result);

		if (empty($row['vkey'])) {
			$_SESSION['SESSION_EMAIL'] = $sNumber;
			header("Location: studentPortal/index.php");
		} else {
			$msg = "<div class='eml' style='margin-bottom: 2px; margin-top: -10px;'>Please verify your account first.</div>";
		}
	} else {
		$msg = "<div class='eml'>Student Number or Password does not match.</div>";
	}
}

?>