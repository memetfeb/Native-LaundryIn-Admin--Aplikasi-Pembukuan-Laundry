<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LaundryIn Admin - Data Transaksi</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>


<body id="page-top" onload="tampilDataTransaksi1()" >

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
            Data Transaksi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tgl Masuk</th>
                    <th>Tgl Keluar</th>
                    <th>Paket</th>
                    <th>Berat</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  

                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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

    <!-- Modal Detail Transaksi -->
<div class="modal fade" id="ModalDetailTransaksi" tabindex="-1" role="dialog" aria-labelledby="ModalTransaksiLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTransaksiLabel">Detail Transaksi : &nbsp</h5>
                <h5 class="modal-title" id="idtransaksi_detail"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="idmember_detail" class="form-control" placeholder="ID Member" disabled>
              <label for="idmember_detail">ID Member</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="namamember_detail" class="form-control" placeholder="Nama Member" required="required" disabled>
                  <label for="namamember">Nama Member</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="notelp_detail" class="form-control" placeholder="No Telepon" disabled>
              <label for="notelp_detail">Nomor Telepon</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="alamat_detail" class="form-control" placeholder="Alamat" disabled>
              <label for="alamat_detail">Alamat</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="paket_detail" class="form-control" placeholder="Paket Detail" disabled>
              <label for="paket_detail">Paket Laundry</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="berat_detail" class="form-control" placeholder="Berat Kg" required="required" disabled>
                  <label for="berat_detail">Berat (Kg)</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="totalharga_detail" class="form-control" placeholder="Total Biaya" disabled>
              <label for="totalharga_detail">Total Biaya (Rp)</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="tanggal_masuk_detail" class="form-control" placeholder="Tanggal Masuk" disabled>
              <label for="tanggal_masuk_detail">Tanggal Masuk</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="tanggal_keluar_detail" class="form-control" placeholder="Tanggal Keluar" required="required" disabled>
                  <label for="tanggal_keluar_detail">Tanggal keluar</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="status_detail" class="form-control" placeholder="Status" disabled>
              <label for="status_detail">Status</label>
            </div>
          </div>
          
            </div>
        </div>
    </div>
</div>


<!-- Modal Update Status Transaksi -->
<div class="modal fade" id="ModalEditStatus" tabindex="-1" role="dialog" aria-labelledby="ModalStatusLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalStatusLabel">Konfirmasi Status Transaksi : &nbsp</h5>
        <h5 class="modal-title" id="idStatusTransaksi"></h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idtransaksi" name="idnonmember">
        <h6>Pilih Status : </h6>
        <div class="form-label-group">
            <select class="mdb-select md-form" id="selectStatusTransaksi" name="selectStatusTransaksi">
              <option value="Cuci">Cuci</option>  
              <option value="Setrika">Setrika</option>
              <option value="Siap Antar">Siap Antar</option>
              <option value="Selesai">Selesai</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger" onclick="updateStatusTransaksiMember()">Konfirmasi</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Update Status Transaksi -->
<div class="modal fade" id="ModalEditStatusNonMember" tabindex="-1" role="dialog" aria-labelledby="ModalStatusLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalStatusLabel">Konfirmasi Status Transaksi : &nbsp</h5>
        <h5 class="modal-title" id="idStatusTransaksi"></h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idtransaksi" name="idnonmember">
        <h6>Pilih Status : </h6>
        <div class="form-label-group">
            <select class="mdb-select md-form" id="selectStatusTransaksi" name="selectStatusTransaksi">
              <option value="Cuci">Cuci</option>  
              <option value="Setrika">Setrika</option>
              <option value="Siap Antar">Siap Antar</option>
              <option value="Selesai">Selesai</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger" onclick="updateStatusTransaksiNonMember()">Konfirmasi</button>
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
  function tampilDataTransaksi1()
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
    var cell7 = row.insertCell(6);
    var cell8 = row.insertCell(7);
    var cell9 = row.insertCell(8);

    //ambil data member
    dbRef.ref("Member/" + id_member).once("value").then(function(snapshot){
      var id_int_transaksi = parseInt(newstatusTransaksi.id_transaksi.replace("m", ""))
      var statusTransaksi = newstatusTransaksi.status;
      cell1.innerHTML = newstatusTransaksi.id_transaksi;
      cell2.innerHTML = snapshot.val().Nama;
      cell3.innerHTML = newstatusTransaksi.tanggal_masuk;
      cell4.innerHTML = newstatusTransaksi.tanggal_keluar;
      cell5.innerHTML = newstatusTransaksi.paket;
      cell6.innerHTML = newstatusTransaksi.berat;
      cell7.innerHTML = newstatusTransaksi.harga;
      cell8.innerHTML = newstatusTransaksi.status + '<div id="EditStatus"><button class="btn" type="button" id="detail_transaksi" onclick="detailStatusTransaksiMember('+ id_int_transaksi +')" data-toggle="modal" data-target="#ModalEditStatus"><i class="fas fa-edit" aria-hidden="true"></i></button></div>';

      if (statusTransaksi == "Selesai"){
        document.getElementById("EditStatus").innerHTML = "";

      }
      cell9.innerHTML = '<button class="btn btn-primary btn-sm" type="button" id="detail_transaksi" onclick="detailTransaksi('+ id_int_transaksi +')" data-toggle="modal" data-target="#ModalDetailTransaksi">Detail</button>';
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
    var cell7 = row.insertCell(6);
    var cell8 = row.insertCell(7);
    var cell9 = row.insertCell(8);

    var id_int_transaksi_non_member = parseInt(newstatusTransaksi.id_transaksi.replace("z", ""))
    var statusTransaksi = newstatusTransaksi.status;
    cell1.innerHTML = newstatusTransaksi.id_transaksi;
    cell2.innerHTML = newstatusTransaksi.nama;
    cell3.innerHTML = newstatusTransaksi.tanggal_masuk;
    cell4.innerHTML = newstatusTransaksi.tanggal_keluar;
    cell5.innerHTML = newstatusTransaksi.paket;
    cell6.innerHTML = newstatusTransaksi.berat;
    cell7.innerHTML = newstatusTransaksi.harga;
    cell8.innerHTML = newstatusTransaksi.status + '<div id="EditStatus"><button class="btn" type="button" id="detail_transaksi" onclick="detailStatusTransaksiNonMember('+ id_int_transaksi_non_member +')" data-toggle="modal" data-target="#ModalEditStatusNonMember"><i class="fas fa-edit" aria-hidden="true"></i></button></div>';

      if (statusTransaksi == "Selesai"){
        document.getElementById("EditStatus").innerHTML = "";
      }
    cell9.innerHTML = '<button class="btn btn-primary btn-sm" type="button" id="detail_transaksi" onclick="detailTransaksiNonMember('+ id_int_transaksi_non_member +')" data-toggle="modal" data-target="#ModalDetailTransaksi">Detail</button>';
  });
}

function detailTransaksi(id_transaksi)
{
  console.log(id_transaksi);
  var id_transaksi_member = "m" + id_transaksi;
  var dbRef_detail_transaksi = firebase.database();
  var detailtransaksi = dbRef_detail_transaksi.ref("Transaksi/member/" + id_transaksi_member);
  console.log(id_transaksi_member);
 
  detailtransaksi.on("value", function(snapshot) {
   var childDataTransaksi = snapshot.val();
   var id_member = childDataTransaksi.id_member;
  dbRef_detail_transaksi.ref("Member/" + id_member).once("value").then(function(snapshot){

   document.getElementById("idmember_detail").setAttribute("value", childDataTransaksi.id_member);
   document.getElementById("namamember_detail").setAttribute("value", snapshot.val().Nama);
   document.getElementById("notelp_detail").setAttribute("value", snapshot.val().No_telp);
   document.getElementById("alamat_detail").setAttribute("value", snapshot.val().Alamat);
   document.getElementById("paket_detail").setAttribute("value", childDataTransaksi.paket);
   document.getElementById("berat_detail").setAttribute("value", childDataTransaksi.berat);
   document.getElementById("totalharga_detail").setAttribute("value", childDataTransaksi.harga);
   document.getElementById("tanggal_masuk_detail").setAttribute("value", childDataTransaksi.tanggal_masuk);
   document.getElementById("tanggal_keluar_detail").setAttribute("value", childDataTransaksi.tanggal_keluar);
   document.getElementById("status_detail").setAttribute("value", childDataTransaksi.status);  
   document.getElementById("idtransaksi_detail").innerHTML = childDataTransaksi.id_transaksi;
  });
  });
 
}

function detailTransaksiNonMember(id_transaksi)
{
  console.log(id_transaksi);
  var id_transaksi_non_member = "z" + id_transaksi;
  var dbRef_detail_transaksi = firebase.database();
  var detailtransaksi = dbRef_detail_transaksi.ref("Transaksi/nonmember/" + id_transaksi_non_member);
  console.log(id_transaksi_non_member);
 
  detailtransaksi.on("value", function(snapshot) {
   var childDataTransaksi = snapshot.val();
   document.getElementById("idmember_detail").setAttribute("value", childDataTransaksi.id_member);
   document.getElementById("namamember_detail").setAttribute("value", childDataTransaksi.nama);
   document.getElementById("notelp_detail").setAttribute("value", childDataTransaksi.no_telp);
   document.getElementById("alamat_detail").setAttribute("value", childDataTransaksi.alamat);
   document.getElementById("paket_detail").setAttribute("value", childDataTransaksi.paket);
   document.getElementById("berat_detail").setAttribute("value", childDataTransaksi.berat);
   document.getElementById("totalharga_detail").setAttribute("value", childDataTransaksi.harga);
   document.getElementById("tanggal_masuk_detail").setAttribute("value", childDataTransaksi.tanggal_masuk);
   document.getElementById("tanggal_keluar_detail").setAttribute("value", childDataTransaksi.tanggal_keluar);   
      document.getElementById("status_detail").setAttribute("value", childDataTransaksi.status);
   document.getElementById("idtransaksi_detail").innerHTML = childDataTransaksi.id_transaksi;
  });
 
}


function detailStatusTransaksiMember(id_transaksi)
{
   var id_transaksi_member = "m" + id_transaksi;
  var dbRef_status_transaksi = firebase.database();
  var statustransaksi = dbRef_status_transaksi.ref("Transaksi/member/" + id_transaksi_member);
  
  statustransaksi.on("value", function(snapshot) {
   var childDataTransaksi = snapshot.val();
   document.getElementById("idtransaksi").setAttribute("value", childDataTransaksi.id_transaksi);
   document.getElementById("idStatusTransaksi").innerHTML = childDataTransaksi.id_transaksi;
      
  });
 
}
function detailStatusTransaksiNonMember(id_transaksi)
{
   var id_transaksi_member = "z" + id_transaksi;
  var dbRef_status_transaksi = firebase.database();
  var statustransaksi = dbRef_status_transaksi.ref("Transaksi/nonmember/" + id_transaksi_member);
  
  statustransaksi.on("value", function(snapshot) {
   var childDataTransaksi = snapshot.val();
   document.getElementById("idtransaksi").setAttribute("value", childDataTransaksi.id_transaksi);
   document.getElementById("idStatusTransaksi").innerHTML = childDataTransaksi.id_transaksi;
  });
 
}

function updateStatusTransaksiMember(){
  var id_transaksi_member = document.getElementById("idtransaksi").value;
  console.log(id_transaksi_member);
  var statustransaksiset = document.getElementById("selectStatusTransaksi").value;
  console.log(statustransaksi);
  var dbRef_status_transaksi = firebase.database();
  var statustransaksi = dbRef_status_transaksi.ref("Transaksi/member/" + id_transaksi_member);
  var statustransaksi2 = dbRef_status_transaksi.ref("Transaksi/member/" + id_transaksi_member+"/statusJalan/");
   if (statustransaksiset == "Selesai"){
      statustransaksi.update ({
      "status": statustransaksiset,
      "tanggal_keluar": getTanggalSekarang()
    });
      statustransaksi2.update({4 : statustransaksiset});
   } else {
    statustransaksi.update ({
      "status": statustransaksiset
    });
    if (statustransaksiset == "Setrika") {
      statustransaksi2.update({2 : statustransaksiset});
    }
    if (statustransaksiset == "Siap Antar") {
      statustransaksi2.update({3 : statustransaksiset});
    }
   }
    
  $('#ModalEditStatus').modal('hide');
  tampilDataTransaksi1();
  alert("Sukses");
      
}

function updateStatusTransaksiNonMember(){
  var id_transaksi_member = document.getElementById("idtransaksi").value;
  console.log(id_transaksi_member);
  var statustransaksiset = document.getElementById("selectStatusTransaksi").value;
  console.log(statustransaksi);
  var dbRef_status_transaksi = firebase.database();
  var statustransaksi = dbRef_status_transaksi.ref("Transaksi/nonmember/" + id_transaksi_member);
   
   if (statustransaksiset == "Selesai"){
      statustransaksi.update ({
      "status": statustransaksiset,
      "tanggal_keluar": getTanggalSekarang()
    });
   } else {
    statustransaksi.update ({
      "status": statustransaksiset
    });
   }
    
  $('#ModalEditStatusNonMember').modal('hide');
  tampilDataTransaksi1();
  alert("Sukses");
      
}


  </script>

</body>

</html>
