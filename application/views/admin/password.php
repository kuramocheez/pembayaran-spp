<?php $this->load->view('template-admin/header'); ?>
<?php $this->load->view('template-admin/sidebar'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile <?= $dataUser['nama'] ?></h1>
    <?php
    $msg = $this->session->flashdata('password');
    if (!empty($msg)) {
    ?>
        <div class="alert alert-success"><?= $msg ?></div>
    <?php
    }
    ?>
    <a href="<?= base_url('admin/profile') ?>" class="btn btn-info float-right"><i class="bi bi-arrow-left-circle"></i> Ganti Profile</a>

    <?= form_open('admin/password') ?>
    <h5 class="mt-3"><strong>Password</strong></h5>
    <div class="form-group">
        <label class="form-label">Password Baru<sup class="text-danger"><strong>*</strong></sup></label>
        <input type="password" name="passBaru" class="form-control">
        <?= form_error('passBaru', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="form-group">
        <label class="form-label">Ulangi Password Baru<sup class="text-danger"><strong>*</strong></sup></label>
        <input type="password" name="rePassBaru" class="form-control">
        <?= form_error('rePassBaru', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="text-right mb-3">
        <button class="btn btn-success"><i class="bi bi-pencil-square"></i> Ubah Password</button>
    </div>
    </form>
</div>



<!-- /.container-fluid -->

<!-- End of Main Content -->
<?php $this->load->view('template-admin/footer'); ?>