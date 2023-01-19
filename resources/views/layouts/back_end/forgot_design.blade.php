<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('../assets/images/favicon.png')}}"/>
  <title>
  @yield('title','SDI | Registration')
  </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link id="pagestyle" href="{{asset('front/assets/css/argon-dashboard.css?v=2.0.2')}}" rel="stylesheet" />
</head>
<body class="">
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-primary" href="#">
              SDI Dashboard | Forgot Password
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                  <a class="nav-link me-2" href="{{ url('/front/user-register') }}">
                    <i class="fas fa-key opacity-6 text-primary me-1"></i>
                    <span class="text-primary"> Sign Up </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="{{ url('/front/login') }}">
                    <i class="fas fa-user-circle opacity-6 text-primary me-1"></i>
                    <span class="text-primary"> Sign In </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
</div>
@yield('content')

 
<!--   Core JS Files   -->
<script src="{{asset('front/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('front/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('front/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('front/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<script src="{{asset('front/assets/js/argon-dashboard.min.js?v=2.0.2')}}"></script>
</body>
</html>


