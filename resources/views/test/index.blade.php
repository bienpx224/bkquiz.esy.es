@extends('test.cover')
@section('title')
  DoTest
@endsection
@section('content')
<?php
/**
 * Created by PhpStorm.
 * User: DucHai
 * Date: 30/03/2017
 * Time: 8:43 SA
 */
/**
 * @var $block App\Http\Controllers\Test\Helper\Helper;
 */

$questions=$block->getQuestions($id);
$title=$block->getTitle($id);
?>
<input type="hidden" id="token" value="{{ csrf_token() }}">
<span id="save-url" ajax-ulr="{{url('test/save')}}" hidden></span>
<span id="feedback-url" ajax-ulr="{{url('test/feedback')}}" hidden></span>
<span id="test-id" value="<?php echo $id;?>" hidden></span>
<script src="{{url('public/js/jquery-3.2.0.min.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{url('public/css/css-homepage/myquiz.css') }}">
<link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}" type="text/css">

<!-- <link rel="stylesheet" href="css/demo.css">
<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->

<link rel="stylesheet" href="{{url('public/css/dotest.css')}}">
<link rel="stylesheet" href="{{url('public/css/css-homepage/biencss.css')}}">
<script src="{{url('public/js/dotest.js')}}"></script>
<div class="container" >
  <div class="panel panel-primary" id="cover" style="padding: 5%;margin-top:5%;background-image: url(../../public/upload/bg1.png);">
      <div class="col-md-5">
          <div id="test-wrapper" class="container test-item" >
              <div class="inner-div container">
                  <div class="test-header"></div>
                  <div class="test-content">
                      <button class="btn-success start-button" id="btn-start">
                      <span class="glyphicon glyphicon-send" style="margin-right: 10px"></span><span>Start</span>
                      </button>
                  </div>
              </div>
          </div>
          <div style="background-image: url('../../public/upload/imagetest/{{$test[0]->image_url}}'); background-size:100% 100%; width: 450px;height: 550px;max-height: 550px;" >
          <?php
          $questionIndex=1;
          $totalQuestion=count($questions);

          foreach ($questions as $question):
    $answers=$block->getAnswers($question);
    $percents=$block->getPercentArray($question);
    $TrueFalseArray=$block->getTrueFalseArray($question->correct_answer);
    ?>
    <div id="test-wrapper" class="container test-item" hidden >
        <div class="inner-div container">
            <div class="test-header"></div>
            <div class="test-content">
                <div class="question-block container center-block"><p align="center"><span><?php echo $questionIndex.'/'.$totalQuestion;?>|</span><span> <?php echo $title; ?></span></p></div>
                <div class="question-content"><p class="text-center" ><?php echo $question->question;?></p></div>
                <div class="answer-container container">
                    <?php
                    $answerIndex=1;
                    foreach ($answers as $answer) :
                    ?>
                    <div class="answer" style="min-height:40px;" true-false-value="<?php echo $TrueFalseArray[$answerIndex]; ?>" question-id="<?php echo $question->question_id;?>" answer="<?php echo $answerIndex;?>">
                        <div class="rate-bar" rate-width="<?php echo $percents[$answerIndex];?>%">
                        </div>
                        <span class="answer-content"><?php echo $answer;?></span>
                        <span hidden class="rate"><?php echo $percents[$answerIndex];?>%</span>
                    </div>
                    <?php
                            $answerIndex++;
                        endforeach;?>
                </div>
            </div>
        </div>
    </div>

    <div id="test-wrapper" class="container test-item" hidden>
        <div class="inner-div container">
            <div class="test-header"></div>
            <div class="test-content">
                <div class="info-result" id="right-wrong">Thông tin </div>
                <div class="info-content">
                    <?php echo $block->getDetailInfo($question->question_id)?>
                </div>
            </div>
        </div>
    </div>
    <?php
        $questionIndex++;
    endforeach; ?>

          <div class="container test-item" id="result" hidden>
              <div class="inner-div container">
                  <div class="test-header"></div>
                  <div class="test-content">
                      <div class="result"><h2>Chúc mừng bạn đã trả lời đúng <span id="right-answer">5</span>/<span id="all"><?php echo $totalQuestion;?> câu hỏi</span></h2></div>>
                      <div align='center'><a href=""><button type="button" class="btn btn-success">Play again</button></a></div>
                  </div>
              </div>
          </div>
          </div>
        </div>
          <!-- end test -->
          <!-- right -->
        <div class="col-md-7">
            <div  id="test-right">
<!-- <span class="glyphicon glyphicon-user"> </span> -->
                  <label class="label label-success" style="min-width:1000px;text-size:24px;">Nếu không hài lòng, vui lòng phản hồi lại cho chúng tôi</label>
                  <div id="success-message" class="label label-success" style="min-width:1000px;text-size:24px; color: green" hidden>Phản hồi của bạn đã được gửi và xem xét</div>
                </br></br>
                  <input type="text" placeholder='Name' class="form-control" style="color:blue; margin-left:10%;width:50%;" id="txtname" autofocus="" /><br>

                  <!-- <label><span class="glyphicon glyphicon-lock"></span></label> -->
                  <input type="email" placeholder="email" class="form-control" style="color:blue;margin-left:10%;width:50%;" id="txtEmail"/><br>
                  <!-- <label><span class="glyphicon glyphicon-lock"></span></label> -->
                  <textarea type="text" class="form-control" id="txtfeedback" style="color:blue; margin-left:10%; width:80%;"></textarea></br>
                  <button style="margin-left:10%;" class="btn btn-primary" id="feedback" type="button"> Send feedback </button>
                <div id="quiz-invole">

                </div>

            </div>
        </div>


  </div>
</div>
@endsection
