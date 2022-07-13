<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="Jmmk">
  
  <title>SSASTUMSA</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/favicon1.ico')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/owl-carousel/owl.carousel.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/nice-select/css/nice-select.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/fancybox/css/jquery.fancybox.min.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/virtual.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/minibar.virtual.css')}}">
</head>
<body class="theme-red">

  <!-- Minibar -->
  <div class="minibar">
    <div class="header">
      <div class="brand">
        
      </div>
    </div>
    <div class="content">
      <ul class="main-menu">
        <li class="menu-item active">
          <a href="{{route('index')}}" class="menu-link">
            <span class="icon ti-home"></span>
            <span class="caption">Home</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  
  <div class="vg-main-wrapper">
    @yield('label1')
  </div> <!-- End main wrapper -->

  
  
  <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
  
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  
  <script src="{{asset('assets/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
  
  <script src="{{asset('assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  
  <script src="{{asset('assets/vendor/isotope/isotope.pkgd.min.js')}}"></script>
  
  <script src="{{asset('assets/vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>
  
  <script src="{{asset('assets/vendor/fancybox/js/jquery.fancybox.min.js')}}"></script>

  <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

  <script src="{{asset('assets/vendor/animateNumber/jquery.animateNumber.min.js')}}"></script>

  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  
  <script src="{{asset('assets/js/google-maps.js')}}"></script>
  
  <script src="{{asset('assets/js/minibar-virtual.js')}}"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>