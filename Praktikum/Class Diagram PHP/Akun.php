<?php
    class Akun {
        private $username;
        private $password;
        private $email;
        private $no_hp;

        public function __construct($username, $password, $email, $no_hp) {
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->no_hp = $no_hp;
        }
        public function MencariHalPetisi(){
            // fungsi untuk mencari halaman petisi
        }

        public function MelihatHalPetisi(){
            // fungsi untuk melihat halaman petisi
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setNoHp($no_hp) {
            $this->no_hp = $no_hp;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getNoHp() {
            return $this->no_hp;
        }
        
        public function Login(){
            // fungsi untuk login
        }

        public function Logout() {
            // fungsi untuk logout
        }

    }

?>