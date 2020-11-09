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

<body id="page-top" onload="tampilDataMember()" >

  <?php include('header.php'); ?>

  <div id="wrapper">

    <!-- Sidebar -->
      <?php include('sidebar.php'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">
		     <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Transaksi
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>No Telp</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
            <div class="col-auto align-self-center" style="padding:6px;"><a href="tambahmember.php"><button class="btn btn-success" type="button" id="tambah_data" style="margin-left:10px;">Tambah Member</button></a></div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM
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


  <!-- Modal Update -->
<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="ModalUpdateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalUpdateLabel">Edit Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="idupdate" class="form-control" placeholder="ID" required="required" disabled="" >
              <label for="idupdate">Nomor ID</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="NIKupdate" class="form-control" placeholder="Nomor Induk Kependudukan" required="required">
              <label for="NIKupdate">Nomor Induk Kependudukan</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="fullnameupdate" class="form-control" placeholder="Full Name" required="required">
              <label for="fullnameupdate">Full Name</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmailupdate" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmailupdate">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="notelpupdate" class="form-control" placeholder="No Telp" required="required">
              <label for="notelpupdate">No Telp</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPasswordupdate" class="form-control" placeholder="Password" required="required">
                  <label for="inputPasswordupdate">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPasswordupdate" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPasswordupdate">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
      
         <div class="form-group">
          <div class="form-label-group">
          <textarea id="alamatupdate" class="md-textarea form-control" rows="3"></textarea>
          <label for="alamatupdate">Alamat</label>
            </div>
        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="updateDataMemberProses()">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Data -->
<div class="modal fade" id="ModalDel" tabindex="-1" role="dialog" aria-labelledby="ModalDelLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalUpdateLabel">Konfirmasi Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>ID : </h6>
        <input class="form-control" type="text" id="iddelete">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger" onclick="delDataMemberProses()">Hapus Data</button>
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

    function getTanggalSekarang(){
  var el_up = document.getElementById("GFG_UP"); 
  var el_down = document.getElementById("GFG_DOWN"); 
  var today = new Date(); 
  el_up.innerHTML = today; 
  var dd = today.getDate(); 
  var mm = today.getMonth() + 1; 
  
  var yyyy = today.getFullYear(); 
  if (dd < 10) { 
    dd = '0' + dd; 
  } 
  if (mm < 10) { 
    mm = '0' + mm; 
  } 
  var today = dd + '/' + mm + '/' + yyyy; 

  return today;
}
  </script>

</body>

</html>
