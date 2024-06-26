<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h4 mb-4 text-gray-800"><i class="fas fa-calendar-alt"></i> <?= $title; ?></h5>

    <?php echo $this->session->flashdata('pesan'); ?>

    <?php echo anchor('administrator/tahun_akademik/tambah_tahun_akademik', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Tahun Akademik</button>
') ?>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>No</th>
            <th>Tahun Akademik</th>
            <th>Semester</th>
            <th>Status</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($tahun_akademik as $ak) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $ak->tahun_akademik ?></td>
                <td><?php echo $ak->semester ?></td>
                <td><?php echo $ak->status ?></td>
                <td width="20px"><?php echo anchor(
                                        'administrator/tahun_akademik/update/' . $ak->id_thn_akad,
                                        '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                                    ) ?>
                </td>
                <td width="20px">
                    <?php echo anchor(
                        'administrator/tahun_akademik/delete/' . $ak->id_thn_akad,
                        '<div class="btn btn-sm btn-danger" onclick="return confirm(\'Kamu yakin akan menghapus data tahun akademik ' . $ak->tahun_akademik . ' ?\');"><i class="fa fa-trash"></i></div>'
                    ) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>