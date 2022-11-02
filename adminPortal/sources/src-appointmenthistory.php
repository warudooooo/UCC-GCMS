<?php 
if (isset($_POST['submit'])) {
	$hID = $_POST['hID'];

	$hID = $mysqli->real_escape_string($hID);

	$delete = "DELETE FROM tbl_history WHERE historyID='$hID'";
    $result = mysqli_query($mysqli, $delete);
}
?>