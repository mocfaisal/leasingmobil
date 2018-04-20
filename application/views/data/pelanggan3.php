<div class="table-responsive">
      <table class="table" id="data-pelanggan">
        <thead>
          <tr>
          <th>No.</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telpon</th>
          </tr>
        </thead>

        <tbody>

          <?php 
          $i=1;
          $query=$this->db->query("SELECT * FROM pembeli");
                // $data=$query->result_array();  
          foreach($query->result_array() as $data){
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$data['ktp_pembeli']."</td>";
            echo "<td>".$data['nama_pembeli']."</td>";
            echo "<td>".$data['alamat_pembeli']."</td>";
            echo "<td>".$data['telpon_pembeli']."</td>";
            echo "</tr>";
            $i++;
          }

          ?>
        </tbody>

      </table>           
    </div> 

