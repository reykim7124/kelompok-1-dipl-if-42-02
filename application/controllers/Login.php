<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }

	public function index()
	{
        $this->load->view('Login');
	}

    public function login()
    {
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        
        if($this->form_validation->run() == false){
            $this->load->view('Login');
        } else {
            $cek = $this->LoginModel->check_username();
            if($cek){
                $username = $this->input->post('username');
                $this->session->set_userdata('username',$username);
                $this->load->view('Berhasil');
            }
            else{
                $this->load->view('Login');
            }
        }
    }
}
