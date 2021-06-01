<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputPetisiController extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('InputPetisiModel');
    }
	
	public function index()
	{
        $content['main_view'] = 'InputPetisiView';
        $this->load->view('Body', $content);
	}

    public function editPetisi(){
        $id = $this->input->post('id_petisi');
        $data = array(
            'judul_petisi' => $this->input->post('judul_petisi'),
            // 'tgl_post' => $this->input->post('tgl_post'),
            'kebutuhan_dana' => $this->input->post('kebutuhan_dana'),
            // 'dana_terkumpul' => $this->input->post('dana_terkumpul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'durasi_hari' => $this->input->post('durasi')
        );
        $this->ManagePetisiModel->editPetisi($id, $data);
    }

    public function addPetisi(){
        $id_petisi = $this->InputPetisiModel->getLastIdPetisi();
        $now = time();
        $date = date('Y-m-d');
        $close = strtotime($this->input->post('durasi'));
        $durasi = $close - $now;
        $data_1 = array(
            'id_petisi' =>  $id_petisi,
            'judul_petisi' => $this->input->post('judul_petisi'),
            'tgl_post' => $date,
            'kebutuhan_dana' => $this->input->post('kebutuhan_dana'),
            // 'dana_terkumpul' => $this->input->post('dana_terkumpul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'durasi_hari' => round((($durasi / 24) / 60) / 60)
        );
        
        $data_2 = array(
            'id_petisi' =>  $id_petisi,
            'username' => $this->session->userdata('username')
        );
        $this->InputPetisiModel->addPetisiHalamanPetisi($data_1);
        $this->InputPetisiModel->addPetisiMelihat($data_2);
        redirect(base_url('ManagePetisiController'));
    }

}
?>