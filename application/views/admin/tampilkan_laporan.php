



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
                    <h6 style="font-size: 30px;">Tampilkan Laporan</h6>
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

                <div class="btn-group">
                  <a class="btn btn-success" target="_blank" href="<?php echo base_url(). 'admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><i class="fas fa-print"></i> Print Laporan</a>
                </div>
                
              </form>

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
        </div>
      </div>
            </div>
          </div>


          
        </section>
      </div>

      
      