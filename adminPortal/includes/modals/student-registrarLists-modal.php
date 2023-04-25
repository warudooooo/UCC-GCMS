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
                                        <label class="col-md-12">Status</label>
                                        <div class="select-menu">
                                            <div class="select-btn">
                                                <span class="sBtn-text">Select your options</span>
                                                <i class="fas fa-caret-down"></i>
                                            </div>
                                            <textarea class="sBtn-text-clone" name="studentStatus"></textarea>
                                            <ul class="options">
                                                <li class="option">
                                                    <span class="option-text" value="Regular">Regular</span>
                                                </li>
                                                <li class="option">
                                                    <span class="option-text" value="Irregular">Irregular</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Student Name</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" minlength="8" placeholder="(EX: Dela Cruz, Juan M.)" name="studentName" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Student Number</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" minlength="10" maxlength="10" placeholder="(Ex: 20xxxxxx-M)" name="studentNumber" style="background-color: #edf2fb; text-transform: uppercase;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Course, Year and Section</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" minlength="5" placeholder="(Ex: BSxx 1-A)" name="studentCourse" style="background-color: #edf2fb; text-transform: uppercase;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" minlength="8" placeholder="Enter address here..." name="studentAddress" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" rows="1" class="form-control form-control-line" minlength="8" placeholder="Enter email here..." name="studentEmail" style="background-color: #edf2fb;" required></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone number</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" minlength="11" maxlength="13" placeholder="Enter phone number here..." name="studentPhone" maxlength="12" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer center-all">
                    <button type="submit" class="btn btn-primary mdladdbtn" style="width: 200px;" name="addStudent">Add Student</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" style="width: 200px;" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================View Details MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="viewDetailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #588157;">Student Details</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-12">Status</label>
                        <div class="col-md-12">
                            <textarea rows="1" class="form-control form-control-line" id="studentStatus" style="background-color: #e8eddf; pointer-events: none;" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Student Name</label>
                        <div class="col-md-12">
                            <textarea rows="1" class="form-control form-control-line" id="studentName" style="background-color: #e8eddf; pointer-events: none;" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Student Number</label>
                        <div class="col-md-12">
                            <textarea rows="1" class="form-control form-control-line" id="studentNumber" style="background-color: #e8eddf; text-transform: uppercase; pointer-events: none;" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Course, Year and Section</label>
                        <div class="col-md-12">
                            <textarea rows="1" class="form-control form-control-line" id="studentCourse" style="background-color: #e8eddf; text-transform: uppercase; pointer-events: none;" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Address</label>
                        <div class="col-md-12">
                            <textarea rows="2" class="form-control form-control-line" id="studentAddress" style="background-color: #e8eddf; pointer-events: none;" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <textarea rows="1" class="form-control form-control-line" id="studentEmail" style="background-color: #e8eddf; pointer-events: none;" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Phone number</label>
                        <div class="col-md-12">
                            <textarea rows="1" class="form-control form-control-line" id="studentPhone" name="studentPhone" style="background-color: #e8eddf; pointer-events: none;" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: 0 auto;">
                    <button type="button" class="btn btn-secondary mdlclosebtn" style="width: 200px;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================EDIT MODAL ========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #0096c7;">EDIT STUDENT</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-12">Student Status</label>
                        <select name="studentStatus" class="form-selects" aria-label="Default select example" required>
                            <option class="options" value="" selected>Select type</option>
                            <option class="options" value="Regular">Regular</option>
                            <option class="options" value="Irregular">Irregular</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Student Name</label>
                        <div class="col-md-12">
                            <textarea rows="1" class="form-control form-control-line" id="studentName1" name="studentName" style="background-color: #ccebff;" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Student Number</label>
                        <div class="col-md-12">
                            <textarea rows="1" class="form-control form-control-line" id="studentNumber1" name="studentNumber" style="background-color: #ccebff; text-transform: uppercase;" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Course, Year and Section</label>
                        <div class="col-md-12">
                            <textarea rows="1" class="form-control form-control-line" id="studentCourse1" name="studentCourse" style="background-color: #ccebff; text-transform: uppercase;" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Address</label>
                        <div class="col-md-12">
                            <textarea rows="1" class="form-control form-control-line" id="studentAddress1" name="studentAddress" style="background-color: #ccebff;" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email" rows="1" class="form-control form-control-line" id="studentEmail1" name="studentEmail" style="background-color: #ccebff;" required></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Phone number</label>
                        <div class="col-md-12">
                            <textarea rows="1" class="form-control form-control-line" id="studentPhone1" name="studentPhone" style="background-color: #ccebff;" required></textarea>
                        </div>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">To edit this student details. You need to type again your password</label>
                    <div class="col-md-12">
                        <input type="password" style="background-color: #e6f5ff;" placeholder="Enter your password here" name="admPassword" class="form-control form-control-line" required>
                    </div>
                    <input style="display:none;" type="text" value="<?php echo $_SESSION['admPassword']; ?>" name="curPassword" class="form-control form-control-line">
                </div>
                <!-- before edit -->
                <input id="studentID" style="display: none;" name="studentID">
                <input id="studentStatus2" style="display: none;" name="sStatusBefore">
                <input id="studentName2" style="display: none;" name="sNameBefore">
                <input id="studentNumber2" style="display: none;" name="sNumberBefore">
                <input id="studentCourse2" style="display: none;" name="sCourseBefore">
                <input id="studentAddress2" style="display: none;" name="sAddressBefore">
                <input id="studentEmail2" style="display: none;" name="sEmailBefore">
                <input id="studentPhone2" style="display: none;" name="sPhoneBefore">

                <div class="modal-footer" style="margin: 0 auto;">
                    <button type="submit" class="btn btn-primary editbtn" style="width: 200px;" name="editStudent">Edit</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" style="width: 200px;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================Import File MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
    <div class="modal fade" id="importDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Import Excel File</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <b><label class="col-md-12" style="font-size: 15px; color: #333;">Select File</label></b>
                                        <div class="col-md-12">
                                            <input class="form-control form-control-lg" id="formFileLg" name="importFile" type="file" />
                                        </div>
                                    </div>
                                    <i>
                                        <h3 class="modal-title" id="exampleModalLabel" style="font-size: 20px; color: #333; text-align: center;">Note: Only cls, csv, xls, xlsx formats are accepted.</h3>
                                    </i>
                                    <hr class="hr" />
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <i>
                                                <h3 class="modal-title" id="exampleModalLabel" style="font-size: 22px; color: #d00000; text-align: center;">Please use the format below to prevent data from being mixed up.</h3>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 40px;">
                                        <b><label class="col-md-12" style="font-size: 15px; color: #333;">Sample Format:</label></b>
                                        <div class="col-md-12">
                                            <img src="uploads/sampleExcelFormat.png" alt="Italian Trulli" style="width: 100%;">
                                        </div>
                                    </div>
                                    <hr class="hr" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin:auto;">
                    <button type="submit" class="btn btn-primary btngreen" style="width: 200px;" name="importExcelFile">Import</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal" style="width: 200px;">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>