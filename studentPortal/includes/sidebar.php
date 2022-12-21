<?php
if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: index.php");
    die();
}

include '../config.php';

$query = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$_SESSION['SESSION_EMAIL']}'");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    $ID = $row['ID'];
    $sNumber = $row['studentNumber'];
    $sName = $row['studentName'];
    $sEmail = $row['studentEmail'];
    $sCourse = $row['studentCourse'];
    $sPassword = $row['studentPassword'];
}
?>

<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<style>
    .user-content a h5,
    .user-content a small {
        color: #343a40 !important;
    }

    .left-sidebar {
        height: auto !important;
    }

    .dropdown-item.active,
    .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #f4845f !important;
    }

    @media only screen and (max-width: 1169px) {
        .left-sidebar {
            margin-top: -15px !important;
        }

        h4 {
            display: none;
        }
    }

    @media only screen and (max-width: 768px) {
        .left-sidebar {
            margin-top: -15px !important;
            transition: 300ms;
            height: 100% !important;
        }
    }
</style>
<aside class="left-sidebar" data-sidebarbg="skin6" style="margin-top: -85px; ;">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile d-flex no-block dropdown m-t-20" style="background-color: #f4845f !important;">
                        <div class="user-pic"><img src="../assets/images/users/d3.jpg" alt="users" class="rounded-circle" width="40" /></div>
                        <div class="user-content hide-menu m-l-10">
                            <a href="#" class="" id="Userdd" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="m-b-0 user-name font-medium"><?php echo $sName ?> <i class="fa fa-angle-down"></i></h5>
                                <small><?php echo $sEmail ?></small>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="Userdd"">
                                <a class=" dropdown-item" href="accountsettings.php"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" style="margin-top:10px;" href="index.php" aria-expanded="false"><i class="mdi mdi-calendar-multiple-check"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="sanctions.php" aria-expanded="false"><i class="mdi mdi-account-alert"></i><span class="hide-menu">Sanctions</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="appointmentscounselings.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Appointments/Counselings</span></a></li>
                <hr class="hr" />
                <h4 class="col-md-12" style="margin-top:10px; margin-left:25px;">Appointment</h4>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="new-appointment.php" aria-expanded="false"><i class="mdi mdi-alarm-check"></i><span class="hide-menu">Request Appointment</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="appointment-history.php" aria-expanded="false"><i class="mdi mdi-account-switch"></i><span class="hide-menu">Appointment History</span></a></li>
                <hr class="hr" />
                <h4 class="col-md-12" style="margin-top:10px; margin-left:25px;">Counseling</h4>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="counselling.php" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu">Request Counseling</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="counselling-history.php" aria-expanded="false"><i class="mdi mdi-account-switch"></i><span class="hide-menu">Counseling History</span></a></li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->