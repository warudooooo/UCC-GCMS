<?php include 'sources/src-requestAppointment.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="icon" href="src/images/uccLogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./src/styles/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./src/scripts/jquery-3.6.0.min.js"></script>
    <script src="./src/scripts/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
    <link rel="stylesheet" href="src/styles/customStyle.css">
    <link rel="stylesheet" type="text/css" href="src/styles/new-appointmentStyle.css">
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

        @media only screen and (max-width: 1572px) {
            .reqForm {
                width: 100% !important;
            }

            .calendaryo {
                display: flex !important;
            }

            .calendaryo .card {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 560px) {
            .reqForm {
                width: 100% !important;
            }

            .calendaryo {
                display: inline-flex !important;
            }

            .calendaryo .card {
                width: 100% !important;
            }
        }
    </style>
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

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h4 class="page-title"><i class="mdi mdi-alarm-check"></i> Request Appointment</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Request Appointment</li>
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
                <!-- Row -->
                <!-- <div class="row"> -->
                <!-- Column -->
                <div class="col-md-4 reqForm" style="float: left;">
                    <div class="card" style="border-radius: 20px !important;">
                        <div class="card-body">
                            <form class="form-horizontal form-material mx-2" method="POST">
                                <div class="form-group" style="margin: auto;">
                                    <div class="form-group">
                                        <label class="col-md-12" style="margin-top: 15px;">Full Name</label>
                                        <div class="col-md-16">
                                            <input style="pointer-events: none;" type="text" placeholder="<?php echo $sName ?>" class="form-control form-control-line sName" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Student Number</label>
                                        <div class="col-md-12">
                                            <input style="pointer-events: none; text-transform: uppercase;" type="text" placeholder="<?php echo $sNumber ?>" class="form-control form-control-line sNumber" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Choose a date and time for your appointment.</label>
                                        <div class="col-md-12">
                                            <input class="form-control datetimepicker" type="datetime-local" name="cSchedule" placeholder=" MM/DD/YY" required>
                                        </div>
                                    </div>
                                    <label class="col-md-12">Services that the guidance offers:</label>
                                    <div class="select-menu">
                                        <div class="select-btn">
                                            <span class="sBtn-text">Select your options</span>
                                            <i class="fas fa-caret-down"></i>
                                        </div>
                                        <textarea class="sBtn-text-clone" name="sOptions" required></textarea>
                                        <ul class="options">
                                            <?php
                                            $query = mysqli_query($mysqli, "SELECT * FROM tbl_counselingservices");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                                <li class="option">
                                                    <span class="option-text" value="<?php echo $row['serviceID']; ?>"><?php echo $row['serviceName']; ?></span>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="form-group" style="margin-top: 10px;">
                                        <label class="col-md-12">Describe your concern</label>
                                        <div class="col-md-12">
                                            <textarea rows="11" placeholder="Enter your concern here.." class="form-control form-control-line" name="sDetails" required></textarea>
                                        </div>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label class="col-md-12">Select Date</label>
                                        <div class="col-md-12">
                                            <input type="date" placeholder="Johnathan Doe" class="form-control form-control-line">
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" name="submit">Request</button>
                                        </div>
                                    </div>
                                    <?php echo $msg; ?>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- </div> -->
            </div>
            <div class="col-md-12 calendaryo">
                <div class="card" style="border-radius: 20px !important;">
                    <div class="container py-4" id="page-container">
                        <div class="col-md-10" style="margin: auto;">
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
                                                <dt class="">Schedule</dt>
                                                <dd id="start" class=""></dd>
                                                <dt class="">Status</dt>
                                                <dd id="status" class=""></dd>
                                            </dl>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btnorange" data-bs-dismiss="modal">Close</button>
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
               
                $schedules = $mysqli->query("SELECT ID,counselingStatus,counselingSchedule,studentNumber FROM `tbl_counselings` WHERE counselingStatus = 'Declined' OR counselingStatus != 'Cancelled'");
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="src/scripts/new-appointmentScript.js"></script>
    <script>
        var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
    </script>
    <script src="src/scripts/script.js"></script>
</body>

</html>