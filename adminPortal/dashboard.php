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
<?php include 'includes/header.php'?>

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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'includes/topbar.php'?>
        <?php include 'includes/sidebar.php'?>

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
                                    <li class="breadcrumb-item"><a href="dashboard.php" style="color: #f4845f;">Home</a></li>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Feeds</h4>
                                <div class="feed-widget">
                                    <ul class="list-style-none feed-body m-0 p-b-20">
                                        <li class="feed-item">
                                            <div class="feed-icon bg-info"><i class="mdi mdi-calendar-multiple-check"></i></div>Number of Appointments<span class="ms-auto font-22 text-muted" style="color:#f4845f !important;">20</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-success"><i class="mdi mdi-alarm-check"></i></div> Number of Completed Appointments<span class="ms-auto font-22 text-muted" style="color:#f4845f !important;">6</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-warning"><i class="mdi mdi-book-open-page-variant"></i></div> Number of Courses<span class="ms-auto font-22 text-muted" style="color:#f4845f !important;">10</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-danger"><i class="mdi mdi-account-multiple"></i></div> Number of Students Registered<span class="ms-auto font-22 text-muted" style="color:#f4845f !important;">6</span>
                                        </li>
                                        <!--<li class="feed-item">
                                            <div class="feed-icon bg-primary"><i class="mdi mdi-account-multiple-plus"></i></div> Number of Reasons for Referral<span class="ms-auto font-22 text-muted" style="color:#f4845f !important;">23</span>
                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
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
                                            <th scope="col">Meeting Link</th>
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
                                            <td>https://meet.google.com/wlybyla
                                                
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
                                            <td>https://meet.google.com/wlybyla
                                                
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

    <?php include 'includes/footer.php'?>
</body>

</html>