<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BUDIKA - Budidaya Ikan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">

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
    <div class="container-fluid sticky-top bg-white shadow-sm mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="{{ url('pembudidaya/home') }}" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary">Budika</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ url('/blog') }}" class="nav-item nav-link">Budidaya Ikan</a>
                        <a href="{{ url('/spk') }}" class="nav-item nav-link">Pemilihan Ikan Budidaya</a>
                        <a href="{{ url('/konsultasi') }}" class="nav-item nav-link">Konsultasi</a>
                        <a href="#" class="nav-item nav-link active">Kontak</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Apakah anda memiliki pertanyaan?</h5>
                <h1 class="display-4">Hubungi kami di</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-location-arrow text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <a class="mb-0" href="https://www.perikananindonesia.co.id/">Perikanan Indonesia</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-phone text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <h6 class="mb-0">+0888 0000 1111</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-envelope-open text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <h6 class="mb-0">info@perikananindonesia.co.id</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Kontak Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i> Tegalsari, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52111</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@perikananindonesia.co.id</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+0888 0000 1111</p>
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