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

    public function countSiswa($keyword){
        if ($keyword) {
            $this->db->like('namaSiswa', $keyword);
            $this->db->or_like('nis', $keyword);
        }
        $this->db->from('siswa');
        return $this->db->count_all_results();
    }

    public function getSiswaPage($limit, $start, $keyword = null){
        if ($keyword){
            $this->db->like('namaSiswa', $keyword);
            $this->db->or_like('nis', $keyword);
        }
        $this->db->join('kategori_spp', 'kategori_spp.id_kategori_spp = siswa.id_kategori_spp','left');
        return $this->db->get('siswa', $limit, $start)->result_array();
    }

    public function tambahSiswa($data){
        $this->db->insert('siswa', $data);        
    }

    public function getSiswaDetail($nis){
        $this->db->select('*')
            ->from('siswa')
            ->join('kategori_spp', 'kategori_spp.id_kategori_spp = siswa.id_kategori_spp', 'left')
            ->where('nis', $nis);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function ubahSiswa($data){
        $this->db->where('nis', $data['nis']);
        $dataSiswa = [
            'namaSiswa' => $data['namaSiswa'],
            'jenisKelamin' => $data['jenisKelamin'],
            'nomorTelpon' => $data['nomorTelpon'],
            'kelas' => $data['kelas'],
            'id_kategori_spp' => $data['id_kategori_spp'],
        ];
        $this->db->update('siswa', $dataSiswa);
    }

    public function deleteSiswa($nis){
        $this->db->where('nis', $nis);
        $this->db->delete('siswa');
    }

    public function getSiswaPembayaran($nis){
        $this->db->where('nis', $nis);
        return $this->db->get('siswa')->num_rows();
    }

}

/* End of file Siswa_model.php */

?>