<?php
include 'sources/session.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<link rel="stylesheet" type="text/css" href="src/styles/dashboardStyles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">
<link rel="stylesheet" href="src/styles/all.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">

<head>
    <link rel="icon" href="src/images/uccLogo.png">
</head>
<?php include 'includes/header.php' ?>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'includes/topbar.php' ?>
        <?php include 'includes/sidebar.php' ?>

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-view-dashboard"></i> Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <h4 class="card-title"><i class="mdi mdi-tablet-dashboard"></i> Statistics</h4>
                <div class="cards ">
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE userType='user'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="student.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="student.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Total Students</span>
                        </div>
                        <div>
                            <a href="student.php" class="fill-div">
                                <span class="mdi mdi-account-multiple" style="font-size: 3rem;"></span>
                            </a>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentVerified='yes' AND userType='user'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="student.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="student.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Verified Students</span>
                        </div>
                        <div>
                            <a href="student.php" class="fill-div">
                                <span class="mdi mdi-account-multiple" style="font-size: 3rem;"></span>
                            </a>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentVerified='no' AND vkey != ''");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="student.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="student.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Not Verified Students</span>
                        </div>
                        <div>
                            <a href="student.php" class="fill-div">
                                <span class="mdi mdi-account-multiple-remove" style="font-size: 3rem;">
                            </a></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_pendingappointments");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="appointment.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="appointment.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Pending Appointments</span></span>
                        </div>
                        <div>
                            <a href="appointment.php" class="fill-div">
                                <span class="mdi mdi-calendar-clock" style="font-size: 3rem;"></span>
                            </a>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_approvedappointments");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="scheduled-appointments.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="scheduled-appointments.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Scheduled Appointments</span></span>
                        </div>
                        <div>
                            <a href="scheduled-appointments.php" class="fill-div">
                                <span class="mdi mdi-calendar-multiple-check" style="font-size: 3rem;">
                            </a></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_appointmenthistory");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="appointment-history.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="appointment-history.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Completed Appointments</span>
                        </div>
                        <div>
                            <a href="appointment-history.php" class="fill-div">
                                <span class="mdi mdi-book-open-page-variant" style="font-size: 3rem;"></span>
                            </a>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_pendingcounsellings");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="pendingcounseling.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="pendingcounseling.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Pending Counselings</span>
                        </div>
                        <div>
                            <a href="pendingcounseling.php" class="fill-div">
                                <span class="mdi mdi-calendar-clock" style="font-size: 3rem;"></span>

                            </a>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_approvedcounsellings");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="scheduled-counseling.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="scheduled-counseling.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Scheduled Counselings</span>
                        </div>
                        <div>
                            <a href="scheduled-counseling.php" class="fill-div">
                                <span class="mdi mdi-calendar-multiple-check" style="font-size: 3rem;"></span>
                            </a>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_counsellinghistory");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="counseling-history.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="counseling-history.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Completed Counselings</span>
                        </div>
                        <div>
                            <a href="counseling-history.php" class="fill-div">
                                <span class="mdi mdi-book-open-page-variant" style="font-size: 3rem;"></span>
                            </a>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="services-studentwithsanctions.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="services-studentwithsanctions.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Student with Sanctions</span>
                        </div>
                        <div>
                            <a href="services-studentwithsanctions.php" class="fill-div">
                                <span class="mdi mdi-account-cancel-outline" style="font-size: 3rem;"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

    <?php include 'includes/footer.php' ?>
</body>

</html>