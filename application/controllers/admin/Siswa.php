<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Kategori_model');
    }
    
    public function index()
    {
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            // Get Keywoard
            if($this->input->post('submit')){
                $keyword = $this->input->post('keyword');
                $this->session->set_userdata('keyword', $keyword);
            }else{
                $keyword = $this->session->userdata('keyword');
            }
            
            // Confg
            $config['base_url'] = 'http://localhost/pembayaran-spp/admin/siswa/index';
            // var_dump($this->Siswa_model->countSiswa($keyword)); die;
            $config['total_rows'] = $this->Siswa_model->countSiswa($keyword);
            $config['per_page'] = 5;
            
            // Initialize
            $this->pagination->initialize($config);
            
            $start = $this->uri->segment(4);
            $data = [
                'title' => 'Siswa | Pembayaran SPP',
                // 'siswa' => $this->Siswa_model->getSiswa()
                'siswa' => $this->Siswa_model->getSiswaPage($config['per_page'], $start, $keyword),
                'start' => $start + 1,
                'total_rows' => $config['total_rows']
            ];
            $this->load->view('admin/siswa', $data);
        }
    }

    public function tambahSiswa(){
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            $this->form_validation->set_rules('nis', 'NIS', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('noTelp', 'Nomor Telpon', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('kelas', 'Kelas', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('kategoriSPP', 'Kategori SPP', 'required', ['required' => '%s Tidak Boleh Kosong']);
            
            
            if ($this->form_validation->run() == TRUE) {
                $data = [
                    'nis' => $this->input->post('nis'),
                    'namaSiswa' => $this->input->post('nama'),
                    'jenisKelamin' => $this->input->post('jk'),
                    'nomorTelpon' => $this->input->post('noTelp'),
                    'kelas' => $this->input->post('kelas'),
                    'id_kategori_spp' => $this->input->post('kategoriSPP'),
                ];
                $this->Siswa_model->tambahSiswa($data);
                $this->session->set_flashdata('siswa', 'Data Siswa Berhasil Ditambahkan');
                redirect('admin/siswa');
            } else {
            // var_dump($this->Kategori_model->getKategori());
            $data = [
                'title' => 'Siswa | Pembayaran SPP',
                'kategori' => $this->Kategori_model->getKategori()
            ];
            $this->load->view('admin/tambahSiswa', $data);
            }
        }
    }
    public function ubahSiswa($nis){
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            // $this->form_validation->set_rules('nis', 'NIS', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('noTelp', 'Nomor Telpon', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('kelas', 'Kelas', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('kategoriSPP', 'Kategori SPP', 'required', ['required' => '%s Tidak Boleh Kosong']);
            if ($this->form_validation->run() == TRUE) {
                $data = [
                    'nis' => $nis,
                    'namaSiswa' => $this->input->post('nama'),
                    'jenisKelamin' => $this->input->post('jk'),
                    'nomorTelpon' => $this->input->post('noTelp'),
                    'kelas' => $this->input->post('kelas'),
                    'id_kategori_spp' => $this->input->post('kategoriSPP'),
                ];
                $this->Siswa_model->ubahSiswa($data);
                $this->session->set_flashdata('siswa', 'Data Siswa Berhasil Diubah');
                redirect('admin/siswa');
            } else {
            $data = [
                'title' => 'Ubah Siswa | Pembayaran SPP',
                'siswa' => $this->Siswa_model->getSiswaDetail($nis),
                'kategori' => $this->Kategori_model->getKategori(),
                'nis' => $nis
            ];
            $this->load->view('admin/ubahSiswa', $data);
            }
        }
    }

    public function hapusSiswa($nis){
        $this->Siswa_model->deleteSiswa($nis);
        $this->session->set_flashdata('siswa', 'Data Siswa Berhasil Dihapus');
        redirect('admin/siswa');
    }

    public function search($keyword){
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            if (empty($keyword)){
                redirect('admin/siswa');
            }else{

            }
        }
    }

}

/* End of file Siswa.php */
