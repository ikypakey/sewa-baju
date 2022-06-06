<div class="main-content">
        <section class="section">
          <div class="row">          
            <div class="col-md-12">
              <div class="card card-statistic-2" style="margin-top: 60px;">
                <div class="card-icon " style="background-color: #0d86ff">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header  mt-2">
                    <h6 style="font-size: 30px;">Sewa Sekarang</h6>
                  </div>
                </div>
              </div>

              <span><?php echo $this->session->flashdata('pesan2') ?></span>
                
                <div class="container">

                  
                  <div class="card" style=" margin-bottom: 50px;">
                    <div class="card-body">
                      <?php foreach($detail as $dt) : ?>

                        <form method="POST" action="<?php echo base_url('penyewa/sewa/tambah_sewa_aksi') ?>">
                          <div class="form-group">
                            <label>Harga Sewa/Hari</label>
                            <input type="hidden" name="id_baju" value="<?php echo $dt->id_baju ?>">
                            <input type="text" name="harga" class="form-control" value="<?php echo $dt->harga ?>" readonly>
                          </div>

                          <div class="form-group">
                            <label>Denda/Hari</label>
                            <input type="text" name="denda" class="form-control" value="<?php echo $dt->denda ?>" readonly>
                          </div>

                          <div class="form-group">
                            <label>Tanggal Sewa</label>
                            <input type="date" name="tanggal_sewa" class="form-control" >
                          </div>

                          <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="date" name="tanggal_kembali" class="form-control" >
                          </div>

                          <button type="submit" class="btn btn-warning">Sewa Sekarang</button>
                          
                          
                        </form>
                      <?php endforeach; ?>
                    </div>
                  </div>

                </div>

          </div>
          
        </section>
      </div>