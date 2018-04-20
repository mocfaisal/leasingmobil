<?php 
$this->load->view('parts/top2');
// $this->load->view('parts/navigation');

 ?>
 
	<div class="blank">
		<h2>Pelanggan</h2>
		<div class="blankpage-main">
<div id="fadd-data">
	
<?php 

$this->load->view('form/input_pelanggan');

 ?>

</div>
<div id="message"></div>
    <div class="container">
    <div style="margin-bottom:20px;">
		<a href="#" id="add-data" class="btn btn-success">
			<span class="glyphicon glyphicon-plus"></span>Add Data
		</a>
	</div>


<!-- <div class="jumbotron"> -->
<?php 

if($tampil=='data'){
	// echo $data_pelanggan;
	$this->load->view('data/pelanggan');
}
elseif($tampil=='input'){
	$this->load->view('form/input_pelanggan');
}

 ?>
<!-- </div> -->
    </div> <!-- /container -->
</div>
</div>

<?php 

$this->load->view('parts/sidebar');
$this->load->view('parts/bottom2');

 ?>
<script type="text/javascript">
	
	    $('#data-pelanggan').DataTable(); 

	    $('#fadd-data').dialog({

		autoOpen : false,
		height : 365,
		width : 500,
		modal : true
	});

	$('.remove-data').click(function(e){
		var ktp_pembeli = $(this).closest('tr').find('td:eq(1)').text();
		var url = $(this).closest('tr').find('a').attr('href');

		$('#message').dialog({
			title : "Konfirmasi",
			autoOpen : false,
			width : 480,
			buttons : {
				'Ok' : function(){
					$.get(url,function(){
						location.reload();
					});
				},
				'Cancel' : function(){
					$(this).dialog('close');
				}
			}
		})
		e.preventDefault();

		$('#message').html('Apakah data <b>'+ktp_pembeli+'</b> akan dihapus?');
		$('#message').dialog('open');
	})

	$('#message').dialog({
		title	: "Keterangan",
		autoOpen : false,
		buttons : {
			'Ok' : function(){
				$(this).dialog('close');
				location.reload();
			}

		}

	});


	$('#add-data').click(function(){
		
		$('#ktp_pembeli').attr('readonly',false);
		$('#ktp_pembeli').val('');
		$('#nama_pembeli').val('');
		$('#alamat_pembeli').val('');
		$('#telpon_pembeli').val('');
		
		$('#fadd-data').dialog({
			title : "Form Input Pelanggan",
			autoOpen : false,
			height : 365,
			width : 500,
			modal : true,
			buttons : {

				'Close' : function(){
					$(this).dialog('close');
				},
				'Save' : function(){
					var url = $('#finput-pelanggan').attr('action');
					var data = $('#finput-pelanggan').serializeArray();
					$.post(url, data, function(i){
						$('#message').html(i);
					});

					$('#message').dialog('open');
					$(this).dialog('close');

				}

			}

		});
$('#fadd-data').dialog('open');
	});


//button edit/update

$('.btn-edit').click(function(){

	var ktp_pembeli = $(this).closest('tr').find('td:eq(1)').text();
	var nama_pembeli = $(this).closest('tr').find('td:eq(2)').text();
	var alamat_pembeli = $(this).closest('tr').find('td:eq(3)').text();
	var telpon_pembeli = $(this).closest('tr').find('td:eq(4)').text();
	

	$('#ktp_pembeli').attr('readonly',true);
	$('#ktp_pembeli').val(ktp_pembeli);
	$('#nama_pembeli').val(nama_pembeli);
	$('#alamat_pembeli').val(alamat_pembeli);
	$('#telpon_pembeli').val(telpon_pembeli);
	
	
	$('#fadd-data').dialog({
		title : "Form Update Pelanggan",
		autoOpen : false,
		height : 365,
		width : 500,
		modal : true,
		buttons : {

			'Close' : function(){
				$(this).dialog('close');
			},
			'Update' : function(){
				var url = "<?php echo base_url() ?>index.php/pelanggan/update";
				var data = $('#finput-pelanggan').serializeArray();
				$.post(url, data, function(i){
					$('#message').html(i);
				});

				$('#message').dialog('open');
				$(this).dialog('close');

			}


		}


	});
$('#fadd-data').dialog('open');
});
</script>

</script>
