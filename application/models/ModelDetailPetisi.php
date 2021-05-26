<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDetailPetisi extends CI_Model {
    
    public function getPetisi($table) {
        
        return $this->db->get($table);
    }

    public function detailPetisi($table, $where){

        return $this->db->get_where($table, $where);
    }

}

?>