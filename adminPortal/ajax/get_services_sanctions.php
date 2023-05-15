<?php
include '../../config.php';

$selectedCase = $_GET['case'];
$sNumber = $_GET['sNumber'];

$query = mysqli_query($mysqli, "SELECT * FROM tbl_sanctioncounter WHERE studentNumber = '$sNumber' AND caseDetails = '$selectedCase'");
$row = mysqli_fetch_array($query);
if (mysqli_num_rows($query) === 1) {
    $selectCount = $row['count'];
    echo $selectCount;
} else {
    $errorMessage = "No Data was Found.";
    $selectCount = $errorMessage;
    echo $selectCount;
}
