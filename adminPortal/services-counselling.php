<?php include 'sources/session.php';
include 'sources/src-services-counselling.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="src/styles/counsellingStyle.css">
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
        <?php include 'includes/sidebar-services.php' ?>

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-alarm-check"></i> Start Counseling</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Start Counseling</li>
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
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="POST">
                                    <div class="form-group">
                                        <label class="col-md-12">Counseling Type</label>
                                        <div class="select-menu">
                                            <div class="select-btn">
                                                <span class="sBtn-text">select your options</span>
                                                <i class="fas fa-caret-down"></i>
                                            </div>
                                            <textarea class="sBtn-text-clone" name="cType"></textarea>
                                            <ul class="options">
                                                <li class="option">
                                                    <span class="option-text">Behavior Theraphy</span>
                                                </li>
                                                <li class="option">
                                                    <span class="option-text">Cognitive Theraphy</span>
                                                </li>
                                                <li class="option">
                                                    <span class="option-text">Holistic Theraphy</span>
                                                </li>
                                                <li class="option">
                                                    <span class="option-text">Educational Counseling</span>
                                                </li>
                                                <li class="option">
                                                    <span class="option-text">Mental Health Counseling</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input style="pointer-events: none;" type="text" name="sName" placeholder="<?php echo $_SESSION['sName']; ?>" value="<?php echo $_SESSION['sName']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Student Number</label>
                                        <div class="col-md-12">
                                            <input style="pointer-events: none; text-transform: uppercase;" name="sNumber" type="text" placeholder="<?php echo  $_SESSION['sNumber']; ?>" value="<?php echo  $_SESSION['sNumber']; ?>" class="form-control form-control-line" readonly>
                                            <input style="pointer-events: none; text-transform: uppercase; display: none;" name="stEmail" type="text" placeholder="<?php echo $_SESSION['stEmail']; ?>" value="<?php echo $_SESSION['stEmail']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Course</label>
                                        <div class="col-md-12">
                                            <input style="pointer-events: none; text-transform: uppercase;" name="sCourse" type="text" placeholder="<?php echo $_SESSION['sCourse']; ?>" value="<?php echo $_SESSION['sCourse']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Details</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" name="cDetails" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3 class="col-md-12" style="margin-top: 10px;">Select Date and Time</h3>
                                        <div class="col-md-12">
                                            <input class="form-control" type="datetime-local" name="cSchedule" placeholder="MM/DD/YY" required>
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
                                            <button class="btn btn-success text-white" name="submit">Submit</button>
                                        </div>
                                    </div>
                                    <?php echo $msg; ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="src/scripts/counselling.js"></script>
</body>

</html>