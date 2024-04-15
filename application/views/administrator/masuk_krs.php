<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h4 mb-4 text-gray-800"><i class="fas fa-edit"></i> <?= $title; ?></h5>

    <?php echo $this->session->flashdata('pesan'); ?>

    <form method="post" action="<?php echo base_url('administrator/krs/krs_aksi') ?>">
        <div class="form-group">
            <label>NIM Mahasiswa</label>
            <input type="text" name="nim" placeholder="Masukan NIM Mahasiwa" class="form-control">
            <?php echo form_error('nim', '<div class="text-danger small ml-2">', '</div>') ?>
        </div>

        <div class="form-group" style="width: 30%">
            <label>Tahun Akademik / Semester</label>
            <?php
            $query = $this->db->query('SELECT id_thn_akad, semester, tahun_akademik,
CONCAT(tahun_akademik, " / ", CASE WHEN semester = 1 THEN "Ganjil" ELSE "Genap" END) AS thn_semester
FROM tahun_akademik');

            $dropdowns = $query->result();

            foreach ($dropdowns as $dropdown) {
                $dropDownList[$dropdown->id_thn_akad] = $dropdown->thn_semester;
            }

            echo form_dropdown('id_thn_akad', $dropDownList, '', 'class="form-control select2" id="id_thn_akad" style="width: 100%;"');
            ?>
        </div>
        <button type="submit" class="btn btn-primary">Proses</button>
    </form>
</div>