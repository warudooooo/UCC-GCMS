<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="src/styles/customStyle.css">
<!-- ================================================================================================================================================ -->
<!-- ==================ADD Counselor MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="addCounselorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Add Counselor</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Counselor Name</label>
                                        <div class="col-md-12">
                                            <textarea rows="3" class="form-control form-control-line" placeholder="Enter here..." name="pName" style="background-color: #edf2fb;" maxlength="255" required></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button  style="width: 200px;" type="submit" class="btn btn-primary mdladdbtn" name="addCounselor">Add Counselor</button>
                    <button  style="width: 200px;" type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================EDIT Counselor MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="editCounselorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Edit Counselor</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Counselor Name</label>
                                        <div class="col-md-12">
                                            <textarea id="pID" name="pID" style="display: none;" required></textarea>
                                            <textarea rows="3" class="form-control form-control-line" id="pName" name="pName" style="background-color: #edf2fb;" maxlength="255" required></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button style="width: 200px;" type="submit" class="btn btn-primary mdladdbtn" name="editCounselor">Submit</button>
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
    <div class="modal fade" id="deleteCounselorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Delete this selected Proctor?</h3>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Counselor Name</label>
                                        <div class="col-md-12">
                                            <textarea id="pdelID" name="pID" style="display: none;" required readonly></textarea>
                                            <textarea rows="3" class="form-control form-control-line" id="pdelName" name="pName" style="background-color: #edf2fb; pointer-events: none;" maxlength="255" required readonly></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button style="width: 200px;" type="submit" class="btn btn-primary yesbtn" style="width: 130px;" name="deleteCounselor">Delete</button>
                    <button style="width: 200px;" type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>