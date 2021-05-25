<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// class : Login
class LoginController extends CI_Controller {
    // Fungsi : Constructor
    // Fungsi untuk membangun objek
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }
	// Fungsi index, untuk melakukan view login
	public function index()
	{
        $content['main_view'] = 'LoginView';
        $this->load->view('Body', $content);
	}
    // Fungsi : Login 	
    // Fungsi untuk melakukan pengecekan form login
    public function login()
    {	// Membuat form wajib diisi
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        // Jika form_validation false maka akan menampilkan form
        if($this->form_validation->run() == false){
            redirect(base_url('LoginController'));
	    // Jika true maka akan di cek formnya 
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if($this->LoginModel->check_username($username, $password)) {
                $this->session->set_userdata('username', $username);
                if ($this->LoginModel->check_usernameA($username, $password)) {
                    $this->session->set_userdata('role', 'admin');
                }
                redirect(base_url('LandingController'));
            } else {
                redirect(base_url('LoginController'));
            }
        }
    }

    public function logout() {
        session_destroy();
        redirect(base_url("LoginController"));
    }
}
