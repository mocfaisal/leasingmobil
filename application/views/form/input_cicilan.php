<?php 
echo "<h5>".$this->session->flashdata('error')."</h5>";
echo form_open_multipart('transaksi/inputa','class="form-horizontal" role="form" id="finput-cicilan"');

 ?>

 <div class="form-group">
 	<label for="kode_angsuran" class="col-sm-2 control-label">Kode Angsuran</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="kode_angsuran" name="kode_angsuran" value="<?php echo $kode_angsuran; ?>" readonly>
 	</div>
 </div>

  <div class="form-group">
 	<label for="kode_kredit" class="col-sm-2 control-label">Kode Kredit</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="kode_kredit" name="kode_kredit" placeholder="Kode Kredit">
 	</div>
 	<div><input type="button" name="search-kredit" id="search-kredit" value="Search" class="btn btn-success"></div>
 </div>
 
  <div class="form-group">
 	<label for="tgl_byr" class="col-sm-2 control-label">Tanggal Bayar</label>
 	<div class="col-sm-4">
 		<input type="date" class="form-control" id="tgl_byr" name="tgl_byr">
 	</div>
 </div>

  <div class="form-group">
 	<label for="jml_cicilan" class="col-sm-2 control-label">Jumlah Cicilan</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="jml_cicilan" name="jml_cicilan" readonly>
 	</div>
 </div>

 <div class="form-group">
 	<label for="bayar_cicilan" class="col-sm-2 control-label">Bayar Cicilan</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="bayar_cicilan" name="bayar_cicilan" type="number" max="36" min="1">
 	</div>
 </div>

 <div class="form-group">
 	<label for="harga_cicilan" class="col-sm-2 control-label">Harga Cicilan</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="harga_cicilan" name="harga_cicilan">
 		 	</div>
 </div>

<div class="form-group" hidden="">
 	<label for="harga_cicilan" class="col-sm-2 control-label">Harga Cicilan</label>
 	<div class="col-sm-4">
 	
 		<input class="form-control" id="harga_cicilan2" name="harga_cicilan2" hidden="">
 	</div>
 </div>

<!-- 
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="input_cash" class="btn btn-default">

	</div>
</div> -->
