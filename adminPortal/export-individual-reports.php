<?php
include 'sources/session.php';


if (isset($_POST['exportAll'])) {
    // Filter the excel data 
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // Excel file name for download 
    $fileName = "Counseling-All-Reports: " . date('Y-m-d') . ".xls";

    // Column names 
    $fields = array('#', 'STUDENT NUMBER', 'STUDENT NAME', 'COURSE', 'COUNSELING TYPE', 'DATE OF APPOINTMENT ', 'COUNSELOR');

    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n";

    // Fetch records from database 
    $query = $mysqli->query("SELECT * FROM tbl_counselinghistory");
    $i = 1;
    if ($query->num_rows > 0) {
        // Output each row of the data 
        while ($row = $query->fetch_assoc()) {
            $lineData = array($i, $row['studentNumber'], $row['requesterName'], $row['studentCourse'], $row['counselingType'], $row['counselingSchedule'], $row['counselor']);
            array_walk($lineData, 'filterData');
            $excelData .= implode("\t", array_values($lineData)) . "\n";
            $i++;
        }
    } else {
        $excelData .= 'No records found...' . "\n";
    }

    // Headers for download 
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Render excel data 
    echo $excelData;
    $before = "$admName Exported All Counseling Reports.";

    $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
        VALUES('$admName','$before','','Exported All Counseling Report Successfuly.')";
    $runActivity = mysqli_query($mysqli, $activity);
    exit;
}

if (isset($_POST['exportYear'])) {
    // Filter the excel data 
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // Excel file name for download 
    $fileName = "Counseling-Yearly-Report: " . date('Y-m-d') . ".xls";

    // Column names 
    $fields = array('#', 'STUDENT NUMBER', 'STUDENT NAME', 'COURSE', 'COUNSELING TYPE', 'DATE OF APPOINTMENT ', 'COUNSELOR');

    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n";

    // Fetch records from database 
    $eYear = $mysqli->real_escape_string($_POST['eYear']);
    $query = $mysqli->query("SELECT * FROM tbl_counselinghistory WHERE year(dateCompleted) = $eYear");

    if ($query->num_rows > 0) {
        $i = 1;
        if ($query->num_rows > 0) {
            // Output each row of the data 
            while ($row = $query->fetch_assoc()) {
                $lineData = array($i, $row['studentNumber'], $row['requesterName'], $row['studentCourse'], $row['counselingType'], $row['counselingSchedule'], $row['counselor']);
                array_walk($lineData, 'filterData');
                $excelData .= implode("\t", array_values($lineData)) . "\n";
                $i++;
            }
        } else {
            $excelData .= 'No records found...' . "\n";
        }
    } else {
        header("location: appointmentHistory.php?not_found=true");
    }

    // Headers for download 
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Render excel data 
    echo $excelData;
    $before = "$admName Exported Yearly Counseling Reports.";

    $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
        VALUES('$admName','$before','','Exported Yearly Counseling Report Successfuly.')";
    $runActivity = mysqli_query($mysqli, $activity);
    exit;
}

if (isset($_POST['exportMonth'])) {
    // Filter the excel data 
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // Excel file name for download 
    $fileName = "Counseling-Monthly-Report: " . date('Y-m-d') . ".xls";

    // Column names 
    $fields = array('#', 'STUDENT NUMBER', 'STUDENT NAME', 'COURSE', 'COUNSELING TYPE', 'DATE OF APPOINTMENT ', 'COUNSELOR');

    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n";

    // Fetch records from database 
    $eYear = $mysqli->real_escape_string($_POST['eYear']);
    $eMonth = $mysqli->real_escape_string($_POST['eMonth']);
    $query = $mysqli->query("SELECT * FROM tbl_counselinghistory WHERE year(dateCompleted) = $eYear && MONTH(dateCompleted) = $eMonth");


    if (mysqli_num_rows($query) > 0) {
        $i = 1;
        if ($query->num_rows > 0) {
            // Output each row of the data 
            while ($row = $query->fetch_assoc()) {
                $lineData = array($i, $row['studentNumber'], $row['requesterName'], $row['studentCourse'], $row['counselingType'], $row['counselingSchedule'], $row['counselor']);
                array_walk($lineData, 'filterData');
                $excelData .= implode("\t", array_values($lineData)) . "\n";
                $i++;
            }
        } else {
            $excelData .= 'No records found...' . "\n";
        }
    } else {
        header("location: appointmentHistory.php?not_found=true");
        exit();
    }
    // Headers for download 
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Render excel data 
    echo $excelData;
    $before = "$admName Exported Monthly Counseling Reports.";

    $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
        VALUES('$admName','$before','','Exported Monthly Counseling Report Successfuly.')";
    $runActivity = mysqli_query($mysqli, $activity);
    exit;
}



if (isset($_POST['exportIndv'])) {
    $studNumber = $_SESSION['stNumber'];
    $studName = $_SESSION['sName'];
    // Filter the excel data 
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // Excel file name for download 
    $fileName = "$studName-Counseling-Reports: " . date('Y-m-d') . ".xls";

    // Column names 
    $fields = array('#', 'COUNSELING STATUS', 'STUDENT NUMBER', 'STUDENT NAME', 'COURSE', 'STUDENT EMAIL', 'COUNSELING TYPE', 'DATE OF APPOINTMENT ');

    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n";

    // Fetch records from database 
    $query = $mysqli->query("SELECT * FROM tbl_counselings WHERE studentNumber = '$studNumber'");
    $i = 1;
    if ($query->num_rows > 0) {
        // Output each row of the data 
        while ($row = $query->fetch_assoc()) {
            $lineData = array($i, $row['counselingStatus'], $row['studentNumber'], $row['requesterName'], $row['studentCourse'], $row['studentEmail'], $row['counselingType'], $row['counselingSchedule']);
            array_walk($lineData, 'filterData');
            $excelData .= implode("\t", array_values($lineData)) . "\n";
            $i++;
        }
    } else {
        $excelData .= 'No records found...' . "\n";
    }

    // Headers for download 
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Render excel data 
    echo $excelData;
    $before = "$admName Exported $studName Counseling Reports.";

    $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
        VALUES('$admName','$before','','Exported Student Counseling Report Successfuly.')";
    $runActivity = mysqli_query($mysqli, $activity);
    exit;
}

// SANCTIONS =================================================================================================================================================================

if (isset($_POST['exportAllSanc'])) {
    // Filter the excel data 
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // Excel file name for download 
    $fileName = "Counseling-All-Reports: " . date('Y-m-d') . ".xls";

    // Column names 
    $fileName = "Sanction-Yearly-Report: " . date('Y-m-d') . ".xls";

    // Column names 
    $fields = array('#', 'DEGREE', 'STUDENT NUMBER', 'STUDENT NAME', 'COURSE', 'STUDENT EMAIL', 'CASE', 'SANCTION TYPE', 'DATE ISSUED ');

    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n";

    // Fetch records from database 
    $query = $mysqli->query("SELECT * FROM tbl_sanctions");


    if (mysqli_num_rows($query) > 0) {
        $i = 1;
        if ($query->num_rows > 0) {
            // Output each row of the data 
            while ($row = $query->fetch_assoc()) {
                $lineData = array($i, $row['degree'], $row['studentNumber'], $row['studentName'], $row['studentCourse'], $row['studentEmail'], $row['sanctionCase'], $row['sanctionType'], $row['dateIssued']);
                array_walk($lineData, 'filterData');
                $excelData .= implode("\t", array_values($lineData)) . "\n";
                $i++;
            }
        } else {
            $excelData .= 'No records found...' . "\n";
        }

        // Headers for download 
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$fileName\"");

        // Render excel data 
        echo $excelData;
        $before = "$admName Exported All Sanction Reports.";

    $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
        VALUES('$admName','$before','','Exported Monthly All Report Successfuly.')";
    $runActivity = mysqli_query($mysqli, $activity);
        exit;
    }
}

if (isset($_POST['exportYearSanc'])) {
    // Filter the excel data 
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // Excel file name for download 
    $fileName = "Sanction-Yearly-Report: " . date('Y-m-d') . ".xls";

    // Column names 
    $fields = array('#', 'DEGREE', 'STUDENT NUMBER', 'STUDENT NAME', 'COURSE', 'STUDENT EMAIL', 'CASE', 'SANCTION TYPE', 'DATE ISSUED ');

    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n";

    // Fetch records from database 
    $eYear = $mysqli->real_escape_string($_POST['eYear']);
    $query = $mysqli->query("SELECT * FROM tbl_sanctions WHERE year(dateIssued) = $eYear");


    if (mysqli_num_rows($query) > 0) {
        $i = 1;
        if ($query->num_rows > 0) {
            // Output each row of the data 
            while ($row = $query->fetch_assoc()) {
                $lineData = array($i, $row['degree'], $row['studentNumber'], $row['studentName'], $row['studentCourse'], $row['studentEmail'], $row['sanctionCase'], $row['sanctionType'], $row['dateIssued']);
                array_walk($lineData, 'filterData');
                $excelData .= implode("\t", array_values($lineData)) . "\n";
                $i++;
            }
        } else {
            $excelData .= 'No records found...' . "\n";
        }
    } else {
        header("location: appointmentHistory.php?not_found=true");
    }

    // Headers for download 
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Render excel data 
    echo $excelData;
    $before = "$admName Exported Yearly Sanction Reports.";

    $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
        VALUES('$admName','$before','','Exported Yearly Sanction Report Successfuly.')";
    $runActivity = mysqli_query($mysqli, $activity);
    exit;
}

if (isset($_POST['exportMonthSanc'])) {
    // Filter the excel data 
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // Excel file name for download 
    $fileName = "Sanction-Monthly-Report: " . date('Y-m-d') . ".xls";

    // Column names 
    $fields = array('#', 'DEGREE', 'STUDENT NUMBER', 'STUDENT NAME', 'COURSE', 'STUDENT EMAIL', 'CASE', 'SANCTION TYPE', 'DATE ISSUED ');

    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n";

    // Fetch records from database 
    $eYear = $mysqli->real_escape_string($_POST['eYear']);
    $eMonth = $mysqli->real_escape_string($_POST['eMonth']);
    $query = $mysqli->query("SELECT * FROM tbl_sanctions WHERE year(dateIssued) = $eYear && MONTH(dateIssued) = $eMonth");


    if (mysqli_num_rows($query) > 0) {
        $i = 1;
        if ($query->num_rows > 0) {
            // Output each row of the data 
            while ($row = $query->fetch_assoc()) {
                $lineData = array($i, $row['degree'], $row['studentNumber'], $row['studentName'], $row['studentCourse'], $row['studentEmail'], $row['sanctionCase'], $row['sanctionType'], $row['dateIssued']);
                array_walk($lineData, 'filterData');
                $excelData .= implode("\t", array_values($lineData)) . "\n";
                $i++;
            }
        } else {
            $excelData .= 'No records found...' . "\n";
        }
    } else {
        header("location: appointmentHistory.php?not_found=true");
        exit();
    }
    // Headers for download 
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Render excel data 
    echo $excelData;
    $before = "$admName Exported Monthly Sanction Reports.";

    $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
        VALUES('$admName','$before','','Exported Monthly Sanction Report Successfuly.')";
    $runActivity = mysqli_query($mysqli, $activity);
    exit;
}


if (isset($_POST['exportIndvSanctions'])) {
    $studNumber = $_SESSION['stNumber'];
    $studName = $_SESSION['sName'];
    // Filter the excel data 
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // Excel file name for download 
    $fileName = "$studName-Sanction-Reports: " . date('Y-m-d') . ".xls";

    // Column names 
    $fields = array('#', 'DEGREE', 'STUDENT NUMBER', 'STUDENT NAME', 'COURSE', 'STUDENT EMAIL', 'CASE', 'SANCTION TYPE', 'DATE ISSUED ');

    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n";

    // Fetch records from database 
    $query = $mysqli->query("SELECT * FROM TBL_sanctions WHERE studentNumber = '$studNumber'");
    $i = 1;
    if ($query->num_rows > 0) {
        // Output each row of the data 
        while ($row = $query->fetch_assoc()) {
            $lineData = array($i, $row['degree'], $row['studentNumber'], $row['studentName'], $row['studentCourse'], $row['studentEmail'], $row['sanctionCase'], $row['sanctionType'], $row['dateIssued']);
            array_walk($lineData, 'filterData');
            $excelData .= implode("\t", array_values($lineData)) . "\n";
            $i++;
        }
    } else {
        $excelData .= 'No records found...' . "\n";
    }

    // Headers for download 
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Render excel data 
    echo $excelData;
    $before = "$admName Exported $studName Sanction Reports.";

    $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
        VALUES('$admName','$before','','Exported Student Sanction Report Successfuly.')";
    $runActivity = mysqli_query($mysqli, $activity);
    exit;
}


// ADMISSION TEST SCHEDULE ============================================================================================

if (isset($_POST['exportYearAdmTest'])) {
    // Filter the excel data 
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // Excel file name for download 
    $fileName = "Admission-Test-Schedule: " . date('Y-m-d') . ".xls";

    // Column names 
    $fields = array('#', 'ADMISSION YEAR', 'EXAMINATION DATE', 'DAY',);

    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n";

    // Fetch records from database 
    $eYear = $mysqli->real_escape_string($_POST['eYear']);
    $query = $mysqli->query("SELECT * FROM tbl_admissiontestschedule WHERE year(admDate) = $eYear");

    if ($query->num_rows > 0) {
        $i = 1;
        if ($query->num_rows > 0) {
            // Output each row of the data 
            while ($row = $query->fetch_assoc()) {
                $lineData = array($i, date('Y', strtotime($row["admDate"])), $row["admDate"], date('l', strtotime($row["admDate"])));
                array_walk($lineData, 'filterData');
                $excelData .= implode("\t", array_values($lineData)) . "\n";
                $i++;
            }
        } else {
            $excelData .= 'No records found...' . "\n";
        }
    } else {
        header("location: admissiontest-schedule.php?not_found=true");
    }

    // Headers for download 
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Render excel data 
    echo $excelData;
    $before = "$admName Exported Admission Test Schedule (Year: $eYear).";

    $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
        VALUES('$admName','$before','','Exported Admission Test Schedule Successfuly.')";
    $runActivity = mysqli_query($mysqli, $activity);
    exit;
}

if (isset($_POST['exportAllAdmTest'])) {
    // Filter the excel data 
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // Excel file name for download 
    $fileName = "Admission-Test-Records: " . date('Y-m-d') . ".xls";

    // Column names 
    $fields = array('#', 'ADMISSION YEAR', 'EXAMINATION DATE', 'DAY',);

    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n";

    // Fetch records from database 
    $query = $mysqli->query("SELECT * FROM tbl_admissiontestschedule");

    if ($query->num_rows > 0) {
        $i = 1;
        if ($query->num_rows > 0) {
            // Output each row of the data 
            while ($row = $query->fetch_assoc()) {
                $lineData = array($i, date('Y', strtotime($row["admDate"])), $row["admDate"], date('l', strtotime($row["admDate"])));
                array_walk($lineData, 'filterData');
                $excelData .= implode("\t", array_values($lineData)) . "\n";
                $i++;
            }
        } else {
            $excelData .= 'No records found...' . "\n";
        }
    } else {
        header("location: admissiontest-schedule.php?not_found=true");
    }

    // Headers for download 
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Render excel data 
    echo $excelData;
    $before = "$admName Exported Admission Test Records.";

    $activity = "INSERT INTO tbl_activitylog(admName,activityActionBefore,activityActionAfter,activityDetails)
        VALUES('$admName','$before','','Exported Admission Test Records Successfuly.')";
    $runActivity = mysqli_query($mysqli, $activity);
    exit;
}
