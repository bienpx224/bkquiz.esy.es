<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Đồ án 3: Trắc nghiệm</title>

    <!-- Bootstrap core CSS -->
    <link rel="icon" type="image/jpg" href="http://stickersocial.net/wp-content/uploads/2014/11/NuaNia2.png">
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/css/formlogin.css') }}"  rel="stylesheet" type="text/css">
    <link href="{{ asset('public/css/jumbotron-narrow.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="public/css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  </head>

  <body style="background-image: url(public/upload/bg1.png);">

    <div class="container">
      <div class="header clearfix" style="background-color:#121b6d;">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="home">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted" style="margin-left:20%;margin-top:5%;font-size:30px;color:white">Trả lời trắc nghiệm</h3>
      </br>
      </div>
      <div class="inner" style="margin-top:7%;margin-bottom:0%;color:white;margin-bottom:40px;">

        <h1 style="color:white;">Answer Quiz</h1>
        <h3 style="color:white;">Chào mừng bạn đến với ứng dụng của chúng tôi</h3>


          @if(count($errors)>0)
            <div class="alert alert-danger">
              <strong>Error: </strong> There were some problems
              <ul>
                  @foreach($errors->all() as $error)
                    <li>{{ $error }} </li>
                  @endforeach
              </ul>
            </div>
          @endif

          <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
              <label><span class="glyphicon glyphicon-user"></span></label>
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
              <input type="text"  placeholder='Username' class="input" name="txtUsername" autofocus="" /><br>
              <label><span class="glyphicon glyphicon-lock"></span></label>
              <input type="password"  placeholder="password" class="input" name="txtPassword"/><br>
              <label><span class="glyphicon glyphicon-lock"></span></label>
              <input type="text"  placeholder="first_name" class="input" name="txtFirstname"/><br>
              <label><span class="glyphicon glyphicon-lock"></span></label>
              <input type="text"  placeholder="last_name" class="input" name="txtLastname"/><br>
              <label><span class="glyphicon glyphicon-lock"></span></label>
              <input type="text"  placeholder="email" class="input" name="txtEmail"/><br>
              <label><span class="glyphicon glyphicon-lock"></span></label>
              <input type="text"  placeholder="phone number" class="input" name="txtPhonenumber"/><br>
              <button type="submit" class="button" name="btnRegister" onclick="hideError();">Register</button>
              <a href="{{route('login')}}" style="text-decoration:none;"><input type="button" value="Back To Login" class="button" /></a>
          </form>


    </div>
    </div>
    @include('layout/footer')
  </body>
</html>
