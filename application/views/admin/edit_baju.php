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

	<?php foreach($baju as $bj) : ?>

		<form method="post" action="<?php echo base_url('admin/data_baju/update') ?>" enctype="multipart/form-data" >

            <div class="form-group">
              <label>Foto</label>
              <input type="file" name="foto" class="form-control" value="<?php echo $bj->foto ?>">
            </div>
            <div class="form-group">
              <label>Kategori</label>
              <input type="hidden" name="id_baju" class="form-control" value="<?php echo $bj->id_baju ?>">
              <select name="nama_kategori" class="form-control">
                            <option value="<?php echo $bj->nama_kategori ?>">Pilih Kode Kategori</option>
                            <?php foreach($kategori as $kt) : ?>
                              <option value="<?php echo $kt->nama_kategori ?>">
                                <?php echo $kt->nama_kategori ?></option>
                            <?php endforeach; ?>
                          </select>
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama_baju" class="form-control" value="<?php echo $bj->nama_baju ?>">
            </div>
            <div class="form-group">
              <label>Ukuran</label>
              <input type="text" name="ukuran" class="form-control" value="<?php echo $bj->ukuran ?>">
            </div>
            <div class="form-group">
              <label>Harga</label>
              <input type="text" name="harga" class="form-control" value="<?php echo $bj->harga ?>">
            </div>
            <div class="form-group">
              <label>Denda</label>
              <input type="text" name="denda" class="form-control" value="<?php echo $bj->denda ?>">
            </div>
            <div class="form-group">
              <label>Status</label>
              <select name="status" class="form-control">
              	<option <?php if($bj->status == "1") {echo "selected = 'selected' ";} echo $bj->status; ?> value="1">Tersedia</option>
              	<option <?php if($bj->status == "0") {echo "selected = 'selected' ";} echo $bj->status; ?> value="0">Tidak Tersedia</option>
              </select>
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