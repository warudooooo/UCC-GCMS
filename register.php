<?php
require 'vendor/autoload.php';
include 'sources/src-register.php';
?>
<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="src/styles/registerStyle.css">
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
					<form method="POST" id="signupForm" action="register.php" enctype="multipart/form-data" autocomplete="off" class="signupForm">
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
								<input placeholder="" type="text" class="txtbxFields" minlength="4" id="sName" name="sName" autocomplete="off" required>
								<label> Full Name (Ex: Dela Cruz, Juan M.)</label>
							</div>
							<div class="inputWrap">
								<input placeholder="" type="text" style="text-transform: uppercase;" class="txtbxFields" minlength="4" id="sNumber" name="sNumber" autocomplete="off" required>
								<label> Student Number (Ex: 20xxxxxx-M) </label>
							</div>
							<div class="inputWrap">
								<input placeholder="" type="text" style="text-transform: uppercase;" class="txtbxFields" minlength="3" id="sCourse" name="sCourse" autocomplete="off" required>
								<label style="font-size: 14px !important;"> Course Year and Section(Ex: BSxx 1-A)</label>
							</div>
							<div class="inputWrap">
								<input placeholder="" type="email" class="txtbxFields" minlength="8" id="sEmail" name="sEmail" autocomplete="off" required>
								<label> Email </label>
							</div>
							<div class="inputWrap">
								<input placeholder="" type="Password" class="txtbxFields" minlength="8" id="sPassword" name="sPassword" autocomplete="off" required>
								<label> Password </label>
							</div>
							<div class="inputWrap">
								<input placeholder="" type="Password" class="txtbxFields" minlength="8" id="conPassword" name="conPassword" autocomplete="off" required>
								<label>Confirm Password </label>
							</div>
							<div class="inputWrap">
								<div class="mb-3">
									<label for="myfile" class="form-label" style="margin-top: -35px;">Latest Registration Form</label>
									<input placeholder="" class="form-control form-control-sm" style="margin-top: 40px;" id="myfile" name="myfile" type="file" required />
								</div>
							</div>
							<div class="inputWrap">
								<div class="mb-3">
									<label for="myfile2" class="form-label" style="margin-top: -35px;">Selfie with Registration Form</label>
									<input placeholder="" class="form-control form-control-sm" style="margin-top: 40px;" id="myfile2" name="myfile2" type="file" required />
								</div>
							</div>
							<input placeholder="" type="submit" id="btnSignin" name="submit" value="Sign Up" class="btnSignin">
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
								<h1><?php echo $msg; ?></h1>
								<h2>Important Note: Only .png, .jpg, or .jpeg are accepted.</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="src/scripts/loginScript.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>