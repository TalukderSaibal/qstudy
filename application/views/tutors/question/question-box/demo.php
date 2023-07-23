    <style>
        .inputSet {
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            padding: 10px 12px 10px;
            border-radius: 4px;
            margin: 5px 5px 5px 5px;
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
                            </span> Question Info
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <textarea class="mytextarea" name="questionName"></textarea>
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
                    <input type="file" class="form-control-file" name="questionImage">
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="panel-group" id="saccordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#saccordion" href="#collapseTow" aria-expanded="true" aria-controls="collapseOne">   Question Limit</a>
                    </h4>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">How many Input</label>
                    <select class="form-control" name="demoInput" id="demoInput">
                        <option selected disabled>Select</option>
                        <?php

                        for($i = 1; $i<=20; $i++){ ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php }

                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div id="input-boxes"></div>
    </div>

<script>
    $(document).ready(function() {
    $('#demoInput').change(function() {
        var numInputs = $(this).val();
        $('#input-boxes').empty();

        for (var i = 0; i < numInputs; i++) {
            var boxNumber = i + 1;

            var inputSet = $('<div class="inputSet"></div>');

            var audioInput = $('<div class="form-group"><label>Audio File ' + boxNumber + '</label><input type="file" class="form-control-file" name="one[demo'+boxNumber+'][audio]"></div>');
            var imageInput = $('<div class="form-group"><label>Image ' + boxNumber + '</label><input type="file" class="form-control-file" name="one[demo'+boxNumber+'][image]"></div>');
            var textInput  = $('<div class="form-group"><label>Text ' + boxNumber + '</label><input type="text" name="one[demo'+boxNumber+'][text]" class="form-control"></div>');
            var checkbox   = $('<div class="form-check"><input class="form-check-input" type="checkbox" name="one[demo'+boxNumber+'][correct]"><label class="form-check-label">Correct ' + boxNumber + '</label></div>');

            inputSet.append(audioInput, imageInput, textInput, checkbox);
            $('#input-boxes').append(inputSet);
        }
    });
});

</script>