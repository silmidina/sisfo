<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h4 mb-4 text-gray-800"><i class="fas fa-book"></i> <?= $title; ?></h1>

    <?php echo $this->session->flashdata('pesan'); ?>

    <?php echo anchor('administrator/matakuliah/tambah_matakuliah', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Matakuliah</button>
') ?>

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>No</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>Program Studi</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($matakuliah as $mk) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mk->kode_matakuliah ?></td>
                <td><?php echo $mk->nama_matakuliah ?></td>
                <td><?php echo $mk->nama_prodi ?></td>
                <td width="20px"><?php echo anchor(
                                        'administrator/matakuliah/detail/' . $mk->kode_matakuliah,
                                        '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'
                                    ) ?>
                </td>
                <td width="20px"><?php echo anchor(
                                        'administrator/matakuliah/update/' . $mk->kode_matakuliah,
                                        '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                                    ) ?>
                </td>
                <td width="20px">
                    <?php echo anchor(
                        'administrator/matakuliah/delete/' . $mk->kode_matakuliah,
                        '<div class="btn btn-sm btn-danger" onclick="return confirm(\'Kamu yakin akan menghapus data matakuliah ' . $mk->nama_matakuliah . ' ?\');"><i class="fa fa-trash"></i></div>'
                    ) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>