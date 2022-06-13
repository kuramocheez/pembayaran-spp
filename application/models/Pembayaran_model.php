<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model {

    public function getPembayaran($limit, $start, $keyword = null){
        if ($keyword) {
            $this->db->like('namaSiswa', $keyword);
            $this->db->or_like('pembayaran_bulan', $keyword);
        }
        $this->db->select('*')
        ->join('siswa', 'siswa.nis = transaksi.nis', 'left')
        ->join('users', 'users.id_users = transaksi.id_users', 'left');
        $query = $this->db->get('transaksi', $limit, $start);
        return $query->result_array();
    }

    public function countPembayaran($keyword){
        if ($keyword) {
            $this->db->like('namaSiswa', $keyword);
            $this->db->or_like('pembayaran_bulan', $keyword);
        }
        $this->db->from('transaksi')
        ->join('siswa', 'siswa.nis = transaksi.nis', 'left')
        ->join('users', 'users.id_users = transaksi.id_users', 'left');
        return $this->db->count_all_results();
    }

    public function tambahPembayaran($data){
        $this->db->insert('transaksi', $data);
        $id = $this->db->insert_id();
        return $id;
    }

    public function getBuktiPembayaran($id){
        $this->db->select('*')
        ->from('transaksi')
        ->join('siswa', 'siswa.nis = transaksi.nis', 'left')
        ->join('kategori_spp', 'kategori_spp.id_kategori_spp = siswa.id_kategori_spp')
        ->join('users', 'users.id_users = transaksi.id_users', 'left')
        ->where('id_transaksi', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getPembayaranBySiswa($nis, $bulan){
        $this->db->select('*')
        ->from('transaksi')
        ->join('siswa', 'siswa.nis = transaksi.nis', 'left')
        ->join('kategori_spp', 'kategori_spp.id_kategori_spp = siswa.id_kategori_spp')
        ->join('users', 'users.id_users = transaksi.id_users', 'left')
        ->where('transaksi.nis', $nis)
        ->where('pembayaran_bulan', $bulan);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getPembayaranBySiswaAll($nis, $limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('pembayaran_bulan', $keyword);
            $this->db->or_like('semester', $keyword);
        }
        $this->db->select('*')
        ->join('siswa', 'siswa.nis = transaksi.nis', 'left')
        ->join('users', 'users.id_users = transaksi.id_users', 'left')
        ->where('transaksi.nis', $nis);
        $query = $this->db->get('transaksi', $limit, $start);
        return $query->result_array();
    }

    public function CountPembayaranBySiswaAll($nis, $keyword)
    {
        if ($keyword) {
            $this->db->like('pembayaran_bulan', $keyword);
            $this->db->or_like('semester', $keyword);
        }
        $this->db->from('transaksi')
        ->join('siswa', 'siswa.nis = transaksi.nis', 'left')
        ->join('users', 'users.id_users = transaksi.id_users', 'left')
        ->where('transaksi.nis', $nis);
        return $this->db->count_all_results();
    }

}

/* End of file Pembayaran_model.php */

?>