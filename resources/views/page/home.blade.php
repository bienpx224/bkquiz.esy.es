@extends('index')
@section('title')
  HomePage
@endsection
@section('content')

         <!-- Page Content -->
    <div class="container">
         <div class="row">
	         <div class="col-md-14" style="margin-top:50px">
			         	<div id="carousel-id" class="carousel slide" data-ride="carousel">
			         		<ol class="carousel-indicators">
			         			<li data-target="#carousel-id" data-slide-to="0" class=""></li>
			         			<li data-target="#carousel-id" data-slide-to="1" class="active"></li>
                    <li data-target="#carousel-id" data-slide-to="2" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="3" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="4" class=""></li>
			         		</ol>
			         		<div class="carousel-inner">
			         			<div class="item">
			         				<img class="img-thumbnail" src="{{'public/image/1.jpg'}}" width="100%">

			         			</div>

			         			<div class="item">
			         				<img src="{{'public/image/sport.jpg'}}" width="100%">

			         			</div>
                    <div class="item">
			         				<img class="img-thumbnail" src="{{'public/image/math.jpg'}}" width="100%">

			         			</div>
                    <div class="item">
			         				<img class="img-thumbnail" src="{{'public/image/dialy.jpg'}}" width="100%">

			         			</div>
                    <div class="item active">
			         				<img class="img-thumbnail" src="{{'public/image/history.jpg'}}" width="100%">

			         			</div>
			         		</div>
			         		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			         		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			         	</div>
                        <div class="space20" style="height: 20px"></div>



                    <div class="row main-left">

			         	    @include('layout.Menu')
                    @include('page.hotnews')
                    @if($topicsHis)
                      @include('page.history')
                    @endif
		                @include('page.math')
		                @include('page.dialy')
		                @include('page.Van')
		                @include('page.KHXH')
                    @if($topicsSport)
		                  @include('page.Sport')
                    @endif


				            </div>
			        	</div><!--end-col-md-9-->
			        </div>
	         </div>
	            <!-- end col-md-12 -->
         </div>


    </div>



@endsection
