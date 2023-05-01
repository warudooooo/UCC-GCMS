<?php
require '../vendor/autoload.php';
include 'sources/session.php';
include 'sources/src-student.php';

if (empty($_SESSION['stNumber'])) {
    header("location: student-pending.php");
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">
    <link rel="icon" href="src/images/uccLogo.png">
    <link rel="stylesheet" type="text/css" href="src/styles/customStyle.css">
    <link rel="stylesheet" type="text/css" href="src/styles/sanctionsStyle.css">
</head>
<?php include 'includes/header.php';
include 'includes/modals/student-modal.php'; ?>

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
        <?php include 'includes/sidebar-students.php' ?>

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
                        <h3 class="page-title"><i class="mdi mdi-alarm-check"></i> Student Details</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item"><a href="student-pending.php" style="color: #f4845f;">Pending Accounts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Student Details</li>
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
                                            <input name="sName" style="pointer-events: none;" type="text" placeholder="<?php echo $_SESSION['sName']; ?>" value="<?php echo $_SESSION['sName']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3 class="col-md-12">Student Number</h3>
                                        <div class="col-md-12">
                                            <input name="sNumber" style="pointer-events: none; text-transform: uppercase;" type="text" placeholder="<?php echo $_SESSION['stNumber']; ?>" value="<?php echo $_SESSION['stNumber']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3 class="col-md-12">Course, Year and Section</h3>
                                        <div class="col-md-12">
                                            <input name="sCourse" style="pointer-events: none; text-transform: uppercase;" type="text" placeholder="<?php echo $_SESSION['stCourse']; ?>" value="<?php echo $_SESSION['stCourse']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3 class="col-md-12">Email</h3>
                                        <div class="col-md-12">
                                            <input name="sEmail" style="pointer-events: none; text-transform: uppercase;" type="text" placeholder="<?php echo $_SESSION['stEmail']; ?>" value="<?php echo $_SESSION['stEmail']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <hr class="hr" />
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <i><b>
                                                    <?php
                                                    $studentNumber = $mysqli->real_escape_string($_SESSION['stNumber']);
                                                    $check = mysqli_query($mysqli, "SELECT * FROM tbl_studentsregistrar WHERE studentNumber = '" . $studentNumber . "'");

                                                    if (mysqli_num_rows($check) != 0) {
                                                        echo '<h4 class="col-md-12" style="color: #008000;">Based on the Student Number provided by this student, there was a record in the system that this student was enrolled. Please manually check to confirm.</h4>';
                                                    }else{
                                                        echo "<h4 class='col-md-12' style='color: crimson;'>Based on the Student Number provided by this student, there is no record that this student was enrolled. Please manually check to see if this student was enrolled.</h4>";
                                                    }
                                                    ?>
                                                    
                                                </b></i>
                                        </div>
                                    </div>
                                    <hr class="hr" />
                                    <div class="form-group">
                                        <h3 class="col-md-12">Registration Form</h3>
                                        <div class="col-md-12">
                                            <button type='button' class='btn btn-primary btngreen' style="width: 250px;" data-bs-toggle='modal' data-bs-target='#viewRFModal'>
                                                VIEW REGISTRATION FORM
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3 class="col-md-12">Selfie With Registration Form</h3>
                                        <div class="col-md-12">
                                            <button type='button' class='btn btn-primary btnblue' style="width: 250px;" data-bs-toggle='modal' data-bs-target='#viewSelfieModal'>
                                                VIEW STUDENT SELFIE
                                            </button>
                                        </div>
                                    </div>
                                    <hr class="hr" />
                                    <div class="form-group">
                                        <h4 class="col-md-12">APPROVE / DECLINE STUDENT</h4>
                                        <button type='button' style="width: 200px;" class='btn btn-primary btnorange' class="approvestudentbtn" data-bs-toggle='modal' data-bs-target='#studentApproveModal'>
                                            APPROVE
                                        </button>
                                        <button type='button' style="width: 200px;" class='btn btn-primary btnred' data-bs-toggle='modal' data-bs-target='#studentDeclineModal'>
                                            DECLINE
                                        </button>
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
    <script src="src/scripts/student-datails-modal.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>