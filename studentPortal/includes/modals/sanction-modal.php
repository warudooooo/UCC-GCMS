<link rel="icon" href="src/images/uccLogo.png">
<!-- ================================================================================================================================================ -->
<!-- ==================SEE MORE MODAL========================== -->
<!-- ================================================================================================================================================ -->
<div class="modal fade" id="seemoreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content seemore">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #333;">Appointment Details</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="col-md-12" style="margin-top:10px;">Student Name</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="studName" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top:10px;">Date Issued</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="dateIssued" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top:10px;">Sanction Type</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="sancType" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top:10px;">Degree</h5>
                <div class="col-md-12">
                    <input style="pointer-events: none; background-color: #e8eddf;" type="text" id="ssDegree" class="form-control form-control-line" readonly>
                </div>
                <h5 class="col-md-12" style="margin-top: 10px;">Case</h5>
                <div class="col-md-12">
                    <textarea rows="3" class="form-control form-control-line" id="sancCase" style="background-color: #e8eddf; padding: 20px; pointer-events: none;" readonly></textarea>
                </div>
                <h5 class="col-md-12" style="margin-top:10px;">Guidance Message</h5>
                <div class="col-md-12">
                    <textarea rows="8" class="form-control form-control-line" id="guideMessage" style="background-color: #e8eddf; padding: 20px; pointer-events: none;" readonly></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mdlclosebtn" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>