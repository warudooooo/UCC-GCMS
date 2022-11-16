<?php 
if (isset($_POST['delete_counseling'])) {

	$cdID = $_POST['cdID'];
	$cdID = $mysqli->real_escape_string($cdID);

	$delete = "DELETE FROM tbl_delpendingcounsellings WHERE ID='$cdID'";
	$del = mysqli_query($mysqli, $delete);
}

if (isset($_POST['submit'])) {

	$cID = $_POST['cID'];
	$csName = $_POST['csName'];
	$csNumber = $_POST['csNumber'];
	$csCourse = $_POST['csCourse'];
	$csEmail = $_POST['csEmail'];
   
    $cType = ($_POST['cType']);
    $cDetails = ($_POST['cDetails']);
	$cDate = ($_POST['cDate']);

	$cID = $mysqli->real_escape_string($cID);
	$csName = $mysqli->real_escape_string($csName);
	$csNumber = $mysqli->real_escape_string($csNumber);
	$csCourse = $mysqli->real_escape_string($csCourse);
	$csEmail = $mysqli->real_escape_string($csEmail);
   
    $cType = $mysqli->real_escape_string($cType);
    $cDetails = $mysqli->real_escape_string($cDetails);
	$cDate = $mysqli->real_escape_string($cDate);

	$archive = "INSERT INTO tbl_pendingcounsellings(ID,studentNumber,requesterName,studentCourse,studentEmail,dateCreated,counsellingType,counsellingDetails)
    VALUES('$cID','$csNumber','$csName','$csCourse','$csEmail','$cDate','$cType','$cDetails')";
	$arc = mysqli_query($mysqli, $archive);


	$delete = "DELETE FROM tbl_delpendingcounsellings WHERE ID='$cID'";
	$del = mysqli_query($mysqli, $delete);

}
?>


<!-- ============================ -->


<?php 
if (isset($_POST['sdelete_counseling'])) {

	$scID = $_POST['scID'];
	$scID = $mysqli->real_escape_string($scID);

	$delete = "DELETE FROM tbl_delapprovedcounsellings WHERE counsellingID='$scID'";
	$del = mysqli_query($mysqli, $delete);
}

if (isset($_POST['ssubmit'])) {

	$scsID = $_POST['scsID'];
	$scsName = $_POST['scsName'];
	$scsNumber = $_POST['scsNumber'];
	$scsCourse = $_POST['scsCourse'];
	$scsEmail = $_POST['scsEmail'];
	$scsType = ($_POST['scsType']);
	$scsDateapproved = $_POST['scsDateapproved'];
	$scsSchedule = $_POST['scsSchedule'];
    $scsDetails = ($_POST['scsDetails']);
	$scsSched = ($_POST['scsSched']);

	$scsID = $mysqli->real_escape_string($scsID);
	$scsName = $mysqli->real_escape_string($scsName);
	$scsNumber = $mysqli->real_escape_string($scsNumber);
	$scsCourse = $mysqli->real_escape_string($scsCourse);
	$scsEmail = $mysqli->real_escape_string($scsEmail);
	$scsType = $mysqli->real_escape_string($scsType);
	$scsDateapproved = $mysqli->real_escape_string($scsDateapproved);
	$scsSchedule = $mysqli->real_escape_string($scsSchedule);
    $scsDetails = $mysqli->real_escape_string($scsDetails);
	

	$archive = "INSERT INTO tbl_approvedcounsellings(counsellingID,studentNumber,requesterName,studentCourse,studentEmail,counsellingSchedule,counsellingType,counsellingDetails,dateApproved)
    VALUES('$scsID','$scsNumber','$scsName','$scsCourse','$scsEmail','$scsSchedule','$scsType','$scsDetails','$scsDateapproved')";
	$arc = mysqli_query($mysqli, $archive);


	$delete = "DELETE FROM tbl_delapprovedcounsellings WHERE counsellingID='$scsID'";
	$del = mysqli_query($mysqli, $delete);

}
?>