<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-user-graduate"></i> <?= $title; ?></h5>
    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <?php echo form_open_multipart('administrator/siswa/tambah_siswa_aksi') ?>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" name="nama_siswa" placeholder="Masukkan nama siswa" class="form-control">
                <?php echo form_error('nama_siswa', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>NIS</label>
                <input type="text" name="nis" placeholder="Masukkan nis siswa" class="form-control">
                <?php echo form_error('nis', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="kelas" placeholder="Masukkan kelas siswa" class="form-control">
                <?php echo form_error('kelas', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group" style="width: 30%">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" class="form-control">
                <?php echo form_error('tanggal_lahir', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" placeholder="Masukkan tempat lahir" class="form-control">
                <?php echo form_error('tempat_lahir', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea type="text" name="alamat" placeholder="Masukkan alamat" class="form-control" rows="3"></textarea>
                <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
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
            <?php echo anchor('administrator/siswa', 'Kembali', array('class' => 'btn btn-secondary mb-5 mt-3')) ?>
            <?php form_close(); ?>
        </div>
    </div>
</div>