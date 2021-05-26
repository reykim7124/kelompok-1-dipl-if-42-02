<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanPetisiController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('HalamanPetisiModel');
    }

    public function index(){
        $content['main_view'] = 'HalamanPetisiView';
        $this->load->view('Body', $content);
    }

    public function getPetisi($id) {
        $where = array('id_petisi' => $id);
        $data = $this->HalamanPetisiModel->detailPetisi('halaman_petisi', $where)->result();
        echo json_encode($data);
    }
}

?>