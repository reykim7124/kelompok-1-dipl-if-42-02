<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanPetisiController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('HalamanPetisiModel');
    }

    public function index($id){
        $where = array('id_petisi' => $id);
        $content['main_view'] = 'HalamanPetisiView';
        $content['data'] = $this->HalamanPetisiModel->detailPetisi('halaman_petisi', $where);
        $this->load->view('Body', $content);
    }

    public function donasi($id) {
        $where = array('id_petisi' => $id);
        $content['main_view'] = 'DonasiView';
        $content['data'] = $id;
        $content['title'] = $this->HalamanPetisiModel->detailPetisi('halaman_petisi', $where)->judul_petisi;
        $this->load->view('Body', $content);
    }
}

?>