<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- ================================================================================================================================================ -->
<!-- ==================APPROVE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #f25c54;">Create Schedule</h2>
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
                        <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="studentNumber" name="sNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top: 10px;">Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="studentCourse" name="sCourse" class="form-control form-control-line" readonly>
                    </div>
                    <h5 class="col-md-12" style="margin-top: 10px;">Requested Schedule</h5>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #f0efeb;" type="text" id="requestedSched" name="cSchedule" class="form-control form-control-line" readonly>
                    </div>
                    <!-- <h3 class="col-md-12" style="margin-top: 10px;">Select Date and Time</h3>
                <div class="col-md-12">
                    <input class="form-control" type="datetime-local" name="cSchedule" placeholder="MM/DD/YY" required >
                </div> -->
                    <input style="display:none;" id="counselingID" name="cID" readonly>
                    <input style="display:none;" id="studentEmail" name="sEmail" readonly>
                    <input style="display:none;" id="counselingType" name="cType" readonly>
                    <input style="display:none;" id="Details" name="Details" readonly>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button type="submit" class="btn btn-primary mdlapprovebtn" name="submit">Approve</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
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
                <h5 class="col-md-12" style="margin-top:10px;">Student Name</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="studName" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top:10px;">Counseling Type</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="counselType" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top: 10px;">Requested Schedule:</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; text-transform: uppercase; background-color: #e8eddf !important;" type="text" id="counselSched" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top:10px;">Counseling Details</h5>
                <div class="col-md-12">
                    <textarea rows="8" class="form-control form-control-line" id="counselingDetails" name="cDetails" style="background-color: #e8eddf; padding: 20px; pointer-events: auto;" readonly></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ================================================================================================================================================ -->
<!-- ==================Reject MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="counselingRejectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #d00000;">Decline this Appointment</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <h2 class="col-md-12">Are you sure do you want to DECLINE?</h2>
                        <input style="pointer-events: none; display:none;" type="text" id="counsID" name="counsID" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="counsName" name="counsName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase; background-color: #e8eddf;" type="text" name="counsNumber" id="counsNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase; background-color: #e8eddf;" type="text" id="counsCourse" name="counsCourse" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Reason for rejecting this request.</label>
                    <div class="col-md-12">
                        <textarea rows="8" class="form-control form-control-line" placeholder="Enter your reason here" name="decReason" style="background-color: #edf2fb;" required></textarea>
                    </div>
                    <label class="col-md-12" style="margin-top:10px; color:#d00000">To Decline this request, please enter your password for confirmation.</label>
                    <div class="col-md-12">
                        <input type="password" style="background-color: #ffccd5;" placeholder="Enter you password here" name="adminPassword" class="form-control form-control-line" required>
                    </div>
                    <input style="display:none;" type="text" value="<?php echo  $_SESSION['admPassword']; ?>" name="curPassword" class="form-control form-control-line">
                    <input style="display:none;" id="counsEmail" name="counsEmail" readonly>
                    <input style="display:none;" id="counsType" name="counsType" readonly>
                    <input style="display:none;" id="counsDetails" name="counsDetails" readonly>
                    <input style="display:none;" id="counsDate" name="date" readonly>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button type="submit" class="btn btn-primary mdlbtnred" name="delete_counseling">Confirm</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>