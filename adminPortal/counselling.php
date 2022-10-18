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
<head>
    <link rel="icon" href="src/images/uccLogo.png">
</head>
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
                        <h4 class="page-title"><i class="mdi mdi-account-switch"></i> Counselling History</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Counselling</li>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                            <a class="btn btn-sm elevation-2" href="#" data-toggle="modal"
                        data-target="#add" style="margin-top: 20px;margin-left: 10px;background-color: rgba(131,219,214);"><i
                        class="fa fa-plus"></i> Add New</a>
                        <table id="example" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="text-align: center;">Student Name</th>
                                            <th scope="col" style="text-align: center;">Guidance Message</th>
                                            <th scope="col" style="text-align: center;">Counselor</th>
                                            <th scope="col" style="text-align: center;">Type of Counseling</th>
                                            <th scope="col" style="text-align: center;">Remarks</th>
                                            <th scope="col" style="text-align: center;">Date</th>
                                            <th scope="col" style="text-align: center;">Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Richards, Alden R.</td>
                                            <td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                            <td>Mr. Walter James Bayola</td>
                                            <td>Online</td>
                                            <td>Remarks</td>
                                            <td>Oct 18, 2022</td>
                                            <td>10:00 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Manalo, Ariel P.</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                            <td>Mr. Walter James Bayola</td>
                                            <td>Walk In</td>
                                            <td>Remarks</td>
                                            <td>Oct 18, 2022</td>
                                            <td>10:00 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Sotto, Vic C.</td>
                                            <td>Maecenas mattis tempor libero pretium.</td>
                                            <td>Mr. Walter James Bayola</td>
                                            <td>Online</td>
                                            <td>Remarks</td>
                                            <td>Oct 17, 2022</td>
                                            <td>10:00 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Kho, Hayden</td>
                                            <td>Vestibulum porttitor laoreet faucibus.</td>
                                            <td>Mr. Walter James Bayola</td>
                                            <td>Walk In</td>
                                            <td>Remarks</td>
                                            <td>Oct 17, 2022</td>
                                            <td>10:00 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Baui, Joel R.</td>
                                            <td>Maecenas mattis tempor libero pretium.</td>
                                            <td>Mr. Walter James Bayola</td>
                                            <td>Online</td>
                                            <td>Remarks</td>
                                            <td>Oct 17, 2022</td>
                                            <td>10:00 AM</td>
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

    <?php include 'includes/footer.php'?>

</body>

</html>