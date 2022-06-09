<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    public function getKategori(){
        $this->db->select('*')
            ->from('kategori_spp');
        $query = $this->db->get();
        return $query->result_array();
    }


}

/* End of file Kategori.php */

?>