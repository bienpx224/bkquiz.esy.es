@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                     <form action="{!! route('admin.user.active') !!}" method="POST" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Active</th>
                                <th>ID</th>
                                <th>User</th>
																<th>email</th>
																<th>first-last name</th>
                                <th>Is Active</th>
                                <th>Authority</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>

                        @foreach($user as $us)
                            <tr class="odd gradeX" align="center">
                                <td><input type="checkbox" <?php if($us->is_active) echo "checked"?> name="check[]"
                                value="{{$us->user_id}}"></td>
                                <td>{{$us->user_id}}</td>
                                <td>{{$us->username}}</td>
																<td>{{$us->email}}</td>
																<td>{{$us->first_name}} - {{ $us->last_name}}</td>
                                <td align="center" <?php if($us->is_active) echo " style='color:blue'>Actived ";else echo " style='color:red'> No Active" ?></td>
                                @if($us->authority==1)<td><a href="{{route('editquyen',$us->user_id)}}" >{{$us->authority}}</a></td>
                                @else <td>{{$us->authority}}</td>
                                @endif
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa tài khoản này')" href="{{URL::route('admin.user.delete',$us->user_id)}}"> Delete</a></td>

                            </tr>
                        @endforeach
                        </tbody>
                        <tr align="center">
                                <td><input class="btn btn-primary" type="submit" name="vai" value="Active"></td>
                                <td></td><td></td><td></td><td></td>
                        </tr>
                    </table>
                    </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
 </div>
@endsection()

<script src="{{url('public/js/jquery-3.2.0.min.js')}}"></script>

<script type="text/javascript" src="{{url('public/js/mycript.js')}}"></script>
