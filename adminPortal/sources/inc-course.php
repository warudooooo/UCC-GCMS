<?php
if (isset($_POST['submit'])) {
    $cCode = $_POST['cCode'];
    $cName = $_POST['cName'];

    $cCode = $mysqli->real_escape_string($cCode);
    $cName = $mysqli->real_escape_string($cName);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_courselist WHERE courseCode='{$cCode}'")) > 0) {
    	$msg = "<div class='eml' style='margin-bottom: 10px; margin-top: -20px;'>This email adress is already in use. Please use a different one.</div>";
    } else if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_courselist WHERE courseName='{$cName}'")) > 0) {
    	$msg = "<div class='eml' style='margin-bottom: -5px; margin-top: -20px;'>This Student Number already exists.</div>";
    } else {
    $sql = "INSERT INTO tbl_courselist(courseCode,courseName) VALUES('$cCode','$cName')";
    $result = mysqli_query($mysqli, $sql);
    }
}

?>