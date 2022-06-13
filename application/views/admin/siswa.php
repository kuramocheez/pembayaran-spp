<?php $this->load->view('template-admin/header'); ?>
<?php $this->load->view('template-admin/sidebar'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Siswa</h1>

    <a href="<?= base_url('admin/tambahSiswa') ?>" class="btn btn-info mb-3"><i class="bi bi-person-plus-fill"></i> Tambah Data Siswa</a>
    <div class="float-right">
        <div class="row">
            <div class="col-md">
                <form action="<?= base_url('admin/siswa') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari keyword..." name="keyword" autocomplete="off">
                        <div class="input-group-append">
                            <input class="btn btn-info" type="submit" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <h6>Results: <?= $total_rows ?></h6>

    <?php
    $msg = $this->session->flashdata('siswa');
    if (!empty($msg)) {
    ?>
        <div class="alert alert-success"><?= $msg ?></div>
    <?php
    }
    ?>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telpon</th>
            <th>Kelas</th>
            <th>Kategori SPP</th>
            <th>Aksi</th>
        </tr>
        <?php //$no = 1; 
        ?>

        <?php foreach ($siswa as $s) : ?>
            <tr>
                <td><?= $start++ ?></td>
                <td><?= $s['nis'] ?></td>
                <td><?= $s['namaSiswa'] ?></td>
                <td><?= $s['jenisKelamin'] ?></td>
                <td><?= $s['nomorTelpon'] ?></td>
                <td><?= $s['kelas'] ?></td>
                <td><?= $s['kategori_spp'] ?></td>
                <td>
                    <a href="<?= base_url('admin/ubahSiswa/'), $s['nis'] ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                    <a href="<?= base_url('admin/hapusSiswa/'), $s['nis'] ?>" onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="8">
                <?php if (empty($siswa)) : ?>
                    <div class="alert alert-danger text-center">
                        Siswa Tidak Ditemukan
                    </div>
                <?php endif; ?>
            </td>
        </tr>
    </table>
    <?= $this->pagination->create_links() ?>

</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php $this->load->view('template-admin/footer'); ?>