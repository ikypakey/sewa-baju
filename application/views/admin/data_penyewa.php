<div class="main-content">
    <section class="section">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-success bg-success">
                  <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header ml-auto mt-2">
                    <h6 style="font-size: 30px;">Data Penyewa</h6>
                  </div>
                </div>
              </div>

              <div class="container-fluid rounded" style="background-color: white;">

          <button class="btn btn-primary mb-2 mt-3" data-toggle="modal" data-target="#tambahpenyewa"><i class="fas fa-plus fa-sm"></i> Tambah Penyewa</button>
          <?php echo $this->session->flashdata('pesan') ?>
          <div class="table-responsive table-invoice">
          <table class="table table-hover table-striped table-border" >
            <thead class="bg-success" >
              <th style="color: white;">No</th>
              <th style="color: white;">Nama</th>
              <th style="color: white;">Username</th>
              <th style="color: white;">Alamat</th>
              <th style="color: white;">Jenis Kelamin</th>
              <th style="color: white;">No. Telepon</th>
              <th style="color: white;">No. KTP</th>
              <th style="color: white;">Password</th>
              <th style="color: white;">Aksi</th>
            </thead>
            <tbody>
              <?php
              $no=1; 
              foreach($penyewa as $py) : ?>
              <td><?php echo $no++ ?></td>
              <td><?php echo $py->nama ?></td> 
              <td><?php echo $py->username ?></td> 
              <td><?php echo $py->alamat ?></td>
              <td><?php echo $py->jenis_kelamin ?></td>
              <td><?php echo $py->no_telepon ?></td>
              <td><?php echo $py->no_ktp ?></td>
              <td><?php echo $py->password ?></td>
              <td>
                <div class="row">
                <?php echo anchor('admin/data_penyewa/hapus/' .$py->id_penyewa, '<button type="button" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash fa-sm"></i></button>') ?>
                <?php echo anchor('admin/data_penyewa/edit/' .$py->id_penyewa, '<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit fa-sm"></i></button>') ?>
                </div>
              </td> 

            </tbody>
            <?php endforeach; ?>
          </table>
        </div>

        </section>
      </div>
        <!-- Modal -->
        <div class="modal fade" id="tambahpenyewa" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Penyewa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="<?php echo  base_url('admin/data_penyewa/tambah') ?>" enctype="multipart/form-data" >
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Nama </label>
                          <input type="text" name="nama" class="form-control">
                           <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="username" class="form-control">
                           <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" name="alamat" class="form-control">
                           <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select name="jenis_kelamin" class="form-control">
                            <option >Laki-laki</option>
                            <option >Perempuan</option>
                          </select>
                           <?php echo form_error('jenis_kelamin', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>No. Telepon</label>
                          <input type="text" name="no_telepon" class="form-control">
                           <?php echo form_error('no_telepon', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                          <label>No. KTP</label>
                          <input type="text" name="no_ktp" class="form-control">
                           <?php echo form_error('no_ktp', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="text" name="password" class="form-control">
                           <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                      </div>

                      <div class="col-md-12 mr-auto">
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

