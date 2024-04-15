<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-edit"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <?php
            $mhs = $siswa[0]; // Access only the first item in the $matakuliah array
            ?>
            <?php echo form_open_multipart('administrator/siswa/update_siswa_aksi') ?>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" name="nama_siswa" placeholder="Masukkan nama siswa" class="form-control" value="<?php echo $mhs->nama_siswa ?>">
                <?php echo form_error('nama_siswa', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>NIS</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
                <input type="text" name="nis" placeholder="Masukkan nis siswa" class="form-control" value="<?php echo $mhs->nis ?>">
                <?php echo form_error('nis', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="kelas" placeholder="Masukkan nim mahasiswa" class="form-control" value="<?php echo $mhs->kelas ?>">
                <?php echo form_error('kelas', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group" style="width: 30%">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" class="form-control" value="<?php echo $mhs->tanggal_lahir ?>">
                <?php echo form_error('tanggal_lahir', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" placeholder="Masukkan tempat lahir" class="form-control" value="<?php echo $mhs->tempat_lahir ?>">
                <?php echo form_error('tempat_lahir', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" rows="3"><?php echo $mhs->alamat ?></textarea>
                <?php echo form_error('alamat', '<div class="text-danger small ml-3">') ?>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($mhs->jenis_kelamin == 'Laki-laki') ? 'checked' : ''; ?>>
                    <label class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($mhs->jenis_kelamin == 'Perempuan') ? 'checked' : ''; ?>>
                    <label class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="form-group" style="width: 30%">
                <label>Agama</label>
                <select class="form-control" name="agama">
                    <option <?php if ($mhs->agama == "Islam") echo 'selected="selected"'; ?>>Islam</option>
                    <option <?php if ($mhs->agama == "Kristen") echo 'selected="selected"'; ?>>Kristen</option>
                    <option <?php if ($mhs->agama == "Katolik") echo 'selected="selected"'; ?>>Katolik</option>
                    <option <?php if ($mhs->agama == "Budha") echo 'selected="selected"'; ?>>Budha</option>
                    <option <?php if ($mhs->agama == "Hindu") echo 'selected="selected"'; ?>>Hindu</option>
                    <option <?php if ($mhs->agama == "Protestan") echo 'selected="selected"'; ?>>Protestan</option>
                    <option <?php if ($mhs->agama == "Konghucu") echo 'selected="selected"'; ?>>Konghucu</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>
            <?php echo anchor('administrator/siswa', 'Kembali', array('class' => 'btn btn-secondary mb-5 mt-3')) ?>
            <?php form_close(); ?>
        </div>
    </div>
</div>