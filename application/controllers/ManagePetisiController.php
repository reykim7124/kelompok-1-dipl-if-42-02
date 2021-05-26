<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagePetisiController extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('ManagePetisiModel');
    }
	
	public function index()
	{
        $content['main_view'] = 'ManagePetisiView';
        $this->load->view('Body', $content);
	}

    public function deletePetisi($id){
        $this->ManagePetisiModel->deletePetisi($id);
    }

    public function getAllPetisi() {
        echo json_encode($this->ManagePetisiModel->getAllPetisi());
    }
}
?>