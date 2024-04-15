<div class="container-fluid">
  <!-- Page Heading -->
  <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-edit"></i> <?= $title; ?></h5>

  <div class="card" style="width: 100%; margin-bottom: 30px;">
    <div class="card-body center">
      <?php foreach ($identitas as $id) : ?>
        <form method="post" action="<?php echo base_url('administrator/identitas/update_aksi') ?>">
          <div class="form-group">
            <label>Judul Website</label>
            <input type="hidden" name="id_identitas" value="<?php echo $id->id_identitas ?>">
            <input type="text" name="nama_website" class="form-control" value="<?php echo $id->nama_website ?>">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $id->alamat ?>">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $id->email ?>">
          </div>
          <div class="form-group">
            <label>No Telepon</label>
            <input type="text" name="telp" class="form-control" value="<?php echo $id->telp ?>">
          </div>

          <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>
          <?php echo anchor('administrator/identitas', 'Kembali', array('class' => 'btn btn-secondary mb-5 mt-3')) ?>
        </form>
      <?php endforeach; ?>
    </div>
  </div>
</div>