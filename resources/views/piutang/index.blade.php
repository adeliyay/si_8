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
        <li class="nav-item">
          <a class="nav-link" href="{{ route('barang.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Input Barang</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('piutang') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data piutang</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('operasional') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Biaya Bulanan</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
          </ol> -->

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Piutang</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Asal Piutang</th>
                      <th>Jatuh tempo</th>
                      <th>Deskripsi Piutang</th>
                      <th>Jumlah piutang</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <!-- <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot> -->
                  <tbody>
                  @foreach ($piutangs as $piutang)
                    <tr>
                      <td>{{$piutang->asal_piutang}}</td>
                      <td>{{$piutang->jatuh_tempo}}</td>
                      <td>{{$piutang->deskripsi_piutang}}</td>
                      <td>{{$piutang->jumlah_piutang}}</td>
                      <td><a href="{{ route('piutang.edit',$piutang) }}" class="btn btn-primary" role="button" aria-pressed="true">Update</a></td>
                      <td>
                      <form class="" action="{{ route('piutang.destroy', $piutang) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-danger" aria-pressed="true">Delete</button>
                      </form></td>
                    </tr>
                  @endforeach

                  </tbody>
                </table><br>
                <a href="{{ route('piutang.create') }}" class="btn btn-primary" role="button" aria-pressed="true">Tambah Piutang</a>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <!-- <p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
          </p> -->

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

@endsection
