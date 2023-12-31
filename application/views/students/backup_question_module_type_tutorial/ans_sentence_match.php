<script src="<?php echo base_url(); ?>assets/ckeditor/plugins/ckeditor_wiris/integration/WIRISplugins.js?viewer=image"></script>

<style type="text/css">
  body .modal-ku {
    width: 750px;
  }

  .modal-body #quesBody {
    width: 628px;
    height: 466px;
    overflow: auto;
  }

  .modal-body {
    position: relative;
    padding: 15px;
  }

  #ss_extar_top20 {
    width: 100%;
    height: 389px;
    overflow: auto;
    max-width: 628px;
  }

  .ss_lette input[type=radio] {
    min-height: 162px !important;
    display: block;
    line-height: 149px;
  }

  .qstudy_module_video {
    position: absolute;
    width: 300px;
    height: 230px;
    top: 35px;
    border: 1px solid #ccc;
    background: #fff;
    z-index: 5;
    display: none;
  }

  .qstudy_module_video .header {
    width: 100%;
    border-bottom: 1px solid #ccc;
    text-align: right
  }

  .qstudy_module_video .header span {
    padding: 3px 10px;
    background: #e3e1e1;
    font-weight: bold;
    cursor: pointer;
  }

  .qstudy_module_video .video-content {
    padding: 10px;
    width: 100%;
    height: 89%;
    overflow-y: scroll;
  }

  .qstudy_module_video .video-content p {

    border: 1px solid #a2a0a0;
    padding-left: 5px;
    background: #f6f6f6;
    margin-bottom: 5px;
    cursor: pointer;
  }

  .no_instruction {
    position: absolute;
    top: 40px;
    background: #c1fcc1;
    padding: 5px;
    border-radius: 5px;
    display: none;
  }
</style>


<style>
  .ss_lette {
    min-height: 158px;
    line-height: 158px;
  }

  .ques_solution {
    display: flex;
    padding: 9px 17px;
  }

  .ques_class {
    background-color: #7f7f7f;
    padding: 5px 10px;
  }

  .sol_class {
    padding: 5px 5px;
    background-color: #eeeeee;
    cursor: pointer;
  }

  .math_plus {
    display: inline-block;
    padding: 10px;
    min-height: 40px;
  }

  .ssss_class {
    margin-bottom: 8px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 6px;
  }

  .checkbox_class {
    display: inline-block;
    width: 53px;
    position: relative;
  }

  .ssss_class p {
    font-size: 23px;
    display: inline-block;
    margin-top: 0;
  }

  .ssss_class input[type=checkbox] {
    transform: scale(1.4);
    margin-left: 3px;
    position: relative;
    top: 2px;
    left: -13px;
    margin-top: 0;
  }

  .ans_image {
    position: absolute;
    display: none;
    top: -5px;
    left: -2px;

  }

  .ans_image img {
    width: 30px;
  }

  .ans_image button {
    border: none;
    background: none;
  }

  .ans_image span {
    font-family: berlin Sans FB;
    font-size: 24px;
    font-weight: bold;
    color: #92d050;
    position: absolute;
    top: 2px;
  }

  .image_view_click {
    border: none;
    background: none;
    position: absolute;
    top: 4px;
    right: 0px;
  }

  .image_view_click img {
    width: 24px;
  }

  .ss_w_box .image-editor {
    height: 184px;
  }

  .ss_w_box {
    max-height: 192px;
  }

  .panel_p_qus p {
    font-size: 20px;
    font-weight: bold;
    margin-left: 0px;
    margin-bottom: 10px;
  }

  .footer_loding {
    position: absolute;
    bottom: 10px;
    left: 0;
    right: 0;
    margin: auto;
    height: 90px;
    width: 90px;

  }

  .footer_loding h1 {
    position: absolute;
    top: 0;
    left: 0;
    margin: auto;
    width: 100%;
    height: 100%;
    text-align: center;
    line-height: 66px;
    z-index: 2;
    font-size: 24px;
    font-weight: bold;
  }

  .footer_loding img {
    height: 90px;
    width: 90px;

  }

  .footer_loding span {
    position: absolute;
    bottom: -22px;
    left: 0;
    margin: auto;
    width: 100%;
    height: 100%;
    text-align: center;
    line-height: 66px;
    z-index: 2;
    font-size: 18px;
    font-weight: bold;
    color: #888;
  }

  select {
    -webkit-appearance: listbox !important;
  }

  .ss_timer {
    margin-left: 2px;
    display: inline-block;
    background: #eeeef0;
    border: 0;
    min-width: 110px;
    text-align: center;
  }

  .ss_timer h1 {
    border: 1px solid #a8a2a2;
    font-size: 17px;
    margin: 0;
    line-height: 27px;
    padding: 3px 0px;
    color: #222;
  }

  .workout_menu ul li {
    display: inline-block;
    margin-right: 5px;
  }

  .ss_timer {
    margin-left: 5px;
    display: inline-block;
    background: #eeeef0;
    border: 0;
    min-width: 110px;
    text-align: center;
  }

  .video-js .vjs-big-play-button {
    background: url('assets/images/video_icon.PNG');
    border: none;
    height: 56px;
    width: 68px;
    border-radius: 10px;
    background-size: contain;
  }

  .video-js .vjs-big-play-button span {
    display: none;
  }
</style>


<?php
foreach ($total_question as $ind) {

  if ($ind["question_type"] == 14) {
    $chk = $ind["question_order"];
  }
}
?>

<?php

$answerCount = count(json_decode($question_info_s[0]['answer']));
// echo "<pre>";print_r($answerCount);die();

$question_order_array = array_column($total_question, 'question_order');
$last_question_order = end($question_order_array);

$key = $question_info_s[0]['question_order'];
date_default_timezone_set($this->site_user_data['zone_name']);
$module_time = time();

if ($tutorial_ans_info) {
  $temp_table_ans_info = json_decode($tutorial_ans_info[0]['st_ans'], true);
  $desired = $temp_table_ans_info;
} else {
  $desired = $this->session->userdata('data');
}

// Question Time

$question_time = explode(':', $question_info_s[0]['questionTime']);
$hour = 0;
$minute = 0;
$second = 0;
if (is_numeric($question_time[0])) {
  $hour = $question_time[0];
}
if (is_numeric($question_time[1])) {
  $minute = $question_time[1];
}
if (is_numeric($question_time[2])) {
  $second = $question_time[2];
}

$question_time_in_second = 0;
$question_time_in_second = ($hour * 3600) + ($minute * 60) + $second;
$moduleOptionalTime = 0;
if ($question_info_s[0]['moduleType'] == 2 && $question_info_s[0]['optionalTime'] != 0) {
  $moduleOptionalTime = $question_info_s[0]['optionalTime'];
}

$passTime = time() - $_SESSION['exam_start'];
$setTime = 0;
if ($moduleOptionalTime <= 0) {
  if ($question_time_in_second > 0) {
    $setTime = $question_time_in_second;
  }
} else {
  $moduleOptionalTime = $moduleOptionalTime - $passTime;
  if ($question_time_in_second <= 0) {
    $setTime = $moduleOptionalTime;
  } else {
    if ($question_time_in_second > $moduleOptionalTime) {
      $setTime = $moduleOptionalTime;
    } else {
      $setTime = $question_time_in_second;
    }
  }
}

// End Question Time

$link_next = "javascript:void(0);";
$link = "javascript:void(0);";

if (is_array($desired)) {
  $link_key = $key - 1;
  if (array_key_exists($link_key, $desired)) {
    $link = $desired[$link_key]['link'];
  }
  $link_key_next = $key;
  if (array_key_exists($link_key_next, $desired)) {
    $question_id = $question_info_s[0]['question_order'] + 1;
    $link1 = base_url();
    $link_next = $link1 . 'get_tutor_tutorial_module/' . $question_info_s[0]['module_id'] . '/' . $question_id;
  }
}

$module_type = $question_info_s[0]['moduleType'];

$videoName = strlen($module_info[0]['video_name']) > 1 ? $module_info[0]['video_name'] : 'Subject Video';
?>


<?php if ($module_type == 3) { ?>
  <input type="hidden" id="exam_end" value="<?php echo strtotime($module_info[0]['exam_end']); ?>" name="exam_end" />
  <input type="hidden" id="now" value="<?php echo $module_time; ?>" name="now" />
  <input type="hidden" id="optionalTime" value="<?php echo $module_info[0]['optionalTime']; ?>" name="optionalTime" />
  <input type="hidden" id="exact_time" value="<?php echo $this->session->userdata('exact_time'); ?>" />
<?php } ?>

<!--         ***** For Tutorial & Everyday Study *****         -->
<?php if ($module_type == 2 || $module_type == 1) { ?>
  <input type="hidden" id="exam_end" value="" name="exam_end" />
  <input type="hidden" id="now" value="<?php echo $module_time; ?>" name="now" />
  <!--  <input type="hidden" id="optionalTime" value="--><?php //echo $question_time_in_second;
                                                          ?><!--" name="optionalTime" />-->
  <input type="hidden" id="optionalTime" value="<?php echo $setTime; ?>" name="optionalTime" />

  <input type="hidden" id="exact_time" value="<?php echo $this->session->userdata('exact_time'); ?>" />
<?php } ?>



<div class="ss_student_board">

  <div class="ss_s_b_top">

    <div class="ss_index_menu <?php //if ($module_type == 3) {
                              ?>col-sm-5<?php
              //}
              ?>">
      <?php if ($module_type == 1) { ?>
        <a href="all_tutors_by_type/<?php echo $total_question[0]['user_id']; ?>/<?php echo $total_question[0]['moduleType']; ?>" style="display: inline-block;">Index</a>
      <?php } else { ?>
        <!-- <a >Index</a> -->
      <?php } ?>

      <?php if ($module_info[0]['video_name']) { ?>
        <button class="btn btn_next" id="openVideo" style="margin-left: 25px;"><i class="fa fa-play" style="color:#35B6E7;margin-right: 5px;"></i><?php echo $videoName;  ?></button>
      <?php } ?>

    </div>

    <?php
    $col_class = 'col-sm-7';
    if (($module_type == 2 && $question_info_s[0]['optionalTime'] != 0) || $module_type == 3) {
      $col_class = 'col-sm-4';
    }
    ?>
    <div style="text-align: left;" class="text-center <?php echo $col_class ?><?php //if ($module_type != 3) {
                                                                              //echo 'col-sm-7';
                                                                              //} else {
                                                                              //echo 'col-sm-6';
                                                                              //}
                                                                              ?> ss_next_pre_top_menu">

      <?php if ($_SESSION['userType'] == 3 || $_SESSION['userType'] == 7) :
      ?> <!-- only tutor&qstudy will be able to back next -->
        <?php if ($question_info_s[0]['moduleType'] == 1) { ?>
          <a class="btn btn_next" href="<?php echo $link; ?>"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
          <a class="btn btn_next" href="<?php echo $link_next; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> Next</a>
        <?php } else { ?>
          <a class="btn btn_next" href="javascript:void(0);"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
          <a class="btn btn_next" href="javascript:void(0);"><i class="fa fa-caret-right" aria-hidden="true"></i> Next</a>
        <?php } ?>
      <?php endif; ?>

      <a class="btn btn_next" id="draw" onClick="test()" data-toggle="modal" data-target=".bs-example-modal-lg">
        Workout <img src="assets/images/icon_draw.png">
      </a>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div>
        <div style="position: absolute;left:-1000px;min-height: 250px;width: 600px;text-align: center;padding: 10px;" id="quesBody">
          <?php echo ($question_info_vcabulary->questionName); ?>
        </div>
      </div>









      <div class="ss_s_b_main" style="min-height: 100vh">
        <form id="answer_form">

          <input type="hidden" value="<?php echo $question_info_s[0]['question_id']; ?>" name="id" id="question_id">
          <?php // if (array_key_exists($key, $total_question) && !$tutorial_ans_info) {
          ?>
          <?php if (($last_question_order != $key) && !$tutorial_ans_info) { ?>
            <input type="hidden" id="next_question" value="<?php echo $question_info_s[0]['question_order'] + 1; ?>" name="next_question" />
          <?php } else { ?>
            <input type="hidden" id="next_question" value="0" name="next_question" />
          <?php } ?>
          <input type="hidden" id="module_id" value="<?php echo $question_info_s[0]['module_id'] ?>" name="module_id">
          <input type="hidden" id="current_order" value="<?php echo $key; ?>" name="current_order">
          <input type='hidden' id="module_type" value="<?php echo $question_info_s[0]['moduleType']; ?>" name='module_type'>

          <input type='hidden' id="student_question_time" value="" name='student_question_time'>

          <?php if ($question_info_s[0]['question_name_type']) { ?>
            <div class="col-sm-12">
              <div class="workout_menu" style="margin-bottom: 30px;">
                <ul>

                  <li>
                    <?php if ($module_info[0]['user_type'] == 7) { ?>
                      <a style="cursor: pointer;">
                        <span style="color: white;" class=" qstudy_Instruction_click">
                          <img src="assets/images/icon_draw.png"><b> Instruction</b>
                        </span>
                      </a>

                    <?php } else { ?>
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span class="Instruction_click"><img src="assets/images/icon_draw.png" onclick="abc()"> Instruction</span></a>
                    <?php } ?>
                  </li>

                  <?php if ($module_type == 3 || (($module_type == 2 || $module_type == 1) && $question_time_in_second != 0)) { ?>
                    <li>
                      <div class="ss_timer" id="demo">
                        <h1>00:00:00 </h1>
                      </div>
                    </li>

                  <?php } elseif ($module_type == 2 && $question_info_s[0]['optionalTime'] != 0) { ?>

                    <li>
                      <div class="ss_timer" id="demo">
                        <h1>00:00:00 </h1>
                      </div>
                    </li>

                  <?php } ?>


                  <?php if ($question_info_s[0]['isCalculator']) : ?>
                    <li><input type="hidden" name="" id="scientificCalc"></li>
                  <?php endif; ?>
                  <?php if ($question_info_s[0]['questionType'] != 18) { ?>
                    <li><a style="cursor:pointer" id="show_questions"> Question(Click here) </a></li>
                  <?php } ?>

                </ul>
              </div>
            </div>
          <?php  } else { ?>

            <div class="col-sm-12">
              <div class="workout_menu" style="margin-bottom: 30px;">
                <ul>
                  <li>
                    <?php if ($module_info[0]['user_type'] == 7) { ?>
                      <a style="cursor: pointer;">
                        <span style="color: white;" class=" qstudy_Instruction_click">
                          <img src="assets/images/icon_draw.png"><b> Instruction</b>
                        </span>
                      </a>

                    <?php } else { ?>
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span><img src="assets/images/icon_draw.png" onclick="abc()"> Instruction</span></a>
                    <?php } ?>
                  </li>

                  <li><a style="cursor:pointer" id="show_question" onclick="show_questionModal()">Question<i>(Click Here)</i></a></li>

                </ul>
              </div>
            </div>
          <?php  } ?>



          <div class="col-sm-8" style="padding:0;">
            <div class="panel-group " id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default" style="border:none;">
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body ss_imag_add_right">


                    <!-- Sentence start -->

                    <div style="font-weight: bold;font-size:20px;"><?php if (!empty(strip_tags($question_info_s[0]['question_instruction']))) {
                                                                      echo strip_tags($question_info_s[0]['question_instruction']);
                                                                    } else {
                                                                      echo "Choose the Right Word to Complete the Sentence.";
                                                                    } ?></div>
                    <br><br>

                    <div class="sentence_body">
                      <?php

                      $questions = $sentence_questions;
                      $answers = $sentence_answers;
                      $shuffle_answers = $sentence_answers;
                      shuffle($shuffle_answers);
                      $i = 0;
                      foreach ($questions as $question) {
                        $incre = $i + 1;
                        $options = '<option></option>';
                        foreach ($shuffle_answers as $shuffle_answer) {
                          $options .= '<option value="' . $shuffle_answer . '" style="color:#fb8836;">' . $shuffle_answer . '</option>';
                        }

                        $select_box = '<div style="display:inline-block;" class="student_ans' . $incre . '" data-id="' . $incre . '"> <select data-id="' . $incre . '" style="width: 100px;" class="all_ans question' . $incre . '">' . $options . '</select> </div>';

                        $questions_answer = $answers[$i];
                        $make_question = str_replace($questions_answer, $select_box, $question);
                      ?>


                        <div style="display:flex" class="question_all">
                          <span style="font-size: 25px;color: black;padding-top: 10px;"><?= $letter[$i]; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                          <div style="display:block;width:100%;background-color: #0000000f;padding: 15px;font-size:20px;"><?= $make_question ?></div>

                          <div class="ans_info<?= $incre ?>">
                            &nbsp;&nbsp;
                            <i class="fa fa-close wrong_ans<?= $incre ?>" style="font-size:24px;padding-top:1px;color:red;display:none;"></i>
                            <i class="fa fa-check right_ans<?= $incre ?>" style="font-size:24px;padding-top:1px;color:green;display:none;"></i>

                          </div>
                          &nbsp;&nbsp;
                          <div style="display:none;" class="suggession_box<?= $incre ?>">
                            <p style="background-color:gray;color:white;text-align: center;padding:0px 15px;">Answer</p>
                            <p class="ans_set<?= $incre ?>" style="text-align: center;background-color:wheat;">were</p>
                          </div>


                        </div>

                        <br>
                      <?php $i++;
                      } ?>

                      <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript:;" type="button" class="btn btn-primary" style="background-color: #fb8836;" id="ans_submit">Submit</a>
                        <a href="javascript:;" type="button" class="btn btn-primary" style="background-color: #bee131;" id="ans_try_again">Try Again</a>
                      </div>
                    </div>

                    <div id="ans_list" style="display:none;">
                      <?php
                      $k = 1;
                      foreach ($questions as $question) { ?>
                        <input type="text" data-id="<?= $k ?>" class="answer_append student_answer<?= $k ?>" value=",,<?= $k ?>" name="answer[]" data-value="">
                      <?php $k++;
                      } ?>
                    </div>

                  </div>

                  <div class="col-sm-5"></div>
                  <!-- <div class="col-sm-4" style="margin-top: 10px;">
                                <button type="button" class="btn btn_next" id="answer_matching">submit</button>
                            </div>                     -->
                  <div class="col-sm-4"></div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="panel-group" id="raccordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#taccordion" href="#collapsethree" aria-expanded="true" aria-controls="collapseOne">
                      <span>Module Name:<?php echo isset($module_info[0]['moduleName']) ? $module_info[0]['moduleName'] : 'Not found'; ?></span>
                    </a>
                  </h4>
                </div>
                <div id="collapsethree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <div class=" ss_module_result">
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th></th>
                              <th>SL</th>
                              <th>Mark</th>
                              <th>Obtained</th>
                              <th>Description / Video</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1;
                            $total = 0;
                            foreach ($total_question as $ind) { ?>
                              <tr>
                                <?php if ($ind['question_type'] == 17) { ?>
                                  <td> <span class="glyphicon glyphicon-pencil" style="color: red;"></span></td>
                                <?php } elseif ($ind['question_type'] == 22) { ?>
                                  <td> <span></span></td>
                                <?php } else {

                                  $style = '';
                                  if (isset($desired[$i]['ans_is_right'])) {
                                    $qus_tutorial = get_question_tutorial($ind['question_id']);
                                    if ($qus_tutorial && $module_info[0]['repetition_days'] == '') {
                                      $style = "background-color:#dcf394;text-align: center;padding: 0px;";
                                    }
                                  }
                                ?>
                                  <td style="<?php echo $style; ?>">
                                    <?php if (isset($desired[$i]['ans_is_right'])) {
                                      if ($ind["question_type"] == 14) { ?>
                                        <span style="color: red;"></span>
                                        <?php   } else {
                                        $qus_tutorial = get_question_tutorial($ind['question_id']);

                                        if ($desired[$i]['ans_is_right'] == 'correct') { ?>
                                          <span class="glyphicon glyphicon-ok" style="color: green;"></span>

                                          <?php if ($qus_tutorial && ($module_info[0]['repetition_days'] == '' || $module_info[0]['repetition_days'] == 'null')) { ?>
                                            <span class="question_tutorial_view" question_id="<?php echo $ind['question_id']; ?>" style="font-weight: bolder;color: #ff8b00;font-size: 20px;margin-left: 3px;">T</span>
                                          <?php } ?>
                                        <?php } else if ($desired[$i]['ans_is_right'] == 'idea') { ?>
                                          <span class="glyphicon glyphicon-pencil" style="color: red;"></span>

                                        <?php   } else { ?>
                                          <span class="glyphicon glyphicon-remove" style="color: red;"></span>
                                          <?php if ($qus_tutorial && ($module_info[0]['repetition_days'] == '' || $module_info[0]['repetition_days'] == 'null')) { ?>
                                            <span class="question_tutorial_view" question_id="<?php echo $ind['question_id']; ?>" style="font-weight: bolder;color: #ff8b00;font-size: 20px;margin-left: 3px;">T</span>
                                          <?php } ?>
                                    <?php }
                                      }
                                    } ?>
                                  </td>
                                <?php } ?>

                                <?php if (($ind["question_type"] != 14) && ($question_info_s[0]['question_order'] == $ind['question_order'])) { ?>
                                  <td style="background-color:lightblue">
                                    <?php echo $ind['question_order']; ?>
                                  </td>
                                <?php } elseif (($ind["question_type"] == 14) && $order >= $chk) { ?>
                                  <td style="background-color:#dcf394;text-align: center;padding: 0px;">
                                    <a style="color: #000;" class="show_tutorial_modal" question_id="<?php echo $ind['question_id']; ?>" modalId="<?php echo $ind['module_id']; ?>" Order="<?php echo $ind['question_order']; ?>"><?php echo $ind['question_order']; ?><span style="font-weight: bolder;color: #ff8b00;font-size: 20px;margin-left: 3px;">T</span></a>
                                  </td>
                                <?php } elseif (($ind["question_type"] == 14) && $order < $chk) { ?>
                                  <td style="background-color:#dcf394;text-align: center;padding: 0px;">
                                    <a style="color: #000;" class="show_tutorial_modal" question_id="<?php echo $ind['question_id']; ?>" modalId="<?php echo $ind['module_id']; ?>" Order="<?php echo $ind['question_order']; ?>"><?php echo $ind['question_order']; ?><span style="font-weight: bolder;color: #ff8b00;font-size: 20px;margin-left: 3px;">T</span></a>
                                  </td>
                                <?php } else {  ?>

                                  <td>
                                    <?php echo $ind['question_order']; ?>
                                  </td>

                                <?php } ?>


                                <td>
                                  <?php
                                  if ($ind["question_type"] == 22) {
                                    echo "";
                                  } else {
                                    echo $ind['questionMarks'];
                                    $total = $total + $ind['questionMarks'];
                                  }

                                  ?>
                                </td>
                                <td>
                                  <?php if ($ind["question_type"] == 14) {
                                    echo "0";
                                  } ?>
                                  <?php if (isset($desired[$ind['question_order']]['student_question_marks'])) {
                                    if ($ind["question_type"] == 22) {
                                      echo "";
                                    } else {
                                      echo $desired[$ind['question_order']]['student_question_marks'];
                                    }
                                  } ?>
                                </td>
                                <td>
                                  <div class="description_video">
                                    <?php
                                    $question_description = isset($ind['questionDescription']) ? $ind['questionDescription'] : '';
                                    if($ind['question_type'] == 22){
                                      $myquestion = json_decode($question_description);
                                      $question = $myquestion->question_setting_description;
                                    }else{
                                      $question = $question_description;
                                    }
                                     if (isset($question) && $question != null) { ?>
                                      <a class="description_class" onclick="showModalDes(<?php echo $i; ?>);" style="display: inline-block;"><img src="assets/images/icon_details.png"></a>
                                    <?php } ?>
                                    <?php
                                    $question_instruct_vid = isset($ind['question_video']) ? json_decode($ind['question_video']) : '';
                                    ?>
                                    <?php if (isset($question_instruct_vid[0]) && $question_instruct_vid[0] != null) { ?>
                                      <a onclick="showQuestionVideo(<?php echo $i; ?>)" class="question_video_class" style="display: inline-block;"><img src="http://q-study.com/assets/ckeditor/plugins/svideo/icons/svideo.png"></a>
                                    <?php } ?>
                                  </div>
                                </td>
                              </tr>
                            <?php $i++;
                            } ?>
                            <tr>
                              <td colspan="2">Total</td>
                              <td colspan="3"><?php echo $total ?></td>
                            </tr>
                          </tbody>
                        </table>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4" id="draggable" style="display: none;">
            <div class="panel-group" id="waccordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#waccordion" href="#collapseworkout" aria-expanded="true" aria-controls="collapseworkout"> Workout</a>
                  </h4>
                </div>
                <div id="collapseworkout" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <textarea name="workout" class="mytextarea"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>












<?php $i = 1;
$total = 0;
foreach ($total_question as $ind) {
  if ($ind['question_video'] != '' && $ind['question_video'] != "[]") { ?>
    <!--Question Video Modal-->
    <div class="modal fade in" data-keyboard="false" data-backdrop="static" id="ss_question_video<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <h4 class="modal-title" id="myModalLabel">Question Video</h4>
          </div>
          <div class="modal-body">
            <?php
            $question_instruct_vid = isset($ind['question_video']) ? json_decode($ind['question_video']) : '';
            ?>
            <?php if (isset($question_instruct_vid[0]) && $question_instruct_vid[0] != null) { ?>
              <video controls style="width: 100%" id="videoTag<?php echo $i; ?>">
                  <source src="<?php echo isset($question_instruct_vid[0]) ? trim($question_instruct_vid[0]) : '';?>" type="video/mp4">
              </video>

              <?php if (isset($question_instruct_vid[1]) && $question_instruct_vid[1] != null) : ?>
                <img class="active_video_play" src="assets/images/video_icon.PNG">
                <video id="my-video" class="video-js" controls preload="auto" data-setup="{}" style="width: 100%;min-height:313px;">
                  <source src="<?php echo isset($question_instruct_vid[1]) ? trim($question_instruct_vid[1]) : ''; ?>" type="video/mp4" />
                </video>
              <?php endif ?>
            <?php } else { ?>
              <P>No question video</P>
            <?php } ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn_blue closeVideoModal" value="<?php echo $i; ?>" id="closeVideoModalId<?php echo $i; ?>" onclick="videoCloseWithModal(<?php echo $i; ?>);">Close</button>
          </div>
        </div>
      </div>
    </div>
<?php }
  $i++;
} ?>
<script>


</script>


<!--Success Modal-->
<div class="modal fade ss_modal" id="ss_info_sucesss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="height: 265px">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body row" style="height: 87%;">
        <img src="assets/images/icon_sucess.png" class="pull-left"> <br> <span class="">Your answer is correct</span>

      </div>
      <div class="modal-footer">
        <button id="get_next_question" type="button" class="btn btn_blue" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ss_info_worng" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog ui-draggable" style=" width: 48%;">

    <!-- Modal content-->
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-close" style="font-size:20px;color:red"></i> <span class="">Your answer is wrong</span></h4>
      </div>
      <div class="modal-body">
        <div id="ss_extar_top20">
          <?php echo $question_info_s[0]['question_solution'] ?>
        </div>

      </div>

      <div class="modal-footer">

        <div class="footer_loding">
          <h1 id="counter"></h1>
          <img src="assets/images/loading17.gif">
          <span>SEC</span>
        </div>



        <button type="button" class="btn btn_blue rsclose" data-dismiss="modal">close</button>

      </div>
    </div>

  </div>
</div>


<div class="modal fade ss_modal" id="times_up_message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Times Up</h4>
      </div>
      <div class="modal-body row">
        <i class="fa fa-close" style="font-size:20px;color:red"></i>
        <br><?php echo $question_info_s[0]['question_solution']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" id="question_reload" class="btn btn_blue" data-dismiss="modal">close</button>
      </div>
    </div>
  </div>
</div>

<?php $i = 1;
foreach ($total_question as $indwww) {
  $question_description = isset($indwww['questionDescription']) ? $indwww['questionDescription'] : '';
  if($indwww['question_type'] == 22){
      $myquestion = json_decode($question_description);
      $question = $myquestion->question_setting_description;
  }else{
      $question = $question_description;
  }
  ?>

  <div class="modal fade ss_modal ew_ss_modal" id="show_description_<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title" id="myModalLabel">Question Description</h4>
        </div>
        <div class="modal-body">
          <textarea class="form-control" name="questionDescription"><?php echo $question; ?></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn_blue" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php $i++;
} ?>

<div class="modal fade" id="myModal_2222" role="dialog">
  <div class="modal-dialog ui-draggable" style=" width: 48%;">

    <!-- Modal content-->
    <div class="modal-content" style="width: 100%;height: 64%;">
      <div class="modal-header ui-draggable-handle">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <!--<h4 class="modal-title">Video Lesson</h4>-->
      </div>
      <div class="modal-body" style="height: 481px;">

        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" id="textarea_2">

          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class=" math_plus">

              <?php if ($question_info_s[0]['question_name_type'] == 2) { ?>
                <?php echo $question_info_vcabulary->questionName_2; ?>
              <?php } else { ?>
                <?php echo ($question_info_vcabulary->questionName); ?>
              <?php } ?>
            </div>
          </div>

        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn_blue" data-dismiss="modal">close</button>
      </div>
    </div>

  </div>
</div>

<div class="modal fade ss_modal" id="ss_info_faild" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">&nbsp;</h4>
      </div>
      <div class="modal-body row">
        <img src="assets/images/alertd_icon.png" style="height:50px;width:50px;" class="pull-left"> <span class="ss_extar_top20">Please select all answer</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn_blue" data-dismiss="modal">Ok</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade ss_modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="show_instructions">
  <!-- Modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 500px;margin-left: -100px;">

      <div class="btm_word_limt p-3">
        <div>
          <button type="button" id="close_idea" class="pull-right" data-dismiss="modal">x</button>
        </div>
        <br>
        <hr>
        <?php echo $question_info_s[0]['question_instruction']; ?>
        <div style="height: 30px;">
          <button type="button" id="close_idea" class="btn btn-info pull-right" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(window).on('load', function() {
    <?php
    foreach ($total_question as $ind) {
      if (($ind["question_type"] != 14) && ($question_info_s[0]['question_order'] == $ind['question_order'])) { ?>

        var id = <?php echo $ind['question_order']; ?>;
        <?php
        if ($ind['question_video'] != '' && $ind['question_video'] != "[]" && $ind['question_video'] != '""') { ?>
          showQuestionVideo(id);
    <?php }
      }
    } ?>
  });

  function showQuestionVideo(id) {
    $('#ss_question_video' + id).modal('show');
  }

  function videoCloseWithModal(id) {
    $('#ss_question_video' + id).modal('hide');
    var video = $('#videoTag' + id).get(0);
    if (video.paused === false) {
      video.pause();
    }
  }
  $(document).ready(function() {
    $('#ans_try_again').hide();

    $('.all_ans').change(function() {
      var get_ans = $(this).val();
      var ques_no = $(this).attr('data-id');
      var html = '<p style="color:#fb8836;font-size:20px;">&nbsp;' + get_ans + '&nbsp;</p>';

      $('.student_ans' + ques_no).html(html);
      var ans_concat = get_ans + ',,' + ques_no;
      $('.student_answer' + ques_no).val(ans_concat);

    });



    $('#ans_try_again').click(function() {

      var question_length = $('.question_all').length;
      var html = '';

      for (var a = 1; a <= question_length; a++) {
        $('.right_ans' + a).css('display', 'none');
        $('.wrong_ans' + a).css('display', 'none');
        $('.suggession_box' + a).css('display', 'none');
        // var incre = a+1;
        var options = '<option ></option>';
        var answers = <?php echo json_encode($answers) ?>;

        for (var p = 0; p < answers.length; p++) {

          options += '<option value="' + answers[p] + '" style="color:#fb8836">' + answers[p] + '</option>';
        }
        var select_box = '<div style="display: flex;" class="student_ans' + a + '" data-id="' + a + '">&nbsp;<select data-id="' + a + '" style="width: 100px;" class="all_ans question' + a + '">' + options + '</select>&nbsp;</div>';

        $('.student_ans' + a).html(select_box);

        $('#ans_submit').show();
        $('#ans_try_again').hide();
      }

    });


    $(document).on('change', '.all_ans', function() {
      var get_ans = $(this).val();
      var ques_no = $(this).attr('data-id');
      var html = '<p data-id="' + ques_no + '" class="ans_change" style="color:#fb8836;font-size:20px;">&nbsp;' + get_ans + '&nbsp;</p>';

      $('.student_ans' + ques_no).html(html);
      var exist_ans = $('.student_answer' + ques_no).length;
      var ans_concat = get_ans + ',,' + ques_no;
      $('.student_answer' + ques_no).val(ans_concat);
      $('.student_answer' + ques_no).attr('data-value', get_ans);

    });


    $('#ans_submit').click(function() {
      var questions = <?php echo json_encode($sentence_questions) ?>;
      var ans_check = [];
      for (var j = 0; j < questions.length; j++) {
        var k = j + 1;
        var get_stu_ans = $('.student_answer' + k).attr('data-value');
        if (get_stu_ans != undefined && get_stu_ans != '') {
          ans_check.push(get_stu_ans);
        }

      }
      // console.log(ans_check);
      var question_length = questions.length;
      var answer_length = ans_check.length;

      if (question_length == answer_length) {

        var form = $("#answer_form");
        $.ajax({
          type: 'POST',
          url: 'st_answer_sentence_matching',
          data: form.serialize(),
          dataType: 'html',
          success: function(results) {
            if (results == 2) {
              $('#ss_info_sucesss').modal('show');
              $('#get_next_question').click(function() {
                commonCall();
              });
            } else if (results == 3) {
              //$('#ss_info_worng').modal('show');
              var all_ans = <?php echo json_encode($answers) ?>;
              var matched_ans = new Array();
              var button_status = '';
              for (var i = 0; i < all_ans.length; i++) {
                var index = i + 1;
                var get_ans = $('.student_answer' + index).attr('data-value');

                if (all_ans[i] == get_ans) {
                  $('.right_ans' + index).css('display', 'block');
                  matched_ans.push(index + ',,' + all_ans[i] + ',,matched');
                } else {
                  $('.ans_set' + index).text(all_ans[i]);
                  $('.wrong_ans' + index).css('display', 'block');
                  $('.suggession_box' + index).css('display', 'block');
                  matched_ans.push(index + ',,' + all_ans[i] + ',,not_matched');
                }
              }
              for (var j = 0; j < matched_ans.length; j++) {
                var check = matched_ans[j].split(",,");

                if (check[2] == 'not_matched') {

                  button_status = 1;

                }
              }
              if (button_status == 1) {
                $('#ans_submit').hide();
                $('#ans_try_again').show();
                ans_check.length = 0;
                $('.answer_append').attr('data-value', '');
              } else {
                $('#ss_info_sucesss').modal('show')
              }
            }
          }
        });
      } else {
        $('#ss_info_faild').modal('show');
      }

    });

    $(document).on('click', '.ans_change', function() {
      var ques_no = $(this).attr('data-id');

      var options = '<option ></option>';
      var answers = <?php echo json_encode($answers) ?>;
      for (var p = 0; p < answers.length; p++) {
        options += '<option value="' + answers[p] + '" style="color:#fb8836">' + answers[p] + '</option>';
      }
      var select_box = '<div style="display: flex;" class="student_ans' + ques_no + '" data-id="' + ques_no + '">&nbsp;<select data-id="' + ques_no + '" style="width: 100px;" class="all_ans question' + ques_no + '">' + options + '</select>&nbsp;</div>';

      $('.student_ans' + ques_no).html(select_box);
    });
    $('#show_questions').click(function() {
      $('#show_instructions').modal('show');
    });


  });
</script>







<script type="text/javascript">
  function show_questionModal() {
    $('#myModal_2222').modal('show');
  }


  $(".response_answer_class").click(function() {
    if ($('.response_answer_class').is(":checked")) {
      var value = $(this).val();
      var question = <?= $answerCount ?>;
      $('#ans_image' + value).show();
      if (question == 1) {
        for (var i = 1; i <= 10; i++) {
          if (value != i) {
            $('#ans_image' + i).hide();
            $('#response_answer_id' + i).prop('checked', false);
          }
        }

      }
    } else {}
  });
  $('body').on('click', '.rsclose', function() {
    $('.response_answer_class').prop('checked', false);
    $('.ans_image').hide();
  })
  $(".image_click").click(function() {
    var value = $(this).val();
    $('#response_answer_id' + value).prop('checked', false);
    $('#ans_image' + value).hide();
  });
</script>
<script>
  var time_count = 0;



  function showModalDes(e) {
    $('#show_description_' + e).modal('show');
  }


  function commonCall() {
    $question_order = $('#next_question').val();
    $module_id = $('#module_id').val();

    <?php if ($tutorial_ans_info) { ?>
      window.location.href = 'show_tutorial_result/' + $module_id;
    <?php } ?>

    if ($question_order == 0) {
      window.location.href = 'show_tutorial_result/' + $module_id;
    }
    if ($question_order != 0) {
      window.location.href = 'get_tutor_tutorial_module/' + $module_id + '/' + $question_order;
    }
  }
</script>

<script>
  function takeDecesion() {
    var exact_time = $('#exact_time').val();

    var countDownDate = $('#exam_end').val();

    var now = $('#now').val();
    var opt = $('#optionalTime').val();
    var h1 = document.getElementsByTagName('h1')[0];

    var distance = countDownDate - now;
    var hours = Math.floor(distance / 3600);
    //alert(distance);
    var x = distance % 3600;

    var minutes = Math.floor(x / 60);
    var seconds = distance % 60;

    var t_h = hours * 60 * 60;
    var t_m = minutes * 60;
    var t_s = seconds;

    var total = parseInt(t_h) + parseInt(t_m) + parseInt(t_s);

    var remaining_time;
    var end_depend_optional = parseInt(exact_time) + parseInt(opt);
    //  alert(opt);
    // if(opt > total){
    //   remaining_time = total;
    // }else{
    //   remaining_time = parseInt(end_depend_optional) - parseInt(now);
    // }

    if (opt > 0) {
      remaining_time = parseInt(end_depend_optional) - parseInt(now);

    } else {
      remaining_time = total;
    }

    setInterval(circulate, 1000);

    function circulate() {
      time_count++;
      remaining_time = remaining_time - 1;

      var v_hours = Math.floor(remaining_time / 3600);
      var remain_seconds = remaining_time - v_hours * 3600;
      var v_minutes = Math.floor(remain_seconds / 60);
      var v_seconds = remain_seconds - v_minutes * 60;

      $("#student_question_time").val(time_count);

      if (remaining_time > 0) {
        h1.textContent = v_hours + " : " + v_minutes + " : " + v_seconds + "  ";
      } else {
        var form = $("#answer_form");
        $.ajax({
          type: 'POST',
          url: 'st_answer_matching_multiple_choice',
          data: form.serialize(),
          dataType: 'html',
          success: function(results) {
            window.location.href = 'show_tutorial_result/' + $('#module_id').val();
          }
        });
        h1.textContent = "EXPIRED";
      }
    }

  }

  <?php if ($module_type == 3  || ($module_type == 2 && $question_info_s[0]['optionalTime'] != 0 && ($question_time_in_second > $moduleOptionalTime || $question_time_in_second == 0))) { ?>
    takeDecesion();
  <?php } ?>
</script>


<script>
  function takeDecesionForQuestion() {

    var exact_time = $('#exact_time').val();

    var now = $('#now').val();
    var opt = $('#optionalTime').val();
    var h1 = document.getElementsByTagName('h1')[0];

    var countDownDate = parseInt(now) + parseInt($('#optionalTime').val());

    var distance = countDownDate - now;
    var hours = Math.floor(distance / 3600);
    //        alert(distance)
    var x = distance % 3600;

    var minutes = Math.floor(x / 60);

    var seconds = distance % 60;

    var t_h = hours * 60 * 60;
    var t_m = minutes * 60;
    var t_s = seconds;

    var total = parseInt(t_h) + parseInt(t_m) + parseInt(t_s);

    var remaining_time;
    var end_depend_optional = parseInt(exact_time) + parseInt(opt);

    if (opt > total) {
      remaining_time = total;
    } else {
      remaining_time = parseInt(end_depend_optional) - parseInt(now);
    }

    setInterval(circulate1, 1000);

    function circulate1() {

      time_count++;

      remaining_time = remaining_time - 1;

      var v_hours = Math.floor(remaining_time / 3600);
      var remain_seconds = remaining_time - v_hours * 3600;
      var v_minutes = Math.floor(remain_seconds / 60);
      var v_seconds = remain_seconds - v_minutes * 60;

      $("#student_question_time").val(time_count);

      if (remaining_time > 0) {
        h1.textContent = v_hours + " : " + v_minutes + " : " + v_seconds + "  ";
      } else {
        var form = $("#answer_form");
        $.ajax({
          type: 'POST',
          url: 'st_answer_matching_multiple_choice',
          data: form.serialize(),
          dataType: 'html',
          success: function(results) {
            if (results == 3) {
              $('#times_up_message').modal('show');
              $('#question_reload').click(function() {
                location.reload();
              });
            }
            if (results == 2) {
              $('#ss_info_sucesss').modal('show');
              $('#get_next_question').click(function() {
                commonCall();
              });
            }
          }
        });
        h1.textContent = "EXPIRED";
      }
    }

  }

  <?php if (($module_type == 1 || $module_type == 2) && $question_time_in_second != 0) { ?>
    takeDecesionForQuestion();
  <?php } ?>
  $(document).ready(function() {
    var id = <?php echo $ind['question_order']; ?>;
    var ctrlVideo = document.getElementById("videoTag" + id);

    $('.active_video_play').click(function() {
      if ($('.active_video_play').hasClass("active")) {

        ctrlVideo.play();

        $('.active_video_play').html("Pause");
        $('.active_video_play').toggleClass("active");
      } else {

        ctrlVideo.pause();

        $('.active_video_play').html("play");
        $('.active_video_play').toggleClass("active");
      }
    });

  });
</script>


<?php $this->load->view('students/question_module_type_tutorial/module_video'); ?>
<?php $this->load->view('students/question_module_type_tutorial/instruction_video'); ?>
<?php $this->load->view('students/question_module_type_tutorial/drawingBoardMultifule'); ?>