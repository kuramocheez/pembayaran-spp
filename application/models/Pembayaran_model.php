<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model {

    public function getPembayaran(){
        $this->db->select('*')
        ->from('transaksi')
        ->join('siswa', 'siswa.nis = transaksi.nis', 'left')
        ->join('users', 'users.id_users = transaksi.id_users', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahPembayaran(){
        
    }

}

/* End of file Pembayaran_model.php */

?>