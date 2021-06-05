<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanPetisiModel extends CI_Model {
    public function detailPetisi($table, $where){
        return $this->db->get_where($table, $where)->row();
    }

}

?>