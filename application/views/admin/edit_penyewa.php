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

<div class="container-fluid">
	<h3>Edit Data Penyewa</h3>

	<?php foreach($penyewa as $py) : ?>

		<form method="post" action="<?php echo base_url('admin/data_penyewa/update') ?>" enctype="multipart/form-data" >

            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" value="<?php echo $py->nama ?>">
              <input type="hidden" name="id_penyewa" class="form-control" value="<?php echo $py->id_penyewa ?>">
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" value="<?php echo $py->username ?>">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="alamat" class="form-control" value="<?php echo $py->alamat ?>">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" value="<?php echo $py->jenis_kelamin ?>">
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label>No. Telepon</label>
              <input type="text" name="no_telepon" class="form-control" value="<?php echo $py->no_telepon ?>">
            </div>
            <div class="form-group">
              <label>No. KTP</label>
              <input type="text" name="no_ktp" class="form-control" value="<?php echo $py->no_ktp ?>">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" name="password" class="form-control" value="<?php echo $py->password ?>">
            </div>
	        <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
	      	</div>

		</form>
  <?php endforeach; ?>

</div>


</section>
</div>