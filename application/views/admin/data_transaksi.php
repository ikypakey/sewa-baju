<div class="main-content">
    <section class="section">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-success bg-success">
                  <i class="fas fa-random"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header ml-auto mt-2">
                    <h6 style="font-size: 30px;">Data Transaksi</h6>
                  </div>
                </div>
              </div>

              <div class="container-fluid rounded" style="background-color: white;">
          <?php echo $this->session->flashdata('pesan') ?>
          <div class="table-responsive table-invoice">
          <table class="table table-hover table-striped table-border mt-3" >
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
              <th style="color: white;">Cek Pembayaran</th>
              <th style="color: white;">Aksi</th>
            </thead>
            <tbody>
              <?php
              $no=1; 
              foreach($transaksi as $tr) : ?>
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

              <td>
                <center>
                  <?php 
                  if(empty($tr->bukti_pembayaran)){ ?>
                    <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                  <?php }else{ ?>
                    <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/transaksi/pembayaran/'.$tr->id_sewa) ?>"><i class="fas fa-check-circle"></i></a>
                  <?php } ?>
                </center>
              </td>

              <td>
                <?php 

                if($tr->status == "1"){
                  echo "-";
                }else{ ?>

                  <div class="row">
                    <a class="btn btn-sm btn-success mr-1" href="<?php echo base_url('admin/transaksi/transaksi_selesai/'.$tr->id_sewa) ?>"><i class="fas fa-check"></i></a>
                    <a class="btn btn-sm btn-danger " href="<?php echo base_url('admin/transaksi/transaksi_batal/'.$tr->id_sewa) ?>"><i class="fas fa-times"></i></a>
                  </div>                                                
                <?php }?>
              </td>


            </tbody>
            <?php endforeach; ?>
          </table>
        </div>
      </div>

        </section>
      </div>
       