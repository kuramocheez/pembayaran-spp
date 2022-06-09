<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
    }
    
    public function index()
    {
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            $data = [
                'title' => 'Kategori | Pembayaran SPP',
                'kategori' => $this->Kategori_model->getKategori()
            ];
            $this->load->view('admin/kategori', $data);
        }
    }

}

/* End of file Kategori.php */
