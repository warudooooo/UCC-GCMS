<?php
include '../config.php';
include 'sources/session.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include 'includes/header.php';
include 'includes/modals/sanction-modal.php' ?>

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
                        <h4 class="page-title"><i class="mdi mdi-calendar-multiple-check"></i> My Sanction</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sanctions</li>
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
                        <div class="col-12" style="background-color:#fff;">
                            <div class="table-responsive" style="padding:20px;">
                                <table id="dataTable" class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr style="text-align: center;">
                                            <th scope="col" style="color: #fff; width: 20px;">#</th>
                                            <th scope="col" style="color: #fff; width: 0px; text-align: center;">Sanction</th>
                                            <th scope="col" style="color: #fff; width: 150px;">Student Name</th>
                                            <th scope="col" style="color: #fff; width: 100px;">Student Number</th>
                                            <th scope="col" style="color: #fff; width: 100px;">Course</th>
                                            <th scope="col" style="display: none;"></th>
                                            <th scope="col" style="display: none;"></th>
                                            <th scope="col" style="display: none;"></th>
                                            <th scope="col" style="color: #fff; width: 150px;">Date Issued</th>
                                            <th scope="col" style="color: #fff; width: 75px;">View Details</th>
                                            <th scope="col" style="display: none;"></th>
                                            <th scope="col" style="display: none;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE studentNumber='{$_SESSION['SESSION_EMAIL']}'");
                                    
                                        $i = 1;
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr>
                                                 <td>" . $i . "</td>
                                                 ";
                                                 if ($row["sanctionType"] == "Probation") {
                                                    echo "<td style='text-align:center;'>
                                                    <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #f7b267; color: #fff; border-style:none; border-radius: 20px;'>
                                                    Probation
                                                   </button></td>";
                                                } else if ($row["sanctionType"] == "Suspension") {
                                                    echo "<td style='text-align:center;'>
                                                    <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #f4845f; color: #fff; border-style:none; border-radius: 20px;'>
                                                    Suspension
                                                   </button></td>";
                                                } else if ($row["sanctionType"] == "Dismissal") {
                                                    echo "<td style='text-align:center;'>
                                                    <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #cc3300; color: #fff; border-style:none; border-radius: 20px; data-bs-toggle='modal' data-bs-target='#'>
                                                    Dismissal
                                                   </button></td>";
                                                } else if ($row["sanctionType"] == "Seminar") {
                                                    echo "<td style='text-align:center;'>
                                                    <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #f7b267; color: #fff; border-style:none; border-radius: 20px;'>
                                                    Seminar
                                                   </button></td>";
                                                } else if ($row["sanctionType"] == "Assessment") {
                                                    echo "<td style='text-align:center;'>
                                                    <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #f7b267; color: #fff; border-style:none; border-radius: 20px;'>
                                                    Assessment
                                                   </button></td>";
                                                } else if ($row["sanctionType"] == "Educational/Reflective Assignment") {
                                                    echo "<td style='text-align:center;'>
                                                    <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #f7b267; color: #fff; border-style:none; border-radius: 20px; data-bs-toggle='modal' data-bs-target='#'>
                                                    Educational/Reflective Assignment
                                                   </button></td>";
                                                } 
                                                 echo "
                                                 <td>" . $row["studentName"] . "</td>
                                                 <td>" . $row["studentNumber"] . "</td>
                                                 <td>" . $row["studentCourse"] . "</td>
                                                 <td style='display: none;'>" . $row["sanctionCase"] . "</td>
                                                 <td style='display: none;'>" . $row["sanction"] . "</td>
                                                 <td style='display: none;'>" . $row["sanctionMessage"] . "</td>
                                                 <td>" . date('F j, Y h:i A (l)', strtotime($row["dateIssued"])) . "</td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary btngreen cseemorebtn' data-bs-toggle='modal' data-bs-target='#seemoreModal' style=''>
                                                     View Details
                                                 </button></td>
                                                 <td style='display: none;'>" . $row["sanctionID"] . "</td>
                                                 <td style='display: none;'>" . $row["degree"] . "</td>
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
    <script>
        $(document).ready(function() {
            $('.cseemorebtn').on('click', function() {
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#studName').val(data[3]);
                $('#sancType').val(data[6]);
                $('#sancCase').val(data[5]);
                $('#guideMessage').val(data[7]);
                $('#dateIssued').val(data[8]);
                $('#ssDegree').val(data[11]);
            });
        });
    </script>
</body>

</html>