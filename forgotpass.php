<?php
require 'vendor/autoload.php';
include 'sources/src-forgotpass.php';
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="src/styles/loginStyle.css">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="icon" href="src/images/uccLogo.png">
</head>

<body>

	<main>
		<div class="mainBox">
			<div class="innerBox">
				<div class="logregForm">

					<form method="POST" action="" autocomplete="off" class="signupForm">
						<div class="uccLogo">
							<img src="src/images/uccLogo.png">
							<h4>University of Caloocan City Guidance and Counseling</h4>
						</div>
						<div class="heading" style="margin-bottom: 20px;">
							<h2>Forgot Password.</h2>
							<h6>Already have an account?</h6>
							<a href="index.php" class="toggle">Sign in</a>
						</div>
						<div class="actualForm">
							<div class="inputWrap">
								<input type="text" id="sNumber" style="text-transform: uppercase;" class="txtbxFields" name="sNumber" autocomplete="off">
								<label> Student Number (Ex: 201xxxxx-M) </label>
							</div>
							<div class="inputWrap">
								<input type="email" class="txtbxFields" minlength="8" name="sEmail" autocomplete="off" required>
								<label> Email </label>
							</div>
							<?php echo $msg; ?>
						</div>
						<input type="submit" name="submit" value="Send Reset Link" class="btnSignin">
						<p class="txtForgot" style="margin-top: -20px;"></p>
					</form>
				</div>
				<div class="movingForm">
					<div class="imageContainer">
						<img src="src/images/loginPage/image3.jpg" class="image img-1 show" />
					</div>

					<div class="textSlider">
						<div class="textWrap">
							<div class="textGroup">
								<h1>Address</h1>
								<h2>Biglang Awa St Cor 11th Ave Catleya,</h2>
								<h2>Caloocan, 1400 Metro Manila, Philippines</h2>
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