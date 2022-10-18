<?php
session_start();
if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: ../index.php");
    die();
}

include '../config.php';

$query = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentNumber='{$_SESSION['SESSION_EMAIL']}'");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);

    $sName = $row['studentName'];
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<link rel="stylesheet" type="text/css" href="src/styles/dashboardStyles.css">
<link rel="stylesheet" href="src/styles/all.css">
<?php include 'includes/header.php' ?>

<head>
    <link rel="icon" href="src/images/uccLogo.png">
</head>

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
                        <h4 class="page-title"><i class="mdi mdi-calendar-multiple-check"></i> Appointment Reservation List</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-single">
                    <div>
                        <h1>0</h1>
                        <span>My Violations</span>
                    </div>
                    <div>
                        <span class="mdi mdi-alert-circle" style="font-size: 3rem;"></span>
                    </div>
                </div>

                <div class="cards-single">
                    <div>
                        <h1>0</h1>
                        <span>My Pending Appointments</span>
                    </div>
                    <div>
                        <span class="mdi mdi-account-alert" style="font-size: 3rem;"></span>
                    </div>
                </div>

                <div class="cards-single">
                    <div>
                        <h1>3</h1>
                        <span>My Completed Appointments</span>
                    </div>
                    <div>
                        <span class="mdi mdi-account-check" style="font-size: 3rem;"></span>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table id="example" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Referral Reason</th>
                                            <th scope="col">Concern</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Meeting Link / Type</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Conde, Tristan Deo M.</td>
                                            <td>Bullying</td>
                                            <td>Bullying</td>
                                            <td>Oct 17, 2022</td>
                                            <td>11:00 AM</td>
                                            <td>https://meet.google.com/wlybyla
                                                
                                            </td>
                                            <td><label class="label label-success">approved</label></td>
                                        </tr>
                                        <tr>
                                            <td>Baui, Joel R.</td>
                                            <td>Depression</td>
                                            <td>Depression</td>
                                            <td>Oct 19, 2022</td>
                                            <td>1:00 PM</td>
                                            <td>Walk In
                                                
                                            </td>
                                            <td><label class="label label-success">approved</label></td>
                                        </tr>
                                        <tr>
                                            <td>Reyes, Romualdo M.</td>
                                            <td>Stressed</td>
                                            <td>Stressed</td>
                                            <td>Oct 20, 2022</td>
                                            <td>2:00 PM</td>
                                            <td>https://meet.google.com/wlybyla
                                                
                                            </td>
                                            <td><label class="label label-warning">completed</label></td>
                                        </tr>
                                        <tr>
                                            <td>Yambao, Ryan Jacob C.</td>
                                            <td>Bullying</td>
                                            <td>Bullying</td>
                                            <td>Oct 21, 2022</td>
                                            <td>8:00 AM</td>
                                            <td>Walk In
                                                
                                            </td>
                                            <td><label class="label label-danger">canceled</label></td>
                                        </tr>
                                        <tr>
                                            <td>Bayola, Walter James B.</td>
                                            <td>Lying</td>
                                            <td>Lying</td>
                                            <td>Oct 22, 2022</td>
                                            <td>11:00 AM</td>
                                            <td>https://meet.google.com/wlybyla</td>
                                            <td><label class="label label-info">pending</label></td>
                                        </tr>
                                        <tr>
                                            <td>Rivera, Yoshika E.</td>
                                            <td>Lying</td>
                                            <td>Lying</td>
                                            <td>Oct 22, 2022</td>
                                            <td>11:00 AM</td>
                                            <td>https://meet.google.com/wlybyla</td>
                                            <td><label class="label label-info">pending</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
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