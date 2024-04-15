<div class="container-fluid">
    <!-- Page Heading -->
    <h5 class="h5 mb-4 text-gray-800"><i class="fas fa-print"></i> <?= $title; ?></h5>

    <form method="post" action="<?php echo base_url('administrator/transkrip_nilai/buat_transkrip_aksi') ?>">
        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" placeholder="Masukan NIM anda" class="form-control">
            <?php echo form_error('nim', '<div class="text-danger small ml-2">', '</div>') ?>
        </div>
        <button type="submit" class="btn btn-primary">Proses</button>
    </form>
</div>