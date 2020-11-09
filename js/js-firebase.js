  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDODUpZJOQcSGr0kGGSIqgYYSpRW_cRpnM",
    authDomain: "laundryin-5a86f.firebaseapp.com",
    databaseURL: "https://laundryin-5a86f.firebaseio.com",
    projectId: "laundryin-5a86f",
    storageBucket: "laundryin-5a86f.appspot.com",
    messagingSenderId: "342037778990",
    appId: "1:342037778990:web:26c4483b5d264186de05bf",
    measurementId: "G-NBWVTT2QS4"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

   function addDataMember()
  {
      var id_add = document.getElementById("id").value;
      var nik_add = document.getElementById("NIK").value;
      var name_add = document.getElementById("fullname").value;
      var email_add = document.getElementById("inputEmail").value;
      var telp_add = document.getElementById("notelp").value;
      var pass_add = document.getElementById("inputPassword").value;
      var pass_conf = document.getElementById("confirmPassword").value;
      var alamat_add = document.getElementById("alamat").value;
      var numberformat = /^[0-9]+$/;
      var namaformat = /^[a-zA-Z ]*$/;
      var emailformat = /[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,}$/;
    if (nik_add == "") {
      alert("Maaf, NIK Harus Di isi");
      return false;
    }else if (isNaN(nik_add) || nik_add < 1) {
      alert("Maaf, NIK invalid");
      return false;
    }else if (nik_add.length < 16) {
      alert("Maaf, NIK harus 16 digit");
      return false;
    }else if (CariNIK(nik_add)) {
      alert("Maaf, NIK Sudah Ada");
      return false;
    }else if(name_add == ""){
      alert("Maaf, Nama Harus Di isi");
      return false;
    }else if(!name_add.match(namaformat)){
      alert("Maaf, Nama invalid");
      return false;
    }else if(email_add == ""){
      alert("Maaf, Email Harus Di isi");
      return false;
    }else if(!email_add.match(emailformat)){
      alert("Maaf, Email invalid");
      return false;
    }else if(telp_add == ""){
      alert("Maaf, Nomor Telepon Harus Di isi");
      return false;
    }else if(!telp_add.match(numberformat)){
       alert("Maaf, Nomor Telepon invalid");
       return false;
    // }else if(telp_add.length =<11 ){
    //    alert("Maaf, Nomor Telepon Kurang dari 11 digit");
    //    return false;
    // }else if(telp_add.length > 13){
    //    alert("Maaf, Nomor Telepon Kelebihan 13 digit");
    //    return false;
    }else if(pass_add == ""){
      alert("Maaf, Password Harus Di isi");
      return false;
    }else if(pass_add.length < 4){
      alert("Maaf, Password Harus Lebih dari 3 Karakter");
      return false;
    }else if(pass_add != pass_conf){
      alert("Maaf, Konfirmasi Password Tidak Sesuai");
      return false;
    }else if(alamat_add == ""){
      alert("Maaf, Alamat Harus Di isi");
      return false;
    }else {
       var dbRef_add_proses = firebase.database();
       
       // Isikan data kedalam firebase
       var tambahMember = dbRef_add_proses.ref("Member/" + id_add);
       tambahMember.set({
         id_member : parseInt(id_add), 
         Nama : name_add,
         Email : email_add,
         No_telp : telp_add,
         Password : pass_add,
         Alamat : alamat_add,
         NIK : nik_add
       });
      alert('Member Baru Telah Di Tambahkan!');
      // window.location='datamember.php';
      return true;
    }
}








function ambilDataTerakhir()
  {
    var dbRef_ambilDataTerakhir = firebase.database();
    var cariAkhir = dbRef_ambilDataTerakhir.ref("Member");
    cariAkhir.limitToLast(1).on('child_added', function(dataAkhir) {
      var snap = dataAkhir.val();
      var id_record_terakhir = snap.id_member + 1;
      if (isNaN(snap.id_member)){
        id_record_terakhir = 1;
      }
      document.getElementById("id").value = id_record_terakhir;
    });
  }


function getTanggalSekarang(){
  var today = new Date(); 
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

// Menampilkan data dalam bentuk tabel
function tampilDataMember()
{
 
// Buat referensi database firebase
var dbRef = firebase.database();
var statusAlat = dbRef.ref("Member");
 
// Dapatkan referensi table
var table = document.getElementById("dataTable").getElementsByTagName('tbody')[0];
 
// Membuang semua isi table
$("#dataTable").find("tr:gt(0)").remove();
 
// Memuat Data
statusAlat.on("child_added", function(data, prevChildKey) {
  var newstatusAlat = data.val();
   
  var row = table.insertRow(table.rows.length);
   
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
   
  cell1.innerHTML = newstatusAlat.id_member;
  cell2.innerHTML = newstatusAlat.NIK;
  cell3.innerHTML = newstatusAlat.Nama;
  cell4.innerHTML = newstatusAlat.No_telp;
  cell5.innerHTML = newstatusAlat.Email;
  cell6.innerHTML = newstatusAlat.Alamat;
  cell7.innerHTML = '<button class="btn btn-primary btn-sm" type="button" id="update_data" onclick="updateDataMember(' + newstatusAlat.id_member + ')" data-toggle="modal" data-target="#ModalUpdate">Update</button><br/><button class="btn btn-danger btn-sm" type="button" id="delete_data" onclick="deleteDataMember(' + newstatusAlat.id_member + ')" style="margin-left:10px;"data-toggle="modal" data-target="#ModalDel">Hapus</button>';
  });
}

// Menampilkan data yang akan di update kedalam modal update
function updateDataMember(id_member)
{
 
var dbRef_update_tampil = firebase.database();
var statusAlatdenganID = dbRef_update_tampil.ref("Member/" + id_member);
 
statusAlatdenganID.on("value", function(snapshot) {
var childData = snapshot.val();

document.getElementById("idupdate").setAttribute("value", childData.id_member);
document.getElementById("NIKupdate").setAttribute("value", childData.NIK);
document.getElementById("fullnameupdate").setAttribute("value", childData.Nama);
document.getElementById("inputEmailupdate").setAttribute("value", childData.Email);
document.getElementById("notelpupdate").setAttribute("value", childData.No_telp);
document.getElementById("inputPasswordupdate").setAttribute("value", "");
document.getElementById("confirmPasswordupdate").setAttribute("value", "");
document.getElementById("alamatupdate").innerHTML =childData.Alamat ;
});
 
}



// function tampilDataTransaksi1()
// {
 
// // Buat referensi database firebase
// var dbRef = firebase.database();
// var transaksiMember = dbRef.ref("Transaksi/member");
// var transaksiNonMember = dbRef.ref("Transaksi/nonmember");
 
// // Dapatkan referensi table
// var table = document.getElementById("dataTable").getElementsByTagName('tbody')[0];
 
// // Membuang semua isi table
// $("#dataTable").find("tr:gt(0)").remove();
 
// // Memuat Data
//   transaksiMember.on("child_added", function(data, prevChildKey) {
//     var newstatusTransaksi = data.val();
//     var id_member = newstatusTransaksi.id_member;
//     console.log(id_member);
//     var row = table.insertRow(table.rows.length);
     
//     var cell1 = row.insertCell(0);
//     var cell2 = row.insertCell(1);
//     var cell3 = row.insertCell(2);
//     var cell4 = row.insertCell(3);
//     var cell5 = row.insertCell(4);
//     var cell6 = row.insertCell(5);
//     var cell7 = row.insertCell(6);
//     var cell8 = row.insertCell(7);
//     var cell9 = row.insertCell(8);

//     //ambil data member
//     dbRef.ref("Member/" + id_member).once("value").then(function(snapshot){
//       cell1.innerHTML = newstatusTransaksi.id_transaksi;
//       cell2.innerHTML = snapshot.val().Nama;
//       cell3.innerHTML = newstatusTransaksi.tanggal_masuk;
//       cell4.innerHTML = newstatusTransaksi.tanggal_keluar;
//       cell5.innerHTML = newstatusTransaksi.paket;
//       cell6.innerHTML = newstatusTransaksi.berat;
//       cell7.innerHTML = newstatusTransaksi.harga;
//       cell8.innerHTML = newstatusTransaksi.status;
//       cell9.innerHTML = '<button class="btn btn-primary btn-sm" type="button" id="detail_transaksi" onclick="detailTransaksi(1)" data-toggle="modal" data-target="#ModalDetailTransaksi">Detail</button>';
//     });
//   });

//   transaksiNonMember.on("child_added", function(data, prevChildKey) {
//     var newstatusTransaksi = data.val();
//     var row = table.insertRow(table.rows.length);
     
//     var cell1 = row.insertCell(0);
//     var cell2 = row.insertCell(1);
//     var cell3 = row.insertCell(2);
//     var cell4 = row.insertCell(3);
//     var cell5 = row.insertCell(4);
//     var cell6 = row.insertCell(5);
//     var cell7 = row.insertCell(6);
//     var cell8 = row.insertCell(7);

//     cell1.innerHTML = newstatusTransaksi.id_transaksi;
//     cell2.innerHTML = newstatusTransaksi.nama;
//     cell3.innerHTML = newstatusTransaksi.tanggal_masuk;
//     cell4.innerHTML = newstatusTransaksi.tanggal_keluar;
//     cell5.innerHTML = newstatusTransaksi.paket;
//     cell6.innerHTML = newstatusTransaksi.berat;
//     cell7.innerHTML = newstatusTransaksi.harga;
//     cell8.innerHTML = newstatusTransaksi.status;
//   });
// }

function detailTransaksi(id_transaksi)
{

  var dbRef_detail_transaksi = firebase.database();
  var detailtransaksi = dbRef_detail_transaksi.ref("Transaksi/member/" + id_transaksi);
 
  detailtransaksi.on("value", function(snapshot) {
    var childDataTransaksi = snapshot.val();

    document.getElementById("idtransaksi_detail").setAttribute("value", childDataTransaksi.id_transaksi);
    document.getElementById("idmember_detail").setAttribute("value", childDataTransaksi.id_member);
    });
 
console.log(7);
 
}




 
// Melakukan proses update data
function updateDataMemberProses()
{
    var id_update = document.getElementById("idupdate").value;
    var nik_update = document.getElementById("NIKupdate").value;
    var nama_update = document.getElementById("fullnameupdate").value;
    var email_update = document.getElementById("inputEmailupdate").value;
    var telp_update = document.getElementById("notelpupdate").value;
    var pass_update = document.getElementById("inputPasswordupdate").value;
    var pass_conf_update = document.getElementById("confirmPasswordupdate").value;
    var alamat_update = document.getElementById("alamatupdate").value;

    var numberformat = /^[0-9]+$/;
    var namaformat = /^[a-zA-Z ]*$/;
    var emailformat = /[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,}$/;
    
    if (nik_update == "") {
      alert("Maaf, NIK Harus Di isi");
      return false;
    }else if (isNaN(nik_update) || nik_update < 1) {
      alert("Maaf, NIK invalid");
      return false;
    }else if (nik_update.length < 16) {
      alert("Maaf, NIK harus 16 digit");
      return false;
    }else if(nama_update == ""){
      alert("Maaf, Nama Harus Di isi");
      return false;
    }else if(!nama_update.match(namaformat)){
      alert("Maaf, Nama invalid");
      return false;
    }else if(email_update == ""){
      alert("Maaf, Email Harus Di isi");
      return false;
    }else if(!email_update.match(emailformat)){
      alert("Maaf, Email invalid");
      return false;
    }else if(telp_update == ""){
      alert("Maaf, Nomor Telepon Harus Di isi");
      return false;
    }else if(!telp_update.match(numberformat)){
       alert("Maaf, Nomor Telepon invalid");
       return false;
    // }else if(telp_add.length =<11 ){
    //    alert("Maaf, Nomor Telepon Kurang dari 11 digit");
    //    return false;
    // }else if(telp_add.length > 13){
    //    alert("Maaf, Nomor Telepon Kelebihan 13 digit");
    //    return false;
    }else if(pass_update != pass_conf_update){
      alert("Maaf, Konfirmasi Password Tidak Sesuai");
      return false;
    }else if(alamat_update == ""){
      alert("Maaf, Alamat Harus Di isi");
      return false;
    }else {

      var dbRef_update_proses = firebase.database();
      var update_member = dbRef_update_proses.ref("Member/" + id_update);
 
      if (pass_update == ""){
        update_member.update ({
          "Nama": nama_update,
          "NIK": nik_update,
          "Email": email_update,
          "No_telp": telp_update,
          "Alamat": alamat_update
        });
      } else {
        update_member.update ({
          "Nama": nama_update,
          "NIK": nik_update,
          "Email": email_update,
          "No_telp": telp_update,
          "Password": pass_update,
          "Alamat": alamat_update
        });
      }
      $('#ModalUpdate').modal('hide');
      tampilDataMember();
      alert("Sukses");

    }
 

}



// Melakukan proses delete data yang telah dikonfirmasi sebelumnya
function delDataMemberProses()
{
var id_delete = document.getElementById("iddelete").value;
 
var dbRef_delete = firebase.database();
var statusAlat = dbRef_delete.ref("Member/" + id_delete);
statusAlat.remove();
$('#ModalDel').modal('hide');
tampilDataMember();
 
}
 
// Memasukkan id ke textbox di modal konfirmasi delete
function deleteDataMember(id_member)
{
document.getElementById("iddelete").setAttribute("value", id_member);
}

// Melakukan proses pencarian data
function CariNIK(NIK)
{
// Ambil isi text pencarian
var nama_alat_cari = NIK;
 
// Buat referensi database firebase
var dbRef = firebase.database();
var statusAlat = dbRef.ref("Member");
 
// Ambil data nama_alat sama persis isi text cari
 var query = statusAlat
 .orderByChild('NIK')
 .equalTo(nama_alat_cari)
 .limitToFirst(1);
 
// Ambil data nama_alat huruf depan (dan selebihnya) isi text cari dilimit 1 data saja
// var query = statusAlat
// .orderByChild('nama_alat')
// .startAt(nama_alat_cari)
// .endAt(nama_alat_cari + "\uf8ff")
// .limitToFirst(1);
 
// Ambil data nama_alat huruf depan (dan selebihnya) isi text cari
//var query = statusAlat
//.orderByChild('nama_alat')
//.startAt(nama_alat_cari)
//.endAt(nama_alat_cari + "\uf8ff");
 
// Memuat Data pencarian
query.on("child_added", function(snapshot) {
 
var childData = snapshot.val();
console.log(childData); 
if (childData.exists()) {
  return true;
}else{
  return false;
}
});


 
}