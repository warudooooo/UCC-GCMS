<?php
include 'sources/session.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="icon" href="src/images/uccLogo.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
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
                        <div class="card" style="padding: 20px;">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" style="color:#fff;">Student Name</th>
                                            <th scope="col" style="color:#fff;">Guidance Message</th>
                                            <th scope="col" style="color:#fff;">Counselor</th>
                                            <th scope="col" style="color:#fff;">Meeting Type</th>
                                            <th scope="col" style="color:#fff;">Remarks</th>
                                            <th scope="col" style="color:#fff;">Date</th>
                                            <th scope="col" style="color:#fff;">Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Richards, Alden R.</td>
                                            <td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                            <td>Walter James Bayola</td>
                                            <td>Online</td>
                                            <td>Remarks</td>
                                            <td>Oct 18, 2022</td>
                                            <td>10:00 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Manalo, Jose P.</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                            <td>Walter James Bayola</td>
                                            <td>Walk In</td>
                                            <td>Remarks</td>
                                            <td>Oct 18, 2022</td>
                                            <td>10:00 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Sotto, Vic C.</td>
                                            <td>Maecenas mattis tempor libero pretium.</td>
                                            <td>Walter James Bayola</td>
                                            <td>Online</td>
                                            <td>Remarks</td>
                                            <td>Oct 17, 2022</td>
                                            <td>10:00 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Kho, Hayden</td>
                                            <td>Vestibulum porttitor laoreet faucibus.</td>
                                            <td>Walter James Bayola</td>
                                            <td>Walk In</td>
                                            <td>Remarks</td>
                                            <td>Oct 17, 2022</td>
                                            <td>10:00 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Baui, Joel R.</td>
                                            <td>Maecenas mattis tempor libero pretium.</td>
                                            <td>Walter James Bayola</td>
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

    <?php include 'includes/footer.php' ?>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="src/scripts/datatable.js"></script>
</body>

</html>