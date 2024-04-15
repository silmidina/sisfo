<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><i class="fas fa-university"></i> <?= $title; ?></h1>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <form method="post" action="<?php echo base_url('administrator/prodi/tambah_prodi_aksi') ?>">
                <div class="form-group">
                    <label>Kode Prodi</label>
                    <input type="text" name="kode_prodi" placeholder="Masukkan kode prodi" class="form-control">
                    <?php echo form_error('kode_prodi', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group">
                    <label>Nama Prodi</label>
                    <input type="text" name="nama_prodi" placeholder="Masukkan nama prodi" class="form-control">
                    <?php echo form_error('nama_prodi', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group" style="width: 30%">
                    <label>Nama Jurusan</label>
                    <select name="nama_jurusan" class="form-control">
                        <option value="">-Pilih Jurusan-</option>
                        <?php foreach ($jurusan as $jrs) : ?>
                            <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo anchor('administrator/prodi', 'Kembali', array('class' => 'btn btn-secondary')) ?>
            </form>
        </div>
    </div>
</div>