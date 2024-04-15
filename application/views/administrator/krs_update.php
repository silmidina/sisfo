<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-edit"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <form method="post" action="<?php echo base_url('administrator/krs/update_aksi') ?>">
                <div class="form-group">
                    <label>Tahun Akademik</label>
                    <input type="hidden" name="id_thn_akad" class="form-control" value="<?php echo $id_thn_akad; ?>">
                    <input type="hidden" name="id_krs" class="form-control" value="<?php echo $id_krs; ?>">
                    <input type="text" name="thn_akad_smt" class="form-control" value="<?php echo $thn_akad_smt . '/' . $semester; ?>" readonly />
                </div>
                <div class="form-group">
                    <label>NIM Mahasiswa</label>
                    <input type="text" name="nim" class="form-control" value="<?php echo $nim; ?>" readonly />
                </div>
                <div class="form-group" style="width: 30%">
                    <label>Matakuliah</label>
                    <?php
                    $query = $this->db->query('SELECT
            kode_matakuliah,nama_matakuliah FROM matakuliah');
                    $dropdowns = $query->result();
                    foreach ($dropdowns as $dropdown) {
                        $dropDownList[$dropdown->kode_matakuliah] = $dropdown->nama_matakuliah;
                    }
                    echo form_dropdown('kode_matakuliah', $dropDownList, $kode_matakuliah, 'class="form-control" id="kode_matakuliah"');
                    ?>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo anchor('administrator/krs/index', 'Kembali', array('class' => 'btn btn-secondary')) ?>
            </form>
        </div>
    </div>
</div>