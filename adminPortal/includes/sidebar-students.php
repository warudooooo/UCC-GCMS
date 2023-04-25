<?php
if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: index.php");
    die();
}

include '../config.php';

$query = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$_SESSION['SESSION_EMAIL']}'");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    $sNumber = $row['studentNumber'];
    $sName = $row['studentName'];
    $sEmail = $row['studentEmail'];
    $sCourse = $row['studentCourse'];
    $sPassword = $row['studentPassword'];
    $admPassword = $row['studentPassword'];
    $_SESSION['admPassword'] = $admPassword;
}
?>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
<style>
    .user-content a h5,
    .user-content a small {
        color: #343a40 !important;
    }

    .left-sidebar {
        height: auto !important;
    }

    .dropdown-item.active, .dropdown-item:active {
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

        h4 {
            display: block !important;
        }
    }
</style>
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6" style="margin-top: -85px;">
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
                                <small style="color: black;">Administrator</small>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="Userdd"">
                            <a class=" dropdown-item" href="accountsettings.php"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="manageaccounts.php"><i class="ti-settings m-r-5 m-l-5"></i> Manage Accounts</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="activitylog.php"><i class="ti-settings m-r-5 m-l-5"></i> Activity Log</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                <!-- User Profile-->
                <h4 class="col-md-12" style="margin-top:20px; margin-left:25px;">Student Dashboard</h4>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Home</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="student.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Student Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="studentLists.php" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Student Accounts List</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="student-pending.php" aria-expanded="false"><i class="mdi mdi-account-clock"></i><span class="hide-menu">Pending Student Accounts</span></a></li>
                <hr class="hr" />
                <h4 class="col-md-12" style="margin-top:20px; margin-left:25px;">Maintenance</h4>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="student-registrarLists.php" aria-expanded="false"><i class="mdi mdi-briefcase-edit-outline"></i><span class="hide-menu">Enrolled Students Lists</span></a></li>
                <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admissiontest-questions.php" aria-expanded="false"><i class="mdi mdi-newspaper-variant-outline"></i><span class="hide-menu">Admission Test Questions</span></a></li> -->
                <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="schedule.php" aria-expanded="false"><i class="mdi mdi-alarm-check"></i><span class="hide-menu">Appointment Schedule</span></a></li> -->
                <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="appointment-reports.php" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Appointment Reports</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="referral-reports.php" aria-expanded="false"><i class="mdi mdi-chart-pie"></i><span class="hide-menu">Referral Reports</span></a></li>-->
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->