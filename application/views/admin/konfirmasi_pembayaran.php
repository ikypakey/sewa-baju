     <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">          
            <div class="col-md-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-success bg-success">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header ml-auto mt-2">
                    <h6 style="font-size: 30px;">Dashboard</h6>
                  </div>
                </div>
              </div>
              <center class="card" style="width: 50%">
                <div class="card-body">
                  <form method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran') ?>">
                    <?php foreach($pembayaran as $pm) : ?>
                      <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/transaksi/download_pembayaran/'.$pm->id_sewa) ?>"><i class="fas fa-download"></i> Download Bukti Pembayaran</a>

                      <div class="custom-control custom-switch ml-5">
                        <input type="hidden" class="custom-control-input" value="<?php echo $pm->id_sewa ?>" name="id_sewa">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
                        <label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
                      </div>
                      <hr>
                      <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <?php endforeach; ?>
                  </form>
                  
                </div>
              </center>
            </div>
          </div>
          
        </section>
      </div>

      
      