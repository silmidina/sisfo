<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-edit"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <?php
            $mk = $matakuliah[0]; // Access only the first item in the $matakuliah array
            ?>
            <form method="post" action="<?php echo base_url('administrator/matakuliah/update_aksi'); ?>">
                <div class="form-group">
                    <label>Kode Matakuliah</label>
                    <input type="hidden" name="kode_matakuliah" class="form-control" value="<?php echo $mk->kode_matakuliah ?>">
                    <input type="text" name="kode_matakuliah" class="form-control" value="<?php echo $mk->kode_matakuliah ?>">
                </div>
                <div class="form-group">
                    <label>Nama Matakuliah</label>
                    <input type="text" name="nama_matakuliah" class="form-control" value="<?php echo $mk->nama_matakuliah ?>">
                </div>
                <div class="form-group" style="width: 30%">
                    <label>SKS</label>
                    <select name="sks" class="form-control">
                        <option <?php if ($mk->sks == "1") echo 'selected="selected"'; ?>>1</option>
                        <option <?php if ($mk->sks == "2") echo 'selected="selected"'; ?>>2</option>
                        <option <?php if ($mk->sks == "3") echo 'selected="selected"'; ?>>3</option>
                        <option <?php if ($mk->sks == "4") echo 'selected="selected"'; ?>>4</option>
                        <option <?php if ($mk->sks == "5") echo 'selected="selected"'; ?>>5</option>
                        <option <?php if ($mk->sks == "6") echo 'selected="selected"'; ?>>6</option>

                    </select>
                </div>
                <div class="form-group" style="width: 30%">
                    <label>Semester</label>
                    <select name="semester" class="form-control">
                        <option <?php if ($mk->semester == "1") echo 'selected="selected"'; ?>>1</option>
                        <option <?php if ($mk->semester == "2") echo 'selected="selected"'; ?>>2</option>
                        <option <?php if ($mk->semester == "3") echo 'selected="selected"'; ?>>3</option>
                        <option <?php if ($mk->semester == "4") echo 'selected="selected"'; ?>>4</option>
                        <option <?php if ($mk->semester == "5") echo 'selected="selected"'; ?>>5</option>
                        <option <?php if ($mk->semester == "6") echo 'selected="selected"'; ?>>6</option>
                        <option <?php if ($mk->semester == "7") echo 'selected="selected"'; ?>>7</option>
                        <option <?php if ($mk->semester == "8") echo 'selected="selected"'; ?>>8</option>
                    </select>
                </div>

                <div class="form-group" style="width: 30%">
                    <label>Program Studi</label>
                    <select name="nama_prodi" class="form-control">
                        <option><?php echo $mk->nama_prodi; ?></option>
                        <?php foreach ($prodi as $prd) : ?>
                            <option value="<?php echo $prd->nama_prodi; ?>"><?php echo $prd->nama_prodi; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo anchor('administrator/matakuliah', 'Kembali', array('class' => 'btn btn-secondary')) ?>
            </form>
        </div>
    </div>
</div>