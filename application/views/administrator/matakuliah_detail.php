<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-eye"></i> <?= $title; ?></h5>

    <table class="table table-striped table-bordered table-hover">
        <?php foreach ($detail as $dt) : ?>
            <tr>
                <th>Kode Matakuliah</th>
                <td><?php echo $dt->kode_matakuliah; ?></td>
            </tr>
            <tr>
                <th>Nama Matakuliah</th>
                <td><?php echo $dt->nama_matakuliah; ?></td>
            </tr>
            <tr>
                <th>SKS</th>
                <td><?php echo $dt->sks; ?></td>
            </tr>
            <tr>
                <th>Semester</th>
                <td><?php echo $dt->semester; ?></td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td><?php echo $dt->nama_prodi; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php echo anchor('administrator/matakuliah', '<div class="btn btn-sm btn-secondary">Kembali</div>') ?>
</div>