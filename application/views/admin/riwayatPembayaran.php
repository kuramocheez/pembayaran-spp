<?php $this->load->view('template-admin/header'); ?>
<?php $this->load->view('template-admin/sidebar'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Riwayat Pembayaran</h1>

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Petugas</th>
            <th>Tanggal Transaksi</th>
            <th>Semester</th>
            <th>Pembayaran Bulan</th>
            <th>Status Pembayaran</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach($riwayat as $r): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $r['namaSiswa'] ?></td>
                <td><?= $r['nama'] ?></td>
                <td><?= $r['tanggal_transaksi'] ?></td>
                <td><?= $r['semester'] ?></td>
                <td><?= $r['pembayaran_bulan'] ?></td>
                <td><?= $r['status_bayar'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php $this->load->view('template-admin/footer'); ?>