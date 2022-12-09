<?php 
if (isset($_POST['appsubmit'])) {
	$hID = $_POST['hID'];

	$hID = $mysqli->real_escape_string($hID);

	$delete = "DELETE FROM tbl_appointmenthistory WHERE historyID='$hID'";
    $result = mysqli_query($mysqli, $delete);
}

if (isset($_POST['counsubmit'])) {
	$hID = $_POST['hID'];

	$hID = $mysqli->real_escape_string($hID);

	$delete = "DELETE FROM tbl_counsellinghistory WHERE historyID='$hID'";
    $result = mysqli_query($mysqli, $delete);
}
?>