<div class="container-fluid">
  <!-- Page Heading -->
  <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-comment-dots"></i> <?= $title; ?></h5>


  <?php echo $this->session->flashdata('pesan'); ?>

  <table class="table table-striped table-bordered table-hover">
    <tr>
      <th width="20px">No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Pesan</th>
      <th colspan="2">Aksi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($hubungi as $hub) : ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $hub->nama ?></td>
        <td><?php echo $hub->email ?></td>
        <td><?php echo $hub->pesan ?></td>
        <td width="20px"><?php echo anchor(
                            'administrator/hubungi_kami/kirim_email/' . $hub->id_hubungi,
                            '<div class="btn btn-sm btn-warning"><i class="fas fa-comment-dots"></i></div>'
                          ) ?>
        </td>
        <td width="20px">
          <?php echo anchor(
            'administrator/hubungi_kami/delete/' . $hub->id_hubungi,
            '<div class="btn btn-sm btn-danger" onclick="return confirm(\'Kamu yakin akan menghapus data ' . $hub->pesan . ' ?\');"><i class="fa fa-trash"></i></div>'
          ) ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>