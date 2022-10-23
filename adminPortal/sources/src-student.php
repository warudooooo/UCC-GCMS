<?php
if (isset($_POST['submit'])) {
    
    $sName = $_POST['sName'];
    $sNumber = $_POST['sNumber'];
    $sCourse = $_POST['sCourse'];
    $sVerified = 'no'; 

    $sName = $mysqli->real_escape_string($sName);
    $sNumber = $mysqli->real_escape_string($sNumber);
    $sCourse = $mysqli->real_escape_string($sCourse);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentName='{$sName}'")) > 0) {
    	$msg = "<div class='eml' style='margin-bottom: 10px; margin-top: -20px;'>This Student already exists.</div>";
    } else if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$sNumber}'")) > 0) {
    	$msg = "<div class='eml' style='margin-bottom: -5px; margin-top: -20px;'>This Student Number already exists.</div>";
    } else {
    $sql = "INSERT INTO tbl_students(studentName,studentNumber,studentCourse,studentVerified) VALUES('$sName','$sNumber','$sCourse','$sVerified')";
    $result = mysqli_query($mysqli, $sql);
    }
}

?>