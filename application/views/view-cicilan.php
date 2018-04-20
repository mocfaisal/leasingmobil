<?php 

$this->load->view('parts/top2');
// $this->load->view('parts/navigation');

?>
<div id="d-kredit">
  <?php 

  $this->load->view('data/kredit2');

  ?>
</div>

<div id="d-mobil">

  <?php 

  $this->load->view('data/mobil2');

  ?>

</div>
<div id="d-paket">
  <?php 

  $this->load->view('data/paket2');

  ?>
  

</div>
<div class="blank">
  <h2>Transaksi Cicilan</h2>
  <div class="blankpage-main">
    <div class="panel-body">


      <div class="container">

        <!-- Main component for a primary marketing message or call to action -->

        <?php 
  // $this->load->view('data/pembeli');
        
        $this->load->view('form/input_cicilan');
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
        var url = $('#finput-kredit').attr('action');
        var data = $('#finput-kredit').serializeArray();
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

      $('#d-kredit').dialog({
        autoOpen:false,
        height:465,
        width:850,
        modal:true
      });

      $('#d-paket').dialog({
        autoOpen:false,
        height:465,
        width:850,
        modal:true
      });


      function disablenumber($str){
        var a=$str;
        a=a.replace(/\,/g,''); 
        a=parseInt(a,10);  
        return a;
      };
      function bayar(){


        var harga_mobil = $('#harga_mobil').val();
        var persen = $('#uang_muka').val();
        var bunga = $('#bunga').val();
        var hasil = disablenumber(harga_mobil);
        var hitung1 = hasil * persen/100;
        var ph = hasil - hitung1;
        var tahun;
        var bunga2;
        var bulan;
        $('#dp').val(ph);
        if (bunga == '8%'){
          tahun = 1;
          bunga2 = 8;
          bulan = 12;
        }
        else if(bunga == '9%'){
          tahun = 2;
          bunga2 = 9;
          bulan = 24;
        }
        else if(bunga == '10%'){
          tahun = 3;
          bunga2 = 10;
          bulan = 36;
        }
        

        var hitung2 = ph * (tahun * bunga2)/100;
        var hasilnya = Math.round((ph+hitung2)/bulan,-3);
        var hasilasli = Math.round(hasilnya,-3);
         // alert(hasilnya);
        $('#bayar').val(hasilnya);

      };
      $(function(){

        $('#search-kredit').click(function(){
          $('#d-kredit').dialog('open');
        });
        $('#search-mobil').click(function(){
          $('#d-mobil').dialog('open');
        });

        $('#search-paket').click(function(){
          $('#d-paket').dialog('open');
        });
      });

      $('.pilih-kredit').click(function(){
        var kredit = $(this).closest('tr').find('td:eq(1)').text();
        var jumlah_cicilan = $(this).closest('tr').find('td:eq(2)').text();
        var harga_cicilan = $(this).closest('tr').find('td:eq(4)').text();
        $('#kode_kredit').val(kredit);
        $('#jml_cicilan').val(jumlah_cicilan);
        $('#harga_cicilan').val(harga_cicilan);
        $('#harga_cicilan2').val(harga_cicilan);

        $('#d-kredit').dialog('close');
      });

      $('.pilih-mobil').click(function(){
        var mobil = $(this).closest('tr').find('td:eq(1)').text();
        var harga = $(this).closest('tr').find('td:eq(5)').text();
        $('#kode_mobil').val(mobil);
        $('#harga_mobil').val(harga);
        $('#d-mobil').dialog('close');
         bayar();

      });

      $('.pilih-paket').click(function(){
        var paket = $(this).closest('tr').find('td:eq(1)').text();
        $('#kode_paket').val(paket);
        $('#d-paket').dialog('close');
      });

      $('#fotokopi_ktp').on('change',function(){

        if($(this).is(':checked')){
          $(this).val('1');
        }else{
          $(this).val('0');
        }
      });
      $('#fotokopi_kk').on('change',function(){

        if($(this).is(':checked')){
          $(this).val('1');
        }else{
          $(this).val('0');
        }
      });

      $('#fotokopi_slip_gaji').on('change',function(){

        if($(this).is(':checked')){
          $(this).val('1');
        }else{
          $(this).val('0');
        }
      });

      $('#hitung_bayar').click(function(){
        bayar();
      });
      $('#uang_muka').on('change',function(){
        bayar();
      });

      $('#bayar_cicilan').on('change',function(){
      var harga = $('#harga_cicilan2').val();
      var hasil = harga * $('#bayar_cicilan').val();
     $('#harga_cicilan').val(hasil);
      
      });

      $('.hargatbl').number(true);
      $('#bayar').number(true);
      $('#data-kredit').dataTable();
      $('#data-mobil').dataTable();
      $('#data-paket').dataTable();
    </script>
    <?php 
echo round(2888889,-3);
// echo str_replace(',','','100,000,000');
;

     ?>