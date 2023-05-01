<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
                <h5 class="col-md-12" style="margin-top:10px;">Student Name</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="studsName" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top:10px;">Counseling Type</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="counselsType" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top: 10px;">Requested Schedule:</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; text-transform: uppercase; background-color: #e8eddf !important;" type="text" id="counselsSched" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top:10px;">Counseling Details</h5>
                <div class="col-md-12">
                    <textarea rows="8" class="form-control form-control-line" id="appointmentDetails" name="cDetails" style="background-color: #e8eddf; padding: 20px; pointer-events: auto;" readonly></textarea>
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
<!-- ==================COMPLETED MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="completedModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #0096c7;">Mark as Completed?</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <h2 class="col-md-12">Student Details</h2>
                    </div>
                    <label class="col-md-12" style="margin-top: 10px;">Full Name</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="studentName" name="sName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top: 10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #e8eddf; text-transform: uppercase;" type="text" id="studentNumber" name="sNumber" class="form-control form-control-line" readonly>
                    </div>
                    <div class="col-md-12">
                        <label class="col-md-12" style="margin-top: 10px;">Course</label>
                        <input style="pointer-events: none; background-color: #e8eddf; text-transform: uppercase;" type="text" id="studentCourse" name="sCourse" class="form-control form-control-line" readonly>
                    </div>
                    <div class="col-md-12" style="margin-top: 10px;">
                        <h4>Person In Charge:</h4>
                        <div class="select-menu">
                            <div class="select-btn">
                                <span class="sBtn-text">Select your options</span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                            <textarea class="sBtn-text-clone" name="pInCharge" value=""></textarea>
                            <ul class="options">
                                <?php
                                $query = mysqli_query($mysqli, "SELECT * FROM tbl_counselors");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <li class="option">
                                        <span class="option-text" value="<?php echo $row['counselorName']; ?>"><?php echo $row['counselorName']; ?></span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <h3 class="col-md-12" style="margin-top: 10px;">Remarks</h3>
                    <div class="col-md-12">
                        <textarea rows="8" class="form-control form-control-line" name="remarks" placeholder="Type here" style="background-color: #eff7f6;" required></textarea>
                    </div>
                    <input style="display:none;" id="scScheds" name="scScheds" readonly>
                    <input style="display:none;" id="scID" name="scID" readonly>
                    <input style="display:none;" id="studentEmail" name="sEmail" readonly>
                    <input style="display:none;" id="scType" name="scType" readonly>
                    <input style="display:none;" id="Details" name="Details" readonly>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button type="submit" class="btn btn-primary mdlapprovebtn" name="completed" style="width: 200px;">Confirm</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal" style="width: 200px;">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================Reschedule MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="reschedModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #f4845f;">RESCHEDULE</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <h2 class="col-md-12">Please select Date and Time for Reschedule</h2>
                        <input style="pointer-events: none; display:none;" type="text" id="scdID" name="scdID" class="form-control form-control-line" readonly>
                    </div>
                    <h5 class="col-md-12" style="margin-top:10px;">Student Name</h5>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #e8eddf !important;" type="text" id="scdName" name="scdName" class="form-control form-control-line" readonly>
                    </div>
                    <h5 class="col-md-12" style="margin-top:10px;">Student Number</h5>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase; background-color: #e8eddf !important;" type="text" name="scdNumber" id="scdNumber" class="form-control form-control-line" readonly>
                    </div>
                    <!-- <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase; background-color: #e8eddf !important;" type="text" id="scdCourse" name="scdCourse" class="form-control form-control-line" readonly>
                    </div> -->
                    <h5 class="col-md-12" style="margin-top: 10px;">Old Schedule:</h5>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase; background-color: #e8eddf !important;" type="text" id="scdSchedule" class="form-control form-control-line" readonly>
                    </div>
                    <h4 class="col-md-12" style="color: #588157; margin-top: 10px;">Choose a date and time of new schedule:</h4>
                    <div class="col-md-12">
                        <input class="form-control datetimepicker" type="datetime-local" name="scdSchedule" placeholder="MM/DD/YY - Select Here" required>
                    </div>
                    <h5 class="col-md-12" style="margin-top:10px;">Reason for rescheduling.</h5>
                    <div class="col-md-12">
                        <textarea rows="8" class="form-control form-control-line" placeholder="Enter your reason here" name="decReason" style="background-color: #edf2fb;" required></textarea>
                    </div>
                    <input style="display:none;" id="scdEmail" name="scdEmail" readonly>
                    <input style="display:none;" id="scdDateapproved" name="scdDateapproved" readonly>
                    <input style="display:none;" id="scdType" name="scdType" readonly>
                    <input style="display:none;" id="scdDetails" name="scdDetails" readonly>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button type="submit" class="btn btn-primary mdlapprovebtn" name="reSchedule" style="width: 200px;">Confirm</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal" style="width: 200px;">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>