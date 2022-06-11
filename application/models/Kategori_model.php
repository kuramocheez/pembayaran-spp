<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    public function getKategori(){
        $this->db->select('*')
            ->from('kategori_spp');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahKategori($data){
        $this->db->insert('kategori_spp', $data);
    }

    public function getKategoriId($id){
        $this->db->where('id_kategori_spp', $id);
        $query = $this->db->get('kategori_spp');
        return $query->row_array();
    }

    public function ubahKategori($data){
        $this->db->where('id_kategori_spp', $data['id_kategori_spp']);
        $data = [
            'kategori_spp' => $data['kategori_spp'],
            'nominal' => $data['nominal']
        ];
        $this->db->update('kategori_spp', $data);
    }

    public function hapusKategori($id){
        $this->db->where('id_kategori_spp', $id);
        $this->db->delete('kategori_spp');
    }
}

/* End of file Kategori.php */

?>