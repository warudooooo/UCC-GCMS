<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//DB Connect
include 'config.php';
$msg = "";

if (isset($_POST['submit'])) {
	$sName = $_POST['sName'];
	$sNumber = $_POST['sNumber'];
	$sCourse = $_POST['sCourse'];
	$sEmail = $_POST['sEmail'];
	$sPassword = md5($_POST['sPassword']);
	$verified = "no"; 

	//Sanitize
	$sName = $mysqli->real_escape_string($sName);
	$sNumber = $mysqli->real_escape_string($sNumber);
	$sCourse = $mysqli->real_escape_string($sCourse);
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
		$sql = "INSERT INTO tbl_students(studentNumber,studentName,studentCourse,studentEmail,studentPassword,vkey,studentVerified) VALUES('$sNumber','$sName','$sCourse','$sEmail','$sPassword','$vkey','$sVerified')";
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