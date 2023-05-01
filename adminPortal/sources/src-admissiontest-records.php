<?php

use voku\helper\AntiXSS;

require_once '../vendor/autoload.php';

$antiXss = new AntiXSS();

if (isset($_POST['submit'])) {

    $qYear = filter_input(INPUT_POST, 'qYear', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $qYear = $antiXss->xss_clean($qYear);


    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_admissiontestrecords WHERE admFile='{$filename}'")) > 0) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 50px; "><h3>This File already exists.</h3></div>';
    } else if (!in_array($extension, ['doc', 'pdf', 'docx'])) {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 50px;"><h3>Your file extension must be .doc, .docx or .pdf</h3></div>';
    } elseif ($_FILES['myfile']['size'] > 50000000) { // file shouldn't be larger than 1Megabyte
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 50px;"><h3>Your file is too large</h3></div>';
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            if($qYear == ""){
                $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
            }else{
            $sql = "INSERT INTO tbl_admissiontestrecords(admYear, admFile, admSize, admDownloads) VALUES ('$qYear','$filename', $size, 0)";
            mysqli_query($mysqli, $sql);

            $after = 
"Year: ".$qYear."
File: ".$filename."";

$action =
"Added ".$filename." successfully.";

            $activity = "INSERT INTO tbl_activitylog(admName,activityActionAfter,activityDetails)
            VALUES('$admName','$after','$action')";
            $runActivity = mysqli_query($mysqli, $activity);
            header('Location: admissiontest-records.php');
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM tbl_admissiontestrecords WHERE admID=$id";
    $result = mysqli_query($mysqli, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['admFile'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['admFile']));
        readfile('uploads/' . $file['admFile']);

        // Now update downloads count
        $newCount = $file['admDownloads'] + 1;
        $updateQuery = "UPDATE tbl_admissiontestrecords SET admDownloads=$newCount WHERE admID=$id";
        mysqli_query($mysqli, $updateQuery);

        $after = "$admName Downloaded " . $file['admFile'] . " successfully.";

    $activity = "INSERT INTO tbl_activitylog(admName,activityActionAfter,activityDetails)
    VALUES('$admName','$after','Downloaded " . $file['admFile'] . " successfuly.')";
    $runActivity = mysqli_query($mysqli, $activity);
        exit;
    }
}

if (isset($_POST['adDelete'])) {

    $adminPassword = $mysqli->real_escape_string(md5($_POST['adminPassword']));
    $curPassword = $mysqli->real_escape_string($_POST['curPassword']);
    //for act logging

    $adYear = filter_input(INPUT_POST, 'adYear', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $fileName = filter_input(INPUT_POST, 'fileName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $delReason = filter_input(INPUT_POST, 'delReason', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $adYear = $antiXss->xss_clean($adYear);
    $fileName = $antiXss->xss_clean($fileName);
    $delReason = $antiXss->xss_clean($delReason);

    

    if ($adminPassword == $curPassword) {
        if($adYear == "" || $fileName == "" || $delReason == ""){
            $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; margin-left: 0px; "><h3>Something went wrong</h3></div>';
        }else{
            $before = 
"Year: ".$adYear."
File: ".$fileName."";

    $details = "Deleted " . $fileName . " successfully.";
        $admID = $mysqli->real_escape_string($_POST['admID']);
        $activity = "INSERT INTO tbl_activitylog(admName,admFile,activityActionBefore,activityDetails,activityReason)
        VALUES('$admName','$fileName','$before','$details','$delReason')";
        $runActivity = mysqli_query($mysqli, $activity);
        $delete = "DELETE FROM tbl_admissiontestrecords WHERE admID='$admID'";
        $del = mysqli_query($mysqli, $delete);
        }
    }
}
