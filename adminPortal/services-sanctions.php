<?php
include 'sources/session.php';
include 'sources/src-services-sanctions.php';
// $msg = "";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="src/styles/sanctionsStyle.css">
    <style>
        .form-selects {
            background-color: #555555 !important;
            border: none !important;
            color: #fff !important;
            font-size: 18px !important;
            font-weight: 400 !important;
            border-radius: 5px !important;
            width: 440px !important;
            padding: 8px 0px 8px 20px !important;
        }

        .form-selects:hover {
            background-color: #f4845f !important;
            transition: 300ms;
        }

        .form-selects .options {
            transition: 300ms !important;
            display: flex !important;
            height: 40px !important;
            cursor: pointer !important;
            padding: 0 16px !important;
            border-radius: 5px !important;
            align-items: center !important;
            background-color: #555555 !important;
        }

        .form-selects .options:hover {
            background-color: #f4845f !important;
            transition: 300ms;
        }

        .form-selects .options {
            font-size: 18px !important;
            color: #fff !important;
        }

        @media only screen and (max-width: 560px) {
            .form-selects {
                width: 100% !important;
            }
        }
    </style>
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
                                        <h4 class="col-md-12">Full Name</h4>
                                        <div class="col-md-12">
                                            <input name="sName" style="pointer-events: none;" type="text" placeholder="<?php echo $_SESSION['sancName']; ?>" value="<?php echo $_SESSION['sancName']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="col-md-12">Student Number</h4>
                                        <div class="col-md-12">
                                            <input name="sNumber" style="pointer-events: none; text-transform: uppercase;" type="text" placeholder="<?php echo $_SESSION['sancNumber']; ?>" value="<?php echo $_SESSION['sancNumber']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="col-md-12">Course</h4>
                                        <div class="col-md-12">
                                            <input name="sCourse" style="pointer-events: none; text-transform: uppercase;" type="text" placeholder="<?php echo $_SESSION['sancCourse']; ?>" value="<?php echo $_SESSION['sancCourse']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <input name="sEmail" style="display: none; pointer-events: none; text-transform: uppercase;" type="text" placeholder="<?php echo $_SESSION['sanctEmail']; ?>" value="<?php echo $_SESSION['sanctEmail']; ?>" class="form-control form-control-line" readonly>
                                    <div class="form-group">
                                        <h4 class="col-md-12">Case</h4>
                                        <select style="width: 100% !important;" name="sCase" class="form-selects" aria-label="Default select example" required>
                                            <option class="options" value="" selected>Select case here</option>
                                            <?php
                                            $query = mysqli_query($mysqli, "SELECT * FROM tbl_cases");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                                <option class="options" value="<?php echo $row['caseName']; ?>"><?php echo $row['caseName']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <h4 class="col-md-16">Degree</h4>
                                    <select style="width: 100% !important;" name="degree" class="form-selects" aria-label="Default select example" required>
                                        <option class="options" value="" selected>Select degree here</option>
                                        <option class="options" value="Mild">Mild</option>
                                        <option class="options" value="Moderate">Moderate</option>
                                        <option class="options" value="Severe">Severe</option>
                                    </select>
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <h4 class="col-md-12">Select Sanction</h4>
                                            <select style="width: 100% !important;" name="sType" class="form-selects" aria-label="Default select example" required>
                                                <option class="options" value="" selected>Select case here</option>
                                                <?php
                                                $query = mysqli_query($mysqli, "SELECT * FROM tbl_sanctionservices");
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option class="options" value="<?php echo $row['sanctionName']; ?>"><?php echo $row['sanctionName']; ?></option>
                                                <?php } ?>
                                            </select>
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
                                                <button class="btn btn-success text-white" name="submit" style="border-radius: 20px;">Submit</button>
                                            </div>
                                        </div>
                                        <!-- <?php echo $msg; ?> -->
                                    </div>
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
    <script src="src/scripts/sanctionsScript.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>