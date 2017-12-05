<div class="row">
<div class="col-md-12">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{route('getHome')}}" style="padding: 0"><img src="{{url('public/image/logo.png')}}" alt="" style="width: 154px;height: 50px"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Giới Thiệu</a></li>
                            <li><a href="{{route('contact')}}">Liên Hệ</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>


                                @if (Auth::check())
                                    <div class="top-right links">

                                    <ul class="nav navbar-nav navbar-right">
                                            <li class="dropdown" >
                                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                                    <span class="glyphicon glyphicon-user" ></span>
                                                    <strong> {!! Auth::user()->username!!}</strong>
                                                    <span class="glyphicon glyphicon-chevron-down" ></span>
                                                </a>
                                                <ul class="dropdown-menu" style="width: 307px">
                                                    <li>
                                                        <div class="navbar-login">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <p class="text-center">
                                                                        <span class="glyphicon glyphicon-user icon-size" style="font-size: 87px;margin-left: 10px"></span>
                                                                    </p>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <p class="text-left" style="font-size: 20px"><strong>{!! Auth::user()->username!!}</strong></p>
                                                                    <p class="text-left small">{!! Auth::user()->email!!}</p>
                                                                    <!-- <p class="text-left">
                                                                        <a href="#" class="btn btn-primary btn-block btn-sm">Profile</a>
                                                                    </p> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="divider navbar-login-session-bg"></li>
                                                    @if(Auth::user()->authority==0)
                                                      <li><a href="{{route('admin.test.list')}}">Admin Section<span class="glyphicon glyphicon-home pull-right"></span></a></li>
                                                      <li class="divider"></li>
                                                    @endif
                                                    <li><a href="{{route('createTest')}}">Add new Test <span class="glyphicon glyphicon-plus pull-right"></span></a></li>

                                                    <li class="divider"></li>
                                                    <li><a href="{{route('list_history')}}">
                                                            History <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="{{route('AccountSettings')}}">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="{{route('changePassword')}}">
                                                     Change Password <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="{{ url('/logout') }}">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                                                </ul>
                                            </li>
                                    </ul>

                                        @else

                                          <ul class="nav nav-pills pull-right" style="padding-top: 5px">
                                            <li role="presentation" class="active"><a href="{{ url('/login') }}">Login</a></li>
                                            <li role="presentation" class="active"><a href="{{ url('/register') }}">Register</a></li>
                                          </ul>

                                    </div>
                                @endif


                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
         </div>
</div>
