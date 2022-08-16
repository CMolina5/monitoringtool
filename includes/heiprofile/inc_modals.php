<!---MODAL FOR ADDING NEW PROGRAM--->
<div class="modal fade" role="dialog" tabindex="-1" id="addprogram">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" id="add_degree_program">
                <div class="modal-header">
                    <h4 class="modal-title">Add Program</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Program Code</label>
                        <input class="form-control" type="text" name="program_code" id="program_code">
                </div>
                    <div class="form-group">
                        <label>Degree Program</label>
                        <input class="form-control" type="text" placeholder="Ex. Bachelor in Elementary Education" name="program_name" id="program_name">
                </div>
                    <div class="form-group">
                        <label>Government Recognition No.</label>
                        <input class="form-control" type="text" placeholder="Ex. GR No.20, 2018" name="gr_no" id="gr_no">
                    </div>
                    <div class="form-group">
                        <label>Certificate of Program Compliance No.</label>
                        <input class="form-control" type="text" placeholder="Ex. COPC No.20, 2018" name="copc_no" id="copc_no">
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button  class="btn btn-primary" type="submit" name='btn_add_program' id='btn_add_program'>Save</button></div>
            </form>
        </div>
    </div>
</div>

<!---MODAL FOR EDITING PROGRAM--->
<div class="modal fade" role="dialog" tabindex="-1" id="editprogram">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <form method="POST" id="edit_degree_program">
            <div class="modal-header">
                <h4 class="modal-title">Edit Program</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">  
                    <div class="form-group"><label>Program Code</label><input class="form-control" type="text" name="program_code1" id="program_code1"></div>
                    <div class="form-group"><label>Degree Program</label><input class="form-control" type="text" placeholder="Ex. Bachelor in Elementary Education" name="program_name1" id="program_name1"></div>
                    <div class="form-group"><label>Government Recognition No.</label><input class="form-control" type="text" placeholder="Ex. GR No.20, 2018" name="gr_no1" id="gr_no1"></div>
                    <div class="form-group"><label>Certificate of Program Compliance No.</label><input class="form-control" type="text" placeholder="Ex. COPC No.20, 2018" name="copc_no1" id="copc_no1"></div>   
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>

<div role="dialog" tabindex="-1" class="modal fade show" id="removeprogram">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_degree_program">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Program Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this Degree Program?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>