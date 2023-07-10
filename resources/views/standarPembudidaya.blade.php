<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('css/adminlte.min.css') }}">
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
      <img src="{{ url('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Forms
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('ikan/add/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Ikan</p>
                  </a>
                </li>
              </ul>
            </li>

            <!--Table-->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
               <i class="nav-icon fas fa-edit"></i>
                <p>
                  Tabel
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('ikan/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Ikan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('pembudidaya/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pembudidaya</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Standar Pembudidaya</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('spk/kriteria') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kriteria</p>
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Standar Pembudidaya</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                <thead>
                  <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Luas Lahan</th>
                    <th>Berat Ideal</th>
                    <th>Jenis Perairan</th>
                    <th>Jenis Air</th>
                    <th>Masa Panen</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($pbd as $i => $pembudidaya)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $pembudidaya->id }}</td>
                    <td>{{ $pembudidaya->nama }}</td>
                    <td>{{ $pembudidaya->tanggal }}</td>
                      @if($pembudidaya->luas_lahan_id == '1')
                        <td>&#60 50m</td>
                      @elseif($pembudidaya->luas_lahan_id == '2')
                        <td>50m - 100m</td>
                      @elseif($pembudidaya->luas_lahan_id == '3')
                        <td>100m - 500m</td>
                      @elseif($pembudidaya->luas_lahan_id == '4')
                        <td>&#62 500m</td>
                      @endif
                    
                      @if($pembudidaya->berat_ideal_id == '1')
                        <td>&#60 100 gram</td>
                      @elseif($pembudidaya->berat_ideal_id == '2')
                        <td>100 - 500 gram</td>
                      @elseif($pembudidaya->berat_ideal_id == '3')
                        <td>500 - 1000 gram</td>
                      @elseif($pembudidaya->berat_ideal_id == '4')
                        <td>&#62 1000 gram</td>
                      @endif
                    
                      @if($pembudidaya->jenis_perairan_id == '1')
                        <td>Diam</td>
                      @elseif($pembudidaya->jenis_perairan_id == '2')
                        <td>Tenang</td>
                      @elseif($pembudidaya->jenis_perairan_id == '3')
                        <td>Deras</td>
                      @endif
                    
                      @if($pembudidaya->jenis_air_id == '1')
                        <td>Tawar</td>
                      @elseif($pembudidaya->jenis_air_id == '2')
                        <td>Payau</td>
                      @elseif($pembudidaya->jenis_air_id == '3')
                        <td>Asin</td>
                      @endif
                    
                      @if($pembudidaya->masa_panen_id == '1')
                        <td>&#60 2 bulan</td>
                      @elseif($pembudidaya->masa_panen_id == '2')
                        <td>3 - 4 bulan</td>
                      @elseif($pembudidaya->masa_panen_id == '3')
                        <td>&#62 5 bulan</td>
                      @endif
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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

<!-- jQuery -->
<script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ url('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ url('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ url('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
