<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Pembayaran_model');
    }
    
    public function bulan($bulan){
        if ($bulan == "January"){
            return "Januari";
        }else if ($bulan == "February"){
            return "Februari";
        } else if ($bulan == "March") {
            return "Maret";
        } else if ($bulan == "April") {
            return "April";
        } else if ($bulan == "May") {
            return "Mei";
        } else if ($bulan == "June") {
            return "Juni";
        } else if ($bulan == "July") {
            return "Juli";
        } else if ($bulan == "August") {
            return "Agustus";
        } else if ($bulan == "September") {
            return "September";
        } else if ($bulan == "October") {
            return "Oktober";
        } else if ($bulan == "November") {
            return "November";
        } else if ($bulan == "December") {
            return "Desember";
        }
    }

    public function index()
    {
        if (!$this->session->userdata('siswa')) {
            redirect('login');
        } else {
            $getBulan = date('F');
            $bulan = $this->bulan($getBulan);
            $nis = $this->session->userdata('siswa');
        $data = [
            'title' => 'Pembayaran SPP',
            'siswa' => $this->Siswa_model->getSiswaDetail($nis),
            'bulan' => $bulan,
            'pembayaran' => $this->Pembayaran_model->getPembayaranBySiswa($nis, $bulan)
        ];
        $this->load->view('home', $data);
    }
    }

}

/* End of file Home.php */

?>