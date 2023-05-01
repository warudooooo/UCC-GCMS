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
                        <h4 class="page-title"><i class="mdi mdi-account-multiple"></i> Student Details ( <?php echo $_SESSION['sName']; ?> )</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item"><a href="studentLists.php" style="color: #f4845f;">Student List</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Student Details ( <?php echo $_SESSION['sName']; ?> )</li>
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
                <h4 class="card-title"><i class="mdi mdi-tablet-dashboard"></i> Statistics</h4>
                <div class="cards">
                    <div class="cards-single">
                        <div>
                            <?php
                            $studNumber = $_SESSION['stNumber'];

                            $sName = $row['studentName'];
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE studentNumber = '$studNumber'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="color: #333;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="color: #333;">' . $total . '</h1>';
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
                            $studNumber = $_SESSION['stNumber'];

                            $sName = $row['studentName'];
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselinghistory WHERE studentNumber = '$studNumber'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="color: #333;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="color: #333;">' . $total . '</h1>';
                            }
                            ?>
                            <span>Completed Appointments</span></span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-check" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $studNumber = $_SESSION['stNumber'];

                            $sName = $row['studentName'];
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE studentNumber = '$studNumber' AND counselingStatus = 'Pending'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="color: #333;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="color: #333;">' . $total . '</h1>';
                            }
                            ?>
                            <span>Pending Appointments</span></span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-clock" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $studNumber = $_SESSION['stNumber'];

                            $sName = $row['studentName'];
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE studentNumber = '$studNumber'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="color: #333;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="color: #333;">' . $total . '</h1>';
                            }
                            ?>
                            <span>Cancelled Appointments</span></span>
                        </div>
                        <div>
                            <span class="mdi mdi-account-remove" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                    <div class="cards-single">
                        <div>
                            <?php
                            $studNumber = $_SESSION['stNumber'];

                            $sName = $row['studentName'];
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE studentNumber = '$studNumber' AND counselingStatus = 'Pending'");

                            if ($total = mysqli_num_rows($load)) {
                                echo '<h1 style="color: #fff;">' . $total . '</h1>';
                            } else {
                                echo '<h1 style="color: #fff;">' . $total . '</h1>';
                            }
                            ?>
                            <span>Appointment Requests</span></span>
                        </div>
                        <div>
                            <span class="mdi mdi-calendar-clock" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                </div>
                <h4 class="page-title"><i class="mdi mdi-account-multiple" style="margin-top: 20px; margin-bottom: 20px;"></i> <?php echo $_SESSION['sName']; ?>'s Account Details</h4>
                <div class="col-12">
                    <div class="card">
                        <form method="POST" action="" autocomplete="off">
                            <div class="tab-content p-4 p-md-4" id="v-pills-tabContent">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input style="background-color: #edf2fb; pointer-events:none;" type="text" class="form-control" value="<?php echo $_SESSION['sName']; ?>" name="sName" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Student Number</label>
                                            <input style="background-color: #edf2fb; pointer-events:none;" type="text" class="form-control" value="<?php echo $_SESSION['stNumber']; ?>" name="sNumber" style="pointer-events: none;" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Course, Year and Section</label>
                                            <input style="background-color: #edf2fb; pointer-events:none;" type="text" class="form-control" value="<?php echo $_SESSION['stCourse']; ?>" name="sCourse" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input style="background-color: #edf2fb; pointer-events:none;" type="email" class="form-control" value="<?php echo $_SESSION['stEmail']; ?>" name="sEmail" readonly>
                                            <input style="display: none;" name="dbID" value="<?php echo $_SESSION['dbID']; ?>">
                                        </div>
                                    </div>
                                    <?php
                                    $load = mysqli_query($mysqli, "SELECT * FROM tbl_students  WHERE studentNumber = '$studNumber'");
                                    $row = mysqli_fetch_assoc($load);
                                    if ($row["userStatus"] == 1) {
                                        echo ' <div class="col-md-6">
                                                    <button type="submit" name="markasinactive" class="btn btn-primary" style="pointer-events: auto; width: 200px; background: #bc4749; color: #fff; border-style:none; border-radius: 20px;">
                                                    Mark as Inactive
                                                   </button>
                                                   <button type="button" name="editStudent" class="btn btn-primary editBtn" style="pointer-events: auto; width: 200px; background: #0096c7; color: #fff; border-style:none; border-radius: 20px;" data-bs-toggle="modal" data-bs-target="#studenteditModal">
                                                   Edit Student Details
                                                   </button>
                                                    </div>';
                                    } else if ($row["userStatus"] == 0) {
                                        echo '<div class="col-md-6">
                                                    <button type="submit" name="markasactive" class="btn btn-primary" style="pointer-events: auto; width: 200px; background: #2d6a4f; color: #fff; border-style:none; border-radius: 20px;">
                                                    Mark as Active
                                                   </button>
                                                   <button type="button" name="editStudent" class="btn btn-primary editBtn" style="pointer-events: auto; width: 200px; background: #0096c7; color: #fff; border-style:none; border-radius: 20px;"  data-bs-toggle="modal" data-bs-target="#studenteditModal">
                                                   Edit Student Details
                                                   </button>
                                                    </div>';
                                    }
                                    ?>
                                    <?php echo $msg; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <h4 class="page-title" style="<?php
                                                $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE studentNumber = '$studNumber'");
                                                $exists = mysqli_num_rows($load);
                                                if ($exists) {
                                                    echo 'display: auto;';
                                                } else {
                                                    echo 'display: none;';
                                                }
                                                ?>
                "><i class="mdi mdi-account-cancel-outline" style="margin-top: 20px; margin-bottom: 20px;"></i> <?php echo $_SESSION['sName']; ?>'s Sanctions</h4>
                <h4 class="page-title" style="<?php
                                                $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE studentNumber = '$studNumber'");
                                                $exists = mysqli_num_rows($load);
                                                if ($exists) {
                                                    echo 'display: none;';
                                                } else {
                                                    echo 'display: auto;';
                                                }
                                                ?>
                "><i class="mdi mdi-account-cancel-outline" style="margin-top: 20px; margin-bottom: 20px;"></i> <?php echo $_SESSION['sName']; ?> doesn't have any Sanctions</h4>
                <div class="col-12">
                    <div class="card">
                        <form action="export-individual-reports.php" method="POST">
                            <button type='submit' style="margin-top: 15px; width: 230px; margin-left: 15px; float: left;
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE studentNumber = '$studNumber'");
                            $exists = mysqli_num_rows($load);
                            if ($exists) {
                                echo 'display: auto;';
                            } else {
                                echo 'display: none;';
                            }
                            ?>
                            " class='btn btn-primary btnexport' name="exportIndvSanctions"> Export this Data</button>
                        </form>
                        <div class="table-responsive" style="padding: 20px; 
                        <?php
                        $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE studentNumber = '$studNumber'");
                        $exists = mysqli_num_rows($load);
                        if ($exists) {
                            echo 'display: auto;';
                        } else {
                            echo 'display: none;';
                        }
                        ?>">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr style="text-align: center;">
                                        <th scope="col" style="color: #fff; width: 0px;">#</th>
                                        <th scope="col" style="color: #fff; width: 0px; text-align: center;">Sanction Status</th>
                                        <th scope="col" style="color: #fff; width: 0px; text-align: center;">Sanction</th>
                                        <th scope="col" style="color: #fff; width: 150px;">Student Name</th>
                                        <th scope="col" style="color: #fff; width: 100px;">Student Number</th>
                                        <th scope="col" style="color: #fff; width: 100px;">Course</th>
                                        <th scope="col" style="display: none;"></th>
                                        <th scope="col" style="display: none;"></th>
                                        <th scope="col" style="display: none;"></th>
                                        <th scope="col" style="color: #fff; width: 150px;">Date Issued</th>
                                        <th scope="col" style="color: #fff; width: 150px;">View Details</th>
                                        <th scope="col" style="display: none;"></th>
                                        <th scope="col" style="display: none;"></th>
                                        <th scope="col" style="display: none;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $load = mysqli_query($mysqli, "SELECT * FROM tbl_sanctions WHERE studentNumber = '$studNumber'");

                                    $i = 1;
                                    while ($row = $load->fetch_assoc()) {
                                        echo "<tr>
                                                 <td>" . $i . "</td>
                                                 ";
                                        if ($row["sanctionStatus"] == "Pending") {
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
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary btngreen viewdetails' data-bs-toggle='modal' data-bs-target='#detailsModal' style=''>
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
                <h4 class="page-title" style="<?php
                                                $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE studentNumber = '$studNumber'");
                                                $exists = mysqli_num_rows($load);
                                                if ($exists) {
                                                    echo 'display: auto;';
                                                } else {
                                                    echo 'display: none;';
                                                }
                                                ?>
                "><i class="mdi mdi-account-wrench"></i> <?php echo $_SESSION['sName']; ?>'s Appointnent Lists </h4>
                <h4 class="page-title" style="<?php
                                                $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE studentNumber = '$studNumber'");
                                                $exists = mysqli_num_rows($load);
                                                if ($exists) {
                                                    echo 'display: none;';
                                                } else {
                                                    echo 'display: auto;';
                                                }
                                                ?>
                "><i class="mdi mdi-account-wrench"></i> <?php echo $_SESSION['sName']; ?> doesn't have any appointments. </h4>
                <div class="col-12">
                    <div class="card">
                        <form action="export-individual-reports.php" method="POST">
                            <button type='submit' style="margin-top: 15px; width: 230px; margin-left: 15px; float: left;
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE studentNumber = '$studNumber'");
                            $exists = mysqli_num_rows($load);
                            if ($exists) {
                                echo 'display: auto;';
                            } else {
                                echo 'display: none;';
                            }
                            ?>
                            " class='btn btn-primary btnexport' name="exportIndv"> Export this Data</button>
                        </form>
                        <div class="table-responsive" style="padding: 20px;
                            <?php
                            $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE studentNumber = '$studNumber'");
                            $exists = mysqli_num_rows($load);
                            if ($exists) {
                                echo 'display: auto;';
                            } else {
                                echo 'display: none;';
                            }
                            ?>
                            ">
                            <table id="dataTable2" class="table table-bordered table-hover">
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
                                        <th scope="col" style="display: none;"></th>
                                        <th scope="col" style="display: none;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sstNumber = $_SESSION['stNumber'];
                                    $load = mysqli_query($mysqli, "SELECT * FROM tbl_counselings WHERE studentNumber = '$sstNumber' ORDER BY counselingSchedule DESC");
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
                                        } else if ($row['counselingStatus'] == "Cancelled") {
                                            echo "<td style='text-align:center;'>
                                                <button type='button' class='btn btn-primary' style='pointer-events: none; width: 100px; background: #d00000; color: #fff; border-style:none; border-radius: 20px; data-bs-toggle='modal' data-bs-target='#'>
                                                   Cancelled
                                               </button></td>";
                                        }
                                        echo "
                                                 <td>" . $row["counselingType"] . "</td>
                                                 <td>" . $row["requesterName"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentNumber"] . "</td>
                                                 <td style='text-transform: uppercase;'>" . $row["studentCourse"] . "</td>
                                                 <td style='display: none;'>" . $row["studentEmail"] . "</td>
                                                 <td>" . date('F j, Y h:i A (l)', strtotime($row["counselingSchedule"])) . "</td>
                                                 <td style='text-align:center;'><button type='button' class='btn btn-primary btngreen cseemorebtn' data-bs-toggle='modal' data-bs-target='#seemoreModal' style=''>
                                                     View Details
                                                 </button></td>
                                                 <td style='display: none;'></td>
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
    <script>
        $(document).ready(function() {
            $('.viewdetails').on('click', function() {
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#studName').val(data[3]);
                $('#sancType').val(data[7]);
                $('#sancCase').val(data[6]);
                $('#guideMessage').val(data[8]);
                $('#dateIssued').val(data[9]);
                $('#ssDegree').val(data[12]);
                $('#ssID').val(data[11]);

                var markasdone = data[13].trim();
                if (markasdone === 'Pending') {
                    console.log('Pending');
                    $('button.markasdone').show();
                } else if (markasdone === 'Completed') {
                    console.log('Completed');
                    $('button.markasdone').hide();
                }

                
            });
        });

        $(document).ready(function() {
            $('.cseemorebtn').on('click', function() {
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#counselType').val(data[2]);
                $('#ssstName').val(data[3]);
                $('#counselSched').val(data[7]);
                $('#counselingDetails').val(data[10]);
            });
        });
    </script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="src/scripts/datatable.js"></script>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>