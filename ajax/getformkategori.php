<?php

$kategori_id = $_GET['kategori_id'];
if ($kategori_id == 1){
	echo '
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="idtransaksimember" class="form-control" placeholder="ID Transaksi" required="required" disabled>
              <label for="idtransaksimember">ID Transaksi</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="idmember" class="form-control" placeholder="ID Member" required="required">
              <label for="idmember">ID Member</label>
            </div>
          </div>
		      <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="namamember" class="form-control" placeholder="Nama Member" disabled>
              <label for="namamember">Nama Member</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <select class="mdb-select md-form" id="paket" name="paket">
      					   <option value="" disabled selected>Choose your option</option>  
      					   <option value="Kilat">Kilat (6 Jam)</option>
      					   <option value="Express">Express (24 Jam)</option>
      					   <option value="Reguler">Reguler (3 Hari)</option>
				  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="berat" class="form-control" placeholder="Berat Kg" required="required">
                  <label for="berat">Berat (Kg)</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="totalharga" class="form-control" placeholder="Total Biaya" disabled>
              <label for="totalharga">Total Biaya (Rp)</label>
            </div>
          </div>
		   <a class="btn btn-primary btn-block" style="color: white" onclick="return addDataTransaksiMember()">Buat Transaksi</a>
	';
} elseif ($kategori_id == 2) {
	echo '
        <input type="hidden" id="idnonmember" name="idnonmember" value="99999">
        <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="idtransaksinonmember" class="form-control" placeholder="ID Transaksi" required="required" disabled>
              <label for="idtransaksinonmember">ID Transaksi</label>
            </div>
          </div>
        <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap">
              <label for="nama">Nama Lengkap</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="telp" class="form-control" placeholder="No telp">
              <label for="telp">No Telp</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="alamat" class="form-control" placeholder="Alamat">
              <label for="alamat">Alamat</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <select class="mdb-select md-form" id="paket" name="paket">
      					   <option value="" disabled selected>Choose your option</option>  
      					   <option value="Kilat">Kilat (6 Jam)</option>
      					   <option value="Express">Express (24 Jam)</option>
      					   <option value="Reguler">Reguler (3 Hari)</option>
				          </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="berat" class="form-control" placeholder="Berat Kg" required="required">
                  <label for="berat">Berat (Kg)</label>
                </div>
              </div>
            </div>
          </div>
		      <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="totalharga" class="form-control" placeholder="Total Biaya" disabled>
              <label for="totalharga">Total Biaya (Rp)</label>
            </div>
          </div>
          
        <a class="btn btn-primary btn-block" style="color: white" onclick="return addDataTransaksiNonMember()">Buat Transaksi</a>

	';
}

?>