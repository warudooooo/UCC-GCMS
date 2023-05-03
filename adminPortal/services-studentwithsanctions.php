<?php
include 'sources/session.php';
include 'sources/src-services-sanctions.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">

</head>
<?php include 'includes/header.php';
include 'includes/modals/services-studentwithsanctions-modal.php'; ?>

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
        <?php include 'includes/sidebar-services.php' ?>

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
                        <h4 class="page-title"><i class="mdi mdi-account-multiple"></i> Students with Sanctions</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Students</li>
                                </ol>
                            </nav>
                        </div>
                        <i><h5 class="page-title" style="margin-top: 10px;">To download individual student reports <a class="hyperlnk" href="studentLists.php"">Click here</a></h5></i>
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
                <h4 class="card-title"><i class="mdi mdi-tablet-dashboard"></i> Statistics</h4>
                <div class="cards ">
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="color: #fff;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="color: #fff;">' . $total . '</h1>';
                            }
                            ?>
                            <span>Total Student with Sanctions</span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-multiple-check" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h4 class="page-title"><i class="mdi mdi-account-multiple-check"></i> Students with Sanctions</h4>
                    <div class="col-12">
                        <div class="card">
                            <form action="export-individual-reports.php" method="POST">
                                <button type='button' style="margin-top: 15px; width: 230px; margin-left: 15px; float: left;" class='btn btn-primary btnexport' data-bs-toggle='modal' data-bs-target='#exportYearModal'> Export all Data by Year</button>
                                <button type='button' style="margin-top: 15px; width: 230px; margin-left: 15px; float: left;" class='btn btn-primary btnexport' data-bs-toggle='modal' data-bs-target='#exportMonthModal'> Export all Data by Month</button>
                                <button type='submit' style="margin-top: 15px; width: 230px; margin-right: 15px;float: right;" class='btn btn-primary btnexport' name="exportAllSanc"> Export all Data</button>
                            </form>
                            <div class="table-responsive" style="padding: 20px;">
                                <table id="dataTable" class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr style="text-align: center;">
                                            <th scope="col" style="color: #fff; width: 20px;">#</th>
                                            <th scope="col" style="color: #fff; width: 0px; text-align: center;">Sanction Status</th>
                                            <th scope="col" style="color: #fff; width: 0px; text-align: center;">Degree</th>
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
                                            <th scope="col" style="display: none;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions");

                                        $i = 1;
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr>
                                                 <td>" . $i . "</td>
                                                 ";
                                            if ($row["sanctionStatus"] == "Active") {
                                            echo "<td style='text-align:center;'>
                                                    <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #E74C3C; color: #fff; border-style:none; border-radius: 20px;'>
                                                    Active
                                                   </button></td>";
                                            } else if ($row["sanctionStatus"] == "Completed") {
                                                echo "<td style='text-align:center;'>
                                                    <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #2E86C1; color: #fff; border-style:none; border-radius: 20px;'>
                                                    Completed
                                                   </button></td>";
                                            }
                                            if ($row["degree"] == "Mild") {
                                                echo "<td style='text-align:center;'>
                                                    <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #f7b267; color: #fff; border-style:none; border-radius: 20px;'>
                                                    Mild
                                                   </button></td>";
                                            } else if ($row["degree"] == "Moderate") {
                                                echo "<td style='text-align:center;'>
                                                    <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #f4845f; color: #fff; border-style:none; border-radius: 20px;'>
                                                    Moderate
                                                   </button></td>";
                                            } else if ($row["degree"] == "Severe") {
                                                echo "<td style='text-align:center;'>
                                                    <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #cc3300; color: #fff; border-style:none; border-radius: 20px; data-bs-toggle='modal' data-bs-target='#'>
                                                    Severe
                                                   </button></td>";
                                            }
                                            echo "
                                                 <td>" . $row["studentName"] . "</td>
                                                 <td>" . $row["studentNumber"] . "</td>
                                                 <td>" . $row["studentCourse"] . "</td>
                                                 <td style='display: none;'>" . $row["sanctionCase"] . "</td>
                                                 <td style='display: none;'>" . $row["sanctionType"] . "</td>
                                                 <td style='display: none;'>" . $row["sanctionMessage"] . "</td>
                                                 <td>" . date('F j, Y h:i A (l)', strtotime($row["dateIssued"])) . "</td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary btngreen seemorebtn' data-bs-toggle='modal' data-bs-target='#seemoreModal' style=''>
                                                     View Details
                                                 </button></td>
                                                 <td style='display: none;'>" . $row["sanctionID"] . "</td>
                                                 <td style='display: none;'>" . $row["degree"] . "</td>
                                                 <td style='display: none;'>" . $row["sanctionStatus"] . "</td>
                                                 </tr>";
                                            $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
        <script src="src/scripts/sanction.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="src/scripts/datatable.js"></script>
        <script>
            const optionMenu = document.querySelector(".select-menu"),
                selectBtn = optionMenu.querySelector(".select-btn"),
                options = optionMenu.querySelectorAll(".option"),
                sBtn_text = optionMenu.querySelector(".sBtn-text"),
                sBtn_text_clone = optionMenu.querySelector(".sBtn-text-clone");


            selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

            options.forEach(option => {
                option.addEventListener("click", () => {
                    let selectedOption = option.querySelector(".option-text").innerText;
                    sBtn_text.innerText = selectedOption;
                    sBtn_text_clone.innerText = selectedOption;

                    optionMenu.classList.remove("active");
                })
            })
        </script>
</body>

</html>