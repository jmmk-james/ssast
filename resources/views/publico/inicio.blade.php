<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="Jmmk">
  
  <title>SSASTUMSA</title>

  <link rel="shortcut icon" href="{{asset('assets/favicon1.ico')}}" type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/owl-carousel/owl.carousel.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/nice-select/css/nice-select.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/fancybox/css/jquery.fancybox.min.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/virtual.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/topbar.virtual.css')}}">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
    
  <div class="vg-page page-home" id="home" style="background-image: url({{asset('assets/img/bg_image_1.jpg')}})">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">SSA-STUMSA</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-animate="scrolling">STUMSA</a>
            </li>
            <li class="nav-item">
              <a href="#portfolio" class="nav-link" data-animate="scrolling">Ganadores</a>
            </li>
          </ul>
          <ul class="nav ml-auto">
            <li class="nav-item">
              <a href="{{route('sesion')}}" class="btn btn-danger btn-block">Ingresar</a>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Sistema de Sorteo Aleatorio</h5>
      <h1 class="fw-light mb-4">S<b class="fg-theme">T</b> UMSA</h1>
      <div class="badge">SSAST</div>
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>
  
  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="img-place wow fadeInUp">
            <img src="{{asset('assets/img/stumsa.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight">
          <h1 class="fw-light">STUMSA</h1>
          <h5 class="fg-theme mb-3">Sindicato de Trabajadores de la UMSA</h5>
          <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form but the majority have suffered alteration in some</p>
          <ul class="theme-list">
            <li><b>From:</b> Texas, US</li>
            <li><b>Lives In:</b> Texas, US</li>
            <li><b>Age:</b> 25</li>
            <li><b>Gender:</b> Male</li>
          </ul>
          <button class="btn btn-theme-outline">2022</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Portfolio page -->
  <div class="vg-page page-portfolio" id="portfolio">
    <div class="container">
      <h1 class="text-center fw-normal wow fadeInUp">Ganadores</h1>
      
      <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>ITEM</th>
                <th>C.I.</th>
                <th>Nombre</th>
                <th>Premio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0;?>
            @foreach($lista_ganador as $value)
            <?php $i=$i+1;?>
            <tr>
                <td>{{$i}}</td>
                <td>{{$value->item}}</td>
                <td>{{$value->ci}}</td>
                <td>{{$value->nombre}} {{$value->paterno}} {{$value->materno}}</td>
                <td>{{$value->premio}}</td>
                <td><img src="{{asset('storage/premio/'.$value->imagen)}}" width="100px" height="100px" ></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
  </div> <!-- End Portfolio page -->

  <!-- Footer -->
  <div class="vg-footer">
    <h1 class="text-center">STUMSA</h1>
    <h3 class="text-center">2022</h3>
  </div> <!-- End footer -->
  
  
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
    
  <script src="{{asset('assets/js/topbar-virtual.js')}}"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>