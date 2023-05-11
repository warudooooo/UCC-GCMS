<?php
require 'vendor/autoload.php';

use voku\helper\AntiXSS;

$antiXss = new AntiXSS();

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

	$sNumber = filter_input(INPUT_POST, 'sNumberPHP', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$sPassword = md5(filter_input(INPUT_POST, 'sPasswordPHP', FILTER_DEFAULT));

	$sNumber = $antiXss->xss_clean($sNumber);
	$sPassword = $antiXss->xss_clean($sPassword);

	$stmt = $mysqli->prepare("SELECT * FROM tbl_students WHERE studentNumber = ? AND studentPassword = ?");
	$stmt->bind_param("ss", $sNumber, $sPassword);
	$stmt->execute();
	$result = $stmt->get_result();
	$data = $result->fetch_assoc();
	
	if($sNumber == "" || $sPassword == ""){
		exit('Please fill up all the text fields.');
	} else if (mysqli_num_rows($result) === 1 && $data["userType"] == "user") {
		if (empty($data['vkey'])) {
			$_SESSION['SESSION_EMAIL'] = $sNumber;
			$_SESSION['SESSION_ROLE'] = $data["userType"]; 
			exit('<font color="green">Student login successful, you will be redirected in the dashboard page.</font>');
		} else {
			exit('<style="text-align: center;">Please wait for your account to be verified by the Guidance.</style>');
		}
	} else if(mysqli_num_rows($result) === 1 && $data["userType"] == "admin"){
		$_SESSION['SESSION_EMAIL'] = $sNumber;
		$_SESSION['SESSION_ROLE'] = $data["userType"];
		exit('<font color="green">Admin login successful, you will be redirected in the dashboard page.</font>');
	}else {
		exit('Student Number or Password does not match.');
	}
}

?>