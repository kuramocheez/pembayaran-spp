<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function countSiswa(){
        $query = $this->db->query('SELECT * FROM siswa');
        return $query->num_rows();
    }
    public function countKategori(){
        $query = $this->db->query('SELECT * FROM kategori_spp');
        return $query->num_rows();
    }

}

/* End of file Home_model.php */

?>