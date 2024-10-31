<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login sipeka</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('')}}assets5/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('')}}assets5/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('')}}assets5/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('')}}assets5/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('')}}assets5/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('')}}assets5/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('')}}assets5/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('')}}assets5/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">SIPEKA</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Masuk Ke Akun Anda</h5>
                    <p class="text-center small">Masukkann nama pengurus $ kata sandi Anda untuk masuk</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="GET" action="{{url('lai')}}">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nama pengguna</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Silahkan masukkan nama pengguna Anda.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">kata sandi</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Silahkan masukkan kata sandi Anda!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">simpan sandi</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <input type="submit" value="Login" class="btn btn-primary w-100">
                    </div>
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('')}}assets5/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('')}}assets5/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('')}}assets5/vendor/chart.js/chart.umd.js"></script>
  <script src="{{ asset('')}}assets5/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('')}}assets5/vendor/quill/quill.js"></script>
  <script src="{{ asset('')}}assets5/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('')}}assets5/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('')}}assets5/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('')}}assets5/js/main.js"></script>

</body>

</html>