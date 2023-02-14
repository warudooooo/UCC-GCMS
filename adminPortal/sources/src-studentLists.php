<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$msg = "";
if (isset($_POST['view_student'])) {

    $_SESSION['dbID'] = $_POST['dbID'];
    $_SESSION['sName'] = $_POST['sName'];
    $_SESSION['stCourse'] = $_POST['stCourse'];
    $_SESSION['stNumber'] = $_POST['stNumber'];
    $_SESSION['stEmail'] = $_POST['stEmail'];
    $_SESSION['regForm'] = $_POST['regForm'];
    
}
