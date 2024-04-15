<div class="container-fluid">
  <!-- Page Heading -->
  <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-edit"></i> <?= $title; ?></h5>

  <div class="card" style="width: 100%; margin-bottom: 30px;">
    <div class="card-body center">
      <?php foreach ($tentang as $ttg) : ?>
        <form method="post" action="<?php echo base_url('administrator/tentang_kampus/update_aksi') ?>">
          <div class="form-group">
            <label>Sejarah</label>
            <input type="hidden" name="id" value="<?php echo $ttg->id ?>">
            <input type="text" name="sejarah" class="form-control" value="<?php echo $ttg->sejarah ?>">
          </div>
          <div class="form-group">
            <label>Visi</label>
            <input type="text" name="visi" class="form-control" value="<?php echo $ttg->visi ?>">
          </div>
          <div class="form-group">
            <label>Misi</label>
            <input type="text" name="misi" class="form-control" value="<?php echo $ttg->misi ?>">
          </div>

          <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>
          <?php echo anchor('administrator/tentang_kampus', 'Kembali', array('class' => 'btn btn-secondary mb-5 mt-3')) ?>
        </form>
      <?php endforeach; ?>
    </div>
  </div>
</div>