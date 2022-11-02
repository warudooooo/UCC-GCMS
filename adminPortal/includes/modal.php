<link rel="icon" href="src/images/uccLogo.png">
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
                    <input style="pointer-events: none;" type="text" id="studentName" name="sName" class="form-control form-control-line" readonly>
                </div>
                <label class="col-md-12" style="margin-top: 10px;">Student Number</label>
                <div class="col-md-12">
                    <input style="pointer-events: none;" type="text" id="studentNumber" name="sNumber" class="form-control form-control-line" readonly>
                </div>
                <label class="col-md-12" style="margin-top: 10px;">Course</label>
                <div class="col-md-12">
                    <input style="pointer-events: none;" type="text" id="studentCourse" name="sCourse" class="form-control form-control-line" readonly>
                </div>
                <h3 class="col-md-12" style="margin-top: 10px;">Select Date and Time</h3>
                <div class="col-md-12">
                    <input class="form-control" type="datetime-local" name="aSchedule">
                </div>
                <input style="display:none;" id="studentEmail" name="sEmail" readonly>
                <input style="display:none;" id="appointmentReason" name="aReason" readonly>
                <input style="display:none;" id="appointmentType" name="aType" readonly>
                <input style="display:auto;" id="Details" name="Details" readonly>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary mdlapprovebtn" name="submit">Approve</button>
            </div>
        </div>
    </div>
</div>
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
                <div class="col-md-12">
                    <textarea rows="20" class="form-control form-control-line" id="appointmentDetails" name="aDetails" style="background-color: #f0efeb; padding: 20px;" readonly></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</form>