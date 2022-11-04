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
                        <input class="form-control" type="text" name="program_code" id="program_code" required>
                    </div>
                    <div class="form-group">
                        <label>Degree Program</label>
                        <input class="form-control" type="text" placeholder="Ex. Bachelor in Elementary Education" name="program_name" id="program_name" required>
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
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit" name='btn_add_program' id='btn_add_program'>Save</button></div>
            </form>
        </div>
    </div>
</div>

<!---MODAL FOR EDITING PROGRAM--->
<!-- <div class="modal fade" role="dialog" tabindex="-1" id="editprogram">
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
</div> -->

<!---MODAL FOR REMOVING PROGRAM--->
<div role="dialog" tabindex="-1" class="modal fade show" id="removeprogram">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_degree_program">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Program Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this Degree Program?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<!---MODAL FOR REMOVING OTHER FUNDED STUFAPS--->
<div role="dialog" tabindex="-1" class="modal fade show" id="removestufap">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_other_stufap">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Other Funded StuFAP Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this StuFAP?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<!---MODAL FOR ADDING NEW STUFAPS--->
<div class="modal fade" role="dialog" tabindex="-1" id="addstufap">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" id="add_other_stufap">
                <div class="modal-header">
                    <h4 class="modal-title">Add StuFAP</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name of StuFAP</label>
                        <input class="form-control" type="text" name="stufap_name" id="stufap_name" required>
                    </div>
                    <div class="form-group">
                        <label>Type of StuFAP</label>
                        <select name="stufap_type" id="stufap_type" class="form-control" required>
                                <option disabled value="" selected>-- Select Type of StuFAP Funding --</option>
                                <option value="Local">Local</option>
                                <option value="National">National</option>
                        </select>
                    </div> 
                    <label>Total No. of Beneficiaries per Year Level</label>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label>1st</label><input id="total_other_stufap_beneficiaries_1st" name="total_other_stufap_beneficiaries_1st" type="number" class="form-control" /></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label>2nd</label><input id="total_other_stufap_beneficiaries_2nd" name="total_other_stufap_beneficiaries_2nd" class="form-control" type="number" /></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label>3rd</label><input id="total_other_stufap_beneficiaries_3rd" name="total_other_stufap_beneficiaries_3rd" type="number" class="form-control" /></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label>4th</label><input id="total_other_stufap_beneficiaries_4th" name="total_other_stufap_beneficiaries_4th" class="form-control" type="number" /></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label>5th</label><input id="total_other_stufap_beneficiaries_5th" name="total_other_stufap_beneficiaries_5th" type="number" class="form-control" /></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label>6th</label><input id="total_other_stufap_beneficiaries_6th" name="total_other_stufap_beneficiaries_6th" class="form-control" type="number" /></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit" name='btn_add_stufap' id='btn_add_stufap'>Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!---MODAL FOR EDITING STUFAPS--->
<div class="modal fade" role="dialog" tabindex="-1" id="editstufap">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" id="edit_degree_program">
                <div class="modal-header">
                    <h4 class="modal-title">Edit StuFAP</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name of StuFAP</label>
                        <input class="form-control" type="text" name="stufap_name" id="stufap_name">
                    </div>
                    <div class="form-group">
                        <label>Type of StuFAP</label>
                        <select name="stufap_type" id="stufap_type" class="form-control">
                                <option disabled selected>-- Select Type of StuFAP Funding --</option>
                                <option value="Local">Local</option>
                                <option value="National">National</option>
                        </select>
                    </div>
                    <label>Total No. of Beneficiaries per Year Level</label>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label>1st</label><input type="text" class="form-control" /></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label>2nd</label><input class="form-control" type="text" /></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label>3rd</label><input type="text" class="form-control" /></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label>4th</label><input class="form-control" type="text" /></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label>5th</label><input type="text" class="form-control" /></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label>6th</label><input class="form-control" type="text" /></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>

<!---MODAL FOR REMOVING STUFAPS--->
<div role="dialog" tabindex="-1" class="modal fade show" id="removestufap">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_degree_program">
                <div class="modal-header">
                    <h4 class="modal-title">Remove StuFAP Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this StuFAP?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>