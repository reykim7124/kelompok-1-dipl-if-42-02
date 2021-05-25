<?php

class InputPetisiModel extends CI_model{
	
    public function addPetisi($data){
        return $this->db->insert('halaman_petisi',$data);
        }
        
?>