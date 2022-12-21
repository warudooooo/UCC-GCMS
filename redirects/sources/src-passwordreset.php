<?php

include '../config.php';
$msg = "";

if (empty($_GET['resetcode'])) {
    header("Location: ../index.php");
} else {
    if (isset($_POST['reset'])) {
        $sNumber = mysqli_real_escape_string($mysqli, $_POST['sNumber']);
        $sEmail = mysqli_real_escape_string($mysqli, $_POST['sEmail']);
        $sPassword = mysqli_real_escape_string($mysqli, md5($_POST['sPassword']));
        $cPassword = mysqli_real_escape_string($mysqli, md5($_POST['cPassword']));
        $rCode = mysqli_real_escape_string($mysqli, $_POST['rCode']);

        if (!empty($rCode)) {
            if (!empty($sNumber) && !empty($sEmail) && !empty($sPassword) &&  !empty($cPassword)) {
                $checkToken = "SELECT resetCode FROM tbl_students WHERE resetCode='$rCode' AND studentNumber='$sNumber'";
                $tokenRun = mysqli_query($mysqli, $checkToken);

                if (mysqli_num_rows($tokenRun) > 0) {

                    if ($sPassword == $cPassword) {
                        $updatePassword = "UPDATE tbl_students SET studentPassword='$sPassword' WHERE resetCode='$rCode'";
                        $passwordRun = mysqli_query($mysqli, $updatePassword);

                        if ($passwordRun) {
                            $removeToken = "UPDATE tbl_students SET resetCode='' WHERE resetCode='$rCode'";
                            $removeTokenRun = mysqli_query($mysqli, $removeToken);
                            header("Location: resetsuccess.php");
                        } else {
                            $msg = "<div class='eml'>Something went wrong. Try again later.</div>";
                        }
                    } else {
                        $msg = "<div class='eml'>Password does not match</div>";
                    }
                } else {
                    $msg = "<div class='eml'>Reset link expired. Please request another reset link.</div>";
                }
            } else {
                $msg = "<div class='eml'>Please Fill up all fields</div>";
            }
        } else {
            header("Location: ../index.php");
        }
    }
}
