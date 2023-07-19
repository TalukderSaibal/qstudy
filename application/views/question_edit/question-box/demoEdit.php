<style>
    .ss_img {
  border: 1px solid;
  padding: 5px;
  margin: 5px;
}
</style>

<input type="hidden" name="questionType" value="24">

<div class="col-sm-4">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" aria-expanded="true" aria-controls="collapseOne">
                        <span onclick="setSolution()">
                            <img src="assets/images/icon_solution.png"> Solution
                        </span> Question
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <textarea class="mytextarea" name="questionName"><?php echo $question_info[0]['questionName'];?></textarea>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-4">
    <div class="panel-group" id="saccordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#saccordion" href="#collapseTow" aria-expanded="true" aria-controls="collapseOne">   Question Image</a>
                </h4>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Question Image</label>
                <input type="file" class="form-control-file" name="demoImage">
            </div>
        </div>
    </div>
</div>


<div class="col-sm-4">
    <div class="panel-group" id="saccordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <?php

            $image = explode(',',$question_info[0]['demoImage']);

            foreach($image as $img){ ?>
                <div class="ss_img">
                    <img src="assets/audiouploads/images/<?= $img?>" alt="no images">
                </div>
            <?php }

            ?>

        </div>
    </div>
</div>

