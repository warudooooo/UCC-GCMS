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
                        <input style="pointer-events: none; background-color: #f0efeb;" type="text" id="studentName" name="sName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top: 10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #f0efeb;" type="text" id="studentNumber" name="sNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top: 10px;">Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #f0efeb;" type="text" id="studentCourse" name="sCourse" class="form-control form-control-line" readonly>
                    </div>
                    <h3 class="col-md-12" style="margin-top: 10px;">Select Date and Time</h3>
                    <div class="col-md-12">
                        <input class="form-control" type="datetime-local" id="aSchedule" name="aSchedule" placeholder="MM/DD/YY" value="" required>
                    </div>
                    <input style="display:none;" id="appointmentID" name="aID" readonly>
                    <input style="display:none;" id="studentEmail" name="sEmail" readonly>
                    <input style="display:none;" id="appointmentReason" name="aReason" readonly>
                    <input style="display:none;" id="appointmentType" name="aType" readonly>
                    <input style="display:none;" id="Details" name="Details" readonly>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="btnapprove" class="btn btn-primary mdlapprovebtn" name="submit">Approve</button>
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
<!-- ================================================================================================================================================ -->
<!-- ==================DELETE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="appointmentdeletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #d00000;">DELETE</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <h2 class="col-md-12">Are you sure you want to DELETE?</h2>
                        <input style="pointer-events: none; display:none;" type="text" id="appID" name="appID" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none;" type="text" id="appsName" name="appsName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" name="appsNumber" id="appsNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" id="appsCourse" name="appsCourse" class="form-control form-control-line" readonly>
                    </div>
                    <input style="display:none;" id="appsEmail" name="appsEmail" readonly>
                    <input style="display:none;" id="appReason" name="appReason" readonly>
                    <input style="display:none;" id="appType" name="appType" readonly>
                    <input style="display:none;" id="appDate" name="rDate" readonly>
                    <input style="display:none;" id="appDetails" name="appDetails" readonly>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary yesbtn" name="delete_appointment">YES</button>
                </div>
            </div>
        </div>
    </div>
</form>
