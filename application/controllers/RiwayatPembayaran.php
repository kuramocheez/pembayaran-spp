<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class RiwayatPembayaran extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
        
    }
    

    public function index()
    {
        if (!$this->session->userdata('siswa')) {
            redirect('login');
        } else {
            if ($this->input->post('submit')) {
                $keyword = $this->input->post('keyword');
                $this->session->set_userdata('keyword', $keyword);
            } else {
                $keyword = $this->session->userdata('keyword');
            }

            $nis = $this->session->userdata('siswa');
            // Confg
            $config['base_url'] = 'http://localhost/pembayaran-spp/riwayatPembayaran/index';
            $config['total_rows'] = $this->Pembayaran_model->CountPembayaranBySiswaAll($nis, $keyword);
            $config['per_page'] = 5;


            // Initialize
            $this->pagination->initialize($config);
            $start = $this->uri->segment(4);
            $data = [
                'title' => 'Riwayat Pembayaran | Pembayaran SPP',
                'riwayat' => $this->Pembayaran_model->getPembayaranBySiswaAll($nis, $config['per_page'], $start, $keyword),
                'start' => $start + 1,
                'total_rows' => $config['total_rows']
            ];
            $this->load->view('riwayatPembayaran', $data);
            
        }
    }

    public function buktiBayar($id){
        if (!$this->session->userdata('siswa')) {
            redirect('login');
        } else {
            $data = [
                'title' => 'Bukti Pembayaran | Pembayaran SPP',
                'pembayaran' => $this->Pembayaran_model->getBuktiPembayaran($id)
            ];
            $this->load->view('buktiBayar', $data);
        }
    }

}

/* End of file RiwayatPembayaran.php */

?>