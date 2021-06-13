<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputPetisiController extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('InputPetisiModel');
        $this->load->model('ManagePetisiModel');
    }
	
	public function index()
	{
        $content['main_view'] = 'InputPetisiView';
        $this->load->view('Body', $content);
	}

    public function edit($id_petisi)
	{
        $content['main_view'] = 'InputPetisiView';
        $content['data'] = $id_petisi;
        $this->load->view('Body', $content);
	}

    public function getDurasi($now) {
        $now = strtotime($now);
        $close = strtotime($this->input->post('durasi'));
        $durasi = $close - $now;
        return round((($durasi / 24) / 60) / 60);
    }

    public function editPetisi($id){
        $tgl_post = $this->InputPetisiModel->getPetisiById($id)->tgl_post;
        $data = array(
            'judul_petisi' => $this->input->post('judul_petisi'),
            'kebutuhan_dana' => $this->input->post('kebutuhan_dana'),
            'deskripsi' => $this->input->post('deskripsi'),
            'durasi_hari' => $this->getDurasi($tgl_post)
        );
        $this->ManagePetisiModel->editPetisi($id, $data);
        redirect(base_url('ManagePetisiController'));
    }


    public function addPetisi($username){
        $id_petisi = $this->InputPetisiModel->getLastIdPetisi();
        $date = date('Y-m-d');

        $data_1 = array(
            'id_petisi' =>  $id_petisi,
            'judul_petisi' => $this->input->post('judul_petisi'),
            'tgl_post' => $date,
            'kebutuhan_dana' => $this->input->post('kebutuhan_dana'),
            'deskripsi' => $this->input->post('deskripsi'),
            'durasi_hari' => $this->getDurasi($date)
        );
        
        $data_2 = array(
            'id_petisi' =>  $id_petisi,

            'username' => $username

        );
        $this->InputPetisiModel->addPetisiHalamanPetisi($data_1);
        $this->InputPetisiModel->addPetisiMelihat($data_2);
        redirect(base_url('ManagePetisiController'));
    }

}
?>