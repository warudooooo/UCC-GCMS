<link rel="icon" href="src/images/uccLogo.png">
<style>
    .epal:hover {
        background-color: #f4845f !important;
        transition: 300ms !important;
    }
</style>
<!-- ================================================================================================================================================ -->
<!-- ==================EXPORT DATA MONTH MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="export-individual-reports.php" enctype="multipart/form-data" autocomplete="off">
    <div class="modal fade" id="exportMonthModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Select a Month</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="rowList">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <h4>Year</h4>
                                        <div class="form-group">
                                            <select style="background-color: #555555; color: #fff;" name="eYear" class="form-select form-select-lg mb-3 epal" aria-label=".form-select-lg example" required>
                                                <option class="options" value="" selected required>Select year</option>
                                                <?php
                                                $sqlquery = "SELECT DISTINCT year(dateCompleted) as dateCompleted FROM tbl_counselinghistory";
                                                $sqltran = mysqli_query($mysqli, $sqlquery) or die(mysqli_error($mysqli));
                                                while ($rowList = mysqli_fetch_array($sqltran)) {
                                                ?>
                                                    <option class="options" value="<?php echo $rowList['dateCompleted']; ?>"><?php echo $rowList["dateCompleted"]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>Month</h4>
                                        <div class="form-group">
                                            <select style="background-color: #555555; color: #fff;" name="eMonth" class="form-select form-select-lg mb-3 epal" aria-label=".form-select-lg example" required>
                                                <option class="options" value="" selected required>Select month</option>
                                                <?php
                                                $sqlquery = "SELECT DISTINCT  MONTHNAME(dateCompleted) AS monthInfo, MONTH(dateCompleted) AS monthNumber FROM tbl_counselinghistory";
                                                $sqltran = mysqli_query($mysqli, $sqlquery) or die(mysqli_error($mysqli));
                                                while ($rowList = mysqli_fetch_array($sqltran)) {
                                                ?>
                                                    <option class="options" value="<?php echo $rowList['monthNumber']; ?>"><?php echo $rowList["monthInfo"]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin:auto;">
                    <button type='submit' style="width: 200px;" class='btn btn-primary btnexport' name="exportMonth"> Export </button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal" style="width: 200px;">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================SEE MORE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<div class="modal fade" id="seemoreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content seemore">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Appointment Details</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="col-md-12" style="margin-top: 10px;">Student Name</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf !important;" type="text" id="counselStudent" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top: 10px;">Counseling Type</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf !important;" type="text" id="counselType" class="form-control form-control-line" readonly>
                </div>
                <hr class="hr" />
                <h5 class="col-md-12" style="margin-top: 10px;">Date of Appointment:</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf !important;" type="text" id="counselsSched" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top: 10px;">Date Completed:</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf !important;" type="text" id="dateCompleted" class="form-control form-control-line" readonly>
                </div>
                <hr class="hr" />
                <h5 class="col-md-12" style="margin-top:10px;">Counselor Name</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="counsName" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top:10px;">Counselor Remarks</h5>
                <div class="col-md-12">
                    <textarea rowLists="8" class="form-control form-control-line" id="counsRemarks" style="background-color: #e8eddf; padding: 20px" readonly></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================EXPORT DATA YEAR MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="export-individual-reports.php" enctype="multipart/form-data" autocomplete="off">
    <div class="modal fade" id="exportYearModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Select a Year</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="rowList">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <h4>Year</h4>
                                        <div class="select-menu">
                                            <div class="select-btn">
                                                <span class="sBtn-text">Select here....</span>
                                                <i class="fas fa-caret-down"></i>
                                            </div>
                                            <textarea class="sBtn-text-clone" name="eYear" value="" required></textarea>
                                            <ul class="options">
                                                <?php
                                                $sqlquery = "SELECT DISTINCT year(dateCompleted) as dateCompleted FROM tbl_counselinghistory";
                                                $sqltran = mysqli_query($mysqli, $sqlquery) or die(mysqli_error($mysqli));
                                                while ($rowList = mysqli_fetch_array($sqltran)) {
                                                ?>
                                                    <li class="option">
                                                        <span class="option-text" value="<?php echo $rowList['dateCompleted']; ?>"><?php echo $rowList['dateCompleted']; ?></span>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin:auto;">
                    <button type='submit' style="width: 200px;" class='btn btn-primary btnexport' name="exportYear"> Export </button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal" style="width: 200px;">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>