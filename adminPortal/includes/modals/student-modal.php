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
                                        <label class="col-md-12">Student Name</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" placeholder="(EX: Dela Cruz, Juan M.)" name="sName" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Student Number</label>
                                        <div class="col-md-12">
                                            <input minlength="10" maxlength="10" rows="1" class="form-control form-control-line" placeholder="(Ex: 20xxxxxx-M)" name="sNumber" style="background-color: #edf2fb; text-transform: uppercase;" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Course, Year and Section</label>
                                        <div class="col-md-12">
                                            <input minlength="7" maxlength="11" rows="1" class="form-control form-control-line" placeholder="(Ex: BSxx 1-A)" name="sCourse" style="background-color: #edf2fb; text-transform: uppercase;" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" rows="1" class="form-control form-control-line" placeholder="Enter email here..." name="sEmail" style="background-color: #edf2fb;">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer center-all">
                    <button type="submit" class="btn btn-primary mdladdbtn" style="width: 200px;" name="submit">Add Student</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" style="width: 200px;" data-bs-dismiss="modal">Cancel</button>
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
                            <input type="password" placeholder="Enter your password here" name="admPassword" class="form-control form-control-line" required>
                        </div>
                        <input style="display:none;" type="text" value="<?php echo $admPassword ?>" name="curPassword" class="form-control form-control-line">
                        <input style="display:none;" type="text" id="vkey" name="vkey" class="form-control form-control-line">
                        <input style="display:none;" type="text" id="sVerified" name="sVerified" class="form-control form-control-line">
                        <input style="display:none;" type="text" id="sPassword" name="sPassword" class="form-control form-control-line">
                        <input style="display:none;" type="text" id="studentEmail" name="sEmail" class="form-control form-control-line">
                    </div>
                    <div class="modal-footer" style="margin:auto;">
                        <button type="submit" class="btn btn-primary yesbtn" name="markas_inactive" style="width: 200px;">YES</button>
                        <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal" style="width: 200px;">No</button>
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
                            <input type="password" placeholder="Enter your password here" name="admPassword" class="form-control form-control-line" required>
                        </div>
                        <input style="display:none;" type="text" value="<?php echo $admPassword ?>" name="curPassword" class="form-control form-control-line">
                        <input style="display:none;" type="text" id="actvkey" name="vkey" class="form-control form-control-line">
                        <input style="display:none;" type="text" id="actVerified" name="sVerified" class="form-control form-control-line">
                        <input style="display:none;" type="text" id="actPassword" name="sPassword" class="form-control form-control-line">
                        <input style="display:none;" type="text" id="actEmail" name="sEmail" class="form-control form-control-line">
                    </div>
                    <div class="modal-footer" style="margin:auto;">
                        <button type="submit" class="btn btn-primary seemorebtn" style="width: 200px;" name="markas_active">YES</button>
                        <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal" style="width: 200px;">No</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- ================================================================================================================================================ -->
    <!-- ==================Decline MODAL========================== -->
    <!-- ================================================================================================================================================ -->
    <form method="POST" action="" autocomplete="off">
        <div class="modal fade" id="studentdeclineModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content approve">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel" style="color: #d00000;">DELETE</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <h2 class="col-md-12">Are you sure you want to DECLINE this student?</h2>
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
                        <!-- <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                        <div class="col-md-12">
                            <input style="pointer-events: none; text-transform: uppercase;" type="text" id="delCourse" class="form-control form-control-line" readonly>
                        </div> -->
                        <label class="col-md-12" style="margin-top:10px;">To Decline this student, please enter your password.</label>
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
                            <input style="background-color: #edf2fb; pointer-events: none;" type="text" name="sName" id="sName" class="form-control form-control-line">
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; pointer-events: none; text-transform: uppercase;" type="text" name="ssNumber" id="sNumber" class="form-control form-control-line">
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">Student Email</label>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; pointer-events: none; text-transform: uppercase; text-transform: lowercase;" type="text" id="sEmail" name="sEmail" class="form-control form-control-line">
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; pointer-events: none; text-transform: uppercase; text-transform: uppercase;" type="text" id="sCourse" name="sCourse" class="form-control form-control-line">
                        </div>
                        <input style="display:none;" type="text" id="sPassword" name="sPassword" class="form-control form-control-line">
                        <label class="col-md-12" style="margin-top:10px;">Enter your password</label>
                        <div class="col-md-12">
                            <input type="password" name="admPassword" class="form-control form-control-line" required>
                        </div>
                        <input style="display:none;" type="text" value="<?php echo $admPassword ?>" name="curPassword" class="form-control form-control-line">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary editbtn" style="width: 200px;" name="edit_student">Edit</button>
                        <button type="button" class="btn btn-secondary mdlclosebtn" style="width: 200px;" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- ================================================================================================================================================ -->
    <!-- ==================VIEW/APPROVE MODAL========================== -->
    <!-- ================================================================================================================================================ -->
    <form method="POST" action="student-details.php" autocomplete="off">
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
                        <input style="display:none;" id="regSelfie" name="regSelfie">
                        <input style="display:none;" id="unvsEmail" name="stEmail">
                        <input style="display:none;" type="text" id="unvsPassword" name="sPassword" class="form-control form-control-line">
                        <input style="display:none;" type="text" id="unvvkey" name="vkey" class="form-control form-control-line">
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
    <!-- ==================VIEW MODAL========================== -->
    <!-- ================================================================================================================================================ -->
    <div class="modal fade bd-example-modal-lg" id="viewRFModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #333;">Registration Form</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php
                if (empty($_SESSION['regForm'])) {
                    echo '<div class="eml" style="display: inline-block; text-align: center; color: black; margin-top: 20%; margin-bottom: 20%;"><h3>No image available.</h3></div>';
                } else {
                }
                ?>
                <div class="modal-body" style="<?php
                                                if (empty($_SESSION['regForm'])) {
                                                    echo 'display: none;';
                                                } else {
                                                    echo 'display: auto;';
                                                }
                                                ?>
                ">
                    <img src="../uploads/<?php echo $_SESSION['regForm']; ?>" style="width: 100%;">
                </div>
                <div class="modal-footer center-all">
                    <button type="button" class="btn btn-secondary mdlclosebtn" style="width: 200px;" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================================================================================================================================ -->
    <!-- ==================VIEW SELFIE MODAL========================== -->
    <!-- ================================================================================================================================================ -->
    <div class="modal fade bd-example-modal-lg" id="viewSelfieModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #333;">Selfie With Registration Form</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php
                if (empty($_SESSION['regSelfie'])) {
                    echo '<div class="eml" style="display: inline-block; text-align: center; color: black; margin-top: 20%; margin-bottom: 20%;"><h3>No image available.</h3></div>';
                } else {
                }
                ?>
                <div class="modal-body" style="<?php
                                                if (empty($_SESSION['regSelfie'])) {
                                                    echo 'display: none;';
                                                } else {
                                                    echo 'display: auto;';
                                                }
                                                ?>
                ">
                    <img src="../uploads/<?php echo $_SESSION['regSelfie']; ?>" style="width: 100%;">
                </div>
                <div class="modal-footer center-all">
                    <button type="button" class="btn btn-secondary mdlclosebtn" style="width: 200px;" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================================================================================================================================ -->
    <!-- ==================APPROVE STUDENT ACCOUNT MODAL========================== -->
    <!-- ================================================================================================================================================ -->
    <form method="POST" action="student-details.php" autocomplete="off">
        <div class="modal fade" id="studentApproveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content approve">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">APPROVE STUDENT ACOUNT</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; pointer-events: none;" type="text" name="stName" placeholder="<?php echo $_SESSION['sName']; ?>" value="<?php echo $_SESSION['sName']; ?>" class="form-control form-control-line" readonly>
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; pointer-events: none; text-transform: uppercase;" type="text" name="sNumber" placeholder="<?php echo $_SESSION['stNumber']; ?>" value="<?php echo $_SESSION['stNumber']; ?>" class="form-control form-control-line" readonly>
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; pointer-events: none; text-transform: uppercase;" type="text" placeholder="<?php echo $_SESSION['stCourse']; ?>" value="<?php echo $_SESSION['stCourse']; ?>" name="sCourse" class="form-control form-control-line" readonly>
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">Student Email</label>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; pointer-events: none;" type="email" name="stEmail" placeholder="value=" <?php echo $_SESSION['stEmail']; ?>"" value="<?php echo $_SESSION['stEmail']; ?>" class="form-control form-control-line" readonly>
                        </div>
                        <input name="dbID" style="display: none;" placeholder="<?php echo $_SESSION['dbID']; ?>" value="<?php echo  $_SESSION['dbID']; ?>" readonly>
                        <label class="col-md-12" style="margin-top:10px;">To approve this student, please enter your password for confirmation.</label>
                        <div class="col-md-12">
                            <input type="password" placeholder="Enter your password here" name="adminPassword" class="form-control form-control-line" required>
                        </div>
                        <input style="display:none;" type="text" value="<?php echo  $_SESSION['admPassword']; ?>" name="curPassword" class="form-control form-control-line">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btngreen" name="approve_student" style="width: 200px;">APPROVE</button>
                        <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal" style="width: 200px;">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- ================================================================================================================================================ -->
    <!-- ==================DECLINE STUDENT ACCOUNT MODAL========================== -->
    <!-- ================================================================================================================================================ -->
    <form method="POST" action="student-details.php" autocomplete="off">
        <div class="modal fade" id="studentDeclineModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content approve">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel" style="color: #d00000">DECLINE STUDENT ACCOUNT</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <h3 class="modal-title" id="exampleModalLabel" style="color: #d00000">Are you sure? This action is permanent.</h3>
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">Student Name</label>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; pointer-events: none;" type="text" name="stName" placeholder="<?php echo $_SESSION['sName']; ?>" value="<?php echo $_SESSION['sName']; ?>" class="form-control form-control-line" readonly>
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; pointer-events: none; text-transform: uppercase;" type="text" name="sNumber" placeholder="<?php echo $_SESSION['stNumber']; ?>" value="<?php echo $_SESSION['stNumber']; ?>" class="form-control form-control-line" readonly>
                        </div>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; pointer-events: none; display:none; text-transform: uppercase;" type="text" placeholder="<?php echo $_SESSION['stCourse']; ?>" value="<?php echo $_SESSION['stCourse']; ?>" name="sCourse" class="form-control form-control-line" readonly>
                        </div>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; pointer-events: none; display:none;" type="email" name="sEmail" placeholder="value=" <?php echo $_SESSION['stEmail']; ?>"" value="<?php echo $_SESSION['stEmail']; ?>" class="form-control form-control-line" readonly>
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">Reason for rejecting this request.</label>
                        <div class="col-md-12">
                            <textarea rows="8" class="form-control form-control-line" placeholder="Enter your reason here" name="decReason" style="background-color: #edf2fb;" required></textarea>
                        </div>
                        <input name="dbID" style="display: none;" placeholder="<?php echo $_SESSION['dbID']; ?>" value="<?php echo  $_SESSION['dbID']; ?>" readonly>
                        <label class="col-md-12" style="margin-top:10px; color:#d00000">To Decline this student, please enter your password for confirmation.</label>
                        <div class="col-md-12">
                            <input type="password" placeholder="Enter your password here" name="adminPassword" class="form-control form-control-line" required>
                        </div>
                        <input style="display:none;" type="text" value="<?php echo  $_SESSION['admPassword']; ?>" name="curPassword" class="form-control form-control-line">
                    </div>
                    <div class="modal-footer" style="margin: 0 auto;">
                        <button type="submit" class="btn btn-primary btnred" name="decline_student" style="width: 200px;">Decline</button>
                        <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal" style="width: 200px;">Close</button>
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
                            <input style="background-color: #edf2fb; display: none;" type="text" name="oldsName" id="oldadmsName" class="form-control form-control-line">
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">Student Number</label>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; text-transform: uppercase;" type="text" name="sNumber" id="admsNumber" class="form-control form-control-line">
                            <input style="background-color: #edf2fb; text-transform: uppercase; display: none;" type="text" name="oldsNumber" id="oldadmsNumber" class="form-control form-control-line">
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">Student Course</label>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb; text-transform: uppercase;" type="text" id="admsCourse" name="sCourse" class="form-control form-control-line">
                            <input style="background-color: #edf2fb; text-transform: uppercase; display: none;" type="text" id="oldadmsCourse" name="oldsCourse" class="form-control form-control-line">
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">Student Email</label>
                        <div class="col-md-12">
                            <input style="background-color: #edf2fb;" id="admsEmail" type="email" name="sEmail" placeholder="N/A" class="form-control form-control-line">
                            <input style="background-color: #edf2fb; display: none;" id="oldadmsEmail" type="email" name="oldsEmail" placeholder="N/A" class="form-control form-control-line">
                        </div>
                        <label class="col-md-12" style="margin-top:10px;">To edit this student details. You need to type again your password</label>
                        <div class="col-md-12">
                            <input type="password" placeholder="Enter your password here" name="admPassword" class="form-control form-control-line" required>
                        </div>
                        <input style="pointer-events: none; display:none;" type="text" id="admsID" name="ID" class="form-control form-control-line" readonly>
                        <input style="display:none;" type="text" value="<?php echo $admPassword ?>" name="curPassword" class="form-control form-control-line">
                    </div>
                    <div class="modal-footer" style="margin: 0 auto;">
                        <button type="submit" class="btn btn-primary editbtn" style="width: 200px;" name="admedit_student">Edit</button>
                        <button type="button" class="btn btn-secondary mdlclosebtn" style="width: 200px;" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>