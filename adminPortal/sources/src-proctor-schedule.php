<?php
$msg = "";
if (isset($_POST['viewsched'])) {
	$_SESSION['pID'] = $_POST["pID"];
	$_SESSION['pName'] = $_POST["pName"];
}
$procName = $_SESSION['pName'];

$load = mysqli_query($mysqli, "SELECT * FROM tbl_proctorschedule WHERE proctorName='$procName'");
$total = mysqli_num_rows($load);

if (isset($_POST['addsched'])) {
	$pName = $mysqli->real_escape_string($_POST['pName']);
	$roomAssigned = $mysqli->real_escape_string($_POST['roomAssigned']);
	$startTime = $mysqli->real_escape_string($_POST['startTime']);
	$endTime = $mysqli->real_escape_string($_POST['endTime']);
	$date = $mysqli->real_escape_string($_POST['date']);

	//check for duplicate sched
	$dupRoomAssigned = "SELECT roomAssigned FROM tbl_proctorschedule WHERE roomAssigned = '$roomAssigned'";
	$dupStartTime = "SELECT startTime FROM tbl_proctorschedule WHERE startTime = '$startTime'";
	$dupEndTime = "SELECT endTime FROM tbl_proctorschedule WHERE endTime = '$endTime'";
	$dupDate = "SELECT examDate FROM tbl_proctorschedule WHERE examDate = '$date'";

	$RoomAssignedResult = mysqli_query($mysqli, $dupRoomAssigned);
	$StartTimeResult = mysqli_query($mysqli, $dupStartTime);
	$EndTimeResult = mysqli_query($mysqli, $dupEndTime);
	$dateResult = mysqli_query($mysqli, $dupDate);

	$RoomAssignedCount = mysqli_num_rows($RoomAssignedResult);
	$StartTimeCount = mysqli_num_rows($StartTimeResult);
	$EndTimeCount = mysqli_num_rows($EndTimeResult);
	$dateCount = mysqli_num_rows($dateResult);
	//-------------------------------

	if ($total < 10) {
		if ($roomAssigned == "" || $startTime == "" || $endTime == "" || $date == "") {
			$msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h1>Please fill up all fields.</h1></div>';
		} else if ($StartTimeCount > 0 && $EndTimeCount > 0 &&  $dateCount > 0 && $RoomAssignedCount > 0) {
			$msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h1>The schedule for this room is already taken.</h1></div>';
		} else if ($startTime >= $endTime) {
			$msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h1>Invalid Schedule.</h1></div>';
		} else {
			$add = "INSERT INTO tbl_proctorschedule(proctorName,roomAssigned,startTime,endTime,examDate)
    		VALUES('$pName','$roomAssigned','$startTime','$endTime','$date')";
			$result = mysqli_query($mysqli, $add);
			
			$after = "
Proctor Name: $pName
Room Assigned: $roomAssigned
Start Time: $startTime
End Time: $endTime
Date: $date
			";
        
			$activity = "INSERT INTO tbl_activitylog(admName,activityActionAfter,activityDetails,activityReason)
			VALUES('$admName','$after','Added Schedule for $pName.','')";
			$runActivity = mysqli_query($mysqli, $activity);


		}
	} else {
		$msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h1>ONLY UP TO 10 ROOMS PER PROCTOR!</h1></div>';
	}
}

if (isset($_POST['editsched'])) {

	$pID = $mysqli->real_escape_string($_POST['pID']);
	$pName = $mysqli->real_escape_string($_POST['pName']);
	$roomAssigned = $mysqli->real_escape_string($_POST['roomAssigned']);
	$startTime = $mysqli->real_escape_string($_POST['startTime']);
	$endTime = $mysqli->real_escape_string($_POST['endTime']);
	$date = $mysqli->real_escape_string($_POST['date']);


	$pName = $mysqli->real_escape_string($_POST['pName']);
	$roomAssigned = $mysqli->real_escape_string($_POST['roomAssigned']);
	$startTime = $mysqli->real_escape_string($_POST['startTime']);
	$endTime = $mysqli->real_escape_string($_POST['endTime']);
	$date = $mysqli->real_escape_string($_POST['date']);


	if ($roomAssigned == "" || $startTime == "" || $endTime == "" || $date == "") {
		$msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h1>Please fill up all fields.</h1></div>';
	} else if ($startTime >= $endTime) {
		$msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson;"><h1>Invalid Schedule.</h1></div>';
	} else {
		$edit = "UPDATE `tbl_proctorschedule` SET proctorName='$pName',roomAssigned='$roomAssigned',startTime='$startTime',endTime='$endTime',examDate='$date' WHERE proctorID='$pID'";
		$result = mysqli_query($mysqli, $edit);
		
	$after = "
Proctor Name: $pName
Room Assigned: $roomAssigned
Start Time: $startTime
End Time: $endTime
Date: $date
			";

			$details = "Edited $pName Schedule.";
			$activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
			VALUES('$admName','','$after','$details')";
			$runActivity = mysqli_query($mysqli, $activity);


	}
}

if (isset($_POST['deletesched'])) {

	$pID = $mysqli->real_escape_string($_POST['pID']);
	$pName = $mysqli->real_escape_string($_POST['pName']);

	$delete = "DELETE FROM tbl_proctorschedule WHERE proctorID = '$pID'";
	$result = mysqli_query($mysqli, $delete);

	$after = "$admName Deleted $pName Schedule";
	
				$details = "Deleted $pName Schedule.";
				$activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
				VALUES('$admName','','$after','$details')";
				$runActivity = mysqli_query($mysqli, $activity);
}

