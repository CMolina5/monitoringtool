<?php
include 'includes/header.php';
include 'includes/heiprofile/inc_template.php'
?>

<div id="hei-profile" class="contact-clean hei-profile">
    <form method="POST" action="includes/heiprofile/inc_add_hei_profile.php" class="needs-validation" novalidate>
        <div class="card card-style-out">
            <div class="card card-style-part">
                <h6 class="text-center header-1">PART I. HIGHER EDUCATION INSTITUTION PROFILE</h6>
            </div>
            <div class="card card-style">
                <div class="form-group"><label class="label-parts">I.A BASIC INFORMATION</label></div>
                <div class="form-group">
                    <label class="text-danger">*</label><label>&nbsp;Required Information</label><br>
                    <label>HEI Code/ Unique Institutional Identifier (UII)</label>
                    <input name="hei_uii" class="form-control" type="text" required="" value="<?php echo $_SESSION['hei_uii']; ?>" readonly>
                </div>
                <div class="form-group"><label>Name of Higher Education Institution (HEI)</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-school icons-input"></i></span></div><input name="hei_name" class="form-control" type="text" value="<?php echo utf8_encode($_SESSION['hei_name']); ?>" readonly>
                    </div>
                </div>
                <div class="form-group"><label>Type of HEI</label>
                    <div class="form-row">
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-4" name="typeofhei" <?php
                                                                                                                    if ($_SESSION['hei_it'] == "SUC") {
                                                                                                                        echo "checked";
                                                                                                                    }
                                                                                                                    ?> value="SUC" disabled>
                                <label class="custom-control-label" for="formCheck-4">SUC</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-5" name="typeofhei" <?php
                                                                                                                    if ($_SESSION['hei_it'] == "LUC") {
                                                                                                                        echo "checked";
                                                                                                                    }
                                                                                                                    ?> value="LUC" disabled>
                                <label class="custom-control-label" for="formCheck-5">LUC</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-123" name="typeofhei" <?php
                                                                                                                        if ($_SESSION['hei_it'] == "Private HEI") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Private HEI" disabled>
                                <label class="custom-control-label" for="formCheck-123">Private HEI</label>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if ($_SESSION['hei_it'] == "Private HEI" && $_SESSION['hei_pnsl'] == "1") {
                    echo "                   
                            <div class='form-group'><label>Is your Private HEI located in city/municipality with no SUC/LUC?</label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-4'>
                                        <div class='custom-control custom-radio'>
                                            <input class='custom-control-input' type='radio' id='formCheck-70' name='pnsl' checked value='Private HEI' disabled>
                                            <label class='custom-control-label' for='formCheck-70'>Yes</label>
                                        </div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-4'>
                                        <div class='custom-control custom-radio'>
                                            <input class='custom-control-input' type='radio' id='formCheck-71' name='pnsl' value='Private HEI' disabled>
                                            <label class='custom-control-label' for='formCheck-71'>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                }
                if ($_SESSION['hei_it'] == "Private HEI" && $_SESSION['hei_pnsl'] == "0") {
                    echo "                   
                        <div class='form-group'><label>Is your Private HEI located in city/municipality with no SUC/LUC?</label>
                            <div class='form-row'>
                                <div class='col-12 col-md-6 col-xl-4'>
                                    <div class='custom-control custom-radio'>
                                        <input class='custom-control-input' type='radio' id='formCheck-70' name='pnsl' value='Private HEI' disabled>
                                        <label class='custom-control-label' for='formCheck-70'>Yes</label>
                                    </div>
                                </div>
                                <div class='col-12 col-md-6 col-xl-4'>
                                    <div class='custom-control custom-radio'>
                                        <input class='custom-control-input' type='radio' id='formCheck-71' name='pnsl' checked value='Private HEI' disabled>
                                        <label class='custom-control-label' for='formCheck-71'>No</label>
                                    </div>
                                </div>
                            </div>
                        </div>";
                }
                ?>
                <div class="form-group"><label>HEI Campus</label>
                    <div class="form-row">
                        <div class="col-12 col-md-3">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-6" name="campustype" <?php
                                                                                                                    if ($_SESSION['hei_ct'] == "Main") {
                                                                                                                        echo "checked";
                                                                                                                    }
                                                                                                                    ?> value="Main" disabled>
                                <label class="custom-control-label" for="formCheck-6">Main</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-7" name="campustype" <?php
                                                                                                                    if ($_SESSION['hei_ct'] == "Satellite") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="Satellite" disabled>
                                <label class="custom-control-label" for="formCheck-7">Satellite</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-8" name="campustype" <?php
                                                                                                                    if ($_SESSION['hei_ct'] == "Private Sectarian") {
                                                                                                                        echo "checked";
                                                                                                                    }
                                                                                                                    ?> value="Private Sectarian" disabled>
                                <label class="custom-control-label" for="formCheck-8">Private Sectarian</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-9" name="campustype" <?php
                                                                                                                    if ($_SESSION['hei_ct'] == "Private Non-Sectarian") {
                                                                                                                        echo "checked";
                                                                                                                    }
                                                                                                                    ?> value="Private Non-Sectarian" disabled>
                                <label class="custom-control-label" for="formCheck-9">Private Non-Sectarian</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group"><label>HEI Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-map-marked-alt icons-input"></i></span></div><input name="hei_address" class="form-control" type="text" value="<?php echo utf8_encode($_SESSION['hei_address']); ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label>Region</label>
                    <input name="hei_region_nir" class="form-control" type="text" required="" value="<?php echo $_SESSION['hei_region_nir']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Province</label>
                    <input name="hei_prov_name" class="form-control" type="text" required="" value="<?php echo utf8_encode($_SESSION['hei_prov_name']); ?>" readonly>
                </div>
                <div class="form-group"><label>Official Email Address</label><label class="text-danger" title="required">&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons icons-input">email</i></span></div><input name="hei_email_add" class="form-control" type="email" value="<?php echo utf8_encode($hei_email) ?>" required="">
                        <div class="input-group-prepend"></div>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                </div>
                <div class="form-group"><label>Alternative Email Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons icons-input">email</i></span></div><input name="hei_alt_email_add" class="form-control" type="email" value="<?php echo $hei_alt_email ?>">
                        <div class="input-group-prepend"></div>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                </div>
                <div class="form-group"><label>Contact Number</label><label class="text-danger" title="required">&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone-alt icons-input"></i></span></div><input name="hei_contact_no" class="form-control" type="tel" pattern="^(09)\d{9}$" value="<?php echo $hei_contact_no ?>" required="" placeholder="Format: (09)(9 digit phone number)">
                        <div class="input-group-prepend"></div>
                        <div class="invalid-feedback">
                            Please enter a valid contact number.
                        </div>
                    </div>
                </div>
                <div class="form-group"><label>Alternative Contact Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone-alt icons-input"></i></span></div><input name="hei_alt_contact_no" class="form-control" type="tel" pattern="^(09)\d{9}$" placeholder="Format: (09)(9 digit phone number)" value="<?php echo $hei_alt_contact_no ?>">
                        <div class="input-group-prepend"></div>
                        <div class="invalid-feedback">
                            Please enter a valid contact number.
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-style">
                <div class="form-group"><label class="label-parts">I.B PROGRAM ADMINISTRATION</label></div>
                <div class="form-group"><label>Name of the Head of HEI</label><label class="text-danger" title="required">&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user icons-input"></i></span></div><input name="hei_head_name" class="form-control" type="text" placeholder="Firstname   Middlename   Lastname" value="<?php echo utf8_encode($hei_head_name) ?>" required>
                    </div>
                    <div class="invalid-feedback">
                        Please enter the name of HEI head/president.
                    </div>
                </div>
                <div class="form-group"><label>Full Designation</label><label class="text-danger" title="required">&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-suitcase icons-input"></i></span></div><input id="hei_head_designation" name="hei_head_designation" class="form-control" type="text" value="<?php echo $hei_head_designation ?>" required>
                    </div>
                    <div class="invalid-feedback">
                        Please enter designation.
                    </div>
                </div>
                <div class="form-group"><label>Email Address</label><label class="text-danger" title="required">&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons icons-input">email</i></span></div><input name="hei_head_email" class="form-control" type="email" value="<?php echo $hei_head_email_add ?>" required>
                        <div class="input-group-prepend"></div>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                </div>
                <div class="form-group"><label>Alternative Email Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons icons-input">email</i></span></div><input name="hei_head_alt_email" class="form-control" type="email" value="<?php echo $hei_head_alt_email_add ?>">
                        <div class="input-group-prepend"></div>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                </div>
                <div class="form-group"><label>Contact Number</label><label class="text-danger" title="required">&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone-alt icons-input"></i></span></div><input name="hei_head_contact_no" class="form-control" type="tel" pattern="^(09)\d{9}$" value="<?php echo $hei_head_contact_no ?>" required="" placeholder="Format: (09)(9 digit phone number)">
                        <div class="input-group-prepend"></div>
                        <div class="invalid-feedback">
                            Please enter a valid contact number.
                        </div>
                    </div>
                </div>
                <div class="form-group"><label>Alternative Contact Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone-alt icons-input"></i></span></div><input name="hei_head_alt_contact_no" class="form-control" type="tel" pattern="^(09)\d{9}$" value="<?php echo $hei_head_alt_contact_no ?>" placeholder="Format: (09)(9 digit phone number)">
                        <div class="input-group-prepend"></div>
                        <div class="invalid-feedback">
                            Please enter a valid contact number.
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if ($fhe == 'yes') {
                echo "<div class='card card-style'>
                <div class='form-group'><label>Name of Personnel In-charge of FHE</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-user icons-input'></i></span></div><input name='fhe_focal_name' class='form-control' type='text' placeholder='Firstname   Middlename   Lastname' value='" . utf8_encode($fhe_focal_name) . "' required=''>
                    </div>
                    <div class='invalid-feedback'>
                            Please enter the name of personnel in-charge of FHE.
                    </div>
                </div>
                <div class='form-group'><label>Full Designation</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-suitcase icons-input'></i></span></div><input name='fhe_focal_designation' class='form-control' type='text' value='$fhe_focal_designation'>
                    </div>
                    <div class='invalid-feedback'>
                            Please enter designation.
                    </div>
                </div>
                <div class='form-group'><label>Email Address</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='material-icons icons-input'>email</i></span></div><input name='fhe_focal_email' class='form-control' type='email' value='$fhe_focal_email_add' required=''>
                        <div class='input-group-prepend'></div>
                        <div class='invalid-feedback'>
                            Please enter a valid email address.
                        </div>
                    </div>
                </div>
                <div class='form-group'><label>Alternative Email Address</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='material-icons icons-input'>email</i></span></div><input name='fhe_focal_alt_email' class='form-control' type='email' value='$fhe_focal_alt_email_add'>
                        <div class='input-group-prepend'></div>
                        <div class='invalid-feedback'>
                            Please enter a valid email address.
                        </div>
                    </div>
                </div>
                <div class='form-group'><label>Contact Number</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-phone-alt icons-input'></i></span></div><input name='fhe_focal_contact_no' class='form-control' type='tel' pattern='^(09)\d{9}$' placeholder='Format: (09)(9 digit phone number)' value='$fhe_focal_contact_no' required=''>
                        <div class='input-group-prepend'></div>
                        <div class='invalid-feedback'>
                            Please enter a valid contact number.
                        </div>
                    </div>
                </div>
                <div class='form-group'><label>Alternative Contact Number</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-phone-alt icons-input'></i></span></div><input name='fhe_focal_alt_contact_no' class='form-control' type='tel' pattern='^(09)\d{9}$' placeholder='Format: (09)(9 digit phone number)' value='$fhe_focal_alt_contact_no'>
                        <div class='input-group-prepend'></div>
                        <div class='invalid-feedback'>
                            Please enter a valid contact number.
                        </div>
                    </div>
                </div>
                </div>";
            }
            if ($tes == 'yes') {
                echo "<div class='card card-style'>
                <div class='form-group'><label>Name of TES Focal Person</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-user icons-input'></i></span></div><input name='tes_focal_name' class='form-control' type='text' placeholder='Firstname   Middlename   Lastname' value='" . utf8_encode($tes_focal_name) . "' required=''>
                    </div>
                    <div class='invalid-feedback'>
                        Please enter the name of TES focal person.
                    </div>
                </div>
                <div class='form-group'><label>Full Designation</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-suitcase icons-input'></i></span></div><input name='tes_focal_designation' class='form-control' type='text' value='$tes_focal_designation' required=''>
                    </div>
                    <div class='invalid-feedback'>
                        Please enter deisgnation.
                    </div>
                </div>
                <div class='form-group'><label>Email Address</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='material-icons icons-input'>email</i></span></div><input name='tes_focal_email' class='form-control' type='email' value='$tes_focal_email_add' required=''>
                        <div class='input-group-prepend'></div>
                        <div class='invalid-feedback'>
                            Please enter a valid email address.
                        </div>
                    </div>
                </div>
                <div class='form-group'><label>Alternative Email Address</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='material-icons icons-input'>email</i></span></div><input name='tes_focal_alt_email' class='form-control' type='email' value='$tes_focal_alt_email_add'>
                        <div class='input-group-prepend'></div>
                        <div class='invalid-feedback'>
                            Please enter a valid email address.
                        </div>
                    </div>
                </div>
                <div class='form-group'><label>Contact Number</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-phone-alt icons-input'></i></span></div><input name='tes_focal_contact_no' class='form-control' type='tel' pattern='^(09)\d{9}$' placeholder='Format: (09)(9 digit phone number)' value='$tes_focal_contact_no' required=''>
                        <div class='input-group-prepend'></div>
                        <div class='invalid-feedback'>
                            Please enter a valid contact number.
                        </div>
                    </div>
                </div>
                <div class='form-group'><label>Alternative Contact Number</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-phone-alt icons-input'></i></span></div><input name='tes_focal_alt_contact_no' class='form-control' type='tel' pattern='^(09)\d{9}$' placeholder='Format: (09)(9 digit phone number)' value='$tes_focal_alt_contact_no'>
                        <div class='input-group-prepend'></div>
                        <div class='invalid-feedback'>
                            Please enter a valid contact number.
                        </div>
                    </div>
                </div>
                </div>";
            }
            if ($tdp == 'yes') {
                echo "<div class='card card-style'>
                    <div class='form-group'><label>Name of Personnel In-charge of TDP</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class='input-group'>
                            <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-user icons-input'></i></span></div><input name='tdp_focal_name' class='form-control' type='text' placeholder='Firstname   Middlename   Lastname' value='" . utf8_encode($tdp_focal_name) . "' required=''>
                        </div>
                        <div class='invalid-feedback'>
                            Please enter the name of personnel in-charge of TDP.
                        </div>
                    </div>
                    <div class='form-group'><label>Full Designation</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class='input-group'>
                            <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-suitcase icons-input'></i></span></div><input name='tdp_focal_designation' class='form-control' type='text' value='$tdp_focal_designation' required=''>
                        </div>
                        <div class='invalid-feedback'>
                            Please enter designation.
                        </div>
                    </div>
                    <div class='form-group'><label>Email Address</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class='input-group'>
                            <div class='input-group-prepend'><span class='input-group-text'><i class='material-icons icons-input'>email</i></span></div><input name='tdp_focal_email' class='form-control' type='email' value='$tdp_focal_email_add' required=''>
                            <div class='input-group-prepend'></div>
                            <div class='invalid-feedback'>
                                Please enter a valid email address.
                            </div>
                        </div>
                    </div>
                    <div class='form-group'><label>Alternative Email Address</label>
                        <div class='input-group'>
                            <div class='input-group-prepend'><span class='input-group-text'><i class='material-icons icons-input'>email</i></span></div><input name='tdp_focal_alt_email' class='form-control' type='email' value='$tdp_focal_alt_email_add'>
                            <div class='input-group-prepend'></div>
                            <div class='invalid-feedback'>
                                Please enter a valid email address.
                            </div>
                        </div>
                    </div>
                    <div class='form-group'><label>Contact Number</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class='input-group'>
                            <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-phone-alt icons-input'></i></span></div><input name='tdp_focal_contact_no' class='form-control' type='tel' pattern='^(09)\d{9}$' placeholder='Format: (09)(9 digit phone number)' value='$tdp_focal_contact_no' required=''>
                            <div class='input-group-prepend'></div>
                            <div class='invalid-feedback'>
                                Please enter a valid contact number.
                            </div>
                        </div>
                    </div>
                    <div class='form-group'><label>Alternative Contact Number</label>
                        <div class='input-group'>
                            <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-phone-alt icons-input'></i></span></div><input name='tdp_focal_alt_contact_no' class='form-control' type='tel' pattern='^(09)\d{9}$' placeholder='Format: (09)(9 digit phone number)' value='$tdp_focal_alt_contact_no'>
                            <div class='input-group-prepend'></div>
                            <div class='invalid-feedback'>
                                Please enter a valid contact number.
                            </div>
                        </div>
                    </div>
                </div>";
            }

            ?>
            <div class="card card-style">
                <div class="form-group"><label class="label-parts">I.C DEMOGRAPHIC INFORMATION</label></div>
                <div class="form-group"><label>Enrollment Period</label>
                    <div id='enrollment_date' class="form-row">
                        <?php
                        if ($ac_calendar == 'Trimester with Summer') {
                            echo "
                        <div class='col-12 col-md-3'>";
                        } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
                            echo "
                            <div class='col-12 col-md-4'>";
                        } else
                            echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
                        ?>
                        <label>1st Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text icon-container"><i class="fa fa-calendar-o"></i></span></div><input class="form-control date-size" id="picker" name="enrollment_1st" type="text" placeholder="MM/DD/YYYY-MM/DD/YYYY" value="<?php echo $enrollment_period_1st ?>" required="">

                        </div>
                    </div>
                    <script>
                        $('#picker').daterangepicker({
                            opens: 'left',
                            showDropdowns: true,
                            autoUpdateInput: false,
                            autoApply: true,
                            locale: {
                                cancelLabel: 'Clear'
                            }
                        });
                        $('#picker').on('apply.daterangepicker', function(ev, picker) {
                            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                        });

                        $('#picker').on('cancel.daterangepicker', function(ev, picker) {
                            $(this).val('');
                        });
                    </script>
                    <?php
                    if ($ac_calendar == 'Trimester with Summer') {
                        echo "
                        <div class='col-12 col-md-3'>";
                    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
                        echo "
                            <div class='col-12 col-md-4'>";
                    } else
                        echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>
                    <label>2nd Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text icon-container"><i class="fa fa-calendar-o"></i></span></div><input class="form-control date-size" id="picker2" name="enrollment_2nd" type="text" placeholder='MM/DD/YYYY-MM/DD/YYYY' value="<?php echo $enrollment_period_2nd ?>" required="">
                    </div>
                </div>
                <script>
                    $('#picker2').daterangepicker({
                        opens: 'left',
                        showDropdowns: true,
                        autoUpdateInput: false,
                        autoApply: true,
                        locale: {
                            cancelLabel: 'Clear'
                        }
                    });
                    $('#picker2').on('apply.daterangepicker', function(ev, picker) {
                        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                    });

                    $('#picker2').on('cancel.daterangepicker', function(ev, picker) {
                        $(this).val('');
                    });
                </script>

                <?php
                if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
                    if ($ac_calendar == 'Trimester with Summer') {
                        echo "
                                <div class='col-12 col-md-3'>";
                    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
                        echo "
                                    <div class='col-12 col-md-4'>";
                    } else
                        echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
                    echo "
                            <label>3rd Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                            <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fa fa-calendar-o'></i></span></div><input class='form-control date-size' id='picker3' name='enrollment_3rd' type='text' placeholder='MM/DD/YYYY-MM/DD/YYYY' value='$enrollment_period_3rd' required=''>
                            </div>
                        </div>
                        <script>
                            $('#picker3').daterangepicker({
                                opens: 'left',
                                showDropdowns: true,
                                autoUpdateInput: false,
                                autoApply: true,
                                locale: {
                                    cancelLabel: 'Clear'
                                }
                            });
                            $('#picker3').on('apply.daterangepicker', function(ev, picker) {
                                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                            });

                            $('#picker3').on('cancel.daterangepicker', function(ev, picker) {
                                $(this).val('');
                            });
                        </script>";
                }

                if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
                    if ($ac_calendar == 'Trimester with Summer') {
                        echo "
                                <div class='col-12 col-md-3'>";
                    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
                        echo "
                                    <div class='col-12 col-md-4'>";
                    } else
                        echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
                    echo "
                            <label>Summer/Midyear</label><label class='text-danger' title='required'>&nbsp;*</label>
                            <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fa fa-calendar-o'></i></span></div><input class='form-control date-size' id='picker4' name='enrollment_summer_midyear' type='text' placeholder='MM/DD/YYYY-MM/DD/YYYY' value='$enrollment_period_summer_midyear' required=''>
                            </div>
                        </div>
                        <script>
                            $('#picker4').daterangepicker({
                                opens: 'left',
                                showDropdowns: true,
                                autoUpdateInput: false,
                                autoApply: true,
                                locale: {
                                    cancelLabel: 'Clear'
                                }
                            });
                            $('#picker4').on('apply.daterangepicker', function(ev, picker) {
                                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                            });

                            $('#picker4').on('cancel.daterangepicker', function(ev, picker) {
                                $(this).val('');
                            });
                        </script>";
                }
                ?>

            </div>
        </div>
        <div class="form-group"><label>Opening of Classes</label>
            <div class="form-row">
                <?php
                if ($ac_calendar == 'Trimester with Summer') {
                    echo "
                        <div class='col-12 col-md-3'>";
                } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
                    echo "
                            <div class='col-12 col-md-4'>";
                } else
                    echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
                ?>
                <label>1st Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text icon-container"><i class="fa fa-calendar-o"></i></span></div><input class="form-control date-size" id="picker5" name="opening_1st" type="text" placeholder='MM/DD/YYYY' value="<?php echo  $opening_of_classes_1st ?>" readonly required="">
                </div>
                <script>
                    $('#picker5').daterangepicker({
                        singleDatePicker: true,
                        showDropdowns: true,
                        autoUpdateInput: false,
                        autoApply: true,
                        locale: {
                            cancelLabel: 'Clear'
                        }
                    });
                    $('#picker5').on('apply.daterangepicker', function(ev, picker) {
                        $(this).val(picker.startDate.format('MM/DD/YYYY'));
                    });

                    $('#picker5').on('cancel.daterangepicker', function(ev, picker) {
                        $(this).val('');
                    });
                </script>
            </div>

            <?php
            if ($ac_calendar == 'Trimester with Summer') {
                echo "
                        <div class='col-12 col-md-3'>";
            } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
                echo "
                            <div class='col-12 col-md-4'>";
            } else
                echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
            ?>
            <label>2nd Term</label><label class='text-danger' title='required'>&nbsp;*</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text icon-container"><i class="fa fa-calendar-o"></i></span></div><input class="form-control date-size" id="picker6" name="opening_2nd" type="text" placeholder='MM/DD/YYYY' value="<?php echo  $opening_of_classes_2nd ?>" readonly required="">
            </div>
            <script>
                $('#picker6').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    autoUpdateInput: false,
                    autoApply: true,
                    locale: {
                        cancelLabel: 'Clear'
                    }
                });
                $('#picker6').on('apply.daterangepicker', function(ev, picker) {
                    $(this).val(picker.startDate.format('MM/DD/YYYY'));
                });

                $('#picker6').on('cancel.daterangepicker', function(ev, picker) {
                    $(this).val('');
                });
            </script>
        </div>

        <?php
        if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
            if ($ac_calendar == 'Trimester with Summer') {
                echo "
                                <div class='col-12 col-md-3'>";
            } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
                echo "
                                    <div class='col-12 col-md-4'>";
            } else
                echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
            echo "
                            <label>3rd Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                            <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fa fa-calendar-o'></i></span></div><input class='form-control date-size' id='picker7' name='opening_3rd' type='text' placeholder='MM/DD/YYYY' value='$opening_of_classes_3rd' readonly required=''>
                            </div>
                            <script>
                                $('#picker7').daterangepicker({
                                    singleDatePicker: true,
                                    showDropdowns: true,
                                    autoUpdateInput: false,
                                    autoApply: true,
                                    locale: {
                                        cancelLabel: 'Clear'
                                    }
                                });
                                $('#picker7').on('apply.daterangepicker', function(ev, picker) {
                                    $(this).val(picker.startDate.format('MM/DD/YYYY'));
                                });

                                $('#picker7').on('cancel.daterangepicker', function(ev, picker) {
                                    $(this).val('');
                                });
                            </script>
                        </div>";
        }

        if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
            if ($ac_calendar == 'Trimester with Summer') {
                echo "
                                <div class='col-12 col-md-3'>";
            } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
                echo "
                                    <div class='col-12 col-md-4'>";
            } else
                echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
            echo "
                            <label>Summer/Midyear</label><label class='text-danger' title='required'>&nbsp;*</label>
                            <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fa fa-calendar-o'></i></span></div><input class='form-control date-size' id='picker8' name='opening_summer_midyear' type='text' placeholder='MM/DD/YYYY' value='$opening_of_classes_summer_midyear' readonly required=''>   
                            </div>
                            <script>
                                $('#picker8').daterangepicker({
                                    singleDatePicker: true,
                                    showDropdowns: true,
                                    autoUpdateInput: false,
                                    autoApply: true,
                                    locale: {
                                        cancelLabel: 'Clear'
                                    }
                                });
                                $('#picker8').on('apply.daterangepicker', function(ev, picker) {
                                    $(this).val(picker.startDate.format('MM/DD/YYYY'));
                                });

                                $('#picker8').on('cancel.daterangepicker', function(ev, picker) {
                                    $(this).val('');
                                });
                            </script>                           
                        </div>";
        }
        ?>
</div>
</div>
<hr />
<!-- Male Undergraduate -->
<div class="form-group"><label>Total Number of Undergraduate Students</label>
    <div class="form-row">
        <?php
        if ($ac_calendar == 'Trimester with Summer') {
            echo "
                        <div class='col-12 col-md-3'>";
        } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
            echo "
                            <div class='col-12 col-md-4'>";
        } else
            echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
        ?>
        <label>1st Term</label><label class='text-danger' title='required'>&nbsp;*</label>
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text icon-container"><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name="total_undergrad_1st_male" class="form-control" type="number" placeholder="0" value="<?php echo  $total_undergraduate_1st_male ?>" required="" min="0">
        </div>
    </div>
    <?php
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                        <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                            <div class='col-12 col-md-4'>";
    } else
        echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
    ?>
    <label>2nd Term</label><label class='text-danger' title='required'>&nbsp;*</label>
    <div class="input-group">
        <div class="input-group-prepend"><span class="input-group-text icon-container"><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name="total_undergrad_2nd_male" class="form-control" type="number" placeholder="0" value="<?php echo  $total_undergraduate_2nd_male ?>" required="" min="0">
    </div>
</div>

<?php
if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                                <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                                    <div class='col-12 col-md-4'>";
    } else
        echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
    echo "
                        <label>3rd Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name='total_undergrad_3rd_male' class='form-control' type='number' placeholder='0' value='$total_undergraduate_3rd_male' required='' min='0'>
                        </div>
                        </div>";
}

if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                                <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                                    <div class='col-12 col-md-4'>";
    } else
        echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
    echo "
                        <label>Summer/Midyear</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name='total_undergrad_summer_midyear_male' class='form-control' type='number' placeholder='0' value='$total_undergraduate_summer_midyear_male' required='' min='0'>
                        </div>
                        </div>";
}
?>

</div>
</div>
<!-- Female Undergraduate -->
<div class="form-row">
    <?php
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                        <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                            <div class='col-12 col-md-4'>";
    } else
        echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
    ?>
    <div class="input-group">
        <div class="input-group-prepend"><span class="input-group-text icon-container"><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name="total_undergrad_1st_female" class="form-control" type="number" placeholder="0" value="<?php echo  $total_undergraduate_1st_female ?>" required="" min="0">
    </div>
</div>
<?php
if ($ac_calendar == 'Trimester with Summer') {
    echo "
                        <div class='col-12 col-md-3'>";
} else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
    echo "
                            <div class='col-12 col-md-4'>";
} else
    echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
?>
<div class="input-group">
    <div class="input-group-prepend"><span class="input-group-text icon-container"><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name="total_undergrad_2nd_female" class="form-control" type="number" placeholder="0" value="<?php echo  $total_undergraduate_1st_female ?>" required="" min="0">
</div>
</div>

<?php
if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                                <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                                    <div class='col-12 col-md-4'>";
    } else
        echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
    echo "
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name='total_undergrad_3rd_female' class='form-control' type='number' placeholder='0' value='$total_undergraduate_3rd_female' required='' min='0'>
                        </div>
                        </div>";
}

if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                                <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                                    <div class='col-12 col-md-4'>";
    } else
        echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
    echo "
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name='total_undergrad_summer_midyear_female' class='form-control' type='number' placeholder='0' value='$total_undergraduate_summer_midyear_female' required='' min='0'>
                        </div>
                        </div>";
}
?>

</div>
<hr />
<!-- Male Foreign -->
<div class="form-group"><label>Total Number of Foreign Students</label>
    <div class="form-row">
        <?php
        if ($ac_calendar == 'Trimester with Summer') {
            echo "
                        <div class='col-12 col-md-3'>";
        } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
            echo "
                            <div class='col-12 col-md-4'>";
        } else
            echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
        ?>
        <label>1st Term</label>
        <div class='input-group'>
            <div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name="total_foreign_1st_male" class="form-control" type="number" placeholder="0" value="<?php echo  $total_foreign_1st_male ?>" min="0">
        </div>
    </div>
    <?php
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                        <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                            <div class='col-12 col-md-4'>";
    } else
        echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
    ?>
    <label>2nd Term</label>
    <div class='input-group'>
        <div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name="total_foreign_2nd_male" class="form-control" type="number" placeholder="0" value="<?php echo  $total_foreign_2nd_male ?>" min="0">
    </div>
</div>


<?php
if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                                <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                                    <div class='col-12 col-md-4'>";
    } else
        echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
    echo "
                        <label>3rd Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name='total_foreign_3rd_male' class='form-control' type='number' placeholder='0' value='$total_foreign_3rd_male' min='0'>
                        </div>
                        </div>";
}

if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                                <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                                    <div class='col-12 col-md-4'>";
    } else
        echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
    echo "
                        <label>Summer/Midyear</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name='total_foreign_summer_midyear_male' class='form-control' type='number' placeholder='0' value='$total_foreign_summer_midyear_male' min='0'>
                        </div>
                        </div>";
}
?>
</div>
</div>
<!-- Female Foreign -->
<div class="form-group">
    <div class="form-row">
        <?php
        if ($ac_calendar == 'Trimester with Summer') {
            echo "
                        <div class='col-12 col-md-3'>";
        } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
            echo "
                            <div class='col-12 col-md-4'>";
        } else
            echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
        ?>
        <div class='input-group'>
            <div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name="total_foreign_1st_female" class="form-control" type="number" placeholder="0" value="<?php echo  $total_foreign_1st_female ?>" min="0">
        </div>
    </div>

    <?php
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                        <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                            <div class='col-12 col-md-4'>";
    } else
        echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
    ?>
    <div class='input-group'>
        <div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name="total_foreign_2nd_female" class="form-control" type="number" placeholder="0" value="<?php echo  $total_foreign_2nd_female ?>" min="0">
    </div>
</div>

<?php
if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                                <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                                    <div class='col-12 col-md-4'>";
    } else
        echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
    echo "
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name='total_foreign_3rd_female' class='form-control' type='number' placeholder='0' value='$total_foreign_3rd_female' min='0'></div>
                        </div>";
}

if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                                <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                                    <div class='col-12 col-md-4'>";
    } else
        echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
    echo "
                        
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name='total_foreign_summer_midyear_female' class='form-control' type='number' placeholder='0' value='$total_foreign_summer_midyear_female' min='0'>
                        </div>
                        </div>";
}
?>
</div>
</div>
<hr />
<!-- Male Second Coursers -->
<div class="form-group"><label>Total Number of Second Coursers</label>
    <div class="form-row">

        <?php
        if ($ac_calendar == 'Trimester with Summer') {
            echo "
                        <div class='col-12 col-md-3'>";
        } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
            echo "
                            <div class='col-12 col-md-4'>";
        } else
            echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
        ?>
        <label>1st Term</label>
        <div class='input-group'>
            <div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name="total_2nd_courser_1st_male" class="form-control" type="number" placeholder="0" value="<?php echo  $total_second_courser_1st_male ?>" min="0">
        </div>
    </div>

    <?php
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                        <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                            <div class='col-12 col-md-4'>";
    } else
        echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
    ?>
    <label>2nd Term</label>
    <div class='input-group'>
        <div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name="total_2nd_courser_2nd_male" class="form-control" type="number" placeholder="0" value="<?php echo  $total_second_courser_2nd_male ?>" min="0">
    </div>
</div>

<?php
if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                            <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                                <div class='col-12 col-md-4'>";
    } else
        echo "
                            <div class='col-12 col-md-3 col-xl-6'>";

    echo "
                        <label>3rd Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name='total_2nd_courser_3rd_male' class='form-control' type='number' placeholder='0' value='$total_second_courser_3rd_male' min='0'>
                        </div>
                        </div>";
}

if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                                <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                                    <div class='col-12 col-md-4'>";
    } else
        echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
    echo "
                        <label>Summer/Midyear</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name='total_2nd_courser_summer_midyear_male' class='form-control' type='number' placeholder='0' value='$total_second_courser_summer_midyear_male' min='0'>
                        </div>
                        </div>";
}
?>
</div>
</div>
<!-- Female Second Coursers -->
<div class="form-group">
    <div class="form-row">

        <?php
        if ($ac_calendar == 'Trimester with Summer') {
            echo "
                        <div class='col-12 col-md-3'>";
        } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
            echo "
                            <div class='col-12 col-md-4'>";
        } else
            echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
        ?>
        <div class='input-group'>
            <div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name="total_2nd_courser_1st_female" class="form-control" type="number" placeholder="0" value="<?php echo  $total_second_courser_1st_female ?>" min="0">
        </div>
    </div>


    <?php
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                        <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                            <div class='col-12 col-md-4'>";
    } else
        echo "
                        <div class='col-12 col-md-3 col-xl-6'>";
    ?>
    <div class='input-group'>
        <div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name="total_2nd_courser_2nd_female" class="form-control" type="number" placeholder="0" value="<?php echo  $total_second_courser_2nd_female ?>" min="0">
    </div>
</div>

<?php
if ($ac_calendar == 'Trimester' or $ac_calendar == 'Trimester with Summer') {
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                            <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                                <div class='col-12 col-md-4'>";
    } else
        echo "
                            <div class='col-12 col-md-3 col-xl-6'>";

    echo "
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name='total_2nd_courser_3rd_female' class='form-control' type='number' placeholder='0' value='$total_second_courser_3rd_female' min='0'>
                        </div>
                        </div>";
}

if ($ac_calendar == 'Semester with Summer' or $ac_calendar == 'Trimester with Summer') {
    if ($ac_calendar == 'Trimester with Summer') {
        echo "
                                <div class='col-12 col-md-3'>";
    } else if ($ac_calendar == 'Trimester' or $ac_calendar == 'Semester with Summer') {
        echo "
                                    <div class='col-12 col-md-4'>";
    } else
        echo "
                                <div class='col-12 col-md-3 col-xl-6'>";
    echo "
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name='total_2nd_courser_summer_midyear_female' class='form-control' type='number' placeholder='0' value='$total_second_courser_summer_midyear_female' min='0'>
                        </div>
                        </div>";
}
?>
</div>
</div>
</div>
<div class="card card-style">
    <div class="form-group"><label class="label-parts">I.D PROGRAM OFFERINGS</label><label style="font-style: italic;">Please list all bachelor's degree programs offered for the Academic Year. Indicate the Government Recognition and Certificate of Program Compliance Nos. for each program.</label>

        <div class="form-row text-right">
            <div class="col">
                <p class="text-right">
                <div role="group" class="btn-group">
                    <button class="btn btn-success" data-toggle="modal" id="btn-add-program" type="button" data-target="#addprogram">ADD PROGRAM</button>
                    <button class="btn btn-danger d-none" data-toggle="modal" id="btn-delete-program" name="btn-delete-program" type="button" data-target="#removeprogram">REMOVE PROGRAM</button>
                </div>
                </p>
            </div>
        </div>

        <div id="tbl_programs" class="table table-responsive tbl-style">

            <?php
            include 'includes/heiprofile/inc_degree_programs.php';
            ?>

        </div>
    </div>
</div>
<div class="card card-style">
    <div class="form-group"><label class="label-parts">I.E OTHER LOCALLY-AND-NATIONALLY-FUNDED STUFAPS</label><label style="font-style: italic;">List of all locally-and-nationally-funded StuFAPs availed in the institution, and number of beneficiaries per year level</label>

        <div class="form-row text-right">
            <div class="col">
                <p class="text-right">
                <div role="group" class="btn-group">
                    <button class="btn btn-success" data-toggle="modal" id="btn-add-stufap" type="button" data-target="#addstufap">ADD STUFAP</button>
                    <button class="btn btn-danger d-none" data-toggle="modal" id="btn-delete-other-stufap" name="btn-delete-other-stufap" type="button" data-target="#removestufap">REMOVE STUFAP</button>
                </div>
                </p>
            </div>
        </div>

        <div id="tbl_stufaps" class="table table-responsive tbl-style">

            <?php
            include 'includes/heiprofile/inc_other_stufaps.php';
            ?>

        </div>
    </div>
</div>
<div class="card card-style">
    <div class="form-group text-right">
        <div class="form-row">
            <div class="col text-center"><a class="btn btn-info" role="button" id="btn-prev" href="home.php"><i class="fas fa-home"></i>&nbsp; &nbsp;Home</a></div>
            <div class="col text-center"><button class="btn btn-primary" id="btn-next" type="submit" name="save_hei_profile">SAVE AND PROCEED&nbsp; &nbsp;<i class="fas fa-forward"></i>
                </button></div>
        </div>
    </div>
</div>
</div>
</form>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...you missed something',
                        text: 'Please check the above required fields before proceeding.'
                        
                        })
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<?php
include 'includes/heiprofile/inc_modals.php';
include 'includes/footer.php';
?>