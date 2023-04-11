<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="src/styles/customStyle.css">
<!-- ================================================================================================================================================ -->
<!-- ==================ADD Proctor MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="addProctorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Add Proctor</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Proctor Name</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" placeholder="(Ex: Dela Cruz, Juan M.)" name="pName" style="background-color: #edf2fb;" maxlength="40" required></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button  style="width: 200px;" type="submit" class="btn btn-primary mdladdbtn" name="addproctor">Add Proctor</button>
                    <button  style="width: 200px;" type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================EDIT Proctor MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="editProctorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Edit Proctor</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Proctor Name</label>
                                        <div class="col-md-12">
                                            <textarea id="pID" name="pID" style="display: none;" required></textarea>
                                            <textarea id="oldPname" name="oldPname" style="display: none;" required></textarea>
                                            <textarea rows="1" class="form-control form-control-line" id="pName" name="pName" style="background-color: #edf2fb;" maxlength="40" required></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button style="width: 200px;" type="submit" class="btn btn-primary mdladdbtn" name="editproctor">Submit</button>
                    <button style="width: 200px;" type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================VIEW Proctor MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="viewProctorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">View Proctor</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">View the schedule of this selected Proctor?</h3>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Proctor Name</label>
                                        <div class="col-md-12">
                                            <textarea id="peditID" name="pID" style="display: none;" required readonly></textarea>
                                            <textarea rows="1" class="form-control form-control-line" id="peditName" name="pName" style="background-color: #edf2fb; pointer-events: none;" maxlength="40" required readonly></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button style="width: 200px;" type="submit" class="btn btn-primary mdladdbtn" style="width: 130px;"formaction="proctors-schedule.php" value="viewsched" name="viewsched">View</button>
                    <button style="width: 200px;" type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================Delete Proctor MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="deleteProctorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Delete this Proctor</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Are you sure you want to delete this proctor?</h3>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Proctor Name</label>
                                        <div class="col-md-12">
                                            <textarea id="pdelID" name="pID" style="display: none;" required readonly></textarea>
                                            <textarea rows="1" class="form-control form-control-line" id="pdelName" name="pName" style="background-color: #edf2fb; pointer-events: none;" maxlength="40" required readonly></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button style="width: 200px;" type="submit" class="btn btn-primary yesbtn" style="width: 130px;" name="deleteproctor">Delete</button>
                    <button style="width: 200px;" type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>