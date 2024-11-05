<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('')}}assets5/img/favicon.png" rel="icon">
  <link href="{{ asset('')}}assets5/img/apple-touch-icon.png" rel="apple-touch-icon">

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
                  <img src="{{ asset('')}}assets5/img/logo.png" alt="">
                  <span class="d-none d-lg-block"></span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                    <p class="text-center small">Masukkan detail pribadi Anda untuk membuat akun</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('Registrasi')}}">
                    @csrf
                    <input type="hidden" name="role" value="pengguna">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Silahkan, masukkan nama Anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Silahkan masukkan email yang valid address!</div>
                    </div>

                    <div class="col-12 mt-3">
                      <label for="yourPassword" class="form-label">Kata sandi</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Silahkan masukkan kata sandi Anda!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Saya setuju dan menerima <a href="#">syarat dan ketentuan</a></label>
                        <div class="invalid-feedback">Anda harus setuju sebelum mengirimkan.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <input type="submit" value="Buat Akun" class="btn btn-primary w-100">
                    </div>

                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
          
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