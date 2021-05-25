<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// class untuk berhasil login
class LandingController extends CI_Controller {
	public function index()
	{
        $content['main_view'] = 'LandingView';
        $this->load->view('Body', $content);
	}
}
