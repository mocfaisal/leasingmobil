<div class="table-responsive">
      <table class="table" id="data-pembeli">
        <thead>
          <tr>
          <th>No.</th>
            <th>Kode</th>
            <th>NIK</th>
            <th>Kode Mobil</th>
            <th>Tanggal</th>
            <th>Cash</th>
            <th>Tools</th>
          </tr>
        </thead>

        <tbody>

          <?php 
          $i=1;
          $query=$this->db->query("SELECT * FROM beli_cash");
                // $data=$query->result_array();  
          foreach($query->result_array() as $data){
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$data['kode_cash']."</td>";
            echo "<td>".$data['ktp_pembeli']."</td>";
            echo "<td>".$data['kode_mobil']."</td>";
            echo "<td>".$data['cash_tgl']."</td>";
            echo "<td>".$data['cash_bayar']."</td>";
            // echo "<td>".anchor('transaksi/hapus/'.$data['ktp_pembeli'],'<span class="glyphicon glyphicon-remove"></span>',"class='remove-data'");

            // echo "<a href='#edit' class='btn-edit'><span class='glyphicon glyphicon-edit'></span>'</a></td>";
            echo "<td><button class='pilih-ktp'>Pilih</button></td>";
            echo "</tr>";
            $i++;
          }

          ?>
        </tbody>

      </table>           
    </div> 

