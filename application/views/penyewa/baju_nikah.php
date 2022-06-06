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
                    <h6 style="font-size: 30px;">Baju Pernikahan</h6>
                  </div>
                </div>
              </div>
               <?php echo $this->session->flashdata('pesan') ?>
                          <div class="row" >
                            <?php foreach ($baju_nikah as $bj) : ?>



                            <div class="col-md-3 mb-1 text-center">
                             <div class="card">
                              <img src="<?php echo base_url().'/uploads/'.$bj->foto ?>" class="" alt="..." style="width: 100%; height: 100%;">
                              <div class="card-body">
                                <h5 class="card-title mb-1"><font face="Segoe UI" size="3" color="black"><?php echo $bj->nama_baju ?></font></h5>
                                <small style="font-size: 12px"><?php echo $bj->nama_kategori ?></small><br>
                              <span class="badge badge-success mb-2">Rp. <?php echo number_format($bj->harga,0,',','.')  ?> </span>
                              <br>
                              <i class="fas fa-map-marker-alt " style="color: red;"></i><small><font face="calibri" size="2" color="grey">  Kota Mojokerto</font></small>
                              <br>
                              <i class="fas fa-star" style="color: orange;"></i><i class="fas fa-star" style="color: orange;"></i><i class="fas fa-star" style="color: orange;"></i><i class="fas fa-star" style="color: orange;"></i><i class="fas fa-star" style="color: orange;"></i><br>  
                                <?php 
                                    if ($bj->status == "1"){
                                        echo anchor('penyewa/sewa/tambah_sewa/'.$bj->id_baju,'<button class="btn btn-success mt-2"><span class="rent-btn">Sewa</span></button>' ) ;
                                    }else{
                                      echo "<button class='btn btn-danger mt-2'><span class='rent-btn'>Tidak Tersedia</span></button>" ;
                                    }
                                   ?>
                                <a href="<?php echo base_url('penyewa/dashboard/detail_baju/').$bj->id_baju ?>" class="btn btn-primary mt-2">Detail</a>
                              </div>
                            </div>         
                         </div>
                       <?php endforeach; ?>

            </div>
          </div>
          <div>
          
        </section>
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