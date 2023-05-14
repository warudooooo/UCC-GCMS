<?php
include '../../config.php';

$selectedCase = $_GET['case'];

// Query the database to fetch the appropriate $selectCount based on the selected case
$query = mysqli_query($mysqli, "SELECT * FROM tbl_sanctioncounter WHERE caseDetails = '$selectedCase'");
$row = mysqli_fetch_array($query);
if (mysqli_num_rows($query) === 1) {
    $selectCount = $row['count'];
    echo $selectCount;
} else {
    $errorMessage = "No Data was Found.";
    $selectCount = $errorMessage;
    echo $selectCount;
}
