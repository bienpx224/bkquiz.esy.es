/**
 * Created by DucHai on 30/03/2017.
 */
wipe_right($('.rate-bar'));

function wipe_right (elem) {
    var questionAnswerArray={};
    $.each(elem,function (idx,itm) {
        var singleElem=$(elem[idx]);
        var width=singleElem.attr("rate-width");
        singleElem.css('width', '0%');
        singleElem.css("right", width);
        singleElem.animate({
            width: width,
            right: '0%'
        }, 1000);
    });
    // elem.css('width', '0%');
    // elem.css("right", width);

}

$(document).ready(function () {
    $("#success-message").hide();
     var total=($(".test-item").length-2)/2;
     var correctAnswer=0;
     var answeredQuestion=0;

     var ajaxArray=[];
    $("#testJS").click(function () {
        alert("total");
    });
    var actionFlag=0;
    var listItems=$(".test-item");
    var idx=0;
    $("#btn-start").click(function () {
        $(listItems[idx]).fadeOut(500);
        idx++;
        $(listItems[idx]).fadeIn(800);
    });

    var answers=$(".answer");
    $.each(answers, function (idx1,itm1) {
       var answer=$(answers[idx1]);
       answer.click(function () {
           answeredQuestion++;
            var answerObiect={};
            answerObiect['question_id']=answer.attr("question-id");
            answerObiect['answer']=answer.attr("answer");
            ajaxArray.push(answerObiect);
           if(actionFlag==0) {
               actionFlag=1;
               var parent = answer.parent(".answer-container");
               var rateBars = parent.find(".rate-bar");
               var answers = parent.children(".answer");
               var rates = parent.find(".rate")
               $.each(answers, function (idx2, itm2) {
                   var item = $(answers[idx2]);
                   var rateBar = item.children(".rate-bar").first();
                   if (item.attr("true-false-value") != 1) {
                       rateBar.css("background-color", "white")
                   }
                   else {
                       rateBar.css("background-color", "green")
                   }
               });
               if (answer.attr("true-false-value") == 0) {
                   var rateBar = answer.children(".rate-bar").first();
                   rateBar.css("background-color", "red");
                   rateBar.css("opacity", "1");
               }
               else {
                   var rateBar = answer.children(".rate-bar").first();
                   rateBar.css("opacity", "1");
                   correctAnswer++;
               }
               wipe_right(rateBars);
               rates.show();
               $(listItems[idx]).delay(3000).fadeOut(1500);
               idx++;
               if(answeredQuestion!=total)
               {
                   $(listItems[idx]).delay(3000).fadeIn(1500);
                   idx++;
                   // $(listItems[idx]).children(".inner-div").first().children('.test-content').first().children('.info-result').first().html('Sai');
                   $(listItems[idx]).delay(9000).fadeIn(1500);
                   $(listItems[idx-1]).delay(6000).fadeOut(1500);

               }
              setTimeout(function () {
             actionFlag=0;
              },4500);
           }
           if(answeredQuestion==total){
               var url=$("#save-url").attr("ajax-ulr");
               var testId=$("#test-id").attr("value");
               var jsonString = JSON.stringify(ajaxArray);
               // alert(jsonString);
               // alert(jsonString);
               // alert(url);
               var token=$("#token").attr("value");
               $.ajax({
                   type: "POST",
                   url: url,
                   data: {
//                        form_key: '<?php //echo $block->getFormKey() ?>//',
                       '_token': token,
                       result: jsonString,
                       test_id: testId,
                       correct_answer: correctAnswer
                   },
                   showLoader: true,
                   success: function (response) {
                       if (!response.error) {
                           // alert("success");

                       } else {
                           //TODO when have errors
                           alert('Sorry something went wrong !');
                       }
                   },
                   timeout: 10000
               });
               $(listItems[idx]).delay(3000).fadeOut(1500);
               idx++;
               $(listItems[idx]).delay(9000).fadeIn(1500);
               setTimeout(function () {
                   $("#right-answer").html(correctAnswer);
                   $("#result").delay(5000).fadeIn(1500);
                   // var message="Bạn đã trả lời đúng "+ correctAnswer + "/" +total + " câu";
                   // alert(message);
               },2000);
           };
       });
    });
    
    $("#feedback").click(function () {
        var name=$("#txtname").val();
        var email=$("#txtEmail").val();
        var feedback=$("#txtfeedback").val();
        var testId=$("#test-id").attr("value");
        var url=$("#feedback-url").attr("ajax-ulr");
        var token=$("#token").attr("value");
        $.ajax({
            type: "POST",
            url: url,
            data: {
//                        form_key: '<?php //echo $block->getFormKey() ?>//',
                '_token': token,
                'name': name,
                'email': email,
                'content':feedback,
                'test_id':testId
            },
            showLoader: true,
            success: function (response) {
                if (!response.error) {
                   $("#success-message").show();
                } else {
                    //TODO when have errors
                    alert('Sorry something went wrong !');
                }
            },
            timeout: 10000
        });
    });
});
