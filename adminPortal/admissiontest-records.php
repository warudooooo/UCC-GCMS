<?php
 $msg = "";
include 'sources/session.php';
include 'sources/src-admissiontest-records.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">
    
</head>
<?php include 'includes/header.php';
include 'includes/modals/addrecords-modal.php'; ?>

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
        <?php include 'includes/sidebar-admtest.php' ?>

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
                        <h4 class="page-title"><i class="mdi mdi-account-multiple"></i> Admission Test Records</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Admission Test Records</li>
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
                <!-- <h4 class="card-title"><i class="mdi mdi-tablet-dashboard"></i> Statistics</h4>
                <div class="cards "> -->
                    <!-- <div class="cards-single">
                        <div>
                            <?php
                            // $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentVerified='yes' AND studentEmail != '' AND userType = 'user'");

                            // if ($total = mysqli_num_rows($load)) {
                            //     echo '<a href="#" class="fill-div">' . $total . '</a>';
                            // } else {
                            //     echo '<a href="#" class="fill-div">' . $total . '</a>';
                            // }
                            ?>
                            <span>Verified Students</span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-multiple-check" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            // $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentVerified='no' AND studentEmail != ''");

                            // if ($total = mysqli_num_rows($load)) {
                            //     echo '<a href="#" class="fill-div">' . $total . '</a>';
                            // } else {
                            //     echo '<a href="#" class="fill-div">' . $total . '</a>';
                            // }
                            ?>
                            <span>Not Verified Students</span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-multiple-remove" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            // $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentPassword='' AND studentEmail=''");

                            // if ($total = mysqli_num_rows($load)) {
                            //     echo '<a href="#" class="fill-div">' . $total . '</a>';
                            // } else {
                            //     echo '<a href="#" class="fill-div">' . $total . '</a>';
                            // }
                            ?>
                            <span>Admin Created Students</span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-wrench" style="font-size: 3rem;"></span>
                        </div>
                    </div> -->
                <!-- </div> -->
                <div class="row">
                    <h4 class="page-title"><i class="mdi mdi-account-multiple-check"></i> Attach Files<i style="margin-left: 10px;"><b>Reminder: Only Documents and PDF Files only</b></i></h4>
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material mx-2">
                                            <div class="form-group" style="display: inline-block;">
                                                <div class="col-sm-12" style="display: inline-block;">
                                                <button type='button' class='btn btn-primary addstudentbtn' data-bs-toggle='modal' data-bs-target='#addrecordModal'>Attach File</button>
                                                <?php echo $msg; ?>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <h4 class="page-title"><i class="mdi mdi-account-multiple-check"></i> Admission Test Records List</h4>
                        <div class="col-12">
                            <div class="card">
                                <div class="table-responsive" style="padding: 20px;">
                                    <table id="dataTable" class="table table-bordered table-hover">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col" style="color: #fff;">#</th>
                                                <th scope="col" style="display: none;">#</th>
                                                <th scope="col" style="color: #fff; width: 250px;"">Admission Test Year</th>
                                                <th scope="col" style="color: #fff; width: 500px;"">File</th>
                                                <th scope="col" style="color: #fff; width: 500px;"">Size</th>
                                                <th scope="col" style="color: #fff; width: 500px;"">Total Downloads</th>
                                                <th scope="col" style="color: #fff; text-align: center;">Download</th>
                                                <th scope="col" style="color: #fff; text-align: center;">DELETE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_admissiontestrecords");
                                            $i = 1;
                                            while ($row = $load->fetch_assoc()) {
                                                echo "<tr>
                                                 <td>" . $i . "</td>
                                                 <td style='display: none;'>" . $row["admID"] . "</td>
                                                 <td>" . $row["admYear"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["admFile"] . "</td>
                                                 <td>" . $row["admSize"]/1000 . " KB</td>
                                                 <td>" . $row["admDownloads"] . "</td>
                                                 <td style='text-align:center;'><a href='admissiontest-records.php?file_id=" . $row["admID"] . "'><button type='button' class='btn btn-primary btnblue'>
                                                 Download
                                                 </button></td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary deletebtn recordsdeletebtn' data-bs-toggle='modal' data-bs-target='#recordsdeleteModal'>
                                                DELETE
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
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="src/scripts/datatable.js"></script>
        <script src="src/scripts/admquestion.js"></script>
</body>

</html>