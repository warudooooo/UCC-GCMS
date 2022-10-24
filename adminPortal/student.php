<?php
include 'sources/session.php';
include 'sources/src-student.php';
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
                        <h4 class="page-title"><i class="mdi mdi-account-multiple"></i> Students</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Students</li>
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
                <form method="POST" action="" autocomplete="off">
                    <div class="row">
                        <div class="col-lg-12 col-xlg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-horizontal form-material mx-2">
                                        <div class="form-group">
                                            <label class="col-md-12">Student Name (Ex. Bayola, Wally B.)</label>
                                            <div class="col-md-12">
                                                <textarea rows="1" class="form-control form-control-line" name="sName"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Student Number (Ex: 20xxxxxx-M)</label>
                                            <div class="col-md-12">
                                                <textarea rows="1" class="form-control form-control-line" name="sNumber"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Course (Ex. BSxx)</label>
                                            <div class="col-md-12">
                                                <textarea rows="1" class="form-control form-control-line" name="sCourse"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success text-white" style="background-color: #f25c54 !important; border: none;" name="submit" type="submit">Add Student</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </form>
                <div class="row">
                    <h4 class="page-title"><i class="mdi mdi-account-multiple"></i>Verified Students</h4>
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table id="example" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Student Number</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentVerified='yes'");
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr>
                                                 <td>" . $row["studentName"] . "</td>
                                                 <td>" . $row["studentNumber"] . "</td>
                                                 <td>" . $row["studentEmail"] . "</td>
                                                 <td>" . $row["studentCourse"] . "</td>
                                                 <td><a href='javascript:void(0)'><i class='fa fa-edit' style='color: #f4845f;'></i></a>
                                                 <a href='javascript:void(0)'><i class='fa fa-trash' style='color: #f4845f;'></i></a>
                                                 </td>
                                                 </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <h4 class="page-title"><i class="mdi mdi-account-multiple" style="margin-top: 20px; margin-bottom: 20px;"></i>Unverified Students</h4>
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table id="example" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Student Number</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE studentVerified='no'");
                                        while ($row = $load->fetch_assoc()) {
                                            echo "<tr>
                                                 <td>" . $row["studentName"] . "</td>
                                                 <td>" . $row["studentNumber"] . "</td>
                                                 <td>" . $row["studentCourse"] . "</td>
                                                 <td><a href='javascript:void(0)'><i class='fa fa-edit' style='color: #f4845f;'></i></a>
                                                 <a href='javascript:void(0)'><i class='fa fa-trash' style='color: #f4845f;'></i></a>
                                                 </td>
                                                 </tr>";
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