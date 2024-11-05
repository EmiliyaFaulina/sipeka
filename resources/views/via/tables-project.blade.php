
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
        <a class="nav-link collapsed" href="index.blade.php">
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
        </li>
            <a href="components-pengaduan.blade.php">
              <i class="bi bi-circle"></i><span>Pengaduan</span>
            </a>
          </li>
          <li>
           
        </ul>
      </li><!-- End Components Nav -->

     
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Agenda</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
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
            <a href="charts-ditolak.blade,php">
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
      <!-- End Charts Nav -->

     
    </ul>

  </aside><!-- End Sidebar-->

  @extends('layouts/admin')
 
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Project</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
        <li class="breadcrumb-item">Agenda</li>
        <li class="breadcrumb-item active">Project</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>No. Kode</th>
                  <th>Pengaju</th>
                  <th>Tanggal</th>
                  <th>Nama Project</th>
                  <th>Jenis Platform</th>
                  <th>Tenggat Waktu</th>
                  <th>Detail</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>001</td>
                  <td>Unity Pugh</td>
                  <td>2024-10-01</td>
                  <td>Project A</td>
                  <td>Web</td>
                  <td>2024-10-30</td>
                  <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal001">Detail</button></td>
                </tr>
                <tr>
                  <td>002</td>
                  <td>Theodore Duran</td>
                  <td>2024-10-05</td>
                  <td>Project B</td>
                  <td>Mobile</td>
                  <td>2024-11-15</td>
                  <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal002">Detail</button></td>
                </tr>
                <tr>
                  <td>003</td>
                  <td>Kylie Bishop</td>
                  <td>2024-10-10</td>
                  <td>Project C</td>
                  <td>Desktop</td>
                  <td>2024-12-01</td>
                  <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal003">Detail</button></td>
                </tr>
                <tr>
                  <td>004</td>
                  <td>Zelenia Roman</td>
                  <td>2024-10-12</td>
                  <td>Project D</td>
                  <td>Web</td>
                  <td>2024-11-30</td>
                  <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal004">Detail</button></td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

 <!-- Modal Project: Sistem Pelayanan Kominfo-->
<div class="modal fade" id="detailModal001" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <img src="{{ asset('')}}assets3/img/pengguna.jpeg" alt="Foto Pengguna" class="rounded-circle" width="50">
        <div class="ms-2">
          <h6 class="mb-0">Unity Pugh</h6>
          <small>Nama Project : Project A</small>
        </div>
      </div>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="row">
        <!-- Tahap Perencanaan -->
        <div class="col-6">
          <h6>A. Tahap Perencanaan</h6>
          <ul class="list-unstyled">
            <li><input type="checkbox" disabled id="identifikasiView"> Identifikasi Kebutuhan</li>
            <li><input type="checkbox" disabled id="analisisView"> Analisis Pengguna</li>
            <li><input type="checkbox" disabled id="teknologiView"> Penentuan Teknologi</li>
            <li><input type="checkbox" disabled id="wireframeView"> Membuat Wireframe</li>
          </ul>
        </div>
        <!-- Tahap Desain -->
        <div class="col-6">
          <h6>B. Tahap Desain</h6>
          <ul class="list-unstyled">
            <li><input type="checkbox" disabled id="antarmukaView"> Desain Antarmuka Pengguna</li>
            <li><input type="checkbox" disabled id="pengalamanView"> Desain Pengalaman Pengguna</li>
            <li><input type="checkbox" disabled id="validasiView"> Revisi dan Validasi Desain</li>
            <li><input type="checkbox" disabled> ...</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="modal-footer d-flex justify-content-between">
      <button class="btn btn-primary" id="updateProgressButton">Update Progres</button>
      <div class="d-flex">
        <button class="btn btn-outline-primary me-2" id="bagikan">Bagikan (PDF)</button>
        <button class="btn btn-outline-primary me-2" id="unduh">Unduh (PDF)</button>
        <button class="btn btn-outline-primary" id="simpan">Simpan</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal untuk Update Progres -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="updateModalLabel">Update Progres Project</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h6>A. Tahap Perencanaan</h6>
      <ul class="list-unstyled">
        <li><input type="checkbox" id="checkIdentifikasi"> Identifikasi Kebutuhan</li>
        <li><input type="checkbox" id="checkAnalisis"> Analisis Pengguna</li>
        <li><input type="checkbox" id="checkTeknologi"> Penentuan Teknologi</li>
        <li><input type="checkbox" id="checkWireframe"> Membuat Wireframe</li>
      </ul>
      <h6>B. Tahap Desain</h6>
      <ul class="list-unstyled">
        <li><input type="checkbox" id="checkAntarmuka"> Desain Antarmuka Pengguna</li>
        <li><input type="checkbox" id="checkPengalaman"> Desain Pengalaman Pengguna</li>
        <li><input type="checkbox" id="checkValidasi"> Revisi dan Validasi Desain</li>
      </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="saveProgres">Simpan Progres</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {

    // Fungsi untuk membuka modal Update Progres
    document.getElementById('updateProgressButton').addEventListener('click', function () {
      var updateModal = new bootstrap.Modal(document.getElementById('updateModal'));
      updateModal.show();
    });

    // Fungsi Simpan Progres
    document.getElementById('saveProgres').addEventListener('click', function () {
      // Lakukan logika penyimpanan progres di sini, misalnya dengan AJAX
      alert('Progres berhasil disimpan!');
      var updateModal = bootstrap.Modal.getInstance(document.getElementById('updateModal'));
      updateModal.hide();
    });

    // Fungsi Bagikan sebagai PDF
    document.getElementById('bagikan').addEventListener('click', function () {
      generatePDF("Bagikan_Project_Detail.pdf");
    });

    // Fungsi Unduh sebagai PDF
    document.getElementById('unduh').addEventListener('click', function () {
      generatePDF("Unduh_Project_Detail.pdf");
    });

    // Fungsi untuk Simpan Progres
    document.getElementById('simpan').addEventListener('click', function () {
      alert('Data disimpan!');
      // Anda bisa menambahkan fungsi penyimpanan ke server di sini
    });

    // Fungsi untuk menghasilkan PDF
    function generatePDF(filename) {
      const { jsPDF } = window.jspdf;
      const doc = new jsPDF();

      doc.text("Detail Project", 10, 10);
      doc.text("Nama Project : Project A", 10, 20);
      doc.text("Pengaju : Unity Pugh", 10, 30);

      doc.text("Tahap Perencanaan:", 10, 40);
      doc.text("- Identifikasi Kebutuhan", 10, 50);
      doc.text("- Analisis Pengguna", 10, 60);
      doc.text("- Penentuan Teknologi", 10, 70);
      doc.text("- Membuat Wireframe", 10, 80);

      doc.text("Tahap Desain:", 10, 90);
      doc.text("- Desain Antarmuka Pengguna", 10, 100);
      doc.text("- Desain Pengalaman Pengguna", 10, 110);
      doc.text("- Revisi dan Validasi Desain", 10, 120);

      doc.save(filename);
    }
  });
</script>

  </div>
</div>
</div>




@endsection 
  