<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="src/styles/customStyle.css">
<!-- ================================================================================================================================================ -->
<!-- ==================VIEW STUDENT MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="studentIndvPage.php" autocomplete="off">
    <div class="modal fade" id="viewstudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #457b9d;">VIEW STUDENT DETAILS</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="background-color: #e8eddf; pointer-events: none;" type="text" name="sName" id="unvsName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="background-color: #e8eddf; pointer-events: none; text-transform: uppercase;" type="text" name="stNumber" id="unvsNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="background-color: #e8eddf; pointer-events: none; text-transform: uppercase;" type="text" name="stCourse" id="unvsCourse" class="form-control form-control-line" readonly>
                    </div>
                    <input style="display:none;" id="dbID" name="dbID">
                    <input style="display:none;" id="regForm" name="regForm">
                    <input style="display:none;" id="unvsEmail" name="stEmail">
                </div>
                <div class="modal-footer center-all">
                    <button type="submit" class="btn btn-primary btnApprove" value="view_student" name="view_student">VIEW STUDENT DETAILS</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" style="width: 200px;" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================SEE MORE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <h5 class="col-md-12" style="margin-top:10px;">Date Issued</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="dateIssued" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top:10px;">Sanction Type</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="sancType" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top:10px;">Degree</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="ssDegree" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top: 10px;">Case</h5>
                <div class="col-md-12">
                    <textarea rows="3" class="form-control form-control-line" id="sancCase" style="background-color: #e8eddf; padding: 20px; pointer-events: none;" readonly></textarea>
                </div>
                <h5 class="col-md-12" style="margin-top:10px;">Guidance Message</h5>
                <div class="col-md-12">
                    <textarea rows="8" class="form-control form-control-line" id="guideMessage" style="background-color: #e8eddf; padding: 20px; pointer-events: none;" readonly></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
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
                    <textarea rows="8" class="form-control form-control-line" id="counselingDetails" name="cDetails" style="background-color: #e8eddf; padding: 20px; pointer-events: none;" readonly></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>