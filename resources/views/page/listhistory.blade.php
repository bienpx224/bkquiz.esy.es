@extends('index')
@section('content')
<div class="container" style='min-height: 400px;color:white;'>
	<div class="row">
		<div class="col-md-12" style="margin-top:80px">
			<h2>Lịch Sử</h2>
			  <p>Dưới đây là lịch sử trả lời quiz của bạn :</p>            
			  <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Ngày Tháng</th>
			        <th>Bài trắc nghiệm</th>
			        <th>Số câu trả lời đúng</th>
			      </tr>
			    </thead>
			    <tbody>
			    @foreach($data as $item)
			      <tr>
			        <td>{!! $item->	test_time !!}</td>
			        <td>{!! $item->title !!}</td>
			        <td>{!! $item->	right_answer !!}</td>
			      </tr>
			    @endforeach
			    </tbody>
			  </table>
		</div>
	</div>
</div>
@endsection