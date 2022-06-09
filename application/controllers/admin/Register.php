<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }
    
    public function index()
    {
        if($this->session->userdata('id_users')){
            redirect('admin/home');
        }else{
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('username', 'Username', 'trim|required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', ['required' => '%s Tidak Boleh Kosong', 'valid_email' => '%s Tidak Sesuai']);
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]', ['required' => '%s Tidak Boleh Kosong', 'min_length' => '%s Minimal 6 Digit']);
            $this->form_validation->set_rules('rePassword', 'Re-Password', 'required|matches[password]', ['required' => '%s Tidak Boleh Kosong', 'matches' => '%s Tidak Sama']);
            if ($this->form_validation->run() == TRUE) {
                $data = [
                    'username' => $this->input->post('username'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                ];
                $this->Users_model->addUser($data);
                // $this->session->username = $data['username'];
                $this->session->set_flashdata('register', 'Anda Berhasil Terdaftar, Silakan Login');
                redirect('admin/login');
            } else {
                $data = [
                    'title' => 'Register | Pembayaran SPP'
                ];
                $this->load->view('admin/register', $data);
            }
        
        }
    }
}

/* End of file Register.php */

?>