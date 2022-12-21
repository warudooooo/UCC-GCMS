<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="src/styles/customStyle.css">
<!-- ================================================================================================================================================ -->
<!-- ==================ADD SCHEDULE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
    <div class="modal fade" id="addrecordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">SELECT DATE</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">DATE</label>
                                        <div class="col-md-12">
                                            <input class="form-control" type="date" name="date" placeholder="MM/DD/YY " required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary mdladdbtn" name="submit">Submit</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================Delete Records MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
    <div class="modal fade" id="recordsdeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Are you sure you want to Delete? This Action is Permanent.</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <textarea style="display: none;" id="admID" name="admID" required></textarea>
                                    <div class="form-group">
                                        <label class="col-md-12">Year</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="qYear" style="background-color: #edf2fb; pointer-events: none;" maxlength="4" required readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Examination Date</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="admFile" style="background-color: #edf2fb; pointer-events: none;" maxlength="4" required readonly></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary yesbtn" name="delete_records">YES</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">NO</button>
                </div>
            </div>
        </div>
    </div>
</form>