<?php

class LandingModel extends CI_Model{

    public function getAllPetisi(){
        return $this->db->get('halaman_petisi')->result();
    }
}