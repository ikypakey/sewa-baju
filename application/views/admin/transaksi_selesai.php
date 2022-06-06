



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
            <?php foreach($transaksi as $tr) : ?>
              <form method="POST" action="<?php echo base_url('admin/transaksi/transaksi_selesai_aksi') ?>">
                <input type="hidden" name="id_sewa" value="<?php echo $tr->id_sewa ?>">
                <input type="hidden" name="tanggal_kembali" value="<?php echo $tr->tanggal_kembali ?>">
                <input type="hidden" name="denda" value="<?php echo $tr->denda ?>">

                <div class="form-group">
                  <label>Tanggal Pengembalian</label>
                  <input type="date" name="tanggal_pengembalian" class="form-control" value="<?php echo $tr->tanggal_pengembalian ?>">

                </div>

                <div class="form-group">
                  <label>Status Pengembalian</label>
                  <select name="status_pengembalian" class="form-control">
                    <option value="<?php echo $tr->status_pengembalian ?>"><?php echo $tr->status_pengembalian ?></option>
                    <option value="Kembali">Kembali</option>
                    <option value="Belum Kembali">Belum Kembali</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Status Sewa</label>
                  <select name="status_sewa" class="form-control">
                    <option value="<?php echo $tr->status_sewa ?>"><?php echo $tr->status_sewa ?></option>
                    <option value="Selesai">Selesai</option>
                    <option value="Belum Selesai">Belum Selesai</option>
                  </select>
                </div>

                <button type="submit" class="btn  btn-success">Simpan</button>
                
              </form>
            <?php endforeach; ?>
            </div>
          </div>
          
        </section>
      </div>

      
      