<?php
session_start();
if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: ../index.php");
	die();
}

include '../config.php';

$sql = "SELECT * FROM tbl_students";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);

if ($row["userType"] == "admin"){
    header("Location: ../adminPortal/index.php");
}

$query = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$_SESSION['SESSION_EMAIL']}'");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);

    $sName = $row['studentName'];
}
?>