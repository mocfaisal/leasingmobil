
<?php 
$this->load->view('parts/top2');
?>

<div class="blank">
	<h2>Users</h2>
	<div class="blankpage-main">
		<div class="panel-body">
			
			<?php
			$this->load->view('form/input_users');
			?>

		</div>
	</div>
</div>
<div id="message"></div>
<?php
$this->load->view('parts/sidebar');
$this->load->view('parts/bottom2');
?>
<script type="text/javascript">

$('#message').dialog({
			title	: "Keterangan",
			autoOpen : false,
			buttons : {
				'Ok' : function(){
					$(this).dialog('close');
					window.location='?';
				}

			}

		});

	$('#btn-users').click(function(){
		var url = $('#finput-users').attr('action');
		var data = $('#finput-users').serializeArray();
		$.post(url, data, function(i){
			$('#message').html(i);

		$('#message').dialog('open');

		});
		

		
		

	});

</script>