<div class="table-responsive">
      <table class="table" id="data-kredit">
        <thead>
          <tr>
          <th>No.</th>
            <th>Kode Kredit</th>
            <th>Jumlah Cicilan</th>
            <th>Harga Paket</th>
            <th>Harga Cicilan</th>
            <th>Status</th>
           <!--  <th>FC KTP</th>
            <th>FC KK</th>
            <th>FC Slip Gaji</th> -->
            <th>Tools</th>
          </tr>
        </thead>

        <tbody>

          <?php 
          $i=1;
          $query=$this->db->query("SELECT * from bayar_lunas");
                // $data=$query->result_array();  
          foreach($query->result_array() as $data){
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$data['kode_kredit']."</td>";
            echo "<td>".$data['paket_jml_cicilan']."</td>";
            echo "<td>".$data['harga_paket']."</td>";
            echo "<td>".$data['nilai_cicilan']."</td>";
            echo "<td>".$data['status_kredit']."</td>";
            // echo "<td>".$data['fotokopi_ktp']."</td>";
            // echo "<td>".$data['fotokopi_kk']."</td>";
            // echo "<td>".$data['fotokopi_slip_gaji']."</td>";
            // echo "<td>".anchor('transaksi/hapus/'.$data['ktp_pembeli'],'<span class="glyphicon glyphicon-remove"></span>',"class='remove-data'");

            // echo "<a href='#edit' class='btn-edit'><span class='glyphicon glyphicon-edit'></span>'</a></td>";
            echo "<td><button class='pilih-kredit'>Pilih</button></td>";
            echo "</tr>";
            $i++;
          }

          ?>
        </tbody>

      </table>           
    </div> 

