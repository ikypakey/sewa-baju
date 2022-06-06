<div class="main-content">
        <section class="section">
          <div class="row">          
            <div class="col-md-12">
              <div class="card card-statistic-2" style="margin-top: 60px;">
                <div class="card-icon " style="background-color: #0d86ff">
                  <i class="fas fa-tshirt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header  mt-2">
                    <h6 style="font-size: 30px;">Detail Baju</h6>
                  </div>
                </div>
              </div>
               <div class="card">
    <div class="card-body">
      <?php foreach ($detail as $dt) : ?>
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo base_url('uploads/'.$dt->foto) ?>" style="width: 21rem; height: 21rem;">
          </div>
          <div class="col-md-6">
             <div class="card">
              <div class="card-body">
                <table class="table table-hover table-border">
                  <tr>
                  <th style="background-color: #363636; color: white; ">Nama Kategori</th>
                  <td><?php echo $dt->nama_kategori ?></td>
                  </tr>
                  <tr>
                  <th style="background-color: #363636; color: white;">Nama Baju</th>
                  <td><?php echo $dt->nama_baju ?></td>
                  </tr>
                  <tr>
                  <th style="background-color: #363636; color: white;">Ukuran</th>
                  <td><?php echo $dt->ukuran ?></td>
                  </tr>
                  <tr>
                  <th style="background-color: #363636; color: white;">Status</th>
                  <td><?php if($dt->status == '1'){
                    echo "Tersedia";
                  }else{
                    echo "Tidak Tersedia";
                  } ?></td>
                  </tr>                
                </table>
                <div style="text-align: right;">
                <?php 
                      if ($dt->status == "0"){
                        echo "<span class='btn btn-danger' disable ml-auto>Telah di Sewa </span>";
                      }else{
                        echo anchor('penyewa/sewa/tambah_sewa/'.$dt->id_baju, '<button class="btn btn-success">Sewa</button> ');
                      }
                     ?>
                     </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
          </div>
          
        </section>
      </div>