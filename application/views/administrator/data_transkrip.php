<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-file-alt"></i> <?= $title; ?></h5>

    <div class="card" style="width: 100%; margin-bottom: 30px;">
        <div class="card-body center">
            <center class="mb-3">
                <legend class="mt-3"><strong>TRANSKRIP NILAI</strong></legend>
                <table class="mt-4">
                    <tr>
                        <td>NIM</td>
                        <td>&nbsp;: <?php echo $nim; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>&nbsp;: <?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>&nbsp;: <?php echo $prodi; ?></td>
                    </tr>
                </table>
            </center>

            <table class="table table-bordered table-hover table-striped mt-3">
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
                foreach ($transkrip as $tr) : ?>
                    <tr>
                        <td width="20px"><?php echo $no++ ?></td>
                        <td><?php echo $tr->kode_matakuliah ?></td>
                        <td><?php echo $tr->nama_matakuliah ?></td>
                        <td align="center"><?php echo $tr->sks ?></td>
                        <td align="center"><?php echo $tr->nilai ?></td>
                        <td align="center"><?php echo skorNilai($tr->nilai, $tr->sks); ?></td>
                        <?php
                        $jumlahSks += $tr->sks;
                        $jumlahNilai += skorNilai($tr->nilai, $tr->sks);
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
            <p class="text-center">Index Prestasi Kumulatif: <?php echo number_format($jumlahNilai / $jumlahSks, 2); ?></p>
        </div>
    </div>
</div>