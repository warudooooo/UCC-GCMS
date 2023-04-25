<?php include 'sources/session.php'; 
if (isset($_POST['downloadFile'])) {

    $id = $_POST['activityID'];

    // fetch file to download from database
    $sql = "SELECT * FROM tbl_activitylog WHERE activityID=$id";
    $result = mysqli_query($mysqli, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['admFile'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['admFile']));
        readfile('uploads/' . $file['admFile']);

        // Now update downloads count
        exit;
    }
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="src/styles/customStyle.css">
    <title>Activity Log</title>
    <link rel="icon" href="src/images/uccLogo.png">
</head>
<?php
include 'includes/header.php';
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

        <?php include 'includes/topbar.php'; ?>
        <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/modals/activitylog-modal.php';?>
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
                        <h4 class="page-title"><i class="mdi mdi-calendar-multiple-check"></i> Activity Log</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Activity Log</li>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive" style="padding: 20px;">
                                <table id="dataTable" class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" style="width: 1px;">#</th>
                                            <th scope="col" style="color: #fff; display: none;">id</th>
                                            <th scope="col" style="color: #fff; width: 150px;">Date of Activity</th>
                                            <th scope="col" style="color: #fff; width: 100px;">Person In Charge</th>
                                            <th scope="col" style="display: none;">file</th>
                                            <th scope="col" style="display: none;">before</th>
                                            <th scope="col" style="display: none;">after</th>
                                            <th scope="col" style="display: none;">reason</th>
                                            <th scope="col" style="color: #fff; display: auto;">Activity</th>
                                            <th scope="col" style="color: #fff; width: 100px; text-align: center;">View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_activitylog ORDER BY activityID DESC");
                                        $i = 1;
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr>
                                                 <td style='width: 1px;'>" . $i . "</td>
                                                 <td style='display: none;'>" . $row["activityID"] . "</td>
                                                 <td>" . date('m/d/Y h:i A', strtotime($row["date"])) . "</td>
                                                 <td style=''>" . $row["admName"] . "</td>
                                                 <td style='display: none;'>" . $row["admFile"] . "</td>
                                                 <td style='display: none;'>" . $row["activityActionBefore"] . "</td>
                                                 <td style='display: none;'>" . $row["activityActionAfter"] . "</td>
                                                 <td style='display: none;'>" . $row["activityReason"] . "</td>
                                                 <td style='display: auto;'>" . $row["activityDetails"] . "</td>
                                                 <td style='text-align:center; width: 100px;'><button style='width: 150px;' type='button' class='btn btn-primary btngreen btnact' data-bs-toggle='modal' data-bs-target='#seemoreModal'>
                                                 View Details
                                                 </button></td>
                                                 </tr>";
                                            $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
    <script src="src/scripts/activitylog.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="src/scripts/datatable.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>