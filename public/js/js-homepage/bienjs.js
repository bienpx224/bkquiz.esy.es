
$(document).ready(function(){
    $("#hotnews").css('background-color:#d1e1ff;');
    $(".col-md-3").mouseover(function(){
        $("#1").css('color','#000000');
        $("#2").css('color','#000000');
        $("#3").css('color','#000000');
        $("#4").css('color','#000000');
        $("#5").css('color','#000000');
        $("#6").css('color','#000000');
    });
    $("#0").click(function(){
      $("#hotnews").show(1000);
      $("#math").hide(500);
      $("#dialy").hide(500);
      $("#KHXH").hide(500);
      $("#sport").hide(500);
      $("#Van").hide(500);
      $("#history").hide(500);
    });
    $("#1").click(function(){
      $("#hotnews").hide();
      $("#math").hide(500);
      $("#dialy").hide(500);
      $("#KHXH").hide(500);
      $("#sport").hide(500);
      $("#Van").hide(500);
      $("#history").show(500);

    });
    $("#2").click(function(){
      $("#hotnews").hide(500);
      $("#math").hide(500);
      $("#history").hide(500);
      $("#dialy").show(1000);
      $("#KHXH").hide(500);
      $("#sport").hide(500);
      $("#Van").hide(500);


    });

    $("#3").click(function(){
      $("#hotnews").hide(500);
      $("#math").hide(500);
      $("#dialy").hide(500);
      $("#KHXH").hide(500);
      $("#sport").hide(500);
      $("#Van").show(500);
      $("#history").hide(500);

    });
    $("#4").click(function(){
      $("#hotnews").hide(500);
      $("#math").show(500);
      $("#dialy").hide(500);
      $("#KHXH").hide(500);
      $("#sport").hide(500);
      $("#Van").hide(500);
      $("#history").hide(500);

    });
    $("#5").click(function(){
      $("#hotnews").hide(500);
      $("#math").hide(500);
      $("#dialy").hide(500);
      $("#KHXH").show(500);
      $("#sport").hide(500);
      $("#Van").hide(500);
      $("#history").hide(500);

    });
    $("#6").click(function(){
      $("#hotnews").hide(500);
      $("#math").hide(500);
      $("#dialy").hide(500);
      $("#KHXH").hide(500);
      $("#sport").show(500);
      $("#Van").hide(500);
      $("#history").hide(500);

    });

    $(window).scroll(function () {
             if ($(window).scrollTop() >= 400) {
                 $('#menu').addClass('menu');
             }


             if ($(window).scrollTop() >= 401) {
                 $('#menu').addClass('show');
             } else {
                 $('#menu').removeClass('show menu');
             }
    });


});
