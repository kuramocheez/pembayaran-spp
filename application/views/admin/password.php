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
    <a href="<?= base_url('admin/profile') ?>" class="btn btn-info float-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg> Ganti Profile</a>

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
        <button class="btn btn-success">Ubah Password</button>
    </div>
    </form>
</div>



<!-- /.container-fluid -->

<!-- End of Main Content -->
<?php $this->load->view('template-admin/footer'); ?>