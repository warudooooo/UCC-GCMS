<?php 
if (isset($_POST['sanction_btn'])) {

    $sName = $_POST["sName"];
    $sNumber = $_POST["sNumber"];
    $sCourse = $_POST["sCourse"];

}

if (isset($_POST['counsel_btn'])) {

   header("location: services.php");

}

?>