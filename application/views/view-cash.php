<?php 

$this->load->view('parts/top2');
// $this->load->view('parts/navigation');

?>
<div id="d-ktp">
<?php 

$this->load->view('data/pelanggan2');

 ?>
</div>

<div id="d-mobil">
  
  <?php 

$this->load->view('data/mobil2');

 ?>

</div>
<div class="blank">
  <h2>Transaksi Cash</h2>
  <div class="blankpage-main">
    <div class="panel-body">


<div class="container">

  <!-- Main component for a primary marketing message or call to action -->

  <?php 
  // $this->load->view('data/pembeli');
  $this->load->view('form/input_cash');
  ?>      
<div id="proses" class="btn btn-primary col-md-12">Proses</div>
 <!-- /container -->
</div>
<div id="message"></div>
</div>
</div>
</div>

<?php 

$this->load->view('parts/sidebar');
$this->load->view('parts/bottom2');

?>
<script type="text/javascript">
  $('#proses').click(function(){
var url = $('#finput-cash').attr('action');
          var data = $('#finput-cash').serializeArray();
          $.post(url, data, function(i){
            $('#message').html(i);
          });

          $('#message').dialog('open');

  });


  $('#message').dialog({
    title : "Keterangan",
    autoOpen : false,
    buttons : {
      'Ok' : function(){
        $(this).dialog('close');
        location.reload();
      }

    }

  });

$('#d-mobil').dialog({
  autoOpen:false,
  height:465,
  width:850,
  modal:true
});

  $('#d-ktp').dialog({
    autoOpen:false,
    height:465,
    width:850,
    modal:true
  });

  $(function(){
    $('#search-ktp').click(function(){
      $('#d-ktp').dialog('open');
    });
$('#search-mobil').click(function(){
  $('#d-mobil').dialog('open');
});

  });

  $('.pilih-ktp').click(function(){
      var ktp = $(this).closest('tr').find('td:eq(1)').text();
      $('#ktp_pembeli').val(ktp);
      $('#d-ktp').dialog('close');
  });

$('.pilih-mobil').click(function(){
  var mobil = $(this).closest('tr').find('td:eq(1)').text();
  var harga = $(this).closest('tr').find('td:eq(5)').text();
  $('#kode_mobil').val(mobil);
  $('#bayar').val(harga);
  $('#d-mobil').dialog('close');

});

  $('.hargatbl').number(true);
  $('#bayar').number(true);
  $('#data-pelanggan').dataTable();
  $('#data-mobil').dataTable();
</script>