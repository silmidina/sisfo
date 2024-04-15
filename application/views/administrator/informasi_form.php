<div class="container-fluid">
  <!-- Page Heading -->
  <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-bullhorn"></i> <?= $title; ?></h5>

  <div class="card" style="width: 100%; margin-bottom: 30px;">
    <div class="card-body center">
      <form method="post" action="<?php echo base_url('administrator/informasi/tambah_informasi_aksi') ?>">
        <div class="form-group">
          <label>Icon</label>
          <input type="hidden" name="id_informasi" class="form-control">
          <input type="text" name="icon" class="form-control">
          <?php echo form_error('icon', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
          <label>Judul Informasi</label>
          <input type="text" name="judul_informasi" class="form-control">
          <?php echo form_error('judul_informasi', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
          <label>Isi Informasi</label>
          <textarea type="text" name="isi_informasi" class="form-control" rows="3"></textarea>
          <?php echo form_error('isi_informasi', '<div class="text-danger small" ml-3>') ?>
        </div>

        <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>
        <?php echo anchor('administrator/informasi', 'Kembali', array('class' => 'btn btn-secondary mb-5 mt-3')) ?>
      </form>
    </div>
  </div>
</div>