<?php
/**
 * Created by PhpStorm.
 * User: DucHai
 * Date: 09/05/2017
 * Time: 10:50 CH
 */
?>
<form method="post" action="{{url('test/save')}}" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" placeholder="name" name="hello"/>
    <input type="submit" name="value" value="submit">
</form>
<script src="{{url('js/jquery-3.2.0.min.js')}}"></script>
<script>
    $(document).ready(function () {
        var a=[];
        var b={};
        var c={};
        b["id"]="5";
        b["answer"]="A";
        a.push(b);
        c["id"]="6";
        c["answer"]="B";
        a.push(c);
//        a.push("hello");
        var myJsonString = JSON.stringify(a);
       alert(myJsonString);
    });
</script>
