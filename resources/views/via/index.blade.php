<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('')}}assets4/img/favicon.png" rel="icon">
  <link href="{{ asset('')}}assets4/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('')}}assets4/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('')}}assets4/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('')}}assets4/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('')}}assets4/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('')}}assets4/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('')}}assets4/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('')}}assets4/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('')}}assets4/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.blade.php" class="logo d-flex align-items-center">
        <img src="{{ asset('')}}assets4/img/logo.png" alt="">
        <span class="d-none d-lg-block">SIPEKA Persadistik</span>
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
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

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
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('')}}assets4/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

           

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.blade.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="components-pengajuan.blade.php">
                    <i class="bi bi-circle"></i><span>Pengajuan</span>
                </a>
            </li>
            <li>
                <a href="components-pengaduan.blade.php">
                    <i class="bi bi-circle"></i><span>Pengaduan</span>
                </a>
            </li>
        </ul>
    </li><!-- End Components Nav -->
    

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Agenda</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-project.blade.php">
              <i class="bi bi-circle"></i><span>Project</span>
            </a>
          </li>
          </li>
            <a href="tables-progres.blade.php">
              <i class="bi bi-circle"></i><span>Progres</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            
            <a href="charts-diterima.blade.php">
              <i class="bi bi-circle"></i><span>Diterima</span>
            </a>
          </li>
          <li>
            <a href="charts-ditolak.blade.php">
              <i class="bi bi-circle"></i><span>Ditolak</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#settings-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear"></i><span>Pengaturan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="settings-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="users-profile.blade.php">
              <i class="bi bi-person" style="font-size: 1rem;"></i><span>Profile</span>
            </a>
          </li>
          <li>
            <a href="pages-logout.blade.php">
              <i class="bi bi-box-arrow-right" style="font-size: 1rem;"></i><span>Log Out</span>
            </a>
          </li>
        </ul>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard Persandian</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <div class="row">
              <!-- Pengguna Card -->
              <div class="col-xxl-6 col-md-6 mb-4"> <!-- Mengatur menjadi 6 kolom untuk 2 kartu dalam satu baris -->
                <div class="card info-card sales-card h-100"> <!-- Menambahkan h-100 untuk tinggi yang sama -->
            
                  <div class="filter"></div>
            
                  <div class="card-body">
                    <h5 class="card-title">Pengguna</h5>
            
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>12</h6>
                        <span class="text-success small pt-1 fw-bold">2</span>
                        <span class="text-muted small pt-2 ps-1">Pengguna Baru</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Pengguna Card -->
            
              <!-- Pengaduan Card -->
              <div class="col-xxl-6 col-md-6 mb-4"> <!-- Mengatur menjadi 6 kolom untuk 2 kartu dalam satu baris -->
                <div class="card info-card revenue-card h-100"> <!-- Menambahkan h-100 untuk tinggi yang sama -->
            
                  <div class="filter"></div>
            
                  <div class="card-body">
                    <h5 class="card-title">Pengaduan</h5>
            
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-envelope"></i>
                      </div>
                      <div class="ps-3">
                        <h6>14</h6>
                        <span class="text-success small pt-1 fw-bold">4</span>
                        <span class="text-muted small pt-2 ps-1">Pengaduan Baru</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Pengaduan Card -->
            
              <!-- Projek Card -->
              <div class="col-xxl-6 col-md-6 mb-4"> <!-- Mengatur menjadi 6 kolom untuk 2 kartu dalam satu baris -->
                <div class="card info-card customers-card h-100"> <!-- Menambahkan h-100 untuk tinggi yang sama -->
            
                  <div class="filter"></div>
            
                  <div class="card-body">
                    <h5 class="card-title">Projek</h5>
            
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-files"></i>
                      </div>
                      <div class="ps-3">
                        <h6>5</h6>
                        <span class="text-danger small pt-1 fw-bold">4</span>
                        <span class="text-muted small pt-2 ps-1">Projek Baru</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Projek Card -->
            
             <!-- Laporan Card -->
<div class="col-xxl-6 col-md-6 mb-4">
  <div class="card info-card customers-card h-100">
    <div class="filter"></div>

    <div class="card-body">
      <h5 class="card-title">Laporan</h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-folder" style="color: purple;"></i> <!-- Ubah warna ikon menjadi ungu -->
        </div>
        <div class="ps-3">
          <h6>14</h6>
          <span class="text-danger small pt-1 fw-bold">4</span>
          <span class="text-muted small pt-2 ps-1">Laporan Baru</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Laporan Card -->

            </div>
            
         

      </div>
    </section>

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('')}}assets4/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('')}}assets4/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('')}}assets4/vendor/chart.js/chart.umd.js"></script>
  <script src="{{ asset('')}}assets4/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('')}}assets4/vendor/quill/quill.js"></script>
  <script src="{{ asset('')}}assets4/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('')}}assets4/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('')}}assets4/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('')}}assets4/js/main.js"></script>

</body>

</html>