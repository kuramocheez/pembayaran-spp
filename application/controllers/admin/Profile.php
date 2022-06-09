<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }
    
    public function index()
    {
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('mail', 'Email', 'trim|required|valid_email', ['required' => '%s Tidak Boleh Kosong', 'valid_email' => '%s Tidak Sesuai']);
            if ($this->form_validation->run() == TRUE) {
                $config['upload_path']          = './assets/user-img/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 1000000;
                $config['max_width']            = 1000000;
                $config['max_height']           = 1000000;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('userfile')) {
                    $data = [
                        'id_users' => $this->session->userData('id_users'),
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('mail'),
                        'jenisKelamin' => $this->input->post('jk'),
                        'nomorTelpon' => $this->input->post('nomorTelpon')
                    ];
                } else {
                    $foto = $this->upload->data();
                    $foto = $foto['file_name'];
                    $data = [
                        'id_users' => $this->session->userData('id_users'),
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('mail'),
                        'jenisKelamin' => $this->input->post('jk'),
                        'nomorTelpon' => $this->input->post('nomorTelpon'),
                        'foto' => $foto
                    ];
                }
            $this->Users_model->profile($data);
            $this->session->set_flashdata('profile', 'Profile Berhasil Di Update');
            redirect('admin/profile');
            }else{
            $id = $this->session->userdata('id_users');
            $data = [
                'title' => 'Profile | Pembayaran SPP',
                'dataUser' => $this->Users_model->getUser($id)
            ];
            $this->load->view('admin/profile', $data); 
        }
        }
    }

}

/* End of file Profile.php */

?>