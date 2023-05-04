<link rel="icon" href="src/images/uccLogo.png">
<link rel="stylesheet" href="src/styles/customStyle.css">
<!-- ================================================================================================================================================ -->
<!-- ==================ADD Schedule MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="addScheduleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Add Proctor Schedule</h3>
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
                                            <textarea rows="1" class="form-control form-control-line" name="pName" style="background-color: #e8eddf; pointer-events: none;" maxlength="40" readonly required><?php echo $_SESSION['pName']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Room Assigned</label>
                                        <select name="roomAssigned" class="form-selects" aria-label="Default select example" required>
                                            <option class="options" value="" selected>Select type</option>
                                            <?php
                                            $query = mysqli_query($mysqli, "SELECT * FROM tbl_rooms");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                                <option class="options" value="<?php echo $row['roomName']; ?>"><?php echo $row['roomName']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Start Time</label>
                                        <div class="col-md-12">
                                            <input class="form-control" type="datetime-local" name="startTime" placeholder="HH:MM " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">End Time</label>
                                        <div class="col-md-12">
                                            <input class="form-control" type="datetime-local" name="endTime" placeholder="HH:MM " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Date</label>
                                        <div class="select-menu">
                                            <div class="select-btn">
                                                <span class="sBtn-text">Select your options</span>
                                                <i class="fas fa-caret-down"></i>
                                            </div>
                                            <textarea class="sBtn-text-clone" name="date"></textarea>
                                            <ul class="options">
                                                <?php
                                                $query = mysqli_query($mysqli, "SELECT * FROM tbl_admissiontestschedule");
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                    <li class="option">
                                                        <span class="option-text" value="<?php echo $row['admID']; ?>"><?php echo date('F j, Y', strtotime($row["admDate"])); ?></span>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="width: auto;">
                    <button style="width: 200px;" type="submit" class="btn btn-primary mdladdbtn" name="addsched">Submit</button>
                    <button  style="width: 200px;"type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================EDIT Schedule MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="editScheduleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Edit Schedule</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Row</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="num" style="background-color: #e8eddf; pointer-events: none;" maxlength="40" readonly required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Proctor Name</label>
                                        <div class="col-md-12">
                                            <textarea id="spID" name="pID" style="display: none;"></textarea>
                                            <textarea rows="1" class="form-control form-control-line" name="pName" style="background-color: #e8eddf; pointer-events: none;" maxlength="40" readonly required><?php echo $_SESSION['pName']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Room Assigned</label>
                                        <select name="roomAssigned" class="form-selects" aria-label="Default select example" required>
                                            <option class="options" value="" selected>Select type</option>
                                            <?php
                                            $query = mysqli_query($mysqli, "SELECT * FROM tbl_rooms");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                                <option class="options" value="<?php echo $row['roomName']; ?>"><?php echo $row['roomName']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Start Time</label>
                                        <div class="col-md-12">
                                            <input class="form-control" type="datetime-local" name="startTime" placeholder="HH:MM " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">End Time</label>
                                        <div class="col-md-12">
                                            <input class="form-control" type="datetime-local" name="endTime" placeholder="HH:MM " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Date</label>
                                        <select name="date" class="form-selects" aria-label="Default select example" required>
                                            <option class="options" value="" selected>Select type</option>
                                            <?php
                                            $query = mysqli_query($mysqli, "SELECT * FROM tbl_admissiontestschedule");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                                <option class="options" value="<?php echo $row['admDate']; ?>"><?php echo date('F j, Y', strtotime($row["admDate"])); ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button style="width: 200px;" type="submit" class="btn btn-primary mdladdbtn" name="editsched">Confirm</button>
                    <button style="width: 200px;" type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================Delete Schedule MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="deleteScheduleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Delete Schedule</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Row</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="row" style="background-color: #e8eddf; pointer-events: none;" maxlength="40" readonly required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Proctor Name</label>
                                        <div class="col-md-12">
                                            <textarea id="dpID" name="pID" style="display: none;"></textarea>
                                            <textarea rows="1" class="form-control form-control-line" name="pName" style="background-color: #e8eddf; pointer-events: none;" maxlength="40" readonly required><?php echo $_SESSION['pName']; ?></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button style="width: 200px;" type="submit" class="btn btn-primary deletebtn" name="deletesched">Delete</button>
                    <button style="width: 200px;" type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ================================================================================================================================================ -->
<!-- ==================Mark as Completed MODAL========================== -->
<!-- ================================================================================================================================================ -->
<form method="POST" action="" autocomplete="off">
    <div class="modal fade" id="markAsCompletedModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content approve">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Mark as Completed</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Row</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" id="row1" style="background-color: #e8eddf; pointer-events: none;" maxlength="40" readonly required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Proctor Name</label>
                                        <div class="col-md-12">
                                            <textarea rows="1" class="form-control form-control-line" name="pName" style="background-color: #e8eddf; pointer-events: none;" maxlength="40" readonly required><?php echo $_SESSION['pName']; ?></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;">
                    <button style="width: 200px;" type="submit" class="btn btn-primary btnblue" name="markascompleted">Confirm</button>
                    <button style="width: 200px;" type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>