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
                <a href="index.html" class="navbar-brand">
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
                        <a href="#" class="nav-item nav-link active">Konsultasi</a>
                        <a href="{{ url('/contact') }}" class="nav-item nav-link">Kontak</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
        <h1 class="display-4 border-bottom border-5">Konsultasi</h1>
        <h5 class="d-inline-block text-primary text-uppercase ">Apa yang ingin anda tanyakan kepada ahli kami?</h5>
    </div>
    
    <center>
    <div class="col-lg-8">
        <form enctype="multipart/form-data" method="POST" action="hsl_upload.php">
            <div class="row g-3">
                <div class="col-12">
                    <input name="nama" type="text" class="form-control bg-light border-0" placeholder="Nama" style="height: 55px;">
                </div>
                <div class="col-12">
                    <input name="email" type="text" class="form-control bg-light border-0" placeholder="Email" style="height: 55px;">
                </div>
                <div class="col-12">
                    <textarea name="pesan" class="form-control bg-light border-0" rows="5" placeholder="Pesan"></textarea>
                </div>
                <div class="col-12">
                    <input class="btn btn-primary w-100 py-3" type="submit" value="Kirim" onclick="return confirm('Kirim konsultasimu?')">
                </div>
            </div>
        </form>
    </div>
    </center></br></br></br>
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4" style="max-height: 20px;">
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