@extends('layouts.app2')

@section('content')
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('penjualan') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Penjualan</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('barang.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Input Barang</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('piutang') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data piutang</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pegawai') }}"> <!-- formerly 'operasional'  -->
            <i class="fas fa-fw fa-table"></i>
            <span>Biaya Bulanan</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{route('barang.index')}}">Data Barang</a>
            </li>
            <li class="breadcrumb-item active">Input</li>
          </ol>

        <!-- Input Barang -->
        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Input Data Barang</div>
            <div class="card-body">
              <div class="table-responsive">
              <form action="{{ route('barang.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="">Nama Barang</label>
                <input type="text" class="form-control" name="nama" placeholder="">
            </div>
            <div class="form-group">
              <label for="">Distributor</label>
                <input type="text" class="form-control" name="distributor" placeholder="">
            </div>
            <div class="form-group">
              <label for="">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="3" placeholder=""></textarea>
            </div>
            <div class="form-group">
              <label for="">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" placeholder="">
            </div>
            <div class="form-group">
              <label for="">Harga Beli</label>
                <input type="number" class="form-control" name="beli" placeholder="">
            </div>
            <div class="form-group">
              <label for="">Harga Jual</label>
              <input type="number" class="form-control" name="jual" placeholder="">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Save">
            </div>
          </form>
            <!-- </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div> -->

        <!-- Sticky Footer -->
        <!-- <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer> -->

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

@endsection
