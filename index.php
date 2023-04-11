<?php
include 'sources/src-index.php';
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
					<form method="POST" action="index.php" id="signinForm" autocomplete="off" class="signinForm" onsubmit="return false">
						<div class="uccLogo">
							<img src="src/images/uccLogo.png">
							<h4>University of Caloocan City Guidance and Counseling</h4>
						</div>
						<div class="heading">
							<h2>Welcome back, UCCian!</h2>
							<h6>Not registered yet?</h6>
							<a href="register.php" class="toggle">Sign up</a>
						</div>
						<div class="actualForm">
							<div class="inputWrap">
								<input type="text" id="sNumber" style="text-transform: uppercase;" class="txtbxFields" name="sNumber" autocomplete="off">
								<label> Student Number (Ex: 201xxxxx-M) </label>
							</div>
							<div class="inputWrap">
								<input type="Password" id="sPassword" class="txtbxFields" name="sPassword" autocomplete="off">
								<label> Password </label>
							</div>
							<h1><div id='result' class='eml' style="display: inline-block; color: crimson; margin-bottom: 10px; margin-top: -10px; font-size: 15px;"></div></h1>
							<input type="submit" id="btnSignin" name="submit" value="Sign In" class="btnSignin">
							<p class="txtForgot">Did you forgot your password? <a href="forgotpass.php"> Get help </a> signing in</p>
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
								<h1><div id='result' class='eml' style="display: inline-block; color: crimson; margin-bottom: 0px; font-size: 20px;"></div></h1>
								<h2>Biglang Awa St Cor 11th Ave Catleya,</h2>
								<h2>Caloocan, 1400 Metro Manila, Philippines</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="src/scripts/loginScript.js"></script>
</body>

</html>