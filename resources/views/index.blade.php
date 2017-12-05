<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/css/css-homepage/myquiz.css">

    <link rel="stylesheet" href="public/css/my.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="public/css/css-homepage/biencss.css">


    <!-- <link rel="stylesheet" href="public/css/shop-homepage.css"> -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<!-- CSS
================================================== -->

</head>

<body id="body" style="background-image: url(public/upload/bg1.png);">

     @include('layout.header')

     @yield('content')

     @include('layout.footer')

    <script src="js/jquery.js"></script>


     <script src="{{ asset('public/js/js-homepage/jquery-3.1.1.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('public/js/js-homepage/bienjs.js') }}"></script>


</body>


</html>
