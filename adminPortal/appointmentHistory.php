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
include 'includes/modals/appointmenthistory-modal.php';
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
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-calendar-multiple-check"></i> Appointment History</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Appointment History</li>
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
                                        <tr style="text-align: center;">
                                            <th scope="col" style="color: #fff;">#</th>
                                            <!-- <th scope="col" style="color: #fff; width: 50px;">Status</th> -->
                                            <th scope="col" style="color: #fff;">Counseling Type</th>
                                            <th scope="col" style="color: #fff;">Student Name</th>
                                            <th scope="col" style="color: #fff;">Student Number</th>
                                            <th scope="col" style="color: #fff;">Course</th>
                                            <th scope="col" style="color: #fff; display: none;">Email</th>
                                            <th scope="col" style="color: #fff;">Date of Appointment</th>
                                            <th scope="col" style="color: #fff; text-align: center;">Appointment Details</th>
                                            <th scope="col" style="display: none">Approve</th>
                                            <th scope="col" style="display: none;"></th>
                                            <th scope="col" style="display: none;"></th>
                                            <th scope="col" style="display: none;"></th>
                                            <th scope="col" style="display: none;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselinghistory WHERE counselingStatus = 'Completed'");
                                        $i = 1;
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr>
                                                 <td>" . $i . "</td>
                                                 ";
                                            // if ($row['status'] == "Approved") {
                                            //     echo "<td style='text-align:center;'>
                                            //     <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #38b000; color: #fff; border-style:none; border-radius: 20px;'>
                                            //        APPROVED
                                            //    </button></td>";
                                            // } else if ($row['status'] == "Pending") {
                                            //     echo "<td style='text-align:center;'>
                                            //     <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #0096c7; color: #fff; border-style:none; border-radius: 20px;'>
                                            //        PENDING
                                            //    </button></td>";
                                            // } else if ($row['status'] == "Declined") {
                                            //     echo "<td style='text-align:center;'>
                                            //     <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #d00000; color: #fff; border-style:none; border-radius: 20px;'>
                                            //        DECLINED
                                            //    </button></td>";
                                            // }
                                            echo "
                                                 <td>" . $row["counselingType"] . "</td>
                                                 <td>" . $row["requesterName"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentNumber"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentCourse"] . "</td>
                                                 <td style='display: none;'>" . $row["studentEmail"] . "</td>
                                                 <td>" . $row["counselingSchedule"] . "</td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary btngreen scseemorebtn' data-bs-toggle='modal' data-bs-target='#seemoreModal'>
                                                     View Details
                                                 </button></td>
                                                 <td style='display: none;'></td>
                                                <td style='display: none;'>" . $row["counselingDetails"] . "</td>
                                                <td style='display: none;'>" . $row["ID"] . "</td>
                                                <td style='display: none;'>" . $row["counselor"] . "</td>
                                                <td style='display: none;'>" . $row["counselorRemarks"] . "</td>
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
    <script src="src/scripts/modal.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="src/scripts/datatable.js"></script>
    <script>

    </script>
</body>

</html>