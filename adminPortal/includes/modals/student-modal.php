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
                                            <textarea rows="1" class="form-control form-control-line" name="sName" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Student Number (Ex: 20xxxxxx-M)</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="sNumber" style="background-color: #edf2fb; text-transform: uppercase;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Course, Year and Section (Ex. BSxx 1-A)</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="sCourse" style="background-color: #edf2fb; text-transform: uppercase;" required></textarea>
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
<!-- ==================MARK AS INACTIVE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="markasInactiveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #d00000;">MARK AS INACTIVE</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <h2 class="col-md-12">Are you sure you want to mark this student as INACTIVE?</h2>
                        <input style="pointer-events: none; display:none;" type="text" id="ID" name="ID" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none;" type="text" id="studentName" name="sName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" name="sNumber" id="studentNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" id="studentCourse" name="sCourse" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Enter your password</label>
                    <div class="col-md-12">
                        <input type="password" name="admPassword" class="form-control form-control-line" required>
                    </div>
                    <input style="display:none;" type="text" value="<?php echo $admPassword ?>" name="curPassword" class="form-control form-control-line">
                    <input style="display:none;" type="text" id="vkey" name="vkey" class="form-control form-control-line">
                    <input style="display:none;" type="text" id="sVerified" name="sVerified" class="form-control form-control-line">
                    <input style="display:none;" type="text" id="sPassword" name="sPassword" class="form-control form-control-line">
                    <input style="display:none;" type="text" id="studentEmail" name="sEmail" class="form-control form-control-line">
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary yesbtn" name="delete_student">YES</button>
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">No</button>
            </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================MARK AS ACTIVE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="markasactiveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #0096c7">MARK AS ACTIVE</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <h2 class="col-md-12">Are you sure you want to mark this student as ACTIVE?</h2>
                        <input style="pointer-events: none; display:none;" type="text" id="actID" name="ID" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none;" type="text" id="actName" name="sName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" name="sNumber" id="actNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" id="actCourse" name="sCourse" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Enter your password</label>
                    <div class="col-md-12">
                        <input type="password" name="admPassword" class="form-control form-control-line" required>
                    </div>
                    <input style="display:none;" type="text" value="<?php echo $admPassword ?>" name="curPassword" class="form-control form-control-line">
                    <input style="display:none;" type="text" id="actvkey" name="vkey" class="form-control form-control-line">
                    <input style="display:none;" type="text" id="actVerified" name="sVerified" class="form-control form-control-line">
                    <input style="display:none;" type="text" id="actPassword" name="sPassword" class="form-control form-control-line">
                    <input style="display:none;" type="text" id="actEmail" name="sEmail" class="form-control form-control-line">
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary seemorebtn" style="width: 100px;" name="markas_active">YES</button>
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">No</button>
            </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================DELETE MODAL========================== -->
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
                        <input style="pointer-events: none; display:none;" type="text" id="delID" name="ID" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none;" type="text" id="delName" name="sName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" name="sNumber" id="delNumber" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="pointer-events: none; text-transform: uppercase;" type="text" id="delCourse" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Enter your password</label>
                    <div class="col-md-12">
                        <input type="password" name="admPassword" class="form-control form-control-line" required>
                    </div>
                    <input style="display:none;" type="text" value="<?php echo $admPassword ?>" name="curPassword" class="form-control form-control-line">
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary yesbtn" name="delete_permanent">YES</button>
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">No</button>
            </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================EDIT MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="student.php" autocomplete="off">
    <div class="modal fade" id="studenteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #0096c7;">EDIT STUDENT</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb;" type="text" name="sName" id="sName" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; text-transform: uppercase;" type="text" name="sNumber" id="sNumber" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Email</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; text-transform: uppercase; text-transform: lowercase;" type="text" id="sEmail" name="sEmail" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; text-transform: uppercase; text-transform: uppercase;" type="text" id="sCourse" name="sCourse" class="form-control form-control-line">
                    </div>
                    <input style="display:none;" type="text" id="sPassword" name="sPassword" class="form-control form-control-line">
                    <label class="col-md-12" style="margin-top:10px;">Enter your password</label>
                    <div class="col-md-12">
                        <input type="password" name="admPassword" class="form-control form-control-line" required>
                    </div>
                    <input style="display:none;" type="text" value="<?php echo $admPassword ?>" name="curPassword" class="form-control form-control-line">
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary editbtn" name="edit_student">Edit</button>
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================EDIT MODAL (UNVERIFIED STUDENT ACCOUNTS)========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="student.php" autocomplete="off">
    <div class="modal fade" id="unvstudenteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #0096c7;">EDIT STUDENT</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb;" type="text" name="sName" id="unvsName" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; text-transform: uppercase;" type="text" name="sNumber" id="unvsNumber" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Email</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; text-transform: uppercase; text-transform: lowercase;" type="text" id="unvsEmail" name="sEmail" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; text-transform: uppercase; text-transform: uppercase;" type="text" id="unvsCourse" name="sCourse" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Enter your password</label>
                    <div class="col-md-12">
                        <input type="password" name="admPassword" class="form-control form-control-line" required>
                    </div>
                    <input style="display:none;" type="text" value="<?php echo $admPassword ?>" name="curPassword" class="form-control form-control-line">
                    <input style="display:none;" type="text" id="unvsPassword" name="sPassword" class="form-control form-control-line">
                    <input style="display:none;" type="text" id="unvvkey" name="vkey" class="form-control form-control-line">
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary editbtn" name="unvedit_student">Edit</button>
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================EDIT MODAL (ADMIN CREATED ACCOUNTS)========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="student.php" autocomplete="off">
    <div class="modal fade" id="admstudenteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #0096c7;">EDIT STUDENT</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb;" type="text" name="sName" id="admsName" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; text-transform: uppercase;" type="text" name="sNumber" id="admsNumber" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb; text-transform: uppercase;" type="text" id="admsCourse" name="sCourse" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Student Email</label>
                    <div class="col-md-12">
                        <input style="background-color: #edf2fb;" type="email" name="sEmail" placeholder="N/A" class="form-control form-control-line">
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Enter your password</label>
                    <div class="col-md-12">
                        <input type="password" name="admPassword" class="form-control form-control-line" required>
                    </div>
                    <input style="display:none;" type="text" value="<?php echo $admPassword ?>" name="curPassword" class="form-control form-control-line">
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary editbtn" name="admedit_student">Edit</button>
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</form>