<div class="main-content">
    <section class="section">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-success bg-success">
                  <i class="fas fa-grip-horizontal"></i> 
                </div>
                <div class="card-wrap">
                  <div class="card-header ml-auto mt-2">
                    <h6 style="font-size: 30px;">Data Kategori</h6>
                  </div>
                </div>
              </div>

              <div class="container-fluid rounded" style="background-color: white;">

          <button class="btn btn-primary mb-2 mt-3" data-toggle="modal" data-target="#tambahkategori"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
          <?php echo $this->session->flashdata('pesan') ?>
          <div class="table-responsive table-invoice">
          <table class="table table-hover table-striped table-border" >
            <thead class="bg-success" >
              <th style="color: white;">No</th>
              <th style="color: white;">Nama Kategori</th>
              <th style="color: white;">Aksi</th>
            </thead>
            <tbody>
              <?php
              $no=1; 
              foreach($kategori as $kt) : ?>
              <td><?php echo $no++ ?></td> 
              <td><?php echo $kt->nama_kategori ?></td>         
              
              <td>
                <?php echo anchor('admin/data_kategori/hapus/' .$kt->id_kategori, '<button type="button" class="btn btn-danger btn-sm">Hapus</button>') ?>
                <?php echo anchor('admin/data_kategori/edit/' .$kt->id_kategori, '<button type="button" class="btn btn-primary btn-sm">Ubah</button>') ?>
              </td> 

            </tbody>
            <?php endforeach; ?>
          </table>
        </div>

        </section>
      </div>

       <div class="modal fade" id="tambahkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="<?php echo  base_url('admin/data_kategori/tambah') ?>" enctype="multipart/form-data" >
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Kode Kategori</label>
                          <input type="text" name="kode_kategori" class="form-control">
                           <?php echo form_error('nama_baju', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                          <label>Nama Kategori</label>
                          <input type="text" name="nama_kategori" class="form-control">
                           <?php echo form_error('nama_baju', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                          <div class="text-right">
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
