<?php 
include '../config.php';
include 'sources/session.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include 'includes/header.php' ?>

<head>
    <link rel="icon" href="src/images/uccLogo.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="src/styles/dashboardStyles.css">
    <link rel="stylesheet" href="src/styles/all.css">
    <link rel="stylesheet" href="src/styles/customStyle.css">
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
                        <span>My Violations</span></span>
                    </div>
                    <div>
                        <span class="mdi mdi-alert-circle" style="font-size: 3rem;"></span>
                    </div>
                </div>
                <div class="cards-single">
                    <div>
                        <?php
                        $sName = $row['studentName'];
                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_pendingappointments WHERE studentName = '$sName'");

                        if ($total = mysqli_num_rows($load)) {
                            echo '<a href="#" class="fill-div">' . $total . '</a>';
                        } else {
                            echo '<a href="#" class="fill-div">' . $total . '</a>';
                        }
                        ?>
                        <span>My Pending Appointments</span></span>
                    </div>
                    <div>
                        <span class="mdi mdi-account-alert" style="font-size: 3rem;"></span>
                    </div>
                </div>

                <div class="cards-single">
                    <div>
                        <a href="#" class="fill-div">0</a>
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
                    <h4 class="page-title"><i class="mdi mdi-account-wrench"></i> My Appointnents </h4>
                    <div class="col-12">
                        <div class="table-responsive" style="padding: 20px;">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr style="text-align: center;">
                                        <th scope="col" style="color: #fff;">#</th>
                                        <th scope="col" style="color: #fff;">Request Type</th>
                                        <th scope="col" style="color: #fff;">Student Name</th>
                                        <th scope="col" style="color: #fff;">Student Number</th>
                                        <th scope="col" style="color: #fff;">Course</th>
                                        <th scope="col" style="color: #fff;">Email</th>
                                        <th scope="col" style="color: #fff;">Referral Reason</th>
                                        <th scope="col" style="color: #fff;">Date Created</th>
                                        <th scope="col" style="color: #fff;">Edit</th>
                                        <th scope="col" style="color: #fff;">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $load = mysqli_query($mysqli, "SELECT * FROM tbl_pendingappointments WHERE studentNumber='{$_SESSION['SESSION_EMAIL']}'");
                                    $i = 1;
                                    while ($row = $load->fetch_assoc()) {
                                        echo "<tr>
                                                 <td>" . $i . "</td>
                                                 <td>" . $row["studentName"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentNumber"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentCourse"] . "</td>
                                                 <td>" . $row["studentEmail"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["appointmentReason"] . "</td>
                                                 <td>" . $row["appointmentType"] . "</td>
                                                 <td>" . $row["requestDate"] . "</td>
                                                 <td style='text-align:center;'><a href='index.php' style='background: #0096c7; color: #fff; padding: 10px 10px 10px 10px; border-radius: 4px;'>EDIT</a></td>
                                                 <td style='text-align:center;'><a href='javascript:void(0)'><i class='fa fa-trash' style='color: #d00000; font-size: 20px;'></i></a></td>
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
</body>

</html>