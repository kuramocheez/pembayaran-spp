<?php $this->load->view('template-admin/header'); ?>
<?php $this->load->view('template-admin/sidebar'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Bukti Pembayaran</h1>
    <?php
    $msgRegis = $this->session->flashdata('pembayaran');
    if (!empty($msgRegis)) {
    ?>
        <div class="alert alert-success"><?= $msgRegis ?></div>
    <?php
    }
    ?>
    <div class="card">
        <div class="card-body">
            <h3 class="text-center"><strong>Bukti Pembayaran SPP</strong></h3>
            <div class="row">
                <div class="col-6">
                    Tanggal Pembayaran: <?= date('d-m-Y', strtotime($pembayaran['tanggal_transaksi'])) ?>
                </div>
                <div class="col-6 text-right">
                    Petugas: <?= $pembayaran['nama'] ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <table>
                        <tr>
                            <td>NIS</td>
                            <td>:</td>
                            <td><?= $pembayaran['nis'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>:</td>
                            <td><?= $pembayaran['namaSiswa'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td><?= $pembayaran['kelas'] ?></td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>:</td>
                            <td><?= $pembayaran['semester'] ?></td>
                        </tr>
                        <tr>
                            <td>Bulan</td>
                            <td>:</td>
                            <td><?= $pembayaran['pembayaran_bulan'] ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-6">
                    <table class="float-right">
                        <tr>
                            <td>Jumlah SPP</td>
                            <td>:</td>
                            <td><?= $pembayaran['nominal'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Bayar</td>
                            <td>:</td>
                            <td><?= $pembayaran['bayar'] ?></td>
                        </tr>
                        <tr>
                            <td>Kembalian</td>
                            <td>:</td>
                            <td><?= $pembayaran['bayar'] - $pembayaran['nominal'] ?></td>
                        </tr>
                        <tr>
                            <td>Status Transaksi</td>
                            <td>:</td>
                            <td class="text-success"><?= $pembayaran['status_bayar'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right mt-3 mb-3">
        <a href="<?= base_url('admin/cetak/') . $pembayaran['id_transaksi'] ?>" target="_BLANK" class="btn btn-success"><i class="bi bi-printer"></i> Cetak</a>
        <a href="<?= base_url('admin/home') ?>" class="btn btn-info"><i class="bi bi-house-door"></i> Kembali</a>
    </div>

</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php $this->load->view('template-admin/footer'); ?>