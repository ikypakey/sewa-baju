<div class="main-content">
    <section class="section">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-success bg-success">
                  <i class="fas fa-tshirt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header ml-auto mt-2">
                    <h6 style="font-size: 30px;">Data Baju</h6>
                  </div>
                </div>
              </div>

              <div class="container-fluid rounded" style="background-color: white;">

          <button class="btn btn-primary mb-2 mt-3" data-toggle="modal" data-target="#tambahbaju"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
          <?php echo $this->session->flashdata('pesan') ?>
          <div class="table-responsive table-invoice">
          <table class="table table-hover table-striped table-border" >
            <thead class="bg-success" >
              <th style="color: white;">No</th>
              <th style="color: white;">Foto</th>
              <th style="color: white;">Kategori</th>
              <th style="color: white;">Nama</th>
              <th style="color: white;">Ukuran</th>
              <th style="color: white;">Status</th>
              <th style="color: white;">Aksi</th>
            </thead>
            <tbody>
              <?php
              $no=1; 
              foreach($baju as $bj) : ?>
              <td><?php echo $no++ ?></td>
              <td><img src="<?php echo base_url().'/uploads/'.$bj->foto ?>" class="card-img-top" alt="..." style="width: 70px; "></td>
              <td><?php echo $bj->nama_kategori ?></td> 
              <td><?php echo $bj->nama_baju ?></td> 
              <td><?php echo $bj->ukuran ?></td>
              <td><?php
              if($bj->status == "0"){
                echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
              }else{
                echo "<span class='badge badge-primary'> Tersedia </span>";
              }
               ?></td>             
              
              <td>
                <?php echo anchor('admin/data_baju/detail/' .$bj->id_baju, '<button type="button" class="btn btn-success btn-sm"><i class="fas fa-info-circle fa-sm"></i></button>') ?>
                <?php echo anchor('admin/data_baju/hapus/' .$bj->id_baju, '<button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash fa-sm"></i></button>') ?>
                <?php echo anchor('admin/data_baju/edit/' .$bj->id_baju, '<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit fa-sm"></i></button>') ?>
              </td> 

            </tbody>
            <?php endforeach; ?>
          </table>
        </div>

        </section>
      </div>
        <!-- Modal -->
        <div class="modal fade" id="tambahbaju" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Data Baju</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="<?php echo  base_url('admin/data_baju/tambah') ?>" enctype="multipart/form-data" >
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Kode Kategori Baju</label>
                          <select name="nama_kategori" class="form-control">
                            <option value="">Pilih Kode Kategori</option>
                            <?php foreach($kategori as $kt) : ?>
                              <option value="<?php echo $kt->nama_kategori ?>">
                                <?php echo $kt->nama_kategori ?></option>
                            <?php endforeach; ?>
                          </select>
                          <?php echo form_error('kode_kategori', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                          <label>Nama Baju</label>
                          <input type="text" name="nama_baju" class="form-control">
                           <?php echo form_error('nama_baju', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                          <label>Ukuran Baju</label>
                          <select name="ukuran" class="form-control">
                            <option ></option>
                            <option >Dewasa</option>
                            <option >Anak-anak</option>
                          </select>
                           <?php echo form_error('ukuran', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="form-group">
                          <label>Status</label>
                          <select name="status" class="form-control">
                            <option value="">Pilih Status</option>
                            <option value="0">Tidak Tersedia</option>
                            <option value="1">Tersedia</option>
                          </select>
                           <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                      </div>  
                      <div class="col-md-6">
                        
                        <div class="form-group" >
                          <label>Foto</label>
                          <input type="file" name="foto" class="form-control">
                        </div>
                        <div class="form-group" >
                          <label>Harga</label>
                          <input type="text" name="harga" class="form-control">
                        </div>
                        <div class="form-group" >
                          <label>Denda</label>
                          <input type="text" name="denda" class="form-control" style="margin-bottom: 55px;">
                        </div>
                        <div>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                       </div>                                              
                      </div>
                       
                    </div>

                  </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

 



</div>

