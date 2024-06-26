<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if (isset($_POST['delete_counseling'])) {

	$counsID = $_POST['counsID'];
	$counsName = $_POST['counsName'];
	$counsNumber = $_POST['counsNumber'];
	$counsCourse = $_POST['counsCourse'];
	$counsEmail = $_POST['counsEmail'];
	$counsType = ($_POST['counsType']);
	$counsDetails = ($_POST['counsDetails']);
	$date = ($_POST['date']);

	$counsID = $mysqli->real_escape_string($counsID);
	$counsName = $mysqli->real_escape_string($counsName);
	$counsNumber = $mysqli->real_escape_string($counsNumber);
	$counsCourse = $mysqli->real_escape_string($counsCourse);
	$counsEmail = $mysqli->real_escape_string($counsEmail);
	$counsType = $mysqli->real_escape_string($counsType);
	$counsDetails = $mysqli->real_escape_string($counsDetails);
	$date = $mysqli->real_escape_string($date);


	$decReason = $mysqli->real_escape_string($_POST['decReason']);
	$curPassword = $mysqli->real_escape_string($_POST['curPassword']);
	$adminPassword = $mysqli->real_escape_string(md5($_POST['adminPassword']));

	// $add = "INSERT INTO tbl_delpendingcounsellings(studentNumber,requesterName,studentCourse,studentEmail,counsellingType,counsellingDetails,dateCreated)
	// VALUES('$counsNumber','$counsName','$counsCourse','$counsEmail','$counsType','$counsDetails','$date')";
	// $delete = "DELETE FROM tbl_pendingcounsellings WHERE ID='$counsID'";
	if ($adminPassword == $curPassword) {
		$update = "UPDATE tbl_counselings SET counselingStatus = 'Declined' WHERE id = '$counsID'";
		$result = mysqli_query($mysqli, $update);
		$mail = new PHPMailer(true);

		try {
			//Server settings
			//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = $smtpEmail;                 //SMTP username
			$mail->Password   = $smtpPassword;						//SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
			$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

			//Recipients
			$mail->setFrom('s@gmail.com');
			$mail->addAddress($counsEmail);

			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'no reply';
			$mail->Body = "<!DOCTYPE html>
		<html>
						
						<head>
							<title></title>
							<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
							<meta name='viewport' content='width=device-width, initial-scale=1'>
							<meta http-equiv='X-UA-Compatible' content='IE=edge' />
							<style type='text/css'>
								@media screen {
									@font-face {
										font-family: 'Lato';
										font-style: normal;
										font-weight: 400;
										src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
									}
						
									@font-face {
										font-family: 'Lato';
										font-style: normal;
										font-weight: 700;
										src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
									}
						
									@font-face {
										font-family: 'Lato';
										font-style: italic;
										font-weight: 400;
										src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
									}
						
									@font-face {
										font-family: 'Lato';
										font-style: italic;
										font-weight: 700;
										src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
									}
								}
						
								/* CLIENT-SPECIFIC STYLES */
								body,
								table,
								td,
								a {
									-webkit-text-size-adjust: 100%;
									-ms-text-size-adjust: 100%;
								}
						
								table,
								td {
									mso-table-lspace: 0pt;
									mso-table-rspace: 0pt;
								}
						
								img {
									-ms-interpolation-mode: bicubic;
								}
						
								/* RESET STYLES */
								img {
									border: 0;
									height: auto;
									line-height: 100%;
									outline: none;
									text-decoration: none;
								}
						
								table {
									border-collapse: collapse !important;
								}
						
								body {
									height: 100% !important;
									margin-left: 20px !important;
									padding: 0 !important;
									width: 100% !important;
								}
						
								/* iOS BLUE LINKS */
								a[x-apple-data-detectors] {
									color: inherit !important;
									text-decoration: none !important;
									font-size: inherit !important;
									font-family: inherit !important;
									font-weight: inherit !important;
									line-height: inherit !important;
								}
						
								/* MOBILE STYLES */
								@media screen and (max-width:600px) {
									h1 {
										font-size: 32px !important;
										line-height: 32px !important;
									}
								}
						
								/* ANDROID CENTER FIX */
								div[style*='margin-left: 20px 6px 0;'] {
									margin-left: 20px !important;
								}
							</style>
						</head>
						
						<body style='background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%'>
								<!-- LOGO -->
								<tr>
									<td bgcolor='#F4845F' align='center'>
										<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
											<tr>
												<td align='center' valign='top' style='padding: 40px 10px 40px 10px;'> </td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td bgcolor='#F4845F' align='center' style='padding: 0px 10px 0px 10px;'>
										<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
											<tr>
												<td bgcolor='#ffffff' align='center' valign='top' style='padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;'>
													<img src='https://cdn.discordapp.com/attachments/768805813098905620/1037554696778432522/logo-2.png' width'391' height='78' style='display: block; border: 0px; margin-top: 40px;' /><h3 style='font-size: 48px; font-weight: 400; margin-left: 20px; margin-top: 10; margin-bottom: 10px;'>Hi, " . $counsName . "</h3> 
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
										<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
											<tr>
												<td bgcolor='#ffffff' align='left' style='padding: 20px 30px 40px 30px; color: #666666; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
													<p style='text-align:center !important; margin-top: -10; margin-bottom: 30px;'>We apologize, but the Guidance has rejected your request for an appointment.</p>
													<p style='margin-left: 20px; margin-top: 10; margin-bottom: 10px;'>Reason: </p>
													<p style='margin-left: 20px; margin-top: 10; margin-bottom: -10px;'> " . $decReason . "</p>
												</td>
											</tr>
											<tr>
												<td bgcolor='#ffffff' align='left' style='padding: 0px 30px 20px 30px; color: #666666; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
													<p style='margin-left: 20px; margin-top: 10px; margin-bottom: 0px;'>If you have any questions, just reply to this email.</p>
												</td>
											</tr>
											<tr>
												<td bgcolor='#ffffff' align='left' style='padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
													<p style='margin-left: 20px; margin-top: 10; margin-bottom: 25px;'>Regards,<br>UCC Guidance and Counseling</p>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td bgcolor='#f4f4f4' align='center' style='padding: 30px 10px 0px 10px;'>
										<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
											<tr>
												<td bgcolor='#F79D65' align='center' style='padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
													<h2 style='font-size: 20px; font-weight: 400; color: #111111; margin-left: 20px; margin-top: 10; margin-bottom: 10px;'>Need more help?</h2>
													<p style='margin-left: 20px; margin-top: 10; margin-bottom: 10px;'><a href='#' target='_blank' style='color: #333;'>We&rsquo;re here to help you out.</a></p>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
										<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
											<tr>
												<td bgcolor='#f4f4f4' align='left' style='padding: 0px 30px 30px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;'> <br>
													<p style='margin-left: 20px; margin-top: 10; margin-bottom: 10px;'>Need more questions? Feel free to messeage us on <a href='#' target='_blank' style='color: #111111; font-weight: 700;'>Facebook</a>.</p>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</body>
						
						</html>";
			// $mail->Body    = '<b><h1>Hi, ' . $sName . '</h1><a href="http://192.168.100.105/Guidance/redirects/checkifemailverified.php/?verification=' . $vkey . '">Click here to verify your account</a><br><p>Or copy it manualy below</p>
			// 				  <p>http://192.168.100.105/Guidance/redirects/checkifemailverified.php/?verification=' . $vkey . '</p></b>';

			$mail->send();
		} catch (Exception $e) {
			$msg = "<div class='eml'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
		}
	} else {
		$msg = '<div class="eml" style="color: crimson; text-align: center;"><h3>Incorrect Password.</h3></div>';
	}
	// $del = mysqli_query($mysqli, $delete);
	$after = "
Student Name: $counsName
Reason for Declining: $decReason
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Declined $counsName successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);
}

if (isset($_POST['submit'])) {

	$cID = $_POST['cID'];
	$sName = $_POST['sName'];
	$sNumber = $_POST['sNumber'];
	$sCourse = $_POST['sCourse'];
	$sEmail = $_POST['sEmail'];
	$cSchedule = ($_POST['cSchedule']);
	$cType = ($_POST['cType']);
	$Details = ($_POST['Details']);

	$cID = $mysqli->real_escape_string($cID);
	$sName = $mysqli->real_escape_string($sName);
	$sNumber = $mysqli->real_escape_string($sNumber);
	$sCourse = $mysqli->real_escape_string($sCourse);
	$sEmail = $mysqli->real_escape_string($sEmail);
	$cSchedule = $mysqli->real_escape_string($cSchedule);
	$cType = $mysqli->real_escape_string($cType);
	$Details = $mysqli->real_escape_string($Details);

	// $add = "INSERT INTO tbl_approvedcounsellings(studentNumber,requesterName,studentCourse,studentEmail,counsellingSchedule,counsellingType,counsellingDetails)
	// VALUES('$sNumber','$sName','$sCourse','$sEmail','$cSchedule','$cType','$Details')";
	$update = "UPDATE tbl_counselings SET counselingStatus = 'Approved' WHERE id = '$cID'";
	// $delete = "DELETE FROM tbl_pendingcounsellings WHERE ID='$cID'";
	$result = mysqli_query($mysqli, $update);
	// $del = mysqli_query($mysqli, $delete);
	$after = "
Student Name: $sName
Counseling Type: $cType
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Approved $sName Appointment successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);
	$mail = new PHPMailer(true);

	try {
		//Server settings
		//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = $smtpEmail;                 //SMTP username
		$mail->Password   = $smtpPassword;						//SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom('s@gmail.com');
		$mail->addAddress($sEmail);

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'no reply';
		$mail->Body = "<!DOCTYPE html>
			<html>	
			<head>
				<title></title>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<meta name='viewport' content='width=device-width, initial-scale=1'>
				<meta http-equiv='X-UA-Compatible' content='IE=edge' />
				<style type='text/css'>
					@media screen {
						@font-face {
							font-family: 'Lato';
							font-style: normal;
							font-weight: 400;
							src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
						}
			
						@font-face {
							font-family: 'Lato';
							font-style: normal;
							font-weight: 700;
							src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
						}
			
						@font-face {
							font-family: 'Lato';
							font-style: italic;
							font-weight: 400;
							src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
						}
			
						@font-face {
							font-family: 'Lato';
							font-style: italic;
							font-weight: 700;
							src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
						}
					}
			
					/* CLIENT-SPECIFIC STYLES */
					body,
					table,
					td,
					a {
						-webkit-text-size-adjust: 100%;
						-ms-text-size-adjust: 100%;
					}
			
					table,
					td {
						mso-table-lspace: 0pt;
						mso-table-rspace: 0pt;
					}
			
					img {
						-ms-interpolation-mode: bicubic;
					}
			
					/* RESET STYLES */
					img {
						border: 0;
						height: auto;
						line-height: 100%;
						outline: none;
						text-decoration: none;
					}
			
					table {
						border-collapse: collapse !important;
					}
			
					body {
						height: 100% !important;
						margin-left: 20px !important;
						padding: 0 !important;
						width: 100% !important;
					}
			
					/* iOS BLUE LINKS */
					a[x-apple-data-detectors] {
						color: inherit !important;
						text-decoration: none !important;
						font-size: inherit !important;
						font-family: inherit !important;
						font-weight: inherit !important;
						line-height: inherit !important;
					}
			
					/* MOBILE STYLES */
					@media screen and (max-width:600px) {
						h1 {
							font-size: 32px !important;
							line-height: 32px !important;
						}
					}
			
					/* ANDROID CENTER FIX */
					div[style*='margin-left: 20px 6px 0;'] {
						margin-left: 20px !important;
					}
				</style>
			</head>	
			<body style='background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;'>
				<table border='0' cellpadding='0' cellspacing='0' width='100%'>
					<!-- LOGO -->
					<tr>
						<td bgcolor='#F4845F' align='center'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
								<tr>
									<td align='center' valign='top' style='padding: 40px 10px 40px 10px;'> </td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor='#F4845F' align='center' style='padding: 0px 10px 0px 10px;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
								<tr>
									<td bgcolor='#ffffff' align='center' valign='top'
										style='padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;'>
										<img src='https://cdn.discordapp.com/attachments/768805813098905620/1037554696778432522/logo-2.png'
											width'391' height='78' style='display: block; border: 0px; margin-top: 40px;' />
										<h3
											style='font-size: 48px; font-weight: 400; margin-left: 20px; margin-top: 10; margin-bottom: 10px;'>
											Hi, " . $sName . "</h3>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
								<tr>
									<td bgcolor='#ffffff' align='left'
										style='padding: 20px 30px 40px 30px; color: #666666; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
										<p style='text-align:center !important; margin-top: -10; margin-bottom: 30px;'>Your appointment has been approved. Your schedule is:</p>
										<p style='text-align:center !important; margin-top: -10; margin-bottom: 30px; color: #F4845F;'>" . $cSchedule . "</p>
										<p style='margin-left: 20px; margin-top: 10px; margin-bottom: 0px;'>Kindly arrive on time. Thank you!</p>
									</td>
								</tr>
								<tr>
									<td bgcolor='#ffffff' align='left'
										style='padding: 0px 30px 20px 30px; color: #666666; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
										<p style='margin-left: 20px; margin-top: 0px; margin-bottom: 0px;'>If you have any
											questions, just reply to this email.</p>
									</td>
								</tr>
								<tr>
									<td bgcolor='#ffffff' align='left'
										style='padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: '
										Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
										<p style='margin-left: 20px; margin-top: 10; margin-bottom: 25px;'>Regards,<br>UCC Guidance
											and Counseling</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor='#f4f4f4' align='center' style='padding: 30px 10px 0px 10px;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
								<tr>
									<td bgcolor='#F79D65' align='center'
										style='padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: '
										Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
										<h2
											style='font-size: 20px; font-weight: 400; color: #111111; margin-left: 20px; margin-top: 10; margin-bottom: 10px;'>
											Need more help?</h2>
										<p style='margin-left: 20px; margin-top: 10; margin-bottom: 10px;'><a href='#'
												target='_blank' style='color: #333;'>We&rsquo;re here to help you out.</a></p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
								<tr>
									<td bgcolor='#f4f4f4' align='left'
										style='padding: 0px 30px 30px 30px; color: #666666; font-family: ' Lato', Helvetica, Arial,
										sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;'> <br>
										<p style='margin-left: 20px; margin-top: 10; margin-bottom: 10px;'>Need more questions? Feel
											free to messeage us on <a href='#' target='_blank'
												style='color: #111111; font-weight: 700;'>Facebook</a>.</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</body>
			</html>";
		// $mail->Body    = '<b><h1>Hi, ' . $sName . '</h1><a href="http://192.168.100.105/Guidance/redirects/checkifemailverified.php/?verification=' . $vkey . '">Click here to verify your account</a><br><p>Or copy it manualy below</p>
		// 				  <p>http://192.168.100.105/Guidance/redirects/checkifemailverified.php/?verification=' . $vkey . '</p></b>';

		$mail->send();
	} catch (Exception $e) {
		$msg = "<div class='eml'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
	}
}
