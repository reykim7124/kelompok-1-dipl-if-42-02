<?php
class LoginModel extends CI_model{

    public function check_username(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('akun') -> result_array();

        if(count($result)>0){
            return true;
        }
        else{
            return false;
        }
    }

    public function check_usernameA(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        print($username);
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('admin') -> result_array();

        if(count($result)>0){
            return true;
        }
        else{
            return false;
        }
    }
}
?>