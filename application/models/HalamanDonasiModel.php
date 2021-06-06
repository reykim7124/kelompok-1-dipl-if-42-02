<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanDonasiModel extends CI_Model {
    public function detailDonasi($table, $where){
        return $this->db->get_where($table, $where)->row();
    }

}

?>