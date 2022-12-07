<?php
if (isset($_POST['submit'])) {

    $qYear = $mysqli->real_escape_string($_POST['qYear']);
    $qSubject = $mysqli->real_escape_string($_POST['qSubject']);
    $qQuestion = $mysqli->real_escape_string($_POST['qQuestion']);
    $qOptionOne = $mysqli->real_escape_string($_POST['qOptionOne']);
    $qOptionTwo = $mysqli->real_escape_string($_POST['qOptionTwo']);
    $qOptionThree = $mysqli->real_escape_string($_POST['qOptionThree']);
    $qOptionFour = $mysqli->real_escape_string($_POST['qOptionFour']);
    $qAnswer = $mysqli->real_escape_string($_POST['qAnswer']);

    $sql = "INSERT INTO tbl_questions(qYear,qSubject,question,optionOne,optionTwo,optionThree,optionFour,answer)
    VALUES('$qYear','$qSubject','$qQuestion','$qOptionOne','$qOptionTwo','$qOptionThree','$qOptionFour','$qAnswer')";
    $result = mysqli_query($mysqli, $sql);

}

if (isset($_POST['edit_questions'])) {

    $qID = $mysqli->real_escape_string($_POST['qID']);
    $qYear = $mysqli->real_escape_string($_POST['qYear']);
    $qSubject = $mysqli->real_escape_string($_POST['qSubject']);
    $qQuestion = $mysqli->real_escape_string($_POST['qQuestion']);
    $qOptionOne = $mysqli->real_escape_string($_POST['qOptionOne']);
    $qOptionTwo = $mysqli->real_escape_string($_POST['qOptionTwo']);
    $qOptionThree = $mysqli->real_escape_string($_POST['qOptionThree']);
    $qOptionFour = $mysqli->real_escape_string($_POST['qOptionFour']);
    $qAnswer = $mysqli->real_escape_string($_POST['qAnswer']);

    $sql = "UPDATE `tbl_questions` SET qYear='$qYear',qSubject='$qSubject',question='$qQuestion',optionOne='$qOptionOne',optionTwo='$qOptionTwo',optionTwo='$qOptionTwo',optionThree='$qOptionThree',optionFour='$qOptionFour',answer='$qAnswer' WHERE questionID='$qID'";
    $result = mysqli_query($mysqli, $sql);

}

if (isset($_POST['delete_records'])) {

    $qsID = $mysqli->real_escape_string($_POST['qsID']);

    $delete = "DELETE FROM tbl_questions WHERE questionID='$qsID'";
	$del = mysqli_query($mysqli, $delete);


}

?>