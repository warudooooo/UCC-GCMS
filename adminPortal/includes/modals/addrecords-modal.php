<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="src/styles/customStyle.css">
<!-- ================================================================================================================================================ -->
<!-- ==================ADD Records MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
    <div class="modal fade" id="addrecordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Attach Files</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <h4 style="text-align: center;"><i style="margin-left: 10px;"><b>Reminder: Only Documents and PDF Files only (Maximum size is 50MB)</b></i></h4>
                                    <hr class="hr" />
                                    <div class="form-group">
                                        <label class="col-md-12">Year</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" placeholder="(Ex: 20xx)" name="qYear" style="background-color: #edf2fb;" maxlength="4" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Select File</label>
                                        <div class="col-md-12">
                                            <input class="form-control form-control-lg" id="formFileLg" name="myfile" type="file" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin:auto;">
                    <button type="submit" class="btn btn-primary mdladdbtn" name="submit" style="width: 200px;">Submit</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal" style="width: 200px;">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================/Delete Records MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="editRecordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Delete this record?</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <i style="font-size: 18px;"><b>Reminder: The person who is currently logged in and deleted this file will be automatically logged into the system.</b></i>
                                    <div class="form-group" style="margin-top: 20px;">
                                        <label class="col-md-12">Year</label>
                                        <div class="col-md-12">
                                            <textarea id="adID" name="admID" style="display: none;" required></textarea>
                                            <input style="display:none;" type="text" value="<?php echo  $_SESSION['admPassword']; ?>" name="curPassword" class="form-control form-control-line">
                                            <textarea rows="1" class="form-control form-control-line" id="adYear" name="adYear" style="background-color: #edf2fb; pointer-events: none;" maxlength="40" required readonly></textarea>
                                        </div>
                                        <label class="col-md-12" style="margin-top:10px;">Reason for deleting this file.</label>
                                        <div class="col-md-12">
                                            <textarea rows="8" class="form-control form-control-line" placeholder="Enter your reason here" name="delReason" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: 20px;">
                                        <i><b><label class="col-md-12" style="font-size: 15px; color:#d00000;">To proceed, please enter your password for confirmation.</label></b></i>
                                        <div class="col-md-12">
                                            <input type="password" placeholder="Enter your password here" name="adminPassword" class="form-control form-control-line" style="background-color: #edf2fb;" required>
                                        </div>
                                    </div>
                                    <input style="display: none;" name="fileName" id="fileName">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button style="width: 200px;" type="submit" class="btn btn-primary btnred" name="adDelete">Delete</button>
                    <button style="width: 200px;" type="button" class="btn btn-secondary btnorange" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>