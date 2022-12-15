<?php include 'sources/session.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="src/styles/customStyle.css">
</head>
<?php 
include 'includes/header.php';
include 'sources/src-deletedappointment.php';
include 'includes/modals/deletedapp-modal.php';
?>

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
                        <h4 class="page-title"><i class="mdi mdi-calendar-multiple-check"></i> Deleted Appointments</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Deleted Appointments</li>
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
                <h4 class="page-title"><i class="mdi mdi-account-multiple-remove" style="margin-top: 20px; margin-bottom: 20px;"></i> Deleted Pending Appointments</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive" style="padding: 20px;">
                                <table id="dataTable" class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                        <th scope="col" style="color: #fff;">#</th>
                                            <th scope="col" style="color: #fff; display: none;">id</th>
                                            <th scope="col" style="color: #fff;">Meeting Type</th>
                                            <th scope="col" style="color: #fff;">Student Name</th>
                                            <th scope="col" style="color: #fff;">Student Number</th>
                                            <th scope="col" style="color: #fff;">Course</th>
                                            <th scope="col" style="color: #fff; display: none;">Email</th>
                                            <th scope="col" style="color: #fff;">Referral Reason</th>
                                            <th scope="col" style="color: #fff;">Date Created</th>
                                            <th scope="col" style="color: #fff;">More Details</th>
                                            <th scope="col" style="color: #fff;">Restore</th>
                                            <th scope="col" style="color: #fff;">Delete</th>
                                            <th scope="col" style="color: #fff; display: none;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_delpendingappointments");
                                        $i = 1;
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr>
                                                 <td>" . $i . "</td>
                                                 <td style='display: none'>" . $row["appointmentID"] . "</td>
                                                 <td>" . $row["appointmentType"] . "</td>
                                                 <td>" . $row["studentName"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentNumber"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentCourse"] . "</td>
                                                 <td style='display: none'>" . $row["studentEmail"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["appointmentReason"] . "</td>
                                                 <td>" . $row["requestDate"] . "</td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary seemorebtn' data-bs-toggle='modal' data-bs-target='#seemoreModal'>
                                                     SEE MORE
                                                 </button></td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary approvebtn restorebtn' data-bs-toggle='modal' data-bs-target='#restoreModal'>
                                                    Restore
                                                </button></td>
                                                <td style='text-align:center;'><button type='button' class='btn btn-primary deletebtn appointmentdeletebtn' data-bs-toggle='modal' data-bs-target='#appointmentdeletemodal'>
                                                DELETE
                                                </button></td>
                                                 <td style='display: none'>" . $row["appointmentDetails"] . "</td>
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
                <h4 class="page-title"><i class="mdi mdi-account-multiple-remove" style="margin-top: 20px; margin-bottom: 20px;"></i> Deleted Scheduled Appointments</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive" style="padding: 20px;">
                                <table id="dataTable2" class="table table-bordered table-hover">
                                <thead class="table-dark">
                                        <tr>
                                            <th scope="col" style="color: #fff;">#</th>
                                            <th scope="col" style="color: #fff; display: none;">id</th>
                                            <th scope="col" style="color: #fff;">Meeting Type</th>
                                            <th scope="col" style="color: #fff;">Student Name</th>
                                            <th scope="col" style="color: #fff;">Student Number</th>
                                            <th scope="col" style="color: #fff;">Course</th>
                                            <th scope="col" style="color: #fff; display: none;">Email</th>
                                            <th scope="col" style="color: #fff;">Referral Reason</th>
                                            <th scope="col" style="color: #fff;">Schedule</th>
                                            <th scope="col" style="color: #fff;">More Details</th>
                                            <th scope="col" style="color: #fff;">Approve</th>
                                            <th scope="col" style="color: #fff;">Delete</th>
                                            <th scope="col" style="color: #fff; display: none;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_delapprovedappointments");
                                        $i = 1;
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr>
                                                 <td>" . $i . "</td>
                                                 <td style='display: none'>" . $row["appointmentID"] . "</td>
                                                 <td>" . $row["appointmentType"] . "</td>
                                                 <td>" . $row["studentName"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentNumber"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentCourse"] . "</td>
                                                 <td style='display: none'>" . $row["studentEmail"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["appointmentReason"] . "</td>
                                                 <td>" . $row["appointmentSchedule"] . "</td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary seemorebtn' data-bs-toggle='modal' data-bs-target='#seemoreModal'>
                                                 SEE MORE
                                             </button></td>
                                             <td style='text-align:center;'><button type='button' class='btn btn-primary approvebtn srestorebtn' data-bs-toggle='modal' data-bs-target='#srestoreModal'>
                                                Restore
                                            </button></td>
                                            <td style='text-align:center;'><button type='button' class='btn btn-primary deletebtn sappointmentdeletebtn' data-bs-toggle='modal' data-bs-target='#sappointmentdeletemodal'>
                                            DELETE
                                            </button></td>
                                             <td style='display: none'>" . $row["appointmentDetails"] . "</td>
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
    <script src="src/scripts/modal-del.js"></script>
    <script>

    </script>
</body>

</html>