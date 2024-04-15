<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><i class="fas fa-university"></i> <?= $title; ?></h1>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <form method="post" action="<?php echo base_url('administrator/jurusan/input_aksi') ?>">
                <div class="form-group">
                    <label>Kode Jurusan</label>
                    <input type="text" name="kode_jurusan" placeholder="Masukkan kode jurusan" class="form-control">
                    <?php echo form_error('kode_jurusan', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group">
                    <label>Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" placeholder="Masukkan nama jurusan" class="form-control">
                    <?php echo form_error('nama_jurusan', '<div class="text-danger small" ml-3>') ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo anchor('administrator/jurusan', 'Kembali', array('class' => 'btn btn-secondary')) ?>
            </form>
        </div>
    </div>
</div>