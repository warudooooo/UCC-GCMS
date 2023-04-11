<?php

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$msg = "";
if (isset($_POST['importExcelFile'])) {
    $fileName = $_FILES['importFile']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['cls', 'csv', 'xls', 'xlsx'];

    if (in_array($file_ext, $allowed_ext)) {
        $inputFileNamePath = $_FILES['importFile']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();
        $count = 0;
        foreach ($data as $row) {

            if ($count > 0) {
                $studentStatus = $row['0'];
                $studentNumber = $row['1'];
                $studentName = $row['2'];
                $studentCourse = $row['3'];
                $studentAddress = $row['4'];
                $studentEmail = $row['5'];
                $studentPhone = $row['6'];

                if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_studentsregistrar WHERE studentNumber='{$studentNumber}'")) > 0) {
                    
                    $sql = "UPDATE tbl_studentsregistrar SET studentStatus='$studentStatus',studentName='$studentName',studentCourse='$studentCourse',studentAddress='$studentAddress',studentEmail='$studentEmail',studentPhoneNumber='$studentPhone' WHERE studentNumber='$studentNumber'";
                    $results = mysqli_query($mysqli, $sql);
                    
                    $msg = '<div class="eml" style="display: inline-block; text-align: center; color: #38b000; "><h3>The system already contains data, so the data was updated.</h3></div>';
                } else {
                    $sql = "INSERT INTO tbl_studentsregistrar (studentStatus, studentNumber, studentName, studentCourse, studentAddress, studentEmail, studentPhoneNumber) VALUES ('$studentStatus','$studentNumber','$studentName','$studentCourse','$studentAddress','$studentEmail','$studentPhone')";
                    $result = mysqli_query($mysqli, $sql);

                    $msg = '<div class="eml" style="display: inline-block; text-align: center; color: #38b000; "><h3>Import Success.</h3></div>';
                }
            } else {
                $count = 1;
            }
        }
    } else {
        $msg = '<div class="eml" style="display: inline-block; text-align: center; color: crimson; "><h3>Only Excel file format are accepted.</h3></div>';
    }
}
