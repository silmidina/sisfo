<div class="container-fluid">
  <!-- Page Heading -->
  <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-edit"></i> <?= $title; ?></h5>

  <div class="card" style="width: 100%; margin-bottom: 30px;">
    <div class="card-body center">
      <?php
      foreach ($informasi as $info) : ?>
        <form method="post" action="<?php echo base_url('administrator/informasi/update_informasi_aksi') ?>">

          <div class="form-group">
            <label>Icon</label>
            <input type="hidden" name="id_informasi" class="form-control" value="<?php echo $info->id_informasi ?>">
            <input type="text" name="icon" class="form-control" value="<?php echo $info->icon ?>">
            <?php echo form_error('icon', '<div class="text-danger small" ml-3>') ?>
          </div>
          <div class="form-group">
            <label>Judul Informasi</label>
            <input type="text" name="judul_informasi" class="form-control" value="<?php echo $info->judul_informasi ?>">
            <?php echo form_error('judul_informasi', '<div class="text-danger small" ml-3>') ?>
          </div>
          <div class="form-group">
            <label>Isi Informasi</label>
            <textarea name="isi_informasi" class="form-control" rows="3"><?php echo $info->isi_informasi ?></textarea>
            <?php echo form_error('isi_informasi', '<div class="text-danger small ml-3">') ?>
          </div>

          <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>
          <?php echo anchor('administrator/informasi', 'Kembali', array('class' => 'btn btn-secondary mb-5 mt-3')) ?>
        </form>
      <?php endforeach; ?>
    </div>
  </div>
</div>