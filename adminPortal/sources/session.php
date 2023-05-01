<?php
session_start();
if (isset($_SESSION['SESSION_ROLE'])) {
    if($_SESSION['SESSION_ROLE'] != 'admin'){
        header("Location: ../studentPortal/index.php");
    }
}else{
    header("Location: ../index.php");
}

include '../config.php';

$query = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$_SESSION['SESSION_EMAIL']}'");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);

    $sName = $row['studentName'];
    $admName = $row['studentName'];
    $userName = $row['studentNumber'];
    $_SESSION['admPassword'] = $row['studentPassword'];
}
?>
