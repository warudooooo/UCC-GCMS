<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="src/styles/customStyle.css">
<!-- ================================================================================================================================================ -->
<!-- ==================VIEW DETAILS MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="activitylog.php" enctype="multipart/form-data" autocomplete="off">
    <div class="modal fade" id="seemoreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content seemore">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Activity Details</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="col-md-12" style="margin-top:10px;">Date of Activity</h5>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="activityDate" class="form-control form-control-line" readonly>
                    </div>
                    <h5 class="col-md-12" style="margin-top:10px;">Person In Charge</h5>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="pIC" class="form-control form-control-line" readonly>
                    </div>
                    <h5 class="col-md-12 activity" style="margin-top:10px;">Activity</h5>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="activityDetails" class="form-control form-control-line" readonly>
                    </div>
                    <hr class="hr before" />
                    <h4 class="col-md-12 databefore" style="margin-top: 10px; text-align: center;">DATA BEFORE</h4>
                    <div class="col-md-12">
                        <input style="display:none;" type="text" id="file" name="fileName" class="form-control form-control-line" readonly>
                    </div>
                    <h5 class="col-md-12 detailsbefore" id="activityDetailsBeforeLabel" style="margin-top:10px;">Details</h5>
                    <div class="col-md-12">
                        <textarea rows="7" class="form-control form-control-line" id="activityDetailsBefore" style="background-color: #e8eddf; padding: 20px; pointer-events: auto;" readonly></textarea>
                    </div>
                    <hr class="hr" />
                    <h4 class="col-md-12 afterchanges" style="margin-top: 10px; text-align: center;">DATA AFTER</h4>
                    <h5 class="col-md-12 details" style="margin-top:10px;">Details</h5>
                    <div class="col-md-12">
                        <textarea rows="7" class="form-control form-control-line" id="activityDetailsAfter" style="background-color: #e8eddf; padding: 20px; pointer-events: auto;" readonly></textarea>
                    </div>
                    <h5 class="col-md-12 reason" style="margin-top:10px;">Reason</h5>
                    <div class="col-md-12">
                        <textarea rows="7" class="form-control form-control-line" id="activityReason" style="background-color: #e8eddf; padding: 20px; pointer-events: none;" readonly></textarea>
                    </div>
                    <input style="display: none;" id="activityID" name="activityID">
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button style='width:200px;' type='submit' class='btn btn-primary btngreen download' style='width: 150px;' name="downloadFile">Download File</button>
                    <button style='width:200px;' type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>