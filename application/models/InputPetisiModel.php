<?php

class InputPetisiModel extends CI_model{
	
    public function addPetisiHalamanPetisi($data){
        return $this->db->insert('halaman_petisi',$data);
        }
    public function addPetisiMelihat($data){
        return $this->db->insert('melihat',$data)
    }
        
?>