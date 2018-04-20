<div class="table-responsive">
      <table class="table" id="data-mobil">
        <thead>
          <tr>
          <th>No.</th>
            <th>Kode</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Warna</th>
            <th>Harga (Rp)</th>
            <th>Gambar</th>
            <th>Tools</th>
          </tr>
        </thead>

        <tbody>

          <?php 
          $i=1;
          $query=$this->db->query("SELECT * FROM mobil");
                // $data=$query->result_array();  
          foreach($query->result_array() as $data){
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$data['kode_mobil']."</td>";
            echo "<td>".$data['merk']."</td>";
            echo "<td>".$data['type']."</td>";
            echo "<td>".$data['warna']."</td>";
            echo "<td class='hargatbl'>".$data['harga_mobil']."</td>";
            echo "<td>".$data['gambar']."</td>";

            echo "<td>".anchor('mobil/hapus/'.$data['kode_mobil'],'<span class="glyphicon glyphicon-remove"></span>',"class='remove-data'");
         

            echo "<a href='#edit' class='btn-edit'><span class='glyphicon glyphicon-edit'></span></a></td>";
            echo "</tr>";
            $i++;
          }

          ?>
        </tbody>

      </table>           
    </div> 

