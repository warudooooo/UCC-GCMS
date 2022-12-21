<?php
require 'vendor/autoload.php';
include 'sources/src-register.php';
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
							<h2>Let's get started.</h2>
							<h6>Already have an account?</h6>
							<a href="index.php" class="toggle">Sign in</a>
						</div>
						<div class="actualForm">
							<div class="inputWrap">
								<input type="text" class="txtbxFields" minlength="4" name="sName" autocomplete="off" required>
								<label> Full Name (Ex: Dela Cruz, Juan M.)</label>
							</div>
							<div class="inputWrap">
								<input type="text" style="text-transform: uppercase;" class="txtbxFields" minlength="4" name="sNumber" autocomplete="off" required>
								<label> Student Number (Ex: 20xxxxxx-M) </label>
							</div>
							<div class="inputWrap">
								<input type="text" style="text-transform: uppercase;" class="txtbxFields" minlength="3" name="sCourse" autocomplete="off" required>
								<label> Course Year and Section(Ex: BSxx 1-A)</label>
							</div>
							<div class="inputWrap">
								<input type="email" class="txtbxFields" minlength="8" name="sEmail" autocomplete="off" required>
								<label> Email </label>
							</div>
							<div class="inputWrap">
								<input type="Password" class="txtbxFields" minlength="8" name="sPassword" autocomplete="off" required>
								<label> Password </label>
							</div>
							<?php echo $msg; ?>
							<input type="submit" name="submit" value="Sign Up" class="btnSignin">
							<p class="txtForgot" style="margin-top: -20px;">By signing up, I agree to the <a href="#"> Privacy Policy</a> of University of Caloocan City.</p>
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