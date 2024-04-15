<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><i class="fas fa-book"></i> <?= $title; ?></h1>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <form method="post" action="<?php echo base_url('administrator/matakuliah/tambah_matakuliah_aksi') ?>">
                <div class="form-group">
                    <label>Kode Matakuliah</label>
                    <input type="text" name="kode_matakuliah" placeholder="Masukkan kode matakuliah" class="form-control">
                    <?php echo form_error('kode_matakuliah', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group">
                    <label>Nama Matakuliah</label>
                    <input type="text" name="nama_matakuliah" placeholder="Masukkan nama matakuliah" class="form-control">
                    <?php echo form_error('nama_matakuliah', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group" style="width: 30%">
                    <label>SKS</label>
                    <select name="sks" class="form-control">
                        <option>-Pilih SKS-</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                <div class="form-group" style="width: 30%">
                    <label>Semester</label>
                    <select name="semester" class="form-control">
                        <option>-Pilih Semester-</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                </div>
                <div class="form-group" style="width: 30%">
                    <label>Nama Program Studi</label>
                    <select name="nama_prodi" class="form-control">
                        <option value="">-Pilih Program Studi-</option>
                        <?php foreach ($prodi as $prd) : ?>
                            <option value="<?php echo $prd->nama_prodi ?>"><?php echo $prd->nama_prodi ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-5">Simpan</button>
                <?php echo anchor('administrator/matakuliah', 'Kembali', array('class' => 'btn btn-secondary mb-5')) ?>
            </form>
        </div>
    </div>
</div>