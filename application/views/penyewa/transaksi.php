<div class="main-content">
        <section class="section">
          <div class="row">          
            <div class="col-md-12">
              <div class="card card-statistic-2" style="margin-top: 60px;">
                <div class="card-icon " style="background-color: #0d86ff">
                  <i class="fas fa-random"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header  mt-2">
                    <h6 style="font-size: 30px;">Data Transaksi : <?php echo $this->session->userdata('nama') ?></h6>
                  </div>
                </div>
              </div>
                
                  <span><?php echo $this->session->flashdata('pesan') ?></span>
                  <div class="card" style=" margin-bottom: 50px;">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
          <table class="table table-hover table-striped table-border  mt-3" >
            <thead style="background-color: #191d21;">
              <th style="color: white;">No</th>
              <th style="color: white;">Penyewa</th>
              <th style="color: white;">Nama Baju</th>
              <th style="color: white;">Kategori</th>
              <th style="color: white;">Ukuran</th>
              <th style="color: white;">Harga Sewa</th>
              <th style="color: white;">Aksi</th>
              <th style="color: white;">Batal</th>
              
            </thead>
            <tbody>
              <?php
              $no=1; 
              foreach($transaksi as $tr) : ?>
              <td><?php echo $no++ ?></td>
              <td><?php echo $tr->nama ?></td> 
              <td><?php echo $tr->nama_baju ?></td> 
              <td><?php echo $tr->nama_kategori ?></td> 
              <td><?php echo $tr->ukuran ?></td> 
              <td>Rp. <?php echo number_format($tr->harga,0,',','.')  ?></td>
              <td>
                <?php if($tr->status_sewa == "Selesai"){ ?>
                  <button class="btn btn-sm btn-danger">Sewa Selesai</button>
                <?php }else{ ?>
                  <a href="<?php echo base_url('penyewa/transaksi/pembayaran/'.$tr->id_sewa) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                <?php } ?>
              </td>

              <td>

                <?php 
                if($tr->status_sewa == 'Belum Selesai'){ ?>
                   <a onclick="return confirm('Yakin Kan Membatalkan Ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('penyewa/transaksi/batal_transaksi/'.$tr->id_sewa) ?>">Batalkan Sewa</a>
                <?php }else{ ?>
                  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                    Batalkan Sewa
                  </button>
                <?php } ?>
               
              </td>

            </tbody>
            <?php endforeach; ?>
          </table>
        </div>

                    </div>
                  </div>

          </div>
          
        </section>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Maaf Tidak Bisa Dibatalkan Karena Sudah Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>
<div class="row">
                <footer class="main-footer bg-dark">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="https://nauval.in/">Kelompok 1</a>
        </div>
        <div class="footer-right">
          <a href="https://www.facebook.com/Pras Fatkhoer/" target="_blank">    <img src="https://d2u7nrdrppwhsn.cloudfront.net/images/icons/social/facebook.png"></a>  <a href="https://www.instagram.com/prasetyafatkhur/" target="_blank">    <img src="https://d2u7nrdrppwhsn.cloudfront.net/images/icons/social/instagram.png"></a>  <a href="https://www.youtube.com/channel/Anti Ruwet" target="_blank">    <img src="https://d2u7nrdrppwhsn.cloudfront.net/images/icons/social/youtube.png"></a>
        </div>
      </footer>
    </div>