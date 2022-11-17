<?php
include 'sources/session.php';
include 'sources/src-student.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="src/styles/sanctionsStyle.css">
</head>
<?php include 'includes/header.php';
include 'includes/modals/services-modal.php'; ?>

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
                        <h4 class="page-title"><i class="mdi mdi-alarm-check"></i> Create Sanction</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create Sanction</li>
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
                                        <h4 class="col-md-12">Sanction Type</h4>
                                        <div class="select-menu">
                                            <div class="select-btn">
                                                <span class="sBtn-text">Select your options</span>
                                                <i class="fas fa-caret-down"></i>
                                            </div>
                                            <textarea class="sBtn-text-clone" name="sOptions"></textarea>
                                            <ul class="options">
                                                <li class="option">
                                                    <span class="option-text">Disciplinary Sanction</span>
                                                </li>
                                                <li class="option">
                                                    <span class="option-text">Educational Sanction</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="col-md-12">Full Name</h4>
                                        <div class="col-md-12">
                                            <input style="pointer-events: none;" type="text" placeholder="<?php echo $_POST["sName"]; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="col-md-12">Student Number</h4>
                                        <div class="col-md-12">
                                            <input style="pointer-events: none; text-transform: uppercase;" type="text" placeholder="<?php echo $sNumber ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3 class="col-md-12">Type </h3>
                                        <label class="col-md-12"><b>Disciplinary Sanctions:</b> Probation, Suspension, Dismissal </label>
                                        <label class="col-md-12"><b>Educational Sanctions:</b> Seminar, Assessment, Educational/Reflective Assignment </label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="sReason" style="text-transform: uppercase;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">State Details</label>
                                        <div class="col-md-12">
                                            <textarea rows="8" class="form-control form-control-line" name="sDetails"></textarea>
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
                                    <!-- <?php echo $msg; ?> -->
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
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="src/scripts/sanctionsScript.js"></script>
</body>

</html>