<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h4 mb-4 text-gray-800"><i class="fas fa-university"></i> <?= $title; ?></h1>

    <?php echo $this->session->flashdata('pesan'); ?>

    <?php echo anchor('administrator/prodi/tambah_prodi', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Prodi</button>
') ?>

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>No</th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
            <th>Nama Jurusan</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($prodi as $prd) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $prd->kode_prodi ?></td>
                <td><?php echo $prd->nama_prodi ?></td>
                <td><?php echo $prd->nama_jurusan ?></td>
                <td width="20px"><?php echo anchor(
                                        'administrator/prodi/update/' . $prd->id_prodi,
                                        '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                                    ) ?>
                </td>
                <td width="20px">
                    <?php echo anchor(
                        'administrator/prodi/delete/' . $prd->id_prodi,
                        '<div class="btn btn-sm btn-danger" onclick="return confirm(\'Kamu yakin akan menghapus data prodi ' . $prd->nama_prodi . ' ?\');"><i class="fa fa-trash"></i></div>'
                    ) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>