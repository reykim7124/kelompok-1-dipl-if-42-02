<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petisi extends CI_Controller {

    public function __construct() {
        
        parent::__construct();
        $this->load->model('MPetisi');
    }

    public function detail($id_petisi){
        $where = array('id_petisi' => $id_petisi);
        $data['petisi'] = $this->MdlPetisi->detailPetisi('halaman_petisi', $where)->result();

        $this->load->view('detailPetisi', $data);
    }
}

?>