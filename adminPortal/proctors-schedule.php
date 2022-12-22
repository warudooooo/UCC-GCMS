<?php
include 'sources/session.php';
include 'sources/src-proctor-schedule.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">

</head>
<?php include 'includes/header.php';


include 'includes/modals/proctor-schedule-modal.php';

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
        <?php include 'includes/sidebar-admtest.php' ?>

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
                        <h4 class="page-title"><i class="mdi mdi-account-multiple"></i> Proctors Lists</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Proctors </li>
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
                <div class="row">
                    <h4 class="page-title"><i class="mdi mdi-account-multiple-check"></i> Add Schedule<i style="margin-left: 10px;"><b>Reminder: Only up to 10 rooms per Proctor</b></i></h4>
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Proctor Name</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" placeholder="<?php echo $_SESSION['pName']; ?>" value="<?php echo $_SESSION['pName']; ?>" name="pName" style="background-color: #edf2fb; pointer-events: none;" maxlength="40" required readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type='button' class='btn btn-primary addstudentbtn addschedbtn' data-bs-toggle='modal' data-bs-target='#addScheduleModal'>Add Schedule</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php echo $msg; ?>
                    <h4 class="page-title"><i class="mdi mdi-account-multiple-check"></i> Proctors Lists</h4>
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive" style="padding: 20px;">
                                <table id="dataTable" class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" style="color: #fff; width: 5px;">#</th>
                                            <th scope="col" style="display: none;">Proctor ID</th>
                                            <th scope="col" style="color: #fff; text-align: center; width: 400px;"">Proctor Name</th>
                                                <th scope=" col" style="color: #fff; text-align: center; width: 400px;"">Room Assigned</th>
                                                <th scope=" col" style="color: #fff; text-align: center; width: 400px;"">Start Time</th>
                                                <th scope=" col" style="color: #fff; text-align: center; width: 400px;"">End Time</th>
                                                <th scope=" col" style="color: #fff; text-align: center; width: 400px;"">Date</th>
                                                <th scope=" col" style="color: #fff; text-align: center; width: 100px;">EDIT</th>
                                            <th scope="col" style="color: #fff; text-align: center; width: 100px;">DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $procName = $_SESSION['pName'];
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_proctorschedule WHERE proctorName='$procName' ");
                                        $i = 1;
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr>
                                                 <td>" . $i . "</td>
                                                 <td style='display: none;'>" . $row["proctorID"] . "</td>
                                                 <td>" . $row["proctorName"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["roomAssigned"] . "</td>
                                                 <td>" . date('h:i A', strtotime($row["startTime"])) . "</td>
                                                 <td>" . date('h:i A', strtotime($row["endTime"])) . "</td>
                                                 <td>" . date('m/d/Y', strtotime($row["examDate"])) . "</td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary editbtn editschedbtn' data-bs-toggle='modal' data-bs-target='#editScheduleModal'>
                                                    EDIT
                                                 </button></td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary deletebtn deleteschedbtn' data-bs-toggle='modal' data-bs-target='#deleteScheduleModal'>
                                                     DELETE
                                                 </button></td>
                                                 </tr>";
                                            $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <form action="export-schedule.php" method="POST">
                                <button type='submit' class='btn btn-primary editbtn' name="export"> Export as Excel file</button>
                                </form>
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="src/scripts/datatable.js"></script>
    <script src="src/scripts/proctors.js"></script>
</body>

</html>