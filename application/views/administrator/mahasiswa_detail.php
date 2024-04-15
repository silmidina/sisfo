<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-eye"></i> <?= $title; ?></h5>


    <table class="table table-striped table-bordered table-hover">
        <?php foreach ($detail as $dt) : ?>
            <img class="mb-2" src="<?php echo base_url('assets/uploads/') . $dt->photo ?>" style="width:15%">
            <tr>
                <th>NIM</th>
                <td><?php echo $dt->nim; ?></td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td><?php echo $dt->kelas; ?></td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td><?php echo $dt->nama_lengkap; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $dt->alamat; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $dt->email; ?></td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td><?php echo $dt->telepon; ?></td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td><?php echo $dt->tempat_lahir; ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $dt->tanggal_lahir; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $dt->jenis_kelamin; ?></td>
            </tr>
            <tr>
                <th>Nama Prodi</th>
                <td><?php echo $dt->nama_prodi; ?></td>
            </tr>
            <tr>
                <th>Agama</th>
                <td><?php echo $dt->agama; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>
    <?php echo anchor('administrator/mahasiswa', '<div class="btn btn-sm btn-secondary mb-5">Kembali</div>') ?>
</div>