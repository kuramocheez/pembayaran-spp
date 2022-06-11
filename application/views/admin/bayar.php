<?php $this->load->view('template-admin/header'); ?>
<?php $this->load->view('template-admin/sidebar'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Bayar</h1>
    <?= form_open('admin/pembayaran') ?>
    <div class="form-group">
        <label class="form-label">Nama Siswa</label>
        <input type="text" name="siswa" id="siswa" class="form-control" value="<?= $siswa['siswa'] ?>">
        <?= form_error('siswa', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="form-group">
        <label class="form-label">Tanggal Pembayaran</label>
        <input type="date" class="form-control" name="tanggalSekarang" disabled value="<?= $tanggalSekarang ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Semester<sup class="text-danger"><strong>*</strong></sup></label>
        <select name="semester" class="form-control">
            <option value="">~Semester</option>
            <option value="Ganjil">Ganjil</option>
            <option value="Genap">Genap</option>
        </select>
        <?= form_error('semester', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="form-group">
        <label class="form-label">Pembayaran Bulan<sup class="text-danger"><strong>*</strong></sup></label>
        <select name="bulan" class="form-control">
            <option value="">~Bulan</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>
        <?= form_error('bulan', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="text-right mb-3">
        <button class="btn btn-info">Lanjut Pembayaran</button>
    </div>
    </form>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php $this->load->view('template-admin/footer'); ?>