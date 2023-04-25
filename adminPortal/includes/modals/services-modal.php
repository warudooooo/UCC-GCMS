<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="src/styles/customStyle.css">
<!-- ================================================================================================================================================ -->
<!-- ==================ACTION MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="services-sanctions.php" autocomplete="off">
    <div class="modal fade" id="actionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #0096c7;">Select Options</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; pointer-events:none;" type="text" name="sName" id="sName" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; pointer-events:none; text-transform: uppercase;" type="text" name="sNumber" id="sNumber" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; pointer-events:none; text-transform: uppercase; text-transform: uppercase;" type="text" id="sCourse" name="sCourse" class="form-control form-control-line">
                    </div>
                    <input style="display:none;" type="text" id="stEmail" name="stEmail" class="form-control form-control-line">
                </div>
                <div class="btn-sanctions" style="text-align: center; margin-bottom: 5%;">
                    <button class="btn btn-secondary btnblue" style="width: 40%;" value="sanction_btn" name="sanction_btn">Create a Sanction</button>
                    <button class="btn btn-primary btngreen" style="width: 40%;" formaction="services-counselling.php" value="counsel_btn" name="counsel_btn">Counsel this student</button>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>