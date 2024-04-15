<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-file-alt"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <center class="mb-3">
                <legend class="mt-3"><strong>KARTU HASIL STUDI</strong></legend>
                <table class="mt-4">
                    <tr>
                        <td>NIM</td>
                        <td>&nbsp;: <?php echo $mhs_nim ?></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>&nbsp;: <?php echo $mhs_nama ?></td>
                    </tr>
                    <tr>
                        <td>Nama Program Studi</td>
                        <td>&nbsp;: <?php echo $mhs_prodi ?></td>
                    </tr>
                    <tr>
                        <td>Tahun Akademik (Semester)</td>
                        <td>&nbsp;: <?php echo $id_thn_akad ?></td>
                    </tr>
                </table>
            </center>

            <?php echo anchor('administrator/khs/print', '<button class="btn btn-sm btn-info mb-3"><i class="fas fa-print fa-sm"></i> Print</button>
') ?>


            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>No</th>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th align="center">SKS</th>
                    <th align="center">Nilai</th>
                    <th align="center">Skor</th>
                </tr>
                <?php
                $no = 1;
                $jumlahSks = 0;
                $jumlahNilai = 0;
                foreach ($mhs_data as $row) : ?>
                    <tr>
                        <td width="20px"><?php echo $no++ ?></td>
                        <td><?php echo $row->kode_matakuliah ?></td>
                        <td><?php echo $row->nama_matakuliah ?></td>
                        <td align="center"><?php echo $row->sks ?></td>
                        <td align="center"><?php echo $row->nilai ?></td>
                        <td align="center"><?php echo skorNilai($row->nilai, $row->sks); ?></td>
                        <?php
                        $jumlahSks += $row->sks;
                        $jumlahNilai += skorNilai($row->nilai, $row->sks);
                        ?>
                    </tr>
                <?php endforeach; ?>

                <tr>
                    <td colspan="3">Jumlah</td>
                    <td align="center"><?php echo $jumlahSks ?></td>
                    <td></td>
                    <td align="center"><?php echo $jumlahNilai ?></td>
                </tr>
            </table>
            <p class="text-center">Index Prestasi: <?php echo number_format($jumlahNilai / $jumlahSks, 2); ?></p>
        </div>
    </div>
</div>