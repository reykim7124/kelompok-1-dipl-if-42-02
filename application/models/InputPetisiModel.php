<?php

class InputPetisiModel extends CI_model{
	
    public function addPetisiHalamanPetisi($data){
        return $this->db->insert('halaman_petisi',$data);
        }
    public function addPetisiMelihat($data){
        return $this->db->insert('melihat',$data);
    }
    pubic function getLastIdPetisi(){
        return $this->db->select("id_petisi")->limit(1)->order_by('id_petisi',"DESC")->get("halaman_petisi")->row();
    }
?>