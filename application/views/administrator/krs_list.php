<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-file-alt"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <center class="mb-3">
                <legend class="mt-3"><strong>KARTU RENCANA STUDI</strong></legend>
                <table class="mt-4">
                    <tr>
                        <td><strong>NIM</strong></td>
                        <td>&nbsp;: <?php echo $nim ?></td>
                    </tr>
                    <tr>
                        <td><strong>Nama Lengkap</strong></td>
                        <td>&nbsp;: <?php echo $nama_lengkap ?></td>
                    </tr>
                    <tr>
                        <td><strong>Nama Program Studi</strong></td>
                        <td>&nbsp;: <?php echo $prodi ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tahun Akademik (Semester)</strong></td>
                        <td>&nbsp;: <?php echo $tahun_akademik, '&nbsp;(' . $semester . ')' ?></td>
                    </tr>
                </table>
            </center>

            <?php echo anchor('administrator/krs/tambah_krs/' . $nim . '/' . $id_thn_akad, '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data KRS</button>') ?>
            <?php echo anchor('administrator/krs/print', '<button class="btn btn-sm btn-info mb-3"><i class="fas fa-print fa-sm"></i> Print</button>') ?>


            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>No</th>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th colspan="2">Aksi</th>
                </tr>
                <?php
                $no = 1;
                $jumlahSks = 0;
                foreach ($krs_data as $krs) : ?>
                    <tr>
                        <td width="20px"><?php echo $no++ ?></td>
                        <td><?php echo $krs->kode_matakuliah ?></td>
                        <td><?php echo $krs->nama_matakuliah ?></td>
                        <td><?php echo $krs->sks;
                            $jumlahSks += $krs->sks; ?></td>
                        <td width="20px"><?php echo anchor(
                                                'administrator/krs/update/' . $krs->id_krs,
                                                '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                                            ) ?>
                        </td>
                        <td width="20px">
                            <?php echo anchor(
                                'administrator/krs/delete/' . $krs->id_krs,
                                '<div class="btn btn-sm btn-danger" onclick="return confirm(\'Kamu yakin akan menghapus matakuliah ' . $krs->nama_matakuliah . ' ?\');"><i class="fa fa-trash"></i></div>'
                            ) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" align="right"><strong>Jumlah SKS</strong></td>
                    <td colspan="3"><strong><?php echo $jumlahSks; ?></strong></td>
                </tr>
            </table>
        </div>
    </div>
</div>