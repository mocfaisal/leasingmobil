<div class="table-responsive">
      <table class="table" id="data-paket">
        <thead>
          <tr>
          <th>No.</th>
            <th>Kode</th>
            <th>Harga</th>
            <th>Uang Muka</th>
            <th>Jumlah Cicilan</th>
            <th>Bunga</th>
            <th>Cicilan</th>
            <th>Tools</th>
          </tr>
        </thead>

        <tbody>

          <?php 
          $i=1;
          $query=$this->db->query("SELECT * FROM paket_kredit");
                // $data=$query->result_array();  
          foreach($query->result_array() as $data){
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$data['kode_paket']."</td>";
            echo "<td class='hargatbl'>".$data['harga_paket']."</td>";
            echo "<td class='hargatbl'>".$data['uang_muka']."</td>";
            echo "<td>".$data['paket_jml_cicilan']."</td>";
            echo "<td>".$data['bunga']."</td>";
            echo "<td class='hargatbl'>".$data['nilai_cicilan']."</td>";
            
            echo "<td>".anchor('transaksi/hapus/'.$data['kode_paket'],'<span class="glyphicon glyphicon-remove"></span>',"class='remove-data'");
         

            echo "<a href='#edit' class='btn-edit'><span class='glyphicon glyphicon-edit'></span></a></td>";
            echo "</tr>";
            $i++;
          }

          ?>
        </tbody>

      </table>           
    </div> 

