<div class="table-responsive">
      <table class="table" id="data-pelanggan">
        <thead>
          <tr>
          <th>No.</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telpon</th>
            <th>Tools</th>
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
            echo "<td>".anchor('pelanggan/hapus/'.$data['ktp_pembeli'],'<span class="glyphicon glyphicon-remove"></span>',"class='remove-data'");

            echo "<a href='#edit' class='btn-edit'><span class='glyphicon glyphicon-edit'></span></a></td>";
            echo "</tr>";
            $i++;
          }

          ?>
        </tbody>

      </table>           
    </div> 

