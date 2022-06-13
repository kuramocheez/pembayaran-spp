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
                date_default_timezone_set('Asia/Makassar');
                $getNis = $this->input->post('siswa');
                $siswaDetail = $this->Siswa_model->getSiswaDetail($getNis);
                    $siswa = [
                        'siswa' => $getNis,
                        'tanggal' => date('Y-m-d'),
                        'semester' => $this->input->post('semester'),
                        'bulan' => $this->input->post('bulan'),
                        'spp' => $siswaDetail['nominal']
                    ];
                    $data = [
                        'title' => 'Bayar | Pembayaran SPP',
                        'siswa' => $siswa
                    ];
                    $this->load->view('admin/bayar', $data);
                    
                
            }
        }
    }

    public function proses(){
    // $bayar = $this->input->post('bayar');
    // $spp = $this->input->post('spp');
    // $hasil = $bayar - $spp;
        $data = [
            'id_transaksi' => '',
            'nis' => $this->input->post('siswa'),
            'id_users' => $this->session->userdata('id_users'),
            'tanggal_transaksi' => date('Y-m-d', strtotime($this->input->post('tanggal'))),
            'semester' => $this->input->post('semester'),
            'pembayaran_bulan' => $this->input->post('bulan'),
            'bayar' => $this->input->post('bayar'),
            'status_bayar' => 'Pembayaran Berhasil'
        ];
        $id = $this->Pembayaran_model->tambahPembayaran($data);
        $this->session->set_flashdata('pembayaran', 'Pembayaran Berhasil');
        redirect('admin/buktiPembayaran/'.$id);
    }

    public function buktiPembayaran($id){
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            $data = [
                'title' => 'Bukti Pembayaran | Pembayaran SPP',
                'pembayaran' => $this->Pembayaran_model->getBuktiPembayaran($id)
            ];
            $this->load->view('admin/buktiPembayaran', $data);
        }
    }

    public function cetak($id){
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            $data = [
                'title' => 'Cetak Pembayaran | Pembayaran SPP',
                'pembayaran' => $this->Pembayaran_model->getBuktiPembayaran($id)
            ];
            $this->load->view('admin/cetak', $data);
        }
    }

    public function riwayatPembayaran(){
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            // Get Keywoard
            if ($this->input->post('submit')) {
                $keyword = $this->input->post('keyword');
                $this->session->set_userdata('keyword', $keyword);
            } else {
                $keyword = $this->session->userdata('keyword');
            }

            // Confg
            $config['base_url'] = 'http://localhost/pembayaran-spp/admin/pembayaran/riwayatPembayaran/';
            $config['total_rows'] = $this->Pembayaran_model->countPembayaran($keyword);
            $config['per_page'] = 5;


            // Initialize
            $this->pagination->initialize($config);
            $start = $this->uri->segment(4);
            $data = [
                'title' => 'Riwayat Pembayaran | Pembayaran SPP',
                'riwayat' => $this->Pembayaran_model->getPembayaran($config['per_page'], $start, $keyword),
                'start' => $start + 1,
                'total_rows' => $config['total_rows']
            ];
            $this->load->view('admin/riwayatPembayaran', $data);
        }
    }

}

/* End of file Pembayaran.php */

?>