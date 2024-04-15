<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-eye"></i> <?= $title; ?></h5>

    <table class="table table-striped table-bordered table-hover">
        <?php foreach ($detail as $dt) : ?>
            <tr>
                <th>Nama Siswa</th>
                <td><?php echo $dt->nama_siswa; ?></td>
            </tr>
            <tr>
                <th>NIS</th>
                <td><?php echo $dt->nis; ?></td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td><?php echo $dt->kelas; ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $dt->tanggal_lahir; ?></td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td><?php echo $dt->tempat_lahir; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $dt->alamat; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $dt->jenis_kelamin; ?></td>
            </tr>
            <tr>
                <th>Agama</th>
                <td><?php echo $dt->agama; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php echo anchor('administrator/siswa', '<div class="btn btn-sm btn-secondary mb-5">Kembali</div>') ?>
</div>