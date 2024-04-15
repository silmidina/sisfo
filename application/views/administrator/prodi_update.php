<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-edit"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <?php foreach ($prodi as $prd) : ?>
                <form method="post" action="<?php echo base_url('administrator/prodi/update_aksi') ?>">
                    <div class="form-group">
                        <label>Kode Prodi</label>
                        <input type="hidden" name="id_prodi" value="<?php echo $prd->id_prodi ?>">
                        <input type="text" name="kode_prodi" class="form-control" value="<?php echo $prd->kode_prodi ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Prodi</label>
                        <input type="hidden" name="id_prodi" value="<?php echo $prd->id_prodi ?>">
                        <input type="text" name="nama_prodi" class="form-control" value="<?php echo $prd->nama_prodi ?>">
                    </div>
                    <div class="form-group" style="width: 30%">
                        <label>Nama Jurusan</label>
                        <select name="nama_jurusan" class="form-control">
                            <option value="<?php echo $prd->nama_jurusan; ?>"><?php echo $prd->nama_jurusan; ?></option>

                            <?php foreach ($jurusan as $jrs) : ?>
                                <option value="<?php echo $jrs->nama_jurusan; ?>"><?php echo $jrs->nama_jurusan; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo anchor('administrator/prodi', 'Kembali', array('class' => 'btn btn-secondary')) ?>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>