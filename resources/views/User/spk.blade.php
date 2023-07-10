<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BUDIKA - Budidaya Ikan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                        <a href="#" class="nav-item nav-link active">Pemilihan Ikan Budidaya</a>
                        <a href="{{ url('/konsultasi') }}" class="nav-item nav-link">Konsultasi</a>
                        <a href="{{ url('/contact') }}" class="nav-item nav-link">Kontak</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    

    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
        <h1 class="display-4 border-bottom border-5">Pemilihan Jenis Ikan</h1>
        <!-- <h5 class="d-inline-block text-primary text-uppercase "></h5> -->
    </div>

    <!-- <center> -->
    <!-- <div class="col-lg-8" style="margin: auto; width: 60%; text-align: center; left: 50%;"> -->
    <div class="col-lg-8" style="margin: auto; width: 60%; left: 50%;">
        <form method="POST" action="{{ url('/pembudidaya/store') }}" >
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="nam">Nama</label>
                    <input name="nam" id="nam" type="text" class="form-control bg-light border-0" style="height: 55px;" value="{{ old('nam') }}">
                        @error('nam')
                        <p style="color: red; font-size: small;">{{ $message }}</p>
                        @enderror
                </div>

                <!-- <i class="fas fa-solid fa-caret-down right"></i> -->
                <div class="col-12">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-select bg-light border-0" name="jk" id="jk" style="height: 55px;"> 
                      <option value="L" {{ "L" == old('jk') ? 'selected' : ''}}>Laki-laki</option>
                      <option value="P" {{ "P" == old('jk') ? 'selected' : ''}}>Perempuan</option>
                    </select>
                </div>

                <div class="col-12">
                    <label for="no_hp">Nomor Telepon</label>
                    <input name="no_hp" id="no_hp" type="text" class="form-control bg-light border-0" style="height: 55px;" value="{{ old('no_hp') }}">
                        @error('no_hp')
                        <p style="color: red; font-size: small;">{{ $message }}</p>
                        @enderror
                </div>

                <div class="col-12">
                    <label for="email">Email</label>
                    <input name="email" id="email" type="text" class="form-control bg-light border-0" style="height: 55px;" value="{{ old('email') }}">
                        @error('email')
                        <p style="color: red; font-size: small;">{{ $message }}</p>
                        @enderror
                </div>

                <div class="col-12">
                    <label for="c1">Luas Lahan</label>
                    <select class="form-select bg-light border-0" name="c1" id="c1" style="height: 55px;">
                      @foreach($luasLahan as $i => $luas_lahan)
                      <option value="{{ $luas_lahan->id }}" {{ "$luas_lahan->id" == old('c1') ? 'selected' : ''}}>{{ $luas_lahan->luas }}</option>
                      @endforeach
                    </select>
                    <p for="exC1" style="color: grey; font-size: small;">*meter persegi</p>
                </div>

                <div class="col-12">
                    <label for="c2">Berat Ideal</label>
                    <select class="form-select bg-light border-0" name="c2" id="c2" style="height: 55px;">
                      @foreach($beratIdeal as $i => $berat_ideal)
                      <option value="{{ $berat_ideal->id }}" {{ "$berat_ideal->id" == old('c2') ? 'selected' : ''}}>{{ $berat_ideal->berat }}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="c3">Jenis Perairan</label>
                    <select class="form-select bg-light border-0" name="c3" id="c3" style="height: 55px;">
                      @foreach($jenisPerairan as $i => $jenis_perairan)
                      <option value="{{ $jenis_perairan->id }}" {{ "$jenis_perairan->id" == old('c3') ? 'selected' : ''}}>{{ $jenis_perairan->perairan }}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="c4">Jenis Air</label>
                    <select class="form-select bg-light border-0" name="c4" id="c4" style="height: 55px;">
                      @foreach($jenisAir as $i => $jenis_air)
                      <option value="{{ $jenis_air->id }}" {{ "$jenis_air->id" == old('c4') ? 'selected' : ''}}>{{ $jenis_air->air }}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="c5">Masa Panen</label>
                    <select class="form-select bg-light border-0" name="c5" id="c5" style="height: 55px;">
                      @foreach($masaPanen as $i => $masa_panen)
                      <option value="{{ $masa_panen->id }}" {{ "$masa_panen->id" == old('c5') ? 'selected' : ''}}>{{ $masa_panen->panen }}</option>
                      @endforeach
                    </select>
                </div>
    
                <div class="col-12">
                    <button type="submit" class="btn btn-primary w-100 py-3" style="height: 55px;">Submit</button>
                </div>
            </div>
        </form>
    </div></br></br>
    <!-- </center></br></br></br> -->


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