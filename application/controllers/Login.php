<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
    }
    
    public function index()
    {
        if ($this->session->userdata('siswa')) {
            redirect('home');
        } else {
            $this->form_validation->set_rules('nis', 'Nis', 'required', ['required' => '%s Tidak Boleh Kosong']);
            if ($this->form_validation->run() == TRUE) {
                $nis = $this->input->post('nis');
                $num = $this->Siswa_model->getSiswaPembayaran($nis);
                if($num == 1){
                    $data = [
                        'siswa' => $nis
                    ];
                    $this->session->set_userdata($data);
                    redirect('home');
                }else{
                    $this->session->set_flashdata('errLogin', 'Nis Tidak Terdaftar');
                    redirect('login');
                }
            } else {
                $data =[
                    'title' => 'Pembayaran SPP'
                ];
                $this->load->view('login', $data);
            }
            }
    }

    public function logout(){
        
        $this->session->unset_userdata('siswa');
        
        // $this->session->sess_destroy();
        redirect('login');
    }
}

/* End of file Controllername.php */
?>