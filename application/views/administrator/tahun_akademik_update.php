<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-edit"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <?php foreach ($tahun_akademik as $ta) : ?>
                <form method="post" action="<?php echo base_url('administrator/tahun_akademik/update_aksi') ?>">
                    <div class="form-group">
                        <label>Tahun Akademik</label>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $ta->id_thn_akad ?>">
                        <input type="text" name="tahun_akademik" class="form-control" value="<?php echo $ta->tahun_akademik ?>">
                    </div>
                    <div class="form-group" style="width: 30%">
                        <label>Semester </label>
                        <select name="semester" class="form-control">
                            <option <?php if ($ta->semester == "ganjil") echo 'selected="selected"'; ?>>Ganjil</option>
                            <option <?php if ($ta->semester == "genap") echo 'selected="selected"'; ?>>Genap</option>
                        </select>
                    </div>
                    <div class="form-group" style="width: 30%">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option <?php if ($ta->status == "Aktif") echo 'selected="selected"'; ?>>Aktif</option>
                            <option <?php if ($ta->status == "Tidak Aktif") echo 'selected="selected"'; ?>>Tidak Aktif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo anchor('administrator/tahun_akademik', 'Kembali', array('class' => 'btn btn-secondary')) ?>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>