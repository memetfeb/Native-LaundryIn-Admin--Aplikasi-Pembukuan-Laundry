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
   <script type="text/JavaScript"> 
    // Material Select Initialization
    $(document).ready(function() {
      $('.mdb-select').materialSelect();
    });

  </script>

</head>

<body id="page-top" >

  <?php include('header.php'); ?>

  <div id="wrapper">

    <!-- Sidebar -->
      <?php include('sidebar.php'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">
		  
	<div class="card card-register mx-auto mt-5" style="margin-bottom: 50px">
      <div class="card-header">Tambah Transaksi</div>
      <div class="card-body" id="tambahtransaksi">
      <form>
          <div class="form-group">
            <div class="form-group">
            	<div class="form-label-group">
					       <select class="mdb-select md-form" id="kategori" name="kategori">
      					   <option value="" disabled selected>Choose your option</option>  
      					   <option value="1">Member</option>
      					   <option value="2">Non-Member</option>
				          </select>
            	</div>
          	</div>
          <div id="formtambahtransaksi">


          </div>
        </div>
        </form> 
        
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

  <script type="text/javascript">

    function getFormTambahTransaksi(){
      var kategori_select = document.getElementById("kategori");

      var kategori_id = kategori_select.options[kategori.selectedIndex].value;
      console.log('KategoriId : ' + kategori_id);


      var xhr = new XMLHttpRequest();
      var url = 'ajax/getformkategori.php?kategori_id=' + kategori_id;
      // open function
      xhr.open('GET', url, true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      // check response is ready with response states = 4
      xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
          var text = xhr.responseText;
          //console.log('response from ajax/getsubkategori.php : ' + xhr.responseText);
          var form_select = document.getElementById("formtambahtransaksi");
          form_select.innerHTML = text;
          form_select.style.display='inline';

          document.getElementById("idmember").addEventListener("keyup", function(){
            var id_member = this.value;
            var db = firebase.database();

            db.ref("Member/" + id_member).once("value").then(function(snapshot){
              document.getElementById("namamember").value = snapshot.val().Nama;
            });
          });
          document.getElementById("paket").addEventListener("change", hitungTotalBiaya);
          document.getElementById("berat").addEventListener("keyup", hitungTotalBiaya);

          ambilDataTerakhirTransaksiMember();
          ambilDataTerakhirTransaksiNonMember()
        }
      }

      xhr.send();
    }

    var kategori_select = document.getElementById("kategori");
    kategori_select.addEventListener("change", getFormTambahTransaksi);

    function hitungTotalBiaya(){
      var paket = document.getElementById("paket").value;
      var berat = document.getElementById("berat").value;

      if(paket == "Kilat" && berat != ""){
        document.getElementById("totalharga").value = 12000 * parseInt(berat);
      }else if(paket == "Express" && berat != ""){
        document.getElementById("totalharga").value =7000 * parseInt(berat);
      }else if(paket == "Reguler" && berat != ""){
        document.getElementById("totalharga").value =4000 * parseInt(berat);
      }
    }
    </script>

    <script >
      function addDataTransaksiMember()
  {
      var id_transaksi_add = document.getElementById("idtransaksimember").value;
      var id_member_add = document.getElementById("idmember").value;
      var paket_member_add = document.getElementById("paket").value;
      var berat_member_add = document.getElementById("berat").value;
      var harga_member_add = document.getElementById("totalharga").value;
      var status_member_add = "Cuci";
      var tanggal_masuk_member_add = getTanggalSekarang();
      var tanggal_keluar_member_add = "-";
    
    var dbRef_add_transaksi_member = firebase.database();
    var today = new Date();
    var month = today.getMonth()+1;
    var year = today.getFullYear();
       
    // Isikan data kedalam firebase
    var tambahTransaksiMember = dbRef_add_transaksi_member.ref("Transaksi/member/" + id_transaksi_add);
       tambahTransaksiMember.set({
       id_transaksi : id_transaksi_add,
       id_member : id_member_add, 
       berat : parseInt(berat_member_add),
       harga : parseInt(harga_member_add),
       id_admin : 1,
       paket : paket_member_add,
       status : status_member_add,
       tanggal_masuk : tanggal_masuk_member_add,
       tanggal_keluar : tanggal_keluar_member_add,
       bulan : month,
       tahun : year
     });
       var tambahTransaksiMember2 = dbRef_add_transaksi_member.ref("Transaksi/member/"+id_transaksi_add+"/statusJalan/");
       tambahTransaksiMember2.set({1 : status_member_add});
      alert('Transaksi Baru Telah Di Tambahkan!');
      window.location='datatransaksi.php';
      return true;
    //}
}

  function addDataTransaksiNonMember()
  {
      var id_transaksi_nonmember_add = document.getElementById("idtransaksinonmember").value;
      var nama_nonmember_add = document.getElementById("nama").value;
      var id_nonmember_add = document.getElementById("idnonmember").value;
      var paket_nonmember_add = document.getElementById("paket").value;
      var telp_nonmember_add = document.getElementById("telp").value;
      var alamat_nonmember_add = document.getElementById("alamat").value;
      var berat_nonmember_add = document.getElementById("berat").value;
      var harga_nonmember_add = document.getElementById("totalharga").value;
      var status_nonmember_add = "Cuci";
      var tanggal_masuk_nonmember_add = getTanggalSekarang();
      var tanggal_keluar_nonmember_add = "-";
    
    var dbRef_add_transaksi_member = firebase.database();
       
    // Isikan data kedalam firebase
    var tambahTransaksiNonMember = dbRef_add_transaksi_member.ref("Transaksi/nonmember/" + id_transaksi_nonmember_add);
     tambahTransaksiNonMember.set({
     id_transaksi : id_transaksi_nonmember_add,
     id_member : id_nonmember_add,
     nama : nama_nonmember_add, 
     no_telp : telp_nonmember_add,
     alamat : alamat_nonmember_add,
     berat : parseInt(berat_nonmember_add),
     harga : parseInt(harga_nonmember_add),
     id_admin : 1,
     paket : paket_nonmember_add,
     status : status_nonmember_add,
     tanggal_masuk : tanggal_masuk_nonmember_add,
     tanggal_keluar : tanggal_keluar_nonmember_add
     });
      alert('Transaksi Baru Telah Di Tambahkan!');
      window.location='datatransaksi.php';
      return true;
    //}
}


function ambilDataTerakhirTransaksiMember()
  {
    var dbRef_ambilDataTerakhir = firebase.database();
    var cariAkhir = dbRef_ambilDataTerakhir.ref("Transaksi/member");
    cariAkhir.limitToLast(1).on('child_added', function(dataAkhir) {
      var snap = dataAkhir.val();
      var id_record_terakhir = parseInt(snap.id_transaksi.replace("m", "")) + 1;
      document.getElementById("idtransaksimember").value = "m" + id_record_terakhir;
    });
  }

function ambilDataTerakhirTransaksiNonMember()
  {
    console.log(7);
    var dbRef_ambilDataTerakhirnonmember = firebase.database();
    var cariAkhirnonmember = dbRef_ambilDataTerakhirnonmember.ref("Transaksi/nonmember");
    cariAkhirnonmember.limitToLast(1).on('child_added', function(dataAkhir) {
      var snap = dataAkhir.val();
      var id_record_terakhirnonmember = parseInt(snap.id_transaksi.replace("z", "")) + 1;
      document.getElementById("idtransaksinonmember").value = "z" + id_record_terakhirnonmember;
      // document.getElementById("idtransaksinonmember").value = "z" + id_record_terakhirnonmember;
    });
  }


    </script>

</body>

</html>
