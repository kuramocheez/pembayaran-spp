<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('siswa'); ?>
<div class="text-center mb-3 mt-3">
    <h1>Pembayaran Bulan <?= $bulan ?></h1>
</div>
<?php 
if($pembayaran){
    $this->load->view('buktiPembayaran');
}else{
    $this->load->view('belumBayar');
}
?>

<?php $this->load->view('template/footer'); ?>