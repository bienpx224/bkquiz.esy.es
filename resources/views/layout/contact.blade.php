@extends('index')
@section('title')
  Contact
@endsection
@section('content')
<div class="container">

        <div class="row">
                <div class="col-md-12">
	            <div class="panel panel-default" style="margin: 80px">            
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Liên hệ</h2>
	            	</div>

	            	<div class="panel-body">
	            		<!-- item -->
                        <h3><span class="glyphicon glyphicon-align-left"></span> Thông tin liên hệ</h3>
					    
                        <div class="break"></div>
					   	<h4><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </h4>
                        <p>Đại học Bách Khoa Hà Nội số 1 Đại Cồ Việt Hai Bà Trưng Hà Nội</p>

                        <h4><span class="glyphicon glyphicon-envelope"></span> Email : </h4>
                        <p>bienpx224@gmail.com </p>

                        <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : </h4>
                        <p>01647168730 </p>



                        <br><br>
                        <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
                        <div class="break"></div><br>
                        <iframe src="https://map.coccoc.com/map/156478092616389" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>
	            </div>
        	</div>
        </div> 
</div>
@endsection