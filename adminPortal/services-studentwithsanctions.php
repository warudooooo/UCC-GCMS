<?php
include 'sources/session.php';
include 'sources/src-services-sanctions.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">
    
</head>
<?php include 'includes/header.php';
include 'includes/modals/services-studentwithsanctions-modal.php'; ?>

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
        <?php include 'includes/sidebar-services.php' ?>

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
                        <h4 class="page-title"><i class="mdi mdi-account-multiple"></i> Students with Sanctions</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Students</li>
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
                <h4 class="card-title"><i class="mdi mdi-tablet-dashboard"></i> Statistics</h4>
                <div class="cards ">
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1>' . $total . '</h1>';
                            } else {
                                echo '<h1>' . $total . '</h1>';
                            }
                            ?>
                            <span>Total Student with Sanctions</span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-multiple-check" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE sanction='Disciplinary Sanction'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1>' . $total . '</h1>';
                            } else {
                                echo '<h1>' . $total . '</h1>';
                            }
                            ?>
                            <span>Students with Disiplinary Sanctions</span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-multiple-remove" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE sanction='Educational Sanction'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="color: white;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="color: white;">' . $total . '</h1>';
                            }
                            ?>
                            <span>Students with Educational Sanctions</span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-wrench" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <h4 class="page-title"><i class="mdi mdi-account-multiple-check"></i> Students with Sanctions</h4>
                        <div class="col-12">
                            <div class="card">
                                <div class="table-responsive" style="padding: 20px;">
                                    <table id="dataTable" class="table table-bordered table-hover">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col" style="color: #fff;">#</th>
                                                <th scope="col" style="color: #fff;">Student Name</th>
                                                <th scope="col" style="color: #fff; display: none;">Student Number</th>
                                                <th scope="col" style="color: #fff;">Course</th>
                                                <th scope="col" style="color: #fff; display: none;">Case</th>
                                                <th scope="col" style="color: #fff;">Sanction Type</th>
                                                <th scope="col" style="color: #fff;">Sanction</th>
                                                <th scope="col" style="color: #fff; display: none;">Message</th>
                                                <th scope="col" style="color: #fff; display: none;">Email</th>
                                                <th scope="col" style="color: #fff;">Details</th>
                                                <th scope="col" style="color: #fff; display: none;">#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions");
                                            $i = 1;
                                            while ($row = $load->fetch_assoc()) {
                                                echo "<tr>
                                                 <td>" . $i . "</td>
                                                 <td>" . $row["studentName"] . "</td>
                                                 <td style='text-transform: uppercase; display: none;'>" . $row["studentNumber"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentCourse"] . "</td>
                                                 <td style='text-transform: uppercase; display: none;'>" . $row["sanctionCase"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["sanction"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["sanctionType"] . "</td>
                                                 <td style='text-transform: uppercase; display: none;'>" . $row["sanctionMessage"] . "</td>
                                                 <td style='text-transform: uppercase; display: none;'>" . $row["studentEmail"] . "</td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary seemorebtn' data-bs-toggle='modal' data-bs-target='#detailsModal'>
                                                     DETAILS
                                                 </button></td>
                                                 <td style='display: none;'>" . $row["sanctionID"] . "</td>
                                                 </tr>";
                                                $i++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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
        <script src="src/scripts/sanction.js"></script>
</body>

</html>