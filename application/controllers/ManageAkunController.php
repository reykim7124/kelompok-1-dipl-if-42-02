<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageAkunController extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('ManageAkunModel');
    }
	
	public function index()
	{
        $content['main_view'] = 'ManageAkunView';
        $content['data'] = $this->ManageAkunModel->getAllAkun();
        $this->load->view('Body', $content);
	}

    public function deleteAkun($username){
        $this->ManageAkunModel->deleteAkun($username);
    }
}
