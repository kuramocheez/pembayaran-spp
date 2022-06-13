<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function addUser($data){
        $data = [
            'id_users' => '',
            'username' => $data['username'],
            'password' => $data['password'],
            'nama' => $data['nama'],
            'email' => $data['email'],
            'jenisKelamin' => '',
            'nomorTelpon' => '',
            'foto' => 'default.png',
            'levelAkses' => 'Petugas'
        ];
        $this->db->insert('users', $data);
    }
    public function checkLogin($username){
        $this->db->select('*');
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        return $query->row_array();
    }
    public function getUser($id){
        $this->db->select('*');
        $this->db->where('id_users', $id);
        $query = $this->db->get('users');
        return $query->row_array();
    }
    public function profile($data){
        $this->db->where('id_users', $data['id_users']);
        if(!isset($data['foto'])){
            $data = [
                'nama' => $data['nama'],
                'email' => $data['email'],
                'jenisKelamin' => $data['jenisKelamin'],
                'nomorTelpon' => $data['nomorTelpon']
            ];
        }else{
            $data = [
                'nama' => $data['nama'],
                'email' => $data['email'],
                'jenisKelamin' => $data['jenisKelamin'],
                'nomorTelpon' => $data['nomorTelpon'],
                'foto' => $data['foto']
            ];
        }
        $this->db->update('users', $data);
    }
    public function Ubahpassword($d){
        $data = [
            'password' => $d['password']
        ];
        $this->db->where('id_users', $d['id_users']);
        $this->db->update('users', $data);
    }
}

/* End of file Users_model.php */

?>