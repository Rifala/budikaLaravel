<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BUDIKA - Budidaya Ikan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
</head>

<body>
   
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary">Budika</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="{{ url('/blog') }}" class="nav-item nav-link">Budidaya Ikan</a>
                        <a href="{{ url('/spk') }}" class="nav-item nav-link">Pemilihan Ikan Budidaya</a>
                        <a href="{{ url('/konsultasi') }}" class="nav-item nav-link">Konsultasi</a>
                        <a href="{{ url('/contact') }}" class="nav-item nav-link">Kontak</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


   <!-- Hero Start -->
   <div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Selamat Datang di Budika</h5>
                <h1 class="display-1 text-white mb-md-4">Konsultasi Pembudidayaan Ikan</h1>
                <div class="pt-2">
                    <a href="{{ url('pembudidaya/konsultasi') }}" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Konsultasi</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{ url('img/4.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Tentang Kami</h5>
                        <h1 class="display-4">Konsultasi dengan Ahli Perikanan</h1>
                    </div>
                    <p>Jika anda mengalami kesulitan dalam bubidaya ikan, konsultasikan masalah bubidaya ikan dengan ahli kami.
                        Kami bekerjasama dengan berbagai ahli dalam budidaya ikan. Kami juga menyediakan informasi mengenai pelelangan ikan yang sedang berjalan
                    </p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-check text-primary mb-3"></i>
                                <h6 class="mb-0">Didukung<small class="d-block text-primary">Ahli Kelautan</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-paper-plane text-primary mb-3"></i>
                                <h6 class="mb-0">Konsultasi<small class="d-block text-primary">Budidaya Ikan</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-solid fa-thumbs-up text-primary mb-3"></i>
                                <h6 class="mb-0">Rekomendasi<small class="d-block text-primary">Jenis Ikan Budidaya</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    


   

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Konsultasi</h5>
                <h1 class="display-4">Ahli Perikanan</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ url('img/5.jpg') }}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>AB. Susanto,  Dr.</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Ilmu Kelautan</h6>
                                <p class="m-0">Fak. Perikanan dan Ilmu Kelautan UNDIP</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ url('img/6.jpeg') }}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Adi Santoso,  M.Sc.</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Ilmu Kelautan</h6>
                                <p class="m-0">Fak. Perikanan dan Ilmu Kelautan UNDIP</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ url('img/7.jpg') }}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Aan Johan Wahyudi,  Dr.</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Biogeokimia</h6>
                                <p class="m-0">Pusat Penelitian Oseanografi LIPI</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


   
    


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Blog Post</h5>
                <h1 class="display-4">Postingan Terbaru</h1>
            </div>
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{ url('img/9.jpg') }}" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">Mudah Budidaya Ikan Air Tawar</a>
                            <p class="m-0">Mudahnya budidaya ikan mas dengan budget minimum dan tempat yang terbatas</p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{ url('img/11.jpeg') }}" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">Skali Panen Raup Keuntungan Besar</a>
                            <p class="m-0">Tips dan trik memelihara ikan dengan kualitas baik serta pertumbuhan yang cepat</p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{ url('img/10.jpg') }}" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">Budidaya Ikan Nila di Tambak Terapung</a>
                            <p class="m-0">Tata cara budidaya ikan nila di tambak terapung dengan bahan-bahan sederhana yang mudah didapat</p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Kontak Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i> Tegalsari, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52111</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@perikananindonesia.co.id</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+0857m4257 2406</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#">BUDIKA</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ url('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ url('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ url('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('js/main.js') }}"></script>
</body>

</html>