



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
                    <h6 style="font-size: 30px;">Transaksi Selesai</h6>
                  </div>
                </div>
              </div>
              <form method="POST" action="<?php echo base_url('admin/laporan') ?>">

                <div class="form-group">
                  <label>Dari Tanggal</label>
                  <input type="date" name="dari" class="form-control">
                  <?php echo form_error('dari', '<span class="text-small text-danger">','</span>' ) ?>
                </div>

                <div class="form-group">
                  <label>Sampai Tanggal</label>
                  <input type="date" name="sampai" class="form-control">
                  <?php echo form_error('sampai', '<span class="text-small text-danger">','</span>' ) ?>
                </div>

                

                <button type="submit" class="btn  btn-primary">Tampilkan Data</button>
                
              </form>
            </div>
          </div>
          
        </section>
      </div>

      
      