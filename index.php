<?php
session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
	header("Location: studentPortal/index.php");
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

	if($sNumber == "admin" || $sPassword == "admin123"){
		$_SESSION['SESSION_EMAIL'] = $sNumber;
		header("Location: adminPortal/index.php");
	} else if (mysqli_num_rows($result) === 1) {
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
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="src/styles/loginStyle.css">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UCC Guidance and Counseling</title>
	<link rel="icon" href="src/images/uccLogo.png">
</head>

<body>

	<main>
		<div class="mainBox">
			<div class="innerBox">
				<div class="logregForm">
					<form method="POST" action="" autocomplete="off" class="signinForm">
						<div class="uccLogo">
							<img src="src/images/uccLogo.png">
							<h4>University of Caloocan City Guidance and Counseling</h4>
						</div>
						<div class="heading">
							<h2>Welcome back, UCCnian!</h2>
							<h6>Not registered yet?</h6>
							<a href="register.php" class="toggle">Sign up</a>
						</div>
						<div class="actualForm">
							<div class="inputWrap">
								<input type="text" class="txtbxFields" minlength="4" name="sNumber" autocomplete="off" required>
								<label> Student Number (Ex: 201xxxxx-M) </label>
							</div>
							<div class="inputWrap">
								<input type="Password" class="txtbxFields" minlength="8" name="sPassword" autocomplete="off" required>
								<label> Password </label>
							</div>
							<?php echo $msg; ?>
							<input type="submit" name="submit" value="Sign In" class="btnSignin">
							<p class="txtForgot">Did you forgot your password? <a href="#"> Get help </a> signing in</p>
						</div>
					</form>
				</div>
				<div class="movingForm">
					<div class="imageContainer">
						<img src="src/images/loginPage/image3.jpg" class="image img-1 show" />
					</div>
					<div class="textSlider">
						<div class="textWrap">
							<div class="textGroup">
								<h2>You don’t have to control your thoughts. You just have to stop letting them control you.</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="src/scripts/loginScript.js"></script>
</body>

</html>