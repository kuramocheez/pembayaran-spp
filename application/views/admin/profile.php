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
    <?= form_open('admin/profile') ?>
    <a href="<?= base_url('admin/password') ?>" class="btn btn-info float-right">Ganti Password <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
        </svg></a>
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
        <input type="file" name="userfile" class="form-control" accept="img/png, image/jpeg">
    </div>
    <div class="form-group">
        <label class="form-label">Level Akses</label>
        <input type="text" class="form-control" disabled value="<?= $dataUser['levelAkses'] ?>">
    </div>
    <div class="text-right">
        <button class="btn btn-success mb-3">Ubah Profile</button>
    </div>
    </form>

</div>



<!-- /.container-fluid -->

<!-- End of Main Content -->
<?php $this->load->view('template-admin/footer'); ?>