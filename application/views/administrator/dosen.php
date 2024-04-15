<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h4 mb-4 text-gray-800"><i class="fas fa-university"></i> <?= $title; ?></h5>

    <?php echo $this->session->flashdata('pesan'); ?>

    <?php echo anchor('administrator/dosen/tambah_dosen', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Dosen</button>
') ?>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Alamat</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($dosen as $dsn) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dsn->nidn ?></td>
                <td><?php echo $dsn->nama_dosen ?></td>
                <td><?php echo $dsn->alamat ?></td>
                <td width="20px"><?php echo anchor(
                                        'administrator/dosen/detail/' . $dsn->nidn,
                                        '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'
                                    ) ?>
                </td>
                <td width="20px"><?php echo anchor(
                                        'administrator/dosen/update/' . $dsn->nidn,
                                        '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                                    ) ?>
                </td>
                <td width="20px">
                    <?php echo anchor(
                        'administrator/dosen/delete/' . $dsn->nidn,
                        '<div class="btn btn-sm btn-danger" onclick="return confirm(\'Kamu yakin akan menghapus data dosen ' . $dsn->nama_dosen . ' ?\');"><i class="fa fa-trash"></i></div>'
                    ) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>