<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h4 mb-4 text-gray-800"><i class="fas fa-sort-numeric-down"></i> <?= $title; ?></h5>

    <form method="post" action="<?php echo base_url('administrator/khs/input_nilai_aksi') ?>">
        <div class="form-group">
            <label>Tahun Akademik (Semester)</label>
            <?php
            $query = $this->db->query('SELECT id_thn_akad, semester, CONCAT(tahun_akademik,"/") AS ta_semester FROM tahun_akademik');

            $dropdowns = $query->result();

            foreach ($dropdowns as $dropdown) {
                if ($dropdown->semester === 'Ganjil') {
                    $tampilSemester = "Ganjil";
                } else {
                    $tampilSemester = "Genap";
                }

                $dropDownList[$dropdown->id_thn_akad] = $dropdown->ta_semester . " " . $tampilSemester;
            }
            echo form_dropdown('id_thn_akad', $dropDownList, '', 'class="form-control"');
            ?>
        </div>
        <div class="form-group">
            <input type="text" name="kode_matakuliah" class="form-control" placeholder="Masukkan Kode Matakuliah">
        </div>
        <button type="submit" class="btn btn-primary">Proses</button>
    </form>
</div>