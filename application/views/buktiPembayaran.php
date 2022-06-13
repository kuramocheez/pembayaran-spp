<div class="container">
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
</div>