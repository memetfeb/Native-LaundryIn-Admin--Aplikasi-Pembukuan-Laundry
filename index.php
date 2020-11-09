<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LaundryIn Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top" onload="tampilDataTransaksi2()" >



  

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
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">Tabel Transaksi</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="datatransaksi.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Tambah Transaksi</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="tambahtransaksi.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">Tabel Member</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="datamember.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Rekapitulasi</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="rekapitulasi.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Statistik Pemasukkan</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Transaksi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tgl Masuk</th>
                    <th>Berat (Kg)</th>
                    <th>Paket</th>
                    <th>Harga (Rp)</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © LaundryIn 2019</span>
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
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

  <!-- The core Firebase JS SDK is always required and must be listed first -->
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-analytics.js"></script>
<!-- <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-auth.js"></script>
 -->
 <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script>
 <script src="js/js-firebase.js"></script>
 <script src="js/auth.js"></script>
  <script>
    checkLogin();
  </script>

  <script >
  function tampilDataTransaksi2()
{
 
// Buat referensi database firebase
var dbRef = firebase.database();
var transaksiMember = dbRef.ref("Transaksi/member");
var transaksiNonMember = dbRef.ref("Transaksi/nonmember");
 
// Dapatkan referensi table
var table = document.getElementById("dataTable").getElementsByTagName('tbody')[0];
 
// Membuang semua isi table
$("#dataTable").find("tr:gt(0)").remove();
 
// Memuat Data
  transaksiMember.on("child_added", function(data, prevChildKey) {
    var newstatusTransaksi = data.val();
    var id_member = newstatusTransaksi.id_member;
    console.log(id_member);
    var row = table.insertRow(table.rows.length);
     
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);

    //ambil data member
    dbRef.ref("Member/" + id_member).once("value").then(function(snapshot){
      var id_int_transaksi = parseInt(newstatusTransaksi.id_transaksi.replace("m", ""))
      var statusTransaksi = newstatusTransaksi.status;
      cell1.innerHTML = newstatusTransaksi.id_transaksi;
      cell2.innerHTML = snapshot.val().Nama;
      cell3.innerHTML = newstatusTransaksi.tanggal_masuk;
      cell4.innerHTML = newstatusTransaksi.berat;
      cell5.innerHTML = newstatusTransaksi.paket;
      cell6.innerHTML = newstatusTransaksi.harga;

    });
  });

  transaksiNonMember.on("child_added", function(data, prevChildKey) {
    var newstatusTransaksi = data.val();
    var row = table.insertRow(table.rows.length);
     
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);

    var id_int_transaksi_non_member = parseInt(newstatusTransaksi.id_transaksi.replace("z", ""))
    var statusTransaksi = newstatusTransaksi.status;
    cell1.innerHTML = newstatusTransaksi.id_transaksi;
    cell2.innerHTML = newstatusTransaksi.nama;
    cell3.innerHTML = newstatusTransaksi.tanggal_masuk;
    cell4.innerHTML = newstatusTransaksi.berat;
    cell5.innerHTML = newstatusTransaksi.paket;
    cell6.innerHTML = newstatusTransaksi.harga;

  });
}









  </script>

</body>

</html>
