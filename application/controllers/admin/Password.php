<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {

    
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
            // $this->form_validation->set_rules('passLama', 'Password Sekarang', 'required', ['required' => '%s Tidak Boleh Kosong']);
            $this->form_validation->set_rules('passBaru', 'Password', 'required|min_length[6]', ['required' => '%s Tidak Boleh Kosong', 'min_length' => '%s Minimal 6 Digit']);
            $this->form_validation->set_rules('rePassBaru', 'Re-Password', 'required|matches[passBaru]', ['required' => '%s Tidak Boleh Kosong', 'matches' => '%s Tidak Sama']);
            if ($this->form_validation->run() == TRUE) {
                $password = password_hash($this->input->post('passBaru'), PASSWORD_DEFAULT);
                $data = [
                    'id_users' => $this->session->userdata['id_users'],
                    'password' => $password
                ];
                $this->Users_model->Ubahpassword($data);
                $this->session->set_flashdata('password', 'Password Berhasil Diubah');
                redirect('admin/password');
                // var_dump($data);
            } else {
                $id = $this->session->userdata('id_users');
                $user = $this->Users_model->getUser($id);
                $data = [
                'title' => 'Password | Pembayaran SPP',
                'dataUser' => $user
                ];
                $this->load->view('admin/password', $data);
            }
        }
    }
}

/* End of file Password.php */

?>