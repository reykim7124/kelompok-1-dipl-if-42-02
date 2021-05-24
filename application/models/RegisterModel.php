<?php
// Class: registerModel
// Class untuk melakukan pengecekan pada database user saat melakukan register
class RegisterModel extends CI_model{

    // Function : check_username
	// Fungsi untuk melakukan pengecekan username User saat login
    public function check_username(){
        // Mendapatkan value username dan password dari view
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Membuat Query pengecekan username dan password
        $this->db->where('username',$username);
        $this->db->where('password',$password);

        // Menyimpan hasil query ke dalam variable result
        $result = $this->db->get('akun') -> result_array();

        // Jika username dan password tidak ditemukan maka return true, else false
        if(count($result)==0){
            return true;
        }
        else{
            return false;
        }
    }

    // Function : check_usernameA
	// Fungsi untuk melakukan pengecekan username Admin saat register
    public function check_usernameA(){
        // Mendapatkan value username dan password dari view
        $username = $this->input->post('username');
        $password = $this->input->post('password');
      
        // Membuat Query pengecekan username dan password
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        // Menyimpan hasil query ke dalam variable result
        $result = $this->db->get('admin') -> result_darray();
        
        // Jika username dan password tidak ditemukan maka return true, else false
        if(count($result)==0){
            return true;
        }
        else{
            return false;
        }
    }
}
?>