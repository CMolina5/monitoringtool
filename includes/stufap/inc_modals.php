<!-----MODAL----->

<!--Edit Program TDP-->
<div class="modal fade" role="dialog" tabindex="-1" id="edit_program_tdp_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" id="edit_program_tdp_form">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Program (TDP)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Degree Program</label><input name="tdp_program_name_1" id="tdp_program_name_1" class="form-control degree-program-font" type="text" disabled=""></div>
                    <hr>
                    <div class="form-group"><label>Total TDP Grantees</label></div>
                    <div class="form-group"><label>1st Semester</label>
                        <div class="form-row">
                            <div class="col-xl-6"><label>Male</label><input name="total_tdp_1st_male_1" id="total_tdp_1st_male_1" class="form-control" type="number" min="0"></div>
                            <div class="col-xl-6"><label>Female</label><input name="total_tdp_1st_female_1" id="total_tdp_1st_female_1" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>2nd Semester</label>
                        <div class="form-row">
                            <div class="col-xl-6"><label>Male</label><input name="total_tdp_2nd_male_1" id="total_tdp_2nd_male_1" class="form-control" type="number" min="0"></div>
                            <div class="col-xl-6"><label>Female</label><input name="total_tdp_2nd_female_1" id="total_tdp_2nd_female_1" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group"><label>No. of TDP Grantees who graduated</label>
                        <div class="form-row">
                            <div class="col-xl-6"><label>Male</label><input name="total_tdp_graduated_male_1" id="total_tdp_graduated_male_1" class="form-control" type="number" min="0"></div>
                            <div class="col-xl-6"><label>Female</label><input name="total_tdp_graduated_female_1" id="total_tdp_graduated_female_1" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group"><label>No. of TDP Grantees who exceeded the maximum residency rule</label>
                        <div class="form-row">
                            <div class="col-xl-6"><label>Male</label><input name="total_tdp_exceeded_mrr_male_1" id="total_tdp_exceeded_mrr_male_1" class="form-control" type="number" min="0"></div>
                            <div class="col-xl-6"><label>Female</label><input name="total_tdp_exceeded_mrr_female_1" id="total_tdp_exceeded_mrr_female_1" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>

<!--Add FHE Dropouts-->
<div class="modal fade" role="dialog" tabindex="-1" id="add_dropouts_fhe">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id='add_dropouts_fhe_form'>
                <div class="modal-header">
                    <h4 class="modal-title">Add Reason for Dropouts (FHE)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Reason for Dropping</label>
                        <select id="fhe_drop_reason" name="fhe_drop_reason" class="form-control" required>
                            <option selected disabled value="">Select Reason for Dropping</option>
                            <option value="Academic Difficulty">Academic Difficulty</option>
                            <option value="Employment/Looking for Work">Employment/Looking for Work</option>
                            <option value="Financial Concerns">Financial Concerns</option>
                            <option value="Pregnancy/Marriage/Family Issues">Pregnancy/Marriage/Family Issues</option>
                            <option value="Health/Illness/Disability">Health/Illness/Disability</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>If other reason please specify:</label><input id="fhe_drop_other" name="fhe_drop_other" class="form-control" type="text">
                    </div>
                    <hr>
                    <div class="form-group"><label>No. of Dropouts</label></div>

                    <div class="form-group">
                        <label>1st Term</label>
                        <div class="form-row">
                            <div class="col"><input id="fhe_drop_1st_male" name="fhe_drop_1st_male" class="form-control" type="number" min="0" /></div>
                            <div class="col"><input id="fhe_drop_1st_female" name="fhe_drop_1st_female" class="form-control" type="number" min="0" /></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>2nd Term</label>
                        <div class="form-row">
                            <div class="col"><input id="fhe_drop_2nd_male" name="fhe_drop_2nd_male" class="form-control" type="number" min="0" /></div>
                            <div class="col"><input id="fhe_drop_2nd_female" name="fhe_drop_2nd_female" class="form-control" type="number" min="0" /></div>
                        </div>
                    </div>

                    <?php
                    if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
                        echo '
                        <div class="form-group">
                        <label>3rd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="fhe_drop_3rd_male" name="fhe_drop_3rd_male" class="form-control" type="number" min="0"/></div>
                                <div class="col"><input id="fhe_drop_3rd_female" name="fhe_drop_3rd_female" class="form-control" type="number" min="0"/></div>
                            </div>
                        </div>
                    ';
                    }

                    if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
                        echo '
                        <div class="form-group">
                        <label>Summer/Midyear</label>
                            <div class="form-row">
                                <div class="col"><input id="fhe_drop_summer_midyear_male" name="fhe_drop_summer_midyear_male" class="form-control" type="number" min="0"/></div>
                                <div class="col"><input id="fhe_drop_summer_midyear_female" name="fhe_drop_summer_midyear_female" class="form-control" type="number" min="0"/></div>
                            </div>
                        </div>
                    ';
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Add FHE LOA-->
<div class="modal fade" role="dialog" tabindex="-1" id="add_loa_fhe">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id='add_loa_fhe_form'>
                <div class="modal-header">
                    <h4 class="modal-title">Add Reason for LOA (FHE)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Reason for LOA</label>
                        <select id="fhe_loa_reason" name="fhe_loa_reason" class="form-control" required>
                            <option selected disabled value="">Select Reason for Dropping</option>
                            <option value="Academic Difficulty">Academic Difficulty</option>
                            <option value="Employment/Looking for Work">Employment/Looking for Work</option>
                            <option value="Financial Concerns">Financial Concerns</option>
                            <option value="Pregnancy/Marriage/Family Issues">Pregnancy/Marriage/Family Issues</option>
                            <option value="Health/Illness/Disability">Health/Illness/Disability</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>If other reason please specify:</label><input id="fhe_loa_other" name="fhe_loa_other" class="form-control" type="text">
                    </div>
                    <hr>
                    <div class="form-group"><label>No. of Dropouts</label></div>

                    <div class="form-group">
                        <label>1st Term</label>
                        <div class="form-row">
                            <div class="col"><input id="fhe_loa_1st_male" name="fhe_loa_1st_male" class="form-control" type="number" min="0" /></div>
                            <div class="col"><input id="fhe_loa_1st_female" name="fhe_loa_1st_female" class="form-control" type="number" min="0" /></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>2nd Term</label>
                        <div class="form-row">
                            <div class="col"><input id="fhe_loa_2nd_male" name="fhe_loa_2nd_male" class="form-control" type="number" min="0" /></div>
                            <div class="col"><input id="fhe_loa_2nd_female" name="fhe_loa_2nd_female" class="form-control" type="number" min="0" /></div>
                        </div>
                    </div>

                    <?php
                    if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
                        echo '
                        <div class="form-group">
                        <label>3rd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="fhe_loa_3rd_male" name="fhe_loa_3rd_male" class="form-control" type="number" min="0"/></div>
                                <div class="col"><input id="fhe_loa_3rd_female" name="fhe_loa_3rd_female" class="form-control" type="number" min="0"/></div>
                            </div>
                        </div>
                    ';
                    }

                    if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
                        echo '
                        <div class="form-group">
                        <label>Summer/Midyear</label>
                            <div class="form-row">
                                <div class="col"><input id="fhe_loa_summer_midyear_male" name="fhe_loa_summer_midyear_male" class="form-control" type="number" min="0"/></div>
                                <div class="col"><input id="fhe_loa_summer_midyear_female" name="fhe_loa_summer_midyear_female" class="form-control" type="number" min="0"/></div>
                            </div>
                        </div>
                    ';
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--Add TES LOA-->
<div class="modal fade" role="dialog" tabindex="-1" id="add_loa_tes">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id='add_loa_tes_form'>
                <div class="modal-header">
                    <h4 class="modal-title">Add Reason for LOA (TES)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Reason for LOA</label>
                        <select id="tes_loa_reason" name="tes_loa_reason" class="form-control" required>
                            <option selected disabled value="">Select Reason for Dropping</option>
                            <option value="Academic Difficulty">Academic Difficulty</option>
                            <option value="Employment/Looking for Work">Employment/Looking for Work</option>
                            <option value="Financial Concerns">Financial Concerns</option>
                            <option value="Pregnancy/Marriage/Family Issues">Pregnancy/Marriage/Family Issues</option>
                            <option value="Health/Illness/Disability">Health/Illness/Disability</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>If other reason please specify:</label><input id="tes_loa_other" name="tes_loa_other" class="form-control" type="text">
                    </div>
                    <hr>
                    <div class="form-group"><label>No. of Dropouts</label></div>

                    <div class="form-group">
                        <label>1st Term</label>
                        <div class="form-row">
                            <div class="col"><input id="tes_loa_1st_male" name="tes_loa_1st_male" class="form-control" type="number" min="0" /></div>
                            <div class="col"><input id="tes_loa_1st_female" name="tes_loa_1st_female" class="form-control" type="number" min="0" /></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>2nd Term</label>
                        <div class="form-row">
                            <div class="col"><input id="tes_loa_2nd_male" name="tes_loa_2nd_male" class="form-control" type="number" min="0" /></div>
                            <div class="col"><input id="tes_loa_2nd_female" name="tes_loa_2nd_female" class="form-control" type="number" min="0" /></div>
                        </div>
                    </div>

                    <?php
                    if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
                        echo '
                        <div class="form-group">
                        <label>3rd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="tes_loa_3rd_male" name="tes_loa_3rd_male" class="form-control" type="number" min="0"/></div>
                                <div class="col"><input id="tes_loa_3rd_female" name="tes_loa_3rd_female" class="form-control" type="number" min="0"/></div>
                            </div>
                        </div>
                    ';
                    }

                    if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
                        echo '
                        <div class="form-group">
                        <label>Summer/Midyear</label>
                            <div class="form-row">
                                <div class="col"><input id="tes_loa_summer_midyear_male" name="tes_loa_summer_midyear_male" class="form-control" type="number" min="0"/></div>
                                <div class="col"><input id="tes_loa_summer_midyear_female" name="tes_loa_summer_midyear_female" class="form-control" type="number" min="0"/></div>
                            </div>
                        </div>
                    ';
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Add TDP LOA-->
<div class="modal fade" role="dialog" tabindex="-1" id="add_loa_tdp">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id='add_loa_tdp_form'>
                <div class="modal-header">
                    <h4 class="modal-title">Add Reason for LOA (TDP)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Reason for LOA</label>
                        <select id="tdp_loa_reason" name="tdp_loa_reason" class="form-control" required>
                            <option selected disabled value="">Select Reason for Dropping</option>
                            <option value="Academic Difficulty">Academic Difficulty</option>
                            <option value="Employment/Looking for Work">Employment/Looking for Work</option>
                            <option value="Financial Concerns">Financial Concerns</option>
                            <option value="Pregnancy/Marriage/Family Issues">Pregnancy/Marriage/Family Issues</option>
                            <option value="Health/Illness/Disability">Health/Illness/Disability</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>If other reason please specify:</label><input id="tdp_loa_other" name="tdp_loa_other" class="form-control" type="text">
                    </div>
                    <hr>
                    <div class="form-group"><label>No. of Dropouts</label></div>

                    <div class="form-group">
                        <label>1st Term</label>
                        <div class="form-row">
                            <div class="col"><input id="tdp_loa_1st_male" name="tdp_loa_1st_male" class="form-control" type="number" min="0" /></div>
                            <div class="col"><input id="tdp_loa_1st_female" name="tdp_loa_1st_female" class="form-control" type="number" min="0" /></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>2nd Term</label>
                        <div class="form-row">
                            <div class="col"><input id="tdp_loa_2nd_male" name="tdp_loa_2nd_male" class="form-control" type="number" min="0" /></div>
                            <div class="col"><input id="tdp_loa_2nd_female" name="tdp_loa_2nd_female" class="form-control" type="number" min="0" /></div>
                        </div>
                    </div>

                    <?php
                    if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
                        echo '
                        <div class="form-group">
                        <label>3rd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="tdp_loa_3rd_male" name="tdp_loa_3rd_male" class="form-control" type="number" min="0"/></div>
                                <div class="col"><input id="tdp_loa_3rd_female" name="tdp_loa_3rd_female" class="form-control" type="number" min="0"/></div>
                            </div>
                        </div>
                    ';
                    }

                    if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
                        echo '
                        <div class="form-group">
                        <label>Summer/Midyear</label>
                            <div class="form-row">
                                <div class="col"><input id="tdp_loa_summer_midyear_male" name="tdp_loa_summer_midyear_male" class="form-control" type="number" min="0"/></div>
                                <div class="col"><input id="tdp_loa_summer_midyear_female" name="tdp_loa_summer_midyear_female" class="form-control" type="number" min="0"/></div>
                            </div>
                        </div>
                    ';
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Edit FHE Dropouts-->
<div class="modal fade" role="dialog" tabindex="-1" id="edit_dropouts_fhe_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="edit_dropouts_fhe_form">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Reason for Dropouts (FHE)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Reason for Dropping</label><input id="fhe_drop_reason_edit" name="fhe_drop_reason_edit" class="form-control" type="text" disabled=""></div>
                    <hr>
                    <div class="form-group"><label>No. of Dropouts</label></div>
                    <div class="form-group"><label>1st Term</label><input id="fhe_drop_1st_edit" name="fhe_drop_1st_edit" class="form-control" type="number" min="0"></div>
                    <div class="form-group"><label>2nd Term</label><input id="fhe_drop_2nd_edit" name="fhe_drop_2nd_edit" class="form-control" type="number" min="0"></div>
                    <?php
                    if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
                        echo "
                    <div class='form-group'><label>3rd Term</label><input id='fhe_drop_3rd_edit' name='fhe_drop_3rd_edit' class='form-control' type='number'></div>";
                    }
                    if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
                        echo "
                    <div class='form-group'><label>Summer/Midyear</label><input id='fhe_drop_summer_midyear_edit' name='fhe_drop_summer_midyear_edit' class='form-control' type='number'></div>";
                    }
                    ?>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>

<!--Add TES Dropouts-->
<div class="modal fade" role="dialog" tabindex="-1" id="add_dropouts_tes_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="add_dropouts_tes_form">
                <div class="modal-header">
                    <h4 class="modal-title">Add Reason for Dropouts (TES)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Reason for Dropping</label>
                        <select id="tes_drop_reason" name="tes_drop_reason" class="form-control" required>
                            <option selected disabled value="">Select Reason for Dropping</option>
                            <option value="Academic Difficulty">Academic Difficulty</option>
                            <option value="Employment/Looking for Work">Employment/Looking for Work</option>
                            <option value="Financial Concerns">Financial Concerns</option>
                            <option value="Pregnancy/Marriage/Family Issues">Pregnancy/Marriage/Family Issues</option>
                            <option value="Health/Illness/Disability">Health/Illness/Disability</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group"><label>If other reason please specify:</label><input id="tes_drop_other" name="tes_drop_other" class="form-control" type="text"></div>
                    <hr>
                    <div class="form-group"><label>No. of Dropouts</label></div>
                    <div class="form-group">
                        <label>1st Term</label>
                        <div class="form-row">
                            <div class="col"><input id="tes_drop_1st_male" name="tes_drop_1st_male" class="form-control" type="number" min="0" /></div>
                            <div class="col"><input id="tes_drop_1st_female" name="tes_drop_1st_female" class="form-control" type="number" min="0" /></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>2nd Term</label>
                        <div class="form-row">
                            <div class="col"><input id="tes_drop_2nd_male" name="tes_drop_2nd_male" class="form-control" type="number" min="0" /></div>
                            <div class="col"><input id="tes_drop_2nd_female" name="tes_drop_2nd_female" class="form-control" type="number" min="0" /></div>
                        </div>
                    </div>

                    <?php
                    if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
                        echo '
                        <div class="form-group">
                        <label>3rd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="tes_drop_3rd_male" name="tes_drop_3rd_male" class="form-control" type="number" min="0"/></div>
                                <div class="col"><input id="tes_drop_3rd_female" name="tes_drop_3rd_female" class="form-control" type="number" min="0"/></div>
                            </div>
                        </div>
                    ';
                    }

                    if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
                        echo '
                        <div class="form-group">
                        <label>Summer/Midyear</label>
                            <div class="form-row">
                                <div class="col"><input id="tes_drop_summer_midyear_male" name="tes_drop_summer_midyear_male" class="form-control" type="number" min="0"/></div>
                                <div class="col"><input id="tes_drop_summer_midyear_female" name="tes_drop_summer_midyear_female" class="form-control" type="number" min="0"/></div>
                            </div>
                        </div>
                    ';
                    }
                    ?>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>

<!--Edit TES Dropouts-->
<div class="modal fade" role="dialog" tabindex="-1" id="edit_dropouts_tes_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" id="edit_dropouts_tes_form">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Reason for Dropouts (TES)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Reason for Dropping</label><input id="tes_drop_reason_1" name="tes_drop_reason_1" class="form-control" type="text" disabled=""></div>
                    <hr>
                    <div class="form-group"><label>No. of Dropouts</label></div>
                    <div class="form-group"><label>1st Semester</label><input id="tes_drop_1st_1" name="tes_drop_1st_1" class="form-control" type="number" min="0"></div>
                    <div class="form-group"><label>2nd Semester</label><input id="tes_drop_2nd_1" name="tes_drop_2nd_1" class="form-control" type="number" min="0"></div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>

<!--Add TDP Dropouts-->
<div class="modal fade" role="dialog" tabindex="-1" id="add_dropouts_tdp_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="add_dropouts_tdp_form">
                <div class="modal-header">
                    <h4 class="modal-title">Add Reason for Dropouts (TDP)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Reason for Dropping</label>
                        <select id="tdp_drop_reason" name="tdp_drop_reason" class="form-control">
                            <option selected disabled value="">Select Reason for Dropping</option>
                            <option value="Academic Difficulty">Academic Difficulty</option>
                            <option value="Employment/Looking for Work">Employment/Looking for Work</option>
                            <option value="Financial Concerns">Financial Concerns</option>
                            <option value="Pregnancy/Marriage/Family Issues">Pregnancy/Marriage/Family Issues</option>
                            <option value="Health/Illness/Disability">Health/Illness/Disability</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group"><label>If other reason please specify:</label><input id="tdp_drop_other" name="tdp_drop_other" class="form-control" type="text"></div>
                    <hr>
                    <div class="form-group"><label>No. of Dropouts</label></div>
                    <div class="form-group">
                        <label>1st Term</label>
                        <div class="form-row">
                            <div class="col"><input id="tdp_drop_1st_male" name="tdp_drop_1st_male" class="form-control" type="number" min="0" /></div>
                            <div class="col"><input id="tdp_drop_1st_female" name="tdp_drop_1st_female" class="form-control" type="number" min="0" /></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>2nd Term</label>
                        <div class="form-row">
                            <div class="col"><input id="tdp_drop_2nd_male" name="tdp_drop_2nd_male" class="form-control" type="number" min="0" /></div>
                            <div class="col"><input id="tdp_drop_2nd_female" name="tdp_drop_2nd_female" class="form-control" type="number" min="0" /></div>
                        </div>
                    </div>

                    <?php
                    if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
                        echo '
                        <div class="form-group">
                        <label>3rd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="tdp_drop_3rd_male" name="tdp_drop_3rd_male" class="form-control" type="number" min="0"/></div>
                                <div class="col"><input id="tdp_drop_3rd_female" name="tdp_drop_3rd_female" class="form-control" type="number" min="0"/></div>
                            </div>
                        </div>
                    ';
                    }

                    if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
                        echo '
                        <div class="form-group">
                        <label>Summer/Midyear</label>
                            <div class="form-row">
                                <div class="col"><input id="tdp_drop_summer_midyear_male" name="tdp_drop_summer_midyear_male" class="form-control" type="number" min="0"/></div>
                                <div class="col"><input id="tdp_drop_summer_midyear_female" name="tdp_drop_summer_midyear_female" class="form-control" type="number" min="0"/></div>
                            </div>
                        </div>
                    ';
                    }
                    ?>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>

<!--Edit TDP Dropouts-->
<div class="modal fade" role="dialog" tabindex="-1" id="edit_dropouts_tdp_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="edit_dropouts_tdp_form">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Reason for Dropouts (TDP)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Reason for Dropping</label><input id="tdp_drop_reason_1" name="tdp_drop_reason_1" class="form-control" type="text" disabled=""></div>
                    <hr>
                    <div class="form-group"><label>No. of Dropouts</label></div>
                    <div class="form-group"><label>1st Semester</label><input id="tdp_drop_1st_1" name="tdp_drop_1st_1" class="form-control" type="number" min="0"></div>
                    <div class="form-group"><label>2nd Semester</label><input id="tdp_drop_2nd_1" name="tdp_drop_2nd_1" class="form-control" type="number" min="0"></div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>

<!--Remove fhe dropouts modal-->
<div role="dialog" tabindex="-1" class="modal fade show" id="remove_fhe_dropouts_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_fhe_dropouts_form">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Data Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this data?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<!--Remove fhe LOA modal-->
<div role="dialog" tabindex="-1" class="modal fade show" id="remove_fhe_loa_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_fhe_loa_form">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Data Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this data?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<!--Remove tes category modal-->
<div role="dialog" tabindex="-1" class="modal fade show" id="remove_tes_category_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_tes_category_form">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Data Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this data?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<!--Remove tes program modal-->
<div role="dialog" tabindex="-1" class="modal fade show" id="remove_tes_program_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_tes_program_form">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Data Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this data?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<!--Remove tes LOA modal-->
<div role="dialog" tabindex="-1" class="modal fade show" id="remove_tes_loa_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_tes_loa_form">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Data Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this data?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<!--Remove tes dropouts modal-->
<div role="dialog" tabindex="-1" class="modal fade show" id="remove_tes_dropouts_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_tes_dropouts_form">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Data Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this data?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<!--Remove tdp program modal-->
<div role="dialog" tabindex="-1" class="modal fade show" id="remove_tdp_program_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_tdp_program_form">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Data Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this data?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<!--Remove tdp dropouts modal-->
<div role="dialog" tabindex="-1" class="modal fade show" id="remove_tdp_dropouts_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_tdp_dropouts_form">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Data Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this data?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<!--Remove tdp loa modal-->
<div role="dialog" tabindex="-1" class="modal fade show" id="remove_tdp_loa_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_tdp_loa_form">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Data Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this data?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<!--Remove fhe category modal-->
<div role="dialog" tabindex="-1" class="modal fade show" id="remove_fhe_category_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="remove_fhe_category_form">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Data Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this data?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<!--Add FHE Category-->
<div class="modal fade" role="dialog" tabindex="-1" id="add_fhe_category_modal">
    <div class="modal-dialog" role="document">
        <div id="add_fhe_category_modal_body" class="modal-content">
            <form method="POST" id="add_fhe_category_form">
                <div class="modal-header">
                    <h4 class="modal-title">Add FHE Category</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>FHE Category</label>
                        <select id="fhe_category" name="fhe_category" class="form-control" required>

                            <option selected disabled value="">--- Select FHE Category ---</option>
                            <?php
                            $fhe_category_array = array("4PS-SWDI", "LISTAHANAN");
                            $fhe_category = [];

                            $sql = "SELECT * FROM tbl_fhe_category WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);

                            if ($resultCheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $fhe_category[] = $row['fhe_category'];
                                }
                                $fhe_category_diff = array_diff($fhe_category_array, $fhe_category);
                                foreach ($fhe_category_diff as $value) {
                                    echo "
                                        <option value=" . $value . ">" . $value . "</option>
                                    >";
                                }
                                if (empty($fhe_category_diff)) {
                                    echo "
                                        <option selected disabled value=''>ALL CATEGORY HAS BEEN USED</option>
                                    >";
                                }
                            } else {
                                foreach ($fhe_category_array as $value) {
                                    echo "
                                        <option value=" . $value . ">" . $value . "</option>
                                    >";
                                }
                            }

                            ?>

                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>1st Semester</label>
                        <div class="form-row">
                        
                            <div class="col">
                                <div class="input-group"><div class="input-group-prepend"><span class="input-group-text icon-container"><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input id="total_fhe_1st_male" name="total_fhe_1st_male" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                            </div>

                            <div class="col"> 
                                <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><<input id="total_fhe_1st_female" name="total_fhe_1st_female" class="form-control" type="number" min="0" placeholder="0">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>2nd Semester</label>
                        <div class="form-row">
                            <div class="col"><input id="total_fhe_2nd_male" name="total_fhe_2nd_male" class="form-control" type="number" min="0"></div>
                            <div class="col"><input id="total_fhe_2nd_female" name="total_fhe_2nd_female" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>3rd Semester</label>
                        <div class="form-row">
                            <div class="col"><input id="total_fhe_3rd_male" name="total_fhe_3rd_male" class="form-control" type="number" min="0"></div>
                            <div class="col"><input id="total_fhe_3rd_female" name="total_fhe_3rd_female" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Summer/Midyear</label>
                        <div class="form-row">
                            <div class="col"><input id="total_fhe_sum_mid_male" name="total_fhe_sum_mid_male" class="form-control" type="number" min="0"></div>
                            <div class="col"><input id="total_fhe_sum_mid_female" name="total_fhe_sum_mid_female" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--EDIT TES PROGRAMS-->
<div class="modal fade" role="dialog" tabindex="-1" id="editprogramtes">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Program (TES)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group"><label>Degree Program</label><input class="form-control degree-program-font" type="text" disabled=""></div>
                    <hr>
                    <div class="form-group"><label>No. of TES Grantees who exceeded the maximum residency rule</label>
                        <div class="form-row">
                            <div class="col-xl-6"><label>Male</label><input class="form-control" type="number" min="0"></div>
                            <div class="col-xl-6"><label>Female</label><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
        </div>
    </div>
</div>

<!--Add Program TES-->
<div class="modal fade" role="dialog" tabindex="-1" id="add_program_tes_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div id="add_program_tes_modal_body" class="modal-content">
            <form method="POST" id="add_program_tes_form">
                <div class="modal-header">
                    <h4 class="modal-title">Add Program (TES)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Degree Program</label>
                        <select name="tes_program_name" id="tes_program_name" class="form-control degree-program-font" required>
                            <option selected disabled value="">--- Select Degree Program ---</option>
                            <?php
                            $sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (total_tes_exceeded_mrr_male = 0 OR total_tes_exceeded_mrr_female = 0)";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);

                            if ($resultCheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $uid = $row['uid'];
                                    $program_name = $row['program_name'];
                                    echo "<option value='$uid'>$program_name</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group"><label>No. of TES Grantees who exceeded the maximum residency rule</label>
                        <div class="form-row">
                            <div class="col-xl-6"><label>Male</label><input name="total_tes_mrr_male" id="total_tes_mrr_male" class="form-control" type="number" min="0"></div>
                            <div class="col-xl-6"><label>Female</label><input name="total_tes_mrr_female" id="total_tes_mrr_female" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>

                    <div class="form-group"><label>Estimated No. of Graduating Students</label>
                        <div class="form-row">
                            <div class="col-xl-6"><label>Male</label><input name="total_tes_est_grad_male" id="total_tes_est_grad_male" class="form-control" type="number" min="0"></div>
                            <div class="col-xl-6"><label>Female</label><input name="total_tes_est_grad_female" id="total_tes_est_grad_female" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>

<!--Add TES Category-->
<div class="modal fade" role="dialog" tabindex="-1" id="add_tes_category_modal">
    <div class="modal-dialog" role="document">
        <div id="add_tes_category_modal_body" class="modal-content">
            <form method="POST" id="add_tes_category_form">
                <div class="modal-header">
                    <h4 class="modal-title">Add TES Category</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>TES Category</label>
                        <select id="tes_category" name="tes_category" class="form-control" required>

                            <option selected disabled value="">--- Select TES Category ---</option>
                            <?php
                            $tes_category_array = array("ESGPPA", "4PS-SWDI", "LISTAHANAN", "PNSL");
                            $tes_category = [];

                            $sql = "SELECT * FROM tbl_tes_category WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);

                            if ($resultCheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $tes_category[] = $row['tes_category'];
                                }
                                $tes_category_diff = array_diff($tes_category_array, $tes_category);
                                foreach ($tes_category_diff as $value) {
                                    echo "
                                        <option value=" . $value . ">" . $value . "</option>
                                    >";
                                }
                                if (empty($tes_category_diff)) {
                                    echo "
                                        <option selected disabled value=''>ALL CATEGORY HAS BEEN USED</option>
                                    >";
                                }
                            } else {
                                foreach ($tes_category_array as $value) {
                                    echo "
                                        <option value=" . $value . ">" . $value . "</option>
                                    >";
                                }
                            }

                            ?>

                        </select>
                    </div>
                    <hr>
                    <div class="form-group"><label>Total Grantees</label>
                        <div class="form-group"><label>1st Term</label>
                            <div class="form-row">
                                <div class="col"><input id="total_tes_1st_male" name="total_tes_1st_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_tes_1st_female" name="total_tes_1st_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                        <div class="form-group"><label>2nd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="total_tes_2nd_male" name="total_tes_2nd_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_tes_2nd_female" name="total_tes_2nd_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>3rd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="total_tes_3rd_male" name="total_tes_3rd_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_tes_3rd_female" name="total_tes_3rd_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>Summer/Midyear</label>
                            <div class="form-row">
                                <div class="col"><input id="total_tes_summer_midyear_male" name="total_tes_summer_midyear_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_tes_summer_midyear_female" name="total_tes_summer_midyear_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group"><label>Persons with Disability (PWDs)</label>
                        <div class="form-group"><label>1st Term</label>
                            <div class="form-row">
                                <div class="col"><input id="total_pwd_1st_male" name="total_pwd_1st_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_pwd_1st_female" name="total_pwd_1st_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>2nd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="total_pwd_2nd_male" name="total_pwd_2nd_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_pwd_2nd_female" name="total_pwd_2nd_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>3rd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="total_pwd_3rd_male" name="total_pwd_3rd_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_pwd_3rd_female" name="total_pwd_3rd_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>Summer/Midyear</label>
                            <div class="form-row">
                                <div class="col"><input id="total_pwd_summer_midyear_male" name="total_pwd_summer_midyear_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_pwd_summer_midyear_female" name="total_pwd_summer_midyear_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"><label>Indigenous People (IP)</label>

                        <div class="form-group"><label>1st Term</label>
                            <div class="form-row">
                                <div class="col"><input id="total_ip_1st_male" name="total_ip_1st_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_ip_1st_female" name="total_ip_1st_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>2nd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="total_ip_2nd_male" name="total_ip_2nd_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_ip_2nd_female" name="total_ip_2nd_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>3rd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="total_ip_3rd_male" name="total_ip_3rd_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_ip_3rd_female" name="total_ip_3rd_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>Summer/Midyear</label>
                            <div class="form-row">
                                <div class="col"><input id="total_ip_summer_midyear_male" name="total_ip_summer_midyear_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_ip_summer_midyear_female" name="total_ip_summer_midyear_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"><label>With Board Exams</label>

                        <div class="form-group"><label>1st Term</label>
                            <div class="form-row">
                                <div class="col"><input id="total_with_board_1st_male" name="total_with_board_1st_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_with_board_1st_female" name="total_with_board_1st_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>2nd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="total_with_board_2nd_male" name="total_with_board_2nd_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_with_board_2nd_female" name="total_with_board_2nd_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>3rd Term</label>
                            <div class="form-row">
                                <div class="col"><input id="total_with_board_3rd_male" name="total_with_board_3rd_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_with_board_3rd_female" name="total_with_board_3rd_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>Summer/Midyear</label>
                            <div class="form-row">
                                <div class="col"><input id="total_with_board_summer_midyear_male" name="total_with_board_summer_midyear_male" class="form-control" type="number" min="0"></div>
                                <div class="col"><input id="total_with_board_summer_midyear_female" name="total_with_board_summer_midyear_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>

<!--Edit TES Category-->
<div class="modal fade" role="dialog" tabindex="-1" id="edit_tes_category_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="edit_tes_category_form">
                <div class="modal-header">
                    <h4 class="modal-title">Edit TES Category</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>TES Category</label><input id="tes_category_1" name="tes_category_1" class="form-control" type="text" disabled=""></div>
                    <hr>
                    <div class="form-group"><label>Total Grantees</label>
                        <div class="form-row">
                            <div class="col"><label>1st Semester</label><input id="total_tes_1st_1" name="total_tes_1st_1" class="form-control" type="number" min="0"></div>
                            <div class="col"><label>2nd Semester</label><input id="total_tes_2nd_1" name="total_tes_2nd_1" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>Persons with Disability (PWDs)</label>
                        <div class="form-row">
                            <div class="col"><label>1st Semester</label><input id="total_pwd_1st_1" name="total_pwd_1st_1" class="form-control" type="number" min="0"></div>
                            <div class="col"><label>2nd Semester</label><input id="total_pwd_2nd_1" name="total_pwd_2nd_1" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>Indigenous People (IP)</label>
                        <div class="form-row">
                            <div class="col"><label>1st Semester</label><input id="total_ip_1st_1" name="total_ip_1st_1" class="form-control" type="number" min="0"></div>
                            <div class="col"><label>2nd Semester</label><input id="total_ip_2nd_1" name="total_ip_2nd_1" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>With Board Exams</label>
                        <div class="form-row">
                            <div class="col"><label>1st Semester</label><input id="total_with_board_1st_1" name="total_with_board_1st_1" class="form-control" type="number" min="0"></div>
                            <div class="col"><label>2nd Semester</label><input id="total_with_board_2nd_1" name="total_with_board_2nd_1" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>

<!--Edit TES Program-->
<div class="modal fade" role="dialog" tabindex="-1" id="edit_program_tes_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" id="edit_program_tes_form">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Program (TES)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Degree Program</label><input name="tes_program_name_1" id="tes_program_name_1" class="form-control degree-program-font" type="text" disabled=""></div>
                    <hr>
                    <div class="form-group"><label>No. of TES Grantees who exceeded the maximum residency rule</label>
                        <div class="form-row">
                            <div class="col-xl-6"><label>Male</label><input name="total_tes_mrr_male_1" id="total_tes_mrr_male_1" class="form-control" type="number" min="0"></div>
                            <div class="col-xl-6"><label>Female</label><input name="total_tes_mrr_female_1" id="total_tes_mrr_female_1" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>

                    <div class="form-group"><label>Estimated No. of Graduating Students</label>
                        <div class="form-row">
                            <div class="col-xl-6"><label>Male</label><input name="total_tes_est_grad_male_1" id="total_tes_est_grad_male_1" class="form-control" type="number" min="0"></div>
                            <div class="col-xl-6"><label>Female</label><input name="total_tes_est_grad_female_1" id="total_tes_est_grad_female_1" class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>

<!--Add Program TDP-->
<div class="modal fade" role="dialog" tabindex="-1" id="add_program_tdp_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div id="add_program_tdp_modal_body" class="modal-content">
            <form method="POST" id="add_program_tdp_form">
                <div class="modal-header">
                    <h4 class="modal-title">Add Program (TDP)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Degree Program</label>
                        <select name="tdp_program_name" id="tdp_program_name" class="form-control degree-program-font" required>
                            <option selected disabled value="">--- Select Degree Program ---</option>
                            <?php
                            $sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (total_tdp_graduated_male = 0 OR total_tdp_graduated_female = 0) AND (total_tdp_exceeded_mrr_male = 0 OR total_tdp_exceeded_mrr_female = 0)";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);

                            if ($resultCheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $uid = $row['uid'];
                                    $program_name = $row['program_name'];
                                    echo "<option value='$uid'>$program_name</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group"><label>Total TDP Grantees</label>
                    <div class="form-group"><label>1st Term</label>
                        <div class="form-group"><label>1st Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_1sem_1yr_male" id="total_tdp_1sem_1yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_1sem_1yr_female" id="total_tdp_1sem_1yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                        <div class="form-group"><label>2nd Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_1sem_2yr_male" id="total_tdp_1sem_2yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_1sem_2yr_female" id="total_tdp_1sem_2yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>3rd Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_1sem_3yr_male" id="total_tdp_1sem_3yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_1sem_3yr_female" id="total_tdp_1sem_3yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>4th Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_1sem_4yr_male" id="total_tdp_1sem_4yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_1sem_4yr_female" id="total_tdp_1sem_4yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>5th Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_1sem_5yr_male" id="total_tdp_1sem_5yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_1sem_5yr_female" id="total_tdp_1sem_5yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>6th Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_1sem_6yr_male" id="total_tdp_1sem_6yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_1sem_6yr_female" id="total_tdp_1sem_6yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                    </div>
                        <hr>

                        <div class="form-group"><label>2nd Term</label>
                        <div class="form-group"><label>1st Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_2sem_1yr_male" id="total_tdp_2sem_1yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_2sem_1yr_female" id="total_tdp_2sem_1yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                        <div class="form-group"><label>2nd Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_2sem_2yr_male" id="total_tdp_2sem_2yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_2sem_2yr_female" id="total_tdp_2sem_2yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>3rd Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_2sem_3yr_male" id="total_tdp_2sem_3yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_2sem_3yr_female" id="total_tdp_2sem_3yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>4th Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_2sem_4yr_male" id="total_tdp_2sem_4yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_2sem_4yr_female" id="total_tdp_2sem_4yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>5th Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_2sem_5yr_male" id="total_tdp_2sem_5yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_2sem_5yr_female" id="total_tdp_2sem_5yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>6th Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_2sem_6yr_male" id="total_tdp_2sem_6yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_2sem_6yr_female" id="total_tdp_2sem_6yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                    </div>

                        <hr>

                        <div class="form-group"><label>3rd Term</label>
                        <div class="form-group"><label>1st Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_3sem_1yr_male" id="total_tdp_3sem_1yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_3sem_1yr_female" id="total_tdp_3sem_1yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                        <div class="form-group"><label>2nd Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_3sem_2yr_male" id="total_tdp_3sem_2yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_3sem_2yr_female" id="total_tdp_3sem_2yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>3rd Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_3sem_3yr_male" id="total_tdp_3sem_3yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_3sem_3yr_female" id="total_tdp_3sem_3yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>4th Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_3sem_4yr_male" id="total_tdp_3sem_4yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_3sem_4yr_female" id="total_tdp_3sem_4yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>5th Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_3sem_5yr_male" id="total_tdp_3sem_5yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_3sem_5yr_female" id="total_tdp_3sem_5yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>6th Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_3sem_6yr_male" id="total_tdp_3sem_6yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_3sem_6yr_female" id="total_tdp_3sem_6yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                    </div>

                        <hr>

                        <div class="form-group"><label>Summer/Midyear</label>
                        <div class="form-group"><label>1st Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_sum_mid_1yr_male" id="total_tdp_sum_mid_1yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_sum_mid_1yr_female" id="total_tdp_sum_mid_1yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                        <div class="form-group"><label>2nd Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_sum_mid_2yr_male" id="total_tdp_sum_mid_2yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_sum_mid_2yr_female" id="total_tdp_sum_mid_2yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>3rd Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_sum_mid_3yr_male" id="total_tdp_sum_mid_3yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_sum_mid_3yr_female" id="total_tdp_sum_mid_3yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>4th Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_sum_mid_4yr_male" id="total_tdp_sum_mid_4yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_sum_mid_4yr_female" id="total_tdp_sum_mid_4yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>5th Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_sum_mid_5yr_male" id="total_tdp_sum_mid_5yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_sum_mid_5yr_female" id="total_tdp_sum_mid_5yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>

                        <div class="form-group"><label>6th Year</label>
                            <div class="form-row">
                                <div class="col-xl-6"><input name="total_tdp_sum_mid_6yr_male" id="total_tdp_sum_mid_6yr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><input name="total_tdp_sum_mid_6yr_female" id="total_tdp_sum_mid_6yr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                    </div>

                        <hr>

                        <div class="form-group"><label>No. of TDP Grantees who graduated</label>
                            <div class="form-row">
                                <div class="col-xl-6"><label>Male</label><input name="total_tdp_graduated_male" id="total_tdp_graduated_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><label>Female</label><input name="total_tdp_graduated_female" id="total_tdp_graduated_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group"><label>No. of TDP Grantees who exceeded the maximum residency rule</label>
                            <div class="form-row">
                                <div class="col-xl-6"><label>Male</label><input name="total_tdp_exceeded_mrr_male" id="total_tdp_exceeded_mrr_male" class="form-control" type="number" min="0"></div>
                                <div class="col-xl-6"><label>Female</label><input name="total_tdp_exceeded_mrr_female" id="total_tdp_exceeded_mrr_female" class="form-control" type="number" min="0"></div>
                            </div>
                        </div>
                </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
</div>