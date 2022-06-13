<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/navbar'); ?>

<div class="container mt-3">
    <h2>Riwayat Pembayaran</h2>

    <div class="float-right">
        <div class="row">
            <div class="col-md">
                <form action="<?= base_url('riwayatPembayaran') ?>" method="post">
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
                <td><a href="<?= base_url('RiwayatPembayaran/buktiBayar/') . $r['id_transaksi'] ?>" class="btn btn-info btn-sm "><i class="bi bi-info-circle"></i></a></td>
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
</div>

<?php $this->load->view('template/footer'); ?>