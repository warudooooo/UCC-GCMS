<?php
$msg = "";
if (isset($_POST['addSanction'])){
    $pName = $mysqli->real_escape_string($_POST['pName']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_sanctionservices WHERE sanctionName='{$pName}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Sanction is already exists</h3></div>';
    }else{
        $add = "INSERT INTO tbl_sanctionservices(sanctionName)
        VALUES('$pName')";
        $result = mysqli_query($mysqli, $add);

        $after = "
Sanction Name: $pName
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Added Sanction Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);
    }
}

if (isset($_POST['editSanction'])){

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = $mysqli->real_escape_string($_POST['pName']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_sanctionservices WHERE sanctionName='{$pName}'")) > 0) {
    	$msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Proctor already exists</h3></div>';
    }else{
        $edit = "UPDATE `tbl_sanctionservices` SET sanctionName='$pName' WHERE sanctionID='$pID'";
        $result = mysqli_query($mysqli, $edit);
        
        $after = "
Sanction Name: $pName
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Added Sanction Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);

    }
}

if (isset($_POST['viewsched'])){

    $_SESSION['pID'] = $_POST["pID"];
    $_SESSION['pName'] = $_POST["pName"];

}

if (isset($_POST['deleteSanction'])){

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = $mysqli->real_escape_string($_POST['pName']);

    $after = "
Sanction Name: $pName
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Deleted Sanction Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);


	$delete = "DELETE FROM tbl_sanctionservices WHERE sanctionID = '$pID'";
    $result = mysqli_query($mysqli, $delete);


}

?>