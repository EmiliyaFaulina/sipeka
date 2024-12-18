<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIPEKA- Sistem Pelayanan Komunikasi Informatika Barito Kuala</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('')}}assets2/img/favicon.png" rel="icon">
  <link href="{{ asset('')}}assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('')}}assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('')}}assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('')}}assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('')}}assets2/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('')}}assets2/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('')}}assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('')}}assets2/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('')}}assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
    <!-- CSS untuk memberikan warna pada header -->
    <style>
      /* Warna latar belakang header */
      #header {
        background-color: #70a0d2; /* Ganti warna ini sesuai keinginan */
        color: white; /* Warna teks dalam header */
      }
  
      /* Warna untuk teks dan ikon di dalam header */
      #header .nav-link,
      #header .nav-icon i,
      #header .dropdown-toggle {
        color: white;
      }
  
      /* Warna untuk ikon notifikasi dan profile saat dihover */
      #header .nav-link:hover,
      #header .nav-icon:hover i,
      #header .dropdown-toggle:hover {
        color: #dbedff;
      }
  
      /* Warna background untuk dropdown menu di dalam header */
      .dropdown-menu {
        background-color: #c4d9ec;
      }
  
      /* Warna teks dan ikon dalam dropdown */
      .dropdown-menu a {
        color: white;
      }
  
      /* Warna saat item dropdown dihover */
      .dropdown-menu a:hover {
        background-color: #4790dd;
        color: #cce5ff;
      }
    </style>
  </head>
  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="{{url('lai')}}" class="logo d-flex align-items-center">
          <img src="{{ asset('')}}assets2/img/logo.png" alt="">
          <span class="d-none d-lg-block">SIPEKA</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->
  
      <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div><!-- End Search Bar -->
  
      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
              <i class="bi bi-search"></i>
            </a>
          </li><!-- End Search Icon -->
  
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">4</span>
            </a><!-- End Notification Icon -->
  
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
              <li class="dropdown-header">
                You have 4 new notifications
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
              </li>
              <li><hr class="dropdown-divider"></li>
  
              <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>30 min. ago</p>
                </div>
              </li>
  
              <li><hr class="dropdown-divider"></li>
  
              <li class="notification-item">
                <i class="bi bi-x-circle text-danger"></i>
                <div>
                  <h4>Atque rerum nesciunt</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>1 hr. ago</p>
                </div>
              </li>
  
              <li><hr class="dropdown-divider"></li>
  
              <li class="notification-item">
                <i class="bi bi-check-circle text-success"></i>
                <div>
                  <h4>Sit rerum fuga</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>2 hrs. ago</p>
                </div>
              </li>
  
              <li><hr class="dropdown-divider"></li>
  
              <li class="notification-item">
                <i class="bi bi-info-circle text-primary"></i>
                <div>
                  <h4>Dicta reprehenderit</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>4 hrs. ago</p>
                </div>
              </li>
  
              <li><hr class="dropdown-divider"></li>
              <li class="dropdown-footer">
                <a href="#">Show all notifications</a>
              </li>
            </ul><!-- End Notification Dropdown Items -->
          </li><!-- End Notification Nav -->
  
          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="{{ asset('')}}assets2/img/laila.png" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2">{{session('role')}}</span>
            </a><!-- End Profile Image Icon -->
  
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6>Kevin Anderson</h6>
                <span>Web Designer</span>
              </li>
              <li><hr class="dropdown-divider"></li>
            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->
        </ul>
      </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->
  </body>
  </html>
  

 <!-- ======= Sidebar ======= -->
 {{-- <option value="E-Government">E-Government</option>
 <option value="IKP">IKP</option>
 <option value="Persandian">Persandian</option>
 <option value="Kesekretariatan">Kesekretariatan</option> --}}
 @if(session('role') == 'E-Government')
  <x-lailasidebar></x-lailasidebar>
 @elseif(session('role') == 'IKP')
 <x-emiliyasidebar></x-emiliyasidebar>
 @elseif(session('role') == 'Persandian')
 <x-viasidebar></x-viasidebar>

 @endif
 {{-- <aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
    
      <li class="nav-item"> 
          <a class="nav-link text-black" href="{{url('lai')}}">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
          </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
          <a class="nav-link collapsed text-black" data-bs-target="#pengajuan-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="pengajuan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="{{url('via/Pengajuan')}}" class="text-black">
                      <i class="bi bi-circle"></i><span>Pengajuan</span>
                  </a>
              </li>
          </ul>
      </li><!-- End Pengajuan Nav -->

      <li class="nav-item">
          <a class="nav-link collapsed text-black" data-bs-target="#agenda-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-layout-text-window-reverse"></i><span>Agenda</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="agenda-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{url('emiliya/project')}}" class="text-black">
                  <i class="bi bi-circle"></i><span>Project</span>
              </a> 
              </li>
          </ul>
      </li><!-- End Agenda Nav -->

      <li class="nav-item">
          <a class="nav-link collapsed text-black" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-bar-chart"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="laporan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="{{url('diterima')}}" class="text-black">
                      <i class="bi bi-circle"></i><span>Diterima</span>
                  </a>
              </li>
              <li>
              </li>
          </ul>
      </li><!-- End Laporan Nav -->

      <li class="nav-heading text-muted">Pages</li>

      <li class="nav-item">
          <a class="nav-link collapsed text-black" href="{{url('lai/profil')}}">
              <i class="bi bi-person"></i>
              <span>Profile</span>
          </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
          <a class="nav-link collapsed text-black" href="{{url('login-admin')}}">
              <i class="bi bi-box-arrow-in-right"></i>
              <span>Logout</span>
          </a>
      </li><!-- End Logout Page Nav -->


        {{-- <a class="nav-link collapsed text-black" href="pages-logout.html">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Logout</span>
        </a>
    </li><!-- End Logout Page Nav -->


  </ul>

</aside><!-- End Sidebar --> --}}

  {{-- content --}}
  @yield('content')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('')}}assets2/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('')}}assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('')}}assets2/vendor/chart.js/chart.umd.js"></script>
  <script src="{{ asset('')}}assets2/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('')}}assets2/vendor/quill/quill.js"></script>
  <script src="{{ asset('')}}assets2/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('')}}assets2/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('')}}assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('')}}assets2/js/main.js"></script>

</body> 

</html>