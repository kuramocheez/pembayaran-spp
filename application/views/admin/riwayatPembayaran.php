<?php $this->load->view('template-admin/header'); ?>
<?php $this->load->view('template-admin/sidebar'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Riwayat Pembayaran</h1>
    <div class="float-right">
        <div class="row">
            <div class="col-md">
                <form action="<?= base_url('admin/pembayaran/riwayatPembayaran') ?>" method="post">
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
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Petugas</th>
            <th>Tanggal Transaksi</th>
            <th>Semester</th>
            <th>Pembayaran Bulan</th>
            <th>Status Pembayaran</th>
            <th>Bukti</th>
        </tr>
        <tr>
            <td colspan="8">
                <?php if (empty($riwayat)) : ?>
                    <div class="alert alert-danger text-center">
                        Riwayat Pembayaran Tidak Ditemukan
                    </div>
                <?php endif; ?>
            </td>
        </tr>
        <?php //$no = 1; 
        ?>
        <?php foreach ($riwayat as $r) : ?>
            <tr>
                <td><?= $start++ ?></td>
                <td><?= $r['namaSiswa'] ?></td>
                <td><?= $r['nama'] ?></td>
                <td><?= date('d-m-Y', strtotime($r['tanggal_transaksi'])) ?></td>
                <td><?= $r['semester'] ?></td>
                <td><?= $r['pembayaran_bulan'] ?></td>
                <td class="text-success"><?= $r['status_bayar'] ?></td>
                <td><a href="<?= base_url('admin/buktiPembayaran/') . $r['id_transaksi'] ?>" class="btn btn-info btn-sm "><i class="bi bi-info-circle"></i></a></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="8">
                <?php if (empty($riwayat)) : ?>
                    <div class="alert alert-danger text-center">
                        Riwayat Pembayaran Tidak Ditemukan
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