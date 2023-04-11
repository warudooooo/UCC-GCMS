<?php
include 'sources/session.php';
include 'sources/src-student-registrarLists.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">
    <style>
        .form-selects {
            background-color: #555555 !important;
            border: none !important;
            color: #fff !important;
            font-size: 18px !important;
            font-weight: 400 !important;
            border-radius: 5px !important;
            width: 100% !important;
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
    </style>
</head>
<?php include 'includes/header.php';


include 'includes/modals/student-registrarLists-modal.php';

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
                        <h4 class="page-title"><i class="mdi mdi-account-multiple"></i> Student Lists (Registrar)</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Students </li>
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
                <div class="row">
                    <?php echo $msg; ?>
                    <h4 class="page-title"><i class="mdi mdi-account-multiple-check"></i> Lists of enrolled students based on the registrar.</h4>
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive" style="padding: 20px;">
                                <form action="" method="POST" style="margin-bottom: 10px;">
                                    <div class="button">
                                        <button type='button' style="width: 200px;" class='btn btn-primary btnorange' data-bs-toggle='modal' data-bs-target='#addstudentModal'>Add Student</button>
                                        <button type='button' style="width: 200px; float: right;" class='btn btn-primary btngreen' data-bs-toggle='modal' data-bs-target='#importDataModal'> Import an Excel file</button>
                                    </div>
                                </form>
                                <table id="dataTable" class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" style="color: #fff; width: 5px;">#</th>
                                            <th scope="col" style="display: none;">ID</th>
                                            <th scope="col" style="color: #fff;">Status</th>
                                            <th scope=" col" style="color: #fff;">Student Number</th>
                                            <th scope=" col" style="color: #fff;">Student Name</th>
                                            <th scope=" col" style="color: #fff;">Course</th>
                                            <th scope=" col" style="color: #fff; display: none;">Address</th>
                                            <th scope=" col" style="color: #fff; display: none;">Email</th>
                                            <th scope=" col" style="color: #fff; display: none;">Phone Number</th>
                                            <th scope=" col" style="color: #fff; text-align: center; width: 100px;">View Details</th>
                                            <th scope=" col" style="color: #fff; text-align: center; width: 100px;">EDIT</th>
                                            <th scope="col" style="color: #fff; text-align: center; width: 100px;">DELETE</th>
                                            <th scope="col" style="display: none;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_studentsregistrar");
                                        $i = 1;
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr>
                                                 <td>" . $i . "</td>
                                                 <td style='display: none;'>" . $row["ID"] . "</td>";
                                            if ($row["studentStatus"] == 'Irregular') {
                                                echo "<td style='text-align:center;'>
                                                        <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #d00000; color: #fff; border-style:none; border-radius: 20px;'>
                                                           Irregular
                                                       </button></td>";
                                            } else if ($row["studentStatus"] == 'Regular') {
                                                echo "<td style='text-align:center;'>
                                                        <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #2a9d8f; color: #fff; border-style:none; border-radius: 20px;'>
                                                           Regular
                                                       </button></td>";
                                            }
                                            echo "
                                                 <td style='text-transform: uppercase;'>" . $row["studentNumber"] . "</td>
                                                 <td>" . $row["studentName"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentCourse"] . "</td>
                                                 <td style='display: none;'>" . $row["studentAddress"] . "</td>
                                                 <td style='display: none;'>" . $row["studentEmail"] . "</td>
                                                 <td style='display: none;'>" . $row["studentPhoneNumber"] . "</td>
                                                 <td style='text-align:center;'><button style='width: 150px;' type='button' class='btn btn-primary btngreen viewdetails' data-bs-toggle='modal' data-bs-target='#viewDetailsModal'>
                                                    View Details
                                                 </button></td>
                                                 <td style='text-align:center;'><button style='width: 150px;' type='button' class='btn btn-primary editbtn' data-bs-toggle='modal' data-bs-target='#editStudentModal'>
                                                    EDIT
                                                 </button></td>
                                                 <td style='text-align:center;'><button style='width: 150px;' type='button' class='btn btn-primary deletebtn' data-bs-toggle='modal' data-bs-target='#deleteScheduleModal'>
                                                     DELETE
                                                 </button></td>
                                                 <td style='display: none;'>" . $row["studentStatus"] . "</td>
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="src/scripts/datatable.js"></script>
    <script src="src/scripts/student-registrar.js"></script>
</body>

</html>