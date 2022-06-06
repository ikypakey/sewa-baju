<div class="main-content">
        <section class="section">
          <div class="row">          
            <div class="col-md-12">
              <div class="card card-statistic-2" style="margin-top: 60px;">
                <div class="card-icon " style="background-color: #0d86ff">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header  mt-2">
                    <h6 style="font-size: 30px;">Pembayaran</h6>
                  </div>
                </div>
              </div>
            </div>
                
                  <div class="col-md-7">
                    <div class="card-header alert alert-success">
                      Invoice Pembayaran
                    </div>
                  <div class="card" style=" margin-bottom: 50px;">
                    <div class="card-body">
                      <table class="table">
                        <?php foreach($transaksi as $tr) : ?>
                        <tr>
                          <th>Nama Baju</th>
                          <td>:</td>
                          <td><?php echo $tr->nama_baju ?></td>
                        </tr>
                        <tr>
                          <th>Nama Baju</th>
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
                          <td></td>
                          <td></td>
                          <td><a href="<?php echo base_url('penyewa/transaksi/cetak_invoice/'.$tr->id_sewa) ?>" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                        </tr>


                      <?php endforeach; ?>
                      </table>
                    </div>
                    </div>
                  </div>

                  <div class="col-md-5">
                    
                    <div class="card-header alert alert-primary">
                      Informasi Pembayaran
                    </div>
                    <div class="card">
                    <div class="card-body">
                      <p class="text-success">Silahkan Melakukan Pembayaran :</p>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">BCA : 242904823904</li>
                        <li class="list-group-item">BNI : 424213412333</li>
                        <li class="list-group-item">MANDIRI : 234324343</li>
                      </ul>

                      <?php 

                          if(empty($tr->bukti_pembayaran)) { ?>
                            <button type="button" style="width: 100%" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                              Upload Bukti Pembayaran
                            </button>
                        <?php }elseif($tr->status_pembayaran == '0'){ ?>
                          <button style="width: 100%; font-family: Segoe UI;" class="btn btn-sm btn-warning">
                          <i class="fa fa-clock"></i> Menunggu Konfirmasi
                          </button>
                        <?php }elseif($tr->status_pembayaran == '1'){ ?>
                          <button style="width: 100%; font-family: Segoe UI;" class="btn btn-sm btn-success">
                          <i class="fa fa-check"></i> Pembayaran Selesai
                          </button>
                        <?php } ?>
                    </div>
                  </div>
                  </div>

                </div>

          </div>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayarane</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <form method="POST" action="<?php echo base_url('penyewa/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">

                <div class="modal-body">
                  <div class="form-group">
                    <label>Upload Bukti Pembayaran</label>
                    <input type="hidden" name="id_sewa" class="form-control"
                    value="<?php echo $tr->id_sewa ?>">
                    <input type="file" name="bukti_pembayaran" class="form-control">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-sm btn-success">Kirim</button>
                </div>
                </form>

              </div>
            </div>
          </div>
          
        </section>
      </div>