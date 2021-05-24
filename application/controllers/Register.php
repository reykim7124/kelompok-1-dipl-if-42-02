<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Class Register
// Class untuk melakukan navigasi pada proses registrasi
class Register extends CI_Controller {

    // Function __construct
    // Fungsi konstruktor pada class
    public function __construct()
    {
        parent::__construct();
        // Load model "registerModel"
        $this->load->model('RegisterModel');
    }

    // Function Index
    // Fungsi untuk menampilkan halaman register
	public function index()
	{
        $this->load->view('Register');
	}

    // Function register
    // Fungsi untuk mmelakukan proses registrasi
    public function register()
    {
        // Menentukan rules dari form registrasi
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        
        // Jika rule form tidak terpenuhi maka load ulang halaman register
        if($this->form_validation->run() == false){
            $this->load->view('Register');
        } else { // Else lakukan registrasi ke database
            $cek = $this->registerModel->check_username();
            if($cek){
                $username = $this->input->post('username');
                $this->session->set_userdata('username',$username);
                $this->load->view('Berhasil');
            }
            else{
                $this->load->view('Register');
            }
        }
    }
}
