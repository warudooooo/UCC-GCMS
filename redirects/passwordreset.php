<?php include 'sources/src-passwordreset.php'; ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../src/styles/loginStyle.css">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UCC Guidance and Counseling</title>
	<link rel="icon" href="../src/images/uccLogo.png">
</head>

<body>

	<main>
		<div class="mainBox">
			<div class="innerBox">
				<div class="logregForm">
					<form method="POST" action="" autocomplete="off" class="signinForm">
						<div class="uccLogo">
							<img src="../src/images/uccLogo.png">
							<input type="hidden" value="<?php if(isset($_GET['resetcode'])){ echo $_GET['resetcode'];} ?>" name="rCode">
							<h4>University of Caloocan City Guidance and Counseling</h4>
						</div><br>
						<div class="heading">
							<h2>Reset Password.</h2>
							<h5 style="font-weight: 500;">Please don't forget your password next time.</h5><br>
							<h6>Not registered yet?</h6>
							<a href="../register.php" class="toggle">Sign up</a>
						</div>
						<div class="actualForm">
							<div class="inputWrap">
								<input style="pointer-events: none;" type="email" class="txtbxFields" minlength="8" name="sEmail" value="<?php if(isset($_GET['studentEmail'])){ echo $_GET['studentEmail'];} ?>" placeholder="" autocomplete="off" readonly required>
								<label> <?php if(isset($_GET['studentEmail'])){ echo "";}else{echo "Email"; } ?> </label>
							</div>
							<div class="inputWrap">
								<input type="text" id="sNumber" style="text-transform: uppercase;" class="txtbxFields" name="sNumber" autocomplete="off">
								<label> Student Number (Ex: 201xxxxx-M) </label>
							</div>
							<div class="inputWrap">
								<input type="Password" id="sPassword" class="txtbxFields"name="sPassword" autocomplete="off">
								<label>New Password </label>
							</div>
							<div class="inputWrap">
								<input type="Password" id="sPassword" class="txtbxFields"name="cPassword" autocomplete="off">
								<label>Confirm Password </label>
							</div>
							<?php echo $msg; ?>
							<input type="submit" name="reset" value="Reset" class="btnReset">
							<p class="txtForgot"></p>
						</div>
					</form>
				</div>
				<div class="movingForm">
					<div class="imageContainer">
						<img src="../src/images/loginPage/image3.jpg" class="image img-1 show" />
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

	<script type="text/javascript" src="../src/scripts/loginScript.js"></script>
</body>

</html>