<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Tables</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php include('header.php'); ?>

  <div id="wrapper">

    <!-- Sidebar -->
      <?php include('sidebar.php'); ?>



    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Rekapitulasi keuangan</div>

            <div class="card-body">

              <div class="row" style="margin-bottom: 20px">
                <div class="col-md-1" style="margin-right: 50px">
                  <div class="dropdown">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Pilih Bulan
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Januari</a>
                      <a class="dropdown-item" href="#">Februari</a>
                      <a class="dropdown-item" href="#">Maret</a>
                      <a class="dropdown-item" href="#">April</a>
                      <a class="dropdown-item" href="#">Mei</a>
                      <a class="dropdown-item" href="#">Juni</a>
                      <a class="dropdown-item" href="#">Juli</a>
                      <a class="dropdown-item" href="#">Agustus</a>
                      <a class="dropdown-item" href="#">September</a>
                      <a class="dropdown-item" href="#">Oktober</a>
                      <a class="dropdown-item" href="#">November</a>
                      <a class="dropdown-item" href="#">Desember</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="dropdown">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Pilih Tahun
                    </a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">2017</a>
                      <a class="dropdown-item" href="#">2018</a>
                      <a class="dropdown-item" href="#">2019</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Id Transaction</th>
                      <th>Tanggal</th>
                      <th>Keterangan</th>
                      <th>pemasukkan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th style="text-align: center;" colspan="3">Total</th>
                      <th>Rp 60.000</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>100299</td>
                      <td>11 Januari 2018</td>
                      <td>Pamsukkan Mamber</td>
                      <td>Rp 20.000</td>
                    </tr>
                     <tr>
                      <td>100300</td>
                      <td>12 Januari 2018</td>
                      <td>Pamsukkan Mamber</td>
                      <td>Rp 20.000</td>
                    </tr>
                     <tr>
                      <td>100298</td>
                      <td>10 Januari 2018</td>
                      <td>Pamsukkan Mamber</td>
                      <td>Rp 20.000</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <a href="#" class="btn btn-success">Cetak</a>

            </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
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
          <a class="btn btn-primary" href="../HomePage/index.html">Logout</a>
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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/auth.js"></script>
  <script>
    checkLogin();
  </script>

</body>

</html>
