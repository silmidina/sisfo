<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-user-graduate"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <?php echo form_open_multipart('administrator/mahasiswa/tambah_mahasiswa_aksi') ?>
            <div class="form-group">
                <label>NIM Mahasiswa</label>
                <input type="text" name="nim" placeholder="Masukkan nim mahasiswa" class="form-control">
                <?php echo form_error('nim', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="kelas" placeholder="Masukkan kelas mahasiswa" class="form-control">
                <?php echo form_error('kelas', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap" class="form-control">
                <?php echo form_error('nama_lengkap', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea type="text" name="alamat" placeholder="Masukkan alamat" class="form-control" rows="3"></textarea>
                <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" placeholder="Masukkan email" class="form-control">
                <?php echo form_error('email', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="telepon" placeholder="Masukkan telepon" class="form-control">
                <?php echo form_error('telepon', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" placeholder="Masukkan tempat lahir" class="form-control">
                <?php echo form_error('tempat_lahir', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group" style="width: 30%">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" class="form-control">
                <?php echo form_error('tanggal_lahir', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                    <label class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                    <label class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="form-group" style="width: 30%">
                <label>Program Studi</label>
                <select name="nama_prodi" class="form-control">
                    <option value="">-Pilih Program Studi-</option>
                    <?php foreach ($prodi as $prd) : ?>
                        <option value="<?php echo $prd->nama_prodi ?>"><?php echo $prd->nama_prodi ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="photo">
            </div>
            <div class="form-group" style="width: 30%">
                <label>Agama</label>
                <select class="form-control" name="agama">
                    <option value="">-Pilih Agama-</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>
            <?php echo anchor('administrator/mahasiswa', 'Kembali', array('class' => 'btn btn-secondary mb-5 mt-3')) ?>
            <?php form_close(); ?>
        </div>
    </div>
</div>