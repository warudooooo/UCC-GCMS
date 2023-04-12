<?php
include 'sources/session.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <link rel="icon" href="src/images/uccLogo.png">
</head>
<?php include 'includes/header.php'?>

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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'includes/topbar.php'?>
        <?php include 'includes/sidebar.php'?>

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
                        <h4 class="page-title"><i class="mdi mdi-chart-bar"></i> Appointment Reports</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" style="color: #f4845f;">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reports</li>
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
                        <div class="row">
                  <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                  <a class="btn btn-sm elevation-2" href="#" data-toggle="modal"
                        data-target="#add" style="margin-top: 20px;margin-left: 10px;background-color: rgba(131,219,214);"><i
                        class="fa fa-print"></i> print</a>
                        <a class="btn btn-sm elevation-2" href="#" data-toggle="modal"
                        data-target="#add" style="margin-top: 20px;margin-left: 10px;background-color: rgba(131,219,214);"><i
                        class="fa fa-file-excel"></i> export</a>
                     <div class="card">
                        <div class="card-body">
                           <table class="table table-bordered mytable">
                               <thead>
                                 <tr>
                                    <th>Month</th>
                                    <th>Number of Appointments</th>
                                 </tr>
                                </thead>
                              <tbody>
                                 <tr>
                                    <td>January</td>
                                    <td>2</td>
                                 </tr>
                                 <tr>
                                    <td>February</td>
                                    <td>3</td>
                                 </tr>
                                 <tr>
                                    <td>March</td>
                                    <td>4</td>
                                 </tr>
                                 <tr>
                                    <td>April</td>
                                    <td>5</td>
                                 </tr>
                                 <tr>
                                    <td>May</td>
                                    <td>0</td>
                                 </tr>
                                 <tr>
                                    <td>June</td>
                                    <td>0</td>
                                 </tr>
                                 <tr>
                                    <td>July</td>
                                    <td>0</td>
                                 </tr>
                                 <tr>
                                    <td>August</td>
                                    <td>0</td>
                                 </tr>
                                 <tr>
                                    <td>September</td>
                                    <td>0</td>
                                 </tr>
                                 <tr>
                                    <td>October</td>
                                    <td>0</td>
                                 </tr>
                                 <tr>
                                    <td>November</td>
                                    <td>0</td>
                                 </tr>
                                 <tr>
                                    <td>December</td>
                                    <td>4</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                     <div class="card">
                        <div class="card-body">
                           <canvas id="bargraph" height="250"></canvas>
                        </div>
                     </div>
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

    <?php include 'includes/footer.php'?>
    <script src="../dist/js/chart.js"></script>
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         // Bar Chart
         var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "Novermber", "December"],
            datasets: [{
               label: 'Successful Appointments',
               backgroundColor: 'rgb(79,129,189)',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: [2, 3, 4, 5, 0, 0, 0, 0, 0, 0, 0, 4]
            }]
         };

         var ctx = document.getElementById('bargraph').getContext('2d');
         window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
               responsive: true,
               legend: {
                  display: false,
               }
            }
         });

      });
   </script>

</body>

</html>