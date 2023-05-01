<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="src/styles/customStyle.css">
<!-- ================================================================================================================================================ -->
<!-- ==================ADD ADMIN MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Add Administrator</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Administrator Name (Ex. Dela Cruz, Juan M.)</label>
                                        <div class="col-md-12">
                                            <textarea placeholder="Enter name here..." rows="1" class="form-control form-control-line" name="sName" minlength="8" style="background-color: #edf2fb;" required></textarea placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">User Name</label>
                                        <div class="col-md-12">
                                            <textarea placeholder="Enter user name here..." rows="1" class="form-control form-control-line" name="userName" minlength="6" style="background-color: #edf2fb;" required></textarea placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input placeholder="Enter email here..." type="email" rows="1" class="form-control form-control-line" name="sEmail" style="background-color: #edf2fb;" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input placeholder="Enter password here..." type="password" rows="1" class="form-control form-control-line" name="sPassword" minlength="6" style="background-color: #edf2fb;" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Confirm Password</label>
                                        <div class="col-md-12">
                                            <input placeholder="Confirm password here..." type="password" rows="1" class="form-control form-control-line" name="confPassword" minlength="6" style="background-color: #edf2fb;" required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button type="submit" style="width: 200px;" class="btn btn-primary mdladdbtn" name="submit">Submit</button>
                    <button type="button" style="width: 200px;" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================EDIT ADMIN MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="editAdminAccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Edit Administrator Details</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                <input placeholder="" style="pointer-events: none; display:none;" type="text" id="eID" name="ID" class="form-control form-control-line" readonly>
                                    <div class="form-group">
                                        <label class="col-md-12">Administrator Name (Ex. Dela Cruz, Juan M.)</label>
                                        <div class="col-md-12">
                                            <textarea placeholder="Enter name here..." id="eName" rows="1" class="form-control form-control-line" name="sName" minlength="8" style="background-color: #edf2fb;" required></textarea placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">User Name</label>
                                        <div class="col-md-12">
                                            <textarea placeholder="Enter user name here..."id="eUName" rows="1" class="form-control form-control-line" name="userName" minlength="8" style="background-color: #edf2fb;" required></textarea placeholder="">
                                        </div>
                                    </div>
                                            <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input placeholder="Enter email here..."id="eEmail" type="email" rows="1" class="form-control form-control-line" name="sEmail" style="background-color: #edf2fb;" required>
                                        </div>
                                    </div>
                                    <hr class="hr" />
                                    <i><b><label class="col-md-12" style="margin-top: 10px; font-size: 14px;">To edit this account, please enter your password for confirmation.</label></b></i>
                             <div class="col-md-12">
                            <input type="password" placeholder="Enter your password here" name="adminPassword" class="form-control form-control-line" required>
                             </div>
                            <input style="display:none;" type="text" value="<?php echo  $_SESSION['admPassword']; ?>" name="curPassword" class="form-control form-control-line">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button type="submit" style="width: 200px;" class="btn btn-primary mdladdbtn" name="editAdmin">Submit</button>
                    <button type="button" style="width: 200px;" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================DELETE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="adminDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="color: #d00000;">DELETE</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <h2 class="col-md-12">Are you sure you want to DELETE?</h2>
                        <input placeholder="" style="pointer-events: none; display:none;" type="text" id="delNumber" name="userNames" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Administrator Name</label>
                    <div class="col-md-12">
                        <input placeholder="" style="pointer-events: none;" type="text" name="sName" id="delName" class="form-control form-control-line" readonly>
                    </div>
                    <label class="col-md-12" style="margin-top:10px;">Email</label>
                    <div class="col-md-12">
                        <input placeholder="" style="pointer-events: none;" type="text" id="delEmail" class="form-control form-control-line" readonly>
                        <input placeholder="" type="hidden" style="pointer-events: none;" type="text" name="sNumber" id="delNumber" class="form-control form-control-line" readonly>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                <button type="submit" style="width: 200px;" class="btn btn-primary yesbtn" name="delete_permanent">YES</button>
                <button type="button" style="width: 200px;" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">No</button>
            </div>
            </div>
        </div>
    </div>
</form>