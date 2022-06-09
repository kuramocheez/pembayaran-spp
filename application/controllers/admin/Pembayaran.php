<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

    public function index()
    {
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            $data = [
                'title' => 'Pembayaran | Pembayaran SPP'
            ];
            $this->load->view('admin/pembayaran', $data);
        }
    }

}

/* End of file Pembayaran.php */

?>