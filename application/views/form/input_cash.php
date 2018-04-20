<?php 
echo "<h5>".$this->session->flashdata('error')."</h5>";
echo form_open_multipart('transaksi/inputc','class="form-horizontal" role="form" id="finput-cash"');

 ?>

 <div class="form-group">
 	<label for="kode_cash" class="col-sm-2 control-label">Kode Cash</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="kode_cash" name="kode_cash" value="<?php echo $kode_cash; ?>" readonly>
 	</div>
 </div>

  <div class="form-group">
 	<label for="ktp" class="col-sm-2 control-label">No. KTP</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="ktp_pembeli" name="ktp_pembeli" placeholder="No. KTP">
 	</div>
 	<div><input type="button" name="search-ktp" id="search-ktp" value="Search" class="btn btn-success"></div>
 </div>


  <div class="form-group">
 	<label for="kode_mobil" class="col-sm-2 control-label">Kode Mobil</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="kode_mobil" name="kode_mobil">
 	</div>
 	<div><input type="button" name="search-mobil" id="search-mobil" value="Search" class="btn btn-success"></div>
 </div>

  <div class="form-group">
 	<label for="tgl_byr" class="col-sm-2 control-label">Tanggal Bayar</label>
 	<div class="col-sm-4">
 		<input type="date" class="form-control" id="tgl_byr" name="tgl_byr">
 	</div>
 </div>

  <div class="form-group">
 	<label for="bayar" class="col-sm-2 control-label">Bayar</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="bayar" name="bayar">
 	</div>
 </div>

<!-- 
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="input_cash" class="btn btn-default">

	</div>
</div> -->
