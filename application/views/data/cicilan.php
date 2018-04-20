<div class="table-responsive">
      <table class="table" id="data-cicilan">
        <thead>
          <tr>
          <th>No.</th>
            <th>Kode Cicilan</th>
            <th>Kode Kredit</th>
            <th>Tanggal Cicilan</th>
            <th>Jumlah</th>
            <th>Cicilan ke</th>
            <th>Sisa</th>
            <th>Harga</th>
            <th>Tools</th>
          </tr>
        </thead>

        <tbody>

          <?php 
          $i=1;
          $query=$this->db->query("SELECT * FROM bayar_cicilan");
                // $data=$query->result_array();  
          foreach($query->result_array() as $data){
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$data['kode_cicilan']."</td>";
            echo "<td>".$data['kode_kredit']."</td>";
            echo "<td>".$data['tgl_cicilan']."</td>";
            echo "<td>".$data['jml_cicilan']."</td>";
            echo "<td>".$data['cicilan_ke']."</td>";
            echo "<td>".$data['cicilan_sisa_ke']."</td>";
            echo "<td>".$data['cicilan_sisa_harga']."</td>";
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

