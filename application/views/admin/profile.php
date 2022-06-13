<?php $this->load->view('template-admin/header'); ?>
<?php $this->load->view('template-admin/sidebar'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile <?= $dataUser['nama'] ?></h1>
    <?php
    $msg = $this->session->flashdata('profile');
    if (!empty($msg)) {
    ?>
        <div class="alert alert-success"><?= $msg ?></div>
    <?php
    }
    ?>
    <?= form_open_multipart('admin/profile') ?>
    <a href="<?= base_url('admin/password') ?>" class="btn btn-info float-right">Ganti Password <i class="bi bi-arrow-right-circle"></i></a>
    <h5><strong>General</strong></h5>
    <div class="form-group">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" disabled value="<?= $dataUser['username'] ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Nama<sup class="text-danger"><strong>*</strong></sup></label>
        <input type="text" name="nama" class="form-control" value="<?= $dataUser['nama'] ?>">
        <?= form_error('nama', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="form-group">
        <label class="form-label">Email<sup class="text-danger"><strong>*</strong></sup></label>
        <input type="text" name="mail" class="form-control" value="<?= $dataUser['email'] ?>">
        <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="form-group">
        <label class="form-label">Jenis Kelamin</label><br>
        <?php if ($dataUser['jenisKelamin'] == 'Laki-Laki') { ?>
            <div class="form-check">
                <input class="form-check-input" name="jk" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked value="Laki-Laki"> Laki-Laki
            </div>
            <div class="form-check">
                <input class="form-check-input" name="jk" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Perempuan"> Perempuan
            </div>
        <?php } elseif ($dataUser['jenisKelamin'] == 'Perempuan') {
        ?>
            <div class="form-check">
                <input class="form-check-input" name="jk" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Laki-Laki"> Laki-Laki
            </div>
            <div class="form-check">
                <input class="form-check-input" name="jk" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked value="Perempuan"> Perempuan
            </div>
        <?php
        } else {
        ?>
            <div class="form-check">
                <input class="form-check-input" name="jk" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Laki-Laki"> Laki-Laki
            </div>
            <div class="form-check">
                <input class="form-check-input" name="jk" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Perempuan"> Perempuan
            </div>
        <?php
        } ?>
    </div>
    <div class="form-group">
        <label class="form-label">Nomor Telpon</label>
        <input type="text" name="nomorTelpon" class="form-control" value="<?= $dataUser['nomorTelpon'] ?>">
    </div>
    <div class="form-group">
        <label>Foto Profil</label><br>
        <img src="<?= base_url('assets/user-img/'), $dataUser['foto'] ?>" alt="<?= $dataUser['nama'] ?>" width="150"><br>
        <label class="form-lavel">Ganti Foto</label>
        <input type="file" name="userfile" class="form-control">
    </div>
    <div class="form-group">
        <label class="form-label">Level Akses</label>
        <input type="text" class="form-control" disabled value="<?= $dataUser['levelAkses'] ?>">
    </div>
    <div class="text-right">
        <button class="btn btn-success mb-3"><i class="bi bi-pencil-square"></i> Ubah Profile</button>
    </div>
    </form>

</div>



<!-- /.container-fluid -->

<!-- End of Main Content -->
<?php $this->load->view('template-admin/footer'); ?>