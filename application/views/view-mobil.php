<?php 
$this->load->view('parts/top2');
// $this->load->view('parts/navigation');

?>

	<div class="blank">
		<h2>Mobil</h2>
		<div class="blankpage-main">
			<div id="fadd-data">

			 <?php

				$this->load->view('form/input_mobil');

				?>

			</div>

			<div id="message"></div>
			<div class="container">

				<div style="margin-bottom:20px;">
					<a href="#" id="add-data" class="btn btn-success">
						<span class="glyphicon glyphicon-plus"></span>Add Data
					</a>
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
		
		<!-- /container -->


    <!-- <div class="container">
<div class="jumbotron">
<?php 

if($tampil=='data'){
	// echo $data_mobil;
	$this->load->view('data/mobil');
}
elseif($tampil=='input'){
	$this->load->view('form/input_mobil');
}

 ?>
</div>
</div>  /container -->

<?php 

$this->load->view('parts/sidebar');
$this->load->view('parts/bottom2');


?>
<script type="text/javascript">
	
	$('#data-mobil').DataTable(); 


	$('#fadd-data').dialog({

		autoOpen : false,
		height : 500,
		width : 500,
		modal : true
	});

	$('.remove-data').click(function(e){
		var kode_mobil = $(this).closest('tr').find('td:eq(1)').text();
		var url = $(this).closest('tr').find('a').attr('href');

		$('#message').dialog({
			title : "Konfirmasi",
			autoOpen : false,
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

		$('#message').html('Apakah data <b>'+kode_mobil+'</b> akan dihapus?');
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
		
		$('#kode_mobil').attr('readonly',true);
		$('#kode_mobil').val('');
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
		$('#fadd-data').dialog({
			title : "Form Input Mobil",
			autoOpen : false,
			height : 500,
			width : 620,
			modal : true,
			buttons : {

				'Close' : function(){
					$(this).dialog('close');
				},
				'Save' : function(){
					var url = $('#finput-mobil').attr('action');
					var data = $('#finput-mobil').serializeArray();
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

	var kode_mobil = $(this).closest('tr').find('td:eq(1)').text();
	var merk = $(this).closest('tr').find('td:eq(2)').text();
	var type = $(this).closest('tr').find('td:eq(3)').text();
	var warna = $(this).closest('tr').find('td:eq(4)').text();
	var harga_mobil = $(this).closest('tr').find('td:eq(5)').text();
	var gambar = $(this).closest('tr').find('td:eq(6)').text();

	$('#kode_mobil').attr('readonly',true);
	$('#kode_mobil').val(kode_mobil);
	$('#merk').val(merk);
	$('#type').val(type);
	$('#warna').val(warna);
	$('#harga').val(harga_mobil);
	$('#gambar').val(gambar);

	
	$('#fadd-data').dialog({
		title : "Form Update Mobil",
		autoOpen : false,
		height : 500,
		width : 620,
		modal : true,
		buttons : {

			'Close' : function(){
				$(this).dialog('close');
			},
			'Update' : function(){
				var url = "<?php echo base_url() ?>index.php/mobil/update";
				var data = $('#finput-mobil').serializeArray();
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
<script type="text/javascript">

	$('#harga').number(true);
	$('.hargatbl').number(true);
</script>
<?php 
// print_r($_SESSION);
?>