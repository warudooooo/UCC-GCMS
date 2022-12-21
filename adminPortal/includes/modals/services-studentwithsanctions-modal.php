<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="src/styles/customStyle.css">
<!-- ================================================================================================================================================ -->
<!-- ==================Details MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #0096c7;">Select Options</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; pointer-events:none;" type="text" name="sName" id="ssName" class="form-control form-control-line">
                    </div>
                    <div class="col-md-12">
                        <input style="display: none; background-color: #edf2fb; pointer-events:none; text-transform: uppercase;" type="text" name="ssNumber" id="sNumber" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; pointer-events:none; text-transform: uppercase; text-transform: uppercase;" type="text" id="ssCourse" name="sCourse" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Sanction</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; pointer-events:none; text-transform: uppercase; text-transform: uppercase;" type="text" id="ssType" name="sType" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Case Details</label>
                    <div class="col-md-12">
                        <textarea rows="3" class="form-control form-control-line" id="ssCase" name="sCase" style="background-color: #f0efeb; padding: 20px;" readonly></textarea>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Guidance Message</label>
                    <div class="col-md-12">
                        <textarea rows="3" class="form-control form-control-line" id="ssMessage" name="sMessage" style="background-color: #f0efeb; padding: 20px;" readonly></textarea>
                    </div>
                    <input style="display:none;" type="text" id="ssID" name="ssID" class="form-control form-control-line" readonly>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary deletebtn" name="remove_sanction">Remove Sanction</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>