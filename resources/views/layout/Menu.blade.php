               <div  class="col-md-3" id="menu" style="float:left" >
    			         <div class="list-group">
    							  <a id="0" class="list-group-item active">
    							    Thể Loại
    							  </a>
    							  @foreach($topics->all() as $topic)
    							  <a id='{{$topic->id}}' class="list-group-item btn btn-info">{!!$topic->name!!}
                        <span class="glyphicon glyphicon-hand-right"></span>
                    </a>
    							  @endforeach

    							</div>
			         </div>
