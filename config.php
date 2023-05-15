<?php
require_once 'credentials.php';

$server = "localhost";
$username = "root";
$password = "";
$database = "db_guidance";

$mysqli = mysqli_connect($server,$username,$password,$database);

if ($mysqli->connect_errno != 0){
    echo $mysqli->connect_error;
    exit();
}
?>