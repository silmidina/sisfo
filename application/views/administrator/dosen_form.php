<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-university"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <?php echo form_open_multipart('administrator/dosen/tambah_dosen_aksi') ?>
            <div class="form-group">
                <label>NIDN</label>
                <input type="text" name="nidn" placeholder="Masukkan nidn dosen" class="form-control">
                <?php echo form_error('nidn', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" name="nama_dosen" placeholder="Masukkan nama dosen" class="form-control">
                <?php echo form_error('nama_dosen', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" placeholder="Masukkan alamat" class="form-control">
                <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group" style="width: 30%">
                <label>Jenis Kelamin:</label><br>
                <select name="jenis_kelamin" class="form-control">
                    <option value="">-Pilih Jenis Kelamin</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
                <?php echo form_error('jenis_kelamin', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" placeholder="Masukkan email" class="form-control">
                <?php echo form_error('email', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="telp" placeholder="Masukkan telp" class="form-control">
                <?php echo form_error('telp', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="photo">
            </div>
            <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>
            <?php echo anchor('administrator/dosen', 'Kembali', array('class' => 'btn btn-secondary mb-5 mt-3')) ?>
            <?php form_close(); ?>
        </div>
    </div>
</div>