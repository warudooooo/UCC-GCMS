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
                        <?php
                        $sName = $row['studentName'];
                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE studentNumber = '$sNumber'");

                        if ($total = mysqli_num_rows($load)) {
                            echo '<a href="sanctions.php" class="fill-div">' . $total . '</a>';
                        } else {
                            echo '<a href="sanctions.php" class="fill-div">' . $total . '</a>';
                        }
                        ?>
                        <span>Sanctions</span></span>
                    </div>
                    <div>
                        <span class="mdi mdi-account-alert" style="font-size: 3rem;"></span>
                    </div>
                </div>
                <div class="cards-single">
                    <div>
                        <?php
                        $sName = $row['studentName'];
                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_pendingappointments WHERE studentNumber = '$sNumber'");

                        if ($total = mysqli_num_rows($load)) {
                            echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                        } else {
                            echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                        }
                        ?>
                        <span>Pending Appointments</span></span>
                    </div>
                    <div>
                        <span class="mdi mdi-calendar-clock" style="font-size: 3rem;"></span>
                    </div>
                </div>
                <div class="cards-single">
                    <div>
                        <?php
                        $sName = $row['studentName'];
                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_pendingcounsellings WHERE studentNumber = '$sNumber'");

                        if ($total = mysqli_num_rows($load)) {
                            echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                        } else {
                            echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                        }
                        ?>
                        <span>Pending Counselings</span></span>
                    </div>
                    <div>
                        <span class="mdi mdi-calendar-clock" style="font-size: 3rem;"></span>
                    </div>
                </div>
                <div class="cards-single">
                    <div>
                        <?php
                        $sName = $row['studentName'];
                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_approvedappointments WHERE studentNumber = '$sNumber'");

                        if ($total = mysqli_num_rows($load)) {
                            echo '<a href="appointmentscounselings.php" class="fill-div">' . $total . '</a>';
                        } else {
                            echo '<a href="appointmentscounselings.php" class="fill-div">' . $total . '</a>';
                        }
                        ?>
                        <span>Appointments</span></span>
                    </div>
                    <div>
                        <span class="mdi mdi-calendar-multiple-check" style="font-size: 3rem;"></span>
                    </div>
                </div>
                <div class="cards-single">
                    <div>
                        <?php
                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_approvedcounsellings WHERE studentNumber = '$sNumber'");

                        if ($total = mysqli_num_rows($load)) {
                            echo '<a href="appointmentscounselings.php" class="fill-div">' . $total . '</a>';
                        } else {
                            echo '<a href="appointmentscounselings.php" class="fill-div">' . $total . '</a>';
                        }
                        ?>
                        <span>Counselings</span></span>
                    </div>
                    <div>
                        <span class="mdi mdi-calendar-multiple-check" style="font-size: 3rem;"></span>
                    </div>
                </div>
                <div class="cards-single">
                    <div>
                        <?php
                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_appointmenthistory WHERE studentNumber = '$sNumber'");
                        $loadd = mysqli_query($mysqli, "SELECT * FROM tbl_counsellinghistory WHERE studentNumber = '$sNumber'");

                        $total_1 = mysqli_num_rows($load);
                        $total_2 = mysqli_num_rows($loadd);

                        $total = $total_1 + $total_2;
                        if ($total) {
                            echo '<h1 style="pointer-events: none; color: #fff;">' . $total . '</h1>';
                        } else {
                            echo '<h1 style="pointer-events: none; color: #fff;">' . $total . '</h1>';
                        }
                        ?>
                        <span>Completed Appointments and Counselings</span></span>
                    </div>
                    <div>
                        <span class="mdi mdi-book-open-page-variant" style="font-size: 3rem;"></span>
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
                    <h4 class="page-title" style="margin-top: 20px; margin-bottom: 20px; display:block !important;"><i class="mdi mdi-account-wrench"></i> Pending Appointnents </h4>
                    <div class="col-12" style="background-color:#fff;">
                        <div class="table-responsive" style="padding:20px;">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr style="text-align: center;">
                                        <th scope="col" style="color: #fff; width: 20px;">#</th>
                                        <th scope="col" style="color: #fff; width: 200px;">Request Type</th>
                                        <th scope="col" style="color: #fff;">Referral Reason</th>
                                        <th scope="col" style="color: #fff;">Date Created</th>
                                        <th scope="col" style="color: #fff; width: 20px;">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $load = mysqli_query($mysqli, "SELECT * FROM tbl_pendingappointments WHERE studentNumber='{$_SESSION['SESSION_EMAIL']}'");
                                    $i = 1;
                                    while ($row = $load->fetch_assoc()) {
                                        echo "<tr>
                                                 <td>" . $i . "</td>
                                                 <td>" . $row["appointmentType"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["appointmentReason"] . "</td>
                                                 <td>" . $row["requestDate"] . "</td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary deletebtn procdelbtn' data-bs-toggle='modal' data-bs-target='#deleteProctorModal'>
                                                 DELETE
                                                </button></td>
                                                 </tr>";
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4 class="page-title" style="margin-top: 20px; margin-bottom: 20px; display: block !important;"><i class="mdi mdi-account-wrench"></i> Pending Counselings </h4>
                    <div class="col-12" style="background-color:#fff;">
                        <div class="table-responsive" style="padding:20px;">
                            <table id="dataTable2" class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr style="text-align: center;">
                                        <th scope="col" style="color: #fff; width: 20px;">#</th>
                                        <th scope="col" style="color: #fff; width: 200px;">Counseling Type</th>
                                        <th scope="col" style="color: #fff;">Date Created</th>
                                        <th scope="col" style="color: #fff; width: 20px;">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $load = mysqli_query($mysqli, "SELECT * FROM tbl_pendingcounsellings WHERE studentNumber='{$_SESSION['SESSION_EMAIL']}'");
                                    $i = 1;
                                    while ($row = $load->fetch_assoc()) {
                                        echo "<tr>
                                                 <td>" . $i . "</td>
                                                 <td>" . $row["counsellingType"] . "</td>
                                                 <td>" . $row["dateCreated"] . "</td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary deletebtn procdelbtn' data-bs-toggle='modal' data-bs-target='#deleteProctorModal'>
                                                 DELETE
                                                 </button></td>
                                                 </tr>";
                                        $i++;
                                    }
                                    ?>
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