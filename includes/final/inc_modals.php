<div role="dialog" tabindex="-1" class="modal fade show" id="notice_modal">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <form method="POST" id="notice_modal_form">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="form-group text-center">
                        <h4 class="border-dark">DATA PRIVACY NOTICE</h4>
                    </div>
                    <div class="form-group text-center">
                        <div class="form-row">
                            <div class="col-xl-10 offset-xl-1">
                                <p class="text-left">In submitting this monitoring tool, I agree to the details being collected for the purposes of monitoring and evaluation of the programs under Republic Act No. 10931. I understand that:<br /></p>
                                <p class="text-left">1. All collected data shall be used for intended use only;<br />2. The information will only be accessed by the UniFAST. All collected data will be held securely and will not be distributed to<br />unauthorized or third
                                    parties; and<br />3. When collected information is no longer required for the intended purposes, all data will be disposed of by the UniFAST<br />in accordance with Republic Act No. 10173, otherwise known as the Data
                                    Privacy Act of 2012. <br /></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit" name="btn_notice" id="btn_notice">I Agree</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div role="dialog" tabindex="-1" class="modal fade show" id="signatories_modal">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <form  method="POST" id="signatories_modal_form">
                <div class="modal-header">
                    <h4 class="modal-title">Signatories</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                <div class="form-group text-center">
                        <h4 class="border-dark">Before submitting, please enter the name of the persons who prepared and  </h4>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label><strong>Prepared By:</strong></label></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-4">
                                <div class="form-group"><label>Personnel In-charge of FHE</label><input type="text" class="form-control text-uppercase" value="<?php echo $fhe_focal_name; ?>" /></div>
                            </div>
                            <div class="col-xl-4">
                                <div class="form-group"><label>TES Focal Person</label><input type="text" class="form-control text-uppercase" value="<?php echo $tes_focal_name; ?>" /></div>
                            </div>
                            <div class="col-xl-4">
                                <div class="form-group"><label>Personnel In-charge of TDP</label><input type="text" class="form-control text-uppercase" value="<?php echo $tdp_focal_name; ?>" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label><strong>Reviewed By:</strong></label></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-4">
                                <div class="form-group"><label>HEI Registrar</label><input type="text" class="form-control text-uppercase" placeholder="Enter Name of HEI Registrar"/></div>
                            </div>
                            <div class="col-xl-4">
                                <div class="form-group"><label>Finance Officer</label><input type="text" class="form-control text-uppercase" placeholder="Enter Name of Finance Officer"/></div>
                            </div>
                            <!-- <div class="col">
                                <div class="form-group"><label>UniFAST Regional Coordinator</label><input type="text" class="form-control text-uppercase" readonly/></div>
                            </div> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label><strong>Submitted By/ Conforme:</strong></label></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <label>HEI President/Authorized Representative</label>
                                    <input type="text" class="form-control text-uppercase" value="<?php echo $hei_head_name; ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label><strong>Officialy Received By:</strong></label></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-4">
                                <div class="form-group"><label>Chief Education Program Specialist</label><input class="form-control text-uppercase" type="text" readonly/></div>
                            </div>
                        </div>
                    </div> -->

                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>