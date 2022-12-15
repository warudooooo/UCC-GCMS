<?php
$msg = "";
if (isset($_POST['addproctor'])){
    $pName = $mysqli->real_escape_string($_POST['pName']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_proctors WHERE proctorName='{$pName}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Proctor already exists</h3></div>';
    }else{
        $add = "INSERT INTO tbl_proctors(proctorName)
        VALUES('$pName')";
        $result = mysqli_query($mysqli, $add);
    }
}

if (isset($_POST['editproctor'])){

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = $mysqli->real_escape_string($_POST['pName']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_proctors WHERE proctorName='{$pName}'")) > 0) {
    	$msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Proctor already exists</h3></div>';
    }else{
        $edit = "UPDATE `tbl_proctors` SET proctorName='$pName' WHERE proctorID='$pID'";
        $result = mysqli_query($mysqli, $edit);
    }
}

if (isset($_POST['viewsched'])){

    $_SESSION['pID'] = $_POST["pID"];
    $_SESSION['pName'] = $_POST["pName"];

}

if (isset($_POST['deleteproctor'])){

    $pID = $mysqli->real_escape_string($_POST['pID']);

	$delete = "DELETE FROM tbl_proctors WHERE proctorID = '$pID'";
    $result = mysqli_query($mysqli, $delete);

}

?>