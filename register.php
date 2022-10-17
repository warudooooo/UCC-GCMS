<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

//DB Connect
include 'config.php';
$msg = "";

if (isset($_POST['submit'])) {
	$sName = $_POST['sName'];
	$sNumber = $_POST['sNumber'];
	$sEmail = $_POST['sEmail'];
	$sPassword = md5($_POST['sPassword']);

	//Sanitize
	$sName = $mysqli->real_escape_string($sName);
	$sNumber = $mysqli->real_escape_string($sNumber);
	$sEmail = $mysqli->real_escape_string($sEmail);
	$sPassword = $mysqli->real_escape_string($sPassword);
	//Generate Vkey
	$vkey = md5(time() . $sName);

	if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentEmail='{$sEmail}'")) > 0) {
		$msg = "<div class='eml' style='margin-bottom: 10px; margin-top: -20px;'>This email adress is already in use. Please use a different one.</div>";
	} else if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
		$msg = "<div class='eml' style='margin-bottom: -5px; margin-top: -20px;'>This Student Number already exists.</div>";
	} else {
		//Insert to DB
		$sql = "INSERT INTO tbl_students(studentNumber,studentName,studentEmail,studentPassword,vkey) VALUES('$sNumber','$sName','$sEmail','$sPassword','$vkey')";
		$result = mysqli_query($mysqli, $sql);
		if ($result) {
			$mail = new PHPMailer(true);
			try {
				//Server settings
				//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
				$mail->isSMTP();                                            //Send using SMTP
				$mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
				$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				$mail->Username   = 'blindsbord@gmail.com';                 //SMTP username
				$mail->Password   = 'ngerbouhmmbkirbi';						//SMTP password
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
				$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				//Recipients
				$mail->setFrom('s@gmail.com');
				$mail->addAddress($sEmail);

				//Content
				$mail->isHTML(true);                                  //Set email format to HTML
				$mail->Subject = 'no reply';
				$mail->Body    = '<b><h1>Hi, ' . $sName . '</h1><a href="http://192.168.100.105/Guidance/?verification=' . $vkey . '">Click here to verify your account</a><br><p>Or copy it manualy below</p>
								  <p>http://192.168.100.105/Guidance/?verification=' . $vkey . '</p></b>';

				$mail->send();
				header('location:thankyou.php');
			} catch (Exception $e) {
				$msg = "<div class='eml'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
			}
			header('location:thankyou.php');
		} else {
			$msg = "<div class='eml'>Something went wrong.</div>";
		}
	}
}

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
						<div class="heading">
							<h2>Let's get started.</h2>
							<h6>Already have an account?</h6>
							<a href="index.php" class="toggle">Sign in</a>
						</div>
						<div class="actualForm">
							<div class="inputWrap">
								<input type="text" class="txtbxFields" minlength="4" name="sName" autocomplete="off" required>
								<label> Full Name (Ex: Bayola, Wally B.)</label>
							</div>
							<div class="inputWrap">
								<input type="text" class="txtbxFields" minlength="4" name="sNumber" autocomplete="off" required>
								<label> Student Number (Ex: 201xxxxx-M) </label>
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
							<p class="txtForgot">By signing up, I agree to the <a href="#"> Privacy Policy</a> of University of Caloocan City.</p>
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
								<h2>Happiness can be found even in the darkest of times, if one only remembers to turn on the light.</h2>
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