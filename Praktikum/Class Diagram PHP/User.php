<?php
    class User extends Akun {

        private $nik;
        private $nama;
        private $no_rekening;

        public function __construct($nik, $nama, $no_rekening) {
            $this->nik = $nik;
            $this->nama = $nama;
            $this->no_rekening = $no_rekening;
        }

        public function MembuatAkun() {
            // fungsi untuk membuat akun
        }

        public function MembuatHalPetisi() {
            // funsgi untuk membuat halaman petisi
        }

        public function UpdatePetisi() {
            // fungsi untuk membuat halaman petisi
        }

    }

?>