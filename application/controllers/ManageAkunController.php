<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagePetisiController extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('ManageAkunModel');
    }
	
	public function index()
	{
        $content['main_view'] = 'LandingView';
        $content['data'] = $this->ManageAkunModel->getAllAkun();
        $this->load->view('Body', $content);
	}

    public function deleteAkun(){
        $username = $this->input->post('username');
        $this->ManageAkunModel->deleteAkun($username);
    }
}
