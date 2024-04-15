<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-edit"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <?php foreach ($jurusan as $jrs) : ?>
                <form method="post" action="<?php echo base_url('administrator/jurusan/update_aksi') ?>">
                    <div class="form-group">
                        <label>Kode Jurusan</label>
                        <input type="hidden" name="id_jurusan" value="<?php echo $jrs->id_jurusan ?>">
                        <input type="text" name="kode_jurusan" class="form-control" value="<?php echo $jrs->kode_jurusan ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" class="form-control" value="<?php echo $jrs->nama_jurusan ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo anchor('administrator/jurusan', 'Kembali', array('class' => 'btn btn-secondary')) ?>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>