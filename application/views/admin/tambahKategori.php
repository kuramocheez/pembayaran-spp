<?php $this->load->view('template-admin/header'); ?>
<?php $this->load->view('template-admin/sidebar'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Kategori</h1>
    <?= form_open('admin/kategori/tambahKategori') ?>
    <div class="form-group">
        <label class="form-label">Kategori<sup class="text-danger"><strong>*</strong></sup></label>
        <input type="text" name="kategori" class="form-control" value="<?= set_value('kategori') ?>">
        <?= form_error('kategori', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="form-group">
        <label class="form-label">Nominal<sup class="text-danger"><strong>*</strong></sup></label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">Rp.</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="nominal" value="<?= set_value('nominal') ?>">
        </div>
    <!-- <input type="text" name="nominal" class="form-control" value="<?= set_value('nominal') ?>"> -->
    <?= form_error('nominal', '<p class="text-danger">', '</p>'); ?>
</div>
<div class="text-right mb-3">
    <button class="btn btn-success">Tambah Kategori</button>
</div>
</form>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php $this->load->view('template-admin/footer'); ?>