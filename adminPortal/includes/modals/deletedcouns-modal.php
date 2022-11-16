<link rel="icon" href="src/images/uccLogo.png">
<!-- ================================================================================================================================================ -->
<!-- ==================RESTORE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="restoreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #219ebc;">Restore</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <h2 class="col-md-12">Student Details</h2>
                        <input style="pointer-events: none; display:auto;" type="text" id="cNum" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none;" type="text" id="csName" name="csName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" name="csNumber" id="csNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" id="csCourse" name="csCourse" class="form-control form-control-line" readonly>
                    </div>
                    <input style="display:none;" type="text" id="cID" name="cID"readonly>
                    <input style="display:none;" id="csEmail" name="csEmail" readonly>
                    <input style="display:none;" id="cType" name="cType" readonly>
                    <input style="display:none;" id="cDate" name="cDate" readonly>
                    <input style="display:none;" id="cDetails" name="cDetails" readonly>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary mdlapprovebtn" name="submit">Restore</button>
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
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Counseling Details</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <textarea rows="20" class="form-control form-control-line" id="csDetails" name="cDetails" style="background-color: #f0efeb; padding: 20px;" readonly></textarea>
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
    <div class="modal fade" id="counselingdeletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #d00000;">DELETE PERMANENTLY</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                    <h2 class="col-md-12" style="color: #d00000; text-align: center;">Are you sure?</h2>
                        <h4 class="col-md-12" style="text-align: center;">Do you really want to delete these records? This process cannot be undone.</h4>
                        <input style="pointer-events: none; display:auto;" type="text" id="cdNum" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top: 10px;">Full Name</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #f0efeb;" type="text" id="cdsName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top: 10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #f0efeb;"type="text" id="cdsNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top: 10px;">Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #f0efeb;" type="text" id="cdsCourse" class="form-control form-control-line" readonly>
                    </div>
                    <input style="display:none;" type="text" id="cdID" name="cdID"readonly>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary yesbtn" name="delete_counseling">YES</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->




<!-- ================================================================================================================================================ -->

<!-- ================================================================================================================================================ -->
<!-- ==================RESTORE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="csrestoreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #219ebc;">Restore</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <h2 class="col-md-12">Student Details</h2>
                        <input style="pointer-events: none;" type="text" id="scsNum" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none;" type="text" id="scsName" name="scsName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" name="scsNumber" id="scsNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" id="scsCourse" name="scsCourse" class="form-control form-control-line" readonly>
                    </div>
                    <input style="display:none;" id="scsID" name="scsID" readonly>
                    <input style="display:none;" id="scsEmail" name="scsEmail" readonly>
                    <input style="display:none;" id="scsType" name="scsType" readonly>
                    <input style="display:none;" id="scsDateapproved" name="scsDateapproved" readonly>
                    <input style="display:none;" id="scsSchedule" name="scsSchedule" readonly>
                    <input style="display:none;" id="scsDetails" name="scsDetails" readonly>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary mdlapprovebtn" name="ssubmit">Restore</button>
                </div>
            </div>
        </div>
    </div>
<!-- ================================================================================================================================================ -->
<!-- ==================DELETE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="scounselingdeletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #d00000;">DELETE PERMANENTLY</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                    <h2 class="col-md-12" style="color: #d00000; text-align: center;">Are you sure?</h2>
                        <h4 class="col-md-12" style="text-align: center;">Do you really want to delete these records? This process cannot be undone.</h4>
                        <input style="pointer-events: none; background-color: #f0efeb;" type="text" id="scNum" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top: 10px;">Full Name</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #f0efeb;" type="text" id="scName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top: 10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #f0efeb;"type="text" id="scNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top: 10px;">Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; background-color: #f0efeb;" type="text" id="scCourse" class="form-control form-control-line" readonly>
                    </div>
                    <input style="pointer-events: none; display:none;" type="text" id="scID" name="scID" class="form-control form-control-line" readonly>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary yesbtn" name="sdelete_counseling">YES</button>
                </div>
            </div>
        </div>
    </div>