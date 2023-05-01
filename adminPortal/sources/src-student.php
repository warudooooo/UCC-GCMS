<?php

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use voku\helper\AntiXSS;

$antiXss = new AntiXSS();

$msg = "";
if (isset($_POST['submit'])) {

    $sName = filter_input(INPUT_POST, 'sName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sNumber = filter_input(INPUT_POST, 'sNumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sCourse = filter_input(INPUT_POST, 'sCourse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sEmail = filter_input(INPUT_POST, 'sEmail', FILTER_SANITIZE_EMAIL);

    $sName = $antiXss->xss_clean($sName);
    $sNumber = $antiXss->xss_clean($sNumber);
    $sCourse = $antiXss->xss_clean($sCourse);
    $sEmail = $antiXss->xss_clean($sEmail);
    
    $sVerified = 'no';

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentName='{$sName}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Student already exists.</h3></div>';
    } else if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Student Number already exists.</h3></div>';
    } else {
        if ($sNumber == "" || $sName == "" || $sEmail == "" || $sCourse == "") {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
        } else {
        $sql = "INSERT INTO tbl_students(studentName,studentNumber,studentCourse,studentVerified,studentEmail,studentPassword,userType,vkey,userStatus)
    VALUES('$sName','$sNumber','$sCourse','$sVerified','','','user','','1')";
        $result = mysqli_query($mysqli, $sql);

        $before = "$admName Added $sName successfully.";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','$before','','Add Student Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);
        header("location: redirects/student-added-success.php");
        }
    }
}

if (isset($_POST['approve_student'])) {
    $adminPassword = $mysqli->real_escape_string(md5($_POST['adminPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    if ($adminPassword == $curPassword) {
        $dbID = filter_input(INPUT_POST, 'dbID', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $stName = filter_input(INPUT_POST, 'stName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $stEmail = filter_input(INPUT_POST, 'stEmail', FILTER_SANITIZE_EMAIL);

        $dbID = $antiXss->xss_clean($dbID);
        $stName = $antiXss->xss_clean($stName);
        $stEmail = $antiXss->xss_clean($stEmail);
        if ($dbID == "" || $stName == "" || $stEmail == "") {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
        } else {

        $sql = "UPDATE `tbl_students` SET vkey='',studentVerified='yes'  WHERE ID='$dbID'";
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
                $mail->Password   = 'ljubpkiypermvnkz';                        //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('s@gmail.com');
                $mail->addAddress($stEmail);

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
                                                            <img src='https://cdn.discordapp.com/attachments/768805813098905620/1037554696778432522/logo-2.png' width'391' height='78' style='display: block; border: 0px; margin-top: 40px;' /><h3 style='font-size: 48px; font-weight: 400; margin-left: 20px; margin-top: 10; margin-bottom: 10px;'>Hi, " . $stName . "</h3> 
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
                                                            <p style='text-align:center !important; margin-top: -10; margin-bottom: -10px;'>Congratulations! The Guidance has approved your account.</p>
                                                            <p style='text-align:center !important; margin-top: 10; margin-bottom: -10px;'>Please click the button below to log in.</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#ffffff' align='left'>
                                                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                <tr>
                                                                    <td bgcolor='#ffffff' align='center' style='padding: 20px 30px 60px 30px;'>
                                                                        <table border='0' cellspacing='0' cellpadding='0'>
                                                                            <tr>
                                                                                <td align='center; style='border-radius: 3px;' bgcolor='#f4845f'><a
                                                                                    href='http://localhost/guidance/index.php' target='_blank'
                                                                                    style='font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #FFA73B; display: inline-block;'>Click
                                                                                    Here to Login</a></td>
                                                                            </tr>
                                                                        </table>	
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr> <!-- COPY -->
                                                    <tr>
                                                        <td bgcolor='#ffffff' align='left' style='padding: 0px 30px 0px 30px; color: #666666; font-family: Lato, Helvetica, Arial, sans-serif !important; font-size: 18px; font-weight: 400; line-height: 25px;'>
                                                            <p style='margin-left: 20px; margin-top: 0px; margin-bottom: 0px;'>If that doesn't work, copy and paste the following link in your browser:</p>
                                                        </td>
                                                    </tr> <!-- COPY -->
                                                    <tr>
                                                        <td bgcolor='#ffffff' align='left' style='padding: 20px 30px 20px 30px; color: #666666; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                                                            <p style='margin-left: 20px; margin-top: 0px; margin-bottom: 3px;'><a href='http://localhost/guidance/index.php' target='_blank' style='color: #F4845F;'>http://localhost/guidance/index.php</a></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#ffffff' align='left' style='padding: 0px 30px 20px 30px; color: #666666; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                                                            <p style='margin-left: 20px; margin-top: 0px; margin-bottom: 0px;'>If you have any questions, just reply to this email.</p>
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

                $mail->send();
            } catch (Exception $e) {
                $msg = "<div class='eml'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
            }
            $before = "$admName approved $stName account successfully.";

            $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','$before','','Approved Student Account Successfully.')";
            $runActivity = mysqli_query($mysqli, $activity);
            header("location: redirects/student-approve-success.php");
        }
        }
    } else {
        $msg = '<div class="eml" style="color: crimson;"><h3>Incorrect Password.</h3></div>';
    }
}

if (isset($_POST['decline_student'])) {
    $adminPassword = $mysqli->real_escape_string(md5($_POST['adminPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);
    $stName = $mysqli->real_escape_string($_POST['stName']);
    $stEmail = $mysqli->real_escape_string($_SESSION['stEmail']);
    $decReason = $mysqli->real_escape_string($_POST['decReason']);

    if ($adminPassword == $curPassword) {
        $stName = $mysqli->real_escape_string($_POST['stName']);
        $dbID = $mysqli->real_escape_string($_POST['dbID']);


        $delete = "DELETE FROM tbl_students WHERE ID = '$dbID'";
        $result = mysqli_query($mysqli, $delete);
        if ($dbID == "" || $sName == "") {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
        } else {
        if ($result) {
            $mail = new PHPMailer(true);
            try {
                //Server settings
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'blindsbord@gmail.com';                 //SMTP username
                $mail->Password   = 'ljubpkiypermvnkz';                        //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('s@gmail.com');
                $mail->addAddress($stEmail);

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
                                                        <img src='https://cdn.discordapp.com/attachments/768805813098905620/1037554696778432522/logo-2.png' width'391' height='78' style='display: block; border: 0px; margin-top: 40px;' /><h3 style='font-size: 48px; font-weight: 400; margin-left: 20px; margin-top: 10; margin-bottom: 10px;'>Hi, " . $stName . "</h3> 
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
                                                        <p style='text-align:center !important; margin-top: -10; margin-bottom: 30px;'>Sorry, The Guidance has declined your account.</p>
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

                $mail->send();
            } catch (Exception $e) {
                $msg = "<div class='eml'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
            }
            $before = "$admName Declined $stName account.";

            $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                VALUES('$admName','$before','','Declined Student Account.')";
            $runActivity = mysqli_query($mysqli, $activity);
            header("location: redirects/student-decline-success.php");
        }
        }
    } else {
        $msg = '<div class="eml" style="color: crimson;"><h3>Incorrect Password.</h3></div>';
    }
}

if (isset($_POST['edit_student'])) {
    $ID = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $stName = filter_input(INPUT_POST, 'stName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $ssNumber = filter_input(INPUT_POST, 'ssNumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sCourse = filter_input(INPUT_POST, 'sCourse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sEmail = filter_input(INPUT_POST, 'sEmail', FILTER_SANITIZE_EMAIL);

    $oldsName = filter_input(INPUT_POST, 'oldsName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $oldsNumber = filter_input(INPUT_POST, 'oldsNumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $oldsCourse = filter_input(INPUT_POST, 'oldsCourse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $oldsEmail = filter_input(INPUT_POST, 'oldsEmail', FILTER_SANITIZE_EMAIL);

    $sPassword = $mysqli->real_escape_string($_POST['sPassword']);

    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    $ID = $antiXss->xss_clean($ID);
    $stName = $antiXss->xss_clean($stName);
    $ssNumber = $antiXss->xss_clean($ssNumber);
    $sCourse = $antiXss->xss_clean($sCourse);
    $sEmail = $antiXss->xss_clean($sEmail);

    $oldsName = $antiXss->xss_clean($oldsName);
    $oldsNumber = $antiXss->xss_clean($oldsNumber);
    $oldsCourse = $antiXss->xss_clean($oldsCourse);
    $oldsEmail = $antiXss->xss_clean($oldsEmail);
    

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE ID='{$ID}'")) > 0) {
        if ($admPassword == $curPassword) {
            if ($stName == "" || $ssNumber == "" || $sCourse == "" || $sEmail == "" || $oldsName == "" || $oldsNumber == "" || $oldsCourse == "" || $oldsEmail == "") {
                $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
            } else {
            $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='$sEmail',studentPassword='$sPassword',vkey='',studentVerified='yes',userType='user',userStatus='1' WHERE ID='$ID'";
            $result = mysqli_query($mysqli, $sql);

            $before = 
"Student Number: $oldsNumber
Student Name: $oldsName
Course: $oldsCourse
Email: $oldsEmail";

$after = 
"Student Number: $sNumber
Student Name: $sName
Course: $sCourse
Email: $sEmail
";

            $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                VALUES('$admName','$before','$after','Edited Student Account Succesfully.')";
            $runActivity = mysqli_query($mysqli, $activity);

            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: green; margin-left: 500px;"><h3>Success.</h3></div>';
            }
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 500px;"><h3>Incorrect Password.</h3></div>';
        }
    }
}

if (isset($_POST['view_student'])) {

    $_SESSION['dbID'] = $_POST['dbID'];
    $_SESSION['sName'] = $_POST['sName'];
    $_SESSION['stCourse'] = $_POST['stCourse'];
    $_SESSION['stNumber'] = $_POST['stNumber'];
    $_SESSION['stEmail'] = $_POST['stEmail'];
    $_SESSION['regForm'] = $_POST['regForm'];
    $_SESSION['regSelfie'] = $_POST['regSelfie'];
}

if (isset($_POST['admedit_student'])) {
    $ID = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sName = filter_input(INPUT_POST, 'sName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sNumber = filter_input(INPUT_POST, 'sNumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sCourse = filter_input(INPUT_POST, 'sCourse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sEmail = filter_input(INPUT_POST, 'sEmail', FILTER_SANITIZE_EMAIL);

    $oldsName = filter_input(INPUT_POST, 'oldsName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $oldsNumber = filter_input(INPUT_POST, 'oldsNumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $oldsCourse = filter_input(INPUT_POST, 'oldsCourse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $oldsEmail = filter_input(INPUT_POST, 'oldsEmail', FILTER_SANITIZE_EMAIL);

    $ID = $antiXss->xss_clean($ID);
    $sName = $antiXss->xss_clean($sName);
    $sNumber = $antiXss->xss_clean($sNumber);
    $sCourse = $antiXss->xss_clean($sCourse);
    $sEmail = $antiXss->xss_clean($sEmail);

    $oldsName = $antiXss->xss_clean($oldsName);
    $oldsNumber = $antiXss->xss_clean($oldsNumber);
    $oldsCourse = $antiXss->xss_clean($oldsCourse);
    $oldsEmail = $antiXss->xss_clean($oldsEmail);

    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE ID='{$ID}'")) > 0) {
        if ($admPassword == $curPassword) {
            if ($sName == "" || $sNumber == "" || $sCourse == "" || $sEmail == "" || $oldsName == "" || $oldsNumber == "" || $oldsCourse == "" || $oldsEmail == "") {
                $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
            } else {
            $sql = "UPDATE `tbl_students` SET studentNumber='$sNumber',studentName='$sName',studentCourse='$sCourse',studentEmail='$sEmail',studentPassword='',vkey='',studentVerified='no',userType='user',userStatus='1' WHERE ID='$ID'";
            $result = mysqli_query($mysqli, $sql);


$before = 
"Student Number: $oldsNumber
Student Name: $oldsName
Course: $oldsCourse
Email: $oldsEmail";

$after = 
"Student Number: $sNumber
Student Name: $sName
Course: $sCourse
Email: $sEmail
";


            $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                VALUES('$admName','$before','$after','Edited Student Account Succesfully.')";
            $runActivity = mysqli_query($mysqli, $activity);

            header("Location: redirects/student-edit-success.php");
            }
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; width: 100%;"><h3 style="margin: auto;">The password you entered is incorrect.</h3></div>';
        }
    }
}

if (isset($_POST['markas_inactive'])) {
    $sName = $mysqli->real_escape_string($_POST['sName']);
    $sNumber = $mysqli->real_escape_string($_POST['sNumber']);
    $sPassword = $mysqli->real_escape_string($_POST['sPassword']);
    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);


    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
        if ($admPassword == $curPassword) {
            $sql = "UPDATE `userStatus='0' WHERE studentNumber='$sNumber'";
            $result = mysqli_query($mysqli, $sql);
            $before = "$admName Marked $sName as inactive.";

            $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                VALUES('$admName','$before','','Marked as inactive Succesfully.')";
            $runActivity = mysqli_query($mysqli, $activity);
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: green; width: 100%;"><h3 style="margin: auto;">Mark as Inative Successfully</h3></div>';
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; width: 100%;"><h3 style="margin: auto;">The password you entered is incorrect.</h3></div>';
        }
    }
}

if (isset($_POST['markas_active'])) {

    $sName = $mysqli->real_escape_string($_POST['sName']);
    $sNumber = $mysqli->real_escape_string($_POST['sNumber']);
    $sPassword = $mysqli->real_escape_string($_POST['sPassword']);
    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
        if ($admPassword == $curPassword) {
            $sql = "UPDATE `tbl_students` SET userStatus='1' WHERE studentNumber='$sNumber'";
            $result = mysqli_query($mysqli, $sql);
            
            $before = "$admName Marked $sName as active.";

            $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                VALUES('$admName','$before','','Marked as active Succesfully.')";
            $runActivity = mysqli_query($mysqli, $activity);

            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: green; margin-left: 500px;"><h3>Success.</h3></div>';
        } else {
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 500px;"><h3>Inorrect Password.</h3></div>';
        }
    }
}

// =======================================


if (isset($_POST['delete_permanent'])) {
    $sNumber = $_POST['sNumber'];
    $sName = $_POST['sName'];

    $sNumber = $mysqli->real_escape_string($sNumber);
    $sName = $mysqli->real_escape_string($sName);
    $admPassword = $mysqli->real_escape_string(md5($_POST['admPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);

    if ($admPassword == $curPassword) {
        $delete = "DELETE FROM tbl_students WHERE studentNumber = '$sNumber'";
        $result = mysqli_query($mysqli, $delete);
        // $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','DELETED STUDENT [ Details: $sName ]')";
        // $runActivity = mysqli_query($mysqli, $activity);
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: green; margin-left: 500px;"><h3>Success.</h3></div>';
    } else {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; width: 100%;"><h3 style="margin: auto;">The password you entered is incorrect.</h3></div>';
    }
}

if (isset($_POST['sanction_btn'])) {

    $sancName = $adYear = filter_input(INPUT_POST, 'sancName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sancNumber = $adYear = filter_input(INPUT_POST, 'sancNumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sancCourse = $adYear = filter_input(INPUT_POST, 'sancCourse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sanctEmail = $adYear = filter_input(INPUT_POST, 'sanctEmail', FILTER_SANITIZE_EMAIL);
}

if (isset($_POST['counsel_btn'])) {

    $_SESSION['sName'] = filter_input(INPUT_POST, 'sName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $_SESSION['sNumber'] = filter_input(INPUT_POST, 'sNumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $_SESSION['sCourse'] = filter_input(INPUT_POST, 'sCourse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $_SESSION['stEmail'] = filter_input(INPUT_POST, 'sanctEmail', FILTER_SANITIZE_EMAIL);
}
