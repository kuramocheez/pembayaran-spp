<?php $this->load->view('template-admin/header'); ?>
<?php $this->load->view('template-admin/sidebar'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kategori SPP</h1>
    <a href="<?= base_url('admin/tambahKategori') ?>" class="btn btn-info mb-3"><i class="bi bi-plus-square"></i> Tambah Data Kategori</a>
    <div class="float-right">
        <div class="row">
            <div class="col-md">
                <form action="<?= base_url('admin/kategori') ?>" method="post">
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
    $msg = $this->session->flashdata('kategori');
    if (!empty($msg)) {
    ?>
        <div class="alert alert-success"><?= $msg ?></div>
    <?php
    }
    ?>

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Nominal</th>
            <th>Aksi</th>
        </tr>

        <?php //$no = 1 
        ?>
        <?php foreach ($kategori as $k) : ?>
            <tr>
                <th><?= $start++ ?></th>
                <th><?= $k['kategori_spp'] ?></th>
                <th><?= "Rp. " . number_format($k['nominal'], 2, ',', '.') ?></th>
                <td>
                    <a href="<?= base_url('admin/ubahKategori/'), $k['id_kategori_spp'] ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                    <a href="<?= base_url('admin/hapusKategori/'), $k['id_kategori_spp'] ?>" onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4">
                <?php if (empty($kategori)) : ?>
                    <div class="alert alert-danger text-center">
                        Kategori Tidak Ditemukan
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