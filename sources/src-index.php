<?php
session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
	header("Location: adminPortal/index.php");
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
//Login
if (isset($_POST['submit'])) {

	$sNumber = $_POST['sNumberPHP'];
	$sPassword = md5($_POST['sPasswordPHP']);

	$sNumber = $mysqli->real_escape_string($sNumber);
	$sPassword = $mysqli->real_escape_string($sPassword);

	$sql = "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}' AND studentPassword='{$sPassword}'";
	$result = mysqli_query($mysqli, $sql);
	$row = mysqli_fetch_assoc($result);
	if($sNumber == "" || $sPassword == ""){
		exit('Please fill up all the text fields.');
	} else if (mysqli_num_rows($result) === 1 && $row["userType"] == "user") {
		if (empty($row['vkey'])) {
			$_SESSION['SESSION_EMAIL'] = $sNumber;
			$_SESSION['SESSION_ROLE'] = $row["userType"]; 
			exit('<font color="green">Student login successful, you will be redirected in the dashboard page.</font>');
		} else {
			exit('<style="text-align: center;">Please wait for your account to be verified by the admin.</style>');
		}
	} else if(mysqli_num_rows($result) === 1 && $row["userType"] == "admin"){
		$_SESSION['SESSION_EMAIL'] = $sNumber;
		$_SESSION['SESSION_ROLE'] = $row["userType"];
		exit('<font color="green">Admin login successful, you will be redirected in the dashboard page.</font>');
	}else {
		exit('Student Number or Password does not match.');
	}
}

?>