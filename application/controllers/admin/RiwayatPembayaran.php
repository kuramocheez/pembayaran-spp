<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class RiwayatPembayaran extends CI_Controller {

    public function index()
    {
        if (!$this->session->userdata('id_users')) {
            redirect('admin');
        } else {
            $data = [
                'title' => 'Riwayat Pembayaran | Pembayaran SPP'
            ];
            $this->load->view('admin/riwayatPembayaran', $data);
        }
    }

}

/* End of file RiwayatPembayaran.php */

?>