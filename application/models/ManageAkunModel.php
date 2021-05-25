<?php

class ManageAkun extends CI_model{
	
    public function getAllAkun(){
        return $this->db->get('akun')->result();
    }

    public function deleteAkun($username){
        $this->db->where('username',$username);
        return $this->db->delete('akun');
    }
		

?>