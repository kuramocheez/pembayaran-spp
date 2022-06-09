<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

    public function getSiswa(){
        $this->db->select('*')
        ->from('siswa')
        ->join('kategori_spp', 'kategori_spp.id_kategori_spp = siswa.id_kategori_spp', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahSiswa($data){
        $this->db->insert('siswa', $data);        
    }

    public function getSiswaDetail($nis){
        $this->db->select('*')
        ->from('siswa')
        ->where('nis', $nis);
        $query = $this->db->get();
        return $query->result_array();
    }

}

/* End of file Siswa_model.php */

?>