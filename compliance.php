<?php
include 'includes/header.php';
include 'includes/compliance/inc_template.php';

$cnt = 1;
?>
<div id="hei-compliance" class="contact-clean hei-profile">
    <form method="POST" action="includes/compliance/inc_add_compliance.php">
        <div class="card card-style-out">
            <div class="card card-style-part">
                <h6 class="text-center header-1">PART III. COMPLIANCE TO GUIDELINES AND MOA</h6>
            </div>
            <div class="card card-style">
                <div class="form-group"><label class="label-parts">III.A COMPLIANCE TO THE FHE, TES AND TDP GUIDELINES, AND THE MOA BETWEEN CHED, UNIFAST AND HEI</label></div>
                <div class="form-group"><label style="font-style: italic;">The HEI certifies its compliance/noncompliance with the following information:</label></div>
                <div class="form-group">
                    <ul class="list-group list-group-numbered">
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Conducted orientation to students about FHE, TES, and/or TDP</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-1" name="answer" 
                                        <?php 
                                            if ($question_1 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-1">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-2" name="answer" 
                                        <?php 
                                            if ($question_1 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-2">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Provided guidance and financial counseling programs to the qualified enrolled students to enable them to avail of FHE, TES, and/or TDP</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-3" name="answer1" 
                                        <?php 
                                            if ($question_2 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-3">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-4" name="answer1" 
                                        <?php 
                                            if ($question_2 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-4">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Submitted to the UniFAST the Certification of Tuition and Other School Fees (TOSF) signed by the HEI Head (if applicable)</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-5" name="answer2" 
                                        <?php 
                                            if ($question_3 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-5">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-6" name="answer2" 
                                        <?php 
                                            if ($question_3 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-6">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Maintained a bank account intended only for FHE, TES, and/or TDP</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-7" name="answer3" 
                                        <?php 
                                            if ($question_4 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-7">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-8" name="answer3" 
                                        <?php 
                                            if ($question_4 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-8">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Issued an official receipt for every amount received from CHED concerning FHE, TES, and/or TDP</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-9" name="answer4" 
                                        <?php 
                                            if ($question_5 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-9">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-10" name="answer4" 
                                        <?php 
                                            if ($question_5 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-10">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Reverted to CHED excess fund transfer (if applicable)</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-11" name="answer5" 
                                        <?php 
                                            if ($question_6 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-11">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-12" name="answer5" 
                                        <?php 
                                            if ($question_6 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-12">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Submitted reports on time regarding the implementation of FHE, TES, and/or TDP as required </label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-13" name="answer6" 
                                        <?php 
                                            if ($question_7 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-13">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-14" name="answer6" 
                                        <?php 
                                            if ($question_7 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-14">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    <?php
                        if($fhe=='yes'){
                            echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt++.". Submitted to the UniFAST the list of qualified students and FHE beneficiaries on time</label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-15' name='answer7'"; 
                                         
                                            if ($question_8 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-15'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-16' name='answer7'"; 
                                         
                                            if ($question_8 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-16'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";
                        

                        echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt++.". Implemented a voluntary opt-out and/or voluntary contribution mechanism for FHE</label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-17' name='answer8'"; 
                                        
                                            if ($question_9 == 'Yes') {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-17'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-18' name='answer8'"; 
                                         
                                            if ($question_9 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-18'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";


                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Submitted to the UniFAST the list of students who voluntarily opted out from FHE (if applicable)</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-19" name="answer9"'; 
                                        
                                            if ($question_10 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-19">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-20" name="answer9"'; 
                                         
                                            if ($question_10 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-20">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                     }
                    if($_SESSION['hei_it']=='SUC' OR $_SESSION['hei_it']=='LUC'){
                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Submitted to the UniFAST the list of students who voluntarily contributed to the SUC/LUC (if applicable)</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-21" name="answer10"'; 
                                         
                                            if ($question_11 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                       
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-21">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-22" name="answer10"'; 
                                          
                                            if ($question_11 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-22">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                    }
                    
                    if($tes=='yes'){
                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Signed the TES Sharing Agreement between the HEI and TES grantees</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-23" name="answer11"'; 
                                        
                                            if ($question_12 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-23">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-24" name="answer11"'; 
                                         
                                            if ($question_12 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-24">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                    

                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Disseminated continously information to qualified TES grantees</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-25" name="answer12"'; 
                                         
                                            if ($question_13 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                       
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-25">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-26" name="answer12"'; 
                                         
                                            if ($question_13 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-26">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';


                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Submitted TES liquidation reports within the prescribed period</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-27" name="answer13"'; 
                                         
                                            if ($question_14 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-27">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-28" name="answer13"'; 
                                         
                                            if ($question_14 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                       
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-28">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                    }
                    if($tes=='yes' OR $tdp=='yes'){
                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Returned excess or unutilized Administrative Support Cost (ASC) to the UniFAST</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-29" name="answer14"'; 
                                         
                                            if ($question_15 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-29">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-30" name="answer14"'; 
                                         
                                            if ($question_15 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-30">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';

                    }
                        if($tdp=='yes'){
                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Issued individual Notice of Award (NOA) to qualified TDP-TES applicants</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-31" name="answer15"'; 
                                         
                                            if ($question_16 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-31">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-32" name="answer15"'; 
                                         
                                            if ($question_16 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-32">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';


                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Submitted to the CHED Regional Office (RO) the signed NOA of qualified TDP-TES grantees and other billing requirements</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-33" name="answer16"'; 
                                         
                                            if ($question_17 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-33">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-34" name="answer16"'; 
                                         
                                            if ($question_17 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-34">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';


                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Submitted to the CHEDRO the payroll for the release of TDP-TES benefits</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-35" name="answer17"'; 
                                        
                                            if ($question_18 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-35">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-36" name="answer17"'; 
                                         
                                            if ($question_18 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-36">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';


                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Submitted TDP-TES liquidation reports within the prescribed period</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-37" name="answer18"'; 
                                        
                                            if ($question_19 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-37">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-38" name="answer18"'; 
                                         
                                            if ($question_19 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-38">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                        }
                    
                    ?>

                    </ul>
                </div>
            </div>


            <?php
            $cnt2=1;
            if($tes=='yes'){
            echo"<div class='card card-style'>
                <div class='form-group'><label class='label-parts'>III.B COMPLIANCE TO TES SHARING AGREEMENT</label></div>
                <div class='form-group' style='font-style: italic;'><label>The HEI certifies its compliance/ noncompliance with the following information:</label></div>
                <div class='form-group'>
                    <ul class='list-group'>
                        <li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt2++.". Received from the UniFAST the exact amount of TES for the term</label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-39' name='answer19'";  
                                            if ($question_20 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-39'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-40' name='answer19'";

                                            if ($question_20 == "No") {
                                                echo " "."checked"." ";
                                            } 

                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-40'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";
                                        
                        echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt2++.". Released the amount intended for the TES grantees</label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-41' name='answer20'";  
                                            if ($question_21 == 'Yes') {
                                                echo " "."checked"." ";
                                            } 
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-41'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-42' name='answer20'"; 
                                            if ($question_21 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-42'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";

                    if($_SESSION['hei_it']=='Private HEI'){
                        echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt2++.". Released to the grantees the difference in TES amount if the share of the private HEI is greater than the actual TOSF of the grantees (if applicable)<br></label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-43' name='answer21'"; 
                                       
                                            if ($question_22 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                       
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-43'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-44' name='answer21'"; 
                                        
                                            if ($question_22 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-44'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";
                    

                        echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt2++.". Obliged the grantees to pay the difference in TES amount if the share of the private HEI is less than the actual TOSF of the grantees (if applicable)<br></label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-45' name='answer22'"; 
                                        
                                            if ($question_23 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-45'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-46' name='answer22'"; 
                                        
                                            if ($question_23 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-46'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";
                    

                        echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt2++.". Released the full amount of the TES to the grantees who have fully paid the TOSF for the term<br></label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-47' name='answer23'"; 
                                        
                                            if ($question_24 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-47'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-48' name='answer23'"; 
                                        
                                            if ($question_24 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                       
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-48'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";
                    }

                        echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt2++.". Released to the grantees their share within two (2) weeks upon the receipt of fund transfer for TES<br></label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-49' name='answer24'"; 
                                         
                                            if ($question_25 == 'Yes') {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-49'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-50' name='answer24'"; 
                                         
                                            if ($question_25 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-50'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";

                    echo"</ul>
                </div>
            </div>";
        }
        ?>
            
            <div class="card card-style">
                <div class="form-group text-right">
                    <div class="form-row">
                        <div class="col text-center"><a class="btn btn-info" role="button" id="btn-prev" href="stufap-all.php"><i class="fas fa-backward"></i>&nbsp; &nbsp;Previous</a></div>
                        <div class="col text-center"><button class="btn btn-primary" id="btn-next" type="submit">SAVE AND PROCEED&nbsp; &nbsp;<i class="fas fa-forward"></i></button></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
include 'includes/footer.php';
?>