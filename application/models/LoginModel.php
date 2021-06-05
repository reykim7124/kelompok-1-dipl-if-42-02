<?php
// Class: LoginModel
// Class untuk melakukan pengecekan pada database user dan admin saat login
class LoginModel extends CI_model{
    public function getUser($username) {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->join('user','akun.username = user.username','INNER');
        $this->db->where('akun.username', $username);
        return $this->db->get()->result_array();
    }

	
	// Function : check_username
	// Fungsi untuk melakukan pengecekan username User saat login
    public function check_username($username, $password){
		// Membuat Query pengecekan username dan password
        $this->db->where('username',$username);
        $this->db->where('password',$password);
		
		// Menyimpan hasil query ke dalam variable result
        $result = $this->db->get('akun')->result_array();

		// Jika username dan password ditemukan maka return true, else false
        if(count($result)>0){
            $result = $this->getUser($username);
            return array(true, $result);
        }
        else{
            return array(false);
        }
    }
	
	// Function : check_usernameA
	// Fungsi untuk melakukan pengecekan username Admin saat login
    public function check_usernameA($username, $password){		
		// Membuat Query pengecekan username dan password
        $this->db->where('username', $username);
        $this->db->where('password', $password);
		
		// Menyimpan hasil query ke dalam variable result
        $result = $this->db->get('akun')->result_array();
		
		// Jika username dan password ditemukan maka return true, else false
        if(count($result) > 0) {
            $this->db->where('username', $username);
            $result = $this->db->get('admin')->result_array();
            if (count($result) > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
?>
