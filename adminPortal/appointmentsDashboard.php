<?php include 'sources/session.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./src/styles/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./src/scripts/jquery-3.6.0.min.js"></script>
    <script src="./src/scripts/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
    <link rel="stylesheet" href="src/styles/customStyle.css">
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }

        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }

        .fc-scrollgrid-sync-inner a {
            color: #333 !important;
        }
    </style>
</head>
<?php
$msg = "";
include 'includes/header.php';
include 'sources/src-counseling.php';
include 'includes/modals/pendingAppointments-modal.php';
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
                        <h4 class="page-title"><i class="mdi mdi mdi-file-document"></i>Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pending Appointment</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $msg; ?>
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
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE counselingStatus='Approved'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="scheduledAppointments.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="scheduledAppointments.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Approved Appointments</span>
                        </div>
                        <div>
                            <a href="scheduledAppointments.php" class="fill-div">
                                <span class="mdi mdi-calendar-multiple-check" style="font-size: 3rem;"></span>
                            </a>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE counselingStatus='Pending'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="pendingAppointments.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="pendingAppointments.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Pending Appointments</span>
                        </div>
                        <div>
                            <a href="pendingAppointments.php" class="fill-div">
                                <span class="mdi mdi-calendar-clock" style="font-size: 3rem;"></span>
                            </a>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE counselingStatus='Declined'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<a href="cancelled-appointments.php" class="fill-div">' . $total . '</a>';
                            } else {
                                echo '<a href="cancelled-appointments.php" class="fill-div">' . $total . '</a>';
                            }
                            ?>
                            <span>Cancelled Appointments</span>
                        </div>
                        <div>
                            <a href="cancelled-appointments.php" class="fill-div">
                                <span class="mdi mdi-calendar-remove" style="font-size: 3rem;"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="container py-4" id="page-container">
                                    <div class="col-md-12" style="margin: auto;">
                                        <div id="calendar">
                                        </div>
                                    </div>
                                <!-- Event Details Modal -->
                                <div class="modal fade" id="event-details-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content approve">
                                            <div class="modal-header rounded-0">
                                                <h2 class="modal-title">Schedule Details</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <dl>
                                                        <dt class="">Counseling Type</dt>
                                                        <dd id="title" class=""></dd>
                                                        <dt class="">Student Name</dt>
                                                        <dd id="description" class=""></dd>
                                                        <dt class="">Student Number</dt>
                                                        <dd id="end" class=""></dd>
                                                        <dt class="">Schedule</dt>
                                                        <dd id="start" class=""></dd>
                                                        <dt class="">Status</dt>
                                                        <dd id="status" class=""></dd>
                                                    </dl>
                                                </div>
                                                <div class="modal-footer" style="margin: auto;">
                                                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content rounded-0">
                                            <div class="modal-header rounded-0">
                                                <h5 class="modal-title">Schedule Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body rounded-0">
                                                <div class="container-fluid">
                                                    <dl>
                                                        <dt class="">Title</dt>
                                                        <dd id="title" class=""></dd>
                                                        <dt class="">Student Name</dt>
                                                        <dd id="description" class=""></dd>
                                                        <dt class="">Student Number</dt>
                                                        <dd id="end" class=""></dd>
                                                        <dt class="">Schedule</dt>
                                                        <dd id="start" class=""></dd>
                                                        <dt class="">Status</dt>
                                                        <dd id="status" class=""></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="modal-footer rounded-0">
                                                <div class="text-end">
                                                    <!-- <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                                                    <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button> -->
                                        <!-- <button type="button" class="btn btn-secondary btn-sm rounded-0 btnorange" style="border-radius: 5px !important;" data-bs-dismiss="modal">Close</button>
                                </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Event Details Modal -->
                        <?php
                        $schedules = $mysqli->query("SELECT * FROM `tbl_counselings` WHERE counselingStatus != 'Declined'");
                        $sched_res = [];
                        foreach ($schedules->fetch_all(MYSQLI_ASSOC) as $row) {
                            $row['sdate'] = date("F d, Y h:i A", strtotime($row['counselingSchedule']));
                            $row['edate'] = date("F d, Y h:i A", strtotime($row['counselingSchedule']));
                            $sched_res[$row['ID']] = $row;
                        }
                        ?>
                        <?php
                        if (isset($mysqli)) $mysqli->close();
                        ?>
                        <!-- ============================================================== -->
                        <!-- End PAge Content -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                    </div>
                </div>
            </div>
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
    <script>
        var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
    </script>
    <script src="./src/scripts/script.js"></script>
</body>

</html>