<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagePetisiController extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('InputPetisiModel');
    }
	
	public function index()
	{
        $content['main_view'] = 'LandingView';
        $this->load->view('Body', $content);
	}

    public function editPetisi(){
        $id = $this->input->post('id_petisi');
        $data = array(
            'judul_petisi' => $this->input->post('judul_petisi'),
            'tgl_post' => $this->input->post('tgl_post'),
            'kebutuhan_dana' => $this->input->post('kebutuhan_dana'),
            'dana_terkumpul' => $this->input->post('dana_terkumpul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'durasi' => $this->input->post('durasi')
        );
        $this->ManagePetisiModel->editPetisi($id, $data);
    }

    public function addPetisi(){
        $id_petisi = $this->InputPetisiModel->getLastIdPetisi()+1;
        $data_1 = array(
            'id_petisi' =>  $id_petisi,
            'judul_petisi' => $this->input->post('judul_petisi'),
            'tgl_post' => $this->input->post('tgl_post'),
            'kebutuhan_dana' => $this->input->post('kebutuhan_dana'),
            'dana_terkumpul' => $this->input->post('dana_terkumpul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'durasi' => $this->input->post('durasi')
        );
        
        $data_2 = array(
            'id_petisi' =>  $id_petisi,
            'username' => $this->input->post('username')
        );
        $this->InputPetisiModel->addPetisiHalamanPetisi($data_1);
        $this->InputPetisiModel->addPetisiMelihat($data_2);
    }

}
?>