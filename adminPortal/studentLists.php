<?php
include 'sources/session.php';
include 'sources/src-studentLists.php';
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
        include 'includes/modals/studentLists-modal.php'; ?>

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
                                    <li class="breadcrumb-item active" aria-current="page">Pending Accounts</li>
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
                <h4 class="page-title"><i class="mdi mdi-account-multiple-remove" style="margin-top: 20px; margin-bottom: 20px;"></i> Active Student Accounts</h4>
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive" style="padding: 20px;">
                            <table id="dataTable2" class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col" style="color: #fff;">#</th>
                                        <th scope="col" style="color: #fff; text-align: center;">Status</th>
                                        <th scope="col" style="color: #fff;">Student Name</th>
                                        <th scope="col" style="color: #fff;">Student Number</th>
                                        <th scope="col" style="color: #fff;">Email</th>
                                        <th scope="col" style="color: #fff; width: 150px !important;">Course / Year / Section</th>
                                        <th scope="col" style="color: #fff; display:none;">PASS</th>
                                        <th scope="col" style="color: #fff; display:none;">vkey</th>
                                        <th scope="col" style="color: #fff; display:none;">studentVerified</th>
                                        <th scope="col" style="color: #fff; display:none;">ID</th>
                                        <th scope="col" style="color: #fff; display:none;">regForm</th>
                                        <th scope="col" style="color: #fff;">Creation Date</th>
                                        <th scope="col" style="color: #fff; text-align: center;">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $load = mysqli_query($mysqli, "SELECT * FROM tbl_students WHERE userType ='user' order by studentVerified DESC, userStatus DESC");
                                    $i = 1;
                                    while ($row = $load->fetch_assoc()) {
                                        echo "<tr>
                                                 <td>" . $i . "</td>
                                                ";
                                        if ($row['userStatus'] == '0') {
                                            echo "<td style='text-align:center;'>
                                                        <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #6a040f; color: #fff; border-style:none; border-radius: 20px;'>
                                                           Inactive
                                                       </button></td>";
                                        } else if ($row['studentVerified'] == 'no') {
                                            echo "<td style='text-align:center;'>
                                                <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #d00000; color: #fff; border-style:none; border-radius: 20px;'>
                                                   Not Verified
                                               </button></td>";
                                        } else if ($row['studentVerified'] == 'yes') {
                                            echo "<td style='text-align:center;'>
                                                <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #2a9d8f; color: #fff; border-style:none; border-radius: 20px;'>
                                                   Verified
                                               </button></td>";
                                        }
                                        echo "
                                                 <td>" . $row["studentName"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentNumber"] . "</td>
                                                 ";
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
                                                 <td style='display:none;'>" . $row["ID"] . "</td>
                                                 <td style='display:none;'>" . $row["regForm"] . "</td>
                                                 <td>" . date('m/d/Y h:i A', strtotime($row["studentCreateDate"])) . "</td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary btnApprove unvstudenteditbtn' data-bs-toggle='modal' data-bs-target='#viewstudentModal'>
                                                 View Student Details
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
    <script>
        $(document).ready(function() {
            $('.unvstudenteditbtn').on('click', function() {
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#unvsName').val(data[2]);
                $('#unvsNumber').val(data[3]);
                $('#unvsEmail').val(data[4]);
                $('#unvsCourse').val(data[5]);
                $('#unvsPassword').val(data[6]);
                $('#unvvkey').val(data[7]);
                $('#dbID').val(data[9]);
                $('#regForm').val(data[10]);
            });
        });

        if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
    </script>
    <script src="src/scripts/datatable.js"></script>
</body>

</html>