<?php
include 'sources/session.php';
$procName = $_SESSION['pName'];

 
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "$procName-Schedule-Export: " . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('#','PROCTOR NAME', 'ROOM ASSIGNED', 'START TIME', 'END TIME ', 'DATE'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 

// Fetch records from database 
$query = $mysqli->query("SELECT * FROM tbl_proctorschedule WHERE proctorName='$procName' ORDER BY proctorID ASC"); 
$i = 1;
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($i,$row['proctorName'], $row['roomAssigned'], date('h:i A', strtotime($row["startTime"])), date('h:i A', strtotime($row["endTime"])), date('m/d/Y', strtotime($row["examDate"])));
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
		$i++;
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;


// if (isset($_POST['export'])) {

// 	$procName = $_SESSION['pName'];
// 	header("Content-Type: application/xls");
// 	header("Content-Disposition: attachment; filename=$procName-Schedule.xls");
// 	header("Pragma: no-cache");
// 	header("Expires: 0");


// 	$output = "";

// 	$output .= "
// 		<table>
// 			<thead>
// 				<tr>
// 					<th>#</th>
// 					<th>Proctor Name</th>
// 					<th>Room Assigned</th>
// 					<th>Start Time</th>
// 					<th>End Time</th>
// 					<th>Date</th>
// 				</tr>
// 			<tbody>
// 	";

// 	$load = mysqli_query($mysqli, "SELECT * FROM tbl_proctorschedule WHERE proctorName='$procName' ");
// 	$i = 1;
// 	while ($row = $load->fetch_assoc()) {

// 		$output .= "
// 			<table class='table' bordered='1' >
// 				<tr>
// 					<td>" . $i . "</td>
// 					<td>" . $row["proctorName"] .  "</td>
// 					<td>" . $row["roomAssigned"] ."</td>
// 					<td>" . date('h:i A', strtotime($row["startTime"])) . "</td>
// 					<td>" . date('h:i A', strtotime($row["endTime"])) . "</td>
// 					<td>" . date('m/d/Y', strtotime($row["examDate"])) . "</td>
// 				</tr>
// 	";
// 	}

// 	$output .= "
// 			</tbody>
 
// 		</table>
// 	";

// 	echo $output;
// }
?>