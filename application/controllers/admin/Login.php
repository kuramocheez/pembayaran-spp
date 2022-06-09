<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        
    }
    
    public function index()
    {
        if ($this->session->userdata('id_users')) {
            redirect('admin/home');
        }else{

        $this->form_validation->set_rules('username', 'Username', 'required',['required' => '%s Tidak Boleh Kosong']);
        $this->form_validation->set_rules('password', 'Password', 'required',['required' => '%s Tidak Boleh Kosong']);
        
        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $users = $this->Users_model->checkLogin($username);
            if($users){
                if (password_verify($password, $users['password'])){
                    
                    $array = array(
                        'id_users' => $users['id_users'],
                        'nama' => $users['nama'],
                        'foto' => $users['foto'],
                        'levelAkses' => $users['levelAkses']
                    );
                    $this->session->set_userdata($array);
                    redirect('admin/home');
                }else{
                    $this->session->set_flashdata('errLogin', 'Password Salah');
                    redirect('admin/login');
                }
            }else{
                $this->session->set_flashdata('errLogin', 'Username Tidak Terdaftar');
                redirect('admin/login');
            }
        } else {   
            $data = [
                'title' => 'Login | Pembayaran SPP'
            ];
            $this->load->view('admin/login', $data);
        }
        }
    }

}

/* End of file Login.php */

?>