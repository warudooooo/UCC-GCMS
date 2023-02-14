<?php
include 'sources/session.php';
include 'sources/src-services-sanctions.php';
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
                        <h3 class="page-title"><i class="mdi mdi-alarm-check"></i> Create Sanction</h3>
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
                                        <h3 class="col-md-12">Full Name</h3>
                                        <div class="col-md-12">
                                            <input name="sName" style="pointer-events: none;" type="text" placeholder="<?php echo $_SESSION['sancName']; ?>" value="<?php echo $_SESSION['sancName']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3 class="col-md-12">Student Number</h3>
                                        <div class="col-md-12">
                                            <input name="sNumber" style="pointer-events: none; text-transform: uppercase;" type="text" placeholder="<?php echo $_SESSION['sancNumber']; ?>" value="<?php echo $_SESSION['sancNumber']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3 class="col-md-12">Course</h3>
                                        <div class="col-md-12">
                                            <input name="sCourse" style="pointer-events: none; text-transform: uppercase;" type="text" placeholder="<?php echo $_SESSION['sancCourse']; ?>" value="<?php echo $_SESSION['sancCourse']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <input name="sEmail" style="display: none; pointer-events: none; text-transform: uppercase;" type="text" placeholder="<?php echo $_SESSION['sanctEmail']; ?>" value="<?php echo $_SESSION['sanctEmail']; ?>" class="form-control form-control-line" readonly>
                                    <div class="form-group">
                                        <h4 class="col-md-12">Case</h4>
                                        <div class="col-md-12">
                                            <textarea style="background-color: #edf2fb;" rows="3" class="form-control form-control-line" name="sCase" placeholder="Enter here.." required></textarea>
                                        </div>
                                    </div>
                                    <h3 class="col-md-16">Sanction Types </h3>
                                    <div class="form-group">
                                        <label class="col-md-12 sanclbl" style="font-style: italic;"><b>Disciplinary Sanctions:</b> Probation, Suspension, Dismissal </label>
                                        <label class="col-md-12 sanclbl" style="font-style: italic;"><b>Educational Sanctions:</b> Seminar, Assessment, Educational/Reflective Assignment </label>
                                        <div class="form-group">
                                            <h3 class="col-md-12">Select Sanction</h3>
                                            <div class="select-menu">
                                                <div class="select-btn">
                                                    <span class="sBtn-text">Select your options</span>
                                                    <i class="fas fa-caret-down"></i>
                                                </div>
                                                <textarea class="sBtn-text-clone" name="sType"></textarea>
                                                <ul class="options">
                                                    <?php
                                                    $query = mysqli_query($mysqli, "SELECT * FROM tbl_sanctionservices");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <li class="option">
                                                            <span class="option-text" value="<?php echo $row['sanctionID']; ?>"><?php echo $row['sanctionName']; ?></span>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <h4 class="col-md-12">Message</h4>
                                            <div class="col-md-12">
                                                <textarea rows="5" class="form-control form-control-line" style="background-color: #edf2fb;" placeholder="Enter here.." name="sMessage" required></textarea>
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