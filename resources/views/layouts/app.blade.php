<!DOCTYPE html>
<html lang="en">

<head>
  
  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top border-bottom shadow-sm">

    

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{route('homeLogin')}}" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <div class="d-inline">
            <div class="logo mt-3">
                <h1 class="sitename">SIPEKA</h1>
            </div>
            <div class="slogan" style="margin-top: -20px">
                <br>
                <span>Sistem Pelayanan Komunikasi Informatika Barito Kuala</p>
            </div>
          </div>
        </a>
      </a>
      
        <nav id="navmenu" class="navmenu">
          <ul>
            <div class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">e-Government</a>
              <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                  <a href="{{url('egov')}}" class="dropdown-item">Buat Laporan</a>
                  <a href="team.html" class="dropdown-item">Lihat Laporan</a>
              </div>
           </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">InKoP</a>
              <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                  <a href="{{url('inkop')}}" class="dropdown-item">Buat Laporan</a>
                  <a href="team.html" class="dropdown-item">Lihat Laporan</a>
              </div>
           </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Persandistik</a>
              <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                  <a href="{{url('persandistikk')}}" class="dropdown-item">Buat Laporan</a>
                  <a href="team.html" class="dropdown-item">Lihat Laporan</a>
              </div>
           </div>
            {{-- <li><a href="{{ url('inkop') }}">InKop</a></li>
            <li><a href="{{ url('persandistik') }}">Persandistik</a></li>
            <li><a href="#kesekretariatan">Kesekretariatan</a></li> --}}
            
            <li class="nav-item dropdown pe-3">

              <a class="nav-link nav-profile d-flex align-items-center pe-0  disabled" data-bs-toggle="dropdown">
                {{-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
                <span class="d-none d-md-block dropdown-toggle ps-2">{{session('username')}}</span>
              </a><!-- End Profile Image Icon -->
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                  <h6>{{session('username')}}</h6>
                  <span>Web Designer</span>
                  <a href="{{url('profil')}}" class="dropdown-item">Lihat Profil</a>
                  <a href="{{url('logout ')}}" class="dropdown-item">Log Out</a>
                 </li>
                 <li>
                  <hr class="dropdown-divider">
                 </li>
              </ul>
            </li>
            
          
        

      </div>

    </div>

  </header>

  @yield('content')
  
 
 

  
  <!-- Preloader -->
  {{-- <div id="preloader"></div> --}}

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>