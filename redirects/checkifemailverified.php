<?php
include '../config.php';

//Check if email is verified
if (isset($_GET['verification'])) {
	if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE vkey='{$_GET['verification']}'")) > 0) {
		$del = mysqli_query($mysqli, "UPDATE tbl_students SET studentVerified='yes' WHERE vkey='{$_GET['verification']}'");
		$query = mysqli_query($mysqli, "UPDATE tbl_students SET vkey='' WHERE vkey='{$_GET['verification']}'");
		if ($query) {
			header("Location: emailverified.php");
		}
	} else {
		header("Location: ../index.php");
	}
}
?>