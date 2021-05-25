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
        $content['main_view'] = 'LandingView';
        $content['data'] = $this->ManagePetisiModel->getAllPetisi()
        $this->load->view('Body', $content);
	}

    
}
