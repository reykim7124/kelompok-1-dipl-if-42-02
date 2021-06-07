<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestUnit extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
        $this->load->model('RegisterModel');
        $this->load->library('unit_test');
    }

    private function login($username, $password)
    {	
        if($username == '' || $password == '') {
            return true;
	    // Jika true maka akan di cek formnya 
        } else {
            $r = $this->LoginModel->check_username($username, $password);
            if($r[0]) {
                $this->session->set_userdata('username', $username);
                if ($this->LoginModel->check_usernameA($username, $password)) {
                    $this->session->set_userdata('role', 'admin');
                } else {
                    $this->session->set_userdata('user', $r[1][0]);
                    $this->session->set_userdata('role', 'user');
                }
                return array($this->session->userdata('username'), $this->session->userdata('role'));
            } else {
                return true;
            }
        }
    }

    private function register($username, $password)
    {   
        if($username == '' || $password == '') {
            return true;
        } else {
            $cek = $this->RegisterModel->check_username($username);
            if($cek){
                return array($username, $password);
            } else{
                return true;
            }
        }
    }

    public function testLogin()
    {
        $test = $this->login('reykim', '12347');
        $expected_result = 'is_array';
        $test_name = 'Path 1 - 2 - 3 - 4 - 5 - 6 - 7 - 8 - 10 - 11 - 13 - 14 - 15';
        echo $this->unit->run($test, $expected_result, $test_name);
    }

    public function testRegister()
    {
        $test = $this->register('user1123', '12347');
        $expected_result = 'is_array';
        $test_name = 'Path 1-2-3-5-6-7-9-10-11-12';
        echo $this->unit->run($test, $expected_result, $test_name);
    }


}
?>