<?php
include 'sources/session.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="icon" href="src/images/uccLogo.png">
</head>
<?php include 'includes/header.php' ?>

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
                        <h4 class="page-title"><i class="mdi mdi-calendar-multiple-check"></i> Pending Appointments List</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pending Appointment</li>
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
                            <div class="table-responsive">
                                <table id="example" class="table table-hover">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <th scope="col">-</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Student Number</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Referral Reason</th>
                                            <th scope="col">Meeting Type</th>
                                            <th scope="col">Date Created</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">Edit/Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>            
                                        <?php
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_pendingappointments");
                                        $i = 1;
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr style='text-align: center;'>
                                                 <td>" . $i . "</td>
                                                 <td>" . $row["studentName"] . "</td>
                                                 <td>" . $row["studentNumber"] . "</td>
                                                 <td>" . $row["studentCourse"] . "</td>
                                                 <td>" . $row["studentEmail"] . "</td>
                                                 <td>" . $row["appointmentReason"] . "</td>
                                                 <td>" . $row["appointmentType"] . "</td>
                                                 <td>" . $row["requestDate"] . "</td>
                                                 <td><a href='index.php' style='color: #38b000; font-weight: 800;'>OPEN</a>
                                                 <td><a href='javascript:void(0)' style='color: #f4845f;'><i class='fa fa-edit' style='color: #0096c7; padding: 0px 10px;'></i></a>
                                                 <a href='javascript:void(0)'><i class='fa fa-trash' style='color: #d00000;'></i></a>
                                                 </td>
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

</body>

</html>