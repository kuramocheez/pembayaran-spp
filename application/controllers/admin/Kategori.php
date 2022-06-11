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

    public function tambahKategori(){
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            $this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('nominal', 'Nominal', 'required', ['required' => '%s Tidak Boleh Kosong']);
            
            if ($this->form_validation->run() == TRUE) {
                $data = [
                    'id_kategori_spp' => '',
                    'kategori_spp' => $this->input->post('kategori'),
                    'nominal' => $this->input->post('nominal')
                ];
                $this->Kategori_model->tambahKategori($data);
                $this->session->set_flashdata('kategori', 'Data Kategori SPP Berhasil Ditambahkan');
                redirect('admin/kategori');
            } else {
                $data = [
                    'title' => 'Tambah Kategori SPP | Pembayaran SPP'
                ];
                $this->load->view('admin/tambahKategori', $data);
            }
            
        }
    }

    public function ubahKategori($id){
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            $this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('nominal', 'Nominal', 'required', ['required' => '%s Tidak Boleh Kosong']);

            if ($this->form_validation->run() == TRUE) {
                $data = [
                    'id_kategori_spp' => $id,
                    'kategori_spp' => $this->input->post('kategori'),
                    'nominal' => $this->input->post('nominal')
                ];
                $this->Kategori_model->ubahKategori($data);
                $this->session->set_flashdata('kategori', 'Data Kategori SPP Berhasil Diubah');
                redirect('admin/kategori');
            } else {
                $data = [
                    'title' => 'Ubah Kategori SPP | Pembayaran SPP',
                    'kategori' => $this->Kategori_model->getKategoriId($id),
                    'id' => $id
                ];
                $this->load->view('admin/ubahKategori', $data);
            }
        }
    }

    public function hapusKategori($id){
        $this->Kategori_model->hapusKategori($id);
        $this->session->set_flashdata('kategori', 'Data Kategori SPP Berhasil Dihapus');
        redirect('admin/kategori');
    }

}

/* End of file Kategori.php */
