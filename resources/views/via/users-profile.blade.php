<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profil Admin Persadistik</title>
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

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{ asset('')}}assets4/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{ asset('')}}assets4/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{ asset('')}}assets4/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

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

    <!-- Dashboard -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="index.blade.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <!-- Pengajuan -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="components-pengajuan.blade.php">
            <i class="bi bi-circle"></i><span>Pengajuan</span>
          </a>
       
      </ul>
    </li><!-- End Pengajuan Nav -->

    <!-- Projek -->
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

    <!-- Laporan -->
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
    </li><!-- End Laporan Nav -->

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
    <!-- End Charts Nav -->

  </ul>

</aside><!-- End Sidebar -->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="{{ asset('')}}assets4/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Kevin Anderson</h2>
              <h3>Web Designer</h3>
            
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
            <!-- Bordered Tabs -->
<ul class="nav nav-tabs nav-tabs-bordered">

  <li class="nav-item">
    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Detail Profil</button>
  </li>

  <li class="nav-item">
    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
  </li>
  
</ul>

<div class="tab-content pt-2">

  <!-- Profile Overview -->
  <div class="tab-pane fade show active" id="profile-overview">
    <h5 class="card-title">Profile Details</h5>

    <div class="row">
      <div class="col-lg-3 col-md-4 label">Nama</div>
      <div class="col-lg-9 col-md-8">Kevin Anderson</div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 label">Bidang</div>
      <div class="col-lg-9 col-md-8">Sekretariat</div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 label">Alamat</div>
      <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 label">Telepon</div>
      <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 label">Email</div>
      <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
    </div>
  </div>
  <!-- End Profile Overview -->

  <!-- Profile Edit -->
  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

    <!-- Profile Edit Form -->
    <form>
      <div class="row mb-3">
        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
        <div class="col-md-8 col-lg-9">
          <img src="{{ asset('')}}assets4/img/profile-img.jpg" alt="Profile">
          <div class="pt-2">
            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama</label>
        <div class="col-md-8 col-lg-9">
          <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
        </div>
      </div>

      <div class="row mb-3">
        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Bidang</label>
        <div class="col-md-8 col-lg-9">
          <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
        </div>
      </div>

      <div class="row mb-3">
        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
        <div class="col-md-8 col-lg-9">
          <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
        </div>
      </div>

      <div class="row mb-3">
        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Telepon</label>
        <div class="col-md-8 col-lg-9">
          <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
        </div>
      </div>

      <div class="row mb-3">
        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
        <div class="col-md-8 col-lg-9">
          <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
        </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
    </form><!-- End Profile Edit Form -->

  </div>
  <!-- End Profile Edit -->

</div><!-- End Bordered Tabs -->


 
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