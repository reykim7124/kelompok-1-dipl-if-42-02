<?php

class ManageAkunModel extends CI_model{
	
    public function getAllAkun(){
        $this->db->select('akun.username, user.nama');
        $this->db->from('user');
        $this->db->join('akun','akun.username = user.username','LEFT');
        return $this->db->get()->result_array();
    }

    public function deleteAkun($username){
        $this->db->where('username',$username);
        return $this->db->delete('akun');
    }
		
}
?>