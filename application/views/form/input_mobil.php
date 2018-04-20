<?php 
echo "<h5>".$this->session->flashdata('error')."</h5>";
echo form_open_multipart('mobil/input','class="form-horizontal" role="form" id="finput-mobil"');

 ?>

 <div class="form-group">
 	<label for="kode_mobil" class="col-sm-3 control-label">Kode Mobil</label>
 	<div class="col-sm-8">
 		<input class="form-control" id="kode_mobil" placeholder="Kode Mobil" name="kode_mobil">
 	</div>
 </div>

  <div class="form-group">
 	<label for="merk" class="col-sm-3 control-label">Merk Mobil</label>
 	<div class="col-sm-8">
 		<input class="form-control" id="merk" placeholder="Merk Mobil" name="merk">
 	</div>
 </div>

  <div class="form-group">
 	<label for="type" class="col-sm-3 control-label">Type Mobil</label>
 	<div class="col-sm-8">
 		<input class="form-control" id="type" placeholder="Type Mobil" name="type">
 	</div>
 </div>

  <div class="form-group">
 	<label for="warna" class="col-sm-3 control-label">Warna Mobil</label>
 	<div class="col-sm-8">
 		<input class="form-control" id="warna" placeholder="Warna Mobil" name="warna">
 	</div>
 </div>

  <div class="form-group">
 	<label for="harga" class="col-sm-3 control-label">Harga Mobil</label>
 	<div class="col-sm-8">
 		<input class="form-control" id="harga" placeholder="Harga Mobil" name="harga">
		</div>
 </div>

  <div class="form-group">
 	<label for="gambar" class="col-sm-3 control-label">Gambar Mobil</label>
 	<div class="col-sm-8">
 		<input class="form-control" id="gambar" placeholder="Gambar Mobil" name="gambar">
 	</div>
 </div>

<!-- <div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="input_mobil" class="btn btn-default">

	</div>
</div> -->