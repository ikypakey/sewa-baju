
          <p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>    

                    <button class="card-header btn-success" style="width: 100%">
                      Laporan Pembayaran Anda
                    </button>
                      <table>
                        <tr>
                          <td>Dari Tanggal</td>
                          <td>:</td>
                          <td><?php echo date('d-M-Y', strtotime($_GET['dari'])); ?></td>
                        </tr>
                        <tr>
                          <td>Sampai Tanggal</td>
                          <td>:</td>
                          <td><?php echo date('d-M-Y', strtotime($_GET['sampai'])); ?></td>
                        </tr>

                      </table>

                  

                  
          
          <table class="table table-bordered table-striped" >
            <thead class="bg-success" >
              <th style="color: white;">No</th>
              <th style="color: white;">Penyewa</th>
              <th style="color: white;">Nama Baju</th>
              <th style="color: white;">Tgl. Sewa</th>
              <th style="color: white;">Tgl. Kembali</th>
              <th style="color: white;">Harga/Hari</th>
              <th style="color: white;">Denda/Hari</th>
              <th style="color: white;">Total Denda</th>
              <th style="color: white;">Tgl. Dikembalikan</th>
              <th style="color: white;">Status Pengembalian</th>
              <th style="color: white;">Status Sewa</th>
            </thead>
            <tbody>
              <?php
              $no=1; 
              foreach($laporan as $tr) : ?>
              <td><?php echo $no++ ?></td>
              <td><?php echo $tr->nama ?></td> 
              <td><?php echo $tr->nama_baju ?></td> 
              <td><?php echo date('d/m/Y', strtotime($tr->tanggal_sewa)); ?></td>
              <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)); ?></td>
              <td>Rp. <?php echo number_format($tr->harga,0,',','.')  ?></td>
              <td>Rp. <?php echo number_format($tr->denda,0,',','.') ?></td>
              <td>Rp. <?php echo number_format($tr->total_denda,0,',','.') ?></td>
              <td><?php 

             if($tr->tanggal_pengembalian == "0000-00-00"){
               echo "-";
             }else{
              echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
             }
              ?>
                
              </td>

              <td>
                <?php echo $tr->status_pengembalian
                ?>
              </td>

              <td>
                <?php echo $tr->status_sewa
                ?>
              </td>




            </tbody>
            <?php endforeach; ?>
          </table>

                  <p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>    
   



      <script type="text/javascript">
        window.print();
      </script>