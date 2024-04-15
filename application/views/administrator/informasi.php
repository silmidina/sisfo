<div class="container-fluid">
  <!-- Page Heading -->
  <h5 class="h4 mb-4 text-gray-800"><i class="fas fa-bullhorn"></i> <?= $title; ?></h5>

  <?php echo $this->session->flashdata('pesan'); ?>

  <?php echo anchor('administrator/informasi/tambah_informasi', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Informasi</button>
') ?>
  <table class="table table-striped table-bordered table-hover">
    <tr>
      <th>No</th>
      <th>Icon</th>
      <th>Judul Informasi</th>
      <th>Isi Informasi</th>
      <th colspan="2">Aksi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($informasi as $info) : ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $info->icon ?></td>
        <td><?php echo $info->judul_informasi ?></td>
        <td><?php echo $info->isi_informasi ?></td>
        <td width="20px"><?php echo anchor(
                            'administrator/informasi/update/' . $info->id_informasi,
                            '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                          ) ?>
        </td>
        <td width="20px">
          <?php echo anchor(
            'administrator/informasi/delete/' . $info->id_informasi,
            '<div class="btn btn-sm btn-danger" onclick="return confirm(\'Kamu yakin akan menghapus data ' . $info->judul_informasi . ' ?\');"><i class="fa fa-trash"></i></div>'
          ) ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>