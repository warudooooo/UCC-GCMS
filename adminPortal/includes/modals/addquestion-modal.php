<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="src/styles/customStyle.css">
<!-- ================================================================================================================================================ -->
<!-- ==================ADD QUESTION MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="addquestionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Add Question</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Year (Ex: 20xx)</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="qYear" style="background-color: #edf2fb;" maxlength="4" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Subject</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="qSubject" style="background-color: #edf2fb; text-transform: uppercase;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Question</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="qQuestion" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Option 1</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="qOptionOne" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Option 2</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="qOptionTwo" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Option 3</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="qOptionThree" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Option 3</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="qOptionFour" style="background-color: #edf2fb; " required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Answer</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="qAnswer" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary mdladdbtn" name="submit">Add Question</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================EDIT QUESTION MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="editquestionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Edit Question</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <textarea rows="1" class="form-control form-control-line" id="qID" name="qID" style="background-color: #edf2fb;" maxlength="4" required></textarea>
                                        <label class="col-md-12">Year (Ex: 20xx)</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="qYear" name="qYear" style="background-color: #edf2fb;" maxlength="4" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Subject</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="qSubject" name="qSubject" style="background-color: #edf2fb; text-transform: uppercase;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Question</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="qQuestion" name="qQuestion" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Option 1</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="qOptionOne" name="qOptionOne" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Option 2</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="qOptionTwo" name="qOptionTwo" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Option 3</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="qOptionThree" name="qOptionThree" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Option 3</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="qOptionFour" name="qOptionFour" style="background-color: #edf2fb; " required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Answer</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="qAnswer" name="qAnswer" style="background-color: #edf2fb;" required></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary mdladdbtn" name="edit_questions">Submit</button>
                    <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- ================================================================================================================================================ -->
<!-- ==================Delete Question MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
    <div class="modal fade" id="deletequestionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <textarea style="display: none;" id="qsID" name="qsID" required></textarea>
                                    <div class="form-group">
                                        <label class="col-md-12">Number</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="qsNum" style="background-color: #edf2fb;" maxlength="4" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Year</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="qsYear" style="background-color: #edf2fb;" maxlength="4" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Subject</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="qsSubject" style="background-color: #edf2fb;" maxlength="4" required></textarea>
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