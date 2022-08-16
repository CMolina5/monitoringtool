<?php
include 'includes/header.php';
include 'includes/experience/inc_template.php'
?>
<div id="hei-experience" class="contact-clean hei-profile">
    <form method="POST" action="includes/experience/inc_add_experience.php">
        <div class="card card-style-out">
            <div class="card card-style-part">
                <h6 class="text-center header-1"><strong>PART IV. UNIFAST EXPERIENCE</strong><br></h6>
            </div>
            <div class="card card-style">
                <div class="form-group"><label style="font-style: italic;">List down or enumerate what is being asked from the following statements. Please provide a brief explanation for your answers.</label></div>
                <div class="form-group"><label>1. Good Practices in the implementation of RA No. 10931 Programs</label><textarea class="form-control" name="answer1" required=""><?php echo $question_26 ?></textarea></div>
                <hr>
                <div class="form-group"><label>2. Challenges/Concerns in the Implementation of RA No. 10931</label><textarea class="form-control" name="answer2" required=""><?php echo $question_27 ?></textarea></div>
                <hr>
                <div class="form-group"><label>3. Recommendations for the Improvement of Program Implementation</label><textarea class="form-control" name="answer3" required=""><?php echo $question_28 ?></textarea></div>
            </div>
            <div class="card card-style">
                <div class="form-group text-right">
                    <div class="form-row">
                        <div class="col text-center"><a class="btn btn-info" role="button" id="btn-prev" href="compliance.php"><i class="fas fa-backward"></i>&nbsp; &nbsp;Previous</a></div>
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