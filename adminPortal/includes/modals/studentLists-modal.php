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