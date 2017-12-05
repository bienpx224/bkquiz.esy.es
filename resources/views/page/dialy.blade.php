
<div id="dialy" class="col-md-9" style="float:right">
    <div  class="panel panel-default">
      <div class="panel-heading" style="background-color:#337AB7; color:white;">
        <h2 style="margin-top:0px; margin-bottom:0px;">Thể loại Địa lí </h2>
      </div>

      <div style="background-color: #d1e1ee;" class="panel-body">

@foreach($topicsDiaLi as $tp)
        <!-- item -->
    <div class="row-item row" >
      <div style="padding-left: 10%;">

            <div class="col-md-12 border-right">
              <div class="col-md-5" >
                    <a href="test/dotest/{{$tp->test_id}}">
                      @if($tp->image_url!=NULL)
                        <div class="image img-thumbnail" style="background-image:url( public/upload/imagetest/{{$tp->image_url}} )"></div>
                      @else
                        <img class="img-thumbnail" src="https://cdn.davidwolfe.com/wp-content/uploads/2016/03/manipulation-FI02.jpg" alt="">
                      @endif
                    </a>
                </div>

                <div class="col-md-7">
                    <a style="text-decoration:none;" href="test/dotest/{{$tp->test_id}}"><h3>{{$tp->title}}</h3></a>
                    <p></p></br>
                    <a class="btn btn-primary" href="test/dotest/{{$tp->test_id}}">Play Now! <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>

             </div>
      </div>

      <div class="break"></div>
    </div>
  </br></br>
@endforeach

      </div>
    </div>
</div>
