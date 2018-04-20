<?php 
echo "<h5>".$this->session->flashdata('error')."</h5>";
echo form_open_multipart('pelanggan/input','class="form-horizontal" role="form" id="finput-pelanggan"');

 ?>

 <div class="form-group">
 	<label for="ktp_pembeli" class="col-sm-3 control-label">NIK</label>
 	<div class="col-sm-8">
 		<input class="form-control" id="ktp_pembeli" placeholder="NIK" name="ktp_pembeli">
 	</div>
 </div>

  <div class="form-group">
 	<label for="nama_pembeli" class="col-sm-3 control-label">Nama</label>
 	<div class="col-sm-8">
 		<input class="form-control" id="nama_pembeli" placeholder="nama_pembeli" name="nama_pembeli">
 	</div>
 </div>

  <div class="form-group">
 	<label for="alamat_pembeli" class="col-sm-3 control-label">Alamat</label>
 	<div class="col-sm-8">
 		<input class="form-control" id="alamat_pembeli" placeholder="alamat_pembeli" name="alamat_pembeli">
 	</div>
 </div>

  <div class="form-group">
 	<label for="telpon_pembeli" class="col-sm-3 control-label">Telpon</label>
 	<div class="col-sm-8">
 		<input class="form-control" id="telpon_pembeli" placeholder="telpon_pembeli" name="telpon_pembeli">
 	</div>
 </div>

<!-- <div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="input_pelanggan" class="btn btn-default">

	</div>
</div> -->
