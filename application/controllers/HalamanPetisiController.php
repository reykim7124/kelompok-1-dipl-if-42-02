<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanPetisiController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('HalamanPetisiModel');
    }

    public function index($id){
        $content['main_view'] = 'HalamanPetisiView';
        $content['data'] = $this->HalamanPetisiModel->detailPetisi($id);
        $this->load->view('Body', $content);
    }

    public function donasi($id) {
        $content['main_view'] = 'DonasiView';
        $content['data'] = $id;
        $content['title'] = $this->HalamanPetisiModel->detailPetisi($id)->judul_petisi;
        $this->load->view('Body', $content);
    }

    public function kirimDonasi() {
        $data = array(
            'jumlah_dana' => $this->input->post('jumlah_dana'),
            'tgl_transaksi' => date('Y-m-d'),
            'username' => $this->session->userdata('username')
        );

        $id_petisi = $this->input->post('id_petisi');
        $dana_terkumpul =  $this->HalamanPetisiModel->detailPetisi($id_petisi)->dana_terkumpul + $this->input->post('jumlah_dana');

        $this->HalamanPetisiModel->insertRiwayatTransaksi($data);
        $this->HalamanPetisiModel->insertCek($id_petisi);
        $this->HalamanPetisiModel->updatePetisi($id_petisi, $dana_terkumpul);
        redirect('HalamanPetisiController/index/'.$id_petisi);
    }
}

?>