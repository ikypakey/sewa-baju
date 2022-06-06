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
	<h3>EDIT DATA BARANG</h3>

	<?php foreach($kategori as $kt) : ?>

		<form method="post" action="<?php echo base_url('admin/data_kategori/update') ?>" enctype="multipart/form-data" >

            <div class="form-group">
              <label>Kode Kategori</label>
               <input type="hidden" name="id_kategori" class="form-control" value="<?php echo $kt->id_kategori ?>">
              <input type="text" name="kode_kategori" class="form-control" value="<?php echo $kt->kode_kategori ?>">
            </div>
            <div class="form-group">
              <label>Nama Kategori</label>
              <input type="text" name="nama_kategori" class="form-control" value="<?php echo $kt->nama_kategori ?>">
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