<?php
$nilai = get_instance();
$nilai->load->model('krs_model');
$nilai->load->model('mahasiswa_model');
$nilai->load->model('matakuliah_model');
$nilai->load->model('tahun_akademik_model');

$krs = $nilai->krs_model->get_by_id($id_krs[0]);
$kode_matakuliah = $krs->kode_matakuliah;
$id_thn_akad = $krs->id_thn_akad;
?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-sort-numeric-down"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <center>
                <legend><strong>DAFTAR NILAI MAHASISWA</strong></legend>
                <table mt-3>
                    <tr>
                        <td>Kode Matakuliah</td>
                        <td>: <?php echo $kode_matakuliah; ?></td>
                    </tr>
                    <tr>
                        <td>Nama Matakuliah</td>
                        <td>: <?php echo $nilai->matakuliah_model->get_by_id($kode_matakuliah)->nama_matakuliah; ?></td>
                    </tr>
                    <tr>
                        <td>SKS</td>
                        <td>: <?php echo $nilai->matakuliah_model->get_by_id($kode_matakuliah)->sks; ?></td>
                    </tr>
                    <?php
                    $thn = $nilai->tahun_akademik_model->get_by_id($id_thn_akad);
                    $semester = $thn->semester == 'Ganjil';

                    if ($semester == 'Ganjil') {
                        $tampilSemester = "Ganjil";
                    } else {
                        $tampilSemester = "Genap";
                    }
                    ?>
                    <tr>
                        <td>
                            Tahun Akademik (Semester)
                        <td>: <?php echo $thn->tahun_akademik . "(" . $tampilSemester . ")" ?></td>
                        </td>
                    </tr>
                </table>
            </center>

            <table class="table table-bordered table-striped table-hover mt-3">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nilai</th>
                </tr>
                <?php
                $no = 1;
                for ($i = 0; $i < sizeof($id_krs); $i++) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <?php $nim = $nilai->krs_model->get_by_id($id_krs[$i])->nim; ?>
                        <td><?php echo $nim ?></td>
                        <td><?php echo $nilai->mahasiswa_model->get_by_id($nim)->nama_lengkap; ?></td>
                        <td><?php echo $nilai->krs_model->get_by_id($id_krs[$i])->nilai; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>