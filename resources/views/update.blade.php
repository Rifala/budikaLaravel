<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('ikan/dashboard') }}" class="brand-link">
      <img src="{{ url('/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

           <li class="nav-item">
              <a href="{{ url('ikan/dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>

            
            <!-- Form CRUD -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Forms
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('ikan/add') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Ikan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('ikan/') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Ikan</p>
                  </a>
                </li>
              </ul>
            </li>


          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Ikan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ url('ikan/update/'.$ikan->id) }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaIkan">Nama Ikan</label>
                    <input type="text" class="form-control" name="namaIkan" id="namaIkan" value="{{ $ikan->nama_ikan }}">
                        @error('namaIkan')
                          <p style="color: red; font-size: small;">{{ $message }}</p>
                        @enderror
                  </div>

                  <div class="form-group">
                    <label for="luasLahan">Luas Lahan</label>
                    <select class="form-control" name="luasLahan" id="luasLahan">
                      @foreach($luasLahan as $i => $luas_lahan)
                      <option value="{{ $luas_lahan->id }}" {{ "$luas_lahan->id" == old('luasLahan') ? 'selected' : ''}}>{{ $luas_lahan->luas }}</option>
                      @endforeach
                    </select>
                    <p for="exluasLahan" style="color: grey;">*meter persegi</p>
                  </div>

                  <div class="form-group">
                    <label for="beratIdeal">Berat Ideal</label>
                    <select class="form-control" name="beratIdeal" id="beratIdeal">
                      @foreach($beratIdeal as $i => $berat_ideal)
                      <option value="{{ $berat_ideal->id }}" {{ "$berat_ideal->id" == old('beratIdeal') ? 'selected' : ''}}>{{ $berat_ideal->berat }}</option>
                      @endforeach
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="jenisPerairan">Jenis Perairan</label>
                    <select class="form-control" name="jenisPerairan" id="jenisPerairan">
                      @foreach($jenisPerairan as $i => $jenis_perairan)
                      <option value="{{ $jenis_perairan->id }}" {{ "$jenis_perairan->id" == old('jenisPerairan') ? 'selected' : ''}}>{{ $jenis_perairan->perairan }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="jenisAir">Jenis Air</label>
                    <select class="form-control" name="jenisAir" id="jenisAir">
                      @foreach($jenisAir as $i => $jenis_air)
                      <option value="{{ $jenis_air->id }}" {{ "$jenis_air->id" == old('jenisAir') ? 'selected' : ''}}>{{ $jenis_air->air }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="masaPanen">Masa Panen</label>
                    <select class="form-control" name="masaPanen" id="masaPanen">
                      @foreach($masaPanen as $i => $masa_panen)
                      <option value="{{ $masa_panen->id }}" {{ "$masa_panen->id" == old('masaPanen') ? 'selected' : ''}}>{{ $masa_panen->panen }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{ $ikan->deskripsi }}">
                        @error('deskripsi')
                          <p style="color: red; font-size: small;">{{ $message }}</p>
                        @enderror
                  </div>
           
                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>



      

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script>
  function selectElement(id, valueToSelect) {    
    let element = document.getElementById(id);
    element.value = valueToSelect;
  }

    selectElement('luasLahan','{{ $ikan->luas_lahan_id }}')
    selectElement('beratIdeal','{{ $ikan->berat_ideal_id }}')
    selectElement('jenisPerairan','{{ $ikan->jenis_perairan_id }}')
    selectElement('jenisAir','{{ $ikan->jenis_air_id }}')
    selectElement('masaPanen','{{ $ikan->masa_panen_id }}')

</script>

<!-- jQuery -->
<script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ url('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
