<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h4 mb-4 text-gray-800"><i class="fas fa-user-graduate"></i> <?= $title; ?></h5>


    <?php echo $this->session->flashdata('pesan'); ?>

    <?php echo anchor('administrator/siswa/tambah_siswa', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Siswa</button>
') ?>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th colspan="3">Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($siswa as $ssw) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $ssw->nama_siswa ?></td>
                <td><?php echo $ssw->nis ?></td>
                <td><?php echo $ssw->kelas ?></td>
                <td><?php echo $ssw->tanggal_lahir ?></td>
                <td><?php echo $ssw->tempat_lahir ?></td>
                <td><?php echo $ssw->alamat ?></td>
                <td><?php echo $ssw->jenis_kelamin ?></td>
                <td><?php echo $ssw->agama ?></td>
                <td width="20px"><?php echo anchor(
                                        'administrator/siswa/detail/' . $ssw->id,
                                        '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'
                                    ) ?>
                </td>
                <td width="20px"><?php echo anchor(
                                        'administrator/siswa/update/' . $ssw->id,
                                        '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                                    ) ?>
                </td>
                <td width="20px">
                    <?php echo anchor(
                        'administrator/siswa/delete/' . $ssw->id,
                        '<div class="btn btn-sm btn-danger" onclick="return confirm(\'Kamu yakin akan menghapus data siswa ' . $ssw->nama_siswa . ' ?\');"><i class="fa fa-trash"></i></div>'
                    ) ?>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>