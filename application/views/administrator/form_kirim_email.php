<div class="container-fluid">
  <!-- Page Heading -->
  <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-comment-dots"></i> <?= $title; ?></h5>

  <div class="card" style="width: 100%; margin-bottom: 30px;">
    <div class="card-body center">
      <?php
      foreach ($hubungi as $hub) : ?>
        <form method="post" action="<?php echo base_url('administrator/hubungi/kirim_email_aksi') ?>">
          <div class="form-group">
            <label>Email</label>
            <input type="hidden" name="id_hubungi" class="form-control" value="<?php echo $hub->id_hubungi ?>">
            <input type="text" name="email" class="form-control" value="<?php echo $hub->email ?>" readonly>
            <?php echo form_error('email', '<div class="text-danger small" ml-3>') ?>
          </div>
          <div class="form-group">
            <label>Subject</label>
            <input type="text" name="subject" class="form-control">
          </div>
          <div class="form-group">
            <label>Pesan</label>
            <textarea type="text" name="pesan" class="form-control" rows="5"></textarea>
          </div>

          <button type="submit" class="btn btn-primary mb-5 mt-3">Kirim</button>
          <?php echo anchor('administrator/hubungi_kami', 'Kembali', array('class' => 'btn btn-secondary mb-5 mt-3')) ?>
        </form>
      <?php endforeach; ?>
    </div>
  </div>
</div>