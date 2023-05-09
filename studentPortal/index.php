<?php
include '../config.php';
include 'sources/session.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php
include 'includes/header.php';
include 'sources/src-index.php';
include 'includes/modals/index-modal.php';
?>



<head>
    <link rel="icon" href="src/images/uccLogo.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="src/styles/dashboardStyles.css">
    <link rel="stylesheet" href="src/styles/all.css">
    <link rel="stylesheet" href="src/styles/customStyle.css">
</head>

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
                        <h4 class="page-title"><i class="mdi mdi-view-dashboard"></i> Dashboard </h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-single">
                    <div>
                        <?php
                        $sName = $row['studentName'];
                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE studentNumber = '$sNumber'");

                        if ($total = mysqli_num_rows($load)) {
                            echo '<a href="sanctions.php" class="fill-div">' . $total . '</a>';
                        } else {
                            echo '<a href="sanctions.php" class="fill-div">' . $total . '</a>';
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
                        $sName = $row['studentName'];
                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE studentNumber = '$sNumber' AND counselingStatus = 'Pending'");

                        if ($total = mysqli_num_rows($load)) {
                            echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                        } else {
                            echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                        }
                        ?>
                        <span>Pending Appointments</span></span>
                    </div>
                    <div>
                        <span class="mdi mdi-calendar-clock" style="font-size: 3rem;"></span>
                    </div>
                </div>
                <div class="cards-single">
                    <div>
                        <?php
                        $sName = $row['studentName'];
                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE studentNumber = '$sNumber' AND counselingStatus = 'Approved'");

                        if ($total = mysqli_num_rows($load)) {
                            echo '<a href="appointmentscounselings.php" class="fill-div">' . $total . '</a>';
                        } else {
                            echo '<a href="appointmentscounselings.php" class="fill-div">' . $total . '</a>';
                        }
                        ?>
                        <span>Scheduled Appointments</span></span>
                    </div>
                    <div>
                        <span class="mdi mdi-calendar-multiple-check" style="font-size: 3rem;"></span>
                    </div>
                </div>
                <div class="cards-single">
                    <div>
                        <?php
                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselinghistory WHERE studentNumber = '$sNumber' AND counselingStatus = 'Completed'");

                        $total = mysqli_num_rows($load);
                        if ($total) {
                            echo '<a href="appointment-history.php" class="fill-div">' . $total . '</a>';
                        } else {
                            echo '<a href="appointment-history.php" class="fill-div">' . $total . '</a>';
                        }
                        ?>
                        <span>Completed Appointments</span></span>
                    </div>
                    <div>
                        <span class="mdi mdi-book-open-page-variant" style="font-size: 3rem;"></span>
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
                    <h4 class="page-title"><i class="mdi mdi-account-wrench"></i> My Appointnent Lists </h4>
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive" style="padding: 20px;">
                                <table id="dataTable" class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr style="text-align: center;">
                                            <th scope="col" style="color: #fff;">#</th>
                                            <th scope="col" style="color: #fff; text-align: center;">Status</th>
                                            <!-- <th scope="col" style="color: #fff; width: 50px;">Status</th> -->
                                            <th scope="col" style="color: #fff;">Counselling Type</th>
                                            <th scope="col" style="color: #fff;">Student Name</th>
                                            <th scope="col" style="color: #fff;">Student Number</th>
                                            <th scope="col" style="color: #fff;">Course</th>
                                            <th scope="col" style="color: #fff; display: none;">Email</th>
                                            <th scope="col" style="color: #fff;">Requested Schedule</th>
                                            <th scope="col" style="color: #fff; text-align: center; width: 150px;">Appointment Details</th>
                                            <th scope="col" style="display: none">Approve</th>
                                            <th scope="col" style="color: #fff; text-align: center; width: 100px;">Action</th>
                                            <th scope="col" style="display: none;"></th>
                                            <th scope="col" style="display: none;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE requesterName = '$sName' AND counselingStatus != 'Cancelled' ORDER BY counselingSchedule DESC");
                                        $i = 1;
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr>
                                                 <td>" . $i . "</td>
                                                 ";
                                            if ($row['counselingStatus'] == "Approved") {
                                                echo "<td style='text-align:center;'>
                                                <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #38b000; color: #fff; border-style:none; border-radius: 20px;'>
                                                   APPROVED
                                               </button></td>";
                                            } else if ($row['counselingStatus'] == "Pending") {
                                                echo "<td style='text-align:center;'>
                                                <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #0096c7; color: #fff; border-style:none; border-radius: 20px;'>
                                                   PENDING
                                               </button></td>";
                                            } else if ($row['counselingStatus'] == "Declined") {
                                                echo "<td style='text-align:center;'>
                                                <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #d00000; color: #fff; border-style:none; border-radius: 20px; data-bs-toggle='modal' data-bs-target='#'>
                                                   DECLINED
                                               </button></td>";
                                            }
                                            echo "
                                                 <td>" . $row["counselingType"] . "</td>
                                                 <td>" . $row["requesterName"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentNumber"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentCourse"] . "</td>
                                                 <td style='display: none;'>" . $row["studentEmail"] . "</td>
                                                 <td>" . date('F j, Y h:i A (l)', strtotime($row["counselingSchedule"])) . "</td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary btngreen cseemorebtn' data-bs-toggle='modal' data-bs-target='#seemoreModal' style='width: 120px;'>
                                                     View Details
                                                 </button></td>
                                                 <td style='display: none;'></td>
                                                <td style='text-align:center;'>
                                                ";
                                            if ($row['counselingStatus'] == "Pending") {
                                                echo "<button type='button' style='width: 120px;' class='btn btn-primary btnred cancel' data-bs-toggle='modal' data-bs-target='#cancelModal'>
                                                Cancel
                                                </button></td>";
                                            } else {
                                                echo "<button style='width: 120px; pointer-events: none; background-color: #b1a7a6 !important; color: #fff !important;' type='button' style='width: 120px;' class='btn btn-primary btngreen cdeletebtn'>Cancel
                                                </button></td>";
                                            }
                                            echo "
                                                <td style='display: none;'>" . $row["counselingDetails"] . "</td>
                                                <td style='display: none;'>" . $row["ID"] . "</td>
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
            $('.cseemorebtn').on('click', function() {
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#studName').val(data[3]);
                $('#counselType').val(data[2]);
                $('#counselSched').val(data[7]);
                $('#counselingDetails').val(data[11]);
            });
        });

        $(document).ready(function() {
            $('.cancel').on('click', function() {
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#appID').val(data[12]);
                $('#studsName').val(data[3]);
                $('#counselsType').val(data[2]);
                $('#counselsSched').val(data[7]);
            });
        });
    </script>
</body>

</html>