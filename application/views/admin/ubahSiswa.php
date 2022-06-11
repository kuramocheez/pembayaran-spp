<?php $this->load->view('template-admin/header'); ?>
<?php $this->load->view('template-admin/sidebar'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <?php //var_dump($siswa) 
    ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ubah Siswa</h1>
    <?= form_open('admin/siswa/ubahSiswa/'.$nis) ?>
    <div class="form-group">
        <label class="form-label">NIS</label>
        <input type="text" name="nis" class="form-control" disabled value="<?= $siswa['nis'] ?>">
        <?= form_error('nis', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="form-group">
        <label class="form-label">Nama<sup class="text-danger"><strong>*</strong></sup></label>
        <input type="text" name="nama" class="form-control" value="<?= $siswa['namaSiswa'] ?>">
        <?= form_error('nama', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="form-group">
        <label class="form-label">Jenis Kelamin<sup class="text-danger"><strong>*</strong></sup></label>
        <?php if ($siswa['jenisKelamin'] == 'Laki-Laki') { ?>
            <div class="form-check">
                <input class="form-check-input" name="jk" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Laki-Laki" checked> Laki-Laki
            </div>
            <div class="form-check">
                <input class="form-check-input" name="jk" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Perempuan"> Perempuan
            </div>
        <?php } else {
        ?>
            <div class="form-check">
                <input class="form-check-input" name="jk" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Laki-Laki" > Laki-Laki
            </div>
            <div class="form-check">
                <input class="form-check-input" name="jk" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Perempuan" checked> Perempuan
            </div>
        <?php
        } ?>
        <?= form_error('jk', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="form-group">
        <label class="form-label">Nomor Telpon<sup class="text-danger"><strong>*</strong></sup></label>
        <input type="text" name="noTelp" class="form-control" value="<?= $siswa['nomorTelpon'] ?>">
        <?= form_error('noTelp', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="form-group">
        <label class="form-label">Kelas<sup class="text-danger"><strong>*</strong></sup></label>
        <select class="form-control" aria-label="Default select example" name="kelas">
            <option value="<?= $siswa['kelas'] ?>"><?= $siswa['kelas'] ?></option>
            <option value="X A">X A</option>
            <option value="X B">X B</option>
            <option value="X C">X C</option>
            <option value="XI A">XI A</option>
            <option value="XI B">XI B</option>
            <option value="XI C">XI C</option>
            <option value="XII A">XII A</option>
            <option value="XII B">XII B</option>
            <option value="XII C">XII C</option>
        </select>
        <?= form_error('kelas', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="form-group">
        <label class="form-label">Kategori SPP<sup class="text-danger"><strong>*</strong></sup></label>
        <select class="form-control" aria-label="Default select example" name="kategoriSPP">
            <option value="<?= $siswa['id_kategori_spp'] ?>"><?= $siswa['kategori_spp'] ?></option>
            <?php foreach ($kategori as $k) : ?>
                <option value="<?= $k['id_kategori_spp'] ?>"><?= $k['kategori_spp'] ?></option>
            <?php endforeach; ?>
        </select>
        <?= form_error('kategoriSPP', '<p class="text-danger">', '</p>'); ?>
    </div>
    <div class="text-right mb-3">
        <button class="btn btn-success">Ubah Siswa</button>
    </div>
    </form>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php $this->load->view('template-admin/footer'); ?>