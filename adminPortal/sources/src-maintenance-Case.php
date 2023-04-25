<?php
$msg = "";
if (isset($_POST['addCase'])) {
    $pName = $mysqli->real_escape_string($_POST['pName']);
    $pDesc = $mysqli->real_escape_string($_POST['pDesc']);

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_cases WHERE caseName='{$pName}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h3>This Case is already exists</h3></div>';
    } else {
        $add = "INSERT INTO tbl_cases(caseName,caseDescription)
        VALUES('$pName','$pDesc')";
        $result = mysqli_query($mysqli, $add);

        $after = "
Case Name: $pName
Case Description: $pDesc
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Added Case Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);

    }
}

if (isset($_POST['editCase'])) {

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = $mysqli->real_escape_string($_POST['pName']);
    $pDesc = $mysqli->real_escape_string($_POST['pDesc']);

    $edit = "UPDATE `tbl_cases` SET caseName='$pName',caseDescription='$pDesc' WHERE caseID='$pID'";
    $result = mysqli_query($mysqli, $edit);
    
    $after = "
Case Name: $pName
Case Description: $pDesc
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Edited Case Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);

}

if (isset($_POST['viewsched'])) {

    $_SESSION['pID'] = $_POST["pID"];
    $_SESSION['pName'] = $_POST["pName"];
}

if (isset($_POST['deleteCase'])) {

    $pID = $mysqli->real_escape_string($_POST['pID']);
    $pName = $mysqli->real_escape_string($_POST['pName']);

    $after = "
Case Name: $pName
        ";

        $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','Deleted Case Successfully.')";
        $runActivity = mysqli_query($mysqli, $activity);

    $delete = "DELETE FROM tbl_cases WHERE caseID = '$pID'";
    $result = mysqli_query($mysqli, $delete);

    // $activity = "INSERT INTO tbl_activitylog(admName,activityAction) VALUES('$admName','DELETED PROCTOR [ Details: $pName ]')";
    // $runActivity = mysqli_query($mysqli, $activity);
}
