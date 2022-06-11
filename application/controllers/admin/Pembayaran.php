<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
        $this->load->model('Siswa_model');
        
    }

    public function index()
    {
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            // $this->form_validation->set_rules('siswa', 'Siswa', 'required', ['required' => '%s Tidak Boleh Kosong']);
            // $this->form_validation->set_rules('semester', 'Semester', 'required', ['required' => '%s Tidak Boleh Kosong']);
            // $this->form_validation->set_rules('bulan', 'Bulan', 'required', ['required' => '%s Tidak Boleh Kosong']);
            date_default_timezone_set('Asia/Makassar');
            $data = [
                'title' => 'Pembayaran | Pembayaran SPP',
                'siswa' => $this->Siswa_model->getSiswa(),
                'tanggalSekarang' => date('Y-m-d')
            ];
            $this->load->view('admin/pembayaran', $data);
        }
    }

    public function bayar()
    {
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            if(empty($this->input->post('siswa'))){
                redirect('admin/pembayaran');
            }else{
                    $siswa = [
                        'siswa' => $this->input->post('siswa'),
                        'tanggal' => $this->input->post('tanggalSekarang'),
                        'semester' => $this->input->post('semester'),
                        'bulan' => $this->input->post('bulan')
                    ];
                    $data = [
                        'title' => 'Bayar | Pembayaran SPP',
                        'siswa' => $siswa
                    ];
                    $this->load->view('admin/bayar', $data);
                    
                
            }
        }
    }

    public function riwayatPembayaran(){
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            $data = [
                'title' => 'Riwayat Pembayaran | Pembayaran SPP',
                'riwayat' => $this->Pembayaran_model->getPembayaran()
            ];
            $this->load->view('admin/riwayatPembayaran', $data);
        }
    }

}

/* End of file Pembayaran.php */

?>