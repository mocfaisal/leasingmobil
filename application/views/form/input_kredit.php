<?php 
echo "<h5>".$this->session->flashdata('error')."</h5>";
echo form_open_multipart('transaksi/inputk','class="form-horizontal" role="form" id="finput-kredit"');

 ?>

 <div class="form-group">
 	<label for="kode_kredit" class="col-sm-2 control-label">Kode Kredit</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="kode_kredit" name="kode_kredit" value="<?php echo $kode_kredit; ?>" readonly>
 	</div>
 </div>

  <div class="form-group">
 	<label for="merk" class="col-sm-2 control-label">No. KTP</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="ktp_pembeli" name="ktp_pembeli" placeholder="No. KTP" readonly>
 	</div>
 	<div><input type="button" name="search-ktp" id="search-ktp" value="Search" class="btn btn-success"></div>
 </div>


  <div class="form-group">
 	<label for="kode_mobil" class="col-sm-2 control-label">Kode Mobil</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="kode_mobil" name="kode_mobil" readonly>
 	</div>
 	<div><input type="button" name="search-mobil" id="search-mobil" value="Search" class="btn btn-success"></div>
 </div>

<div class="form-group">
 	<label for="harga_mobil" class="col-sm-2 control-label">Harga Mobil</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="harga_mobil" name="harga_mobil" readonly>
 	</div>
 </div>

<div class="form-group">
 	<label for="uang_muka" class="col-sm-2 control-label">Uang Muka</label>
 	<div class="col-sm-4">
 		<select class="form-control" id="uang_muka" name="uang_muka">
 			
 			<option value="20">20%</option>
 			<option value="25">25%</option>
 			<option value="30">30%</option>

 		</select>
 	</div>
 </div>

<div class="form-group" hidden="">
 	<label for="uang_muka" class="col-sm-2 control-label">Uang Muka</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="dp" name="dp"></input>
 	</div>
 </div>

<div class="form-group">
 	<label for="jumlah_cicilan" class="col-sm-2 control-label">Jumlah Cicilan</label>
 	<div class="col-sm-4">
 		<select class="form-control" id="jumlah_cicilan" name="jumlah_cicilan">
 			
 			<option value="12">1 Tahun</option>
 			<option value="24">2 Tahun</option>
 			<option value="36">3 Tahun</option>

 		</select>
 	</div>
 </div>

 <div class="form-group">
 	<label for="bunga" class="col-sm-2 control-label">Bunga</label>
 	<div class="col-sm-4">
 		<input type="text" class="form-control" id="bunga" name="bunga" value="8%" readonly="">
 	</div>
 </div>

<!-- <div class="form-group">
 	<label for="kode_paket" class="col-sm-2 control-label">Kode Paket</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="kode_paket" name="kode_paket">
 	</div>
 	<div><input type="button" name="search-paket" id="search-paket" value="Search" class="btn btn-success"></div>
 </div>
 -->

  <div class="form-group">
 	<label for="tgl_kredit" class="col-sm-2 control-label">Tanggal Bayar</label>
 	<div class="col-sm-4">
 		<input type="date" class="form-control" id="tgl_kredit" name="tgl_kredit">
 	</div>
 </div>

<div class="form-group">
 	<label for="Lampiran" class="col-sm-2 control-label">Lampiran</label>

 	<div class="col-sm-2">
 	 		<input type="checkbox" id="fotokopi_ktp" name="fotokopi_ktp" value="0"> Foto Copy KTP
</div>
 		<div class="col-sm-2">

 		<input type="checkbox" id="fotokopi_kk" name="fotokopi_kk" value="0"> Foto Copy KK
 		</div>
 		<div class="col-sm-2">

 		<input type="checkbox" id="fotokopi_slip_gaji" name="fotokopi_slip_gaji" value="0"> Foto Copy Slip Gaji
 	</div>
 </div>

  <div class="form-group">
 	<label for="bayar" class="col-sm-2 control-label">Bayar Cicilan</label>
 	<div class="col-sm-4">
 		<input class="form-control" id="bayar" name="bayar" readonly>
 		<!-- <span>Per bulan</span> -->
 	</div>
 	<div class="col-sm-2"><b>Per bulan</b></div>
 	<!-- <div><input type="button" name="hitung_bayar" id="hitung_bayar" value="Hitung Cicilan" class="btn btn-success"></div> -->
 </div>

<!-- 
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="input_kredit" class="btn btn-default">

	</div>
</div> -->
