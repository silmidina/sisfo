<div class="container-fluid">
  <!-- Page Heading -->
  <h5 class="h4 mb-4 text-gray-800"><i class="fas fa-info-circle"></i> <?= $title; ?></h5>

  <?php echo $this->session->flashdata('pesan'); ?>

  <table class="table table-striped table-bordered table-hover">
    <tr>
      <th>No</th>
      <th>Sejarah</th>
      <th>Visi</th>
      <th>Misi</th>
      <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($tentang as $ttg) : ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $ttg->sejarah ?></td>
        <td><?php echo $ttg->visi ?></td>
        <td><?php echo $ttg->misi ?></td>
        <td width="20px"><?php echo anchor(
                            'administrator/tentang_kampus/update/' . $ttg->id,
                            '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                          ) ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>