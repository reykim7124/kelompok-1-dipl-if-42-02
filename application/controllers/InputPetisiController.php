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

    public function addPetisi(){
        $data = array(
            'judul_petisi' => $this->input->post('judul_petisi'),
            'tgl_post' => $this->input->post('tgl_post'),
            'kebutuhan_dana' => $this->input->post('kebutuhan_dana'),
            'dana_terkumpul' => $this->input->post('dana_terkumpul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'durasi' => $this->input->post('durasi')
        );
        $this->InputPetisiModel->addPetisi($data);
    }
}
?>