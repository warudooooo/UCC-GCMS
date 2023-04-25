<?php include 'sources/session.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="src/styles/customStyle.css">
</head>
<?php
include 'includes/header.php';
include 'sources/src-history.php';
include 'includes/modals/appointmentHistory-modal.php';
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
                    <div class="col-12">
                        <h4 class="page-title"><i class="mdi mdi-calendar-multiple-check"></i> Administrative Offenses and Penalties</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Offenses and Penalties</li>
                                </ol>
                                <h5 class="page-title" style="margin-top: 5px;">This is based on the University's Student Handbook. ( ARTICLE III. ADMINISTRATIVE OFENSES AND PENALTIES )</h5>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="border-radius: 20px !important;">
                            <div class="card-body" style="border-radius: 20px !important; background-color: #ffe0cc;">
                                <?php
                                $load = mysqli_query($mysqli, "SELECT * FROM tbl_cases");
                                $i = 1;
                                while ($row = $load->fetch_assoc()) {
                                    echo "
                                <div class='form-group' style='margin: auto; text-align: center;'>
                                        <label class='aboutlbl'>" . $row["caseName"] . "</label>
                                        <div class='col-md-12' style='width: 100%; margin-top: 20px;'>
                                            <textarea class='aboutdesc' rows='11' class='form-control form-control-line' readonly>" . $row["caseDescription"] . "</textarea>
                                        </div>
                                </div>
                                <hr class='hr line' />
                                ";
                                    $i++;
                                }
                                ?>
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
    <a class="gotopbtn" href="#"><i class="mdi mdi-menu-up"></i></a>
    <?php include 'includes/footer.php' ?>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="src/scripts/datatable.js"></script>
    <script>
        $(document).ready(function() {
            $('.scseemorebtn').on('click', function() {
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#counselsSched').val(data[1]);
                $('#counsName').val(data[11]);
                $('#counsRemarks').val(data[12]);
            });
        });
    </script>
</body>

</html>