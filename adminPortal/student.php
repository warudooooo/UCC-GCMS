<?php
include 'sources/session.php';
include 'sources/src-student.php';
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
        include 'includes/modals/student-modal.php'; ?>

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
                        <h4 class="page-title"><i class="mdi mdi-account-multiple"></i> Student Accounts</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Student Accounts</li>
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
                <h4 class="page-title"><i class="mdi mdi-account-multiple-check"></i> Add Student Account</h4>
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material mx-2">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type='button' class='btn btn-primary addstudentbtn' data-bs-toggle='modal' data-bs-target='#addstudentModal'>Add Student</button>
                                    </div>
                                </div>
                            </form>
                            <?php echo $msg; ?>
                        </div>
                    </div>
                </div>
                <h4 class="card-title"><i class="mdi mdi-tablet-dashboard"></i> Statistics</h4>
                <div class="cards ">
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE userType = 'user' AND userStatus = '1';");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                            }
                            ?>
                            <span style="pointer-events: none;">Total Active Student Accounts</span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-multiple-check" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentVerified='yes' AND studentEmail != '' AND userType = 'user'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                            }
                            ?>
                            <span style="pointer-events: none;">Verified Student Accounts</span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-multiple-check" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentVerified='no' AND studentEmail != ''");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                            }
                            ?>
                            <span style="pointer-events: none;">Not Verified Student Accounts</span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-multiple-remove" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentPassword='' AND studentEmail=''");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="pointer-events: none;">' . $total . '</h1>';
                            }
                            ?>
                            <span style="pointer-events: none;">Admin Created Student Accounts</span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-wrench" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE userStatus='0'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="color:white; pointer-events: none;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="color:white; pointer-events: none;">' . $total . '</h1>';
                            }
                            ?>
                            <span style="pointer-events: none;">Inactive Student Accounts</span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-wrench" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h4 class="page-title"><i class="mdi mdi-account-wrench"></i> Admin Created Student Accounts</h4>
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive" style="padding: 20px;">
                                <table id="dataTable3" class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" style="color: #fff;">#</th>
                                            <th scope="col" style="color: #fff;">Student Name</th>
                                            <th scope="col" style="color: #fff;">Student Number</th>
                                            <th scope="col" style="color: #fff;">Email</th>
                                            <th scope="col" style="color: #fff;">Course</th>
                                            <th scope="col" style="color: #fff; display:none;">PASS</th>
                                            <th scope="col" style="color: #fff; display:none;">vkey</th>
                                            <th scope="col" style="color: #fff; display:none;">studentVerified</th>
                                            <th scope="col" style="color: #fff; text-align: center; width: 150px;">EDIT</th>
                                            <th scope="col" style="color: #fff; display:none;">ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentPassword='' AND userStatus = '1'");
                                        $i = 1;
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr>
                                                 <td>" . $i . "</td>
                                                 <td>" . $row["studentName"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentNumber"] . "</td>";
                                            if ($row["studentEmail"] == "") {
                                                echo "<td>Email is not available right now.</td>";
                                            } else {
                                                echo "<td>" . $row["studentEmail"] . "</td>";
                                            }
                                            echo "
                                                 <td style='text-transform: uppercase;'>" . $row["studentCourse"] . "</td>
                                                 <td style='display:none;'>" . $row["studentPassword"] . "</td>
                                                 <td style='display:none;'>" . $row["vkey"] . "</td>
                                                 <td style='display:none;'>" . $row["studentVerified"] . "</td>
                                                 <td style='text-align:center;'><button style='width: 150px;' type='button' class='btn btn-primary admstudenteditbtn' data-bs-toggle='modal' data-bs-target='#admstudenteditModal'>
                                                    EDIT
                                                 </button></td>
                                                 <td style='display:none;'>" . $row["ID"] . "</td>
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
</body>

</html>