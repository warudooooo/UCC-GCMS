<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="src/styles/customStyle.css">
<!-- ================================================================================================================================================ -->
<!-- ==================ADD STUDENT MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="addstudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Add Student</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Student Name (Ex. Bayola, Wally B.)</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="sName" style="background-color: #eff7f6;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Student Number (Ex: 20xxxxxx-M)</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="sNumber" style="background-color: #eff7f6;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Course (Ex. BSxx)</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="sCourse" style="background-color: #eff7f6;" required></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mdladdbtn" name="submit">Add Student</button>
                </div>
            </div>
        </div>
    </div>
<!-- ================================================================================================================================================ -->
<!-- ==================Delete MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="studentdeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #d00000;">DELETE</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <h2 class="col-md-12">Are you sure you want to DELETE?</h2>
                        <input style="pointer-events: none; display:none;" type="text" id="ID" name="ID" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none;" type="text" id="studentName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none;" type="text" name="sNumber" id="studentNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" id="studentCourse" class="form-control form-control-line" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary yesbtn" name="delete_student">YES</button>
            </div>
            </div>
        </div>
    </div>
</form>