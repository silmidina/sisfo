<div class="container-fluid">
  <!-- Page Heading -->
  <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-edit"></i> <?= $title; ?></h5>

  <div class="card" style="width: 100%; margin-bottom: 30px;">
    <div class="card-body center">
      <?php
      foreach ($dosen as $dsn) : ?>
        <?php echo form_open_multipart('administrator/dosen/update_dosen_aksi') ?>
        <div class="form-group">
          <label>NIDN Dosen</label>
          <input type="hidden" name="id_dosen" class="form-control" value="<?php echo $dsn->id_dosen ?>">
          <input type="text" name="nidn" class="form-control" value="<?php echo $dsn->nidn ?>">
          <?php echo form_error('nidn', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
          <label>Nama Dosen</label>
          <input type="text" name="nama_dosen" class="form-control" value="<?php echo $dsn->nama_dosen ?>">
          <?php echo form_error('nama_dosen', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" name="alamat" class="form-control" value="<?php echo $dsn->alamat ?>">
          <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group" style="width: 30%">
          <label>Jenis Kelamin</label><br>
          <select name="jenis_kelamin" class="form-control">
            <option <?php echo ($dsn->jenis_kelamin == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
            <option <?php echo ($dsn->jenis_kelamin == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
          </select>

          <?php echo form_error('jenis_kelamin', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control" value="<?php echo $dsn->email ?>">
          <?php echo form_error('email', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
          <label>Telepon</label>
          <input type="text" name="telp" class="form-control" value="<?php echo $dsn->telp ?>">
          <?php echo form_error('telp', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
          <?php foreach ($detail as $dt) : ?>
            <img src="<?php echo base_url() . 'assets/uploads/' . $dsn->photo ?>" style="width:15%">
          <?php endforeach; ?><br><br>
          <label>Foto</label>
          <input type="file" name="userfile" value="<?php echo $dsn->photo ?>">
        </div>

        <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>
        <?php echo anchor('administrator/dosen', 'Kembali', array('class' => 'btn btn-secondary mb-5 mt-3')) ?>
        <?php form_close(); ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>