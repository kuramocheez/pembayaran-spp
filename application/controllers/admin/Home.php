<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }
    
    public function index()
    {
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        }else{

        $data = [
            'title' => 'Dashboard | Pembayaran SPP',
            'siswa' => $this->Home_model->countSiswa(),
            'kategori' => $this->Home_model->countKategori()
        ];
        $this->load->view('admin/home', $data);
        }
        
    }
    public function logout()
    {    
        $this->session->sess_destroy();
        redirect('admin');
    }
}

/* End of file Home.php */

?>