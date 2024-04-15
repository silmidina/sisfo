<?php
$nilai = get_instance();
$nilai->load->model('matakuliah_model');
$nilai->load->model('tahun_akademik_model');
?>

<div class="container-fluid">
    <?php
    if ($list_nilai == null) {
        $thn = $nilai->tahun_akademik_model->get_by_id($id_thn_akad);
        $semester = $thn->semester == 'Ganjil';

        if ($semester == 'Ganjil') {
            $tampilSemester = "Ganjil";
        } else {
            $tampilSemester = "Genap";
        }

    ?>

        <div class="alert alert-danger">
            Maaf, kode mata kuliah yang anda input <strong>TIDAK TERSEDIA!</strong> di tahun ajaran
            <?php echo $thn->tahun_akademik . " (" . $tampilSemester . ")"; ?>
        </div>
        <?php echo anchor('administrator/khs/input_nilai', '<div class="btn btn-sm btn-secondary">Kembali</div>') ?>
    <?php
    } else {


    ?>
        <center>
            <legend><strong>MASUKKAN NILAI AKHIR</strong></legend>
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
                    <td>: <?php echo $thn->tahun_akademik . " (" . $tampilSemester . ")" ?></td>
                    </td>
                </tr>
            </table>
        </center>

        <form method="post" action="<?php echo base_url('administrator/khs/simpan_nilai'); ?>">
            <table class="table table-bordered table-striped table-hover mt-3">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nilai</th>
                </tr>
                <?php
                $no = 1;
                foreach ($list_nilai as $row) : ?>
                    <tr>
                        <td width="20px"><?php echo $no++ ?></td>
                        <td><?php echo $row->nim ?></td>
                        <td><?php echo $row->nama_lengkap ?></td>
                        <input type="hidden" name="id_krs[]" value="<?php echo $row->id_krs; ?>">
                        <td width="25px"><input type=" text" name="nilai[]" class="form-control"></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    <?php } ?>
</div>