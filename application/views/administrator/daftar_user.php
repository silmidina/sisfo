<div class="container-fluid">
  <!-- Page Heading -->
  <h5 class="h4 mb-4 text-gray-800"><i class="fas fa-user"></i> <?= $title; ?></h5>

  <?php echo $this->session->flashdata('pesan'); ?>

  <?php echo anchor('administrator/user/tambah_user', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah User</button>
') ?>

  <table class="table table-striped table-bordered table-hover">
    <tr>
      <th>No</th>
      <th>Username</th>
      <th>Email</th>
      <th>Level</th>
      <th>Blokir</th>
      <th colspan="2">Aksi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($user as $usr) : ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $usr->username ?></td>
        <td><?php echo $usr->email ?></td>
        <td><?php echo $usr->level ?></td>
        <td><?php echo $usr->blokir ?></td>
        <td width="20px"><?php echo anchor(
                            'administrator/user/update/' . $usr->id,
                            '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                          ) ?>
        </td>
        <td width="20px">
          <?php echo anchor(
            'administrator/user/delete/' . $usr->id,
            '<div class="btn btn-sm btn-danger" onclick="return confirm(\'Kamu yakin akan menghapus data prodi ' . $usr->username . ' ?\');"><i class="fa fa-trash"></i></div>'
          ) ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>