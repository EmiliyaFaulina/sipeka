@extends('layouts/admin')
 
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard persandian</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<!-- Welcome Message for Admin with Scrolling Animation -->
<div id="welcomeMessage" class="custom-alert mt-4 scrolling-text" role="alert">
    <!-- Message will be injected here by JavaScript -->
</div>

<style>
    /* Custom styling for welcome message with gradient background */
    .custom-alert {
        background: linear-gradient(90deg, #e0f7fa, #007bff); /* Gradien dari putih ke biru */
        color: #fff; /* Warna teks putih untuk kontras */
        padding: 15px;
        border-radius: 5px;
        font-weight: bold;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan untuk efek lebih menonjol */
    }

    /* CSS for continuous scrolling text */
    .scrolling-text {
        white-space: nowrap;
        overflow: hidden;
        position: relative;
    }

    .scrolling-text span {
        display: inline-block;
        padding-right: 100%;
        animation: scroll-left 15s linear infinite;
    }

    @keyframes scroll-left {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }
</style>

<script>
    // Assume the admin name is retrieved from the server or a variable
    const adminName = "Persandian dan Statistik";  // You can dynamically set this value

    // Inject the welcome message with scrolling span element
    document.getElementById("welcomeMessage").innerHTML = `<span>Selamat datang, admin ${adminName}!</span>`;
</script>


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
            <div class="col-xxl-6 col-md-6 mb-4"> <!-- Mengatur menjadi 6 kolom untuk 2 kartu dalam satu baris -->
              <div class="card info-card customers-card h-100"> <!-- Menambahkan h-100 untuk tinggi yang sama -->
          
                <div class="filter"></div>
          
                <div class="card-body">
                  <h5 class="card-title">Laporan</h5>
          
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-folder"></i>
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

@endsection
 
 