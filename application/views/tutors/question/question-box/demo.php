    <style>
        .inputSet {
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            padding: 10px 12px 10px;
            border-radius: 4px;
            margin: 5px 5px 5px 5px;
        }
    </style>

    <div class="form-group">
        <label for="exampleInputEmail1">Question Info</label>
        <input type="text" class="form-control" name="demoquestionInfo" placeholder="Enter name">
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Question Image</label>
        <input type="file" class="form-control-file" name="demoImage">
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

<div id="input-boxes"></div>

<script>
    $(document).ready(function() {
    $('#demoInput').change(function() {
        var numInputs = $(this).val();
        $('#input-boxes').empty();

        for (var i = 0; i < numInputs; i++) {
            var boxNumber = i + 1;

            var inputSet = $('<div class="inputSet"></div>');

            var audioInput = $('<div class="form-group"><label>Audio File ' + boxNumber + '</label><input type="file" class="form-control-file" name="audio' + boxNumber + '"></div>');
            var imageInput = $('<div class="form-group"><label>Image ' + boxNumber + '</label><input type="file" class="form-control-file" name="image' + boxNumber + '"></div>');
            var textInput  = $('<div class="form-group"><label>Text ' + boxNumber + '</label><input type="text" class="form-control" name="text' + boxNumber + '"></div>');
            var checkbox   = $('<div class="form-check"><input class="form-check-input" type="checkbox" name="correct[]" value="' + boxNumber + '"><label class="form-check-label">Correct ' + boxNumber + '</label></div>');

            inputSet.append(audioInput, imageInput, textInput, checkbox);
            $('#input-boxes').append(inputSet);
        }
    });
});

</script>