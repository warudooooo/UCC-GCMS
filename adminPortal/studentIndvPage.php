<?php
include 'sources/session.php';
include 'sources/src-studentLists.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">
    <link rel="icon" href="src/images/uccLogo.png">
    <link rel="stylesheet" href="src/styles/customStyle.css">
</head>
<?php include 'includes/header.php';
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
        <?php include 'includes/sidebar-students.php';
        include 'includes/modals/studentLists-modal.php'; ?>

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
                        <h4 class="page-title"><i class="mdi mdi-account-multiple"></i> Student Details ( <?php echo $_SESSION['sName']; ?> )</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item"><a href="studentLists.php" style="color: #f4845f;">Student List</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Student Details ( <?php echo $_SESSION['sName']; ?> )</li>
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
                <h4 class="card-title"><i class="mdi mdi-tablet-dashboard"></i> Statistics</h4>
                <div class="cards">
                    <div class="cards-single">
                        <div>
                            <?php
                            $studNumber = $_SESSION['stNumber'];

                            $sName = $row['studentName'];
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE studentNumber = '$studNumber'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="color: #333;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="color: #333;">' . $total . '</h1>';
                            }
                            ?>
                            <span>Sanctions</span></span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-alert" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $studNumber = $_SESSION['stNumber'];

                            $sName = $row['studentName'];
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE studentNumber = '$studNumber' AND counselingStatus = 'Pending'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="color: #fff;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="color: #fff;">' . $total . '</h1>';
                            }
                            ?>
                            <span>Appointment Requests</span></span>
                        </div>
                        <div>
                            <span class="mdi mdi-calendar-clock" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                </div>

                <h4 class="page-title"><i class="mdi mdi-account-multiple-remove" style="margin-top: 20px; margin-bottom: 20px;"></i> Active Student Accounts</h4>
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive" style="padding: 20px;">

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
    <script>
        $(document).ready(function() {
            $('.unvstudenteditbtn').on('click', function() {
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#unvsName').val(data[2]);
                $('#unvsNumber').val(data[3]);
                $('#unvsEmail').val(data[4]);
                $('#unvsCourse').val(data[5]);
                $('#unvsPassword').val(data[6]);
                $('#unvvkey').val(data[7]);
                $('#dbID').val(data[9]);
                $('#regForm').val(data[10]);
            });
        });

        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>