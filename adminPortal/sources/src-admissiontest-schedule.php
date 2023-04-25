<?php
if (isset($_POST['submit'])) {
    $date = $mysqli->real_escape_string($_POST['date']);

    if(empty($date)){
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 50px;"><h3>Invalid Schedule.</h3></div>';
    }else{
        if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_admissiontestschedule WHERE admDate='{$date}'")) > 0){
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 50px; "><h3>This Schedule is already added.</h3></div>';
        } else{
            $sql = "INSERT INTO tbl_admissiontestschedule(admDate) VALUES ('$date')";
            mysqli_query($mysqli, $sql);
            
            $after = "$admName Added $date for Admission Test Schedule";
        
                    $details = "Added $date for Admission Test Schedule";
                    $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
                    VALUES('$admName','','$after','$details')";
                    $runActivity = mysqli_query($mysqli, $activity);
    
        }
    }
}

if (isset($_POST['delete_records'])){
    $admID = $mysqli->real_escape_string($_POST['admID']);
    $date = $mysqli->real_escape_string($_POST['date']);

    $after = "$admName Deleted $date from Admission Test Schedule";
        
    $details = "Deleted $date from Admission Test Schedule";
    $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
    VALUES('$admName','','$after','$details')";
    $runActivity = mysqli_query($mysqli, $activity);

    $delete = "DELETE FROM tbl_admissiontestschedule WHERE admID='$admID'";
	$del = mysqli_query($mysqli, $delete);
}
