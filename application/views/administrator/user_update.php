<div class="container-fluid">
  <!-- Page Heading -->
  <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-edit"></i> <?= $title; ?></h5>

  <div class="card" style="width: 100%; margin-bottom: 30px;">
    <div class="card-body center">
      <?php foreach ($user as $usr) : ?>
        <form method="post" action="<?php echo base_url('administrator/user/update_aksi') ?>">
          <div class="form-group">
            <label>Username</label>
            <input type="hidden" name="id" value="<?php echo $usr->id ?>">
            <input type="text" name="username" class="form-control" value="<?php echo $usr->username ?>">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control" value="<?php echo $usr->password ?>">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $usr->email ?>">
          </div>
          <div class="form-group" style="width: 30%">
            <label>Level</label>
            <select name="level" class="form-control">
              <?php
              if ($level == 'admin') {
              ?>
                <option value="admin" selected>Admin</option>
                <option value="mahasiswa">Mahasiswa</option>
              <?php
              } elseif ($level == 'mahasiswa') {
              ?>
                <option value="admin">Admin</option>
                <option value="mahasiswa" selected>Mahasiswa</option>
              <?php
              } else {
              ?>
                <option value="admin">Admin</option>
                <option value="mahasiswa">Mahasiswa</option>
              <?php } ?>
            </select>
            <?php echo form_error('level', '<div class="text-danger small" ml-3>') ?>
          </div>

          <div class="form-group" style="width: 30%">
            <label>Blokir</label>
            <select name="blokir" class="form-control">
              <?php
              if ($blokir == 'Y') {
              ?>
                <option value="Y" selected>Ya</option>
                <option value="N">Tidak</option>
              <?php
              } elseif ($blokir == 'N') {
              ?>
                <option value="Y">Ya</option>
                <option value="N" selected>Tidak</option>
              <?php
              } else {
              ?>
                <option value="Y">Ya</option>
                <option value="N" selected>Tidak</option>
              <?php } ?>
            </select>
            <?php echo form_error('blokir', '<div class="text-danger small" ml-3>') ?>
          </div>
          <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>
          <?php echo anchor('administrator/user', 'Kembali', array('class' => 'btn btn-secondary mb-5 mt-3')) ?>
        </form>
      <?php endforeach; ?>
    </div>
  </div>
</div>