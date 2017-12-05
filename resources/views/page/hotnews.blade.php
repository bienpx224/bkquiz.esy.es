
<div id="hotnews" class="col-md-9" style="float:right">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color:#337AB7; color:white;">
        <h2 style="margin-top:0px; margin-bottom:0px;">Những quiz được trả lời nhiều nhất</h2>
      </div>

      <div style="background-color:#c3c0e2;" class="panel-body">


        <!-- item -->
        <div class="row-item row" >

            <div style="padding-left: 10%;">
                  <h3>
                    <a href="test/dotest/{{$topicsHis->first()->test_id}}">{{$topicsHis->first()->name}}</a>

                  </h3>
                  <div class="col-md-12 border-right">
                    <div class="col-md-5" >
                          <a href="test/dotest/{{$topicsHis->first()->test_id}}">
                            @if($topicsHis->first()->image_url!=NULL)
                              <div class="image img-thumbnail" style="background-image:url( public/upload/imagetest/{{$topicsHis->first()->image_url}} )"></div>
                            @else
                              <img class="img-thumbnail" src="https://cdn.davidwolfe.com/wp-content/uploads/2016/03/manipulation-FI02.jpg" alt="">
                            @endif
                          </a>
                      </div>

                      <div class="col-md-7">
                          <a style="text-decoration:none;" href="test/dotest/{{$topicsHis->first()->test_id}}" ><h3>{{$topicsHis->first()->title}}</h3></a>
                          <p></p></br>
                          <a class="btn btn-primary" href="test/dotest/{{$topicsHis->first()->test_id}}">Play Now! <span class="glyphicon glyphicon-chevron-right"></span></a>
                      </div>

                   </div>
            </div>

            <div class="break"></div>
          </div>
          <div class="row-item row" >
            <div style="padding-left: 10%;">
                  <h3>
                    <a href="test/dotest/{{$topicsDiaLi->first()->test_id}}">{{$topicsDiaLi->first()->name}}</a>

                  </h3>
                  <div class="col-md-12 border-right">
                    <div class="col-md-5" >
                          <a href="test/dotest/{{$topicsDiaLi->first()->test_id}}">
                            @if($topicsDiaLi->first()->image_url!=NULL)
                              <div class="image img-thumbnail" style="background-image:url( public/upload/imagetest/{{$topicsDiaLi->first()->image_url}} )"></div>
                            @else
                              <img class="img-thumbnail" src="https://cdn.davidwolfe.com/wp-content/uploads/2016/03/manipulation-FI02.jpg" alt="">
                            @endif
                          </a>
                      </div>

                      <div class="col-md-7">
                          <a style="text-decoration:none;" href="test/dotest/{{$topicsDiaLi->first()->test_id}}"><h3>{{$topicsDiaLi->first()->title}}</h3></a></br>
                          <p></p>
                          <a class="btn btn-primary" href="test/dotest/{{$topicsDiaLi->first()->test_id}}">Play Now! <span class="glyphicon glyphicon-chevron-right"></span></a>
                      </div>

                   </div>
            </div>

            <div class="break"></div></br>
          </div>

          <div class="row-item row" >
            <div style="padding-left: 10%;">
                  <h3>
                    <a href="test/dotest/{{$topicsVan->first()->test_id}}">{{$topicsVan->first()->name}}</a>

                  </h3>
                  <div class="col-md-12 border-right">
                    <div class="col-md-5" >
                          <a href="test/dotest/{{$topicsVan->first()->test_id}}">
                            @if($topicsVan->first()->image_url!=NULL)
                              <div class="image img-thumbnail" style="background-image:url( public/upload/imagetest/{{$topicsVan->first()->image_url}} )"></div>
                            @else
                              <img class="img-thumbnail" src="https://cdn.davidwolfe.com/wp-content/uploads/2016/03/manipulation-FI02.jpg" alt="">
                            @endif
                          </a>
                      </div>

                      <div class="col-md-7">
                          <a style="text-decoration:none;" href="test/dotest/{{$topicsVan->first()->test_id}}"><h3>{{$topicsVan->first()->title}}</h3></a></br>
                          <p></p>
                          <a class="btn btn-primary" href="test/dotest/{{$topicsVan->first()->test_id}}">Play Now! <span class="glyphicon glyphicon-chevron-right"></span></a>
                      </div>

                   </div>
            </div>

            <div class="break"></div></br>
          </div>

          <div class="row-item row" >
            <div style="padding-left: 10%;">
                  <h3>
                    <a href="test/dotest/{{$topicsMath->first()->test_id}}">{{$topicsMath->first()->name}}</a>

                  </h3>
                  <div class="col-md-12 border-right">
                    <div class="col-md-5" >
                          <a href="test/dotest/{{$topicsMath->first()->test_id}}">
                            @if($topicsMath->first()->image_url!=NULL)
                              <div class="image img-thumbnail" style="background-image:url( public/upload/imagetest/{{$topicsMath->first()->image_url}} )"></div>
                            @else
                              <img class="img-thumbnail" src="https://cdn.davidwolfe.com/wp-content/uploads/2016/03/manipulation-FI02.jpg" alt="">
                            @endif
                          </a>
                      </div>

                      <div class="col-md-7">
                          <a style="text-decoration:none;" href="test/dotest/{{$topicsMath->first()->test_id}}"><h3>{{$topicsMath->first()->title}}</h3></a></br>
                          <p></p>
                          <a class="btn btn-primary" href="test/dotest/{{$topicsMath->first()->test_id}}">Play Now! <span class="glyphicon glyphicon-chevron-right"></span></a>
                      </div>

                   </div>
            </div>

            <div class="break"></div>
          </div>
          @if($topicsSport)
          <div class="row-item row" >
            <div style="padding-left: 10%;">
                  <h3>
                    <a href="test/dotest/{{$topicsSport->first()->test_id}}">{{$topicsSport->first()->name}}</a>

                  </h3>
                  <div class="col-md-12 border-right">
                    <div class="col-md-5" >
                          <a href="test/dotest/{{$topicsSport->first()->test_id}}">
                            @if($topicsSport->first()->image_url!=NULL)
                              <div class="image img-thumbnail" style="background-image:url( public/upload/imagetest/{{$topicsSport->first()->image_url}} )"></div>
                            @else
                              <img class="img-thumbnail" src="https://cdn.davidwolfe.com/wp-content/uploads/2016/03/manipulation-FI02.jpg" alt="">
                            @endif
                          </a>
                      </div>

                      <div class="col-md-7">
                          <a style="text-decoration:none;" href="test/dotest/{{$topicsSport->first()->test_id}}"><h3>{{$topicsSport->first()->title}}</h3></a></br>
                          <p></p>
                          <a class="btn btn-primary" href="test/dotest/{{$topicsSport->first()->test_id}}">Play Now! <span class="glyphicon glyphicon-chevron-right"></span></a>
                      </div>

                   </div>
            </div>

            <div class="break"></div>
          </div>
          @endif
          <div class="row-item row" >
            <div style="padding-left: 10%;">
                  <h3>
                    <a href="test/dotest/{{$topicsKHXH->first()->test_id}}">{{$topicsKHXH->first()->name}}</a>

                  </h3>
                  <div class="col-md-12 border-right">
                    <div class="col-md-5" >
                          <a href="test/dotest/{{$topicsKHXH->first()->test_id}}">
                            @if($topicsKHXH->first()->image_url!=NULL)
                              <div class="image img-thumbnail" style="background-image:url( public/upload/imagetest/{{$topicsKHXH->first()->image_url}} )"></div>
                            @else
                              <img class="img-thumbnail" src="https://cdn.davidwolfe.com/wp-content/uploads/2016/03/manipulation-FI02.jpg" alt="">
                            @endif
                          </a>
                      </div>

                      <div class="col-md-7">
                          <a style="text-decoration:none;" href="test/dotest/{{$topicsKHXH->first()->test_id}}"><h3>{{$topicsKHXH->first()->title}}</h3></a></br>
                          <p></p>
                          <a class="btn btn-primary" href="test/dotest/{{$topicsKHXH->first()->test_id}}">Play Now! <span class="glyphicon glyphicon-chevron-right"></span></a>
                      </div>

                   </div>
            </div>
            <div class="break"></div>
          </div>

      </div>
</div>
</div>
