<?php
// Class: registerModel
// Class untuk melakukan pengecekan pada database user saat melakukan register
class RegisterModel extends CI_model{

    // Function : check_username
	// Fungsi untuk melakukan pengecekan username User saat login
    public function check_username($username){
        // Membuat Query pengecekan username dan password
        $this->db->where('username',$username);

        // Menyimpan hasil query ke dalam variable result
        $result = $this->db->get('akun') -> result_array();

        // Jika username dan password tidak ditemukan maka return true, else false
        if(count($result) == 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function add_user($data1, $data2) {
        $this->db->insert('akun', $data1);
        $this->db->insert('user', $data2);
    }
}
?>