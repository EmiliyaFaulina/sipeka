<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sipeka - Sistem pelayanan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('')}}assetshome/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('')}}assetshome/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('')}}assetshome/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('')}}assetshome/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('')}}assetshome/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('')}}assetshome/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <h2 class="text-white fw-bold m-0">SIPEKA</h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Jl. Jend Sudirman No.74, Ulu Benteng</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>info@example.com</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+(0511) 6701166</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0">GrowMark</h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">e-Government</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="feature.html" class="dropdown-item">Smart Presensi</a>
                                <a href="team.html" class="dropdown-item">Jaringan</a>
                                <a href="quote.html" class="dropdown-item">Tentang e-Gov</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">InKop</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="feature.html" class="dropdown-item">Penyebarluasan Informasi</a>
                                <a href="team.html" class="dropdown-item">Dokumentasi Acara</a>
                                <a href="testimonial.html" class="dropdown-item">Tentang InKop</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Persandistik</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="feature.html" class="dropdown-item">Smart Presensi</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kesekretariatan</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="feature.html" class="dropdown-item">Link sistem pengajuan magang</a>
                            </div>
                        </div>
                        </div>

                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="{{url('register')}}" class="btn btn-primary rounded-pill py-2 px-3">Buat Akun</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('')}}assetshome/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">Welcome to SIPEKA
                                        <p class="fs-5 text-white animated slideInRight">Sistem Pelayanan Komunikasi Informatika Barito Kuala. Sistem Pelayanan ini untuk mempermudah interaksi Anda dengan kami dan memastikan kebutuhan Anda terpenuhi dengan efisien.</p>
                                        </h1>
                                    <a href="{{url('login')}}"class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Login</a>     
                                </div>
                            </div>
                        </div>
                    </div>
                
                            </div>
                        </div>
                    </div>
                </div>
            
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 450px;">
                <h1 class="display-5 mb-5">SIPEKA</h1>
                <p class="fs-5 fw-medium text-primary">Sistem Pelayanan Komunikasi Informatika Barito Kuala</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('')}}assetshome/img/icon/icon-5.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">e-Government</h4>
                                <p class="mb-0">e-Government atau Pemerintahan Elektronik adalah 
                                    upaya pemerintah untuk memanfaatkan teknologi informasi 
                                    dan komunikasi(TIK) dalam penyelenggaraan pemerintahan.
                                    e-Government bertujuan untuk meningkatkan kualitas pelayanan
                                    -publik, efisiensi, efektivitas, transparansi, dan akuntabilitas. </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('')}}assetshome/img/icon/icon-6.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">InKop</h4>
                                <p class="mb-0">Informasi dan Komunikasi Publik (IKP) adalah suatu unit fungsional 
                                    dalam departemen/Kementrian KOMINFO yang mempunyai tanggung jawab utama dalam mengelola Informasi dan Komunikasi publik.
                                    InKoP Bertujuan menjadi pusat komunikasi yang efektif, transparan, dan responsif terhadap kebutuhan informasi Masyarakat.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('')}}assetshome/img/icon/icon-7.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Persandistik</h4>
                                <p class="mb-0">Statistik Persandian dalam bidang KOMINFO adalah suatu cabang pekerjaan yang mengjalankan fungsi-fungsi tertentu untuk meningkatkan efektivitas komunikasi dan informasi publik.
                                    Statistik Persandian bertujuan untuk meningkatkan integritas dan kejelasan komunikasi publik melalui pengelolaan data yang efektiv dan strategis.</p>
                        </div>
                
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('')}}assetshome/img/icon/icon-8.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Kesekretariatan</h4>
                                <p class="mb-0">Link sistem pengajuan magang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Kantor Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Jend Sudirman No.74, Ulu Benteng, 
                                                                            Kec. Marabahan, Kabupaten Barito Kuala, 
                                                                            Kalimantan Selatan 70513</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+(0511) 6701166</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Jam Kerja</h4>
                    <p class="mb-1">Senin - Kamis </p>
                    <h6 class="text-light">08:00 - 16:30</h6>
                    <p class="mb-1">Jum'at</p>
                    <h6 class="text-light">08:00 - 11:00</h6>
                    <p class="mb-1">Sabtu - Minggu</p>
                    <h6 class="text-light">Tutup</h6>
                </div>  
               
                
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('')}}assetshome/lib/wow/wow.min.js"></script>
    <script src="{{ asset('')}}assetshome/lib/easing/easing.min.js"></script>
    <script src="{{ asset('')}}assetshome/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('')}}assetshome/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('')}}assetshome/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('')}}assetshome/js/main.js"></script>
</body>

</html>