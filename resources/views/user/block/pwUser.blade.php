@extends('index')
@section('title')
  User
@endsection
@section('content')
<div class="container" style="color:white;">

    	<!-- slider -->
    	<div class="row carousel-holder" style="margin-top: 80px">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
				  	<div class="panel-heading">Đổi mật khẩu</div>
				  	<div class="panel-body">
                         @if(count($errors)>0)
						  <div class="alert alert-danger">
						    <ul>
						      @foreach($errors->all() as $error )
						        <li>{{$error}}</li>
						      @endforeach
						    </ul>
						  </div>
						@endif



				  	    @if(session('thongbao'))
                             <div class="alert alert-success">
                             	{{session('thongbao')}}
                             </div>

				  	    @endif
				    	<form action="changePassword" method="post">
				    	    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
							<div>


				    			<label>Mật khẩu cũ</label>

							  	<input type="password" class="form-control password" name="old_password" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Mật khẩu mới</label>
							  	<input type="password" class="form-control password" name="password" aria-describedby="basic-addon1">
							</div>

							<br>
							<div>
				    			<label>Nhập lại mật khẩu mới</label>
							  	<input type="password" class="form-control password" name="passwordAgain" aria-describedby="basic-addon1">
							</div>
							<br>
							<button type="submit" class="btn btn-primary">Đổi
							</button>

				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>

@endsection
