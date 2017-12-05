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
				  	<div class="panel-heading">Thông tin tài khoản</div>
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
				    	<form action="AccountSettings" method="post">
				    	    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
				    	    <div>
				    			<label>User Name</label>
							  	<input type="text" class="form-control" placeholder="username" name="username" aria-describedby="basic-addon1" value="{!! Auth::user()->username!!}" disabled>
							</div>
							<br>
				    		<div>
				    			<label>First Name</label>
							  	<input type="text" class="form-control" placeholder="first_name" name="first_name" aria-describedby="basic-addon1" value="{!! Auth::user()->first_name!!}">
							</div>
							<br>
							<div>
				    			<label>Last Name</label>
							  	<input type="text" class="form-control" placeholder="last_name" name="last_name" aria-describedby="basic-addon1" value="{!! Auth::user()->last_name!!}">
							</div>
							<br>
                             <div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="email" name="email" aria-describedby="basic-addon1" value="{!! Auth::user()->email!!}">
							</div>
							<br>
							  <div>
				    			<label>Phone Number</label>
							  	<input type="text" class="form-control" placeholder="phone_number" name="phone_number" aria-describedby="basic-addon1" value="{!! Auth::user()->phone_number!!}">
							</div>
							<br>

							<button type="submit" class="btn btn-success">Sửa
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
