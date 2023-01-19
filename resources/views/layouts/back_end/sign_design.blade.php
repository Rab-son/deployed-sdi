<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('title','SDI | Administrator')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('../assets/images/favicon.png')}}"/>
    <meta name="description" content="SDI Dashboard">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{asset('back_end/assets/css/main.css')}}" rel="stylesheet"></head>
<body>

<div class="app-container app-theme-white body-tabs-shadow">
<div class="app-container">
<div class="h-100 bg-success bg-animation">
@yield('content')
</div>
</div>
</div>

 
<script type="text/javascript" src="{{asset('back_end/assets/scripts/main.d810cf0ae7f39f28f336.js')}}"></script>

</body>
</html>


