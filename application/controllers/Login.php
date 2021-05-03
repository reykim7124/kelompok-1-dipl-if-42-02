<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// class untuk Login 
class Login extends CI_Controller {
    // Fungsi untuk membangun objek
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }

	public function index()
	{
        $this->load->view('Login');
	}
    // Fungsi untuk melakukan pengecekan form login
    public function login()
    {
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        // Jika form_validation false maka akan menampilkan form, jika true maka akan di cek formnya 
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
