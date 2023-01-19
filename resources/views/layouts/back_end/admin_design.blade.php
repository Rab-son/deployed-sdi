<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('title','SDI | Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front_end/img/logo.png')}}" />
    <meta name="description" content="SDI Dashboard">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{asset('back_end/assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('back_end/assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        @include('layouts.back_end.admin_header')
        <div class="app-main">
            @include('layouts.back_end.admin_sidebar') 
        <div class="app-main__outer">
            @yield('content')
            
            @include('layouts.back_end.admin_footer')  
        </div>
        </div>
    </div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>

<script>
$(document).ready(function () {
//change selectboxes to selectize mode to be searchable
   $("select").select2();
});
</script>





<script type="text/javascript" src="{{asset('back_end/assets/scripts/main.js')}}"></script>
<script type="text/javascript" src="{{asset('back_end/assets/scripts/validation.js')}}"></script> <!-- New-->

</body>
</html>
