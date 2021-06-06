<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RiwayatTransaksiController extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('RiwayatTransaksiModel');
    }
	
	public function index()
	{
        $content['main_view'] = 'RiwayatTransaksiView';
        $content['data'] = $this->RiwayatTransaksiModel->joinRiwayatUser($this->session->userdata('username'));
        $this->load->view('Body', $content);
	}
}
?>