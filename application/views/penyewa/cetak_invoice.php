<div class="main-content">
        <section class="section">
          <div class="row">
          <p>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>    
                
                  <div class="col-md-8 ">
                    <button class="card-header btn-success" style="width: 100%">
                      Invoice Pembayaran Anda
                    </button>
                  <div class="card" style=" margin-bottom: 50px;">
                    <div class="card-body">
                      <table class="table">
                        <?php foreach($transaksi as $tr) : ?>
                          <tr>
                          <th>Nama Penyewa</th>
                          <td>:</td>
                          <td><?php echo $tr->nama ?></td>
                        </tr>
                        <tr>
                          <th>Nama Baju</th>
                          <td>:</td>
                          <td><?php echo $tr->nama_baju ?></td>
                        </tr>
                        <tr>
                          <th>Foto Baju</th>
                          <td>:</td>
                          <td><img src="<?php echo base_url().'/uploads/'.$tr->foto ?>" class="" alt="..." style="width: 15rem; height: 15rem;"></td>
                        </tr>
                        <tr>
                          <th>Tanggal Sewa</th>
                          <td>:</td>
                          <td><?php echo $tr->tanggal_sewa ?></td>
                        </tr>
                        <tr>
                          <th>Tanggal Kembali</th>
                          <td>:</td>
                          <td><?php echo $tr->tanggal_kembali ?></td>
                        </tr>
                        <tr>
                          <th>Biaya Sewa/Hari</th>
                          <td>:</td>
                          <td>Rp. <?php echo number_format($tr->harga,0,',','.' )?></td>
                        </tr>
                        <tr>
                          <?php 

                            $x = strtotime($tr->tanggal_kembali);
                            $y = strtotime($tr->tanggal_sewa);
                            $jmlHari = abs(($x - $y)/(60*60*24));
                           ?>
                          <th>Jumlah Pembayaran</th>
                          <td>:</td>
                          <td><?php echo $jmlHari ?> Hari</td>
                        </tr>

                        <tr>
                          <th class="text-success">Jumlah Pembayaran</th>
                          <td>:</td>
                          <td><button class="btn btn-outline-success">Rp. <?php echo number_format($tr->harga *  $jmlHari,0,',','.') ?> </button></td>
                        </tr>

                        <tr>
                          <td>Status PEmbayaran</td>
                          <td>:</td>
                          <td>
                            <?php 
                            if($tr->status_pembayaran == '0'){ echo  "Belum Lunas";

                            }else{
                              echo "Lunas";
                            } ?>
                          </td>
                          
                        </tr>


                      <?php endforeach; ?>
                      </table>
                    </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    
                    <button class="card-header btn-primary" style="width: 100%">
                      Informasi Pembayaran
                    </button>
                    <div class="card">
                    <div class="card-body">
                      <p class="text-success">Rekening Pembayaran</p>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">BCA : 242904823904</li>
                        <li class="list-group-item">BNI : 424213412333</li>
                        <li class="list-group-item">MANDIRI : 234324343</li>
                      </ul>
                    </div>
                  </div>
                  </div>

                  <p>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>   

                </div>

          </div>

          
        </section>
      </div>


      <script type="text/javascript">
        window.print();
      </script>