<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- ================================================================================================================================================ -->
<!-- ==================SEE MORE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<div class="modal fade" id="seemoreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content seemore">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Counseling Details</h3>
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
                    <textarea rows="8" class="form-control form-control-line" id="csDetails" style="background-color: #e8eddf; padding: 20px; pointer-events: none;" readonly></textarea>
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