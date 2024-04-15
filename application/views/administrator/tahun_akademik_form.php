<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-calendar-alt"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <form method="post" action="<?php echo base_url('administrator/tahun_akademik/tambah_tahun_akademik_aksi') ?>">
                <div class="form-group">
                    <label>Tahun Akademik</label>
                    <input type="text" name="tahun_akademik" placeholder="Masukkan tahun akademik" class="form-control">
                    <?php echo form_error('tahun_akademik', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group" style="width: 30%">
                    <label>Semester</label>
                    <select name="semester" class="form-control">
                        <option value="">-Pilih Semester-</option>
                        <option>Ganjil</option>
                        <option>Genap</option>
                    </select>
                    <?php echo form_error('semester', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group" style="width: 30%">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="">-Pilih Status-</option>
                        <option>Aktif</option>
                        <option>Tidak Aktif</option>
                    </select>
                    <?php echo form_error('status', '<div class="text-danger small" ml-3>') ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo anchor('administrator/tahun_akademik', 'Kembali', array('class' => 'btn btn-secondary')) ?>
            </form>
        </div>
    </div>
</div>