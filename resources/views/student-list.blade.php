<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sinhvien_list</title>
  </head>
  <body>
    List of all student in table below!!
    <table width="500px" border="1">
      <tr>
        <th>ID</th>
        <th>NameStudent</th>
        <th>Class</th>
        <th>Address</th>
        <td><a href="{{route('insertStd')}}"> Insert</a></td>
      </tr>
@foreach($data as $item)
      <tr>
        <td>{!! $item['Id'] !!} </td>
        <td>{!! $item['HoTen'] !!}</td>
        <td>{!! $item['LopHoc'] !!}</td>
        <td>{!! $item['DiaChi'] !!}</td>
        <td>
          <a href="{{route('update', ['id'=>$item['Id']])}}">
          <input type="button" id="update" value="Update Std"  /></a>
          <a href="{{route('delete', ['id'=>$item['Id']])}}">
          <input type="button" id="delete" value="Delete std" onclick="return confirm('Are you really to delete it!!!');" />
          </a>
        </td>
      </tr>
      @endforeach
    </talbe>
  </body>
</html>
