<link rel="icon" href="src/images/uccLogo.png">
<!-- ================================================================================================================================================ -->
<!-- ==================Delete MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #d00000;">DELETE</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <h2 class="col-md-12" style="color: #d00000; text-align: center;">Are you sure?</h2>
                        <h4 class="col-md-12" style="text-align: center;">Do you really want to delete these records? This process cannot be undone.</h4>
                        <h2 class="col-md-12"></h2>
                        <input style="pointer-events: none; display:none;" type="text" id="historyID" name="hID" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none;" type="text" id="studentName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none;" type="text" id="studentNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none;" type="text" id="studentCourse" class="form-control form-control-line" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary yesbtn" name="counsubmit">YES</button>
            </div>
            </div>
        </div>
    </div>
</form>