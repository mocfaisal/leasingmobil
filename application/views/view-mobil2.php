<?php 

$this->load->view('parts/top2');
// $this->load->view('parts/navigation2');

?>

<div class="inner-block">
	<div class="blank">
	<h2>Mobil</h2>
	<div class="blankpage-main">
	<div class="panel-body">
		<div style="margin-bottom:20px;">
		<button id="AddMobilModb" class="btn btn-primary btn-med" data-toggle="modal" data-target="#EditModal">Add Data</button>
	</div>
		<?php 

		if($tampil=='data'){
			$this->load->view('data/mobil');
		}else if($tampil=='input'){
			$this->load->view('form/input_mobil');
		}



		?>
	</div>
	</div>
	</div>
</div>
<?php 
$this->load->view('parts/sidebar');
$this->load->view('parts/bottom2');

?>

<script type="text/javascript">

	$('#data-mobil').DataTable();
	
    $('.hargatbl').number(true,2); 

   

	$('.edit-data').click(function(e){
		
		var kode_mobil = $(this).closest('tr').find('td:eq(1)').text();
		var merk = $(this).closest('tr').find('td:eq(2)').text();
		var type = $(this).closest('tr').find('td:eq(3)').text();
		var warna = $(this).closest('tr').find('td:eq(4)').text();
		var harga_mobil = $(this).closest('tr').find('td:eq(5)').text();
		var gambar = $(this).closest('tr').find('td:eq(6)').text();

		$('#labelEdit').text('Edit Data Mobil');
		$('#savemobilbtn').text('Simpan');
		
		$('#kode_mobil').val(kode_mobil);
		$('#kode_mobil').attr('readonly',true);
	
		$('#merk').val(merk);
		$('#type').val(type);
		$('#warna').val(warna);
		$('#harga').val(harga_mobil);
		$('#gambar').val(gambar);
		

 		$('#savemobilbtn').click(function(){
			
			var url = "<?php echo base_url() ?>index.php/mobil/update";
			var data = $('#finput-mobil').serializeArray();
			$.post(url, data, function(i){
				$('#messages').html(i);
			});
			$('#EditModal').modal('hide');
			$('#message').modal('show');
			$('#message').on('hide.bs.modal', function(){
				window.location='mobil';
			});
			// window.location='mobil/update/'+kode_mobil;
			// $.get(url,function(){
			// 			location.reload();
		});
	});

	$('#AddMobilModb').click(function(e){

		$('#labelEdit').text('Tambah Data Mobil');
		$('#savemobilbtn').text('Tambah');
		$('#kode_mobil').val('');
		$('#kode_mobil').attr('readonly',true);
		
		$('#merk').val('');
		$('#type').val('');
		$('#warna').val('');
		$('#harga').val('');
		$('#gambar').val('');

		$('#merk').blur(function() {
			
			var merk = $('#merk').val();
			var url = "<?php echo base_url() ?>index.php/mobil/kodeMobil/"+merk;
			$.get(url,function(e){
				$('#kode_mobil').val(e);
			})

		});

		$('#savemobilbtn').click(function(){


			var url = $('#finput-mobil').attr('action');
			var data = $('#finput-mobil').serializeArray();
			$.post(url, data, function(i){
				$('#messages').html(i);
			});
			$('#EditModal').modal('hide');
			$('#message').modal('show');
		});

		$('#message').on('hide.bs.modal', function(){
			window.location='mobil';
		});
		e.preventDefault();	
	});

	$('.remove-data').click(function(e){

		var kode_mobil = $(this).closest('tr').find('td:eq(1)').text();
		var url = $(this).closest('tr').find('a').attr('href');

		$('#RemoveModals').html('Apakah data <b>'+ kode_mobil +'</b> akan dihapus?');
		$('#okremoveModal').click(function(){
			window.location='mobil/hapus/'+kode_mobil;
			$.get(url,function(){
				location.reload();
			});
		});

		e.preventDefault();	
	});

	


</script>
<!-- Modal -->

<div id="EditModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="EditModal" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cancel</span></button>

				<h4 class="modal-title" id="labelEdit">Edit Data Mobil</h4>
			</div>
			<div class="modal-body">


				<?php 

				$this->load->view('form/input_mobil');

				?>
				

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button id="savemobilbtn" type="button" class="btn btn-primary">Save</button>
			</div>
		</div>
	</div>

</div>

<!-- Modal Remove -->
<div id="RemoveModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="RemoveModal" aria-hiDDen="true" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cancel</span></button>
				<h4 class="modal-title" id="labelRemove">Konfirmasi</h4>
			</div>
			<div class="modal-body">

				<div id="RemoveModals"></div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button id="okremoveModal" type="button" class="btn btn-primary">Remove</button>
			</div>
		</div>
	</div>

</div>

<!-- Modal Message -->
<div id="message" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="AddMobilMod" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="labelinfo">Info</h4>
			</div>
			<div class="modal-body">

				<div id="messages"></div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>

</div>

<!-- Modal Add mobil -->
