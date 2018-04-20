<div class="table-responsive">
      <table class="table" id="data-kredit">
        <thead>
          <tr>
          <th>No.</th>
            <th>Kode Kredit</th>
            <th>KTP</th>
            <th>Kode Paket</th>
            <th>Kode Mobil</th>
            <th>Tanggal</th>
           <!--  <th>FC KTP</th>
            <th>FC KK</th>
            <th>FC Slip Gaji</th> -->
            <th>Tools</th>
          </tr>
        </thead>

        <tbody>

          <?php 
          $i=1;
          $query=$this->db->query("SELECT * from Kredit");
                // $data=$query->result_array();  
          foreach($query->result_array() as $data){
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$data['kode_kredit']."</td>";
            echo "<td>".$data['ktp_pembeli']."</td>";
            echo "<td>".$data['kode_paket']."</td>";
            echo "<td>".$data['kode_mobil']."</td>";
            echo "<td>".$data['tgl_kredit']."</td>";
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

