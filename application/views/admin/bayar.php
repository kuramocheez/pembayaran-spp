<?php $this->load->view('template-admin/header'); ?>
<?php $this->load->view('template-admin/sidebar'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Bayar</h1>
    <?= form_open('admin/pembayaran/proses') ?>
    <div class="form-group">
        <label class="form-label">Nama Siswa</label>
        <input type="text" name="siswa" id="siswa" class="form-control" value="<?= $siswa['siswa'] ?>" readonly>
    </div>
    <div class="form-group">
        <label class="form-label">Tanggal Pembayaran</label>
        <input type="date" class="form-control" name="tanggal" readonly value="<?= $siswa['tanggal'] ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Semester</label>
        <input type="text" class="form-control" name="semester" readonly value="<?= $siswa['semester'] ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Pembayaran Bulan</label>
        <input type="text" class="form-control" name="bulan" readonly value="<?= $siswa['bulan'] ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Jumlah Bayar</label>
        <input type="text" class="form-control" name="spp" readonly value="<?= "Rp. " . number_format($siswa['spp'], 2, ',', '.') ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Bayar</label>
        <input type="text" class="form-control" name="bayar" autofocus required>

    </div>
    <div class="text-right mb-3">
        <button class="btn btn-info"><i class="bi bi-wallet"></i> Bayar</button>
    </div>
    </form>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php $this->load->view('template-admin/footer'); ?>